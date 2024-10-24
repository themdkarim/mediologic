 <!--DOCTYPE html-->
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Medical Website HTML</title>
        <!-- icons***** -->
        <link rel="shortcut icon" href="images/fav-icon.png">
    
        <link rel="stylesheet" href=".//style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Font-Awesome-for-icons****** -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    </head>
    <body>
        <!-- Home-Section******** -->
        <section id="home">
            <!--==navigation****************************-->
            <nav class="navigation">
                <!--**menu-btn*****-->
                <input type="checkbox" class="menu-btn" id="menu-btn">
                <label for="menu-btn" class="menu-icon">
                    <span class="nav-icon"></span>
                </label>
                <!--**logo*********-->
                <a href="#home"><img src=".//my logo.png" alt="" height="70px"></a>
                <!--**menu*********-->
                <ul class="menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#our_about">About Us</a></li>
                    <li><a href="#our-services">Our Product & Services</a></li>
                    <li><a href="">Our Gallary</a></li>
                    <li><a href="#why-choose-us">Contact Us</a></li>
                </ul>
                <!--**contact*******-->
                <a href=".//form.html" class="nav-demo-btn">Book A Demo</a>
            </nav><!--nav-end-->
    
    
            <!--Content**-->
            <div class="home-content">
                <!--**text****************-->
                <div class="home-text">
                    <h1>We Are A Digital <span class="health-text">Healthcare</span>   Platform</h1>
                    <p>Our commitment is to enhance the quality of patient interactions by blending innovation with empathy, creating a healthcare experience that truly supports every individual.</p>
                    <!--btns-->
                    <div class="home-product-btns">
                        <a href="#">See Our Products</a>
                    </div>
                </div>
                <!--**img*****************-->
                <div class="home-img">
                    <img alt="" src="./—Pngtree—healthcare professionals holding a global_17862315.png">
                </div>
            </div>
        </section>
        <!--==about**********-->
        <section id="our_about">
    
            <!--**img**-->
            <div class="our-about-img">
                <img src=".//vision.jpg" />
                <a href="#" class="about-play-btn">
                    <i class="fa-solid fa-play"></i>
                    Play Video
                </a>
            </div>
            <!--**text**-->
            <div class="our-vision-text">
                <h2>About Our Vision</h2>
                <br>
            <p>Our vision  is to transform patient care by integrating innovative technologies and compassionate support, ensuring every interaction enhances health outcomes and satisfaction."
                <br>
                "We aspire to redefine the healthcare journey, making it seamless and personalized through cutting-edge solutions that prioritize patient needs and well-being."
                <a href="">Read more</a>
                </p>
                <!--numbers-of-happy-patients-->
                <div class="about-numbers-container">
                    <!--box-->
                    <div class="about-numbers-box s-n-box1">
                        <strong>1000+</strong>
                        <span>Patients</span>
                    </div>
                    <!--box-->
                    <div class="about-numbers-box s-n-box2">
                        <strong>215+</strong>
                        <span>Expert Doctor</span>
                    </div>
                    <!--box-->
                    <div class="about-numbers-box s-n-box3">
                        <strong>315+</strong>
                        <span>Hospital</span>
                    </div>
                    <!--box-->
                    <div class="about-numbers-box s-n-box4">
                        <strong>106+</strong>
                        <span>Award Wining</span>
                    </div>
                </div>
            </div>
            
        </section><!--about-end-->
    
        
    
        <!--==Our-Services****************************==-->
        <section id="our-services">
        
        <!--**heading********************-->
            <div class="services-heading">
                <!--text-->
                <div class="services-heading-text">
                    <h2>Our Product & Services</h2>
                </div>
                <!--btns-->
                <div class="service-slide-btns">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
    
            <!--**container*******************-->
            <div class="services-box-container">
    
                 <!-- Swiper -->
                <div class="swiper mySwiperservices">
                    <div class="swiper-wrapper">
                        <!--**1*******-->
                        <div class="swiper-slide">
                        <!--**box1**-->
                        <div class="service-box s-box1">
                            <!--icon-->
                            <i class="fa-solid fa-hospital"></i>
                            <!--title-->
                            <strong>HIMS</strong>
                            <h4>(Healthcare Imformation Management System)</h4>
                            <!--details-->
                            <p> We offer customized software development for various medical specialties, ensuring that each solution addresses the unique challenges and workflows of different healthcare fields.</p>
                            <!--read more-->
                            <a href="#">Read More</a>
                        </div>
                        </div><!--slide-end-->
                        <!--**1*******-->
                        <div class="swiper-slide">
                        <!--**box1**-->
                        <div class="service-box s-box2">
                            <!--icon-->
                            <i class="fa-solid fa-user-doctor"></i>
                            <!--title-->
                            <strong>CIMS</strong>
                            <h4> (Clinic Imformation Management System)</h4>
                            <!--details-->
                            <p>In engineering, system integration is defined as the process of bringing together the component subsystems into one system and ensuring that the subsystems function together as a system. In information technology, systems integration is the process of linking together different computing systems and software applications physically or functionally, to act as a coordinated whole.</p>
                            <!--read more-->
                            <a href="#">Read More</a>
                        </div>
                        </div><!--slide-end-->
                        <!--**1*******-->
                        <div class="swiper-slide">
                        <!--**box1**-->
                        <div class="service-box s-box3">
                            <!--icon-->
                            <i class="fa-solid fa-x-ray"></i>
                            <!--title-->
                            <strong> RIMS</strong>
                            <h4>(Radiology Imformation Management System)</h4>
                            <!--details-->
                            <p>Our Implementation Services are designed to ensure a smooth and effective transition to innovative healthcare solutions. We provide end-to-end support, from initial needs assessment and system design to configuration, training, and go-live assistance. Our experienced team collaborates closely with healthcare providers to tailor solutions that align with their unique workflows and operational goals. With a focus on minimizing disruption and maximizing user adoption, we facilitate comprehensive training sessions and ongoing support, ensuring that staff are equipped to utilize new systems effectively. By prioritizing a seamless implementation process, we help organizations enhance patient care, streamline operations, and achieve their strategic objectives.</p>
                            <a href="#">Read More</a>
                        </div>
                        </div><!--slide-end-->
                        <!--**1*******-->
                        <div class="swiper-slide">
                        <!--**box1**-->
                        <div class="service-box s-box4">
                            <!--icon-->
                            <i class="fa-solid fa-flask-vial"></i>
                            <!--title-->
                            <strong>LIMS</strong>
                            <h4>(Laboratory Imformation Management System)</h4>
                            <!--details-->
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem ullam perspiciatis impedit consequuntur</p>
                            <!--read more-->
                            <a href="#">Read More</a>
                        </div>
                        </div><!--slide-end-->
                    </div><!--wrapper-end-->
                </div><!--swiper-end-->
            </div>
        </section><!--services-end-->
        <!--==Testimonials*******-->
        <section id="testimonials">
    
            <!--**heading****************-->
            <div class="testimonials-heading">
                <h3>FeedBack About Us</h3>
            </div>
            <!--**testimonials-Content****-->
            <div class="testimonials-content">
    
                <!--**img************-->
                <div class="testimonials-img">
                    <img alt="" src="./feedback images for healthcare IT industries.png">
                </div>
    
                <!--**box-container**-->
                <div class="testimonials-box-container">
    
                <!-- Swiper -->
                <div class="swiper mySwipertesti">
                <div class="swiper-wrapper">
                    <!--**1***********-->
                    <div class="swiper-slide">
                    <!--**box**-->
                    <div class="testimonials-box">
                        <!--profile-->
                        <div class="t-profile">
                            <!--img-->
                            <div class="t-profile-img">
                                <img alt="" src="images/t1.jpg">
                            </div>
                            <!--text-->
                            <div class="t-profile-text">
                                <strong>Client Name</strong>
                                <span>From India</span>
                                <div class="t-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--feedback-->
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa est odit dicta sequi labore perferendis ut veritatis expedita, nihil sint! Delectus aut id voluptatibus nemo dolorum, quos consequatur commodi repudiandae?</p>
                    </div><!--box-end-->
                </div><!--slide-end-->
    
                <!--**2***********-->
                <div class="swiper-slide">
                    <!--**box**-->
                    <div class="testimonials-box">
                        <!--profile-->
                        <div class="t-profile">
                            <!--img-->
                            <div class="t-profile-img">
                                <img alt="" src="images/t1.jpg">
                            </div>
                            <!--text-->
                            <div class="t-profile-text">
                                <strong>Client Name</strong>
                                <span>From India</span>
                                <div class="t-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--feedback-->
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa est odit dicta sequi labore perferendis ut veritatis expedita, nihil sint! Delectus aut id voluptatibus nemo dolorum, quos consequatur commodi repudiandae?</p>
                    </div><!--box-end-->
                </div><!--slide-end-->
    
                <!--**3***********-->
                <div class="swiper-slide">
                    <!--**box**-->
                    <div class="testimonials-box">
                        <!--profile-->
                        <div class="t-profile">
                            <!--img-->
                            <div class="t-profile-img">
                                <img alt="" src="images/t1.jpg">
                            </div>
                            <!--text-->
                            <div class="t-profile-text">
                                <strong>Client Name</strong>
                                <span>From India</span>
                                <div class="t-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <!--feedback-->
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa est odit dicta sequi labore perferendis ut veritatis expedita, nihil sint! Delectus aut id voluptatibus nemo dolorum, quos consequatur commodi repudiandae?</p>
                    </div><!--box-end-->
                </div><!--slide-end-->
                
                </div><!--wrapper-end-->
                <div class="swiper-pagination"></div>
                </div><!--swiper-end-->
    
                </div><!--container-end-->
            
            </div><!--content-end-->
    
        </section><!--testimonials-end-->

         <!--==Why-choose-us****************************===-->
         <section id="why-choose-us">
    
            <!--**left*****************-->
            <div class="why-choose-us-left">
                <h3>Why Choose Us?</h3>
                <!--==container====-->
                <div class="why-choose-box-container">
                    <!--**box**-->
                    <div class="why-choose-box">
                        <!--icon-->
                        <i class="fa-solid fa-check"></i>
                        <!--text-->
                        <div class="why-choose-box-text">
                            <strong>Advance Care</strong>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                    <!--**box**-->
                    <div class="why-choose-box">
                        <!--icon-->
                        <i class="fa-solid fa-check"></i>
                        <!--text-->
                        <div class="why-choose-box-text">
                            <strong>Online Medicine</strong>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                    <!--**box**-->
                    <div class="why-choose-box">
                        <!--icon-->
                        <i class="fa-solid fa-check"></i>
                        <!--text-->
                        <div class="why-choose-box-text">
                            <strong>Medical & Surgical</strong>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                    <!--**box**-->
                    <div class="why-choose-box">
                        <!--icon-->
                        <i class="fa-solid fa-check"></i>
                        <!--text-->
                        <div class="why-choose-box-text">
                            <strong>Lab Test's</strong>
                            <p>Lorem ipsum dolor sit</p>
                        </div>
                    </div>
                </div>
                <!--==btn*******===-->
                <a href=".//form.html" class="why-choose-us-btn">Make demo</a>
            </div><!--left-end-->
    
            <!--**right*******************-->
            <div class="why-choose-us-right">
                <h3>Contact Us</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis iste, quam ratione rerum aliquid esse vero placeat? debitis velit cupiditate magni cumque corporis.</p>
                <!--==container====-->
                <div class="w-right-contact-container">
                    <!--**box**-->
                    <div class="w-right-contact-box">
                        <i class="fa-solid fa-phone"></i>
                        <!--text-->
                        <div class="w-right-contact-box-text">
                            <span>Call Us Now</span>
                            <strong>+91 99539 05860
                                   <br>
                                    +91 99119 19204
                            </strong>
                        </div>
                    </div>
                    <!--**box**-->
                    <div class="w-right-contact-box">
                        <i class="fa-solid fa-envelope"></i>
                        <!--text-->
                        <div class="w-right-contact-box-text">
                            <span>Mail Us</span>
                            <strong>medilogic.solutions@gmail.com</strong>
                        </div>
                    </div>
                </div>
            </div><!--right-end-->
    
        </section><!--end-->

        <footer>
            <div class="footer-container">
                <!--**comoany-box**-->
                <div class="footer-company-box">
                    <!--logo-->
                    <a href="#"><img src="./my logo.png" alt="" height="60px"></a>
                    <!--details-->
                    <p>Our commitment is to enhance the quality of patient interactions by blending innovation with empathy, <a href="#home">Read moer</a>.</p>
                    <!--social-box-->
                    <div class="footer-social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <!--**link-box***-->
                <div class="footer-link-box">
                    <strong>Main Link's</strong>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#our_about">About Us</a></li>
                        <li><a href="#our-services">Our Product & Services</a></li>
                        <li><a href="">Our Gallary</a></li>
                        <li><a href="#why-choose-us">Contact Us</a></li>
                    </ul>
                </div>
                <!--**link-box***-->
                <div class="footer-link-box">
                    <strong>External Link's</strong>
                    <ul>
                        <li><a href="#">Our Product's</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Trem's and Condition's</a></li>
                    </ul>
                </div>
                <!--**link-box***-->
                <div class="footer-link-box">
                    <strong>Contect Us</strong>
                    <h6>Call Now</h6>
                    <ul>
                        <li><a href="">+91 99539 05860</a></li>
                        <li><a href="">+91 99119 19204</a></li>
                    </ul>
                    <h6>Mail Now</h6>
                    <ul>
                        <li><a href="">medilogic.solutions@gmail.com</a></li>
                    </ul>
                </div>
                
       
            </div>
             
        </footer>       
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    
        <!-- Initialize Swiper -->
        <script>
        /*-services--*/
        var swiper = new Swiper(".mySwiperservices", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            breakpoints: {
              700: {
                slidesPerView: 2,
                spaceBetween: 40,
              },
              1024: {
                slidesPerView: 3,
                spaceBetween: 50,
              },
            },
          });
        /*--team--*/
        var swiper = new Swiper(".mySwiperteam", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
              560: {
                slidesPerView: 2,
                spaceBetween: 20,
              },
              950: {
                slidesPerView: 3,
                spaceBetween: 40,
              },
              1250: {
                slidesPerView: 4,
                spaceBetween: 40,
              },
            },
          });
        /*--testimonials--*/
          var swiper = new Swiper(".mySwipertesti", {
            pagination: {
              el: ".swiper-pagination",
            },
          });
        </script>
    
    </body>
    </html>
       