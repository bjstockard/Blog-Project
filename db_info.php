<?php
/**
 * Created by PhpStorm.
 * User: benjaminstockard
 * Date: 7/23/15
 * Time: 7:41 PM
 */


$db = new mysqli("localhost", "root", "root", "blog");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL :(<br>";
    echo $db->connect_error;
    exit();
}