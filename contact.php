<?php
session_start();
include("functions.php");
?>

<!--contact start -->
<section id="contact" class="contact">
	<div class="section-heading text-center">
		<br>
		<br>
		<br>
		<br>
		<br>
		<h2>contact me</h2>
	</div>
	<div class="container">
		<div class="contact-content">
			<div class="row">
				<div class="col-md-offset-1 col-md-5 col-sm-6">
					<div class="single-contact-box">
						<div class="contact-form">
							<?php
							echo '<br>';
							echo '<br>';
							echo '<br>';
							echo '<br>';
								if (!isset($_POST['submit']))
								{
									echo '<h3>Please fill out the form:</h3>';
									echo '<form method="post" action="contact.php">';

									//first name validation
									if (isset($_GET['error']) && strstr($_GET['error'],"fnNull")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="firstname">First Name: </label>';
										echo '<input type="text" class="form-control" placeholder="First Name" name="firstName">';
										echo '<span class="help-block">First name cannot be blank!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div>';
									}
									elseif (isset($_GET['error']) && strstr($_GET['error'],"fnInvalid")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="firstname">First Name: </label>';
										echo ' <input type="text" class="form-control" placeholder="First Name" name="firstName" value="'.$_SESSION['fnData'].'">';
										echo '<span class="help-block">First name contains invalid characters!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div>';
									}
									else //non error state
									{
										if(isset($_SESSION['fnData'])) //previous data success state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-success">';
											echo '<label class="control-label" for="firstname">First Name: </label>';
											echo ' <input type="text" class="form-control"  placeholder="First Name" name="firstName" value="'.$_SESSION['fnData'].'">';
											echo '<span class="help-block">Good Job!</span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div>';
										}
										else //default state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group">';
											echo '<label class="control-label" for="firstname">First Name: </label>';
											echo ' <input type="text" class="form-control" placeholder="First Name" name="firstName">';
											echo '<span class="help-block"></span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div>';
										}
									}

									//last name validation
									if (isset($_GET['error']) && strstr($_GET['error'],"lnNull")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="lastName">Last Name: </label>';
										echo '<input type="text" class="form-control" placeholder="Last Name" name="lastName">';
										echo '<span class="help-block">Last name cannot be blank!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div><!--/.row-->';
									}
									elseif (isset($_GET['error']) && strstr($_GET['error'],"lnInvalid")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="lastName">Last Name: </label>';
										echo '<input type="text" class="form-control" placeholder="Last Name" name="lastName" value="'.$_SESSION['lnData'].'">';
										echo '<span class="help-block">Last name contains invalid characters!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div><!--/.row-->';
									}
									else //non error state
									{
										if(isset($_SESSION['lnData'])) //previous data success state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-success">';
											echo '<label class="control-label" for="lastName">Last Name: </label>';
											echo '<input type="text" class="form-control" placeholder="Last Name" name="lastName" value="'.$_SESSION['lnData'].'">';
											echo '<span class="help-block">Good Job!</span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
										else //default state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group">';
											echo '<label class="control-label" for="lastName">Last Name: </label>';
											echo '<input type="text" class="form-control" placeholder="Last Name" name="lastName" >';
											echo '<span class="help-block"></span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
									}
									//email validation
									if (isset($_GET['error']) && strstr($_GET['error'],"emailNull")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="email">Email</label>';
										echo '<input type="text" class="form-control" placeholder="Email" name="email">';
										echo '<span class="help-block">Email cannot be blank!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div><!--/.row-->';
									}
									elseif (isset($_GET['error']) && strstr($_GET['error'],"emailInvalid")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="email">Email</label>';
										echo '<input type="text" class="form-control" placeholder="Email" name="email" value="'.$_SESSION['emailData'].'">';
										echo '<span class="help-block">Email Invalid!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div><!--/.row-->';
									}
									else //non error state
									{
										if(isset($_SESSION['emailData'])) //previous data success state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-success">';
											echo '<label class="control-label" for="email">Email</label>';
											echo '<input type="text" class="form-control" placeholder="Email" name="email" value="'.$_SESSION['emailData'].'">';
											echo '<span class="help-block">Good Job!</span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
										else
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group">';
											echo '<label class="control-label" for="email">Email</label>';
											echo '<input type="text" class="form-control" placeholder="Email" name="email">';
											echo '<span class="help-block"></span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
									}
									//phone input box
									if (isset($_GET['error']) && strstr($_GET['error'],"phoneNull")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="phone">Phone Number: </label>';
										echo '<input type="text" class="form-control" placeholder="Phone Number" name="phone">';
										echo '<span class="help-block">Phone number cannot be blank!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div>';
									}
									elseif (isset($_GET['error']) && strstr($_GET['error'],"phoneInvalid")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="phone">Phone Number: </label>';
										echo '<input type="text" class="form-control" placeholder="Phone Number" name="phone" value="'.$_SESSION['phoneData'].'">';
										echo '<span class="help-block">Phone number can only be digits!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div>';
									}
									else //non error state
									{
										if(isset($_SESSION['phoneData'])) //previous data success state
										{	
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-success">';
											echo '<label class="control-label" for="phone">Phone Number: </label>';
											echo '<input type="text" class="form-control" placeholder="Phone Number" name="phone" value="'.$_SESSION['phoneData'].'">';
											echo '<span class="help-block">Good Job!</span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div>';
										}
										else
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group">';
											echo '<label class="control-label" for="phone">Phone Number: </label>';
											echo '<input type="text" class="form-control" placeholder="Phone Number" name="phone">';
											echo '<span class="help-block"></span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div>';
										}

									}
									//username input box
									if (isset($_GET['error']) && strstr($_GET['error'],"usernameNull")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="username">Username: </label>';
										echo '<input type="text" class="form-control" placeholder="Username" name="username">';
										echo '<span class="help-block">The username cannot be blank!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div>';
									}
									else //non error state
									{
										if(isset($_SESSION['usernameData'])) //previous data success state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-success">';
											echo '<label class="control-label" for="username">Username: </label>';
											echo '<input type="text" class="form-control" placeholder="Username" name="username" value="'.$_SESSION['usernameData'].'">';
											echo '<span class="help-block">Good Job!</span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div>';
										}
										else
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group">';
											echo '<label class="control-label" for="username">Username: </label>';
											echo '<input type="text" class="form-control" placeholder="Username" name="username">';
											echo '<span class="help-block"></span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div>';
										}
									}

									//password input box
									if (isset($_GET['error']) && strstr($_GET['error'],"passNull")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="password">Password: </label>';
										echo '<input type="text" class="form-control" placeholder="Password" name="password">';
										echo '<span class="help-block">Password cannot be blank!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div>';
										echo '</div>';
									}
									else //non error state
									{
										if(isset($_SESSION['passData'])) //previous data success state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-success">';
											echo '<label class="control-label" for="password">Password: </label>';
											echo '<input type="text" class="form-control" placeholder="Password" name="password" value="'.$_SESSION['passData'].'">';
											echo '<span class="help-block">Good Job!</span>';
											echo '</div><!--/.form-group-->';
											echo '</div>';
											echo '</div>';
										}
										else //default state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group">';
											echo '<label class="control-label" for="password">Password: </label>';
											echo '<input type="text" class="form-control" placeholder="Password" name="password">';
											echo '<span class="help-block"></span>';
											echo '</div><!--/.form-group-->';
											echo '</div>';
											echo '</div>';
										}
									}

									//comments input box
									if (isset($_GET['error']) && strstr($_GET['error'],"commentNull")) //error state
									{
										echo '<div class="row">';
										echo '<div class="col-sm-12">';
										echo '<div class="form-group has-error">';
										echo '<label class="control-label" for="comment">Comments: </label>';
										echo '<input type="text" class="form-control" placeholder="Comments" name="comments">';
										echo '<span class="help-block">Comments cannot be blank!</span>';
										echo '</div><!--/.form-group-->';
										echo '</div><!--/.col-->';
										echo '</div>';
									}
									else //non error state
									{
										if(isset($_SESSION['commentData'])) //previous data success state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group has-success">';
											echo '<label class="control-label" for="comment">Comments: </label>';
											echo '<input type="text" class="form-control" placeholder="Comments" name="comments" value="'.$_SESSION['commentData'].'">';
											echo '<span class="help-block">Good Job!</span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
										else //default state
										{
											echo '<div class="row">';
											echo '<div class="col-sm-12">';
											echo '<div class="form-group">';
											echo '<label class="control-label" for="comment">Comments: </label>';
											echo '<input type="text" class="form-control" placeholder="Comments" name="comments">';
											echo '<span class="help-block"></span>';
											echo '</div><!--/.form-group-->';
											echo '</div><!--/.col-->';
											echo '</div><!--/.row-->';
										}
									}

								//submit button
								echo '<hr>';
								echo '<div class="form-group">';
								echo '<button type="submit" name="submit" value="submit" class="btn btn-success">submit</button>';
								echo '</div>';
								echo '</form>';	
								}

							else{
								$errors=""; //string to contain errors

								// FIRST NAME VALIDATION
								$firstName = $_POST['firstName'];

								if ($firstName == NULL) { $errors .= "fnNull"; }
								elseif (!preg_match("/^[A-Za-z'-]+$/", $firstName)) { $errors .= "fnInvalid"; }
								else { $_SESSION['fnData'] = $firstName; }

								//last name
								$lastName=$_POST['lastName'];
								if ($lastName == NULL) { $errors .= "lnNull"; }
								elseif (!preg_match("/^[A-Za-z'-]+$/", $lastName)) { $errors .= "lnInvalid"; }
								else { $_SESSION['lnData'] = $lastName; }

								//email must check for valid email address + non-null
								$email=$_POST['email'];
								if($email==NULL){$errors.="emailNull";}
								else if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/", $email)) {$errors .= "emailInvalid";}
								else { $_SESSION['emailData']=$email;}

								//phone only digits + non-null
								$phone=$_POST['phone'];
								$_SESSION['phoneData']=$phone;
								if($phone==NULL){$errors.="phoneNull";}
								else if (!preg_match("/^[0-9]{10,15}$/", $phone)){$errors.="phoneInvalid"; }

								//username, password and comment can contain any char, only check for null
								$username=$_POST['username'];
								$_SESSION['usernameData']=$username;
								if($username==NULL){$errors.="usernameNull";}

								$password=$_POST['password'];
								$_SESSION['passData']=$password;
								if($password==NULL){$errors.="passNull";}

								$comments=addslashes($_POST['comments']);
								$_SESSION['commentData']=$comments;
								if($comments==NULL){$errors.="commentNull";}

								//an error, any error was caught
								if($errors!=''){redirect("index.php?page=contact&error=$errors");}


								echo '<h3>Contact Form Data:</h3>';
								echo '<div>First Name: '.$firstName.'</div>';
								echo '<div>Last Name: '.$lastName.'</div>';
								echo '<div>Email: '.$email.'</div>';
								echo '<div>Phone Number: '.$phone.'</div>';
								echo '<div>Username: '.$username.'</div>';
								echo '<div>Password: '.$password.'</div>';
								echo '<div>Comments: '.$comments.'</div>';	
								
								//ODBC
								ini_set('display_errors',1);
								ini_set('display_startup_errors',1);
								error_reporting(E_ALL);
								$dblink = db_connect("contact_data");
								$sql = "Insert into `contact_info` (`first_name`,`last_name`,`email`,`phone`,`user_name`,`password`,`comments`) values ('$firstName','$lastName','$email','$phone','$username','$password','$comments')";
								$dblink->query($sql) or
									die("<h2>Something went wrong with:<br>$sql<br>".$dblink->error."</h2>");
								echo '<h2>Data successfully entered into the database!</h2>';
							}	
						?>



						</div><!--/.contact-form-->
					</div><!--/.single-contact-box-->
				</div><!--/.col-->
				<div class="col-md-offset-1 col-md-5 col-sm-6">
					<div class="single-contact-box">
						<div class="contact-adress">
							<div class="contact-add-head">
								<h3>Valeria Garza Sena</h3>
								<p>UTSA Computer Science Student</p>
							</div>
							<div class="contact-add-info">
								<div class="single-contact-add-info">
									<h3>phone</h3>
									<p>631-960-7169</p>
								</div>
								<div class="single-contact-add-info">
									<h3>email</h3>
									<p>valeria.garzasena@my.utsa.edu</p>
								</div>
								<div class="single-contact-add-info">
									<h3>Linkeldn</h3>
									<p><a href="https://www.linkedin.com/in/valeriagarzasena/">valeriagarzasena</a></p>
								</div>
								<div class="single-contact-add-info">
									<h3>GitHub</h3>
									<p><a href="https://github.com/valeriagsena">valeriagsena</a></p>
								</div>
							</div>
						</div><!--/.contact-adress-->

					</div><!--/.single-contact-box-->
				</div><!--/.col-->
			</div><!--/.row-->
		</div><!--/.contact-content-->
	</div><!--/.container-->

</section><!--/.contact-->
<!--contact end -->
