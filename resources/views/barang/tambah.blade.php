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
                    <h3>Tambah Barang</h3>
                </div>
                <div class="card-body">
                    <a href="/barang/index" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>

                    <form method="post" action="/barang/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Id Ruangan</label>
                            <input type="text" name="ruangan_id" class="form-control" placeholder="Id Ruangan ..">

                            @if($errors->has('ruangan_id'))
                                <div class="text-danger">
                                    {{ $errors->first('ruangan_id')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Barang ..">

                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" name="total" class="form-control" placeholder="Total .." >

                            @if($errors->has('total'))
                                <div class="text-danger">
                                    {{ $errors->first('total')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <label>Broken</label>
                            <input type="text" name="broken" class="form-control" placeholder="Broken .." >

                            @if($errors->has('broken'))
                                <div class="text-danger">
                                    {{ $errors->first('broken')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Created By</label>
                            <input type="text" name="created_by" class="form-control" placeholder="Created By .. " value="{{ Auth::user()->name }}" readonly hidden>

                          

                        </div>

                        <div class="form-group">
                            <label>Updated By</label>
                            <input type="text" name="updated_by" class="form-control" placeholder="Updated By .." value="-" readonly hidden>



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
