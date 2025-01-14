<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutoRequest;
use App\Http\Resources\ProdutoResource;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return new ProdutoResource(Produto::getAll());
    }

    public function show(string $id){
        return new ProdutoResource(Produto::getProduto($id));
    }

    public function store(StoreProdutoRequest $request){
        $produto = Produto::store($request->validated());

        return new ProdutoResource($produto);
    }
}
