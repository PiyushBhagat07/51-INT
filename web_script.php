<?php
include 'Admin/connection.php';


if (isset($_POST['book_slot_1'])) {
    $a1 = mysqli_real_escape_string($con, $_POST['pro_nm']);
    $a2 = mysqli_real_escape_string($con, $_POST['username']);
    $a3 = mysqli_real_escape_string($con, $_POST['email']);
    $a4 = mysqli_real_escape_string($con, $_POST['phone']);
    $a5 = mysqli_real_escape_string($con, $_POST['date']);
    $a6 = mysqli_real_escape_string($con, $_POST['slot']);

    $q3 = "INSERT INTO visits(property_name,user_name,contact,email,date,time_slot) VALUES('$a1','$a2','$a4','$a3','$a5','$a6')";

    if ($con->query($q3) === TRUE) {
        echo "<script> alert('Your Slot Has Been Booked !') </script>";
        echo "<script> window.location='./index.php'</script>  ";
    } else {
        echo "Error " . $con->error;
    }
}

if (isset($_POST['book_slot_2'])) {
    $a1 = mysqli_real_escape_string($con, $_POST['pro_nm1']);
    $a2 = mysqli_real_escape_string($con, $_POST['username1']);
    $a3 = mysqli_real_escape_string($con, $_POST['email1']);
    $a4 = mysqli_real_escape_string($con, $_POST['contact1']);
    $a5 = mysqli_real_escape_string($con, $_POST['date2']);
    $a6 = mysqli_real_escape_string($con, $_POST['slot2']);

    $q3 = "INSERT INTO visits(property_name,user_name,contact,email,date,time_slot) VALUES('$a1','$a2','$a4','$a3','$a5','$a6')";

    if ($con->query($q3) === TRUE) {
        echo "<script> alert('Your Slot Has Been Booked !') </script>";
        echo "<script> window.location='./index.php'</script>  ";
    } else {
        echo "Error " . $con->error;
    }
}

if (isset($_POST['add_comment'])) {
    $a1 = mysqli_real_escape_string($con, $_POST['username']);
    $a2 = mysqli_real_escape_string($con, $_POST['email']);
    $a3 = mysqli_real_escape_string($con, $_POST['name']);
    $a4 = mysqli_real_escape_string($con, $_POST['message']);

    $q3 = "INSERT INTO comments(property_name,user_name,email,message) VALUES('$a3','$a1','$a2','$a4')";

    if ($con->query($q3) === TRUE) {
        echo "<script> alert('Thank You For Your Comment ! !') </script>";
        echo "<script> window.location='./blog.php'</script>  ";
    } else {
        echo "Error " . $con->error;
    }
}

if (isset($_POST['add_reply'])) {
    $a1 = mysqli_real_escape_string($con, $_POST['pro_nm']);
    $a2 = mysqli_real_escape_string($con, $_POST['reply_to']);
    $a3 = mysqli_real_escape_string($con, $_POST['user_nm']);
    $a4 = mysqli_real_escape_string($con, $_POST['message']);

    $q3 = "INSERT INTO comments(property_name,user_name,reply_to,message) VALUES('$a1','$a3','$a2','$a4')";

    if ($con->query($q3) === TRUE) {
        echo "<script> alert('Thank You For Your Comment ! !') </script>";
        echo "<script> window.location='./blog.php'</script>  ";
    } else {
        echo "Error " . $con->error;
    }
}

?>