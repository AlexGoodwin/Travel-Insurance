<?
	require('common.php');
	
	$query = "
		SELECT *
		FROM applications
		WHERE id = ".$_GET['id'];	
		
	$stmt = $db->prepare($query); 
    $result = $stmt->execute();
	
	$results = $stmt->fetch();
?>

<form class="grid-80 prefix-10" method='post' action="adminPanel.php">
	<h2>Application ID: <? echo $results['id'];?> <a id="delete" title="Delete Application"><i class="fa fa-trash"></i></a></h2>
	
	<input type='hidden' name="id" value='<? echo $results['id'];?>'>
	
	<label for="name">Name: </label>
	<input type="text" name="name" value="<? echo $results['name'];?>">
	
	<label for="email">Email: </label>
	<input type="email" name="email" value="<? echo $results['email'];?>">
	
	<label for="phone">Phone: </label>
	<input type="tel" name="phone" value="<? echo $results['phone'];?>">
	
	<label for="social">Social: </label>
	<input type="text" name="social" value="<? echo $results['social'];?>">
	
	<label for="weight">Weight: </label>
	<input type="text" name="weight" value="<? echo $results['weight'];?>">
	
	<label for="address_line1">Address Line 1: </label>
	<input type="text" name="address_line1" value="<? echo $results['address_line1'];?>">
	
	<label for="address_line2">Address Line 2: </label>
	<input type="text" name="address_line2" value="<? echo $results['address_line2'];?>">
	
	<label for="city">City: </label>
	<input type="text" name="city" value="<? echo $results['city'];?>">
	
	<label for="state">State: </label>
	<input type="text" name="state" value="<? echo $results['state'];?>">
	
	<label for="zip">Zip: </label>
	<input type="text" name="zip" value="<? echo $results['zip'];?>">
	
	<label for="status">Status: </label>
	<select name="status">
		<option <? if($results['status'] == 'Received') echo 'selected="selected"';?>>Received</option>
		<option <? if($results['status'] == 'Contacted') echo 'selected="selected"';?>>Contacted</option>
		<option <? if($results['status'] == 'Complete') echo 'selected="selected"';?>>Complete</option>
	</select>
	
	<label for="notes">Note: </label>
	<textarea name="notes"></textarea>
	
	<input type="submit" value="Save">
</form>