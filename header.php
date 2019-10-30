<head>
<style>
  .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0}
  .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
  .speech img {float: right; width: 40px }
  #btnGiveCommand{
  }
  #btnGiveCommand:hover{
      background-color:red;
      color:white;
  }
</style>

</head>

<nav class="navbar navbar-inverse navabar-fixed-top">
               <div class="container">
                   <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </button>
                       <a href="index.php" class="navbar-brand">My E-store</a>
                   </div>
                   
                   <div class="collapse navbar-collapse" id="myNavbar">
                       <ul class="nav navbar-nav navbar-right">




                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
    <li >
    
    <a ><button class="btn btn-sm btn-danger" id='btnGiveCommand'>Speak something here!</button></a>
  
    <span style="color:white;" id='message'></span>


    
</li>


                           <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <li><a href="contact.php"><span class="glyphicon glyphicon-shopping-cart"></span> Contact Us</a></li>
                           <?php
                           }else{
                            ?>
                            <li >

    <a><button class="btn btn-sm btn-danger" id='btnGiveCommand'>Speak something here!</button></a>
   
    <span style="color:white;" id='message'></span>
 
   

</li>
                           <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <li><a href="contact.php"><span class="glyphicon glyphicon-shopping-cart"></span> Contact Us</a></li>
                           <?php
                           }
                           ?>
                           
                       </ul>
                   </div>
               </div>
</nav>


<form id="labnol" method="get" action="cart.php">
</form>
<form id="labnol1" method="get" action="settings.php">
</form>
<form id="labnol2" method="get" action="logout.php">
</form>


<form id="labnol3" method="get" action="signup.php">
</form>
<form id="labnol4" method="get" action="login.php">
</form>
<form id="contactus" method="get" action="contact.php">
</form>



<form id="lab" method="get" action="index.php">
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
            if(command.toLowerCase() === 'open card'){
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
            else if (command.toLowerCase() === 'open me'){
				document.getElementById('contactus').submit();
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