<html>
    <head>
        <title>My Dashboard</title>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
    </head>
    <body>

        <h1 align ="center" style="background-color:black;color:white">Welcome</h1>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/24.png');"></div>
            
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" action="connect_dash.php" method="post">
					<span class="login100-form-title p-b-59">
						Book Your Car
					</span>
                    
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Address is required">
						<span class="label-input100">Address</span>
						<input class="input100" type="text" name="address" placeholder="User address..">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Age is required">
						<span class="label-input100">Age</span>
						<input class="input100" type="text" name="age" placeholder="">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "No. of Days required">
						<span class="label-input100">No. of days</span>
						<input class="input100" type="number" min="1" max="100" name="days" >
						<span class="focus-input100"></span>
					</div>

					


                    
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" type="submit">
								Submit
							</button>
						</div>
                        
					</div>
                    
                </form>  
			</div>
		</div>
	</div>
	

	<script src="js/main.js"></script>
        
    </body>
</html>