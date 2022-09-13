<form method="post">      
    Enter a string: <input type="text" name="string"/>
    <button type="submit">Check</button>  <br> <br>
    Password: <input type="password" name="password" required />
    <input type="submit" value="Check" /><br /><br>
    Countdown:<input type="text" name="date" required />
    <input type="submit" value="Check" /><br />
</form>
<?php   
    if($_GET)  
    {  
        //get the value from form  
        $string = $_GET['string'];  
        //reversing the string  
        $reverse = strrev($string);  
          
        //checking if the string and reverse is equal  
        if($string == $reverse){  
            echo "The string $string is Palindrome";     
        }else{  
            echo "The string $string is not a Palindrome";   
        }  
}     

    if ($_POST){
        $password = $_POST['password'];
        $number = preg_match('@[0-9]@', $password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
            echo "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
        } 
        else {
            echo "Your password is strong.";
        }
    }  

    if ($_GET){
        $date = $_GET['date'];
        date_default_timezone_set('Turkey');
        $christmasDay = strtotime('December 25');
        $time = time();
        $days = ceil(($christmasDay - $time)/60/60/24);  
        echo "There are " . $days . " days until Christmas";
    }
    


?>