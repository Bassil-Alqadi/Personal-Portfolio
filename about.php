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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper-utils.js" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Bassil Al-Qadi-Blog | About Us</title>

    <style>

        body {

            margin: 0px;
            padding: 0px;

        }

        .line {

            display: inline-block;
            color: black;
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

        .about-us {

            width: 100%;
            padding: 80px 0px 80px 0px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;

        }

        .about-us .container {

            width: 60%;
            text-align: left;

        }
        
        .about-us .container p img { transition: .5s; }
        
        .about-us .container p img:hover {
            
           border-radius: 10px;
           opacity: .3;
           transition-duration: .5s;
           cursor: pointer;
            
        }

        .pragmatism {

            width: 100%;
            padding-top: 40px;
            padding-bottom: 40px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            background: url('media/pragmatism.png');

        }

        .pragmatism .container , .collaboration .container {

            width: 50%;
            text-align: center;
            
        }

        .collaboration {

            width: 100%;
            padding: 40px 0px 40px 0px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            background-color: #FF303F;

        }

        .success {

            width: 100%;
            padding: 60px 0px 60px 0px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: url('media/success.png');

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

        .success .container { 
            
             width: 70%;  
             
        }

        @media screen and (max-width: 576px)  {

            #about-us-img {
                
                width: 100%;
                
            }

            .about-us .container , .pragmatism .container , .collaboration .container , .success .container  {

                width: 90%;

            }

            .contact-us .container .row .col-md-6 h2 {

                width: 100%;

            }

            .contact-us .container .row .col-md-6:first-child { margin-bottom: 20px; }

        }

        @media screen and (max-width: 768px) {
            
            #about-us-img {
                
                width: 100%;
                
            }

            .about-us .container , .pragmatism .container , .collaboration .container , .success .container {

                width: 90%;

            }

            .contact-us .container .row .col-md-6 h2 {

                width: 100%;

            }   

            .contact-us .container .row .col-md-6:first-child { margin-bottom: 20px; }

        }

        @media screen and (max-width: 992px) {
            
        #about-us-img {
                
            width: 100%;
                
        }

        .about-us .container , .pragmatism .container , .collaboration .container , .success .container {

            width: 80%;

        }

        .contact-us .container .row .col-md-6 h2 {

            width: 100%;

        }

    }
        
    </style>

</head>

<body>

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
                                <a class="nav-link uppercase line" href="about.php">about</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link uppercase" href="works.php">works</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link uppercase" href="contact-us.php">contact</a>
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
                    <h6 class="mb-16 line">About Us</h6>
                    <p class="text-justify color-white">We are moving from idea to product realization</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us">
        <div class="container">
            <h1 class="line mb-32"><b>who we are</b></h1>
            <p class="mb-32">
               <img src="media/about-us.jpg" id="about-us-img" style="border: 1px solid #212F3D;">
            </p>
            <p class="mb-32">
                Im <b>Bassil H Al-Qadi</b>, Computer Information Systems (CIS) student. I have studied in Yarmouk Univeristy
                form 2015 - 2019, i am working as a frontend & UI/UX designer and a backend developer using PHP.
                Here we work for brands to make logos, websites and web applications for them, also we develop templetes for many categories such as: Personal blogs , educational website, admin dashboard, etc... 
            </p>
        </div>
    </section>

    <section class="pragmatism" data-aos="fade-up">
        <div class="container">
            <h4 class="uppercase mb-32">We beleive in</h4>
            <h1 class="uppercase mb-32"><b>opportunity </b></h1>
            <div>
                “If somebody offers you an amazing opportunity but you are not sure you can do it, say yes – then learn how to do it later.”<br>
                “Opportunities are usually disguised as hard work, so most people don’t recognize them.”<br>
                “Pursuing your passions makes you more interesting, and interesting people are enchanting.”
            </div>
        </div>
    </section>

    <section class="collaboration" data-aos="fade-up">
        <div class="container">
            <h4 class="mb-32 uppercase color-white"><b>Collaboration</b></h4>
            <div class="color-white">
                "Alone we can do so little; together we can do so much." – Helen Keller<br>
                "Teamwork is the ability to work together toward a common vision. The ability to direct individual accomplishments toward organizational objectives. It is the fuel that allows common people to attain uncommon results." – Andrew Carnegie <br>
                "It is the long history of humankind (and animal kind, too) that those who learned to collaborate and improvise most effectively have prevailed." – Charles Darwin
            </div>
        </div>
    </section>

    <section class="success" data-aos="fade-up">
        <div class="container">
            <h1 class="mb-32 uppercase"><b>success</b></h1>
            <div>
                "There are two types of people who will tell you that you cannot make a difference in this world: those who are afraid to try and those who are afraid you will succeed."<br>
                "Successful people do what unsuccessful people are not willing to do. Don't wish it were easier; wish you were better."
            </div>
        </div>
    </section>

    <section class="contact-us" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-16 main-headings color-white line">Stay with us</h6>
                    <h2 class="mb-32 color-white">We will be happy to drink a cup of<br> coffee with you</h2>
                    <button type="button" class="btn btn-primary primary-btn" id="contactbutton">Contact us</button>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <h1 class="uppercase color-white mb-16 main-headings">Bassil Al-Qadi</h1>
                        <p class="color-gray text-justify">
                            Here in Bassil Al-Qadi-Blog you i share with all of you my carrer,project and works.
                             Web development is very inspiring thing and hobit anyone can do, so please if i can take a moment of your time so you can give my your oponion about this blog- visit Contact Page and give me your feed.
                        </p>
                        <div class="divider"></div>
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
        
        $('#contactbutton').click(function(){
            
           window.open('https://bassil-blog.000webhostapp.com/contact-us.php'); 
            
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