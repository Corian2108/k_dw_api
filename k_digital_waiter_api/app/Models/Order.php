<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function detail()
    {
        return $this->belongsTo(Detail::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
