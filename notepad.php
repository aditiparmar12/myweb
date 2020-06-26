<?php
 
   include('connection.php');
   if(isset($_POST['submit']))
   {
	   $var = $_POST['con'];
  	   $content = $_POST['editor'];
           $insert_q="INSERT INTO `content`(`id`, `content`) VALUES ('$var', '$content')";
	   $add = mysqli_query($connection,$insert_q);
           if($add) {

           }else{
               $submit_error='<b class="text-danger text-center">YOU ARE NOT ABLE TO SUBMIT PLEASE TRY AGAIN</b>';
       }
       //creating html file
   //$data_file=fopen("test.html","w");
  // $fetch=mysqli_query($connection, "select * from content");
  // $i=0;
  // while($row=mysqli_fetch_array($fetch)){
       $t =  $_POST['con']."-".time();
       $data_file=fopen("$t.html","w");
     //  $fd=fopen("styles.css","w");
       //$id[$i] = $row['id'];
       fwrite($data_file,"<html>");
      fwrite($data_file,"<head><link rel=\"stylesheet\" href=\"styles.css\">");
     //  fwrite($data_file,"<link rel=\"stylesheet\" href=\"styles.css\">");
       // fwrite($data_file,"</head>");  
      // $content1[$i] = $row['content'];
       $content1= $_POST['editor'];
     //  fwrite($data_file,"</html>");
       $text_to_write = $content1;
        fwrite($data_file,$text_to_write);
       fclose($data_file);
      // $i++;
   
   
   //$con=$_POST["con"];
   //$editor=$_POST["editor"];
   //$text_to_write=$con ."". $editor;
   //write data
   //fwrite($data_file,$text_to_write);
  // fclose($data_file);
   }
   
?>


<html>
    <head>
        <meta charset="utf-8">
         
    </head>
    <body>
        <div class="container" style="width:800px;   display: block; margin-left: auto;margin-right: auto;">
	
        <form action="" method="post" entype="multipart/form-data">

    	    <input name="con" placeholder="title"required/><br><br>
            <textarea class="ckeditor" name="editor" required></textarea>
            <br><br><br>
            <button type="submit" name="submit" class="btn btn-success">
                <span class="submit">
			Submit
                </span>

            </button>

            </form>
	
        </div>
        <script src="ckeditor/ckeditor.js">

        </script>
        <script>
            CKEDITOR.replace('editor');
        </script>
    </body>
</html>