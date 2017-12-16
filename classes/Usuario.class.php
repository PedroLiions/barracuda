<?php
/**
 * Created by Pedro Lima.
 * User: pedro Lima
 * Date: 16/12/2017
 * Time: 00:00
 */

public class Usuario{
    private nome;
    private senha;
    private email;
    private nascimento;
    private foto;


    /**
     * Usuario constructor.
     */
    public function __construct($nome, $senha, $email, $nascimento, $foto){
    	this->nome = $nome;
    	this->senha = $senha;
    	this->email = $email;
    	this->nascimento = $nascimento;
    	this->foto = $foto;
    }

    /*
		Metodos Getters
    */
    
    public getNome(){
    	return this->nome;
    }    

    public getSenha(){
    	return this->senha;
    }

    public getEmail(){
    	return this->email;
    }

    public getNascimento(){
    	return this->nascimento;
    }

    public getFoto(){
    	return this->foto;
    }

    /*
		Metodos Setters
    */

    public setNome($nome){
    	this->nome = $nome;
    }

    public setSenha($senha){
    	this->senha = $senha;
    }

    public setEmail($email){
    	this->email = $email;
    }

    public setNascimento($nascimento){
    	this->nascimento = $nascimento;
    }

    public setFoto($foto){
    	this->foto = $foto;
    }
}
?>