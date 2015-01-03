<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>
        <link href="<?php echo base_url(); ?>css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand">Project name</a>
                            </div>
                            <div class="navbar-collapse collapse" id="navbar">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li class="dropdown">
                                        <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Nav header</li>
                                            <li><a href="#">Separated link</a></li>
                                            <li><a href="#">One more separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="./">Default <span class="sr-only">(current)</span></a></li>
                                    <li><a href="../navbar-static-top/">Registration</a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/user/login">Login</a></li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div><!--/.container-fluid -->
                    </nav>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <?php 
                    if(!empty($message))
                    {
                    ?>
                    <span class="label label-danger"> Please provide correct username and password!</span>
                    <?php
                    }
                    ?>                   
                </div>
                <div class="col-md-4"></div>
            </div>

            <div class="row">
                <div class="col-md-4 custom-star">
                    <span class="glyphicon glyphicon-star"></span>
                </div>

                <div class="col-md-4">
                    <form class="form-signin" method="post" action="<?php echo base_url(); ?>index.php/user/login_submit">
                        <h2 class="form-signin-heading">Please login!</h2>
                       
                        <label class="sr-only" for="inputUsername">Username</label>
                        <input type="name" name="username" autofocus="" required="" placeholder="Your Username" class="form-control" id="inputUsername">

                        <label class="sr-only" for="inputPassword">Password</label>
                        <input type="password" name="password" required="" placeholder="Password" class="form-control" id="inputPassword">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary btn-block">
                    </form>   
                </div>

                <div class="col-md-4">
                    <h3>News Title</h3>
                    <p>
                        Showing results for bootstrap login form
                        Search instead for boostrap login form
                        Search Results

                        Signin Template for Bootstrap
                        getbootstrap.com/examples/signin/
                        Bootstrap
                        Please sign in. Email address. Password. Remember me. Sign in.
                        Showing all snippets for Bootstrap tagged with login ...
                        bootsnipp.com/tags/login
                        Login form in modal · Login form in modal. View · 1.5K 3 3.2.0 · Login Form Panel · 
                        Login Form Panel · View · 
                        2.1K 2 3.2.0 ... php cloud hosting | Bootstrap CDN by.
                    </p>
                </div>
            </div>
        </div>

    </body>
</html>