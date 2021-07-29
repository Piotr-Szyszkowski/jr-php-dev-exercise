<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'file_path']; // <-- @Piotr - fillable is a protected variable - visible in all classes that extend current class including the parent class, value of array - $fillable property on the model, looks like it makes Picture's properties 'name' and 'file_path' mass assignable sttribute of Illuminate\Database\Eloquent\Model

}
