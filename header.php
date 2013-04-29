<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandmate.in - <?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css"> 
    <link rel="stylesheet" href="css/jqueryui.css"> 
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="img/favicon.png">      
</head>
<body>
    <header>
        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-th-list"></span>
                    <a href="index.php" class="brand"><img src="img/logo.png" alt="bandmate" class=""></a>
                    </a>
                    
                    <nav class="nav-collapse collapse">                        
                        <ul class="nav pull-right">                            
                            <!-- <li class=""><a href="about.php">About</a></li> -->
                            <!-- <li class="<?php echo $work; ?>"><a href="work.php">Bandmate</a></li> -->
                            <!-- <li class=""><a href="profile.php">Profile</a></li>  -->
                            <!-- <li class=""><a href="login.php"l><span class="">register</span></a></li> -->
                            <li class=""><button data-toggle="dropdown" class="btn btn-orange" data-target="#"><span class="">Sign In</span></button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li>
                                       <form class="clean-padding">
                                          <fieldset>
                                            <input id="logemail" type="text" placeholder="Email">
                                            <input id="logpassword" type="text" placeholder="Password">       
                                            <label class="checkbox">
                                              <input type="checkbox">Remember me
                                            </label>
                                            <button type="submit" class="btn btn-orange">Log In</button>
                                            <h4>New to bandmate?</h4>
                                            <p><a href="newprofile.php" class="btn btn-orange">Create an account</a></p>
                                          </fieldset>
                                        </form>
                                    </li>                                    
                                </ul>
                            </li>
                            <!-- <li><button class="btn btn-danger">Sign up for free</button></li>  -->   
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>