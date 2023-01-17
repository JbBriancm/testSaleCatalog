<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saleDetail extends Model
{
    use HasFactory;

    protected $table = 'sale_detail';

    protected $fillable = ['product_id','client_id','price','amount','sale_type','subtotal'];

    public function products(){

        return $this->hasOne(Products::class, 'id', 'product_id');
    }

    public function clients(){

        return $this->hasOne(Clients::class, 'id', 'client_id');
    }


}
