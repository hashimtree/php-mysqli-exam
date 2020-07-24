<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Create Select Query
	

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>كلية الجزيرة للعلوم الطبية و التكنولوجيا </title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
          <h1>Online Tests and Evaluation</h1>
	</div>
      </header>


      <main>
	<div class="container">
	     <h2>You are Done!</h2>
	     <p>لقد أكملت الامتحان</p>
	
	
	
	     <p>و قد احرزت: <?php
$s=$_SESSION['score']; 
$sql="INSERT INTO hscores (score)
VALUES ('$s')";
if ($mysqli->query($sql)=== TRUE){echo $s;
    
    echo "     من إجمالي عدد الاسئلة التي أخترتها       ";
}  ?></p>
	     <a href="hquestion.php?n=1" class="start">Take Test Again</a>
	     <?php session_destroy(); ?>
	</div>
      </main>
    <footer>
      <div class="container">
      	   كلية الجزيرة للعلوم الطبية و التكنولوجيا ٢٠٢٠
      </div>
    </footer>
  </body>
</html>