<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;

    /**un nivel  tiene muchos usuarios */
    public function nivel()
    {
        return $this->hasMany(User::class);
    }

}
