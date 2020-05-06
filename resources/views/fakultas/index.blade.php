@extends('layouts.adminmain')

@section('content')
<section class="section">

  <div class="section-header">
    <h1>Fakultas</h1>
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
                      <a href="/fakultas/tambah" class="btn btn-primary">Tambah Fakultas</a>
                      <a href="/fakultas/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                      <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			                     IMPORT EXCEL
		                   </button>
                      </div>

                      <!-- Import Excel -->
              		<div class="modal fade" id="importExcel" tabindex="-1" data-backdrop="false" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              			<div class="modal-dialog" role="document">
              				<form method="post" action="{{ url('/fakultas/import') }}" enctype="multipart/form-data">
              					<div class="modal-content">
              						<div class="modal-header">
              							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
              						</div>
              						<div class="modal-body">

              							{{ csrf_field() }}

              							<label>Pilih file excel</label>
              							<div class="form-group">
              								<input type="file" name="file" required="required" name="excel" accept=".xls, .xlsx">
              							</div>

              						</div>
              						<div class="modal-footer">
              							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              							<button type="submit" class="btn btn-primary">Import</button>
              						</div>
              					</div>
              				</form>
              			</div>
              		</div>

                    <form method="GET" class="form-inline">
                      <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->get('search') }}">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Search</button>
                      </div>
                    </form>
                    <br><br>


                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Nama Fakultas</th>
                                <th scope="col">Code Fakultas</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($fakultas as $no => $f)

                            <tr>
                                <td>{{ ++$no + ($fakultas->currentPage()-1) * $fakultas->perPage() }}</td>
                                <td>{{ $f->name }}</td>
                                <td>{{ $f-> id}}</td>
                                <td>
                                  <a href="/fakultas/edit/{{ $f->id }}" class="btn btn-warning">Edit</a>
                                  <a href="/fakultas/hapus/{{ $f->id }}" class="btn btn-danger">Hapus</a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br/>
	                   Halaman : {{ $fakultas->currentPage() }} <br/>
	                   Jumlah Fakultas : {{ $fakultas->total() }} <br/>
	                    {{ $fakultas->links() }}
                </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection
