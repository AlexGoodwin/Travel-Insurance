<?
	require('loggedIn.php');
	$id = $_GET['id'];
	
	$query = "
		DELETE FROM applications
		WHERE id = $id
	";
	
	$stmt = $db->prepare($query); 
    $result = $stmt->execute();
?>