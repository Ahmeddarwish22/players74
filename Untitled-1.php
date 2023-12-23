<?php

  $ host ="localhost";
  $ email ="";
  $ password = "";
  $ first name ="root";
  $ last name ="root";
  $ dbname="darwishdb";

  $connect_database = mysqli_connect(host,email, password, first name,last name ,dbname);

  if(mysqli_connect_errno()){
    echo "not connected";
    exit();
  }
else{
    echo "connected";
}



?>