<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="\Warehouse\css\bootstrap.min.css">
    <link >
	<title>login page</title>


    <style>

        body{
            background-image: url('warehouse.jpg');
            background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
        }
        .card{
        	
            margin-right: 2vh;
            margin-top: 8%;
            margin-left: auto;
            text-align: center;
            max-width: 100%;
            max-height: auto;
            height: 430px;
            align-content: right;
            
        }
        input{
        	font-size: 90%;
            width: 100%;
            height: 45px; 
        }
        #login_txt{
        	font-size: 5vh;
            text-align: left;

        }
        #login_button{
            width: 100%;
            height: 50px;
        }
        #sysname
        {
        	position: absolute;
        	align-content: left;
        	max-height: 200px;
			border: none;
        }
        #title {
        	font-size: 7.3vw;
        	font-family: 'Times New Roman', serif;
  			position: inherit;
			top: 5%;
			padding-top: 2%;
        	margin-left: 2vw;
        	color: white;
        }
       /* #descr{
        	font-size: 1.8vw;
        	color:white;

        	padding-left: 7%;
        	position: relative;
        }*/
        #descr1{
        	font-size: 4vw;
        	color:white;
        	align-content: right;
        	padding-left: 11%;
        	position: relative;
        }
        .container{
        	margin-top: none;
        	padding-top: none;
        }

        
    </style>
</head>
<body>
	<div class="container container-fluid">
			<div  id="sysname">
				<h1 id="title"><b>STOCKPILE</b>
					<p id="descr1" class="float-end"><nobr>Warehouse</nobr></p>
				</h1>
				<br>	
				
				
			</div>	

		<div class="container-sm">
			<div class="col-sm-4 p-3 card " >
	            <form id="loginForm" class="form card-body" method="POST" action="login_function.php">
	                
	                    <h2 id="login_txt">Admin Log In</h2>        
	                    <br>
	                    <div class="card-footer">
		                    <input type="text" name="adminname" placeholder="Admin username" required>
		                    <br>
		                    <br>
		                    <input type="password" name="password" placeholder = "Password" required>
		                    <br>
		                    <br>
		                    <br>
		                    <button type="submit" class = "btn btn-dark" id="login_button">Login</button>
		                    <br>
		                    <br>

		                    
	                    </div>
	                  	  

	                  	  
	                    <!-- <div class="card-footer">
	                        <p style="text-align: center;">New here?<a href="#">Sign up here</a></p>
	                    </div> -->
	                    
	                
	            </form>
	            <br>
	        </div>
	    </div>
    </div>
    
<!-- 
        <form id="registerForm" class="form">
            <h1>Create a  Account</h1>
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" required>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" required>
            
            <button type="button" onclick="register()">Create Account</button>
            
            <p>Already have an account? <a href="#">Login here</a></p>
        </form>
    </div>
 -->
    <script src="script.js"></script>
</body>
</html>