<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>My E-Store</title>
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
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>We sell .</h1>
                       <p>Flat 40% OFF on all premium brands. Limited time offer only. Hurry Up!!!</p>
                       <a href="products.php" class="btn btn-danger" id="btnGiveCommand">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/camera.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="btnGiveCommand" id="autoResize">Cameras</p>
                                        <p>Choose among the best available in the world.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/watch.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="btnGiveCommand" id="autoResize">Watches</p>
                                    <p>Original watches from the best brands.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/shirt.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id= "btnGiveCommand" id="autoResize">Shirts</p>
                                   <p>Our exquisite collection of shirts.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy <a href="#">My E-store</a> Store. All Rights Reserved.</p>
                   <p>This website is developed by Prashant, Suraksha and Saumya</p>
               </center>
               </div>
           </footer>
        </div>
<form id="p" method="get" action="products.php">
</form>
<form id="p1" method="get" action="products.php">
</form>
<form id="p2" method="get" action="products.php">
</form>
<form id="p3" method="get" action="products.php">
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
				document.getElementById('p').submit();
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