<?php

    $qoys = array("Mahamed", "Nuurto", "Aden", "Yusuf", "Cali");

    foreach($qoys as $key => $value){
        $qoys[$key] = $value . " Golley";

        echo "tirada Qoysku waa " . $key.  " waa " . $value . "<br>";


        echo "uppdate: $qoys[$key] <br>";

     
    }
    echo "<br><br>";
   
   echo "Regular ForLoop <br><br>";
   for($i = 0; $i <= sizeof($qoys); $i++){
         echo $qoys[$i]. "<br>";
    }

for($i = 10; $i >= 0; $i--){
    echo $i. "<br>";
}

?>