<?php

  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];

  if (empty($name) || empty($email) || empty($message))
  {
  echo "Please fill all the fields";}

  else {
    mail("nwin123@rediffmail.com", "Message", $message, "From: $name <$email>" );
    echo "<script type='text/javascript'>alert('your message send succesfully');
    window.history.log(-1);
    </script>";
  }





?>