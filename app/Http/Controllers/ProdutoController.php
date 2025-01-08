<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProdutoResource;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function show(string $id){
        return new ProdutoResource(Produto::getProduto($id));
    }
}
