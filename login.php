<?php

?>

<head>
    <link rel="stylesheet" href="css/login.css">
    <script>$(document).ready(function(){
    $('.toggle').on('click', function() {
    $('.container').stop().addClass('active');
    });

    $('.close').on('click', function() {
    $('.container').stop().removeClass('active');
    });

    });</script>
</head>
<div class="container">
    <div class="row">

        <!-- Mixins-->
        <!-- Pen Title-->
        <div class="pen-title">
            <h1>Material Login Form</h1>
        </div>
        <div class="container">
            <div class="card"></div>
            <div class="card">
                <h1 class="title">Login</h1>
                <form name="form" method="post" action="connect.php">
                    <div class="input-container">
                        <input type="text" id="Username" name="id" required="required"/>
                        <label for="Username">Username</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" name="pw" id="Password" required="required"/>
                        <label for="Password">Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button><span>Go</span></button>
                    </div>
                    <div class="footer"><a href="#">Forgot your password?</a></div>
                </form>
            </div>
            <div class="card alt">
                <div class="toggle"></div>
                <h1 class="title">Register
                    <div class="close"></div>
                </h1>
                <form>
                    <div class="input-container">
                        <input type="text" id="Username" required="required"/>
                        <label for="Username">Username</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="Password" required="required"/>
                        <label for="Password">Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="input-container">
                        <input type="password" id="Repeat Password" required="required"/>
                        <label for="Repeat Password">Repeat Password</label>
                        <div class="bar"></div>
                    </div>
                    <div class="button-container">
                        <button><span>Next</span></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Portfolio--><a id="portfolio" href="http://pkshopy.com/farooqshad/" title="View my portfolio!"><i class="fa fa-link"></i></a>
    </div>
</div>