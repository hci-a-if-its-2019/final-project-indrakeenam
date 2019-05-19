<?php
	$pageTitle = "Dashboard";
	//include auth.php file on all secure pages
	include("auth.php");
	include("db.php");
	include("submitproblem.php");
?>

<?php include 'part/header.php'; ?>
<?php include 'part/navbar.php'; ?>
<?php
	$uname = $_SESSION['username'];
	$queryp = "SELECT * FROM problems WHERE `username`='$uname'";
	$resultp = mysqli_query($con,$queryp);
	while($row = mysqli_fetch_assoc($resultp)){
		echo "<div class='problemlist'>";
		echo "<a href='editproblem.php?p_id=".$row['p_id']."';>Edit&nbsp</a>|&nbsp";
		echo "<a href='deleteproblem.php?p_id=".$row['p_id']."';>Delete&nbsp</a>";
		echo "<div class='ptitle'><p style='text-align:left;'>".$row['pname']."&nbsp-&nbsp".$row['username'];
		echo "<span style='float:right;'>".$row['pcategory']."&nbsp-&nbsp".$row['score']."<br></span></p></div></div>";
	}
?>
<?php include 'part/footer.php'; ?>