<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    // protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['cus_name', 'cus_phone', 'cus_amt', 'checkin_date', 'booking_date'];
    public function mapTable()
    {
        return $this->hasMany('App\Models\Booking_map_table', 'booking_id', 'id');
    }
}
