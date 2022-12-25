<?php
    session_start();

    $name = "";
    $email = "";
    $issue = "";
    $comment = "";

    if(!isset($_POST['edit'])) {
 
        session_destroy();
 
    } else {
       
        if(isset($_SESSION['name'])){
            $name = $_SESSION['name'];
            $email = $_SESSION['email'];
            $issue = $_SESSION['issue'];
            $comment = $_SESSION['comment'];
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <title>Simple web contact form</title>
</head>
<body>

    <div class="container">
            <h1> Simple web contact form</h1>
        
            <form action="/SimpleWebContactForm/result.php" method="post">
                <label for="name">Name :</label>
                <input type="text" name="name" value="<?= $name?>" required><br><br>

                <label for="email">Email :</label>
                <input type="email" name="email" value="<?= $email?>" required><br><br>

                <label for="issue">Select users issue</label>

                <select name="issue" >
                    <option value="Query" <?php if($issue == "Query") echo "selected"?> >Query</option>
                    <option value="Feedback" <?php if($issue == "Feedback") echo "selected"?>>Feedback</option>
                    <option value="Complaint" <?php if($issue == "Complaint") echo "selected"?> >Complaint</option>
                    <option value="Other" <?php if($issue == "Other") echo "selected"?> >Other</option>
                </select><br><br>

                <label for="comment">Comment:</label><br>

                <textarea id="summernote" name="comment"><?= $comment?></textarea>

            <input type="submit" name="submit" value="Submit">
            </form>
    </div>

<script>
    $(document).ready(function() {
      $('#summernote').summernote();
    });
</script>
</body>
</html>