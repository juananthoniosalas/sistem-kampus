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
                  <h2>Edit Fakultas</h2>
                </div>
                <div class="card-body">
                    <a href="/fakultas/index" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>


                    <form method="post" action="/fakultas/update/{{ $fakultas->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <h4><label>Nama</label></h4>
                            <input type="text" name="name" class="form-control" placeholder="Nama pegawai .." value=" {{ $fakultas->name }}">

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
