
<!DOCTYPE html>
<html>
<head>
	<title>HOME | SEND MESSAGE</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script rel="stylesheet" type="text/javascript"  href="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="dashdesign.css">

    </style>
</head>
<body>  
    <div class="container my-5">
        <div class="container col-md-5 text-center">
            <form class="container mx-2 " action="dashsend.php" method="post">
                <div class="container">

                    <div style="background-color: rgb(39, 31, 28); border-top-left-radius: 15px; border-top-right-radius: 15px;" class="container p-3 text-light">
                        <h2>SEND ANONYMOUS MESSAGE</h2>
                    </div>

                        <textarea class="container p-1" autofill="off" style="font-size: 20pt; margin: 0 auto;" name="message" rows="5" cols="3" placeholder="Your Message here"> 
                        </textarea><br>
                        
                    <div class="container"></div>
                        <label for="sndmsg"><h4 class="text-light">Enter Reciever's Username</h4></label>
                        <input type="text" name="sndmsg" onkeypress="return event.which !=32" autofill="off">
                        <br><br>
                    </div> 
                        <button class="btn text-light " type="submit" value="Submit" style="font-size:19px;border-radius: 40px; padding: 15px 32px; background-color: rgb(61, 46, 40);">Send</button>
                            
                </div>
                <br>
                <div  class="button-container-div"><center>
                            &emsp;<a class="btn text-light pulse-button" style="background-color: rgb(61, 46, 40);" href="dash.php">Go back</a>
                            </center>
                        </div>    
            </div> 
               

            </form>
            
                     
 </div>








</body>
	
</html>