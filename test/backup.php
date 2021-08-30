<?php
require('test.php');

if (isset($_POST['backup'])){

    

        $directory = "css/";
     
        $fileName = "backup"."sql";
        $backupFile = "mysqldump --user='root' --password='' --host='localhost' '$name' > ".$directory.$fileName;

        exec($backupFile,$output);

        if($output == ''){ 
            echo '<br />Failed To Backup Database!';
        }else{
            echo  '<br />Database Backup Was Successful!';
        }
    

    
}