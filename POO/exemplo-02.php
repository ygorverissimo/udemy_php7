<?php

class Carro {
    //o comum é declarar atributos de uma classe  como private
    //assim, para acessar esse tipo de atributos, devemos criar métodos get e set
    //os getters e setters são métodos que retornam (get) ou atribuem (set) valores a atributos de uma classe
    //porque se faz isso através do método e não diretamente no atributo public:
    //os getters e setters permitem validar as informações, tratá-los, inserir regras de negócio, etc.
    //aumenta o controle sobre o acesso aos atributos
    private $modelo;
    private $motor;
    private $ano;

    //podemos manipular os métodos get e set, como por exemplo, validar os dados que estão sendo passados para os atributos da classe, limitar dados, etc.

    /**
     * Get o valor de modelo
     * o padrão é utilizar o nome do get com get + nome do atributo, com a primeira letra maiúscula
     */ 
    public function getModelo()
    {
        //no return usamos o $this->, representando o objeto, ou seja, uma variável interna do método
        return $this->modelo;
    }

    /**
     * Set do valor de modelo
     * o set também usa como padrão set + nome do atributo, com a primeira letra maiúscula
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        //aqui o $this->modelo representa o atributo $modelo da classe Carro, o private lá em cima
        //o $this->modelo recebe o parâmetro $modelo que está sendo passado no método, entre os parênteses
        //resumindo, o atributo $modelo da classe Carro recebe o parâmetro $modelo que está sendo passado no método
        
        $this->modelo = $modelo;

        //o $modelo é apenas uma variável local, não é o atributo $modelo da classe Carro. no set, o atributo da classe (this->modelo) se alimenta do parâmetro que ele recebe ao ser instanciado
        //o atributo $modelo da classe é na verdade aqui o $this->modelo
        //ao criar um objeto (instanciar a classe) e chamarmos essa função, essa classe já será o próprio objeto
        // e também, ao instanciar o objeto e chamar o set, $this será o próprio objeto na função
        //por isso $this->modelo representa o atributo da classe, porque será também um atributo do próprio objeto instanciado
    }

    /**
     * Get the value of motor
     */ 
    public function getMotor():float//definindo que queremos tipo float como retorno do método getMotor
    {
        return $this->motor;
    }

    /**
     * Set the value of motor
     *
     * @return  self
     */ 
    public function setMotor($motor)
    {
        $this->motor = $motor;
        //não é necessário inserir return no set, pois o set não retorna nada, apenas atribui um valor a um atributo, no caso o atributo $motor
        //se quiser retornar o valor do atributo $motor, posso fazer através do método get
        //o return só existe quando devolvemos o atributo para ser exibido, manipulado, etc, pelo objeto (que representará a classe)
    }

    /**
     * Get the value of ano
     * podemos fazer um cast para o tipo de dado que queremos, como por exemplo de string para int
     */ 
    public function getAno():int//o :int é um cast, ou seja, estamos dizendo que o retorno do método getAno() será do tipo inteiro
    {
        return $this->ano;
    }

    /**
     * Set the value of ano
     *
     * @return  self
     */ 
    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    //criando um método que retorna o valor de todos os atributos da classe Carro de uma vez
    public function exibir(){

        //retornando em um array com os atributos da classe Carro
        return array(
            //em cada chave do array, é passado o método get dos atributos da classe Carro
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }//fechando o método exibir
}//fechando a classe Carro

$argo = new Carro();//instanciando um objeto da classe Carro chamado $argo

//não podemos chamar diretamente o atributo modelo, como $argo->modelo("Argo");, pois ele é private
//usamos o método setModelo para atribuir um valor ao atributo $modelo

$argo->setModelo("Argo Drive");//atribuindo um valor ao atributo $modelo do objeto $argo

$argo->setMotor("1.3");//atribuindo um valor ao atributo $motor do objeto $argo
$argo->setAno("2018");//atribuindo um valor ao atributo $ano do objeto $argo

//conseguimos utilizar o método setModelo, setMotor e setAno porque eles são public

//apresentando os valores dos atributos do objeto $argo
//print_r($argo->exibir());
//usamos o print_r para exibir um array, que no caso possui os atributos do objeto $argo
//chamamos no print_r o método exibir, que retorna um array com os atributos do objeto $argo

var_dump($argo->exibir());//exibe o array com os atributos do objeto $argo
