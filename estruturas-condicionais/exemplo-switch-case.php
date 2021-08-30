<?php 
/**
 * A PRINCIPAL DIFERENCA ENTRE SWITCH 
 * CASE E O IF É QUE EU POSSO USAR O SWICTH CASE QUANDO EU JA SEI 
 * QUAIS AS OPCOES QUE TENHO E NO IF É SE FOR ISSO FACA ISSO E NO SWICTH É CASO FOR ISSO CASO FOR AQUILO.
 */

 $diaDaSemana = date("w");

    switch ($$diaDaSemana) {
        case 0:
            echo "Domingo";
            break;

            case 1: 
                echo "Segunda Feira";
                break;
                
                case 2: 
                    echo "Terça Feira";
                    break;
                    
                    case 3:
                        echo "Quarta Feira";
                        break;

                        case 4: 
                            echo "Quinta Feira";
                            break;
                        
                            case 5: 
                                echo "Sexta Feira";
                                break;

                                case 6: 
                                    echo "Sábado";
    }

?>