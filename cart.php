<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="select it.id,it.name,it.price from users_items ut inner join items it on it.id=ut.item_id where ut.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['price']; 
       }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Projectworlds Store</title>
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
            <br>
            <div class="container">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?></th>
                            <th><a  href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th><a href="success.php?id=<?php echo $user_id?>" id="btnGiveCommand" class="btn btn-primary">Confirm Order</a></th>
                            <form id="c" method="get" action="success.php?id=<?php echo $user_id?>">
                            </form>
                        </tr>
                    </tbody>
                </table>
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
            else if (command.toLowerCase() === 'confirm order'){
				document.getElementById('c').submit();
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
