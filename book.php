<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Booking Page</title>
    <link rel="stylesheet" href="index.css">
   
<style>

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;

}

.featured-events {
    display: flex;
    justify-content: space-around;
    padding: 20px;
 
}

.event-card {
    background-color: #fff;
    border-radius: 5px;
   /* box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);*/
    padding: 20px;
    text-align: center;
    width:50vw;
}

img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}


.hero {
    background: url('images/home.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 10rem 0;
    position: relative;
    overflow: hidden;
  
}

.hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
}

.hero h2 {
    font-size: 3rem;
    margin: 0;
    z-index: 1;
    position: relative;
    animation: fadeInDown 1s ease-out;
}

.hero p {
    font-size: 1.5rem;
    margin: 1rem 0;
    z-index: 1;
    position: relative;
    animation: fadeInUp 1s ease-out;
}

button {
    background-color: #ff6600;
    color: #fff;
    border: none;
    padding: 0.75rem 1.5rem;
    cursor: pointer;
    font-size: 1rem;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s;
    z-index: 1;
    position: relative;
    animation: fadeInUp 1s ease-out;
}

button:hover {
    background-color: #e65c00;
    transform: scale(1.05);
}

section {
    margin-bottom: 2rem;
    padding: 2rem 0;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem 0;
    width: 100%;
    bottom: 0;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


.cardimg
{
    border-radius: 20px;
    width:24vw;
}
.event-card
{
  transition: transform .2s;
}

.event-card:hover
{

    transform: scale(1.1);
}
.user_img{

    width:45px;
}
ul{
    margin-left:150px;
    
    padding-left:150px;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    height:4vh;
}

.navbar-brand {
    font-size: 24px;
    font-weight: bold;
}

.navbar-nav {
    list-style: none;
    display: flex;
    align-items: center;
}

.navbar-nav li {
    margin-left: 20px;
    position: relative;
}

.navbar-nav a {
    color: #fff;
    text-decoration: none;
    padding: 8px 12px;
    transition: background-color 0.3s;
}

.navbar-nav a:hover {
    background-color: #0056b3;
    border-radius: 4px;
}

.user-menu {
    cursor: pointer;
}

.user-icon {
    font-size: 24px;
}

.dropdown {
    display: none;

    top: 100%;
    right: 0;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 4px;
    overflow: hidden;
}

.dropdown li {
    list-style: none;
}

.dropdown a {
    color: #333;
    padding: 10px 20px;
    display: block;
    text-decoration: none;
    transition: background-color 0.3s;
}

.dropdown a:hover {
    background-color: #f0f2f5;
}

.user-menu:hover .dropdown {
    display: block;
    
}



</style>
</head>
<body>
    <header>
    <nav class="navbar">
        <div class="navbar-brand">Online Ticket Reservation</div>
        <ul class="navbar-nav">
            
            <li><a href="#">About</a></li>
            <li><a href="#">Setting</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="index4.php">Help</a></li>
            <li><a href="index.php">Log Out</a></li>
            <li class="user-menu">
                <a href="#" class="user-icon">👤</a>
                <ul class="dropdown">
                    <li><a href="#"><?php echo "". $_SESSION['user_name']; ?></a></li>
                    <li><a href="index.php">Logout</a></li>
                    
                </ul>
            </li>
        </ul>
    </nav>
    </header>

    <main>

        <section id="home" class="hero">

            <div class="container01">

                <h2>Book Your Tickets Easily</h2>
                <p>Reserve tickets for plan, train, ,metro ,amts ,brts ,and gsrtc with just a few clicks.</p>
                <a href="reg2.html"><button onclick="window.location.href='booking.html'">Book Now</button></a>
            </div>

        </section>


        <section class="featured-events">
            <div class="event-card" class="items">
                <img src="images/metro.jpg" alt="Event 1" class="cardimg">
                <h2>Metro Train</h2>
                <p>Cheer for your favorite team in the grand arena.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
    
            <div class="event-card">
                <img src="images/rail.jpg" alt="Event 1" class="cardimg">
                <h2>Train</h2>
                <p>Get ready for an unforgettable musical experience.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
    
            <div class="event-card">
                <img src="images/img7.png" alt="Event 2" class="cardimg">
                <h2>Air Plan</h2>
                <p>Cheer for your favorite team in the grand arena.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
        </section>
    
        <section class="featured-events">
            <div class="event-card">
                <img src="images/gsrtc.jpg" alt="Event 1" class="cardimg">
                <h2> GSRTC Bus</h2>
                <p>Get ready for an unforgettable musical experience.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
    
            <div class="event-card">
                <img src="images/brts.jpg" alt="Event 1" class="cardimg">
                <h2>BRTS Bus</h2>
                <p>Get ready for an unforgettable musical experience.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
    
            <div class="event-card">
 
                <img src="images/amts.jpg" alt="Image 1" class="cardimg">
                <h2>AMTS Bus</h2>
                <p>Cheer for your favorite team in the grand arena.</p>
                <a href="reg2.html"><button>Book Now</button></a>
            </div>
        </section>


        
        
    
        <footer>
    
            <p>© 2024 Ticket Booking Platform</p>
        
        </footer>
    


    </main>

</body>

</html>


