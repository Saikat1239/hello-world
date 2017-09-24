<html>
   <body>
      
      <?php
         $books = array( 
            "PHP" => array (
               "Name" => "Learning PHP",
               "ID" => 30,	
               "Level" => "Basic"
            ),
            
            "Java" => array (
               "Name" => "Java Basic",
               "ID" => 40,	
               "Level" => "intermediate"
            ),
         );
         
         /* Accessing multi-dimensional array values */
         echo "Name for PHP Book: " ;
         echo $books['PHP']['Name'] . "<br />"; 
         
         echo "ID for PHP Book: " ;
         echo $books['PHP']['ID'] . "<br />"; 
         
         echo "Level for Java Book: " ;
         echo $books['Java']['Level'] . "<br />"; 
      ?>
   
       
     Test
   </body>
</html>