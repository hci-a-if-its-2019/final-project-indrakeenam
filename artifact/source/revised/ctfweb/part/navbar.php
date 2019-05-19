<nav role='navigation'>
  <ul>
  	<li><a href="profile.php"><?php echo $_SESSION['username']; ?></a></li>
    <li><a href="index.php">Problems</a>
      <ul>
        <li><a href="index.php">Browse problems</a></li>
        <li id="makeproblem"><a>Create a problem</a></li>
      </ul>
    </li>
    <li><a href="scoreboard.php">Scoreboard</a></li>
    <li><a href="logout.php">Log Out</a></li>
  </ul>
</nav>  
<br style="line-height: 100px;">