<br>
<div class="container bg-white p-3 mt-5">    
        <div id="loginbox" style="margin-top:40px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title" style="font-size:34px; font-family:Abel;">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative;"><a href="#">Forgot password?</a></div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" method="POST" action="login.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" id="noSpace"  type="email" class="form-control" name="email" value="" placeholder="email" required>                                        
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="pswd" placeholder="password" required>
                            </div>
                                    

                                
                            <div class="input-group">
                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">
                                    <button id="btn-login" type="submit" name="log_in" class="btn btn-info"><i class="icon-hand-right"></i> login</button>
                                      <a id="btn-register" class="btn btn-primary">Login via Google</a>

                                    </div>
                                </div>

                                </div>


                                 <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%; font-family: Abel;" >
                                            Don't have an account? 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>  
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">


                        <div class="panel-heading">
                            <div class="panel-title" style="font-size:34px; font-family:Abel; margin-bottom: 15px;">Register new user</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-25px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>

                        </div>  
                      <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">    

                        <div class="panel-body" >
                            <form id="signupform" action="register.php" class="form-horizontal" role="form" method="POST">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="email" id="noSpace" class="form-control" name="email" placeholder="Email Address" required>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" id="noSpace" class="form-control" name="uname" placeholder="User Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="fname" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" name="pswd" placeholder="Password" required>
                                    </div>
                                </div>

                                <div class="form-group">                          
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" name="sign_up" class="btn btn-info"><i class="icon-hand-right"></i> Sign Up</button>
                                    </div>
                                </div> 
                                </div>
                            </form>
                         </div>
                    </div>
                  
         </div> 
    </div>

<script> 
$("input#noSpace").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});
</script>

