<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>My E-store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h1>Welcome to My E-store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/cannon_eos.jpg" alt="Cannon">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Cannon EOS</h3>
                                    <p>Price: Rs. 36000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(1)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=1" id="btnGiveCommand" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                    
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/sony_dslr.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 40000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(2)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=2" id="btnGiveCommand" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/sony_dslr2.jpeg" alt="Sony DSLR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price: Rs. 50000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(3)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=3" id="btnGiveCommand" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/olympus.jpg" alt="Olympus">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Olympus DSLR</h3>
                                    <p>Price: Rs. 80000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(4)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=4" id="btnGiveCommand" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/titan301.jpg" alt="Titan 301">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Titan Model #301</h3>
                                    <p>Price: Rs. 13000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(5)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=5" id="btnGiveCommand" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/titan201.jpg" alt="Titan 201">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Titan Model #201</h3>
                                    <p>Price: Rs. 3000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(6)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=6" id="btnGiveCommand" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/hmt.JPG" alt="htm milan">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>HMT Milan</h3>
                                    <p>Price: Rs. 8000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(7)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=7" id="btnGiveCommand" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/favreleuba.jpg" alt="Favre Leuba">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Favre Leuba #111</h3>
                                    <p>Price: Rs. 18000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(8)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=8" id="btnGiveCommand" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/raymond.jpg" alt="Raymond shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Raymond</h3>
                                    <p>Price: Rs. 1500.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(9)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=9" id="btnGiveCommand" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/charles.jpg" alt="Charles shirt">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>Charles</h3>
                                    <p>Price: Rs. 1000.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(10)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=10" id="btnGiveCommand" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/HXR.jpg" alt="HXR">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>HXR</h3>
                                    <p>Price: Rs. 900.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(11)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=11" id="btnGiveCommand" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <a href="cart.php">
                                <img src="img/pink.jpg" alt="PINK">
                            </a>
                            <center>
                                <div class="caption">
                                    <h3>PINK</h3>
                                    <p>Price: Rs. 1200.00</p>
                                    <?php if(!isset($_SESSION['email'])){  ?>
                                        <p><a href="login.php" role="button" id="btnGiveCommand" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                                        else{
                                            if(check_if_added_to_cart(12)){
                                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                            }else{
                                                ?>
                                                <a href="cart_add.php?id=12" id="btnGiveCommand" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                                <?php
                                            }
                                        }
                                        ?>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br>
           <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="#">My E-store</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Prashant, Suraksha and Saumya</p>
               </center>
               </div>
           </footer>
        </div>


<form id="a1" method="get" action="login.php">
</form>
<form id="a2" method="get" action="cart_add.php?id=1">
</form>
<form id="a3" method="get" action="login.php">
</form>
<form id="a4" method="get" action="cart_add.php?id=2">
</form>
<form id="a5" method="get" action="login.php">
</form>
<form id="a6" method="get" action="cart_add.php?id=3">
</form>
<form id="a7" method="get" action="login.php">
</form>
<form id="a8" method="get" action="cart_add.php?id=4">
</form>
<form id="a9" method="get" action="login.php">
</form>
<form id="a0" method="get" action="cart_add.php?id=5">
</form>
<form id="a11" method="get" action="login.php">
</form>
<form id="a12" method="get" action="cart_add.php?id=6">
</form>
<form id="a13" method="get" action="login.php">
</form>
<form id="a14" method="get" action="cart_add.php?id=7">
</form>
<form id="a15" method="get" action="login.php">
</form>
<form id="a16" method="get" action="cart_add.php?id=8">
</form>
<form id="a17" method="get" action="login.php">
</form>
<form id="a18" method="get" action="cart_add.php?id=9">
</form>
<form id="a19" method="get" action="login.php">
</form>
<form id="a20" method="get" action="cart_add.php?id=10">
</form>
<form id="a21" method="get" action="login.php">
</form>
<form id="a22" method="get" action="cart_add.php?id=11">
</form>
<form id="a23" method="get" action="login.php">
</form>
<form id="a24" method="get" action="cart_add.php?id=12">
</form>


<script>
        var message = document.querySelector('#message');
        var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
        var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;
        var grammar = '#JSGF V1.0;'
        var recognition = new SpeechRecognition();
        var speechRecognitionList = new SpeechGrammarList();
        speechRecognitionList.addFromString(grammar, 1);
        recognition.grammars = speechRecognitionList;
        recognition.lang = 'en-US';
        recognition.interimResults = false;
        recognition.onresult = function(event) {
            var last = event.results.length - 1;
            var command = event.results[last][0].transcript;
            message.textContent = 'Voice Input: ' + command + '.';
            if(command.toLowerCase() === 'open cart'){
                document.getElementById('labnol').submit();
            }
            else if (command.toLowerCase() === 'open settings'){
                document.getElementById('labnol1').submit();
            }
            else if (command.toLowerCase() === 'open logout'){
                document.getElementById('labnol2').submit();
            }
            else if (command.toLowerCase() === 'open sign up'){
				document.getElementById('labnol3').submit();
            }
			else if (command.toLowerCase() === 'open login'){
				document.getElementById('labnol4').submit();
            }   
            else if (command.toLowerCase() === 'open home page'){
				document.getElementById('lab').submit();
            }  
            else if (command.toLowerCase() === 'open shop now'){
				document.getElementById('lab1').submit();
            }  
            else if (command.toLowerCase() === 'open cameras'){
				document.getElementById('p1').submit();
            }  
            else if (command.toLowerCase() === 'open watches'){
				document.getElementById('p2').submit();
            }  
            else if (command.toLowerCase() === 'open shirts'){
				document.getElementById('p3').submit();
            }



            else if (command.toLowerCase() === 'buy canon eos'){
				document.getElementById('a1').submit();
            }  
            else if (command.toLowerCase() === 'add canon eos'){
				document.getElementById('a2').submit();
            } 
            else if (command.toLowerCase() === 'buy sony dslr'){
				document.getElementById('a3').submit();
            } 
            else if (command.toLowerCase() === 'add sony dslr'){
				document.getElementById('a4').submit();
            } 
            else if (command.toLowerCase() === 'buy sony dslr x'){
				document.getElementById('a5').submit();
            } 
            else if (command.toLowerCase() === 'add sony dslr x'){
				document.getElementById('a6').submit();
            }
            else if (command.toLowerCase() === 'buy olympus dslr'){
				document.getElementById('a7').submit();
            }
            else if (command.toLowerCase() === 'add olympus dslr'){
				document.getElementById('a8').submit();
            }
            else if (command.toLowerCase() === 'buy titan model a'){
				document.getElementById('a9').submit();
            } 
            else if (command.toLowerCase() === 'add titan model a'){
				document.getElementById('a10').submit();
            }
            else if (command.toLowerCase() === 'buy titan model b'){
				document.getElementById('a11').submit();
            }
            else if (command.toLowerCase() === 'add titan model b'){
				document.getElementById('a12').submit();
            }
            else if (command.toLowerCase() === 'buy milan'){
				document.getElementById('a13').submit();
            }
            else if (command.toLowerCase() === 'add milan'){
				document.getElementById('a14').submit();
            }
            else if (command.toLowerCase() === 'buy titan model c'){
				document.getElementById('a15').submit();
            }  
            else if (command.toLowerCase() === 'add titan model c'){
				document.getElementById('a16').submit();
            } 
            else if (command.toLowerCase() === 'buy raymonds'){
				document.getElementById('a17').submit();
            }  
            else if (command.toLowerCase() === 'add raymonds'){
				document.getElementById('a18').submit();
            }
            else if (command.toLowerCase() === 'buy charles'){
				document.getElementById('a19').submit();
            }  
            else if (command.toLowerCase() === 'add charles'){
				document.getElementById('a20').submit();
            } 
            else if (command.toLowerCase() === 'buy mango'){
				document.getElementById('a21').submit();
            }  
            else if (command.toLowerCase() === 'add mango'){
				document.getElementById('a22').submit();
            } 
            else if (command.toLowerCase() === 'buy pink'){
				document.getElementById('a23').submit();
            }  
            else if (command.toLowerCase() === 'add pink'){
				document.getElementById('a24').submit();
            }
            


			    
        };
        recognition.onspeechend = function() {
            recognition.stop();
        };
        recognition.onerror = function(event) {
            message.textContent = 'Error occurred in recognition: ' + event.error;
        }        
        document.querySelector('#btnGiveCommand').addEventListener('click', function(){
            recognition.start();
        });
    </script>


    </body>
</html>
