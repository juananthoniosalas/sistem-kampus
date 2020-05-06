<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jurusan;
use App\Exports\JurusanExport;
use Maatwebsite\Excel\Facades\Excel;

class JurusanController extends Controller
{
  public function index(Request $request){

       $jurusan = Jurusan::when($request->search, function ($query) use ($request) {
           $query->where('name', 'LIKE', '%' . $request->search . '%');
       })->paginate(5);


       return view('jurusan.index', compact('jurusan'));
}
public function export_excel()
   {
     return Excel::download(new JurusanExport, date("Y-m-d").'-Data Jurusan'.'.xlsx');
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
