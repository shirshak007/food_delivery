

    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "", "courier");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Escape user inputs for security


    $DESTINATION = mysqli_real_escape_string($link, $_REQUEST['DESTINATION']);

    $CARE_OF = mysqli_real_escape_string($link, $_REQUEST['CARE OF']);

    $PIN = mysqli_real_escape_string($link, $_REQUEST['PIN']);
	
	$WEIGHT = mysqli_real_escape_string($link, $_REQUEST['WEIGHT']);
    
	$DIAMENTION = mysqli_real_escape_string($link, $_REQUEST['DIAMENTION']);
	
	$DELIVERY_TYPE = mysqli_real_escape_string($link, $_REQUEST['DELIVERY_TYPE']);
	
	$odr_date="select sysdate from dual";
	// attempt insert query execution

   

	$sql= "INSERT INTO arena ( I_ID, DESTINATION, PIN, CARE OF, WEIGHT,ODR_DATE,DIAMENTION,EXP_DATE,FINAL_DATE,PRICE) VALUES (I_ID, '$DESTINATION', '$PIN', CARE_OF, '$WEIGHT',ODR_DATE,'$DIAMENTION',EXP_DATE,FINAL_DATE,PRICE)";

	
   	if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
		}
	else{echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);}

     

    // close connection

    mysqli_close($link);

    ?>

