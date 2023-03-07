<?php
class Format{
 public function formatDate($date){
    return date('F j, Y, g:i a',strtotime($date));
 }

public function textShorten($test, $limit = 400){
    $test = $test. " ";
    $test = substr($test, 0, $limit);
    $test = substr($test, 0, strrpos($test, ' '));
    $test = $test.".....";
    return $test;
}

public function validation($data){
    $data = trim($data); 
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

public function title(){
    $path = $_SERVER[ 'Script_FILENAME'];
    $title = basename($path, '.php');
    if($title == 'index') {
        $title = 'home';
    } elseif ($title == 'contact'){
        $title = 'contact';
    }
    return $title = ucfirst($title);
}
}
?>