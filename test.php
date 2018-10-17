<?php
// Array with names
    $a[] = "Anna";
    $a[] = "Brittany";
    $a[] = "Cinderella";
    $a[] = "Diana";
    $a[] = "Eva";
    $a[] = "Fiona";
    $a[] = "Gunda";
    $a[] = "Hege";
    $a[] = "Inga";
    $a[] = "Johanna";
    $a[] = "Kitty";
    $a[] = "Linda";
    $a[] = "Nina";
    $a[] = "Ophelia";
    $a[] = "Petunia";
    $a[] = "Amanda";
    $a[] = "Raquel";
    $a[] = "Cindy";
    $a[] = "Doris";
    $a[] = "Eve";
    $a[] = "Evita";
    $a[] = "Sunniva";
    $a[] = "Tove";
    $a[] = "Unni";
    $a[] = "Violet";
    $a[] = "Liza";
    $a[] = "Elizabeth";
    $a[] = "Ellen";
    $a[] = "Wenche";
    $a[] = "Vicky";

    $q = $_REQUEST['q'];
    $len = strlen($q);
    $hint = "";
    foreach($a as $key){
        if(stristr($q, substr($key, 0, $len))){
            if(strlen($hint)==0){
                $hint = $key;
            }
            else {
                $hint .= ", $key";
            }
        }
    }
    // echo $hint
    echo strlen($hint)==0 ? "No Suggestion" : $hint;
?>
