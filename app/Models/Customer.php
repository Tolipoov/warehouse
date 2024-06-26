<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $guarded = false;

    public function saleses()
    {
        return $this->hasMany(Sales::class);
    }
    
}
