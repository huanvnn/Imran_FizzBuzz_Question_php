<?php
    
    for ($i=0; $i <=100 ; $i++) { 
        
        if ($i%3 == 0) 
        {
           if ($i%5 == 0) 
           {
             echo 'FizzBuzz'; 
            }              
            else 
                {
                echo 'Fizz';
                }
        }
        elseif 
             ($i%5 == 0) 
            {
                echo 'Buzz';
            }
        else {
            echo $i;
        }        
    }
  
?>