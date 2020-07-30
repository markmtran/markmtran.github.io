<?php
if($_POST["submit"]) {
    $name = $_POST["name"]
    $email = $_POST["email"]
    $phone = $_POST["phone-number"]
    $subject = $_POST["subject"]
    $message = $_POST["message"]
    mail("marktran@stanford.edu, markmtran1@gmail.com", $subject, $message, "From: $name <$email>", "Phone: $phone");
    $confirm = "<p>Your message has been sent!</p>"
}
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/d2d7b9c4dd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Hi! I'm Mark</title>
</head>

<body>
    <nav id="nav-bar">
        <div id="nav-left">
            <p id="logo">Mark Tran<img id="lovebird" src="https://cdn.shopify.com/s/files/1/0029/2801/7443/products/LOVI-S-GRN-F_448x448.png?v=1595887415" alt="Lovebird stuffed plush"></p>
        </div>

        <div id="nav-mid">
            <div class="button-enlarge">
                <a class="nav-link" href="#top">Home</a>
            </div>
            <div class="button-enlarge">
                <a class="nav-link" href="#about-container">About Me</a>
            </div>
            <div class="button-enlarge">
                <a class="nav-link" href="#projects-container">Projects</a>
            </div>
            <div class="button-enlarge">
                <a class="nav-link" href="#contact-container">Contact</a>
            </div>
        </div>

        <div id="nav-right">
            <div id="linkedin-div" class="button-enlarge">
                <a id="linkedin-icon" class="icon-color" href="https://www.linkedin.com/in/mark-tran-0aa70317b?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BT3fJFA8IRj2wODugX567FQ%3D%3D" target="_blank"><i class="fab fa-linkedin fa-2x"></i></a>
            </div>
            <div id="github-div" class="button-enlarge">
                <a id="github-icon" class="icon-color" href="https://github.com/markmtran" target="_blank"><i class="fab fa-github-square fa-2x"></i></a>
            </div>
            <div id="mail-div" class="button-enlarge">
                <a id="mail-icon" class="icon-color" href="mailto:marktran@stanford.edu.com"><i class="fas fa-envelope-square fa-2x"></i></a>
            </div>
        </div>
    </nav>

    
    <div id="greeting-div">
        <h1 id="intro" class="header-text">Hi, I'm Mark.<br>Nice to meet you!</h1>
        <div id="greeting-buttons">
            <button class="greeting-btn-style greeting-change">Projects</button>
            <a target=_blank href="https://docs.google.com/document/d/10W612qHAdzG5kp7djI5cuQH_S8hbinN55cROGEkdyik/edit?usp=sharing"><button class="greeting-btn-style greeting-change">Resume</button></a>
        </div>
    </div>

    <div id="about-container">
        <div id="about-div">
            <div id="about-words">
                <h2 id="about-title" class="header-text">About Me</h2>
                <p class="about-text">I am currently a sophomore undergraduate at Stanford University with the intention of majoring in Computer Science and minoring in Economics.

                </p>
            </div>
            <div id="about-photos">
                <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQL1wYJejZuVXABT_vSlQJpJQLUpPRSpz3WHmaxRTlcYL3eYjGBno5bUgj-Zdf-_0kzy13vlVHECxMn/embed?start=true&loop=true&delayms=5000" frameborder="0" width="600" height="360" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
            </div>
        </div>
    </div>

    <div id="projects-container">
        <h2 id="projects-title" class="header-text">Projects</h2>
        <div id="projects-grid">
            <a href="#" target=_blank>Project 1</a>
            <a href="#" target=_blank>Project 2</a>
            <a href="#" target=_blank>Project 3</a>
        </div>
    </div>

    <div id="contact-container">
        <h2 id="contact-title" class="header-text">Contact Me!</h2>
        <div id="contact-div">
            <p id="form-desc">Check out my LinkedIn and GitHub, or send me a message here!</p>
            <form id="contact-form" action="/contact.php" method="post">
                <div id="form-entries">
                    <div class="form-struct">
                        <b><label for="name" id="name-label">Name</label></b>
                        <input class="form-box" type="text" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-struct">
                        <b><label for="email" id="email-label">Email</label></b>
                        <input class="form-box" type="email" name="email" id="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="form-struct">
                        <b><label for="phone-number" id="phone-label">Phone Number (optional)</label></b>
                        <input class="form-box" type="tel" name="phone-number" id="phone-number" placeholder="Enter your phone number">
                    </div>
                    <div class="form-struct">
                        <b><label for="subject" id="subject-label">Subject</label></b>
                        <input class="form-box" type="text" name="subject" id="subject" placeholder="What is your message about?" required>
                    </div>
                    <div class="form-struct">
                        <b><label for="message" id="message-label">Message</label></b>
                        <textarea class="message-box" name="message" id="message" placeholder="Enter your message..." required></textarea>
                    </div>
                    <div class="form-struct">
                        <button class="submit-enlarge" id="submit-btn" type="submit"><b>Submit</b></button>
                    </div>
                </div>
                <i id="email-me">Or, email me at <br><a href="mailto:marktran@stanford.edu">marktran@stanford.edu</a>!</i>
            </form>
            <?=$confirm ?>
        </div>
    </div>

    <footer id="footer">
        <p class="button-enlarge"><a id="footer-link" href="#greeting-div">Back to Top</a></p>
    </footer>
</body>

</html>