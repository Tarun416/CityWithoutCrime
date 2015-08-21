
<html>
    <head>
        
        <title>complaint</title>
		<link rel="stylesheet" href="style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
		<link href="style4.css" rel="stylesheet" type="text/css">
       <link href="style1.css" rel="stylesheet" type="text/css">
        
        
               
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
        <form method="post" name="myForm" >
            <table>
                <tr><td>
                        <label>Victim Name:</label>
                    </td><td>
                        <input type="text" name="victim_name"/><label class=verify>*</label>
                    </td>
                </tr>
                
                <tr><td>
                        <label>Crime Location:</label>
                    </td><td>
                        <input type="text" name="crime_location"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Area Code:</label>
                    </td><td>
                        <input type="text" name="area_code"/><label class=verify>*</label>
                    </td>
                </tr>
                
                <tr><td>
                        <label>Type of ID Proof:</label>
                    </td><td>
                        <select name="id_type">
                        
							<option> Select ID proof type </option>
                            <option value=" voter id">Voter ID</option>
                            <option value="pan card">Pan Card</option>
                            <option value="driving license">Driving License</option>
                            <option value="aadhar card">Aadhar Card</option>
							<option value="passport">Passport</option>
                       </select>
                    </td>
                </tr>
				<tr>
				<td></td>
				<td>
				<input type="file" name="f" /><label class=verify>*</label>
				</td>
				</tr>			
            </table>
			<table>
                <tr>
                    
                        <center><h3>Enter the details of the criminal</h3></center>
                        
                </tr>
				<tr><td>
                       <label>Type of Complaint:</label> 
                    </td><td>
                        
                        <select name="complaint_type">
                        
							<option> Select Complaint </option>
                            <option value="Murder">Murder</option>
                            <option value="Theft">Theft</option>
                            <option value="Rape">Rape</option>
                            <option value="Other">Other</option>
                       </select>
                    </td>
                </tr>
                <tr><td>
                        <label>Gender</label>
                    </td><td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female<label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                       <label>Height</label> 
                    </td><td>
                        <input type="text" name="height"/><label class=verify>*</label>
                    </td>
                </tr>
                <tr><td>
                        <label>Weight</label>
                    </td><td>
                        <input type="text" name="weight"/><label class=verify>*</label>
                    </td>
                </tr>
				<tr>
				<td>
				<label>Complaint Description</label>
				</td>
				<td>
				<textarea rows="4" cols="37" name="description"></textarea><label class=verify>*</label>
				</td>
				</tr>
                <tr><td>
                    </td><td>
                        <input type="submit" name="complaint_submit" value="SUBMIT"/>
                    </td>
                </tr>
            </table>
        
      
           
    </div>
	
	

<?php
        if(isset($_POST["complaint_submit"]))
        {
		if($_POST["victim_name"]==""||$_POST["crime_location"]==""||$_POST["area_code"]==""||$_POST["id_type"]==""||$_POST["f"]==""||$_POST["complaint_type"]==""||$_POST["gender"]==""||$_POST["description"]==""||$_POST["height"]==""||$_POST["weight"]=="")
		{
		echo "<script>window.alert('Fill the required field');</script>";
		}
		else
		{
		$link=mysqli_connect("localhost","u418026137_ss","hostinger0");
		mysqli_select_db($link,"u418026137_ss");
		$unique=rand();
		$q="insert into complaint values('".$unique."','".$_POST["victim_name"]."','".$_POST["crime_location"]."',".$_POST["area_code"].",'".$_POST["id_type"]."','".$_POST["f"]."','".$_POST["complaint_type"]."','".$_POST["gender"]."',".$_POST["height"].",".$_POST["weight"].",'".$_POST["description"]."');";
		$rec=mysqli_query($link,$q);
		
		if(mysqli_affected_rows($link))
    {
		echo "<script>window.alert('You have registered your case successfully. You registration number is ".$unique."');</script>";
    }
     else
    {
        echo "<script>window.alert('You case did not register successfully');</script>";
    }
		}
       }
?>
    </form>
    </body>
</html>