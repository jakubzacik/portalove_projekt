<?php
include_once "conn.php";
$db = $GLOBALS['db'];

$clanky = $db->getArticles("all");
$spravy = $db->getMSG();
$menu = $db->getMenuItems();

?>

<H1>Spravy:</H1>
<?php 
foreach($spravy as $spravy){
echo "<a href='msg_del.php?id=$spravy[id]'>&nbspZmazať:</a>";
echo "FROM: $spravy[meno] | Subject: $spravy[subject] | Mail: $spravy[mail] | Message: $spravy[sprava]<br>";
}	
?>

<H1>Menu:</H1>

<?php 
foreach($menu as $menu){
echo "<a href='menu_edit.php?id=$menu[id]'>&nbspUpraviť:</a>";
echo "<a href='menu_del.php?id=$menu[id]'>&nbspZmazať:</a>";
echo "$menu[name] | $menu[file]<br>";
}
?>


<H1>Clanky:</H1>

<?php 
foreach($clanky as $clanky){
echo "<a href='art_edit.php?id=$clanky[id]'>&nbspUpraviť:</a>";
echo "<a href='art_del.php?id=$clanky[id]'>&nbspZmazať:</a>";
echo "$clanky[nadpis]<br>";
}
?>
<H1>Pridat menu:</H1>

  <form action="" method="post">

<input type="text" id="name" name="name" placeholder="Name" ><br>
<input type="text" id="file" name="file" placeholder="File"><br>
 <button type="submit" name = "submit" class="tm-btn">Add</button>            
  	</form><br>
<H1>Pridat clanok:</H1>
  	  <form action="" method="post">

<input type="text" id="nadpis" name="nadpis"  placeholder="Nadpis"><br>
<input type="text" id="titulka" name="titulka"  placeholder="Titulka"><br>
<textarea id="popis" name="popis" rows="4" cols="50" placeholder="Popis"></textarea><br>
<textarea id="clanok" name="clanok" rows="10" cols="50"placeholder="Clanok"></textarea><br>
 <button type="submit" name = "submit2" class="tm-btn">Add</button>            
  	</form>

  	<?php 
 if(isset($_POST['submit'])) {

$add = $db->addMenu($_POST["name"], $_POST["file"]);

if($add){
	echo "Menu added";
}else{
	echo "ERROR";
}

 }

 if(isset($_POST['submit2'])) {

$add2 = $db->addArticle($_POST["nadpis"], $_POST["titulka"], $_POST["popis"], $_POST["clanok"]);

if($add2){
	echo "Article added";
}else{
	echo "ERROR";
}

 }

  	?>




