<?php
$id=$_GET['id'];
//echo $id;
    mysql_connect("localhost","u418026137_ss","hostinger0");
        mysql_select_db("u418026137_ss");
       $res= mysql_query("select areacode from area where name='$id'");
       echo "<option>Select Code</option>";
       while ($row= mysql_fetch_array($res))
       {
          echo "<option>$row[0]</option>";
          // echo $row[0];
       }
       
?>