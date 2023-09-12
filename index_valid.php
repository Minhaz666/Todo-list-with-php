<?php
require_once 'db.php';
if(isset($_POST['addtask'])){
  $task_add = $_POST['textfield'];
  $image = $_FILES['image']['name'];
  $imageTem = $_FILES['image']['tmp_name'];
  $imageLocation = "images/".$image;
  move_uploaded_file($imageTem,$imageLocation);
  if(!empty($task_add)){
    $task_add_query = "INSERT INTO task_table (task_name, image) VALUES  ('$task_add', '$image')";
    $add_query = $dbcon -> query($task_add_query);
  }

  header('location: index.php');
  

  

}




?>
