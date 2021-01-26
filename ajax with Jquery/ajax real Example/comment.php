<?php

$comments = array("very nice","Thank you","its helpfull");
if(isset($_POST['comment'])){
    array_push($comments,$_POST['comment']);
    
}
foreach($comments as $comment){
    echo $comment."<br>";
}

?>