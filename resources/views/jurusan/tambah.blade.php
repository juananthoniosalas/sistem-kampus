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
                    <h3>Tambah Jurusan</h3>
                </div>
                <div class="card-body">
                    <a href="/jurusan/index" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/jurusan/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Id Fakultas</label>
                            <input type="text" name="fakultas_id" class="form-control" placeholder="Id Fakultas">

                            @if($errors->has('fakultas_id'))
                                <div class="text-danger">
                                    {{ $errors->first('fakultas_id')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Jurusan</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Jurusan">

                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
@endsection
