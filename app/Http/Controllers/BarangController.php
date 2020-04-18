<?php

namespace App\Http\Controllers;
use App\Ruangan;
use App\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
<<<<<<< Updated upstream
use App\Exports\BarangExport;
use Maatwebsite\Excel\Facades\Excel;
=======
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BarangExport;

class BarangController extends Controller{

  public function index(Request $request)
  {
   $barang = Barang::when($request->search, function ($query) use ($request) {
       $query->where('name', 'LIKE', '%' . $request->search . '%');
   })->paginate(5);

   return view('barang.index', compact('barang'));
}
>>>>>>> Stashed changes


  public function export_excel()
  	{
<<<<<<< Updated upstream
  		return Excel::download(new BarangExport, 'barang-'.date("Y-m-d").'.xlsx');
  	}
=======
  		return Excel::download(new BarangExport, date("Y-m-d").'-Data Barang'.'.xlsx');
  	}

>>>>>>> Stashed changes

  public function tambah(){
    return view('/barang/tambah');
   }

public function store(Request $request){
  $this->validate($request,[
    'ruangan_id' => 'required',
    'name' => 'required',
    'total' => 'required',
    'broken' => 'required',

  ]);

    Barang::create([
    'ruangan_id' => $request->ruangan_id,
    'name' => $request->name,
    'total' => $request->total,
    'broken' => $request->broken,
    'created_by' => $request->created_by,
    'updated_by' => $request->updated_by
  ]);

  return redirect('/barang/index');
}

public function edit($id){
$barang = Barang::find($id);
return view('/barang/edit', ['barang' => $barang]);
}

public function update($id, Request $request)
{
 $this->validate($request,[
   'ruangan_id' => 'required',
   'name' => 'required',
   'total' => 'required',
   'broken' => 'required',
   'created_by' => 'required',
   'updated_by' => 'required'
 ]);

 $barang = Barang::find($id);
 $barang->ruangan_id = $request->ruangan_id;
 $barang->name = $request->name;
 $barang->total = $request->total;
 $barang->broken = $request->broken;
 $barang->created_by = $request->created_by;
 $barang->updated_by = $request->updated_by;
 $barang->save();
 return redirect('/barang/index');
}

public function delete($id)
{
 $barang = Barang::find($id);
 $barang->delete();
 return redirect('/barang/index');
}
}
