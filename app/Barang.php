<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  protected $table = 'barang';

  protected $fillable = ['ruangan_id', 'name', 'total', 'broken', 'created_by', 'updated_by'];


  public function Ruangan(){
      return $this->belongsTo(Ruangan::class);
  }


  public function User(){
    return $this->belongsTo('App\User', 'created_by', 'id');
  }

  public function user_u(){
    return $this->belongsTo('App\User', 'updated_by', 'id');
  }
}
