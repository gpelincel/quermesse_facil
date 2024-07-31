<?php

namespace App\Services;

use App\Repositories\Product\ProductRepositoryInterface;
use stdClass;

class ProductService{
    public function __construct(protected ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAll():array{
        return $this->repository->getAll();
    }

    public function getSingle($id_produto):stdClass|null{
        return $this->repository->getSingle($id_produto);
    }

    public function new($data):stdClass{
        extract($data);
        return $this->repository->new($nome, $preco_venda, $preco_compra, $quantidade);
    }

    public function delete($id_produto):void{
        $this->repository->delete($id_produto);
    }

    public function update($id_produto, $nome, $preco_venda, $preco_compra, $quantidade):stdClass|null{
        return $this->repository->update($id_produto, $nome, $preco_venda, $preco_compra, $quantidade);
    }
}