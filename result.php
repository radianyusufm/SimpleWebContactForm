<?php
  session_start();

    $name = "";
    $email = "";
    $issue = "";
    $comment = "";

  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    $comment = $_POST['comment'];

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['issue'] = $_POST['issue'];
    $_SESSION['comment'] = $_POST['comment'];

  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_result.css">

    <title>Simple web contact form</title>
</head>
<body>
  <div class ="container">

    <?php echo "<p> Name : ". $name ."</p>";?>
    <?php echo "<p> Email : ". $email ."</p>";?>
    <?php echo "<p> Issue : ". $issue ."</p>";?>
    <hr>
    <?php echo "<p> Comment : ". $comment ."</p>";?>
    <hr>
    <form action="/SimpleWebContactForm/index.php" method="post">
      <input type="submit" name="edit" value="edit">
    </form>

  </div>
  
  <div class="btn">
    
  </div>
  
</body>
</html>