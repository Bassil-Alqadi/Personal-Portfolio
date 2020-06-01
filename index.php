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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

    <title>Bassil Al-Qadi-Blog | Home</title>

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
        
        .mt-2 { margin-bottom: 8px; }
        .mt-4 { margin-bottom: 4px; }
        .mt-8 { margin-bottom: 8px; }
        .mt-16 { margin-bottom: 16px; }
        .mt-32 { margin-bottom: 32px; }
        .mt-64 { margin-bottom: 64px; }
        .mt-128 { margin-bottom: 128px; }
    
        .uppercase { text-transform: uppercase; }

        .text-justify {

            text-align: justify;
            text-justify: inter-word; 
            font-family: 'Open Sans', sans-serif;
            font-size: 12px;
            width: 80%;

        }

        .header-section {

            position: relative;
            width: 100%;
            height: 600px;
            background: url('media/forest.jpg');

        }

        .header-section .navbar {

            padding: 20px;
            
        }

        .header-section .container { 
            
            display: flex;
            flex-wrap: wrap;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            
        }

        .header-section .container h1 {

            color: white;
            font-family: 'Ubuntu', sans-serif;
            text-align: center;

        }

        .header-section .container h6 {

            color: #AAB7B8;
            font-size: 18px;
            font-family: 'Abel', sans-serif;
            letter-spacing: 2px;
            text-align: center;

        }
        
        .social-icons {
            
            width: 100%;
            position: absolute;
            bottom: 10px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        
        }
        
        .social-icons lottie-player {
         
            display: inline-block;   
            margin: 10px;
            
        }
        
        .navbar .navbar-brand , .navbar .navbar-nav .nav-item .nav-link {

            margin: 6px;
            color: #E5E8E8;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;

        }

        .navbar .navbar-nav .nav-item .nav-link {

            font-size: 12px;

        }

        .body-section {

            width: 100%;
            background-color: #212121;

        }

        .steps {

            padding-top: 70px;
            padding-bottom: 70px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;

        }

        .steps .container {

            color: white;
    
        }

        .main-headings {

            font-family: 'Roboto Condensed', sans-serif;
            letter-spacing: 4px;

        }

        .steps h2 {

            line-height: 50px;
            font-family: 'Roboto Condensed', sans-serif;
            font-weight: 600;

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
    
        .steps .container .row .col-md-6 .row div {

            margin: 20px;
    
        }

        .steps-headings {

            font-family: 'Open Sans', sans-serif;
            letter-spacing: 1px;

        }

        .our-works {

            width: 100%;
            padding: 80px 20px 80px 20px;

        }

        .our-works .container .row h1 { 

            font-family: 'Roboto Condensed', sans-serif;
            font-weight: bold;

         }

         .our-works .container .row:not(:first-child) .col p {

            width: 80%;

         }
         
         .our-works .container .row:not(:first-child) .col ul {

            font-weight: 500;
            line-height: 30px;

         }

         .latest-projects {

            width: 100%;
            padding-top: 70px;
            padding-bottom: 70px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            background-color: black;

         }
         
         .latest-projects .container .row .col-md-6:last-child .container {
             
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            
         }

         .our-team {

            width: 100%;
            padding-top: 70px;
            padding-bottom: 70px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;

         }

         .our-team .container .row .col-md-6 h2 , .contact-us .container .row .col-md-6 h2 {

            line-height: 50px; 
            width: 60%;

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

        @media screen and (max-width: 576px) {

            .latest-projects .container .row .col-md-6:last-child {  margin-top: 20px; }

            .steps .container .row .col-md-6 {

                padding-left: 50px;
                padding-right: 50px;
                margin: 30px;
               
            }

            .steps .container .row .col-md-6 h2 { text-align: center; }

            .steps .container .row .col-md-6 .row , .steps .container .row .col-md-6 {

                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                align-items: center;
                justify-content: center;

            }

            .our-works .container .row:not(:first-child) {

                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                align-items: center;
                justify-content: center;

            }

            .our-works .container .row:not(:first-child) {

                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                align-items: center;
                justify-content: center;

            }

            .our-works .container .row:not(:first-child) .col:not(:last-child) {

                border-bottom: 1px solid lightgray;
                margin-bottom: 10px;

            }

            .latest-projects , .contact-us {

                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                text-align: center;

            }

            .our-team {

                padding-left: 10px;
                padding-right: 10px;

            }

            .our-team .container .row .col-md-6 h2 , .contact-us .container .row .col-md-6 h2 {

                width: 100%;

            }

            .contact-us .container .row .col-md-6:first-child { margin-bottom: 20px; }

        }

        @media screen and (max-width: 768px) {

            .latest-projects .container .row .col-md-6:last-child {  margin-top: 20px; }

            .our-works .container .row:not(:first-child) {

                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                align-items: center;
                justify-content: center;

            }

            .our-works .container .row:not(:first-child) .col:not(:last-child) {

                border-bottom: 1px solid lightgray;
                margin-bottom: 10px;

            }

            .our-team .container .row .col-md-6 h2 , .contact-us .container .row .col-md-6 h2 {

                width: 100%;

            }

            .contact-us .container .row .col-md-6:first-child { margin-bottom: 20px; }

        }

        @media screen and (max-width: 992px) {

            .our-works .container .row:not(:first-child) {

                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                align-items: center;
                justify-content: center;

            }

            .our-works .container .row:not(:first-child) .col:not(:last-child) {

                border-bottom: 1px solid lightgray;
                margin-bottom: 10px;

            }

            .our-team .container .row .col-md-6 h2 , .contact-us .container .row .col-md-6 h2 {

                width: 100%;

            }

        }
        
    </style>

  </head>

  <body>
    
    <section class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <!-- Navbar -->
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand uppercase" href="#">bassil alqadi</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link uppercase line" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link uppercase" href="about.php">about</a>
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
            </div>
        </div>
        <!-- Container -->
        <div class="container">
            <h1>Clean Design<mark style="background: none; color: #FF303F;">experince</mark></h1>
            <h6>Design, web development , UI/UX Design , Web Apps development & etc</h6>
            <lottie-player 
               class="main-btn" src="https://assets8.lottiefiles.com/datafiles/1FoyaL9X8oraOrX/data.json" mode="bounce" background="transparent"  speed="1"  style="width: 100px; height: 100px;" loop  autoplay >
            </lottie-player>
        </div>
        <div class="social-icons">
            <lottie-player class="facebook-btn" 
                src="https://assets3.lottiefiles.com/datafiles/1WJXQ7LwRpyWYkY/data.json"  background="transparent"  speed="1" style="width: 30px; height: 30px;" autoplay >
            </lottie-player>
            <lottie-player class="instagram-btn"
                src="https://assets1.lottiefiles.com/datafiles/cQiEsPrJCutfedV/data.json"  background="transparent"  speed="1" style="width: 30px; height: 30px;" autoplay >
            </lottie-player>
        </div>
    </section>
    
    <section class="body-section">
        <div class="steps" data-aos="fade-up">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <h6 class="mb-16 main-headings color-white line">why choose us ?</h6>
                        <h2>We are moving from idea to product realization</h2>
                    </div>

                    <div class="col-md-6">

                        <div class="row">
                            <div class="mb-64">
                                <h5 class="steps-headings">Planing <img src="https://img.icons8.com/flat_round/64/000000/construction-plan.png" width="40px" height="40px"></h5>
                                <small class="text-muted">Members should share the same ethos</small>
                            </div>
                            <div class="mb-64">
                                <h5 class="steps-headings">Desgin <img src="https://img.icons8.com/cotton/64/000000/web-design.png" width="40px" height="40px"></h5>
                                <small class="text-muted">Members should share the same ethos</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-64">
                                <h5 class="steps-headings">Development <img src="https://img.icons8.com/color/64/000000/webhook.png" width="40px" height="40px"></h5>
                                <small class="text-muted">Members should share the same ethos</small>
                            </div>
                            <div>
                                <h5 class="steps-headings">Start <img src="https://img.icons8.com/dusk/64/000000/sort-left.png" width="40px" height="40px"></h5>
                                <small class="text-muted">Members should share the same ethos</small>
                            </div>
                        </div>
                
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-works" data-aos="fade-up">
        <div class="container">
            <div class="row mb-64">
                <h6 class="mb-16 main-headings color-black line">What we do</h6>
                <h1 class="mb-32">We do everything that helps our clients to make it a successfull business</h1>
            </div>
            <div class="row">
                <div class="col" data-aos="fade-up" data-aos-duration="2000">
                    <h4 class="mb-16 line"><img src="https://img.icons8.com/officel/48/000000/bag-brand.png" width="30px" height="30px"> Branding</h4>
                    <p class="text-justify mb-32">
                        If you own a brand, here in Bassil Al-Qadi-Blog you can requset any service you want for your brand eg.( Brand Logo, UI/UX design, Online Products Gallery ) with high quality and very attractive design.
                    </p>
                    <ul style="list-style-type:none; padding-left: 10px;">
                        <li>- Web Applications</li>
                        <li>- User Interface Design</li>
                        <li>- UX Web Design</li>
                    </ul>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="2000">
                    <h4 class="mb-16 line"><img src="https://img.icons8.com/cotton/50/000000/web-design.png" width="30px" height="30px"> Design</h4>
                    <p class="text-justify mb-32">
                        We work in designing multiple web templetes including: Dashboards, Personal Blogs,
                        Education websites, etc... , building previous tempelets with best and newest frameworks and JS libraries such as Bootstrap 4 & jQuery UI to give the website the best GUI and user - friendly environment.  
                    </p>
                    <ul style="list-style-type:none; padding-left: 10px;">
                        <li>- Backend Development</li>
                        <li>- Frontend Development</li>
                        <li>- UX Web Design</li>
                    </ul>
                </div>
                <div class="col" data-aos="fade-up" data-aos-duration="2000">
                    <h4 class="mb-16 line"><img src="https://img.icons8.com/color/48/000000/webhook.png" width="30px" height="30px"> Web Development</h4>
                    <p class="text-justify mb-32">
                       For the backend of website we developing, PHP programming language is used.
                       Its very powerful and easy language to use and work with it, it has very powerful functionality
                       and very secure language.
                    </p>
                    <ul style="list-style-type:none; padding-left: 10px;">
                        <li>- Technical Requirements</li>
                        <li>- Facbook Apps</li>
                        <li>- Backend Development</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="latest-projects" data-aos="fade-up">
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="2000">
                <div class="col-md-6">
                    <h6 class="mb-16 main-headings color-white line">Latest Projetcs </h6>
                    <h2 class="mb-32 color-white" style="line-height: 50px">We have developed a website for an indain resturant</h2>
                    <button type="button" class="btn btn-primary primary-btn" id="carsontest">View More</button>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <lottie-player 
                        src="https://assets4.lottiefiles.com/packages/lf20_1LhsaB.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay >
                        </lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-team" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="mb-16 main-headings line">Our Team</h6>
                    <h2 class="mb-16">Our hands are always ready to bring your ideas to life</h2>
                    <p class="text-justify">
                        In Bassil Al-Qadi-Blog the team is consist of one person which is me, you can decide how much is my work quality form my projects listed in WORKS PAGE. Im working in web development using HTML5, CSS3 , JavaScript , jQuery and PHP for backend development.
                    </p>
                </div>
                <div class="col-md-6" style="border: 1px solid rgb(194, 194, 194); padding: 0px;">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="media/bassil.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="line text-white">Bassil H Al-Qadi</h5>
                                <p class="">Web developer</p>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
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
    
         $('.main-btn').css('cursor','pointer');
         
        $(".navbar-toggler").click(function(){

            $(".collapse").toggleClass('bg-dark');
            $(".collapse").css("width","100%");
            $(".collapse").css("z-index","1");

        });
        
        $(".main-btn").click(function() {
            
            $('html,body').animate({
                scrollTop: $(".body-section").offset().top},
                'slow');
                
        });
        
        $('#carsontest').click(function(){
            
           window.open('https://carsontest.000webhostapp.com/index.html'); 
            
        });
        
        $('#contactbutton').click(function(){
            
           window.open('https://bassil-blog.000webhostapp.com/contact-us.php'); 
            
        });
        
        $('.facebook-btn').click(function(){
        
       window.open('https://web.facebook.com/profile.php?id=100004515360178'); 
        
        });
        
        $('.instagram-btn').click(function(){
            
           window.open('https://instagram.com/bassil_97'); 
            
        });
    
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>