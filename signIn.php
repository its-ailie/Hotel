<?php include("links.php"); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
html,body
{ 
    background-image:url('mura-exterior.webp'); 
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}
h2 {
  font-size: 50px;
  margin-top: 100px;
  font-weight: bold;
  color: #add8e6;
  text-shadow: 2px 2px 4px #000;
}
h1 {
  font-size: 70px;
  font-family: lucida calligraphy;
  font-weight: bold;
  color: #add8e6;
  text-shadow: 2px 2px 4px #000;
} 

.panel {
  background-color: #f5f5f5;
}

</style>
  <body class="bg-info">
     <center>
    
    
    <div class="container">
    <h2>WELCOME TO HOTEL</h2>
    <h1>COSTA LEONA</h1>    
        <div id="loginbox" style="margin-top:31px; margin-left:375px; margin-right:800px; width:450px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-success"  style="background-size:cover;">
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                      
                    </div>     

                    <div style="padding-top:30px;" class="panel-body" >

                        <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                
                        <form action="ownersClient.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-id" type="text" class="form-control" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="id" value="" placeholder="id"> 
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-fname" type="text" class="form-control"  style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="fname" value="" placeholder="fname"> 

                            </div>

                            <div style="margin-bottom: 25px;" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input id="login-lname" type="text" class="form-control" style=" background-color:transparent; color:#000;; font-family:Arial, Helvetica, sans-serif; font-size:16px; font-weight:bolder;" name="lname" placeholder="lname" >

                              
                            </div>

                            <?php
                                  if(isset($_GET['err'])){
                                    echo "<span style='color: red; font-weight: bold;'>  Id, First name or Last name is incorrect. Try Again. </span>";
                                    echo nl2br("\n");
                                    } ?>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-check"></span> Login</button>

                                    </div>
                                </div>
                        <a href="index.php" > User Login? </a>    
							</form>
                </div>
			  </div>
                    
				</div> 
		</div> <!-- /container -->
</center>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>

</div>


</body>
</html> 