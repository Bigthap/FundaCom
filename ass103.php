<?php
    $text = $_POST['text'];
    $type = $_POST['type'];
    if($type == 'Count the length of text'){
        $a = strlen($text);
    }elseif($type == 'Count the number of words'){
        $a = str_word_count($text);
    }elseif($type == 'Convert text to uppercase'){
        $a = strtoupper($text);
    }else{
        $a = strtolower($text);
    }
    echo "Your option : $type <br>";
    echo "Your result: $a";

?>