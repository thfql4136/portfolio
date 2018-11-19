<?
include_once "inc/connect.php";

$writer = "";
if(isset($_POST['writer'])) $writer = $_POST['writer'];

$content = "";
if(isset($_POST['content'])) $content = $_POST['content'];

$email = "";
if(isset($_POST['email'])) $email = $_POST['email'];

$wdate = date("Y-m-d H:i:s");


//insert/update/select/delete
/* $content = "잘 작성 되나요?";
$writer = "홍길동";
$email = "hong@kildong.com";
$wdate = "2018-11-16 11:18:19"; */

/* $spl = " insert into guestbook set ";
$sql.= " title = '".title."', ";
$sql.= " content = '".content."', ";
$sql.= " writer = '".writer."', ";
$sql.= " email = '".email."', ";
$sql.= " wdate = '".wdate."' "; */

$sql = " insert into guestbook set ";
$sql.= " content = '$content', ";
$sql.= " writer = '$writer', ";
$sql.= " email = '$email', ";
$sql.= " wdate = '$wdate' ";
//  echo $sql;
// for($i=0; $i<100; $i++) /*100개 넣어라 */
mysqli_query($connect, $sql);
?>
<script>
location.href = "gbook.php";
</script>


