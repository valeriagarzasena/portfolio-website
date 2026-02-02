<script src = "assets/js/jquery-3.5.1.js"></script>
<?php
echo '<div class="row">';
echo '<div class="col-md-offset-1 col-md-10 col-sm-12">';

echo '<table class = "table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Email</th>';
echo '<th>Username</th>';
echo '<th>Phone</th>';
echo '<th>Password</th>';
echo '<th>Comments</th>';
echo '</thead>';
echo '<tbody id="results">';
	

echo '</tbody>';
								
echo '</div>';
echo '</div>';

?>
<script>
	function refresh_data(){
		$.ajax({
			type: 'post',
			url: 'https://ec2-54-159-66-187.compute-1.amazonaws.com/hw19/query_contact.php',
			success: function(data){
				$('#results').html(data);
			}
		});
	}
	setInterval(function(){ refresh_data();}, 500);
</script>