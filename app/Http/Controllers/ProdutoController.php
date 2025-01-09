<?php

namespace App\Http\Controllers;

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

    public function store(Request $request){
        return new ProdutoResource(Produto::store($request));
    }
}
