<?php
 
        
        $conn = mysqli_connect("localhost", "root", "", "smart_parking");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 3 values from the form data(input)
        $date = isset($_POST['date']) ? $_POST['date'] : '';
        $time = isset($_POST['time']) ? $_POST['time'] : '';
        $parkingduration = isset($_POST['parkingduration']) ? $_POST['parkingduration'] : '';
        
       
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO reserve_detail  VALUES ( 
            '$date','$time','$parkingduration')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>"; 
 
            echo ( "$time\n $date\n $parkingduration");
            header("Location:slot.php");


        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>