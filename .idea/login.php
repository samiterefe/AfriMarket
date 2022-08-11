
<!DOCTYPE html>
<html>
<head>
    <title>ASTU CSE COMMUNITY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="signup.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <style>
        body {
            position: relative;
        }
        #section1 {padding-top:50px;height:500px;color: black; background-color: white;}
        #section2 {padding-top:50px;height:500px;color: white; background-color: black;}
        #section3 {padding-top:50px;height:500px;color: black; background-color: white;}
    </style>
</head>





<body data-spy="scroll" data-target=".navbar" data-offset="100">



<!--  login form-->
<div class=" text-center col-sm-offset-1 col-sm-2 " style="color: black; background-color: purple; ">
    <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#SigninAdministrator">login</a>

    <div class="modal fade" id="SigninAdministrator" tabindex="-5" role="dialog" aria-labelledby="SignupAdministrator" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Login </h4>
                </div>
                <div class="modal-body">
                    <?php require_once("includes/login.php");?>
                    <form class="form-horizontal" method="post" action="#">

                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">User-Name</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="username" id="name"  placeholder="Enter your username" required=""/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">password</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="password" id="username"  placeholder="Enter your password" required="">

                                </div>
                            </div>
                        </div>

                        <div class="form-group " class="visible-xs">
                           <input type="submit" value="login" name="login">
                        </div>
                        <div class="login-register">
                            <a href="registration.php">SignUp</a>
                        </div>
                    </form>


                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>


</div>


</body>
</html>



















