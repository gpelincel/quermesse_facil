<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function show(string $id){
        return Produto::findOrFail($id);
    }
}
