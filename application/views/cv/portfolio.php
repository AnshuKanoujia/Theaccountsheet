<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<!--<h1>MYLOGO.COM</h1>-->
<h2>PORTFOLIO</h2>
<hr>

<!--<p>Resize the browser window to see the responsive effect.</p>-->

<!-- Portfolio Gallery Grid -->
<div class="row">
   
   <?php
		$path = base_url('uploads/'.$protfolio_person['image']); // 
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		
					
   ?>

  <div class="column">
    <div class="content">
      <img src="<?=$base64?>" alt="Mountains" style="width:100%">
      <h3><?= $protfolio_person['title']; ?></h3>
      <p><?= $protfolio_person['description']; ?></p>
    </div>
  </div>

  
<!-- END GRID -->
</div>



<!-- END MAIN -->
</div>

</body>
</html>
