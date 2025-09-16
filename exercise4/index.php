<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Team</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<header>
    <h1>Meet Our Team</h1>
</header>

<section class="team-container">
    <!-- Team Member 1 -->
    <div class="team-member">
        <img src="james.jpg" alt="James Darryl Villaflor" />
        <h3>James Darryl Villaflor</h3>
        <p>The Newbie</p>
        <p>willing to learn and expand his knowledge of HTML/CSS. He is sometimes lazy but always submits his activities and schoolwork on time.</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/share/1CmVyPJK8G/" target="_blank" >Facebook</a>
            <a href="https://www.instagram.com/_dyeeems/" target="_blank" >Instagram</a>
        </div>
    </div>

    <!-- Team Member 2 -->
    <div class="team-member">
        <img src="jerome.jpg" alt="Jerome Ricamata" />
        <h3>Jerome Ricamata</h3>
        <p>The Designer</p>
        <p>currently studying Information Technology and interested in pursuing a career in software development.</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/jerome.ricamata.58" target="_blank" >Facebook</a>
            <a href="https://www.instagram.com/j_rummm/" target="_blank" >Instagram</a>
        </div>
    </div>

    <!-- Team Member 3 -->
    <div class="team-member">
        <img src="yna.jpg" alt="Juliana Emana" />
        <h3>Juliana Emana</h3>
        <p>The Strategist</p>
        <p>an IT student dedicated to building her skills in programming, problem-solving, and innovative tech solutions.</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/share/1FzAv48nzh/" target="_blank">Facebook</a>
            <a href="https://www.instagram.com/tsukiyna/" target="_blank" >Instagram</a>
        </div>
    </div>

    <!-- Team Member 4 -->
    <div class="team-member">
        <img src="jamaica.jpg" alt="Jamaica Cañeda" />
        <h3>Jamaica Cañeda</h3>
        <p>Cybersecurity Rookie</p>
        <p>Curious, and passionate about IT innovations. Eager to explore cybersecurity to help build safer digital systems through continuous learning and hands-on growth.</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/jamaica.caneda.50" target="_blank">Facebook</a>
            <a href="https://www.instagram.com/jajajaammm___/" target="_blank" >Instagram</a>
        </div>
    </div>
</section>
</style>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<div style='
        max-width:500px;
        margin:50px auto;
        padding:20px;
        border-radius:15px;
        background:#f9f9f9;
        box-shadow:0 4px 10px rgba(0,0,0,0.1);
        font-family:sans-serif;'>
        <h2 style='color:#6c63ff;'>Message Received ✅</h2>
        <p><b>Name:</b> $name</p>
        <p><b>Email:</b> $email</p>
        <p><b>Message:</b><br>$message</p>
    </div>";
}
?>

<form method="post" action="" style="
    max-width:500px;
    margin:50px auto;
    padding:20px;
    border-radius:15px;
    background:#e6e6fa;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
    font-family:sans-serif;">
    <h2 style="color:#6c63ff;">Contact Us</h2>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required style="width:100%;padding:8px;margin-bottom:12px;border-radius:5px;border:1px solid #ccc;"><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required style="width:100%;padding:8px;margin-bottom:12px;border-radius:5px;border:1px solid #ccc;"><br>
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" required style="width:100%;padding:8px;margin-bottom:12px;border-radius:5px;border:1px solid #ccc;"></textarea><br>
    <button type="submit" style="background:#6c63ff;color:#fff;padding:10px 20px;border:none;border-radius:5px;cursor:pointer;">Send Message</button>
</form>
