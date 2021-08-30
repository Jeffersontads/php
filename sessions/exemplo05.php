<?php 
/** LEMBRAR QUE O PHP TEM MUITO RECURSO POR ISSO EH BOM ANALISAR E CONSULTAR A DOCUMENTACAO*/
require_once("config.php");
echo session_save_path();

//var_dump(session_status());

switch ( session_status()) {
  case PHP_SESSION_DISABLED:
    echo "as sessoes estao desabilitadas";
    break;

    case PHP_SESSION_NONE:
      echo "Sessao habilitadas mas nao iniciada";
      break;

      case PHP_SESSION_ACTIVE:
        echo "as sessoes ESTAO ativadas e uma sessao existe";
        break;
}
?>