
<!DOCTYPE html>
<html>
<head>
    <title>ASTU CSE COMMUNITY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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





<body data-spy="scroll" data-target=".navbar" data-offset="50">


<!-- signup and login form-->
<div id="section1" class="container-fluid" class="" >
    <span style="text-align: center;"><h2>Welcome </h2></span>





    <div class=" text-center col-sm-offset-1 col-sm-3 jumbotron" style="color: black; background-color: purple; ">
        <h3>Administrative member?</h3>
        <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#SignupAdministrator">Sign up here</a>
        <div class="modal fade" id="SignupAdministrator" tabindex="-5" role="dialog" aria-labelledby="SignupAdministrator" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Registration </h4>
                    </div>
                    <div class="modal-body">

                            <form class="form-horizontal" method="post" action="#">

                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Full Name</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="cols-sm-2 control-label">Username</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="region" class="cols-sm-2 control-label">Region</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="cols-sm-2 control-label">City</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="house" class="cols-sm-2 control-label">House</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="cols-sm-2 control-label">Phone</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group " class="visible-xs">
                                    <button type="button" class="btn btn-primary btn-lg btn-block login-button"  class="visible-xs">Register</button>
                                </div>
                                <div class="login-register">
                                    <a href="index.php">Login</a>
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
<!-- End of signup and login form-->










</body>
</html>



















