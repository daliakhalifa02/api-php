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
?>