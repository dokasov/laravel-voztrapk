<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
  public function municipio() {
    return $this->belongsTo('App\Municipio', 'id_municipio', 'id');
  }
}
