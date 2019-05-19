
<?php
	//include auth.php file on all secure pages
	include("auth.php");
	include("db.php");
?>

<?php include 'part/header.php'; ?>
<?php include 'part/navbar.php'; ?>

<?php
	//tampilkan gambar jika ada
	$picquery = "SELECT * FROM `users` WHERE `username`='".$_SESSION['username']."'";
	$result = mysqli_query($con,$picquery);
	$row = mysqli_fetch_assoc($result);
	if(!is_null($row['pplink'])){
		echo "<img src=uploads/".$row['pplink'].">";
	}
?>

<form action="uploadtostorage.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="hidden" value="<?php echo $_SESSION['username'] ?>" name="username">
    <input type="submit" value="Upload Image" name="submit">

</form>

<h2>Submitted Problems</h2>
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

<h2>Submissions</h2>
<?php
	
	$query = "SELECT * FROM submission WHERE `username`='$uname'";
	$result = mysqli_query($con,$query);
	while($row = mysqli_fetch_assoc($result)){
		if($row['iscorrect']) echo "<div class='answered'>";
		else echo "<div class='problemlist'>";
		echo "<div class='ptitle'><p style='text-align:left;'>";
		if($row['iscorrect']) echo "Answer Submitted Problem No. ".$row['p_id']." with verdict TRUE<br>";
		else echo "Answer Submitted Problem No. ".$row['p_id']." with verdict FALSE<br>"; 
		echo "<span style='float:right;'><br></span></p></div></div>";
		
	}
?>


<?php include 'part/footer.php'; ?>