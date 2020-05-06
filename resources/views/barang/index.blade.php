@extends('layouts.adminmain')

@section('content')
<section class="section">

  <div class="section-header">
    <h1>Barang</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="container">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h2 class="mb-0 site-logo">PROJECT</h2>
                    </div>
                    <div class="card-body">
                      <a href="/barang/tambah" class="btn btn-primary">Tambah Barang</a>
                        <a href="/barang/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                      </div>
                    <form method="GET" class="form-inline" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="text" name="searchInput" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </div>
                    </form>
                    <br><br>
                    <br/>
                    <div class="table-responsive-xl">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Nama Ruangan</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Foto Barang</th>
                                <th scope="col">Total</th>
                                <th scope="col">Jumlah Rusak</th>
                                <th scope="col">Dibuat Oleh</th>
                                <th scope="col">Diupdate Oleh</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($barang as $no => $b)
                            <tr>
                                <td>{{ ++$no + ($barang->currentPage()-1) * $barang->perPage() }}</td>
                                <td>{{ $b->ruangan->name }}</td>
                                <td>{{ $b->name }}</td>
                                <td><img width="100px" src="{{ url('/imagee/'.$b->file) }}"></td>
                                <td>{{ $b->total }}</td>
                                <td>{{ $b->broken }}</td>
                                <td>{{ $b->created_by }}</td>
                                <td>{{ $b->updated_by }}</td>

                                <td>
                                  <a href="/barang/edit/{{ $b->id }}" class="btn btn-warning">Edit</a>
                                  <a href="/barang/hapus/{{ $b->id }}" class="btn btn-danger" onclick="return confirm('Anda ingin menghapus barang {{ $b->name}} ?')">Delete</a></td>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                    <br/>
                  Halaman : {{ $barang->currentPage() }} <br/>
                  Jumlah Barang : {{ $barang->total() }} <br/>
                   {{ $barang->links() }}

                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

    </section>
    @endsection()
