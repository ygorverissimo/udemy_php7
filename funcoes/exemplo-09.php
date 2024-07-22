<?php
//função recursiva
$hierarquia = array(
    array(
        //início CEO
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //início da estrutura da função recursiva de subordinados
            //Diretor comercial
            array(
                'nome_cargo' => 'Diretor comercial',
                'subordinados' => array(
                    //Gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de vendas'
                    )
                    //termino gerente de vendas
                )
                ),//fim diretor comercial

                //inicio diretor financeiro
                array(
                    'nome_cargo' => 'Diretor Financeiro',
                    'subordinados' => array(
                        //Gerente de contas a pagar
                        array(
                            'nome_cargo' => 'Gerente de contas a pagar',
                            'subordinados' => array(
                                //Supervisor de pagamentos
                                array(
                                    'nome_cargo' => 'Supervisor de pagamentos'
                                )//fim supervisor de pagamentos
                            )
                                ),//fim gerente de contas a pagar

                        //Gerente de compras
                        array (
                            'nome_cargo' => 'Gerente de compras',
                            'subordinados' => array(
                                //Supervisor de compras
                                array(
                                    'nome_cargo' => 'Supervisor de compras',
                                    'subordinados' => array(
                                        //Comprador
                                        array(
                                            'nome_cargo' => 'Comprador'
                                        )//fim Comprador
                                )
                            )//fim supervisor de compras
                        )
                    )//fim gerente de compras
                )
        )//fim diretor financeiro
    )//fim subordinados do CEO
)//fim CEO
);//fim array hierarquia

function exibe($cargos){
    //a tag ul é  uma lista não ordenada
    //a tag li é uma lista ordenada, ao usar a tag é possível adicionar um item na lista
    $html = '<ul>';

    //cargos é a variável de parâmetro que recebe o array $hierarquia
    //nesse foreach, o array $cargos é percorrido e cada elemento é atribuído à variável $cargo
    //no fim, cada $cargo é um array com os elementos do array $hierarquia
    foreach ($cargos as $cargo) {

        //a variável $html concatena à informação que ela já tem <ul>, a tag <li>, abrindo um novo item na lista
        $html .= "<li>";
        //agora, a variável $html concatena o nome do cargo, um dos elementos do array $cargo
        $html .= $cargo['nome_cargo'];

        //o isset verifica se o array $cargo tem um elemento subordinados, e se esse array tem um ou mais elementos
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            //se o array $cargo tiver um elemento subordinados dentro do array, a variável $html concatena a função exibe() com o array $cargo['subordinados'] como parâmetro
            $html .= exibe($cargo['subordinados']);
        }

        //concatena o fechamento da tag <li>
        $html .= "</li>";

}
    $html .= '</ul>';

    return $html;

}

echo exibe($hierarquia);
