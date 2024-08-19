<?php

    include('db_config.php');

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    
    
    //check

    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

    echo "Connected Successfully to Database Server :";


    $fname = mysqli_real_escape_string($conn,$_POST['fname']);
    $mname = mysqli_real_escape_string($conn,$_POST['mname']);
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $mo = mysqli_real_escape_string($conn,$_POST['mo']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
    $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $pincode = mysqli_real_escape_string($conn,$_POST['pincode']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $addres = mysqli_real_escape_string($conn,$_POST['addres']);
 



   if($pass != $cpass)
    {
        echo "Password Or C_Pass Must be same :>>>>>";
        exit;  
    }

    if( empty($fname) || empty($mname) || empty($lname) || empty($email) || empty($pass) || empty($city) || empty($pincode) || empty($addres) || empty($mo) || empty($gender))
    {
        echo "Pls Full Fill All Details";
    }

    //check u_name exist.....

    $sql_check = "SELECT * FROM user02 WHERE mo = '$mo' OR email = '$email' LIMIT 1 ";

    $result_check = mysqli_query($conn,$sql_check);

    if(mysqli_num_rows($result_check) > 0)
    {
        echo "Username Or email alredy exists:";
        
    }

    $hash_pass = password_hash($pass,PASSWORD_BCRYPT);

    //insert data
   $sql = "INSERT INTO user02(fname,mname,lname,email,pass,city,pincode,addres,mo,gender,created_by) VALUES(?,?,?,?,?,?,?,?,?,?,NOW())";

    $stmt = mysqli_prepare($conn,$sql);

    if($stmt)
    {
        mysqli_stmt_bind_param($stmt,'ssssssssss', $fname,$mname,$lname,$email,$hash_pass,$city,$pincode,$addres,$mo,$gender);
    }
    
    if(mysqli_stmt_execute($stmt))
    {
        echo "Successfully regisration::::::....";
        header("location:index3.html");
    }
    else
    {
        echo "regisration Failed :::.::";
        exit;
    }

    mysqli_close($conn);
    

?>