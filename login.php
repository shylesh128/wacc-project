<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
    body{
	margin: 5em;
    color: #6a6f8c;
    background: #1f6189;
    font: 600 16px/18px 'Open Sans',sans-serif;
}


*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{    color: white;
    text-decoration: underline;
}

.login-wrap{
	width: 100%;
    margin: auto;
    align-items: stretch;
    max-width: 28rem;
    min-height: 43rem;
    position: relative;
    background: url() no-repeat center;
	background: url(https://www.clgonline.in/static/all_collages/img/st-josephs-college-sjc-bangalore.jpg) no-repeat center center fixed;
  background-size: cover;
  height: 100%;
  overflow: hidden;
    box-shadow: 0 12px 15px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
	border-radius: 1rem;
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(104, 107, 116, 0.2);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color: #fff;
	display:
	block;
}
.login-form .group .input,
.login-form .group .button{
	border: 2EM;
    padding: 1EM 1EM;
    border-radius: 3EM;
    background: rgba(255,255,255,.2);
}
.login-form .group .input,
.login-form .group .button:hover{
	transform: scale(1.03);
	color: #1f6189;
	background: rgb(203 204 205);
	box-shadow: 0 12px 15px 0 rgb(0 0 0 / 24%), 0 17px 50px 0 rgb(0 0 0 / 19%);
}
.login-form .group input[data-type="password"]{
	text-rendering:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:rgb(255, 255, 255);
	font-size:12px;
}
.login-form .group .button{
	background:#466499;
}
.login-form .group .button:hover{
	background:hsl(218, 93%, 43%);
	transform: scale(1.03);
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}

	</style>

<div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">login In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
      <div class="login-form">
  
        <form class="sign-in-htm" method="post">
          <div class="group">
            <label for="user" class="label">Username</label>
            <input id="text" name="user_name" type="text" class="input" pattern="(?=.*\d)(?=.*[A-Z]).{12,16}[@WACC]" title="Register_Number@WACC "  placeholder="REG_NO@WACC">
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            <input id="text" name="password" type="password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,18}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="input" data-type="password" placeholder="****">
          </div>
          <div class="group">
            <input id="check" type="checkbox" class="check" checked>
            <label for="check"><span class="icon"></span> Keep me Signed in</label>
          </div>
          <div class="group">
            <input type="submit" class="button" value="Login In">
          </div>
          <div class="hr"></div>
          <div class="foot-lnk">
            <a href="contact.php">Issues regarding login? contact admin</a>
          </div>
		  <div class="foot-lnk">
            <a href="signup.php">sign up</a>
          </div>
        </form>
  
        
      </div>
    </div>
  </div>
</body>
</html>



