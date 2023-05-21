<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Helpers\Fungsi;
// use Exception;
Use Alert;
use DB;
use Excel;
use PDF;

use App\Models\barang;
use App\Imports\uploadfile;

class BarangController extends Controller
{
    public function index(Request $request){

        $query = barang::query();
            $session_['kategori']   = "";
            $session_['plu']        = "";
            $session_['item']       = "";
            $session_['keterangan'] = "";
            $session_['stock']      = "";
            $session_['order']      = "";
            $ecnd_session           = "";

            if($request->kategori){
                $query = $query->where('kategori', $request->kategori); 
                $session_['kategori']   = $request->kategori;   
            }
            if($request->plu){
                $query = $query->orwhere('kode_barang', 'like', $request->plu);
                $session_['plu']   = $request->plu;
            }
            if($request->item){
                $query = $query->orwhere('nama_barang', 'like', $request->item);
                $session_['item']  = $request->item;
            }
            if($request->keterangan){
                $query = $query->orwhere('keterangan', 'like', $request->keterangan);
                $session_['keterangan'] = $request->keterangan;
            }
            if($request->stock){
                $query = $query->orwhere('qty', '>=', $request->stock)->where('qty', '>', 0);
                $session_['stock'] = $request->stock;
            }
            if($request->order){
                $query = $query->orderby($request->order, 'asc');
                $session_['order'] = $request->order;
            }
            $query = $query->get();

        $ecnd_session = json_encode($session_);
        // dd($ecnd_session);
        Session::put('ecnd_session', $ecnd_session);
        $query_kategori = barang::select('kategori')->groupby('kategori')->orderby('kategori')->get();

        return view('content.barang.index', compact('query', 'query_kategori'));
    }
    public function upload(Request $request){
        $request->validate([
            'import_file'   => 'required|mimes:xlx,xlsx',
        ],
        [
            'import_file.required'  => 'Anda belum memilih file',
            'import_file.mimes'     => 'File harus berupa excel',
        ]);

        DB::beginTransaction();

        try {

            $data = Excel::import(new uploadfile, request()->file('import_file'));

            DB::commit();   
        } catch (Exception $e) {
            DB::rollback();
            Alert::error('Error', Fungsi::msgerror());
            return redirect()->route('barang.index');
        }

        Alert::success('Sukses', 'Berhasil upload file');
        return redirect()->route('barang.index');
        
    }

    public function download(Request $request){
        $ecnd_session = Session::get('ecnd_session');
        $js_ecnd_session = json_decode($ecnd_session,true);
        // dd($js_ecnd_session);
        
        $query = barang::query();

            if($js_ecnd_session['kategori']){
                $query = $query->where('kategori', $js_ecnd_session['kategori']);
            }
            if($js_ecnd_session['plu']){
                $query = $query->orwhere('kode_barang', 'like', $js_ecnd_session['plu']);
            }
            if($js_ecnd_session['item']){
                $query = $query->orwhere('nama_barang', 'like', $js_ecnd_session['item']);
            }
            if($js_ecnd_session['keterangan']){
                $query = $query->orwhere('keterangan', 'like', $js_ecnd_session['keterangan']);
            }
            if($js_ecnd_session['stock']){
                $query = $query->orwhere('qty', '>=', $js_ecnd_session['stock'])->where('qty', '>', 0);
            }
            if($js_ecnd_session['order']){
                $query = $query->orderby($js_ecnd_session['order'], 'asc');
            }
            $query = $query->get();

        foreach($query as $qe){
            $download_sql['kategori']           = $qe->kategori;
            $download_sql['kode_barang']        = $qe->kode_barang;
            $download_sql['nama_barang']        = $qe->nama_barang;
            $download_sql['jenis_kendaraan']    = $qe->keterangan;
            $download_sql['h_jual']             = $qe->harga;

            $download[] = $download_sql;
        }

        $grouped_array = array();
        foreach ($download as $element) {
            $grouped_array[$element['kategori']][] = $element;
        }
        // $request->session()->flush();

        $pdf = PDF::loadView('content.pdf.pdf_price_list', [ 'grouped_array' => $grouped_array ]);

        // $customPaper = array(0,0,283.80,670);
        $pdf->setPaper('A4', 'portrait');
        $pdf->output();
        $dom_pdf = $pdf->getDomPDF();

        // $font = Font_Metrics::get_font("helvetica", );
        $canvas = $dom_pdf ->get_canvas();
        $canvas->page_text(40, 19, "Price List                                                                        ".Carbon::now()->format('d/m/Y')."            {PAGE_NUM} / {PAGE_COUNT}", "bold", 12, array(0, 0, 0));
        // $pdf->page_text(72, 18, "{PAGE_NUM} / {PAGE_COUNT}", null, 10, array(0, 0, 0));
            
        $filename = 'price_list_'.Carbon::now()->format('Y-m-d').'.pdf';

        return $pdf->download($filename);
    }
    
}
