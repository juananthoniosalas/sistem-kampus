@extends('layouts.adminmain')

@section('content')
<section class="section">

  <div class="section-header">
    <h1>Dashboard</h1>
  </div>

  <div class="section-body">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="container">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h2 class="mb-0 site-logo">Dashboard</h2>
                    </div>
                    <div class="card-body">
                      <a href="/fakultas/index" class="btn btn-info">Fakultas</a>
                        <a href="/jurusan/index" class="btn btn-info">Jurusan</a>
                          <a href="/ruangan/index" class="btn btn-info">Ruangan</a>
                            <a href="/barang/index" class="btn btn-info">Barang</a>

                    <br><br>



                    <br/>

                </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection
