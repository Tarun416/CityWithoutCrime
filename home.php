
<html>
    <head>
         <title>home</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
		
		<style type="text/css">
		._css3m{display:none}
		</style>
        
        <link href="style4.css" rel="stylesheet" type="text/css">
		<link href="style1.css" rel="stylesheet" type="text/css">
    </head>
    <body background="img1.jpg">
<div id="menu" style="float:left;opacity : 1"> 
      <img id="img1" alt="" src="logo.jpg" >
</div>
<div id="content" style="background-color:rgba(240,192,200,0.1);height:166px;width:1080px;float:left;opacity : 1">
<label class="a"><marquee  scrollamount="20">CITY WITHOUT CRIME</marquee></label>
</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="float: left;">
<form method="post" action="">
<ul id="css3menu1" class="topmenu">	
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


<div style="float:right;">    
	<form method="post" action="">
<ul id="css3menu1" class="topmenu">
<input type="checkbox" id="css3menu-switcher" class="switchbox"><label onclick="" class="switch" for="css3menu-switcher"></label>	
<li class="topfirst"><a href="register.php" style="width:201px;">Register</a></li>
<li class="topmenu"><a href="check.php" style="width:201px;">Sign in</a></li>
    </form>
</ul>
</div>
 
    <?php
       if(isset($_REQUEST['btn2']))
       {
          header('Location: register.php'); 
       }
      
       if(isset($_REQUEST['btn1']))
       {
           header('Location: check.php');
       }
        // put your code here
        ?>
    
   </body>
</html>