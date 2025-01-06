<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class Produto extends Model
{
    //Se a tabela tem um nome diferente do Model, usar a propriedade abaixo
    //protected $table = "tb_produtos";

    //Se a tabela tem uma primary key diferente do modelo id_nome_model, usar a propriedade abaixo
    // protected $primaryKey = "";

    //Se a pk não for auto increment usar a propriedade abaixo
    // protected $incrementing = false;

    //Se a pk não for int usar a propriedade abaixo
    // protected $keyType = 'string';

    //Gerar as colunas de created_at e updated_at
    public $timestamps = false;

    /**
     * Configuração de inicio, boot, serviços da aplicação, como o LazyLoading apenas em produção
     */
    // public function boot(): void{}

    public function getAll(){
        //A função all() do EloquentORM retorna todos os dados da tabela
        return Produto::all();
    }

    public function getProduto(string $id){
        //A função find() do EloquentORM retorna uma consulta filtrando a pk
        //A função find tem derivadas como 'findOr($id, function callback())' e 'findOrFail' essa lançando uma exception caso não haja retorno 
        return Produto::findOrFail($id);
    }

    public function store(Request $request){

        //Para salvar um registro no BD basta instanciar, setar os atributos e usar a função save()
        // $produto = new Produto();
        // $produto->nome = $request->nome;
        // $produto->save();


        //Também é possível usar create
        $produto = Produto::create([
            'nome' => $request->nome,
        ]);
    }
}
