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
                    <h3>Tambah ruangan</h3>
                </div>
                <div class="card-body">
                    <a href="/ruangan/index" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/ruangan/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Id Ruangan</label>
                            <input type="text" name="jurusan_id" class="form-control" placeholder="Id Jurusan">

                            @if($errors->has('jurusan_id'))
                                <div class="text-danger">
                                    {{ $errors->first('jurusan_id')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Ruangan</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Ruangan">

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
