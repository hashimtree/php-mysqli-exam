 <?php include "database.php"; ?>

<?php
	//Get the total questions
	$query="select * from hquestions";
	//Get Results
	$results = $mysqli->query($query) or die ($mysqli->error.__LINE__);
	$total = $results->num_rows;



 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>كلية الجزيرة للعلوم الطبية و التكنولوجيا التعليم عن بعد </title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
        <div class="container">
         <p><p><p> <center><h1>Online Programs</h1>
	</div>
      </header>


      <main>
      <div class="container">
        <h2>Online Tests System and Evaluation</h2>
	<p>الرجاء استعمال أزرار الصفحة في التنقل للحصول على درجتك الكترونيا و ليس المتصفح</p>
	<ul>
		<li><strong>Number of Questions: </strong><?php echo $total; ?></ul>
		<li><strong>Type: </strong>Multiple Choice Questions in Histology</ul>
		<li><strong>زمن الامتحان  : </strong><?php echo $total*0.5; ?>
		
		minutes</ul>
	</ul> <p><p>
	<a href="hquestion.php?n=1" class="start"><h2>ابدأ الامتحان <h2/></a>
      </div>
    </div>
    </main>
<!DOCTYPE html>
<html>
<body><center

><h2>كلية الجزيرة للعلوم الطبية و التكنولوجيا </h2>
<img src="c06.jpg" alt="Trulli" width="1000" height="333">

</body>
</html>

    
    