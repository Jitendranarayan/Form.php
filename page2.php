<?php
  // Get the form data
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  // Validate the form data
  if (empty($name)) {
    echo "Please enter your name.";
    exit;
  }

  if (empty($phone)) {
    echo "Please enter your phone number.";
    exit;
  }

  if (empty($email)) {
    echo "Please enter your email address.";
    exit;
  }

  if (empty($Location)){
    echo "Please enter your Location.";
  }
  if (empty($Age)){
    echo "Please enter your Age.";
  }
  if (empty($university)){
    echo "Please enter your university.";
  }

?>