
<html>
    <head>
        <title>area</title>
        <link rel="stylesheet" href="style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
        <link href="style1.css" rel="stylesheet" type="text/css">
        <link href="style4.css" rel="stylesheet" type="text/css">
    </head>
    <body background="img1.jpg">
    <div id="menu" style="float:left;opacity : 1"> 
      <img id="img1" alt="" src="logo.jpg" >
    </div>
    <div id="content" style="background-color:rgba(240,192,200,0.1);height:166px;width:1080px;float:left;opacity :1">
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

    <div style="width:550px;
height:340px;
line-height:3em;
overflow:none;
position: absolute;
    top: 270px;
    left: 600px;
padding:5px;" id="container">
        <form method="POST" action="" name="form1">
            <table>
                <tr><td>
                        <label>Location:</label>
                    </td><td>
                        <select name="information">
	<?php
    $link=mysql_connect("localhost","u418026137_ss","");
    mysql_select_db("u418026137_ss");
    $q="select max(serial_no) from station";
    $rec=mysql_query($q);
    $r=mysql_fetch_row($rec);
    $q="select location from station";
    $rec1=mysql_query($q);
	echo $r[0];
   for($i=0;$i<$r[0];$i++)
    {
	
		$r1= mysql_fetch_row($rec1); 
       echo "<option>".$r1[0]."</option>";
    }
	?>
	</select>
	<?php
        if(isset($_POST['submit']))
        {
		
		$link=mysqli_connect("localhost","u418026137_ss","");
		mysqli_select_db($link,"u418026137_ss");
		$q="select * from station where location='".$_POST["information"]."'";
		$rec=mysqli_query($link,$q);
		$r=mysqli_fetch_row($rec);
		$area=$r[2];
		$name=$r[3];
		$number=$r[4];
		}
		if(isset($_POST['cancel']))
        {
		header ("location: user_select.php");
		}
		
        ?>
                    </td><td><input type="submit" name="submit" value="SUBMIT"/></td>
                </tr>
                <tr><td>
                        <label>Area code:</label>
                    </td><td>
                        <input type="text" name="area_code" value="<?php echo @$area; ?>"/>
                    </td>
                </tr>
                <tr><td>
                        <label>Police Station Head:</label>
                    </td><td>
                        <input type="text" name="station_name" value="<?php echo @$name; ?>"/>
                    </td>
                </tr>
                <tr><td>
                        <label>Phone Number:</label>
                    </td><td>
                        <input type="text" name="phone_number" value="<?php echo @$number; ?>"/>
                    </td>
                </tr>
                <tr><td>
                    </td><td>
                        <input type="submit" name="cancel" value="BACK"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
       
    </body>
</html>
