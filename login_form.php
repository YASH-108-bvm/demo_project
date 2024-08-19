<?php

    include("db_config.php");

    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    //cheeck connection.......
    if(!$conn)
    {
        die("Connection Failed to Database Server :" . mysqli_connect_error());
    }

   // echo "Connected Successfully to Database Server :";

    $mo = mysqli_real_escape_string($conn,$_POST['id']); 
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
   
    // ADMIN ckk
   

    //Id or Password check..........
    
    $sql_check = " SELECT * FROM user02 WHERE mo = '$mo' LIMIT 1";

       // $stmt = mysqli_prepare($conn,$sql_check);

    $result = mysqli_query($conn,$sql_check);

       //$resultno = mysqli_num_rows($result);

        //echo $resultno;
     $user_ck = mysqli_fetch_assoc($result); 
        //echo 'PASSWORD-' .$user_ck['pass'];

     $password =  $user_ck['pass'];

               if($user_ck)

                {
                    $check_pass = password_verify($pass,$password);

                   // echo "test".$check_pass;

                    if($check_pass = password_verify($pass,$password))
                    {
                        session_start();
                        $_SESSION['user_name'] = $user_ck['fname'];
                        $_SESSION['user_id'] = $user['id'];
                        
                        echo "logine done";
                        header("Refresh:2");
                        header("location:book.php");
                    }
                    else
                    {
                        echo "password wrong";
                    }
                }
                else
                    {
                        echo " Mobile number wrong";

                    }

                    if($mo == "admin" & $pass == "admin") 
                     {
                         header("location:adminlogin.php");
                     }
                     else
                     {
                        exit;
                     }

    mysqli_close($conn);


?>