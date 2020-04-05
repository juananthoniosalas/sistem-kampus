<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Fakultas;

class FakultasController extends Controller
{

      public function index(){
       $fakultas = DB::table('fakultas')->paginate(5);
       return view('/fakultas/index', ['fakultas' => $fakultas]);
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
