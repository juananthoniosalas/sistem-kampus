@extends('layouts.adminmain')

@section('content')
<section class="section">

  <div class="section-header">
    <h1>Ruangan</h1>
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
                      <a href="/ruangan/tambah" class="btn btn-primary">Tambah ruangan</a>
                          <a href="/ruangan/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                      </div>
                      <form method="GET" class="form-inline">
                    <form method="GET" class="form-inline">
                      <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
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
                                <th>Nama Jurusan</th>
                                <th> Code Ruangan </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($ruangan as $no => $r)
                            <tr>

                                <td>{{ ++$no + ($ruangan->currentPage()-1) * $ruangan->perPage() }}</td>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->jurusan->name }}</td>
                                <td>{{ $r-> id}}</td>
                                <td>
                                  <a href="/ruangan/edit/{{ $r->id }}" class="btn btn-warning">Edit</a>
                                  <a href="/ruangan/hapus/{{ $r->id }}" class="btn btn-danger" onclick="return confirm('Anda ingin menghapus Ruang {{ $r->name}} ?')">Delete</a></td>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br/>
                  Halaman : {{ $ruangan->currentPage() }} <br/>
                  Jumlah Ruangan : {{ $ruangan->total() }} <br/>
                   {{ $ruangan->links() }}
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

    </section>
    @endsection()
