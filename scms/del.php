<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) {
      switch($_SESSION['category']) {
	  case 1:
		  header('location:forbidden.php');//redirect to user page
        break;
	  case 2 :
		  header('location:deskofficer.php');//redirect to co page
		 
      break;
		
      }
	  }else
	  {

header('Location:index.php');
}
?>
<!DOTYPE html>
<html lang="en">
<head>

<?php include ("dbconn.php"); ?>
	<meta charset="utf-8">
	<title>Deleting an account</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	
<!--[if !IE]><!--><script type='text/javascript' src='scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 



	
	<!-- Evo slider-->
 
	
	<!-- Evo slider-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <link href="css/style_1.css" rel="stylesheet" media="screen">
  
	<link rel="Stylesheet" type="text/css" href="css/default/reset.css" />
    <link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
    <link rel="Stylesheet" type="text/css" href="css/default/default.css" />   
    <script type="text/javascript" src="js/jquery.evoslider.lite-1.1.0.js"></script>   
	        
	<style>
		body{
		background:#E9EAED;
		}
		
	</style>
	
	 <script src="incls/jquery.js"></script>
    <script src="incls/script.js"></script>
    <script src="incls/script.responsive.js"></script>
	
	<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 1){$("#user-result").html('');return;}
		
		if(username.length >= 1){
			$("#user-result").html('<img src="images/loader.gif" />');
			$.post('check-uname.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
</script>	
	
</head>
		

<body>
	
	<div id="container">
	<img src="images/banner.jpg" class="banner">

			<div class="nav">
				<ul>
					<a href="activator.php"><li><i class="icon-home icon-large"> </i> Activate </li></a>
					<a href="deactivator.php"><li><i class="icon-list-alt icon-large"> </i> De-Activate</li></a>					
					<a href="deleter.php"><li><i class="icon-folder-open icon-large"> </i> Delete</li></a>
					<a href="viewmsgs.php"><li><i class="icon-folder-open icon-large"> </i> View Messages</li></a>
					<a href="cases.php"><li><i class="icon-folder-open icon-large"> </i> Solved Cases</li></a>
					<a href="log_out.php"><img src=images/quit_1.png></a>
					
				<ul>
			</div>
	
	<br/>
		<br/>
		<div class="alert alert-success">
			<strong>WELCOME</strong> to Students complaint management system
				<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
			</div>
			</div>
	<div class="content-left">
		<font style=" color:darkblue; font:bold 24px 'cambria';">
		
						<i class="icon icon-exclamation"></i>Deleting an Account</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
						
							<div class="serts">
							 <table width="100%" border="0" cellpadding="1" cellspacing="1">
                  <tr> 
                        <td width="358" height="20" valign="middle" bgcolor="#8FC4F7"> 
                         <div align="center"><b><font color="#FFFFFF">Welcome <?php echo $_SESSION['username'];?></font></b></div>
                        </td>
                  </tr>
		
               </table>	 
            <?php
       	 include("incls/connector.php");		
	     $id=$_REQUEST['userid']; 
	 	 $query="SELECT * FROM users WHERE userid='".$id."'";
		
		 $resource=mysql_query($query,$conn) or die ("An unexpected error occured while <b>Deleting the account</b> the record, Please try again!");
		  $result=mysql_fetch_array($resource);
		  
	 ?>
	    <form id="form1" name="form1" method="post" action="">
        <table align="center" width="400" border="0">
          <tr>
            <td width="129"><strong>Account id:</strong></td>
            <td width="152">
            <input type="hidden" name="uid" value="<?php echo $result[0] ?>"  />
			<input type="hidden" name="uname" value="<?php echo $result[2] ?>"  />
            <label>
              <input name="id" type="text" id="textfield" value="<?php echo $result[0] ?>" readonly />
            </label></td>
          </tr>
		  <tr>
		     <td width="129"><strong>username:</strong></td>
			 <td> <input name="uname" type="text" id="textfield" value="<?php echo $result[2] ?>" readonly /></td>
		  </tr>
		 </table>
		 <p align="center">
          <label>
            <input type="submit" name="de" class="button" value="Delete" />
          </label>
        </p>
		 </form>
<?php
   if (isset($_POST['de'])){ 
   include("incls/connector.php");
	 $id=$_POST['id'];
	$query="DELETE FROM users WHERE userid='".$id."'";
		
		  if(!mysql_query($query,$conn))
		  {die ("An unexpected error occured while Deleting the account Please try again!");}
		  
	 ?>

<script type="text/javascript">
	alert('The Account has been Deleted');
	window.location="deleter.php";
	</script>

	<?php
	}
	?>	
	 
					</div>
					<br>
</div>



				
				
	
	
		
		
		
		
	
	
		
		

<footer>
<center>Copyright &copy; Students complaint management system | All Rights Reserved 2019  </center>
</footer>		
	</div><!-- end container --->

</body>

<?php include('scripts.php'); ?>
</html>