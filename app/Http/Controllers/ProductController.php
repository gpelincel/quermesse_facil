<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductResquest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Services\ProductService;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function __construct(protected ProductService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->service->getAll();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductResquest $request)
    {
        $produto = $this->service->new($request->all());

        return new ProductResource($produto);
    }

    /**
     * Display the specified resource.
     */
    public function show($id_produto)
    {
        if(!$product = $this->service->getSingle($id_produto)){
            return response()->json([
                'error' => 'Produto não encontrado',
            ], Response::HTTP_NOT_FOUND);
        }
        
        return new ProductResource($product);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Product $product)
    {
        $product = $this->service->update($product->id_produto, $product->nome, $product->preco_venda, $product->preco_compra, $product->quatidade);

        if (!$product) {
            return response()->json([
                'error' => 'Não foi possível atualizar o produto',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return new ProductResource($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->service->delete($product->id_produto);
    }
}
