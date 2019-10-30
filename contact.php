<?php
    session_start();
    session_unset();
    session_destroy();
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


        <style>
		/* #con{
			font-size: 2em;
			color: black;
			padding: 20%;
			padding-bottom: 0%; */
		}
		/* #content{
	text-align: center;
	background-position: center;
	padding-top: 10%;
} */


/* body{
	font-family: 'Lato';
	font-weight: bolder;
	color: black;
} */
hr{
	color: black;
	border: 1px solid black	;
	
}

		
/* html{
	height: 100%;
} */
h1{
	font-weight: 700;
	font-size: 5em;

}
body {font-family: Arial, Helvetica, sans-serif;
background-color:#4f4f4f;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
img{
	height: 500px;
	width: 80%;
	position: absolute;
}
    </style>


    </head>
    <body>
        <div>
            <?php
                include('header.php');
            ?>
            <br>
            <form>	
<!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZb6jc4iDLRXGfrj8PhM-10RViMFEcY3oShUmt6yLHRf-DOBsh"><br> -->
<div class="container">

<img src="https://media.istockphoto.com/photos/cropped-of-man-holding-cell-phone-at-working-place-picture-id666135210?k=6&m=666135210&s=612x612&w=0&h=Vp78Az9bxoQXzZZwVCaqAFmUzHR9TeCKscJ4a2EeVH4="><br>
		<div class="row">
			<div class="col-lg-12">
				<div id="content"> 
					<h1> Contact us </h1>		
					<h3> Have questions?We have answers</h3>
					
				    <div id="con">

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit" style="background-color:red;">
  </form>


					</div>
					<br>
					<hr style="width: 100%;"><br>
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

<form id="lab2" method="get" action="login.php">
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
			else if (command.toLowerCase() === 'open login again'){
				document.getElementById('lab2').submit();
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
























