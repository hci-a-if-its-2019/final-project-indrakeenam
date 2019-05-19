<?php
	include("auth.php");
	include("db.php");
	include("submitproblem.php");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src='script/script.js'></script>
</head>
<body>

<?php include 'navigation.php';?>

	<div> 
        <div id='pmaker'>
            <form method='POST' action=' <?php echo setProblem($con);?>' enctype='multipart/form-data'>
		        <h2>Create A Problem</h2>
                <p>Problem Name</p> 
                <input type='text' name='pname' style='margin-left: 112px; width:350px;' placeholder='Problem Title' required><br>
                
                <p>Problem Category</p> 
                <input type='text' name='category' style='margin-left: 90px; width:350px;' placeholder='Category' required><br>

                <p>Problem Flag</p> 
                <input type='text' name='flag' style='margin-left: 125px; width:350px;' placeholder='Flag' required><br>
            
                <p>Score</p>
                <input type='text' name='score' style='margin-left: 178px; width:350px;' placeholder='Score' required><br>
                <p>Description</p>
                <br>
                    <textarea name='desc'></textarea>
                <br>
                    File (optional) Max : 1MB <input type='file' name='userfile'><br><br>
                
                <button type='submit' name='psubmit' class='button'>Submit</button>
	        </form>
	    </div>
    </div>";


<br>
<footer class="footer">
</footer>
</body>
</html>