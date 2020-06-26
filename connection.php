<?php

 //   $connection=mysqli_connect('localhost:8080','root','','ckeditor')
  //  or die("databse is not connected".mysqli_connect_error());
  $connection = mysqli_connect("localhost","root","","ckeditor");
 
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
 