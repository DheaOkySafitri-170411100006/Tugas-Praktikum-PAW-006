<?php
	
	if(isset($_POST['update'])){
		
		$dbc = new PDO ('mysql:host=localhost;dbname=puppies','root','');
		$statement = $dbc->prepare("UPDATE animals SET PuppyName = :puppyname ,
		Description=:desc , Price=:price WHERE ID= :id");
		$statement->bindValue(':id',$_POST['ID']);
		$statement->bindValue(':puppyname',$_POST['PuppyName']);
		$statement->bindValue(':breedname',$_POST['BreedID']);
		$statement->bindValue(':desc',$_POST['Description']);
		$statement->bindValue(':price',$_POST['Price']);
		$statement->execute();
		$statement = $statement->fetch();
		
	}
?>