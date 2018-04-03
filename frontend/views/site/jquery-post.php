<?php 
   if( isset( $_POST["field1"] ) ){
        echo "Hello " . $_POST["field1"] ;
        
	// You can even perform a database operation here once you got the posted data
        }else
        {
            echo "null";
        }