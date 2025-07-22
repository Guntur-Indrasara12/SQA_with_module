<?php

namespace App\Modules\Product\Exceptions\Product;

use App\Modules\Shared\Exceptions\BaseException;

class ProductNotFoundException extends BaseException
{
    protected $message = 'Product not found';
    protected int $statusCode = 404;
    protected string $errorType = 'product_not_found';
}
