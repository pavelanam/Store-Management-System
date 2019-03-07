<?php 
	if(!isset($isDispatchedByFrontController)){
		//include_once("../view/error.php");
		die;
	}
?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id = $_POST['id'];
		
		if(removePerson($id)){
			echo "Record Deleted!";
		}
	}
?>
<form method="post">
	<br /><h3>DELETE PERSON</h3><hr/><br />
	Id: <?=$person['Id']?><input type="hidden" name="id" value="<?=$person['Id']?>"/><br />
	Name: <?=$person['Name']?><br />
	Phone: <?=$person['Phone']?><br /><br /><hr />
	<input type="submit" value="Delete"/>
	<a href="/contacto/?person_show">SHOW ALL</a>
</form>