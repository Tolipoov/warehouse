<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'saleses';
    protected $guarded = false;

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }   
    
    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }  
}
