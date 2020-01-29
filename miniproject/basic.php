

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylehseet" href="basic.css"> -->
  <link rel="stylesheet" href="basic.css">
  <title>Document</title>
</head>
<body>
 <div class="topnav">      		
            <a href="basic.php">GALLERY</a> 
            <a href="event.php">EVENTS</a>  
           <a href="logout.php">LOGOUT</a> 
           </div>
<?php $dirname = "gallery/";
$images = glob($dirname."*.JPG");
?>
<div id="container" style="margin: 0 5%; padding: 20px">
  <div class="row"
  <div class ="column">
<?php
foreach($images as $image) {
    echo "<div class='col-md-4 mb-5'>";
    echo '<img src="'.$image.'"  width="300px" style="display:inline; box-shadow: 0px 5px 15px rgba(0, 0, 0, 1)"/><br />';
    echo "</div>";
}?>
</div>
</div> 

</header>
</body>
</html>