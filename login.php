<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="CSS3 Menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <link href="style3.css" rel="stylesheet" type="text/css">
        <link href="style4.css" rel="stylesheet" type="text/css">
    </head>
    <body background="img1.jpg">
    <div id="menu" style="float:left;opacity : 0.6"> 
      <img id="img1" alt="" src="logo.jpg" >
    </div>
    <div id="content" style="background-color:#EEEEEE;height:166px;width:1080px;float:left;opacity : 0.2">
    </br>
    <label class="a">CITY WITHOUT CRIME</label>
    </div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="float: left;">
<form method="post" action="">
<ul id="css3menu1" class="topmenu">
<input type="checkbox" id="css3menu-switcher" class="switchbox"><label onclick="" class="switch" for="css3menu-switcher"></label>	
<li class="topfirst"><a href="home.php" style="width:201px;">Home</a></li>
<li class="topmenu"><a href="signin.php" style="width:201px;">Register Complaint</a></li>
	<li class="topmenu"><a href="selfdefence.php" style="width:201px;">Learn Self Defence</a></li>
	<li class="topmenu"><a href="crimestats.php" style="width:201px;">Crime Statistics of your country</a></li>
        <li class="topmenu"><a href="FAQ.php" style="width:201px;">FAQ's</a></li>
        <li class="topmenu"><a href="contact.php" style="width:201px;">Contact Us</a></li>
        <li class="topmenu"><a href="help.php" style="width:201px;">Help?</a></li>
</ul>
</form>
    </div>

    <div id="container">
        <form method="POST" action="" name="form1">
            <table>
                <tr><td>
                        <label>Registration Number:</label>
                    </td><td>
                        <input type="text" name="regno"/>
                    </td>
                </tr>
                <tr><td>
                        <label>Email:</label>
                    </td><td>
                        <input type="email" name="email"/>
                    </td>
                </tr>
                <tr><td>
                       <label>Password</label> 
                    </td><td>
                       <input type="password" name="pswd"/> 
                    </td>
                </tr>
                <tr><td>
                    </td><td>
                        <input type="submit" name="submit" value="SUBMIT"/>
                    </td>
                </tr>
            </table>
        </form>
    </div><!--/ container-->
    <!-- End Page Content -->
        <?php
        if(isset($_REQUEST['submit']))
        {
            mysqli_connect("localhost","u418026137_ss","hostinger0");
            mysqli_select_db($link,"u418026137_ss");
            mysqli_query("insert into register values($_POST[regno], '$_POST[name]', '$_POST[gender]', '$_POST[add]', $_POST[ph], '$_POST[email]', '$_POST[pswd]')");
            if(mysql_affected_rows()>0)
            {
                echo "<script>alert('Registered Successfully...')</script>";
            }
            else
            {
                echo "<script>alert('Registered Successfully...')</script>";
            }
        }
        // put your code here
        ?>
    </body>
</html>