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
                        <a href="/barang/index" class="btn btn-primary">Kembali</a>
                        <a href="/barang/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                      </div>
                      <form method="GET" class="form-inline">
                    <form method="GET" class="form-inline">
                      <div class="form-group">
                        <input type="text" name="searchInput" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </div>
                    </form>
                    <br><br>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Ruangan</th>
                                <th>Nama Barang</th>
                                <th>Total</th>
                                <th>Jumlah Rusak</th>
                                <th>Dibuat Oleh</th>
                                <th>Diupdate Oleh</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($barang as $no => $b)
                            <tr>

                                <td>{{ ++$no + ($barang->currentPage()-1) * $barang->perPage() }}</td>
                                <td>{{ $b->ruangan->name }}</td>
                                <td>{{ $b->name }}</td>
                                <td>{{ $b->total }}</td>
                                <td>{{ $b->broken }}</td>
                                <td>{{ $b->user->name }}</td>
                                <td>{{ $b->updated_by }}</td>

                                <td>
                                  <a href="/barang/edit/{{ $b->id }}" class="btn btn-warning">Edit</a>
                                  <a href="/barang/hapus/{{ $b->id }}" class="btn btn-danger" onclick="return confirm('Anda ingin menghapus barang {{ $b->name}} ?')">Delete</a></td>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
