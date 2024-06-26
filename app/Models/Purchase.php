<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'purchases';
    protected $guarded = false;

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }   
    
    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }  
}


