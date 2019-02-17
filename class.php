<?php

class Comment{
    var $name;
    var $time;
    var $comment;
    function __construct($n,$t,$c){
       $this->name = $n;
       $this->time = $t;
       $this->comment = $c; 
    }
}
class DB{
    var $database = null;
    function __construct(){
        $servername = "localhost";
        $username = "user1505";
        $password = "ting10332019";
        $db_name = "io_comment";
        $this->database = mysqli_connect($servername,$username,$password,$db_name);
        if(!$this->database){
            echo "DB NOT connected.<br>";
        }
    }
    function __destruct(){
        mysqli_close($this->database);
    }

}

?>