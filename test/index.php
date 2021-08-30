<?php
include('test.php');
include('backup.php');
?>
<html>
<head>
<title> honya </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<form method="POST"> 
<div class="form">
 
   <img  class="a" src="./img2.png">
 
   <input  name = "name" type="text" placeholder="Enter Database Name.."><br>
   

   <button name ="backup" class="h">BACKUP</button><br>
   <button  name = "save" class="b">ENCRYPTION</button>
 
</div>
</form>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>