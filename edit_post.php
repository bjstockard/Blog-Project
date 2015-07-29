<?php

require_once('db_info.php');

?>

<h1>Create Post<h1>

<form action= "edit_post.php" method="POST">

<input type="text" name="title" placeholder="Title your post"><br>
<input type="text" name="author" placeholder="Who are you?"><br>
<textarea name="content" rows="25" cols="80">Write something!</textarea>

<input type="submit" name="submit" value="Post">

</form>

<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
    $date = date('m/d/Y h:i:s',time());

    $error = "";


    if ($title == "") {
        $error .= "Please enter a title for your post.<br>";
    }
    if ($author == "") {
        $error .= "Please enter your name.<br>";
    }
    if ($content == "" || $content == "Write something!") {
        $error .= "Please enter a blog post";
    }
    //if ANYTHING sent an error, don't insert the post
    if ($error != ""){
        //Just print out the error and don't make the post
        echo $error;
    } else {
        //We are good to make the post

        $stmt = $db->prepare("INSERT INTO posts (title, author, contents, date) VALUES (?,?,?,?)");
        //echo '<pre>';
        //var_dump($stmt);
        //echo '</pre>';
        $stmt->bind_param("ssss", $title, $author, $content, $date);
        $stmt->execute();
    }

}

