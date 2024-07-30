<?php

//uma classe é um modelo de um objeto
//nome da classe sempre começa com letra maiúscula
class Pessoa {
    //o public se refere ao acesso a um atributo dentro da classe
    //se a variável (atributo) tiver o public, ela poderá ser acessada fora da classe
    //se a variável não tiver o public, ela só poderá ser acessada dentro da classe, se declara com o private
    //uma variável dentro da classe mas fora do método (também chamado atributo), deve ser declarada com o $
    public $nome;//atributo

    //a function dentro de uma classe se refere a um método
    //assim como nos atributos, o método também tem o public, private e protected
    //a variável $this é a referência a uma informação na própria classe
    //quando invocamos uma variável com o $this, estamos invocando uma variável dentro da própria classe, portanto não precisamos utilizar o $ no nome da variável
    //a única convenção para chamar o atributo é utilizar o $this->[nome da variável/atributo]
    //$this faz o papel do $ no método

    public function falar(){//método
        return "O meu nome é ".$this->nome;
    }
}

//instanciando um objeto chamado $ygor, que recebe a classe Pessoa
//para utilizar os atributos e métodos da classe Pessoa, é necessário instanciar um objeto
//os parênteses no final do nome da classe nesse caso específico não são obrigatórios, mas é uma boa prática, eles servem para métodos construtores
$ygor = new Pessoa();

//atribuindo um valor a variável (atributo) $nome, que está dentro da classe Pessoa
//só consigo acessar o atributo $nome, pois ele é public
//assim como no método utilizamos o $this->nome para acessar o atributo $nome, para atribuirmos um valor a ele com o objeto, utilizamos o ->[nome do atributo], sem o $
$ygor->nome = "Ygor Verissimo";

//chamando o método falar
//o método falar() é chamado a partir do objeto $ygor
//é necessário utilizar o () no final do método, mesmo que não tenha parâmetros
//se houverem parâmetros, deve ser passado entre os parênteses
echo $ygor->falar();