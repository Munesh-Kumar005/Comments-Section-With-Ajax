 <?php include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>ajax 2</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div id="comments">
<?php
	$q="SELECT * FROM comment LIMIT 2 ";
	$result=mysqli_query($conn,$q);
	if (mysqli_num_rows($result)>0) {
	while ($row=mysqli_fetch_array($result)) {
		echo "<p>";
		echo $row['auther'];
		echo "<br>";
		echo $row['message'];
		echo "</p>";
	}
	}
	else{
		echo "NO COMMENTS";
	}
	?>
</div>
<button>show more comments</button>
<script type="text/javascript">
	
$(document).ready(function(){
	var commentcount = 2;
	$('button').click(function(){
		commentcount = commentcount + 2;
		$('#comments').load('comnew.php',{ commentcountnew : commentcount

		});
	});
});





</script>
</body>
</html>