<?php

namespace App\Models;

use App\Models\Travel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobil extends Model
{
    protected $guarded = ['id'];

    public function Travel()
    {
        return $this->hasMany(Travel::class);
    }
}
