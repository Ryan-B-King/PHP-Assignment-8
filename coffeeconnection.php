<?php

$firstName = '';
$lastName = '';
$email = '';
$age = '';

$msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars(trim($_POST['fname']));
    $lastName = htmlspecialchars(trim($_POST['lname']));
    $email = htmlspecialchars(trim($_POST['email']));
    $age = $_POST['age'];
}








?>

<!DOCTYPE html> <!-- Ryan King-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Coffee Connection</title>

    <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    
    <link href="coffeeconnection.css" rel="stylesheet">

</head>

<body>

    <header class="center">
     <h1>Coffee Connection</h1>
    </header>


    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>



        <figure class="center">
            <img src="images/people.png" alt="people drinking coffee" width="300">
        </figure>


    <!--  Content  -->
    <main id="content">

            <h2 class="center">Welcome to Coffee Connection!</h2>
            <blockquote>We’re not just passionate lovers of coffee, but everything else that goes with a full and rewarding coffeehouse experience. We also offer a selection of premium teas, fine pastries and other delectable treats. And the music you hear in store is chosen for its artistry and appeal.  It’s not unusual to see people coming to Coffee Connection to chat, meet up or even work. We’re a neighborhood gathering place, a part of the daily routine, and would like to be part of your way of life.
        </blockquote>
        
        
        <section id="contact">
            <h2 class="center">Sign up to Receive Our Newsletter</h2>
            
            <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           
              <div class="flexcontainer">
               <label for="fname">First Name:</label> <input type="text" name="fname" id="fname" value="<?php print $firstName;?>">
             </div>
             <p class="red">display error here</p>               
             
             <div class="flexcontainer">
              <label for="lname">Last Name:</label> <input type="text" name="lname" id="lname" value="<?php print $lastName;?>">
             </div>
             <p class="red">display error here</p>
              
            <div class="flexcontainer">
               <label for="email">Email:</label> <input type="email" name="email" id="email" value="<?php print $email;?>"> 
            </div>
             <p class="red">display error here</p>            
 
            <div class="flexcontainer2">
               <label for="age">I am over 18:</label> <input type="checkbox" name="age" id="age" value="yes"> 
            </div>  
             <p class="red">display error here</p>                                       
              
            <div class="flexcontainer">    
               <button type="submit" name="submit">Submit</button>
               <button type="reset">Clear</button>  
           </div>  
             
        </form>  
        </section>        

        <section id="products">
           
            <div class="product center">
                <h3>Espresso</h3>
                <p><img src="images/coffee_espresso.jpg" alt="expresso coffee"></p>
                <p>Popular espresso beverages - latte, americano, cappuccino, macchiato, and cold espresso drinks</p>
            </div>

            <div class="product center">
                <h3>Blended</h3>
                <p><img src="images/coffee_blended.jpg" alt="blended coffee drinks"></p>
                <p>Delicious icy blends</p>
            </div>

            <div class="product center">
                <h3>Pastries</h3>
                <p><img src="images/coffee_pastries.jpg" alt="pastries"></p>
                <p>Muffins, bagels, coffee cakes, and more</p>
            </div>
            
            <div class="product center">
                <h3>Food</h3>
                <p><img src="images/coffee_food.jpg" alt="anytime food"></p>
                <p>Sandwiches, paninis, salads and more</p>
            </div>

            <div class="product center">
                <h3>Breakfast</h3>
                <p><img src="images/coffee_breakfast.jpg" alt="breakfast food"></p>
                <p>Biscuits, muffins, wraps, croissants, oatmeal and more</p>
            </div>
         
        </section>

    </main>


    <!--  Footer  -->
    <footer class="center">
                <address>
                     PO Box 1234<br>
                     San Diego, CA 92100<br>
                     info@CoffeeConnection.com
		        </address>
    </footer>

</body>
</html>