<?php
    include_once "../includes/dbconnect.inc.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Result Management System</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="../css/font-awesome.min.css" media="screen">
    <link rel="stylesheet" href="../css/animate-css/animate.min.css" media="screen">
    <!--    <link rel="stylesheet" href="css/prism/prism.css" media="screen">  USED FOR DEMO HELP - YOU CAN REMOVE IT -->
    <link rel="stylesheet" href="../css/main.css" media="screen">
    <link rel="stylesheet" href="../custom.css">
    <script src="js/modernizr/modernizr.min.js"></script>
</head>

<body class="main bckgrnd pr-50">
    <div class="main-wrapper">
        <div class="row">


            <div class="col-lg-12 text-center">
                <section class="section">
                    <div class="row mt-40">
                        <div class="row mt-30 ">
                            <div class="panel ind">
                                <?php
                                    
                                        if(isset($_GET['error']) == "NotMatch"){ ?>
                                <div class="alert alert-danger alert-dismissible fade in text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Password Not Match!</strong>
                                </div>
                                <?php     }
                                        
                                        else if(isset($_GET['mali']) == "UnameTkn"){ ?>
                                <div class="alert alert-danger alert-dismissible fade in text-center">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Username Already Taken!</strong>
                                </div>
                                <?php     }
                                        
                                        
                                        else{
                                            echo " ";
                                        }
                                
                                
                                ?>


                                <div class="panel-heading">
                                    <div class="panel-title text-center">
                                        <h4>Create Account</h4>
                                    </div>
                                </div>
                                <div class="panel-body mt-25">

                                    <form class="form-horizontal" action="../process/createaccount/pr-createacc.php" method="POST">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="crfname" class="form-control indform" id="inputEmail3" placeholder="First Name" required pattern="[A-Z a-z]+">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="crlname" class="form-control indform" id="inputEmail3" placeholder="Last Name" required pattern="[A-Z a-z'\.]+">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="crusername" class="form-control indform" id="inputEmail3" placeholder="UserName" required pattern="[A-Za-z0-9'\-]+">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Password</label>

                                            <div class="col-sm-10">
                                                <input type="password" name="crpassword" class="form-control indform" id="inputPassword3" placeholder="Password" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Repeat-Password</label>

                                            <div class="col-sm-10">
                                                <input type="password" name="crrepassword" class="form-control indform" id="inputPassword3" placeholder="Repeat-Password" required>
                                            </div>
                                        </div>


                                        <div class="selectcre">
                                            <label>University Role</label>
                                            <select class="selcre form-control text-center" name="crunirole">
                                                <option>Choose below</option>
                                                <option value="Professor">Professor</option>
                                                <option value="Student">Student</option>
                                            </select>
                                        </div>



                                        <div class="form-group mt-20 align-center">
                                            <div class="col-sm-offset-3 col-sm-6">

                                                <button type="submit" name="createacc" class="btn btn-success btn-labeled pull-right">Sign up<span class="btn-label btn-label-right"><i class="fa fa-check"></i></span></button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="linkks">
                                        <h3><a href="../index.php">
                                                <li class="fa fa-home"> Back Home</li>
                                            </a></h3>

                                    </div>



                                </div>
                            </div>

                            <p class="text-muted text-center"><small>Copyright © 2021 - @jhunpaul - @arnel - @jhonhenrick </small> </p>
                        </div>



                    </div>

                </section>
            </div>



        </div>

    </div>



    <!-- /.main-wrapper -->

    <!-- ========== COMMON JS FILES ========== -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <script src="../js/jquery-ui/jquery-ui.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <script src="../js/pace/pace.min.js"></script>
    <script src="../js/lobipanel/lobipanel.min.js"></script>
    <script src="../js/iscroll/iscroll.js"></script>

    <!-- ========== PAGE JS FILES ========== -->

    <!-- ========== THEME JS ========== -->
    <script src="js/main.js"></script>
    <script>
        $(function() {

        });

    </script>

    <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
</body>

</html>
