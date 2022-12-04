<?php
include_once "conn.php";
$db = $GLOBALS['db'];
$id = $_GET["id"];
$clanky = $db->getArticle($id);

foreach($clanky as $clanky){
?>

  <form action="" method="post">

<input type="text" id="nadpis" name="nadpis" value="<?php echo $clanky["nadpis"];?>"><br>
<input type="text" id="titulka" name="titulka" value="<?php echo $clanky["titulka"];?>"><br>
<textarea id="popis" name="popis" rows="4" cols="50"><?php echo $clanky["popis"];?></textarea><br>
<textarea id="clanok" name="clanok" rows="10" cols="50"><?php echo $clanky["clanok"];?></textarea><br>
 <button type="submit" name = "submit" class="tm-btn">Save</button>            
  	</form>

<?php 
} 

 if(isset($_POST['submit'])) {
 $update = $db->articleUpdate($id, $_POST["popis"], $_POST["clanok"],$_POST["titulka"], $_POST["nadpis"]);

if($update){
	echo "UPDATED";
}else{
	echo "ERROR";
}

 }


?>


