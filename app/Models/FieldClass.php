<?php

namespace App\Models;

use App\Models\Field;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FieldClass extends Model
{
    use HasFactory;

    protected $table = 'field_classes';

    protected $guarded = [
        'id', 'timestamps'
    ];

    public function fields(){
        return $this->hasMany(Field::class);
    }
}
