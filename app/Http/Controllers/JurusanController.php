<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;

class JurusanController extends Controller
{
  public function index(){
    $jurusan = Jurusan::all();
    return view('/jurusan/index', ['jurusan' => $jurusan]);

    $jurusan = Jurusan::when($request->search, function($query) use($request){
        $query->where('name', 'LIKE', '%'.$request->search);
    })->get();

    return view('jurusan.index', compact('data'));
  }



  public function tambah(){
  return view('/jurusan/tambah');
}

public function store(Request $request){
  $this->validate($request,[
    'fakultas_id' => 'required',
    'name' => 'required'
  ]);

    Jurusan::create([
    'fakultas_id' => $request->fakultas_id,
    'name' => $request->name
  ]);

  return redirect('/jurusan/index');
}

public function edit($id){
$jurusan = Jurusan::find($id);
return view('/jurusan/edit', ['jurusan' => $jurusan]);
}

public function update($id, Request $request)
{
 $this->validate($request,[
  'fakultas_id' => 'required',
  'name' => 'required'
 ]);

 $jurusan = Jurusan::find($id);
 $jurusan->name = $request->name;
 $jurusan->fakultas_id = $request->fakultas_id;
 $jurusan->save();
 return redirect('/jurusan/index');
}

public function delete($id)
{
 $jurusan = Jurusan::find($id);
 $jurusan->delete();
 return redirect('/jurusan/index');
}
}
