<?php
include 'Admin/connection.php';


if(isset($_POST["d_id"])){
	$p_id= $_POST['d_id'];
	$nm= $_POST['name'];
    //Get all city data
    $query = "SELECT * FROM timeslot WHERE date = '$p_id'";
    // ORDER BY department ASC
    $run_query = mysqli_query($con, $query);
    //Count total number of rows
    $count = mysqli_num_rows($run_query);
    
    //Display cities list
    
        echo '<option value="">Select Time Slot</option>';
        while($row = mysqli_fetch_assoc($run_query)){
            
            if($count != 0)
            {
                $city_id=$row['slot'];
                
        echo "<option value='$city_id'>$city_id</option>";
            }
            else
            {
        echo "<option value=''>No Slots Available</option>";
            }
        }
}
?>