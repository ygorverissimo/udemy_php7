<?php

class Documento {
    private $numero;

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */ 
    public function setNumero($numero)
    {
        //aqui a variável $resultado recebe o resultado do método static validaCPF com a variável $numero, que é o CPF do usuário
        //se usa :: para chamar um método estático dentro de uma classe
        $resultado = Documento::validaCPF($numero);

        if ($resultado === false)
        {
            throw new Exception("CPF inválido");
        }

        $this->numero = $numero;
    }

    public static function validaCPF($cpf):bool
    {

        //verifica se número foi informado
        if (empty($cpf)) {
            return false;
        }

        //elimina possível mascara
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
        $cpf = str_pad($cpf, 11, 0, STR_PAD_LEFT);

        //verifica se possui 11 dígitos
        if (strlen($cpf)!= 11) {
            echo "tamanho do CPF inválido";
            return false;
        }

        //verifica se nenhuma das sequências invalidas abaixo foi digitada. se foi, retorna falso
        else if ($cpf == '00000000000' || $cpf == '11111111111' || $cpf == '22222222222' || $cpf == '33333333333' || $cpf == '44444444444' || $cpf == '55555555555' || $cpf == '66666666666' || $cpf == '77777777777' || $cpf == '88888888888' || $cpf == '99999999999') {
            echo "número do CPF inválido";
            return false;
        }

        //calcula os números para verificar se o CPF é verdadeiro
        else
        {
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c]!= $d) {
                    echo "número do CPF inválido";
                    return false;
                }
            }
            return true;
        }

        //$cpf = preg_replace('/[^0-9]/', '', (string) $cpf);
    }
}

/*$cpf = new Documento();
$cpf->setNumero("87867147241");

var_dump($cpf->getNumero());*/

//validando o retorno do método validaCPF()
var_dump(Documento::validaCPF("87867147241"));