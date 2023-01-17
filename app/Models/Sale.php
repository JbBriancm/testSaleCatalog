<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = ['sale_detail_id','sale_date','sale_type','status','subtotal','iva','total'];

    public function saleDetail(){

        return $this->hasOne(saleDetail::class, 'id', 'company_id');
    }

}
