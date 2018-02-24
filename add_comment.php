<?php
include("conn.php");
if(@$_POST['submit']){
    $sql = "INSERT INTO io_comment(id,name,content,date)".
    "values('','$_POST'[name]',$_POST'[content]','.time().')";
    mysql_query($sql);
    echo "<script>alert('Successful!');</script>";
}
?>