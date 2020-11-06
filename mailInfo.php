<?php
    include_once('db.php');

    $emailid=$_POST['emailid'];

    if(mysql_query("INSERT INTO user VALUES('$emailid')"))
        echo "Successfully Sumbit MailId";
    else
        echo "Already Existing MailId";
?>