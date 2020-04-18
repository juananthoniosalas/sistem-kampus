@extends('layouts.adminmain')

@section('content')
<section class="section">

  <div class="section-header">
    <h1>Jurusan</h1>
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
                      <a href="/jurusan/tambah" class="btn btn-primary">Tambah Jurusan</a>
                        <a href="/jurusan/index" class="btn btn-primary">Kembali</a>
                          <a href="/jurusan/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
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
                                <th>Nama Jurusan</th>
                                <th>Nama Fakultas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($jurusan as $no => $j)
                            <tr>

                                <td>{{ ++$no + ($jurusan->currentPage()-1) * $jurusan->perPage() }}</td>
                                <td>{{ $j->name }}</td>
                                <td>{{ $j->fakultas->name }}</td>
                                <td>
                                  <a href="/jurusan/edit/{{ $j->id }}" class="btn btn-warning">Edit</a>
                                  <a href="/jurusan/hapus/{{ $j->id }}" class="btn btn-danger">Hapus</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br/>
                  Halaman : {{ $jurusan->currentPage() }} <br/>
                  Jumlah Jurusan : {{ $jurusan->total() }} <br/>
                   {{ $jurusan->links() }}
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

    </section>
    @endsection()
