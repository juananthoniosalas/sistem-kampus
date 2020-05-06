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
                      <div class="min-vh-100 pt-5">
    <div class="d-flex justify-content-around mb-5">
	    <div class="col-12 col-md-6 col-lg-4">
	    <a href="/fakultas/index" class="nounderline">
	      <div class="card text-secondary shadow-sm rounded">
	        <div class="card-header">
	          <i id="micon" class="fas fa-archway my-auto" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Fakultas</h4>
	            <h3 align="center">{{ $totalfakultas }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	    <div class="col-12 col-md-6 col-lg-4">
	    <a href="/jurusan/index" class="nounderline">
	      <div class="card text-secondary shadow-sm rounded">
	        <div class="card-header">
	          <i id="micon" class="fas fa-book-open my-auto" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Jurusan</h4>
	            <h3 align="center">{{ $totaljurusan }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	</div>
	<div class="d-flex justify-content-around">
	    <div class="col-12 col-md-6 col-lg-4">
	    <a href="/ruangan/index" class="nounderline">
	      <div class="card text-secondary shadow-sm rounded">
	        <div class="card-header">
	          <i id="micon" class="fas fa-door-open my-auto" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Ruangan</h4>
	            <h3 align="center">{{ $totalruangan }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	    <div class="col-12 col-md-6 col-lg-4">
	    <a href="/barang/index" class="nounderline">
	      <div class="card text-secondary shadow-sm rounded">
	        <div class="card-header">
	          <i id="micon" class="fas fa-cubes my-auto" aria-hidden="true"></i>
	          <div class="ml-auto">
	            <h4>Total Barang</h4>
	            <h3 align="center">{{ $totalbarang }}</h3>
	          </div>
	        </div>
	      </div>
	    </a>
	    </div>
	</div>
</div>
</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
