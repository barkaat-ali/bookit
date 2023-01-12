
<?php
    include('config.php');
    extract($_POST);
   $qry=mysqli_query("INSERT INTO `tbl_contact` ( `name`, `email`, `mobile`, `subject`) values('$name','$email',$mobile','$subject')");
    //echo $qry;
    //header('location:contact.php');
?>