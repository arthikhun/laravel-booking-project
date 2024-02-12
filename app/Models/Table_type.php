<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table_type extends Model
{
    protected $table = 'table_type';
    // protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['name', 'max_person'];
}
