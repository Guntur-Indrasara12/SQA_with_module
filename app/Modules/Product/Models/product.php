<?php

namespace App\Modules\Product\Models;

use app\Modules\Order\Models\Order;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Shared\Traits\HasQueryFilters;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $price
 * @property int $quantity
 */
class Product extends Model
{
    use HasQueryFilters;

    protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'quantity'];

    public function products()
    {
        return $this->hasMany(Order::class);
    }
}
