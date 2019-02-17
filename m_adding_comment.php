<?php
/*include_once("/class.php");
class AddingComment extends DB{
    function __construct(){
        parent::__construct();
        $this->receive_comment();
        $this->save_data();
    }
    function receive_comment(){
        $this->save_data($_POST['name'],date("Y-m-d h:i:s",time()),$_POST['comment']);
    }
    function save_data($n,$t,$c){
        $query = "INSERT INTO `io_comment`(`name`,`time`,`comment`) VALUE ($n,$t,$c);";
        mysqli_query($this->database,$query);
    }
}*/
$servername = "localhost";
$username = "user1505";
$password = "ting10332019";
$db_name = "1505_db";

$conn = mysqli_connect($servername,$username,$password,$db_name);
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());}
else{
    echo "Connected!";}
$name = $_POST["name"];
echo $name;
$comment = $_POST["comment"];
echo $comment;
$time = date("Y-m-d h:i:s",time());
echo $time;
$query = "INSERT INTO `io_comment`(`name`,`time`,`comment`) VALUES ($name,$time,$comment);";
//$query="INSERT INTO io_comment(name)VALUES ('".$_POST["name"]."')";
mysqli_query($conn,$query);
echo "Hello my friend";
mysqli_close($conn);

?>