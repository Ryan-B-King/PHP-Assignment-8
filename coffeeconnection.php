<?php

    // Declared Variables set to FALSE or ''
    $firstName = '';
    $lastName = '';
    $email = '';
    $age = '';
    $firstNameMsg = '';
    $lastNameMsg = '';
    $emailMsg = '';
    $ageMsg = '';
    $firstNameCheck = false;
    $lastNameCheck = false;
    $emailCheck = false;
    $ageCheck = false;
    $checked = '';

    // When user clicks SUBMIT, this code is ran to review input and required fields
    if(isset($_POST['submit'])) {
        $firstName = htmlspecialchars(trim($_POST['fname']));   // Clear input from unwanted data
        $lastName = htmlspecialchars(trim($_POST['lname']));    // Clear input from unwanted data
        $email = htmlspecialchars(trim($_POST['email']));       // Clear input from unwanted data
    
        // Validates First Name Field
        if ($firstName == '') {
            $firstNameMsg = "Please enter your first name";
            
        } else {
            $firstNameMsg = '';
            $firstNameCheck = true;
        }

        // Validates Last Name Field
        if ($lastName == '') {
            $lastNameMsg = "Please enter your last name";
            
        } else {
            $lastNameMsg = '';
            $lastNameCheck = true;
        }

        // Validates Email Field
        if ($email == '') {
            $emailMsg = "Please enter your email";
            
        } else {
            $emailMsg = '';
            $emailCheck = true;
        }

        // Validates if checkbox was checked
        if (isset($_POST['age'])) {
            $age = 'yes';
            $checked = 'checked';
            $ageMsg = '';
            $ageCheck = true;
        } else {
            $ageMsg = "You must be at least 18 years of age to subscribe to our newsletter";
        }

        // SWITCH statement to confirm all fields have proper value.  IF all conditions are true, then user is sent to subscribed.php page
        switch ($firstNameCheck) {
            case true:
                switch ($lastNameCheck) {
                    case true:
                        switch ($emailCheck) {
                            case true:
                                switch ($ageCheck) {
                                    case true:
                                        header("Location: subscribed.php");
                                        break;
                                    default:
                                        break; 
                                };
                            default:
                                break; 
                        };
                    default:
                        break; 
                };
            default:
                break;    
        }; 

    }

    // If user clicks on 'CLEAR' button, the form fields are saved with vales of '' and page is refreshed with updated values
    if(isset($_POST['reset'])) {
        $firstName = '';
        $lastName = '';
        $email = '';
        $age = '';
        $firstNameMsg = '';
        $lastNameMsg = '';
        $emailMsg = '';
        $ageMsg = '';
    }
    // TESTED TRUE OR FALSE FOR SWITCH STATEMENT
    // print_r($firstNameCheck);
    // print_r($lastNameCheck);
    // print_r($emailCheck);
    // print_r($ageCheck);
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

    <?php include('header.html'); ?>    <!-- PHP Include function to add HEADER -->

        <figure class="center">
            <img src="images/people.png" alt="people drinking coffee" width="300">
        </figure>

    <!--  Content  -->
    <main id="content">

            <h2 class="center">Welcome to Coffee Connection!</h2>
            <blockquote>
                We’re not just passionate lovers of coffee, but everything else that goes with a full and rewarding coffeehouse experience. 
                We also offer a selection of premium teas, fine pastries and other delectable treats. And the music you hear in store is chosen for its artistry and appeal.  
                It’s not unusual to see people coming to Coffee Connection to chat, meet up or even work. 
                We’re a neighborhood gathering place, a part of the daily routine, and would like to be part of your way of life.
            </blockquote>
                
        <section id="contact">
            <h2 class="center">Sign up to Receive Our Newsletter</h2>
            
            <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
           
              <div class="flexcontainer">
               <label for="fname">First Name:</label> <input type="text" name="fname" id="fname" value="<?php print $firstName;?>"> <!-- Value is saved as part of 'STICKY FORM' -->
             </div>
             <p class="red"><?php print $firstNameMsg ?></p>               
             
             <div class="flexcontainer">
              <label for="lname">Last Name:</label> <input type="text" name="lname" id="lname" value="<?php print $lastName;?>"> <!-- Value is saved as part of 'STICKY FORM' -->
             </div>
             <p class="red"><?php print $lastNameMsg ?></p>
              
            <div class="flexcontainer">
               <label for="email">Email:</label> <input type="email" name="email" id="email" value="<?php print $email;?>"> <!-- Value is saved as part of 'STICKY FORM' -->
            </div>
             <p class="red"><?php print $emailMsg ?></p>            
 
            <div class="flexcontainer2">
               <label for="age">I am over 18:</label> <input type="checkbox" name="age" id="age" value="<?php print $age;?>" <?php print $checked;?>> <!-- Value is saved as part of 'STICKY FORM' -->
            </div>  
             <p class="red"><?php print $ageMsg ?></p> <!-- Value is saved as part of 'STICKY FORM' -->                                       
              
            <div class="flexcontainer">    
               <button type="submit" name="submit" value="Submit">Submit</button>
            </div>  
             
        </form>

        <!-- Second SUBMIT button is used to 'reset' the form -->
        <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

            <div class="flexcontainer">    
               <button type="submit" name="reset" value="Clear Form">Clear</button> 
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
    <?php include('footer.html'); ?>    <!-- PHP Include function to add HEADER -->

</body>
</html>