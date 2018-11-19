


<ul class="navs clear">
    <li><a href="../main/main.php?S=0">Home</a></li>
    <li><a href="../board/bbs/board.php?bo_table=gallery&S=1">Portfolio</a></li>
    <li><a href="../board/bbs/board.php?bo_table=notice&S=2">Skill</a></li>
    <li><a href="../board/bbs/board.php?bo_table=qa&S=3">About Me</a></li>
</ul>

<script>
<?
$location = 0;
if(isset ($_GET['S'])) $location = $_GET['S'];
echo "var loc = ". $location. ";";
?>
$(".navs li").css({"background-color":"#f8f8f8", "border-bottom":"1px solid #999"});
$(".navs li").eq(loc).css({"background-color":"#fff", "border-bottom":"1px solid #fff"});
</script>