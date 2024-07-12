<?php
include 'config.php';
session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPCS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/home.css">
    <style>
        .page-header {
            width: 100%;
            height: 40vh;
            background-size: cover;
            display: flex;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        .page-header h2,
        .page-header p {
            color: #fff;
        }

        #contact-details {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #contact-details .details {
            width: 40%;
        }

        #contact-details .details span,
        #form-details form span {
            font-size: 12px;
        }

        #contact-details .details h2,
        #form-details form h2 {
            font-size: 26px;
            line-height: 35px;
            padding: 20px 0;
        }

        #contact-details .details h3 {
            font-size: 16px;
            padding: 15px;
        }

        #contact-details .details li {
            list-style: none;
            display: flex;
            padding: 10px 0;
        }

        #contact-details .details li i {
            font-size: 14px;
            padding-right: 22px;
        }

        #contact-details .details li p {
            margin: 0;
            font-size: 14px;
        }

        #contact-details .map {
            width: 55%;
            height: 400px;
        }

        #contact-details .map iframe {
            width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>

    <?php include 'header.php'; ?>

    <section id="page-header" class="page-header" style="background-image: url('img/about/a11.png');">

        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE,We love to here from you! </p>

    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>
                Welcome to Kutti Pillar Photo Copy Shop (KPCS), where every copy tells a story! Since 2019, we've been your neighborhood print haven near the Faculty of Management and Commerce at the University of Jaffna. Despite the hurdles thrown our way by the pandemic, we didn't just adapt; we thrived. From Facebook in 2020 to our sleek web app in 2024, we're on a global journey. We've evolved from local charm to worldwide appeal, committed to growth, innovation, and serving you better. Kutti Pillar isn't just about photocopies; it's about connection, resilience, and the joy of bringing your ideas to life. Join us in this new chapter, where every click and copy resonate with our dedication to quality and convenience. Your journey is our story—let's make it extraordinary together!</p>
            <abbr title="">We are committed to fostering growth—both for our business and the community we serve.</abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">Our dedication to providing quality services remains unwavering</marquee>
        </div>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Vist our locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Milk Board Road, Thirunelvely, Jaffna.</p>
                </li>
                <li>
                    <i class="far fa-envelope"></i>
                    <p>customercare@kpcs.lk </p>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+94 775150236</p>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Sunday: 6:00 to 22:00 </p>
                </li>

            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20278.84672544319!2d80.0375945!3d9.6923702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe55d4a207db45%3A0x8e4228b4d459c5d4!2sKP%20photocopy%20%26%20multi%20shop!5e1!3m2!1sen!2slk!4v1708072153001!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>



    <?php include 'contact.php'; ?>


    <?php include 'footer.php'; ?>


    <script src="js/script.js"></script>

</body>

</html>