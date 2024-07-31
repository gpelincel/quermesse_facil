<?php

namespace App\Repositories\Product;
use stdClass;

use App\Models\Product;

class ProductEloquentORM implements ProductRepositoryInterface
{
    public function __construct(protected Product $model) {
    }

    public function getAll(): array
    {
        return $this->model->get()->toArray();
    }

    public function getSingle(string $id_produto): stdClass|null
    {
        $produto = $this->model->find($id_produto);

        if (!$produto) {
            return null;
        }

        return (object) $produto->toArray();
    }

    public function new($nome, $preco_venda, $preco_compra, $quantidade): stdClass|null
    {
        $model = $this->model;

        $produto = $model->create((array) $nome, $preco_venda, $preco_compra, $quantidade);

        return (object) $produto->toArray();
    }

    public function delete($id_produto): void
    {
        $produto = $this->model->findOrFail($id_produto)->delete();
    }

    public function update($id_produto, $nome, $preco_venda, $preco_compra, $quantidade): stdClass|null
    {
        $produto = $this->model->find($id_produto);

        if (!$produto) {
            return null;
        }

        $produto->update((array) $nome, $preco_venda, $preco_compra, $quantidade);

        return (object) $produto->toArray();
    }
}
