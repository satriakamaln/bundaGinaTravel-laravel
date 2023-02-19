<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mobil;
use App\Models\User;

class Travel extends Model
{
    protected $guarded = ['id'];

    public function Mobil()
    {
        return $this->belongsTo(Mobil::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

