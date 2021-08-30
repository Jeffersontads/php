<?php 
//for é sempre usado como contador!! 
//for você pode usar sempre que quiser contar algo.

// for ($i=0; $i <= 1000; $i+=10) { 
//     if($i >= 200 && $i <= 800){ 
//         echo $i. "<br>";
//     }
// }
echo "<select>";

for ($count= date("Y"); $count >= date("Y")-100 ; $count--) { 

    echo '<option value="'.$count.'">'.$count.'</option>';
    
}

echo "</select>";

?>