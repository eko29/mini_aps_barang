<?php
namespace App\Imports;
use App\Models\barang;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Auth;

class uploadfile implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        $brg = new barang;
        $brg->kategori    = $row[0] ?? '';
        $brg->kode_barang = $row[1] ?? '';
        $brg->nama_barang = $row[2] ?? '';
        $brg->keterangan  = $row[3] ?? '';
        $brg->qty         = $row[4] ?? '';
        $brg->harga       = $row[5] ?? '';
        $brg->save();
    }
    public function startRow(): int
    {
        return 2;
    }

}