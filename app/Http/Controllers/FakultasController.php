<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Fakultas;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\FakultasExport;

class FakultasController extends Controller
{

  public function index(Request $request)
  {
   $fakultas = Fakultas::when($request->search, function ($query) use ($request) {
       $query->where('name', 'LIKE', '%' . $request->search . '%');
   })->paginate(5);

   return view('fakultas.index', compact('fakultas'));
}

  public function export_excel()
  	{
  		return Excel::download(new FakultasExport, date("Y-m-d").'-Data Fakultas'.'.xlsx');
  	}

     public function tambah(){
     return view('/fakultas/tambah');
   }

   public function store(Request $request){
     $this->validate($request,[
       'name' => 'required'
     ]);

       Fakultas::create([
       'name' => $request->name
     ]);

     return redirect('/fakultas/index');
   }

   public function edit($id){
   $fakultas = Fakultas::find($id);
   return view('/fakultas/edit', ['fakultas' => $fakultas]);
}

public function update($id, Request $request)
{
    $this->validate($request,[
	   'name' => 'required',
    ]);

    $fakultas = Fakultas::find($id);
    $fakultas->name = $request->name;
    $fakultas->save();
    return redirect('/fakultas/index');
}

public function delete($id)
{
    $fakultas = Fakultas::find($id);
    $fakultas->delete();
    return redirect('/fakultas/index');
}


  }
