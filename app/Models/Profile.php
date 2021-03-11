<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

         /**un usuario tiene un perfil */
         public function location()
         {
             return $this->hasOne(Location::class);
         }

    
}
