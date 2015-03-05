<?php

$my_email  = "tsjamie1@umbc.edu";
$sender         = $_POST['sender'];
$sender_email   = $_POST['sender_email'];
$message        = wordwrap($_POST['message'], 70);

if (isset( $sender, $sender_email, $message)) {
    $result = @mail( $my_email, $sender, $message, $sender_email);

    print 'Your message was sent sucessfully. Thank You.';
    sleep(1);

    echo "<br><a href='http://tsaojamie.tk'><button type='button'>Go Back</button></a>";
    
} else {
  print 'Please fill out all the required information. Thank you!';
}
?>