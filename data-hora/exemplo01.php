<?php 

//funcao date sempre vai trazer hora e data da servidor e nao eh sensitive ao set locale.
//unix time stampo teve inicio 01 janeiro de 1970 calendario pelo sitema unix
echo date("d/m/Y H:i:s");
echo "<br>";
echo time();

?>