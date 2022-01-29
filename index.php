

<?php 

$con=mysqli_connect("localhost","root","","edughor");
if (!$con) {
	echo "database connection error";
}

$view_query = "SELECT * FROM create_post";
$query_result = mysqli_query($con,$view_query);


?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>EDU GHOR</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
			
			
			
			
                <a class="navbar-brand" href="index.html">
					<img src="images/logo.png" alt="image">
				</a>
				
				
				
				
				
				
				
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.html">Home</a></li>
                        <li><a class="nav-link" href="about.html">About</a></li>
                        <li><a class="nav-link" href="courses.html">Courses</a></li>
                        <li><a class="nav-link" href="reaserch.html">Reaserch</a></li>
						  <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Education 
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							  <a class="dropdown-item" href="#">School</a>
							  <a class="dropdown-item" href="#">Collage</a>
							  <a class="dropdown-item" href="#">University</a>
							  <a class="dropdown-item" href="#">Medical</a>
							  <a class="dropdown-item" href="#">Engineering</a>
							</div>
						  </li>
						    <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Categories
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							  <a class="dropdown-item" href="index.html">Science</a>
							  <a class="dropdown-item" href="#">Halth Tips</a>
							  <a class="dropdown-item" href="#">Tech Tips</a>
							  <a class="dropdown-item" href="#">Fiction</a>
							  <a class="dropdown-item" href="#">Entertainment</a>
							  <a class="dropdown-item" href="#">Youth</a>
							  <a class="dropdown-item" href="#">Environment</a>
							  <a class="dropdown-item" href="#">Innovation</a>
							  <a class="dropdown-item" href="#">Sports</a>
							  <a class="dropdown-item" href="#">Life and Living</a>
							  <a class="dropdown-item" href="#">Sports</a>
							</div>
						  </li>
						<li><a class="nav-link" href="signin.html">SIGN IN</a></li>
                    </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                    <a class="search-btn">
                        <img src="images/search_icon.png" alt="#" />
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(images/slider1.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">You only have know one thing</span><br>you can learn anything</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="courses.html">Start Learning</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(images/slider2.jpg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">Learning Never</span><br>Exhausted Your Mind</h3>
                                        <h4>Free Educations</h4>
                                        <br>
                                        <div class="full center">
										    <a class="contact_bt" href="courses.html">Start Learning</a>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
	<div class="section tabbar_menu">
	   <div class="container">
	      <div class="row">
		      <div class="col-md-12">
			     <div class="tab_menu">
				    <ul>
					   <li><a href="#"><span class="icon"><img src="images/i1.png" alt="#" /></span><span>School College </span></a></li>
					   <li><a href="#"><span class="icon"><img src="images/i2.png" alt="#" /></span><span>University</span></a></li>
					   <li><a href="#"><span class="icon"><img src="images/i3.png" alt="#" /></span><span>Athletics</span></a></li>
					   <li><a href="#"><span class="icon"><img src="images/i4.png" alt="#" /></span><span>Social</span></a></li>
					   <li><a href="#"><span class="icon"><img src="images/i5.png" alt="#" /></span><span>Location</span></a></li>
					   <li><a href="#"><span class="icon"><img src="images/i6.png" alt="#" /></span><span>Call us</span></a></li>
					   <li><a href="#"><span class="icon"><img src="images/i7.png" alt="#" /></span><span>Email</span></a></li>
					</ul>
				 </div>
			  </div>
		  </div>
	   </div>
	</div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50">
        <div class="container">
            <div class="row">
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Welcome To</span> Education</h2>
                        </div>
						<div class="full">
						  <p> Education is the basic necessity of life. It is an integral tool that aids the overall growth and development. Education has a plethora of meanings and educates and empowers you within the four walls of the classroom as well as imbibe in your environment. Learning is an education that makes sense, and it needs awareness to reach the remote corners of the country.</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="#">Read more</a>
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img src="images/img2.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Popular </span>Articles</h2>
                        </div>
					  </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                       <img class="img-responsive" src="images/p1.png" alt="#" /> 
					   <h4>Covid-19</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/p2.png" alt="#" />
						<h4>Technology</h4>
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="full blog_img_popular">
                        <img class="img-responsive" src="images/p3.png" alt="#" />
						<h4>Motivation</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section margin-top_50 silver_bg">
        <div class="container">
            <div class="row">
			    <div class="col-md-6">
                    <div class="full float-right_img">
                        <img src="images/img6.png" alt="#" />
                    </div>
                </div>
                <div class="col-md-6 layout_padding_2">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Apply for a Writer</h2>
                        </div>
						<div class="full">
						  <p>A writer is a person who uses written words in different styles and techniques to communicate ideas. Writers produce different forms of literary art and creative writing such as novels, short stories, books, poetry, travelogues, plays, screenplays, teleplays, songs, and essays as well as other reports and news articles that may be of interest to the public. Writers' texts are published across a range of media. Skilled writers who are able to use language to express ideas well, often contribute significantly to the cultural content of a society.</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="#">Apply</a>
						</div>
                    </div>
                </div>
			</div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="full">
                        <div class="heading_main text_align_left">
						   <h2><span>Reaserch Paper</span></h2>
                        </div>
						<div class="full">
						  <p>Research is "creative and systematic work undertaken to increase the stock of knowledge".[1] It involves the collection, organization and analysis of information to increase understanding of a topic or issue. A research project may be an expansion on past work in the field. To test the validity of instruments, procedures, or experiments, research may replicate elements of prior projects or the project as a whole.</p>
						</div>
						<div class="full">
						   <a class="hvr-radial-out button-theme" href="#">See More</a>
						</div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="full">
                        <img class="img-responsive" src="images/img7.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Recent News</span></h2>
                        </div>
					  </div>
                </div>
			  </div>
               <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">





                    <?php 

if ($query_result) {
	
	while($rows = mysqli_fetch_assoc($query_result)){
	$post_title = $rows['post_title'];
	$post_description = $rows['post_description'];
	$post_type = $rows['post_type'];
	$image = $rows['image'];
	?>


<div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
									   <div class="full blog_img_popular">
                                          <img class="img-responsive" src="images/<?php echo $image; ?>" alt="#" />
										  <h4><?php echo $post_type; ?></h4>
										  <p>   <?php echo $post_description; ?></p>
										</div>
                                    </div>
                                    
                                </div>
                            </div>
						
                        </div>
	<!-- ===============================-->
    
							<!-- ===============================-->

 
		
	<?php }
}


 ?>
                        
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

                </div>			  
           </div>

                        <!-- Left and right controls -->
                       

          
        </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Contact with us </span></h2>
                        </div>
					  </div>
                </div>
			  </div>
           </div>
        </div>
	<!-- end section -->
	<!-- section -->
    <div class="section contact_section" style="background:#12385b;">
        <div class="container">
               <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12">
				    <div class="full float-right_img">
                        <img src="images/img10.png" alt="#">
                    </div>
                 </div>
				 <div class="layout_padding col-lg-6 col-md-6 col-sm-12">
				    <div class="contact_form">
					    <form action="contact.html">
						   <fieldset>
						       <div class="full field">
							      <input type="text" placeholder="Your Name" name="your name" />
							   </div>
							   <div class="full field">
							      <input type="email" placeholder="Email Address" name="Email" />
							   </div>
							   <div class="full field">
							      <input type="phn" placeholder="Phone Number" name="Phone number" />
							   </div>
							   <div class="full field">
							      <textarea placeholder="Massage"></textarea>
							   </div>
							   <div class="full field">
							      <div class="center"><button>Send</button></div>
							   </div>
						   </fieldset>
						</form>
					</div>
                 </div>
               </div>			  
           </div>
        </div>
	<!-- end section -->
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
		
		   <div class="row">
		   
		      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			     <div class="footer_blog">
				    <div class="full margin-bottom_30">
					   <img src="images/logo.png" alt="#" />
					 </div>
					 <div class="full white_fonts">
					    <p> EDU GHOR is full learning wewbsite that You can easily read articles as you wants and you can be a proud member of this website to wwrite or post arcticles as your favorite.</p>
					 </div>
				 </div>
			  </div>
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
			       <div class="footer_blog footer_menu white_fonts">
						    <h3>Quick links</h3>
						    <ul> 
							  <li><a href="#">> Join Us</a></li>
							  <li><a href="#">> Wikipedia</a></li>
							  <li><a href="#">> linkedin </a></li>
							  <li><a href="#">> 10 Miniute School</a></li>
							  <li><a href="#">> Udemy </a></li>
							</ul>
						 </div>
				 </div>
				 
				 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>EDU GHOR</h3>
							 <p> Submit Your email to get update news. </p>
							 <div class="newsletter_form">
							    <form action="index.html">
								   <input type="email" placeholder="Your Email" name="#" required />
								   <button>Submit</button>
								</form>
							 </div>
						 </div>
					</div>	 
			  
			  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
				 <div class="footer_blog full white_fonts">
						     <h3>Contact us</h3>
							 <ul class="full">
							   <li><img src="images/i5.png"><span>MOhammadpur, Dhaka<br>Bangladesh</span></li>
							   <li><img src="images/i6.png"><span>edughor@gmail.com</span></li>
							   <li><img src="images/i7.png"><span>+880198242425</span></li>
							 </ul>
						 </div>
					</div>	 
			  
		   </div>
		
        </div>
    </footer>
    <!-- End Footer -->

    

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
	/* counter js */


</body>

</html>