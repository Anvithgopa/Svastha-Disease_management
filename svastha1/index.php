<?php

session_start();
require 'connect.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Svastha</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- normalize css -->
    <link rel = "stylesheet" href = "css/normalize.css">
    <!-- custom css -->
    <link rel = "stylesheet" href = "css/main.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    
</head>
<body>
    

    <!-- header -->
    <header class = "header bg-blue">
        <nav class = "navbar bg-blue">
            <div class="flex">
                <a href = "index.html" class = "navbar-brand">
                    <img src = "images/logo2.png" alt = "site logo">
                </a>
                <button type = "button" class = "navbar-show-btn">
                    <img src = "images/ham-menu-icon.png">
                </button>

                <div class = "navbar-collapse bg-white">
                    <button type = "button" class = "navbar-hide-btn">
                        <img src = "images/close-icon.png">
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "#" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#about" class = "nav-link">About</a>
                        </li>
                       <!---- <li class = "nav-item">
                            <a href = "#" class = "nav-link">Service</a>
                        </li>--->
                        <li class = "nav-item">
                            <a href = "#doc-panel" class = "nav-link">Hospitals</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#services" class = "nav-link">Diseases</a>
                        </li>
                        <!---<li class = "nav-item">
                            <a href = "#" class = "nav-link">Blog</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "#" class = "nav-link">Contact</a>
                        </li>--->
                        
                    </ul>
                   <!---- <div class = "search-bar">
                        <form>
                            <div class = "search-bar-box flex">
                                <span class = "search-icon flex">
                                    <img src = "images/search-icon-dark.png">
                                </span>
                                <input type = "search" class = "search-control" placeholder="Search here">
                            </div>
                        </form>
                    </div>--->
                    <a href = "reg.php" class = "btn btn-white nav-item">Register/Login</a>
                        <!---<a href = "loginuser.html" class = "btn btn-light-blue nav-item ">SignIn</a>--->
                </div> 
                
            </div>
        </nav>

        <div class = "header-inner text-white text-center">
        <div>
                                    <h6>Patients Count</h6> 
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='1'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count1'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count1'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='2'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count2'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count2'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='3'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count3'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count3'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='4'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count4'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count4'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='5'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count5'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count5'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='6'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count6'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count6'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='7'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count7'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count7'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='8'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count8'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count8'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='9'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count9'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                       ?>
                                      <script> <?=$_SESSION['count9'];?></<script>
                                        
                                      
                                   <?php }
                                    ?>
                                    <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='10'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count10'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                        ?>
                                        <script> <?=$_SESSION['count10'];?></<script>
                                          
                                        
                                     <?php }
                                      ?>
                                      <?php
                                    $sql = "SELECT COUNT(*) FROM muncipal_display WHERE diseaseid='11'";
                                    $result = $conn->query($sql);
                                    
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            $_SESSION['count11'] = $row["COUNT(*)"];
                                        }
                                    } else {
                                        ?>
                                        <script> <?=$_SESSION['count11'];?></<script>
                                          
                                        
                                     <?php }
                                      ?>
                                      <style>
                                      .row{
    width: 85%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.col{
    flex-basis: 22%;
    text-align: center;
    color: #555;
}
.counter-box{
    width: 100%;
    height: 100%;
    background: #fff;
    padding: 20px 0;
    border-radius: 5px;
    box-shadow: 0 0 20px -4px #66676c;
}
h2,span{
    display: inline-block;
    margin: 15px 0;
    font-size: 50px;
    color: #000;
}
.counter-box .fa{
    font-size: 40px;
    color: #009688;
    display: block;
}
.title{
    width: 60%;
    display: inline-block;
    margin: 150px auto 0;
    color: #fff;
    text-align: center;
}
.title h1{
    margin-bottom: 30px;
}
.title p{
    font-size: 13px;
    line-height: 22px;
}
                                      </style>
                                      <div class="hero">
        <div class="title">
            <h1>Puttur Muncipal</h1>
            <p>The Total counts of the patients who have represented Diseases.</p>
        </div>
    <div class="row">
            <div class="col">
                <div class="counter-box">
                    
                    <h2 class="counter"><?php echo $_SESSION['count9']; ?></h2>
                    <h4>Covid-19</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    
                    <h2 class="counter"><?php echo $_SESSION['count1']; ?></h2>
                    <h4>Dengue</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    
                    <h2 class="counter"><?php echo $_SESSION['count2']; ?></h2>
                    <h4>Malaria</h4>
                </div>
            </div>
            <div class="col">
                <div class="counter-box">
                    
                    <h2 class="counter"><?php echo $_SESSION['count11']+ $_SESSION['count10']+$_SESSION['count8']+$_SESSION['count7']+$_SESSION['count6']+$_SESSION['count5']+$_SESSION['count4']+$_SESSION['count3'];?></h2>
                    <h4>Other</h4>
                </div>
            </div>
            
            
            
        </div>
            
        
        <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="jquery.counterup.min.js"></script>

    <script>
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 50,
                time: 500
            });
        });

    </script>
                                      
</div>
            
        </div>
    </header>
    <!-- end of header -->

    <main>
        <!-- about section -->
        <section id = "about" class = "about py">
            <div class = "about-inner">
                <div class = "container grid">
                    <div class = "about-left text-center">
                        <div class = "section-head">
                            <h2>About Us</h2>
                            <div class = "border-line"></div>
                        </div>
                        <p class = "text text-lg">Disease Management System(DMS) creates an integrate environment to provide communication between healthcare officals and the muncipality of a town.The DMS also includes clinical guide-lines and a decision support tool for healthcare providers that allow the clinical team to obtain accurate and reliable information and to decide about the treatment that best suits the patient for improvement of the disease management.</p>
                        <a href = "reg.php" class = "btn btn-white nav-item">Register/Login</a>
                    </div>
                    <div class = "about-right flex">
                        <div class = "img">
                            <img src = "images/about-img.png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- banner one -->
        <section id = "banner-one" class = "banner-one text-center">
            <div class = "container text-white">
                <blockquote class = "lead"><i class = "fas fa-quote-left"></i> When you are young and healthy, it never occurs to you that in a single second your whole life could change. <i class = "fas fa-quote-right"></i></blockquote>
                <small class = "text text-sm">- Anonim Nano</small>
            </div>
        </section>
        <!-- end of banner one -->

        <!-- services section -->
        <section id = "services" class = "services py">
            <div class = "container">
                <div class = "section-head text-center">
                    <h2 class = "lead">What you have to know about the Disease</h2>
                    <p class = "text text-lg">A perfect way to know about Diaseases</p>
                    <div class = "line-art flex">
                        <div></div>
                        <img src = "images/4-dots.png">
                        <div></div>
                    </div>
                </div>
                <div class = "services-inner text-center grid">
                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-15.png">
                        </div>
                        <h3>Covid-19</h3>
                        <p class = "text text-sm">Coronavirus disease 2019 (COVID-19) is a contagious disease caused by a virus, the severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2).
The first known case was identified in Wuhan, China, in December 2019.Coronavirus disease 2019 (COVID-19) is a contagious disease caused by a virus,</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-14.png">
                        </div>
                        <h3>Aids</h3>
                        <p class = "text text-sm">Human immunodeficiency virus infection and acquired immunodeficiency syndrome (HIV/AIDS) is a spectrum of conditions caused by infection with the human immunodeficiency virus (HIV), a retrovirus.
Following initial infection an individual may not notice any symptoms, or may experience a brief period of influenza-like illness.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-13.jpg">
                        </div>
                        <h3>Dengue</h3>
                        <p class = "text text-sm">Dengue fever is a mosquito-borne tropical disease caused by the dengue virus.
Symptoms typically begin three to fourteen days after infection.
These may include a high fever, headache, vomiting, muscle and joint pains, and a characteristic skin itching and skin rash.
Recovery generally takes two to seven days.</p>
                    </article>

                    <article class = "service-item">
                        <div class = "icon">
                            <img src = "images/service-icon-13.jpg">
                        </div>
                        <h3>Malaria</h3>
                        <p class = "text text-sm">Malaria is a mosquito-borne infectious disease that affects humans and other animals.
Malaria causes symptoms that typically include fever, tiredness, vomiting, and headaches.
In severe cases, it can cause jaundice, seizures, coma, or death.</p>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- banner two section
        <section id = "banner-two" class = "banner-two text-center">
            <div class = "container grid">
                <div class = "banner-two-left">
                    <img src = "images/banner-2-img.png">
                </div>
                <div class = "banner-two-right">
                    <p class = "lead text-white">When you are young and healthy, it never occurs to you that in a single second your whole life could change.</p>
                    <div class = "btn-group">
                        <a href = "#" class = "btn btn-white">Learn More</a>
                        <a href = "#" class = "btn btn-light-blue">Sign In</a>
                    </div>
                </div>
            </div>
        </section>
         end of banner two section -->

        <!-- doctors section ---->
        <section id = "doc-panel" class = "doc-panel py">
            <div class = "container">
                <div class = "section-head">
                    <h2>Hospitals</h2>
                </div>

                <div class = "doc-panel-inner grid">
                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "https://lh3.googleusercontent.com/p/AF1QipMH33TlHp-S0J2ZkvhDXkW7WbQm1xe4eSVzwm1V=s1360-w1360-h1020" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">Puttur city</p>
                                <p class = "text-lg">Multispecial</p>
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/prag.png" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">Pragathi</p>
                                <p class = "text-lg">Multispecial</p>
                            </div>
                        </div>
                    </div>

                    <div class = "doc-panel-item">
                        <div class = "img flex">
                            <img src = "images/mahav.jpg" alt = "doctor image">
                            <div class = "info text-center bg-blue text-white flex">
                                <p class = "lead">Mahaveera</p>
                                <p class = "text-lg">Multispecial</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!--- end of doctors section -->

        <!-- package services section -->
       <!-- <section id = "package-service" class = "package-service py text-center">
            <div class = "container">
                <div class = "package-service-head text-white">
                    <h2>Package Service</h2>
                    <p class = "text text-lg">Best service package for you</p>
                </div>
                <div class = "package-service-inner grid">
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-phone fa-2x"></i>
                        </div>
                        <h3>Regular Case</h3>
                        <p class = "text text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, asperiores. Expedita, reiciendis quos beatae at consequatur voluptatibus fuga iste adipisci.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>

                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-calendar-alt fa-2x"></i>
                        </div>
                        <h3>Serious Case</h3>
                        <p class = "text text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, asperiores. Expedita, reiciendis quos beatae at consequatur voluptatibus fuga iste adipisci.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>
                    
                    <div class = "package-service-item bg-white">
                        <div class = "icon flex">
                            <i class = "fas fa-comments fa-2x"></i>
                        </div>
                        <h3>Emergency Case</h3>
                        <p class = "text text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur, asperiores. Expedita, reiciendis quos beatae at consequatur voluptatibus fuga iste adipisci.</p>
                        <a href = "#" class = "btn btn-blue">Read More</a>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- end of package services section -->

        <!-- posts section -->
        <section id = "posts" class = "posts py">
            <div class = "container">
                <div class = "section-head">
                    <h2>Latest Post</h2>
                </div>
                <div class = "posts-inner grid">
                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "https://cdn.georgeinstitute.org/sites/default/files/styles/width1920_fallback/public/2022-10/stroke-trial-enchanted-1289900021.jpg">
                        </div>
                        <div class = "content">
                            <h4>Large stroke trial finds intensive blood pressure lowering after clot removal worsens recovery</h4>
                            <p class = "text text-sm">The largest ever randomised controlled trial of intensive blood pressure lowering after blood clot removal in stroke patients found it led to deterioration in surrounding brain tissue and higher rates of disability, compared to less intensive treatment.</p>
                            <p class = "text text-sm">The results of the trial, stopped early due to the significance of the findings, were presented in a late-breaking session at the World Stroke Congress and simultaneously published in The Lancet.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "https://static.toiimg.com/thumb/msid-96687439,imgsize-21770,width-400,resizemode-4/96687439.jpg">
                        </div>
                        <div class = "content">
                            <h4>Study finds high prevalence of non-diabetic kidney disease in patients with type 2 diabtetes mellitus.</h4>
                            <p class = "text text-sm">Kolkata: Diabetes is not the only cause for kidney diseases in patients with type 2 diabetes. A study conducted by a group of doctors from the state run Institute of Post Graduate Medical Education and Research (IPGMER) has found in 18.2% of diabetic patients with kidney diseases, the cause of the kidney ailment is due to reasons other than diabetes.</p>
                            <p class = "text text-sm">The study titled 'Prevalence of non-diabetic kidney disease and inability of clinical predictors to differentiate it from diabetic kidney disease: results from a prospectively performed renal biopsy' has been published recently in the British Medical Journal.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>

                    <article class = "post-item bg-white">
                        <div class = "img">
                            <img src = "images/post-3.jpg">
                        </div>
                        <div class = "content">
                            <h4>Israel says has not found a link between Pfizer Covid shot and stroke.</h4>
                            <p class = "text text-sm">JERUSALEM: Israel has not identified any evidence linking strokes to an updated coronavirus vaccine made by U.S. drugmaker Pfizer and its German partner BioNTech SE, according to a health ministry official..</p>
                            <p class = "text text-sm">Pfizer further noted that neither the companies nor the CDC and FDA had observed similar findings across other monitoring systems and said there was no evidence to suggest an association with the use of the companies' COVID-19 vaccines.</p>
                            <div class = "info flex">
                                <small class = "text text-sm"><i class = "fas fa-clock"></i> October 27, 2021</small>
                                <small class = "text text-sm"><i class = "fas fa-comment"></i> 5 comments</small>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- end of posts section -->

        <!-- contact section -->
        <section id = "contact" class = "contact py">
            <div class = "container grid">
                <div class = "contact-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15564.841582773051!2d75.20171639999998!3d12.764844299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4bd7f1da25969%3A0x552215b98b90e2bf!2sPuttur%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1674386947309!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                <div class = "contact-right text-white text-center bg-blue">
                    <div class = "contact-head">
                        <h3 class = "lead">Contact Us</h3>
                        <p class = "text text-md">Talk with us to Know more.</p>
                    </div>
                    <form>
                        <div class = "form-element">
                            <input type = "text" class = "form-control" placeholder="Your name">
                        </div>
                        <div class = "form-element">
                            <input type = "email" class = "form-control" placeholder="Your email">
                        </div>
                        <div class = "form-element">
                            <textarea rows = "5" placeholder="Your Message" class = "form-control"></textarea>
                        </div>
                        <button type = "submit" class = "btn btn-white btn-submit">
                            <i class = "fas fa-arrow-right"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
    </main>

    <!-- footer  -->
    <footer id = "footer" class = "footer text-center">
        <div class = "container">
            <div class = "footer-inner text-white py grid">
                <div class = "footer-item">
                    <h3 class = "footer-head">about us</h3>
                    <div class = "icon">
                        <img src = "images/logo2.png">
                    </div>
                    <!---<p class = "text text-md">Disease Management System(DMS) creates an integrate environment to provide communication between healthcare officals and the muncipality of a town.</p>--->
                    <br>
                    <br>
                    
                    <address>
                    Q662+74R <br>
                    Court road near kille maidana <br>
                    Puttur Parladka Devasya Rd <br>
                    Puttur, Karnataka 574201
                    </address> 
                </div>

                <div class = "footer-item">
                    <h3 class = "footer-head">tags</h3>
                    <ul class = "tags-list flex">
                        <li>Addmission</li>
                        <li>emergency</li>
                        <li>Details</li>
                        
                    </ul>
                </div>

                <!---<div class = "footer-item">
                    <h3 class = "footer-head">Quick Links</h3>
                    <ul>
                        <li><a href = "#" class = "text-white">Our Services</a></li>
                        <li><a href = "#" class = "text-white">Our Plan</a></li>
                        <li><a href = "#" class = "text-white">Privacy Policy</a></li>
                        <li><a href = "#" class = "text-white">Appointment Schedule</a></li>
                    </ul>
                </div>--->

                <div class = "footer-item">
                    <h3 class = "footer-head">Make an appointment</h3>
                    <p class = "text text-md">You can admit to Various Hospital avaialable in Puttur.</p>
                    <ul class = "appointment-info">
                        <li>8:00 AM - 11:00 AM</li>
                        <li>2:00 PM - 05:00 PM</li>
                        <li>8:00 PM - 11:00 PM</li>
                    </ul>
                </div>
            </div>

            <div class = "footer-links">
                <ul class = "flex">
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-facebook-f"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-twitter"></i></a></li>
                    <li><a href = "#" class = "text-white flex"> <i class = "fab fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- end of footer  -->


    <!-- custom js -->
    <script src = "js/script.js"></script>
</body>
</html>