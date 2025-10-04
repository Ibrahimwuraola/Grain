<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>GRAIN | Our Team Members</title>
<meta name="description" content="Meet the dedicated team members of GRAIN - Group for Research and Innovation Networking. Our leadership and technical experts driving innovation and community impact.">

<!-- Fav Icon -->
<link rel="icon" href="assets/images/grain-logo.png" type="image/png">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&amp;display=swap" rel="stylesheet">

<style>
    #sub-dropdown:hover{
        color:#429761;
    }

    /* Logo styling */
    .logo-box .logo img,
    .sticky-logo img,
    .nav-logo img {
        width: auto;
        height: 70px;
        max-width: 100%;
        object-fit: contain;
        transition: all 0.3s ease;
    }

    .sticky-header .sticky-logo img {
        height: 50px;
    }

    .mobile-menu .nav-logo img {
        height: 80px;
        max-width: 200px;
    }

    @media (max-width: 768px) {
        .logo-box .logo img {
            height: 55px;
        }
    }

    @media (max-width: 576px) {
        .logo-box .logo img {
            height: 45px;
        }
        .sticky-header .sticky-logo img {
            height: 40px;
        }
        .mobile-menu .nav-logo img {
            height: 60px;
        }
    }
    
    .team-member-card {
        background: white;
        border-radius: 15px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        margin-bottom: 30px;
        height: 100%;
    }
    
    .team-member-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(42, 151, 53, 0.2);
    }
    
    .team-member-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin: 0 auto 20px;
        overflow: hidden;
        border: 4px solid #2a9735;
        position: relative;
    }
    
    .team-member-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }
    
    .team-member-card:hover .team-member-image img {
        transform: scale(1.1);
    }
    
    .team-name {
        color: #2a9735;
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 5px;
    }
    
    .team-role {
        color: #666;
        font-size: 1rem;
        font-weight: 500;
        margin-bottom: 15px;
        padding: 5px 15px;
        background: #f8f9fa;
        border-radius: 20px;
        display: inline-block;
    }
    
    .team-bio {
        color: #777;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .org-chart {
        margin: 50px 0;
    }
    
    .leadership-section {
        background: linear-gradient(135deg, #f8f9fa, #ffffff);
        padding: 50px 0;
        margin: 40px 0;
        border-radius: 15px;
    }
    
    .section-divider {
        height: 2px;
        background: linear-gradient(90deg, transparent, #2a9735, transparent);
        margin: 40px 0;
    }
    
    .role-badge {
        position: absolute;
        top: -10px;
        right: -10px;
        background: #2a9735;
        color: white;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        font-weight: bold;
    }
</style>
</head>

<body>
    <div class="boxed_wrapper">
        
        <!-- main header -->
        <header class="main-header header-style-two">

            <!-- header-lower -->
            <div class="header-lower">

                <div class="auto-container">

                    <div class="outer-box clearfix">

                        <div class="logo-box pull-left">

                            <figure class="logo"><a href="index.php"><img src="assets/images/grain-logo.png" alt="GRAIN - Group for Research and Innovation Networking Logo"></a></figure>

                        </div>

                        <div class="menu-area pull-right clearfix">

                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>

                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="index.php">Home</a></li>
                                        <li class="dropdown"><a href="about.php">About GRAIN</a>
                                            <ul>
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="about.php#aim-objective">Mission & Vision</a></li>
                                                <li><a href="team.php">Team Members</a></li>
                                                <li><a href="contact-grain.php">Contact Us</a></li>
                                                <li><a href="gallery.php">Gallery</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <div class="btn-box">
                                <a href="news.php" class="theme-btn btn-five">Events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box clearfix">
                        <figure class="sticky-logo pull-left">
                            <a href="index.php"><img src="assets/images/grain-logo.png" alt="GRAIN Logo"></a>
                        </figure>
                        <div class="menu-area pull-right clearfix">
                            <nav class="main-menu clearfix" style="padding-right:80px;"></nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box" style="background:#2a9735;">
                <div class="nav-logo">
                    <a href="index.php"><img src="assets/images/grain-logo.png" alt="GRAIN Mobile Logo" title="GRAIN"></a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://x.com/GRAIN_research?t=JML8oeQqySIUGWpyTVswew&s=08" target="_blank" rel="noopener noreferrer" aria-label="Follow GRAIN on Twitter/X"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/share/1A7sbsiW6S" target="_blank" rel="noopener noreferrer" aria-label="Follow GRAIN on Facebook"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="https://www.instagram.com/g.r.a.i.n_research?utm_source=qr&igsh=MXZyN3I3aG0yMnMycA==" target="_blank" rel="noopener noreferrer" aria-label="Follow GRAIN on Instagram"><span class="fab fa-instagram"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        <!-- Team Section -->
        <section class="team-section" style="margin-top: 150px; margin-bottom: 50px;">
            <div class="auto-container">
                <div class="sec-title style-two text-center">
                    <h5>OUR TEAM</h5>
                    <h2>Meet the Leaders Driving Innovation</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                    <p>Dedicated professionals committed to advancing research, innovation, and community development through collaborative leadership</p>
                </div>

                <!-- Leadership Section -->
                <div class="leadership-section">
                    <div class="row">
                        <!-- President -->
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                            <div class="team-member-card position-relative">
                                <div class="role-badge" aria-label="Leadership position">
                                    <i class="fas fa-crown"></i>
                                </div>
                                <div class="team-member-image">
                                    <img src="assets/images/team/g1.png" alt="Portrait of Adeniji Moshkur, President of GRAIN organization">
                                </div>
                                <h5 class="team-name">Adeniji Moshkur</h5>
                                <p class="team-role">President</p>
                                <p class="team-bio">Leading GRAIN's strategic vision and fostering partnerships with educational institutions and industry stakeholders to advance innovation and research excellence.</p>
                            </div>
                        </div>

                        <!-- Vice President -->
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                            <div class="team-member-card position-relative">
                                <div class="role-badge" aria-label="Leadership position">
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="team-member-image">
                                    <img src="assets/images/team/g2.png" alt="Portrait of Maryam Modupe Mosuro, Vice President of GRAIN organization">
                                </div>
                                <h5 class="team-name">Maryam Modupe Mosuro</h5>
                                <p class="team-role">Vice President</p>
                                <p class="team-bio">Supporting organizational leadership and coordinating program development initiatives that enhance student learning experiences and community engagement.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-divider"></div>

                <!-- Administrative Team -->
                <div class="row">
                    <div class="col-12 mb-4">
                        <h3 class="text-center" style="color: #2a9735;">Administrative Team</h3>
                    </div>

                    <!-- Secretary -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="team-member-card">
                            <div class="team-member-image">
                                <img src="assets/images/team/g5.png" alt="Portrait of Olusanya Haatim, Secretary of GRAIN organization">
                            </div>
                            <h5 class="team-name">Olusanya Haatim</h5>
                            <p class="team-role">Secretary</p>
                            <p class="team-bio">Managing organizational documentation, meeting coordination, and ensuring effective communication across all GRAIN departments and initiatives.</p>
                        </div>
                    </div>

                    <!-- Financial Secretary -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="team-member-card">
                            <div class="team-member-image">
                                <img src="assets/images/team/g3.png" alt="Portrait of Ayantayo Rufai, Financial Secretary of GRAIN organization">
                            </div>
                            <h5 class="team-name">Ayantayo Rufai</h5>
                            <p class="team-role">Financial Secretary</p>
                            <p class="team-bio">Overseeing financial planning, budget management, and ensuring transparent fiscal accountability for all organizational activities and projects.</p>
                        </div>
                    </div>

                    <!-- Assistant Financial Secretary -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="team-member-card">
                            <div class="team-member-image">
                                <img src="assets/images/team/g6.png" alt="Portrait of Taiwo Aishat Adeola, Assistant Financial Secretary of GRAIN organization">
                            </div>
                            <h5 class="team-name">Taiwo Aishat Adeola</h5>
                            <p class="team-role">Assistant Financial Secretary</p>
                            <p class="team-bio">Supporting financial operations and maintaining accurate records of organizational expenses, funding, and resource allocation.</p>
                        </div>
                    </div>
                </div>

                <div class="section-divider"></div>

                <!-- Communications & Technical Team -->
                <div class="row">
                    <div class="col-12 mb-4">
                        <h3 class="text-center" style="color: #2a9735;">Communications & Technical Team</h3>
                    </div>

                    <!-- Public Relations Officer -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="team-member-card">
                            <div class="team-member-image">
                                <img src="assets/images/team/g8.png" alt="Portrait of AbdulFatai Roheemah, Public Relations Officer of GRAIN organization">
                            </div>
                            <h5 class="team-name">AbdulFatai Roheemah</h5>
                            <p class="team-role">Public Relations Officer (PRO)</p>
                            <p class="team-bio">Leading external communications, media relations, and promoting GRAIN's mission through strategic outreach and community engagement initiatives.</p>
                        </div>
                    </div>

                    <!-- Assistant Public Relations Officer -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="team-member-card">
                            <div class="team-member-image">
                                <img src="assets/images/team/g4.png" alt="Portrait of Ayoola Hassanah, Assistant Public Relations Officer of GRAIN organization">
                            </div>
                            <h5 class="team-name">Ayoola Hassanah</h5>
                            <p class="team-role">Assistant Public Relations Officer</p>
                            <p class="team-bio">Supporting communication strategies, content creation, and maintaining GRAIN's digital presence across various platforms and social media channels.</p>
                        </div>
                    </div>

                    <!-- Technical Expert -->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="team-member-card">
                            <div class="team-member-image">
                                <img src="assets/images/team/g7.png" alt="Portrait of Abdul Rasheed Hassan, Technical Expert of GRAIN organization">
                            </div>
                            <h5 class="team-name">Abdul Rasheed Hassan</h5>
                            <p class="team-role">Technical Expert</p>
                            <p class="team-bio">Providing technical expertise in engineering projects, mentoring students in advanced technologies, and leading innovation initiatives within the organization.</p>
                        </div>
                    </div>
                </div>

                <div class="section-divider"></div>

                <!-- Project & Analysis Team -->
                <div class="row">
                    <div class="col-12 mb-4">
                        <h3 class="text-center" style="color: #2a9735;">Project & Analysis Team</h3>
                    </div>

                    <!-- Project Analyst -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="team-member-card">
                            <div class="team-member-image">
                                <img src="assets/images/team/g9.png" alt="Portrait of Hassan Mukhtar, Project Analyst of GRAIN organization">
                            </div>
                            <h5 class="team-name">Hassan Mukhtar</h5>
                            <p class="team-role">Project Analyst</p>
                            <p class="team-bio">Analyzing project outcomes, conducting research assessments, and providing data-driven insights to improve program effectiveness and organizational impact.</p>
                        </div>
                    </div>

                    <!-- Technical Assistant -->
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="team-member-card">
                            <div class="team-member-image">
                                <img src="assets/images/team/g10.png" alt="Portrait of AbdulWakeel Aishat, Technical Assistant of GRAIN organization">
                            </div>
                            <h5 class="team-name">AbdulWakeel Aishat</h5>
                            <p class="team-role">Technical Assistant</p>
                            <p class="team-bio">Supporting technical operations, assisting in workshop facilitation, and helping maintain equipment and resources for training programs.</p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center mt-5">
                    <div class="sec-title style-two">
                        <h4>Join Our Growing Team</h4>
                        <p>Passionate about innovation and community development? We're always looking for dedicated individuals to join our mission.</p>
                    </div>
                    <div class="btn-group" role="group">
                        <a href="contact-grain.php" class="theme-btn btn-five mr-3">
                            <i class="fas fa-users"></i> Get Involved
                        </a>
                        <a href="about.php" class="theme-btn btn-five">
                            <i class="fas fa-heart"></i> Our Mission
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="main-footer footer-style-two"></footer>
        <div class="footer-bottom">
            <button class="scroll-top style-one scroll-to-target" data-target="html">
                <i class="fas fa-angle-up"></i>
            </button>
            <div class="auto-container">
                <div class="bottom-inner clearfix">
                    <div class="copyright pull-left">
                        <p>Copyright &copy; <a href="index.php">GRAIN</a>, All Rights Reserved.</p>
                    </div>
                    <ul class="footer-nav pull-right clearfix">
                        <li><a href="index.php">Privacy Policy</a></li>
                        <li><a href="index.php">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/bxslider.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>