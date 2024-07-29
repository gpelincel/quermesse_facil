<?php

namespace App\Repositories\Product;

use stdClass;

interface ProductRepositoryInterface{
    public function getAll():array;
    public function getSingle(string $id_produto):array|stdClass;
    public function new($nome, $preco_venda, $preco_compra, $quantidade):stdClass|null;
    public function delete($id_produto):void;
    public function update($id_produto, $nome, $preco_venda, $preco_compra, $quantidade):stdClass|null;
}