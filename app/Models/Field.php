<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $table = 'fields';

    protected $guarded = [
        'id',
        'timestamps'
    ];

    public function fieldType(){
        return $this->belongsTo(FieldType::class);
    }
    public function fieldClass(){
        return $this->belongsTo(FieldClass::class);
    }
}
