<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="admin01.css">
</head>

<style>

a
{
    text-decoration: none;
    font-family: bold;
    color: black;
    font-size: 1.2em;
}

.form-container {
    background-color: #fff;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    width: 300px;
}

h2 {
    text-align: center;
    margin-bottom: 1rem;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 0.5rem;
    font-weight: bold;
}

input {
    margin-bottom: 1rem;
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 0.5rem;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #45a049;
}
table,td
{
    padding:10px;
    margin:10px;
    border:2px solid black;
    border-collapse:collapse;
    width:60vw;
}

</style>
<body>
    <div class="container">

        <aside class="sidebar">

            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="admin.php"><i class="fas fa-tachometer-alt"></i> Admin Page</a></li>
                <li><a href="adddetails.html"><i class="fas fa-ticket-alt"></i> ADD Details </a></li>
                
            </ul>
        </aside>

        <main class="main-content">

            <header>
                <h1>Add AMTS Details , Admin</h1>
            </header>
        <center>
            <?php
            
                include('db_config.php');

                $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

                if(!$conn)
                {
                    die('Connection fail to database !!'. mysqli_connect_error());
                }

                $sql = "SELECT * FROM amts";

                $result1 = mysqli_query($conn,$sql);

                $row = mysqli_num_rows($result1);

               // echo $row;

                $n=1;

                for($i=0; $i<$row; $i++)
                {
                   

                    $sql1 = "SELECT * FROM amts WHERE id=$n";

                    $result = mysqli_query($conn,$sql1);

                    $fetch = mysqli_fetch_assoc($result);

   

                    echo "<table>

                            <tr>
                                
                                    <td>Bus name</td>
                                    <td>Bus rootNo</td>
                                    <td> Bus Start Time</td>
                                    <td>Bus end Time</td>
                                    <td>from</td>
                                    <td>To</td>
                                    <td>Bus add_date</td>
                                                                    
                            </tr>
 
                                <td>" . $fetch["name"]. "</td>
                                <td>" . $fetch["rootNo"]. "</td>
                                <td>" . $fetch["start_time"]. "</td>
                                <td>" . $fetch["end_time"]. "</td>
                                <td>" . $fetch["from0"]. "</td>
                                <td>" . $fetch["to0"]. "</td>
                                <td>" . $fetch["date"]. "</td>

                            </tr>


                            </table>";

                            $n++;

                           // echo $n;

                           

                }
            
            ?>

        </center>    

            <br>

            <footer>
                <p>© 2024 Online Ticket Reservation System</p>
            </footer>
        </main>
    </div>
</body>

</html>


