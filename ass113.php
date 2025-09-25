<?php
    $word = $_POST['word'];
    $al1 = $_POST['al1'];
    $al2 = $_POST['al2'];

    // function find($w, $a){
    //     $count = 0;
    //     $len = strlen($w);
    //     for($i = 0;$i < $len;$i++){
    //         $sub = substr($w,$i,1);
    //         if($sub == $a){
    //             $count++;
    //         }
    //     }
    //     echo "$a was found in the word $w = $count time(s)<br>";
    // }
    function find($w, $a){
        $count = substr_count($w, $a);
        echo "$a was found in the word $w = $count time(s)<br>";
    }
    find($word, $al1);
    find($word, $al2);
?>