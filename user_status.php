
<html>
    <head>
        <meta charset="UTF-8">
        <title>User status</title>
        <link rel="stylesheet" href="style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <link href="style1.css" rel="stylesheet" type="text/css">
        <link href="style4.css" rel="stylesheet" type="text/css">
    </head>
    <body background="img1.jpg">
    <div id="menu" style="float:left;opacity : 1"> 
      <img id="img1" alt="" src="logo.jpg" >
    </div>
    <div id="content" style="background-color:rgba(240,192,200,0.1);height:166px;width:1080px;float:left;opacity : 1">
    <label class="a">CITY WITHOUT CRIME</label>
    </div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="float: left;">
<form method="post" action="">
<ul id="css3menu1" class="topmenu">
<input type="checkbox" id="css3menu-switcher" class="switchbox"><label onclick="" class="switch" for="css3menu-switcher"></label>	
<li class="topfirst"><a href="home.php" style="width:201px;">Home</a></li>
<li class="topmenu"><a href="complaint.php" style="width:201px;">Register Complaint</a></li>
	<li class="topmenu"><a href="selfdefence.php" style="width:201px;">Learn Self Defence</a></li>
	<li class="topmenu"><a href="crimestats.php" style="width:201px;">Crime Statistics of your country</a></li>
        <li class="topmenu"><a href="FAQ.php" style="width:201px;">FAQ's</a></li>
        <li class="topmenu"><a href="contact.php" style="width:201px;">Contact Us</a></li>
        <li class="topmenu"><a href="help.php" style="width:201px;">Help?</a></li>
</ul>
</form>
    </div>
    <div style="width:550px;
height:400px;
line-height:3em;
overflow:scroll;
position: absolute;
    top: 270px;
    left: 600px;
float:center;
padding:5px;" id="container">
        <form method="POST"  >
            <table>
                <tr><td>
                        <label>Serial Number:</label>
                    </td><td><?php
        if(isset($_POST['submit']))
        {
		session_start();
		}
        ?>
                        <input type="text" name="serial_no" value="<?php session_start(); echo $_SESSION["x"]?>"/>
                    </td>
                </tr>
                <tr><td>
                        <label>Name:</label>
                    </td><td>
                        <input type="text" name="name"/>
                    </td>
                </tr>
                
                <tr><td>
                        <label>Crime Status:</label>
                    </td><td>
                        <input type="text" name="status"/>
                    </td>
                </tr>
				<tr><td>
                        <label>Station informed:</label>
                    </td><td>
                        <input type="text" name="station"/>
                    </td>
                </tr>
                <tr><td>
                       <label>Picture:</label> 
                    </td><td>
                       <input type="file" name="f" /> <label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                    </td><td>
                        <input type="submit" name="submit" value="GET INFORMATION"/><input type="submit" name="cancel" value="CANCEL"/>
                    </td>
                </tr>
            </table>
        
    </div>
        
    </form>
    </body>
</html>