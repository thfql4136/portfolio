<?
//database(MySQL --> mysql.com) 에 접근
//mysqli_connect(servername, id, pw, dbname);
$connect = mysqli_connect("localhost", "thfql4136", "ktev86910", "thfql4136");
mysqli_query($connect, "set names utf8");
?>