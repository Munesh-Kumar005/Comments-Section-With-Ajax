<?php include 'db.php';
?>
<?php
$commentcountnew=$_POST['commentcountnew']; //$commentcountnew varibale
	$q="SELECT * FROM comment LIMIT $commentcountnew ";
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