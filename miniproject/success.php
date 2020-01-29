<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
    <title>home</title>
	<link href="yo2.css" rel="stylesheet">

</head>
   <body>
       <h2 style=color:darkblue> 
		<?php echo $login_session; ?> you have registered successfully.
       </h2>
	   <a href="firstpage.html"><button>Home Page</button></a>
		 
    </body>
</html> 