
<html>
    <head>
        <meta charset="UTF-8">
        <title>criminal</title>
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
                    </td><td>
                        <input type="text" name="serial_no"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Name:</label>
                    </td><td>
                        <input type="text" name="name"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Gender:</label>
                    </td><td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female<label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                       <label>Height:</label> 
                    </td><td>
                        <input type="text" name="height" placeholder="Enter in Cms"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Weight:</label>
                    </td><td>
                        <input type="text" name="weight" placeholder="Enter in Kgs"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Status:</label>
                    </td><td>
                        <input type="text" name="status"/><label class=verify>*</label>
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
                        <input type="submit" name="submit" value="SUBMIT"/><input type="submit" name="cancel" value="CANCEL"/>
                    </td>
                </tr>
            </table>
        
    </div>
        <?php
        if(isset($_POST['submit']))
        {
		if($_POST["serial_no"]==""||$_POST["name"]==""||$_POST["gender"]==""||$_POST["height"]==""||$_POST["weight"]==""||$_POST["status"]=="")
		{
		echo "<script>window.alert('Fill the required field');</script>";
		}
		else
		{
		$link=mysqli_connect("localhost","u418026137_ss","hostinger0");
		mysqli_select_db($link,"u418026137_ss");
		$q="select max(sr_no) from criminal";
		$rec=mysqli_query($link,$q);
		$r=mysqli_fetch_row($rec);
		if($r[0]=="")
		{
        $sn=1;
		}
		else
		{
        $sn=$r[0];
        $sn++;
		}
		$q="insert into criminal values(".$sn.",'".$_POST["serial_no"]."','".$_POST["name"]."','".$_POST["gender"]."',".$_POST["height"].",".$_POST["weight"].",'".$_POST["status"]."','".$_POST["f"]."')";
		$rec=mysqli_query($link,$q);
		if(mysqli_affected_rows()>0)
    {
        echo "<script>window.alert('Successfully submitted');</script>";
		header ("location: admin_select.php");
    }
     else
    {
        echo "<script>window.alert('Error Occurred');</script>";
    }
		}
		}
		 if(isset($_POST['cancel']))
        {
		header ("location: admin_select.php");
		}
		
        ?>
    </form>
    </body>
</html>