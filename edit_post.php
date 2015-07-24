<?php
/**
 * Created by PhpStorm.
 * User: benjaminstockard
 * Date: 7/23/15
 * Time: 7:51 PM
 */
require_once('db_info.php')
?>

<h1>Create Post<h1>

<form action= "edit_post.php" method="POST">

<input type="text" name="title" placeholder="Title your post"><br>
<input type="text" name="author" placeholder="Who are you?"><br>
<textarea name="content" rows="25" cols="80">Write Something!</textarea>

<input type="submit" name="submit" value="Post">

</form>

<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
}