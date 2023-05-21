@extends('layouts.default')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item">Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">View Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{ route('barang.upload') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="uploadfile">Upload file <code>*)</code></label>
                    <input type="file" name="import_file" class="form-control @error('import_file') is-invalid @enderror" id="import_file">
                    @error('import_file')
                      <div class="invalid-feedback"> {{$message}}</div>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                        <button type="submit" name="proses" class="btn btn-primary">Proses</button>
                  </div>
                </form>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <form action="{{ route('barang.search') }}" method="POST">
                      @csrf
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="exampleInputkategori<">Kategori</label>
                              <select name="kategori" class="form-control select2" style="width: 100%;">
                                <option value="">All</option>
                                @forelse($query_kategori as $kategori)
                                  <option value="{{ $kategori->kategori }}">{{ $kategori->kategori }}</option>
                                @empty
                                @endforelse
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="exampleInputPLU">PLU</label>
                              <input type="text" name="plu" class="form-control " id="exampleInputPLU">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="exampleInputitem">Nama Item</label>
                              <input type="text" name="item" class="form-control" id="exampleInputitem">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="exampleInputketerangan">Keterangan</label>
                              <textarea cols="5" rows="5" name="keterangan" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="exampleInputStock">Stock</label>
                              <input type="text" name="stock" class="form-control" id="exampleInputStock">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label for="exampleInputOrder">Order</label>
                              <select name="order" class="form-control select2" style="width: 100%;">
                                <option value=""></option>
                                <option value="plu">PLU</option>
                                <option value="nama_barang">Nama Barang</option>
                                <option value="keterangan">Keterangan</option>
                              </select>
                            </div>
                          </div>                      
                          <div class="col-md-3">
                            <div class="form-group">
                              <br>
                              <button type="submit" name="proses" class="btn btn-primary">Proses</button>
                              <a href="{{ route('barang.download') }}" class="btn btn-success">
                                <i class="fas fa-download"></i>
                                Download
                              </a>
                            </div>
                          </div>
                      </div>
                    </form>
                  </div>              
                </div>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>PLU</th>
                      <th>Nama Item</th>
                      <th>Kategori</th>
                      <th>Keterangan</th>
                      <th>Qty</th>
                      <th>Harga</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @forelse($query as $qe)
                      <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $qe->kode_barang }}</td>
                        <td>{{ $qe->nama_barang }}</td>
                        <td>{{ $qe->kategori }}</td>
                        <td>{{ $qe->keterangan }}</td>
                        <td>{{ $qe->qty }}</td>
                        <td>{{ Fungsi::rupiah($qe->harga) }}</td>
                      </tr>
                      @php $no++; @endphp
                    @empty
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
