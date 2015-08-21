
<html>
    <head>
        <title>check</title>
        <link rel="stylesheet" href="style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <link href="style4.css" rel="stylesheet" type="text/css">
        <link href="style6.css" rel="stylesheet" type="text/css">
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
        <li class="topmenu"><a href="help.php" style="width:201px;">Emergency Help?</a></li>
</ul>
</form>
    </div>

    <div style="height:400px;
	position: absolute;
    top: 290px;
    left: 600px;"id="container">
        <form method="GET" action="" name="form1">
            <table>
                <tr>
                    <label>Select the operation to perform</label>
                </tr>
				<br>
				<br>
                    <tr><td>
                        <input type="radio" name="check" value="1"><label>Status Information</label>
                    </td><td>
                        <input type="radio" name="check" value="2"><label>Station Information</label>
                    </td>
					</br></tr>
                    <tr><td>
                    </td><td></td><td><input type="submit" name="logout" value="LOGOUT"/></td><td>
                        <input type="submit" name="check_submit" value="SUBMIT"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
        <?php
        if(isset($_GET["check_submit"]))
        {
            if(($_GET["check"])==1)
            {
                header("location:user_status.php");
            }
            if(($_GET["check"])==2)
            {
                header("location:user_station_information.php");
            }
			
        }
		if(isset($_GET["logout"]))
        {
		header("location:home.php");
		}
        ?>
    </body>
</html>