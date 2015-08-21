
<html>
    <head>
        <title>details</title>
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

    <div style="height:425px;
	overflow:scroll;
	position: absolute;
    top: 270px;
    left: 600px;"id="container">
        <form method="POST" action="" name="form1">
            
            <table>
                <tr>
                    
                        <center><h3>Enter the details of the criminal</h3></center>
                        
                </tr>
				<tr><td>
                       <label>Type of Complaint:</label> 
                    </td><td>
                        
                        <select name="complaint_type">
                        
							<option> Select Complaint </option>
                            <option value="1">Murder</option>
                            <option value="1">Theft</option>
                            <option value="3">Rape</option>
                            <option value="4">Other</option>
                       </select>
                    </td>
                </tr>
                <tr><td>
                        <label>Gender</label>
                    </td><td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                </tr>
                <tr><td>
                       <label>Height</label> 
                    </td><td>
                        <input type="text" name="height"/>
                    </td>
                </tr>
                <tr><td>
                        <label>Weight</label>
                    </td><td>
                        <input type="text" name="weight"/>
                    </td>
                </tr>
				<tr>
				<td>
				<label>Complaint Description</label>
				</td>
				<td>
				<textarea rows="4" cols="45" name="description"></textarea>
				</td>
                <tr><td>
                    </td><td>
                        <input type="submit" name="detail_submit" value="SUBMIT"/>
                    </td>
                </tr>
            </table>
        </form>
    </div><!--/ container-->
    <!-- End Page Content -->
        <?php
        // put your code here
        ?>
    </body>
</html>
