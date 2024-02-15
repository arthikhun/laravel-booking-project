<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_map_table extends Model
{
    protected $table = 'booking_map_table';
    protected $primaryKey = ['booking_id', 'table_type_id'];
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['booking_id', 'table_type_id', 'table_amt'];

    public function booking()
    {
        return $this->belongsTo('App\Models\Booking', 'booking_id', 'id');
    }
    public function table()
    {
        return $this->belongsTo('App\Models\Table_type', 'table_type_id', 'id');
    }
}
