<?php

namespace App\Modules\Product\Http\Controllers\Api\V1;

use App\Modules\Shared\Http\Controllers\Controller;
use App\Modules\Product\Http\Requests\StoreProductRequest;
use App\Modules\Product\Http\Resources\V1\ProductResource;
use App\Modules\Product\Services\ProductService;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    protected $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $products = $this->service->getAllProducts();
        return ProductResource::collection($products);
    }

    public function store(StoreProductRequest $request)
    {
        $product = $this->service->create($request->validated());
        return new ProductResource($product);
    }

    public function show($id)
    {
        $product = $this->service->getProductById($id);
        return new ProductResource($product);
    }

    public function update(StoreProductRequest $request, $id)
    {
        $product = $this->service->getProductById($id);
        $updated = $this->service->update($product, $request->validated());
        return new ProductResource($updated);
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return response()->json(['message' => 'Deleted'], Response::HTTP_NO_CONTENT);
    }
}
