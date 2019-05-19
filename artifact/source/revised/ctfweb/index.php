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
	echo "<div id='hiddenmaker'><div id='pmaker'><form method='POST' action='".setProblem($con)."' enctype='multipart/form-data'>
		<h2>Create A Problem</h2>
		<p>Problem Name</p> <input type='text' name='pname' style='margin-left: 112px; width:350px;' placeholder='Problem Title' required><br>
		<p>Problem Category</p> <input type='text' name='category' style='margin-left: 90px; width:350px;' placeholder='Category' required><br>
		<p>Problem Flag</p> <input type='text' name='flag' style='margin-left: 125px; width:350px;' placeholder='Flag' required><br>
		<p>Score</p> <input type='text' name='score' style='margin-left: 178px; width:350px;' placeholder='Score' required><br>
		<p>Description</p><br> <textarea name='desc'></textarea><br>
		File (optional) Max : 1MB <input type='file' name='userfile'><br><br>
		<button type='submit' name='psubmit' class='button'>
			Submit
		</button>
	</form>
	</div></div>";
	echo "<h2 id='p1'>Problems</h2><div class='container-p'>";
	getProblems($con);
	echo "</div>";
?>
<br>
<script type="text/javascript">

	$(document).ready(function(){
	    $(".ptitle").click(function(){
	        $(this).next().slideToggle("slow");
	    });
	});

	$("#jump").click(function() {
    $('html, body').animate({
        scrollTop: $("#p1").offset().top -200
    }, 1000);
});
</script>
<?php include 'part/footer.php'; ?>