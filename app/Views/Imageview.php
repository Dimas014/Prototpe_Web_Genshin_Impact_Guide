<?php

    mysql_connect("localhost", "root", "");
 mysql_select_db("karakter");
    if(isset($_GET['gambar_id'])) {
        $sql = "SELECT * FROM karakter WHERE id=" . $_GET['gambar_id'];
  $result = mysql_query("$sql")
        or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
  $row = mysql_fetch_array($result);
  header("Content-type: " . $row["imageType"]);
        echo $row["gambar"];
 }
 mysql_close($conn);
?>