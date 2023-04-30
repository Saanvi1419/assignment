<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'cruds';
    protected $primaryKey = 'id';
    protected $fillable = ['task'];
    use HasFactory;
}
