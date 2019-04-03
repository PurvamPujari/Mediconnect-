
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
if(!isset($_SESSION['email'])){header("location: ../index.php");}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Mediconnect is an HealthCare social networking website .</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<!--clock init-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form action="results.php" method="get">
											   <input type="text" name="user_query" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" name="searchquery" value="">
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
									<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
													   <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			<span>Home</span>
																			<ul class="dropdown">
																				<li><a href="profile.php" class="deutsch">Profile</a></li>
																				<li><a href="editor.php" class="english">Ask Q</a></li>
																				<li><a href="index.php" class="espana">Home   </a></li>
																				<li><a class="russian">Logout</a></li>

																			</ul>
																		</div>
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				if(obj.val==="Logout"){alert(obj.val);
																																						
																 			}
																			 // if(obj.val==="Logout"){
																				// <?php
																 			// 	session_start();
																	 		// 		session_destroy();
																				// 	header("location :../index.php");
																 			// 	?>
																					
																				// }
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});
																	// $(".russian").click(function(){
																	// 		<?php
																	// 				session_start();
																	// 				session_destroy();
																	// 				header("location :../index.php");
																	// 				?>
																					
																	// });

																</script>
										    </li>
									       <li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Describe your medical issue. </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>You can ask a doctor for free,</p>
															<p><span>2 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Get personalized advice from  </p>
															<p><span>2 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Appointment Booked</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Request send</p>
											<p><span>3 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Appointment Scheduled</p>
											<p><span>4 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Posts</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Appointments</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Comments</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Profile</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
						<div class="clearfix"></div>
					</div>
						<!-- //header-ends -->
							<!--//outer-wp-->

															<?php
																include('connection.php');

												  		$user=$_SESSION['email'];
												  		$get_user="SELECT * from authenticate_user where email='$user'";
												  		$query=mysqli_query($conn,$get_user);
												 		
																$row_posts=mysqli_fetch_array($query);
																$id=$row_posts['id'];
																	// include 'connection.php';
																	$name=$row_posts['name'];
																	$u_image=$row_posts['u_image'];
																	$email=$row_posts['email'];
																	$lastlogin=$row_posts['lastlogin'];
																	$registerdate=$row_posts['registerdate'];
																	$fname=$row_posts['fname'];
																	$lname=$row_posts['lname'];
																	$mobile=$row_posts['mobile'];
																	$occupation=$row_posts['occupation'];
																	$gender=$row_posts['gender'];
																	$bloodgroup=$row_posts['bloodgroup'];
																	$bio=$row_posts['bio'];
																	$dob=$row_posts['dob'];
																	$nationality=$row_posts['nationality'];
																	$address=$row_posts['address'];
																	$pa=$row_posts['pa'];
																	$nd=$row_posts['nd'];
																	$iss=$row_posts['iss'];
																	$rs=$row_posts['rs'];
																	?>

								<div class="outter-wp">
											<!--/sub-heard-part-->
											 <div class="sub-heard-part">
													   <ol class="breadcrumb m-b-0">
															<li><a href="index.php">Home</a></li>
															<li class="active">Basic Info</li>
														</ol>
											</div>	
											<!--/sub-heard-part-->	
												<!--/forms-->
													<div class="forms-main">
														<h2 class="inner-tittle">Basic Info</h2>
															<div class="graph-form">
																	<div class="validation-form">
																				<!---->
																					
																					<form action="info.php" method="post" enctype="multipart/form-data">
																						<div class="vali-form">
																						<div class="col-md-6 form-group1">
																						  <label class="control-label">Firstname</label>
																						  <input name="fname" type="text" placeholder="Firstname" required="" value="<?php echo $fname ?>">
																						</div>
																						<div class="col-md-6 form-group1 form-last">
																						  <label class="control-label">Lastname</label>
																						  <input name="lname" type="text" placeholder="Lastname" required="" value="<?php echo $lname ?>">
																						</div>
																						<div class="clearfix"> </div>
																						</div>
																						
														
																							<div class="col-md-5 form-group1 form-last">
																						  <label class="control-label">Mobile Number</label>
																						  <input name="mobile" type="text" placeholder="Mobile Number" required="" value="<?php echo $mobile ?>">
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group1 group-mail">
																						  <label class="control-label">Occupation</label>
																						  <input name="occupation" type="text" placeholder="Current Occupation" required="" value="<?php echo $occupation ?>">
																						</div><div class="clearfix"> </div>
																						<div class="col-md-6 form-group1 form-last">
																						  <label class="control-label">Your Image</label>
																						  <input name="u_img" type="file" placeholder="Image" >
																						</div>

																						 <div class="clearfix"> </div>
																						  <div class="col-md-3 form-group2 group-mail">
																						  <label class="control-label">Gender</label>
																						<select name="gender">
																							<option value="Male" <?php echo ('Male' === $gender) ? 'selected' : '';?>>Male</option>
																							<option value="Female" <?php echo ('Female' === $gender) ? 'selected' : '';?>>Female</option>
																							<option value="Other" <?php echo ('Other' === $gender) ? 'selected' : '';?>>Other</option>
																						</select>
																						</div>
																						 <div class="col-md-2 form-group2 group-mail">
																						  <label class="control-label">Blood Group</label>
																						<select id="bloodgroupid" name="bloodgroup">
																							<option value="A" <?php echo ('A' === $bloodgroup) ? 'selected' : '';?> > A</option>
																							<option <?php echo ('B' === $bloodgroup) ? 'selected' : '';?>  value="B"> B</option>
																							<option value="AB" <?php echo ('AB' === $bloodgroup) ? 'selected' : '';?> > AB</option>
																							<option value="O" <?php echo ('O' === $bloodgroup) ? 'selected' : '';?> > O</option>
																						</select>
																						</div>

																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group1 ">
																						  <label class="control-label">BioGraphy</label>
																						  <textarea name="bio" placeholder="Describe Yourself....." required=""><?php echo $bio ?></textarea>
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="vali-form">
																						
																					<div class="clearfix"> </div>
																						</div>
																					<div class="col-md-4 form-group1 group-mail">
																						  <label class="control-label">Date Of Birth</label>
																						  <input name="dob" type="text" placeholder="dd-mm-yyyy" required="" value="<?php echo $dob ?>">
																						</div>
																						<div class="col-md-4 form-group1 group-mail">
																						  <label class="control-label">Nationality</label>
																						  <input name="nationality" type="text" placeholder="Indian" required="" value="<?php echo $nationality ?>">
																						</div>
																						 <div class="clearfix"> </div>
																						<div class="col-md-12 form-group1 ">
																						  <label class="control-label">Address</label>
																						  <textarea name="address" placeholder="Present Residence" required=""><?php echo $address ?></textarea>
																						</div>
																						 <div class="clearfix"> </div>
																						 <div class="col-md-3 form-group2 group-mail">
																						  <label class="control-label">Physical Activity</label>
																						<select name="pa">
																						<option value="10" <?php echo ('10' === $pa) ? 'selected' : '';?>>1</option>
																							<option value="20" <?php echo ('20' === $pa) ? 'selected' : '';?>>2</option>
																							<option value="30" <?php echo ('30' === $pa) ? 'selected' : '';?>>3</option>
																							<option value="40" <?php echo ('40' === $pa) ? 'selected' : '';?>>4</option>
																							<option value="50" <?php echo ('50' === $pa) ? 'selected' : '';?>>5</option>
																							<option value="60" <?php echo ('60' === $pa) ? 'selected' : '';?>>6</option>
																							<option value="70" <?php echo ('70' === $pa) ? 'selected' : '';?>>7</option>
																							<option value="80" <?php echo ('80' === $pa) ? 'selected' : '';?>>8</option>
																							<option value="90" <?php echo ('90' === $pa) ? 'selected' : '';?>>9</option>
																							<option value="100" <?php echo ('100' === $pa) ? 'selected' : '';?>>10</option>
																						</select>
																						</div>
																						  <div class="col-md-3 form-group2 group-mail">
																						  <label class="control-label">Nutrition / Diet</label>
																						<select name="nd">
																						<option value="10" <?php echo ('10' === $nd) ? 'selected' : '';?>>1</option>
																							<option value="20" <?php echo ('20' === $nd) ? 'selected' : '';?> >2</option>
																							<option value="30"<?php echo ('30' === $nd) ? 'selected' : '';?>>3</option>
																							<option value="40"<?php echo ('40' === $nd) ? 'selected' : '';?>>4</option>
																							<option value="50"<?php echo ('50' === $nd) ? 'selected' : '';?>>5</option>
																							<option value="60"<?php echo ('60' === $nd) ? 'selected' : '';?>>6</option>
																							<option value="70"<?php echo ('70' === $nd) ? 'selected' : '';?>>7</option>
																							<option value="80"<?php echo ('80' === $nd) ? 'selected' : '';?>>8</option>
																							<option value="90"<?php echo ('90' === $nd) ? 'selected' : '';?>>9</option>
																							<option value="100"<?php echo ('100' === $nd) ? 'selected' : '';?>>10</option>
																						</select>
																						</div>
																					 <div class="col-md-3 form-group2 group-mail">
																						  <label class="control-label">Immunity System</label>
																						<select name="iss">
																					<option value="10" <?php echo ('10' === $iss) ? 'selected' : '';?>>1</option>
																							<option value="20" <?php echo ('20' === $iss) ? 'selected' : '';?> >2</option>
																							<option value="30"<?php echo ('30' === $iss) ? 'selected' : '';?>>3</option>
																							<option value="40"<?php echo ('40' === $iss) ? 'selected' : '';?>>4</option>
																							<option value="50"<?php echo ('50' === $iss) ? 'selected' : '';?>>5</option>
																							<option value="60"<?php echo ('60' === $iss) ? 'selected' : '';?>>6</option>
																							<option value="70"<?php echo ('70' === $iss) ? 'selected' : '';?>>7</option>
																							<option value="80"<?php echo ('80' === $iss) ? 'selected' : '';?>>8</option>
																							<option value="90"<?php echo ('90' === $iss) ? 'selected' : '';?>>9</option>
																							<option value="100"<?php echo ('100' === $iss) ? 'selected' : '';?>>10</option>
																						</select>
																						</div>
																						 <div class="col-md-3 form-group2 group-mail">
																						  <label class="control-label">Rest / Sleep</label>
																						<select name="rs">
																						<option value="10" <?php echo ('10' === $rs) ? 'selected' : '';?>>1</option>
																							<option value="20" <?php echo ('20' === $rs) ? 'selected' : '';?> >2</option>
																							<option value="30"<?php echo ('30' === $rs) ? 'selected' : '';?>>3</option>
																							<option value="40"<?php echo ('40' === $rs) ? 'selected' : '';?>>4</option>
																							<option value="50"<?php echo ('50' === $rs) ? 'selected' : '';?>>5</option>
																							<option value="60"<?php echo ('60' === $rs) ? 'selected' : '';?>>6</option>
																							<option value="70"<?php echo ('70' === $rs) ? 'selected' : '';?>>7</option>
																							<option value="80"<?php echo ('80' === $rs) ? 'selected' : '';?>>8</option>
																							<option value="90"<?php echo ('90' === $rs) ? 'selected' : '';?>>9</option>
																							<option value="100"<?php echo ('100' === $rs) ? 'selected' : '';?>>10</option>
																
																						</select>
																						</div>
																						 <div class="clearfix"> </div>
																					  
																						<div class="col-md-12 form-group button-2">
																						  <button name="submit" type="submit" class="btn btn-primary">Update Profile</button>
																						  <button type="reset" class="btn btn-default">Reset</button>
																						</div>
																					  <div class="clearfix"> </div>
																					</form>
																				
																				<!---->
																			 </div>

																		</div>
																</div> 
														<!--//forms-->											   
												</div>
											<!--//outer-wp-->
									 <!--footer section start-->
										<footer>
										   <p>&copy 2018 MediConnect . All Rights Reserved | Design by <a >MediConnect.</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>MConnect</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  
									  	<?php 
									  	include('connection.php');
									  $user=$_SESSION['email'];
									  $xyz="SELECT * from authenticate_user where email='$user'";
									  $runim=mysqli_query($conn,$xyz);
									   $runimg=mysqli_fetch_array($runim);
									   $id=$runimg['id'];
									  if($runimg)
									  $imga=$runimg['u_image'];

									  echo "<img src='images/$imga' width='50%' height='50%' style='border-radius:50%'>";
									  ?>
									  	
									 
									  <a href="index.php"><span class=" name-caret"><?php 
echo $_SESSION['email'] ; ?></span></a>
									 <p> Computer Engineer</p>
									<ul>
				
										<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
															<li><a class="tooltips" href="index.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>	
									<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
										<!-- <li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Ask Doctors</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Articles</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>My Records</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Insurance</span></a></li>
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>My Questions</span></a></li> -->
										 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Details</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="#"> Categories</a></li>
											<li id="menu-academico-avaliacoes" ><a href="#">Calendar</a></li>
										  </ul>
										</li>
		<li><a href="editor.php"><i class="lnr lnr-pencil"></i> <span>Ask Question</span></a></li>
 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Account</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										   <ul id="menu-academico-sub" >
											<li id="menu-academico-avaliacoes" ><a href="profile.php">View Profile</a></li>
											<li id="menu-academico-avaliacoes" ><a href="validation.php">Edit Profile</a></li>
										  </ul>
										</li>
					<li><a href="appointment/ap.html"><i class="lnr lnr-pencil"></i> <span>Appointment</span></a></li>
							<li><a href="myposts.php?u_id=<?php echo $id ?>"><i class="fa fa-smile-o"></i> <span>My Posts</span></a></li>
									<li><a ><i class="lnr lnr-chart-bars"></i> <span>Network</span> <span class="fa fa-angle-right" style="float: right"></span></a>
									  <ul>
										<li><a href="map.php"><i class="lnr lnr-map"></i>World Maps</a></li>
										<li><a href="graph.php"><i class="lnr lnr-apartment"></i> Graph</a></li>
									</ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>