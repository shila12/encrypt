<?php 
 if(isset($_POST['save'])){
    $name = $_POST['name'];
    
   $db = new mysqli("localhost","root","",$name);
    if($db->connect_errno){
        exit($db->connect_error);
    }
    $check = $db->query('SHOW TABLES');
      for ($i=0; $i <= mysqli_num_rows($check); $i++) { 
        $columns  = array();
        while ($table=mysqli_fetch_array($check)) {
             $table[0];
  $resultcol = $db->query('SHOW COLUMNS FROM '.$table[0].'');
  while ($column=mysqli_fetch_assoc($resultcol)) {
       $g[] = $column['Field'];
      
}
  $data = $db->query('SELECT * FROM '.$table[0].'');
  for ($a=0; $a <= mysqli_num_rows($data); $a++) { 
    while ($row=mysqli_fetch_assoc($data)) {
        for ($j=0; $j <mysqli_num_rows($resultcol); $j++) { 
                   $field = $g[$j];
              $encrypt = hash('md5',$row[$field]);
              $orginal = $row[$field];
              $update = $db->query('UPDATE  '.$table[0].' SET  `'.$field.'` = "'.$encrypt.'"  WHERE `'.$field.'` = "'.$orginal.'" ');
         $msg=1;
     }

}unset($g);}
}
}


if ($msg===1) {
  echo '<script>alert("Database Has Been Encrypted!!")</script>';
}
}//isset



?>
