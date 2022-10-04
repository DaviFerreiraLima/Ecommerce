<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto as produto;
class ProdutoController extends Controller
{

    public function index(){

    }

    public function cadastrar(){
        return view('cadastroDeProduto');
    }
    public function criar(Request $request){

        $produto = new produto;

        $produto->nomeDoProduto = $request->nomeDoProduto;

        $produto->descricaoDoProduto = $request->descricaoDoProduto;

        $produto->categoriaDoProduto= $request->categoriaDoProduto;

        $produto->quantidadeDisponivel= $request->quantidadeDisponivel;

        $produto -> precoDoProduto = $request-> precoDoProduto;
        $produto->save();

        $lista = produto::all();
        return view('listagemDeProdutos')-> with(compact('lista'));
    }

    public function editar($id){
        $produto=produto::findOrFail($id);
        return view('editarProduto',['produto' => $produto]);
    }

    public function excluir($id){

        produto::findOrFail($id)->delete();

        $lista = produto::all();
        return view('listagemDeProdutos')-> with(compact('lista'));
    }

    public function listar(){
        
        $lista = produto::all();
        return view('listagemDeProdutos')-> with(compact('lista'));
    }

   public function atualizar(Request $request ){

   $produto = produto::find($request->id);

   $produto->nomeDoProduto = $request->nomeDoProduto;
   $produto->precoDoProduto =$request->precoDoProduto;
   $produto->quantidadeDisponivel = $request->quantidadeDisponivel;
   $produto->categoriaDoProduto = $request->categoriaDoProduto;
   $produto->descricaoDoProduto = $request->descricaoDoProduto;
   $produto->save();

   $lista = produto::all();
   return view('listagemDeProdutos')-> with(compact('lista'));
   }
}
