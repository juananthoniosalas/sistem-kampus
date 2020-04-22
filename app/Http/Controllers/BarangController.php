<?php

namespace App\Http\Controllers;
use App\Ruangan;
use App\Barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use File;
use App\Exports\BarangExport;
use Maatwebsite\Excel\Facades\Excel;

class BarangController extends Controller
{
  public function index(Request $request)
    {
     $barang = Barang::when($request->search, function ($query) use ($request) {
         $query->where('name', 'LIKE', '%' . $request->search . '%');
     })->paginate(5);

     return view('barang.index', compact('barang'));
   }

   public function export_excel()
   {
     return Excel::download(new BarangExport, date("Y-m-d").'-Data Barang'.'.xlsx');
   }

  public function tambah(){
    return view('/barang/tambah');
   }

public function store(Request $request){
  $this->validate($request,[
    'ruangan_id' => 'required',
    'name' => 'required',
    'file' => 'required|file|image|mimes:jpeg,png,jpg',
    'total' => 'required',
    'broken' => 'required',
  ]);


    $gambar = 'barang-'.date('Ymdhis').'.'.$request->file->getClientOriginalExtension();
    $request->file->move('imagee', $gambar);



    Barang::create([
    'ruangan_id' => $request->ruangan_id,
    'name' => $request->name,
    'file' =>  $gambar,
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
   'file' => 'required|file|image|mimes:jpeg,png,jpg',
   'total' => 'required',
   'broken' => 'required',
   'created_by' => 'required',
   'updated_by' => 'required'
 ]);

 $barang = Barang::find($id);
 $barang->ruangan_id = $request->ruangan_id;
 $barang->name = $request->name;


 if( $request->file){
            $gambar = 'barang-'.date('Ymdhis').'.'.$request->file->getClientOriginalExtension();
            $request->file->move('imagee', $gambar);
            $barang->file = $gambar;
        }

 $barang->total = $request->total;
 $barang->broken = $request->broken;
 $barang->created_by = $request->created_by;
 $barang->updated_by = $request->updated_by;
 $barang->save();
 return redirect('/barang/index');
}
// if ($request->hasFile('image')){
//   $file = $request->file('image');
//   $nama_file = time()."_".$file->getClientOriginalName(); --> edit image
//   $file->move($tujuan_upload,$nama_file);
//   $tujuan_upload = 'imagee';
// }

public function delete($id)
{
  // hapus file
	$barang = Barang::where('id',$id)->first();
	File::delete('imagee/'.$barang->file);
	// hapus data
	Barang::where('id',$id)->delete();
	return redirect()->back();
}
}
