<?php
    $people[] = "Fred";
    $people[] = "Ikasaya";
    $people[] = "Samani";
    $people[] = "Jane";
    $people[] = "Jack";
    $people[] = "Jude";
    $people[] = "June";
    $people[] = "May";
    $people[] = "Nyawa";
    $people[] = "Judith";
    $people[] = "Musonda";
    $people[] = "Samuel";
    $people[] = "Grey";
    $people[] = "Stacey";
    $people[] = "MAry";
    $people[] = "Janet";
    $people[] = "Mercy";
    $people[] = "Towela";
    $people[] = "Seko";
    $people[] = "Nathan";
    $people[] = "Joseph";
    $people[] = "Bernadette";
    $people[] = "Ignitiaus";
    $people[] = "Hanel";
    $people[] = "Paul";

    // get Query String 

    $q = $_REQUEST['q'];

    $suggestion = "";

    // Get suggestions 
    if($q !== ""){
        $q = strtolower($q);
        $len = strlen($q);
        foreach($people as $person){
            if(stristr($q, substr($person, 0, $len))){
                if($suggestion == ""){
                    $suggestion = $person;
                } else {
                    $suggestion .= ", $person";
                }
            }
        }
    }

    echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>