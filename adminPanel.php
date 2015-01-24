<? 
	require('loggedIn.php');
	include('head.php');
	
	if(!empty($_POST)){
		
		$optionQuery = '';
		
		foreach($_POST as $key => $value){
			$optionQuery .= $key . "= '".$value."', ";
		}
		
		// remove that trailing comma in query
		$optionQuery = rtrim($optionQuery,', ');
		
		$query = "
			UPDATE applications
			SET $optionQuery
			WHERE id = $_POST[id]
		";
		
		$stmt = $db->prepare($query); 
        $result = $stmt->execute(); 
	}
	
?>
<body class="adminPanel grid-container">
	<header class="">
		<h1>Agent Admin Panel</h1>
		<a href="logout.php"><i class="fa fa-sign-out"> Log Out</i></a>
	</header>
	
	<section class="">
		<div class="applications grid-30">
			<table>
				<thead>
					<h2>Applications</h2>
				</thead>
				<tbody>
				<? 
					$query = " 
			            SELECT id, name
			            FROM applications 
			        "; 
			         
		            // Execute the query against the database 
		            $stmt = $db->prepare($query); 
		            $result = $stmt->execute(); 
			        
			        while($row = $stmt->fetch()){
				        echo "<tr>";
				        foreach($row as $key => $value){
					        echo "<td>".$value."</td>";
				        }
				        echo "</tr>";
			        }
		        ?>
				</tbody>
			</table>
		</div>
		
		<div class="grid-70 app">
			
		</div>
		
	</section>
	
	<? include('foot.php');?>
	
	<script>
		$(document).ready(function(){
			$('.applications table tr').click(function(){
				var id = $(this).children(':first').text();
				var success = false;
				
				$.ajax({
			   		url: "application.php?id="+id,
					type: 'get',
					async: false,
					success: function(response){
						// load application info
						$('.app').html(response);
						success = true;
					}
				});
				
				if(success){
					$(this).siblings().css({background: 'transparent', color: '#111'});
					$(this).css({background: '#4a85d1', color: 'white'});
				}
			});
		});
	</script>