<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilaElectoral extends Model
{
  public function municipio() {
    return $this->belongsTo('App\Municipio', 'id_municipio', 'id');
  }

  public function comuna() {
    return $this->belongsTo('App\Comuna', 'id_comuna', 'id');
  }

  public function corporacion() {
    return $this->belongsTo('App\Corporacion', 'id_corporacion', 'id');
  }
}
