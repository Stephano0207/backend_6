<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $table ="productos";
    protected $fillable=['descripcion','idcategoria','precio','cantidad','estado'];
    protected $primaryKey="idproducto";
    public $timestamps=false;

    public function categoria(){
        return $this->belongsTo(Categorias::class,"idcategoria","idcategoria");
    }
}
