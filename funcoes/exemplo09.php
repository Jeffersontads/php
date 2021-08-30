<?php 
  $hierarquia = array(
    array(
      'nome_cargo'=>'CEO',
      'subordinados'=>array(
        //Inicio Diretor Comercial
        array(
          'nome_cargo'=>'Diretor Comercial',
          'subordinados'=>array(
            //Inicio Gerente de Vendas
            array(
              'nome_cargo'=>'Gerente de Vendas',
            ),
            //Termino Gerente de Vendas
          )
        ),
        //Termino Diretor Comercial
        //Inicio Diretor Financeiro
        array(
          'nome_cargo'=>'Diretor Financeiro',
          'subordinados'=>array(
            //Inicio gerente de contas a pagar
            array(
              'nome_cargo'=>'Gerente de Contas a pagar',
              'subordinados'=> array(
                //Inicio supervisor de pagamentos
                array(
                  'nome_cargo'=>'Supervisor de Pagamentos'
                )
                //Final supervisor de pagamentos
              )
                ),
             //termino gerente de contas a pagar
             //inicio gerente de compras
             array(
               'nome_cargo'=> 'Gerente de Compras',
                 'subordinados' => array(
                   //Inicio supervisor de suprimentos
                   array(
                    'nome_cargo'=>'Supervidor de Suprimentos'
                   )
                   //Final supervidor de suprimentos
               )
             )
             //termino gerente de compras
        )
        )
        //Termino Diretor Financeiro
      )
    )
  );

  // var_dump($hierarquia);

  function exibe($cargos) { 
    $html = '<ul>';

    foreach ($cargos as $cargo) {
      # code...
      $html.='<li>';
      $html.=$cargo['nome_cargo'];
      if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
        # code...
        $html.=exibe($cargo['subordinados']);
      }
      $html.='</li>';
    }

    $html .= '</ul>';

    return $html;
  }

  echo exibe($hierarquia);

?>