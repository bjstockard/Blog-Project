<?php
/**
 * Created by PhpStorm.
 * User: benjaminstockard
 * Date: 7/28/15
 * Time: 8:19 PM
 */
require_once('db_info.php');




$sql = "SELECT * FROM posts";
$result = $db->query($sql);
if ($result) {

    foreach ($result as $row) {
        echo $row['title'] . "<br>";
        echo $row['author'] . "<br>";
        echo $row['date'] . "<br>";
        echo $row['contents'] . "<br>";
        echo "<br>";
    }

} else {
    echo $db->error;
}