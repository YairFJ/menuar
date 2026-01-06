<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'Departamentos';

    protected $primaryKey = 'id_departamento';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'provincia_id',
    ];

    
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'provincia_id', 'id_provincia');
    }
}
