<?php
include_once "conn.php";
$db = $GLOBALS['db'];
$id = $_GET["id"];

$menu = $db->getMenuItem($id);


foreach($menu as $menu){
?>

  <form action="" method="post">
<input type="text" id="name" name="name" value="<?php echo $menu["name"];?>">
<input type="text" id="file" name="file" value="<?php echo $menu["file"];?>">
 <button type="submit" name = "submit" class="tm-btn">Save</button>            
  	</form>

<?php 
} 

 if(isset($_POST['submit'])) {
 $update = $db->menuUpdate($id, $_POST["name"], $_POST["file"]);

if($update){
	echo "UPDATED";
}else{
	echo "ERROR";
}

 }


?>


