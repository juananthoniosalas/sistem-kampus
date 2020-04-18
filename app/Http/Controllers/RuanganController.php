<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;
use Illuminate\Support\Facades\DB;
use App\Exports\RuanganExport;
use Maatwebsite\Excel\Facades\Excel;

class RuanganController extends Controller
{
  public function index(Request $request){

       $ruangan = Ruangan::when($request->search, function ($query) use ($request) {
           $query->where('name', 'LIKE', '%' . $request->search . '%');
       })->paginate(5);

       return view('ruangan.index', compact('ruangan'));
   }

   public function export_excel()
   	{
   		return Excel::download(new RuanganExport, date("Y-m-d").'-Data Ruangan'.'.xlsx');
   	}

  public function tambah(){
  return view('/ruangan/tambah');
}

public function store(Request $request){
  $this->validate($request,[
    'jurusan_id' => 'required',
    'name' => 'required'
  ]);

    Ruangan::create([
    'jurusan_id' => $request->jurusan_id,
    'name' => $request->name
  ]);

  return redirect('/ruangan/index');
}

public function edit($id){
$ruangan = Ruangan::find($id);
return view('/ruangan/edit', ['ruangan' => $ruangan]);
}

public function update($id, Request $request)
{
 $this->validate($request,[
  'jurusan_id' => 'required',
  'name' => 'required'
 ]);

 $ruangan = Ruangan::find($id);
 $ruangan->name = $request->name;
 $ruangan->jurusan_id = $request->jurusan_id;
 $ruangan->save();
 return redirect('/ruangan/index');
}

public function delete($id)
{
 $ruangan = Ruangan::find($id);
 $ruangan->delete();
 return redirect('/ruangan/index');
}
}
