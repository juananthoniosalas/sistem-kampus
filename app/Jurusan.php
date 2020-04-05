<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
  protected $table = 'jurusan';

  protected $fillable = ['fakultas_id', 'name'];

  public function fakultas(){
    	return $this->belongsTo(Fakultas::class);
  }
}
