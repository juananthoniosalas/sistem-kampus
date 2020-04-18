<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
  protected $table = 'ruangan';

  protected $fillable = ['jurusan_id', 'name'];

  public function Jurusan(){
      return $this->belongsTo(Jurusan::class);
  }

  public function user_c(){
    return $this->belongsTo('App\User', 'created_by', 'id');
  }

  public function user_u(){
    return $this->belongsTo('App\User', 'updated_by', 'id');
  }
}
