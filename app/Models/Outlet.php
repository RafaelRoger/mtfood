<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    public function entry()
    {
        return $this->belongsTo(Entry::class, 'entry_id');
    }
}
