<?php

namespace App\Modules\Order\Models;

use App\Modules\Product\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['product_id', 'quantity', 'total'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
