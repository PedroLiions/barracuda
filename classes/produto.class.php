<?php

class Produto{
	private $id;
	private $nome;
	private $descricao;
	private $fotos;
	private $preco;

        public function __construct($nome, $descricao, $preco){
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->preco = $preco;
        }
        
	public function setId($id){
		$this->id=$id;
	}

	public function setNome($nome){
		$this->nome=$nome;
	}

	public function setDescricao($descricao){
		$this->descricao=$descricao;
	}


	public function setFotos($fotos){
		$this->fotos=$fotos;
	}

	public function setPreco($preco){
		$this->preco=$preco;
	}

	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	// retorna um array com fotos
	public function getFotos(){
		return $this->fotos;
	}

	public function getPreco(){
		return $this->preco;
	}
}