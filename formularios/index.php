<?php
session_start();
require ('header.php');
if ($_SESSION['aviso']){
    echo $_SESSION['aviso'];
}
?>
<!---->
<!--<form action="recebedor.php" method="post">-->
<!--    <label >-->
<!--        Nome:-->
<!--        <br>-->
<!--        <input type="text" name="nome">-->
<!--    </label><br>-->
<!--    <label >-->
<!--        Nome:-->
<!--        <br>-->
<!--        <input type="email" name="email">-->
<!--    </label><br>-->
<!--    <label >-->
<!--        Idade:-->
<!--        <br>-->
<!--        <input type="text" name="idade">-->
<!--    </label>-->
<!--    <br>-->
<!--    <input type="submit" value="Enviar">-->
<!--</form>-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<script src="js.js"></script>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div id="first">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Login</h1>
                        </div>
                    </div>
                    <form action="recebedor.php" method="post" name="login">
                        <div class="form-group">
                            <label >Nome:</label>
                            <input type="text" name="nome"  class="form-control" id="nome" >
                        </div>
                        <div class="form-group">
                            <label >Email:</label>
                            <input type="email" name="email" id="email"  class="form-control"  >
                        </div>
                        <div class="form-group">
                            <label >Idade:</label>
                            <input type="number" name="idade" id="email"  class="form-control"  >
                        </div>
<!--                        <div class="form-group">-->
<!--                            <p class="text-center">exquecia a senha <a href="#">Terms Of Use</a></p>-->
<!--                        </div>-->
                        <div class="col-md-12 text-center ">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Enviar</button>
                        </div>
<!--                        <div class="col-md-12 ">-->
<!--                            <div class="login-or">-->
<!--                                <hr class="hr-or">-->
<!--                                <span class="span-or">or</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-12 mb-3">-->
<!--                            <p class="text-center">-->
<!--                                <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">-->
<!--                                    </i> Signup using Google-->
<!--                                </a>-->
<!--                            </p>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>-->
<!--                        </div>-->
                    </form>

                </div>
            </div>
            <div id="second">
<!--                <div class="myform form ">-->
<!--                    <div class="logo mb-3">-->
<!--                        <div class="col-md-12 text-center">-->
<!--                            <h1 >Signup</h1>-->
<!--                        </div>-->
<!--                </div>-->
<!--                    <form action="#" name="registration">-->
<!--                        <div class="form-group">-->
<!--                            <label for="exampleInputEmail1">First Name</label>-->
<!--                            <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="exampleInputEmail1">Last Name</label>-->
<!--                            <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="exampleInputEmail1">Email address</label>-->
<!--                            <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="exampleInputEmail1">Password</label>-->
<!--                            <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">-->
<!--                        </div>-->
<!--                        <div class="col-md-12 text-center mb-3">-->
<!--                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Get Started For Free</button>-->
<!--                        </div>-->
<!--                        <div class="col-md-12 ">-->
<!--                            <div class="form-group">-->
<!--                                <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                </div>-->
                </form>
            </div>
        </div>
    </div>
</div>

</body>