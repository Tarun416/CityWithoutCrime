
<html>
    <head>
        <title>register</title>
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
        <li class="topmenu"><a href="help.php" style="width:201px;">Emergency Help?</a></li>
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
padding:5px;" id="container">
        <form method="POST" action="" name="form1">
            <table>
                <tr><td>
                        <label>Registration Number:</label>
                    </td><td>
                        <input type="text" name="reg_no"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Name:</label>
                    </td><td>
                        <input type="text" name="name"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Gender</label>
                    </td><td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="male">Female<label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                       <label>Address</label> 
                    </td><td>
                        <input type="text" name="address"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Phone Number:</label>
                    </td><td>
                        <input type="text" name="phone"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Email:</label>
                    </td><td>
                        <input type="email" name="email"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                       <label>Password:</label> 
                    </td><td>
                       <input type="password" name="password"/> <label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                    </td><td>
                        <input type="submit" name="register_submit" value="SUBMIT"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
        <?php
        if(isset($_POST['register_submit']))
        {
			if($_POST["reg_no"]==""||$_POST["name"]==""||$_POST["gender"]==""||$_POST["address"]==""||$_POST["phone"]==""||$_POST["email"]==""||$_POST["password"]=="")
			{
			echo "<script>alert('Fill the required field')</script>";
			}
			else
			{
           $link= mysqli_connect("localhost","u418026137_ss","hostinger0");
            mysqli_select_db($link,"u418026137_ss");
			$rec=mysqli_query($link,"select reg_no from complaint where reg_no='".$_POST["reg_no"]."'");
			$r=mysqli_fetch_row($rec);
			if($r[0]=="")
			{
				echo "<script>window.alert('Invalid registration number. If not registered the complaint then please register it by clicking on the Register Complain button on the left side of the screen.');</script>";			
			}
			else{
            mysqli_query($link,"insert into user_register values('".$_POST["reg_no"]."','".$_POST["name"]."','".$_POST["gender"]."','".$_POST["address"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["password"]."')");
            if(mysqli_affected_rows($link)>0)
            {
                echo "<script>alert('Registered Successfully...')</script>";
            }
            else
            {
                echo "<script>alert('Not Registered Successfully...')</script>";
            }
			}
			}
        }
        ?>
    </body>
</html>