<?php

    include_once('connection.php');

    $error = "";

    if( array_key_exists("submit" , $_POST) ) {

        if( $_POST['username'] == "" ) {

            $error.= "Please enter your name<br>";

        } 

        if( $_POST['useremail'] == "" ) {

            $error.= "Please enter your email<br>";

        }

        if( $_POST['usermessage'] == "" ) {

            $error.= "Please enter your message";

        }

        if($error !="") {

            $error = '<div class = "alert alert-danger" id="alert" role="alert"><lottie-player 
    src="https://assets6.lottiefiles.com/temp/lf20_yYJhpG.json"  background="transparent"  speed="1"  style="width: 80px; height: 80px;" loop autoplay >
</lottie-player>'.$error.'</div>';
      
        } else {
    
            $name = $_POST['username'];
            $email = $_POST['useremail'];
            $message = $_POST['usermessage'];

            $sql = "INSERT INTO users(username,useremail,usermessage) VALUES ('$name','$email','$message')";

            if( mysqli_query($conn,$sql) ) {

                $error = '<div class = "alert" id="alert" role="alert"><lottie-player 
                    src="https://assets6.lottiefiles.com/datafiles/Bn3v9MQSL5CxM5a/data.json"  background="transparent"  speed="1"  style="width: 80px; height: 80px;" autoplay >
                </lottie-player></div>';
                
            }

        }   

    }

    mysqli_close($conn);

?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Bassil Al-Qadi-Blog | Contact Us</title>

    <style>

        body {

            margin: 0px;
            padding: 0px;

        }
        
        
        .line {

            display: inline-block;
            color: white;
            text-decoration: none;

        }

        .line::after {

            content: '';
            display: block;
            width: 30%;
            margin-top: 5px;
            height: 2px;
            background: #FF303F;
            transition: .3s;
            
        }

        .line:hover::after {

            width: 100%;
            transition: .3s;
            
        }

        .divider {

            display: none;
            margin: 0 auto;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 100%;
            height: 1px;
            background-color: darkgray;
            opacity: .3;

        }

        .color-white { color: white; }
        .color-black { color: black; }
        .color-gray { color: #958870; }

        .mb-2 { margin-bottom: 8px; }
        .mb-4 { margin-bottom: 4px; }
        .mb-8 { margin-bottom: 8px; }
        .mb-16 { margin-bottom: 16px; }
        .mb-32 { margin-bottom: 32px; }
        .mb-64 { margin-bottom: 64px; }
        .mb-128 { margin-bottom: 128px; }
    
        .uppercase { text-transform: uppercase; }

        .text-justify {

            text-align: justify;
            text-justify: inter-word; 
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
            width: 80%;

        }

        .main-headings {

            font-family: 'Roboto Condensed', sans-serif;
            letter-spacing: 4px;

        }

        .primary-btn  {

            padding: 10px 15px 10px 15px;
            border: 0px;
            border-radius: 2px;
            background-color: #FF303F;
            color: white;
            font-weight: bold;
            font-family: 'Roboto Condensed', sans-serif;
            font-size: 12px;
            transition: .5s;
            text-transform: uppercase;
            letter-spacing: 1px;

        }

        .primary-btn:hover {

            color: #FF303F;
            background-color: white;
            transition-duration: .5s;

        }

        .navbar { width: 100%; }

        .navbar .navbar-brand , .navbar .navbar-nav .nav-item .nav-link {

            color: #E5E8E8;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;

        }

        .navbar .navbar-nav .nav-item .nav-link {

            font-size: 12px;

        }

        .header-section {

            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #212121;

        }

        .header-section .container {

            width: 100%;

        }

        .header-section .container h6 {

            color: #AAB7B8;
            font-size: 18px;
            font-family: 'Abel', sans-serif;
            letter-spacing: 2px;
            text-align: left;

        }

        .contact { 

            width: 100%;
            padding: 80px 0px 80px 0px;
            
        }

        .contact .container .row:first-child  {

            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;

        }

        .contact .container .row:last-child .col small {

            display: block;
            font-weight: 500;

        }
        
        .contact .container .row:last-child .col:last-child i:not(:first-child) {

            margin-right: 6px;
            color: #212121;
            transition: .5s;

        }

        .contact .container .row:last-child .col:last-child i:not(:first-child):hover {

            cursor: pointer;
            opacity: .5;

        }

        .contact-us {

            width: 100%;
            padding-top: 70px;
            padding-bottom: 70px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-items: center;
            background-color: #212121;

        }

        .contact-us .container .row .col-md-6:not(:first-child) {

            padding-top: 20px;
            padding-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            background-color: #1B1B1B;

        }

        .contact-form input , .contact-form textarea {

            padding: 16px;
            border-radius: 0px;
            border: 1px solid #2F2F2F;
            background-color: transparent;

        }

        #alert {

            
            width: 50%;
            border-radius: 0px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            
        }

        #snapcode {
            
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            
        }
        
        .modal-footer {
            
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            
        }

        @media screen and (max-width: 576px) {

            #alert { width: 100%; }

            .contact .container .row:last-child {

                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
               
            }

            .contact .container .row:last-child .col { 

                text-align: center;

            }

            .divider { 
                
                display: block; 
                width: 80%; 
                
            }

            .contact-us .container .row .col-md-6:first-child { margin-bottom: 20px; }

        }

        @media screen and (max-width: 768px) {
            
            #alert { width: 100%; }

            .contact-us .container .row .col-md-6:first-child { margin-bottom: 20px; }

        }

    </style>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bassil Al-Qadi Snapcode</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container" id="snapcode">
                <img src="media/snapcode.png" width="300px" height="300px">
            </div>
          </div>
          <div class="modal-footer">
            <small>Bassil Al-Qadi-Blog | All Rights Reserved &copy<?php echo date("Y"); ?></small>
          </div>
        </div>
      </div>
    </div>

    <section class="header-section">
        <div class="container">
            <div class="row mb-64">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand uppercase" href="#">bassil alqadi</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link uppercase" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link uppercase" href="about.php">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link uppercase" href="works.php">works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link uppercase line" href="contact-us.php">contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link uppercase" href="cv.html">My CV</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="container">
                    <h6 class="line color-white">Contact Us</h6>
                    <p class="text-justify color-white">We will be happy to drink a cup of coffee with you</p>
                </div>
            </div>
        </div>
    </section>
        
    <section class="contact" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
        <div class="container">
            <div class="row mb-32">
                <h1 class="line color-black">How to find us</h1>
            </div>
            <div class="row" data-aos="fade-left">
                <div class="col">
                    <h6><i class="fas fa-map-marker-alt"></i> <b>Address</b></h6>
                    <small>Hawsha - East neighborhood</small>
                    <small>Mafraq - JOR</small>
                </div>

                <div class="divider"></div>

                <div class="col">
                    <h6><i class="fas fa-mobile"></i> <b>Call Us</b></h6>
                    <small>+962791858735</small>
                </div>

                <div class="divider"></div>

                <div class="col">
                    <h6><i class="fas fa-envelope-open-text"></i> <b>Email</b></h6>
                    <small>bassilalqadi65@gmail.com</small>
                </div>

                <div class="divider"></div>

                <div class="col">
                    <h6><i class="fas fa-users"></i> <b>Social Networks</b></h6>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-snapchat-ghost"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us" data-aos="fade-up">
        <div class="container">
            <div class="row mb-32">
                <div id="alert"><?php echo $error; ?></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-16 main-headings color-white line">Keep in touch</h6>
                    <form method="POST" action="?" class="contact-form">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" aria-describedby="emailHelp" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="useremail" class="form-control" placeholder="Email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="usermessage" placeholder="Message" rows="4"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn primary-btn">Send Message</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <h1 class="uppercase color-white mb-16 main-headings">Bassil Al-Qadi</h1>
                        <p class="color-gray text-justify">
                            Here in Bassil Al-Qadi-Blog you i share with all of you my carrer,project and works.
                             Web development is very inspiring thing and hobit anyone can do, so please if i can take a moment of your time so you can give my your oponion about this blog- visit Contact Page and give me your feed.
                        </p>
                        <div class="divider" style="display: block;"></div>
                        <p class="color-gray text-justify"><b>&copy<?php echo date("Y"); ?> Bassil, All Rights Reserved</b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>

    $(".navbar-toggler").click(function(){
        $(".collapse").toggleClass('bg-dark');
        $(".collapse").css("width","100%");
        $(".collapse").css("z-index","1");
    });
    
    $('.fa-facebook-f').click(function(){
        
       window.open('https://web.facebook.com/profile.php?id=100004515360178'); 
        
    });
    
    $('.fa-instagram').click(function(){
        
       window.open('https://instagram.com/bassil_97'); 
        
    });
    
    $('.fa-snapchat-ghost').click(function(){
        
        $('#exampleModal').modal('show');
        
    });
    
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>