<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

      /**un grupos  pertenece y tiene muchos grupos  usuario*/

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }//withTimestamps = para que se llene de forma automatica create_ udtate
}
