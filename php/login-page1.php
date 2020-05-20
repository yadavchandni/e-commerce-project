<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/login-page1.css">

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<body class="login-page">

    <?php
  include('header.php');

?>


<div class="container login-container">
            <div class="row" style="margin-left: 47rem">
                <div class="col-md-6 login-form-1">

                    <h3>
                    	<i class=""></i>

                  Sign In </h3>
                    
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>

                        <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>

					<br>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>

                        <br>
                        	<a style="color:white">Don't have an account?<a href="#">Sign Up</a>

                        	<br><br>
                        <div class="form-group">
                            <a href="#" class="btnForgetPwd">Forget Password?</a>
                        </div>
                    
                </div>
                <div class="col-md-6 login-form-2">

                    <div class="login-logo">

                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>

                    </div>

                    <h3>Sign Up</h3>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>

                        <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>

					<br>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="btnForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>