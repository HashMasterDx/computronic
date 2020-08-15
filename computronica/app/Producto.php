<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Producto extends Eloquent
{
  protected $connection='mongodb';
  protected $collection='productos';
  protected $fillable = [
     '_id', 'producto', 'descripcion', 'existencia','categoria','imagen','num','precio',
 ];
}

