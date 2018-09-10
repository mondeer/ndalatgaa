<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ndalat Gaa || Cross Country</title>

    <!-- css -->
    <link href="med/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="med/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  	<link rel="stylesheet" type="text/css" href="med/plugins/cubeportfolio/css/cubeportfolio.min.css">
  	<link href="med/css/nivo-lightbox.css" rel="stylesheet" />
  	<link href="med/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  	<link href="med/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="med/css/owl.theme.css" rel="stylesheet" media="screen" />
	  <link href="med/css/animate.css" rel="stylesheet" />
    <link href="med/css/style.css" rel="stylesheet">

  	<!-- boxed bg -->
  	<link id="bodybg" href="med/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  	<!-- template skin -->
  	<link id="t-colors" href="med/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-4">
					  <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
					</div>
          <div class="col-sm-4 col-md-4">
					  <p class="bold text-center">Today: {{ Carbon\Carbon::now()->format('l j F Y')}} </p>
					</div>
					<div class="col-sm-4 col-md-4">
					  <p class="bold text-right">Call us now +254 722 527 470</p>
					</div>
				</div>
			</div>
		</div>
        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="med/img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="#intro">Home</a></li>
				<li><a href="#">About Us</a></li>
				<li><a href="#">Events</a></li>
				<li><a href="#">Facilities</a></li>
				<li><a href="#">Contact</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
				  <ul class="dropdown-menu">
				    <li><a href="#">Home CTA</a></li>
					<li><a href="#">Home Form</a></li>
					<li><a href="#">Home video</a></li>
				  </ul>
				</li>
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">Ndalat Gaa Cross Country</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">Nurturing Future Talent</h4>
					</div>
						<div class="well well-trans">
  						<div class="wow fadeInRight" data-wow-delay="0.1s">
    						<ul class="lead-list">
    							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Athletics Rules Compliant</strong><br />Ndalat Gaa IF Foundation is compliant to rules of athletics</span></li>
    							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Registered in Kenya</strong><br />Duly registered in Kenya, and compliant to the laws of the land</span></li>
    							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Licensed Races</strong><br />Every Race is registered with Athletics Kenya</span></li>
    						</ul>
    						<p class="text-right wow bounceIn" data-wow-delay="0.4s">
    						   <a href="#" class="btn btn-skin btn-lg">Learn more <i class="fa fa-angle-right"></i></a>
    						</p>
  						</div>
						</div>


					</div>
					<div class="col-lg-6">
						<div class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
						{{-- <img src="img/dummy/img-1.png" class="img-responsive" alt="" /> --}}
            <iframe width="550" height="400" src="https://www.youtube.com/embed/Vqjge9YF0X0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!-- /Section: intro -->

	<!-- Section: boxes -->
    {{-- <section id="boxes" class="home-section paddingtop-80">

		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Make an appoinment</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Choose your package</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<i class="fa fa-user-md fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Help by specialist</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">

							<i class="fa fa-hospital-o fa-3x circled bg-skin"></i>
							<h4 class="h-bold">Get diagnostic report</h4>
							<p>
							Lorem ipsum dolor sit amet, nec te mollis utroque honestatis, ut utamur molestiae vix, graecis eligendi ne.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section> --}}
	<!-- /Section: boxes -->


	<section id="callaction" class="home-section paddingtop-40">
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="callaction bg-gray">
							<div class="row">
								<div class="col-md-8">
									<div class="wow fadeInUp" data-wow-delay="0.1s">
									<div class="cta-text">
									<h3>Need to join Us?</h3>
									<p>We are waiting for you, your talent will grow with the help of proffesionals.</p>
									</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="wow lightSpeedIn" data-wow-delay="0.1s">
										<div class="cta-btn">
										<a href="#" class="btn btn-skin btn-lg">Book an appoinment</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
	</section>


	<!-- Section: services -->
    <section id="service" class="home-section nopadding paddingtop-60">

		<div class="container">

        <div class="row">
    			<div class="col-sm-6 col-md-6">
    				<div class="wow fadeInUp" data-wow-delay="0.2s">
    				<img src="med/img/run.png" class="img-responsive" alt="" />
    				</div>
          </div>
			<div class="col-sm-3 col-md-3">

				<div class="wow fadeInRight" data-wow-delay="0.1s">
          <div class="service-box">
  					<div class="service-icon">
  						<span class="fa fa-anchor fa-3x"></span>
  					</div>
  					<div class="service-desc">
  						<h5 class="h-light">Principles</h5>
  						<p>Ndalat Gaa I.F Kiplagat Foundation is anchored in the principle of hardwork and honesty</p>
  					</div>
          </div>
				</div>

				<div class="wow fadeInRight" data-wow-delay="0.2s">
  				<div class="service-box">
  					<div class="service-icon">
  						<span class="fa fa-angle-double-up fa-3x"></span>
  					</div>
  					<div class="service-desc">
  						<h5 class="h-light">Growth</h5>
  						<p>Over the past 10 years, Growth of the foundation has been steady and true to its vision</p>
  					</div>
          </div>
				</div>
				<div class="wow fadeInRight" data-wow-delay="0.3s">
  				<div class="service-box">
  					<div class="service-icon">
  						<span class="fa fa-plus-square fa-3x"></span>
  					</div>
  					<div class="service-desc">
  						<h5 class="h-light">Athletes Wellbeing</h5>
  						<p>Athletes are taken care of, their wellbieng gives them the will to shine</p>
  					</div>
          </div>
				</div>


            </div>
			<div class="col-sm-3 col-md-3">

  				<div class="wow fadeInRight" data-wow-delay="0.1s">
            <div class="service-box">
    					<div class="service-icon">
    						<span class="fa fa-h-square fa-3x"></span>
    					</div>
    					<div class="service-desc">
    						<h5 class="h-light">Home to Athletics</h5>
    						<p>Ndalat Gaa I.F Kiplagat is attarcting the right publicity and support to realize its founders vision, the vision to nurture</p>
    					</div>
            </div>
  				</div>

  				<div class="wow fadeInRight" data-wow-delay="0.2s">
    				<div class="service-box">
    					<div class="service-icon">
    						<span class="fa fa-filter fa-3x"></span>
    					</div>
    					<div class="service-desc">
    						<h5 class="h-light">Competition Model</h5>
    						<p>The model brings out the best talents from the source</p>
    					</div>
            </div>
  				</div>
  				<div class="wow fadeInRight" data-wow-delay="0.3s">
    				<div class="service-box">
    					<div class="service-icon">
    						<span class="fa fa-child fa-3x"></span>
    					</div>
    					<div class="service-desc">
    						<h5 class="h-light">Kids Race</h5>
    						<p>Ndalat Gaa Foundation knows the best time to nurture talent</p>
    					</div>
            </div>
  				</div>

        </div>

      </div>
		</div>
	</section>
	<!-- /Section: services -->


	<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">The Management Team</h2>
					<p>An able team with the vision of the foundation at heart, realizing new horizons</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-12">

            <div id="filters-container" class="cbp-l-filters-alignLeft">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".director" class="cbp-filter-item">Director (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".chairman" class="cbp-filter-item">Chairman (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".lifecoach" class="cbp-filter-item">Life Coach (<div class="cbp-filter-counter"></div>)</div>
                <div data-filter=".athleticcoach" class="cbp-filter-item">Athletics Coach (<div class="cbp-filter-counter"></div>)</div>

            </div>

            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                    <li class="cbp-item director">
                        <a href="med/doctors/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="med/img/team/1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Abraham Mutai</a>
                        <div class="cbp-l-grid-team-position">Chairman</div>
                    </li>
                    <li class="cbp-item chairman">
                        <a href="med/doctors/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="med/img/team/1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Abraham Mutai</a>
                        <div class="cbp-l-grid-team-position">Chairman</div>
                    </li>
                    <li class="cbp-item lifecoach">
                        <a href="med/doctors/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="med/img/team/1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Abraham Mutai</a>
                        <div class="cbp-l-grid-team-position">Chairman</div>
                    </li>
                    <li class="cbp-item athleticcoach">
                        <a href="med/doctors/member1.html" class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="med/img/team/1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-text">VIEW PROFILE</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="doctors/member1.html" class="cbp-singlePage cbp-l-grid-team-name">Abraham Mutai</a>
                        <div class="cbp-l-grid-team-position">Chairman</div>
                    </li>

                </ul>
            </div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->



	<!-- Section: works -->
  <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our Gallery of Events</h2>
					<p>Ndalat has been hosting annual races, with great impact and results, here is sneak peek</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

    <div class="container">
			<div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12" >
  					<div class="wow bounceInUp" data-wow-delay="0.2s">
              <div id="owl-works" class="owl-carousel">
                  <div class="item"><a href="/med/img/photo/1.JPG" title="Former CS Agriculture attending Ndalat Gaa Cross Country" data-lightbox-gallery="gallery1" data-lightbox-hidpi="med/img/works/1@2x.JPG"><img src="med/img/photo/1.JPG" class="img-responsive" alt="img"></a></div>
                  <div class="item"><a href="/med/img/photo/2.JPG" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="med/img/works/2@2x.JPG"><img src="med/img/photo/2.JPG" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="/med/img/photo/3.JPG" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="med/img/works/3@2x.JPG"><img src="med/img/photo/3.JPG" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="/med/img/photo/4.JPG" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="med/img/works/4@2x.JPG"><img src="med/img/photo/4.JPG" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="/med/img/photo/5.JPG" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="med/img/works/5@2x.JPG"><img src="med/img/photo/5.JPG" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="/med/img/photo/6.JPG" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="med/img/works/6@2x.JPG"><img src="med/img/photo/6.JPG" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="/med/img/photo/6.JPG" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="med/img/works/6@2x.JPG"><img src="med/img/photo/7.JPG" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="/med/img/photo/6.JPG" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="med/img/works/6@2x.JPG"><img src="med/img/photo/8.JPG" class="img-responsive " alt="img"></a></div>
                  <div class="item"><a href="/med/img/photo/6.JPG" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="med/img/works/6@2x.JPG"><img src="med/img/photo/9.JPG" class="img-responsive " alt="img"></a></div>
              </div>
  					</div>
          </div>
      </div>
		</div>
	</section>
	<!-- /Section: works -->


	<!-- Section: testimonial -->
    <section id="testimonial" class="home-section paddingbot-60 parallax" data-stellar-background-ratio="0.5">

<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">
                    <div class="item active">
                	    <div class="col-md-4 col-sm-6">
              				    <div class="block-text rel zmin">
        						        <a title="" href="#">3000 Steeplechase</a>
        							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
        						        <p>Ndalat Gaa is really home</p>
        							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
      					           </div>
            							<div class="person-text rel text-light">
            								<img src="med/img/testimonials/1.jpg" alt="" class="person img-circle" />
            								<a title="" href="#">Conseslus Kipruto</a>
            								<span>World Champion, 3000 Steeplechase </span>
            							</div>
            					</div>
                      <div class="col-md-4 col-sm-6">
              				    <div class="block-text rel zmin">
        						        <a title="" href="#">3000 Steeplechase</a>
        							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
        						        <p>Ndalat Gaa is really home</p>
        							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
      					           </div>
            							<div class="person-text rel text-light">
            								<img src="med/img/testimonials/1.jpg" alt="" class="person img-circle" />
            								<a title="" href="#">Conseslus Kipruto</a>
            								<span>World Champion, 3000 Steeplechase </span>
            							</div>
            					</div>
                      <div class="col-md-4 col-sm-6">
              				    <div class="block-text rel zmin">
        						        <a title="" href="#">3000 Steeplechase</a>
        							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
        						        <p>Ndalat Gaa is really home</p>
        							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
      					           </div>
            							<div class="person-text rel text-light">
            								<img src="med/img/testimonials/1.jpg" alt="" class="person img-circle" />
            								<a title="" href="#">Conseslus Kipruto</a>
            								<span>World Champion, 3000 Steeplechase </span>
            							</div>
            					</div>
                    </div>
                    <div class="item">
                      <div class="col-md-4 col-sm-6">
              				    <div class="block-text rel zmin">
        						        <a title="" href="#">3000 Steeplechase</a>
        							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
        						        <p>Ndalat Gaa is really home</p>
        							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
      					           </div>
            							<div class="person-text rel text-light">
            								<img src="med/img/testimonials/1.jpg" alt="" class="person img-circle" />
            								<a title="" href="#">Conseslus Kipruto</a>
            								<span>World Champion, 3000 Steeplechase </span>
            							</div>
            					</div>
                      <div class="col-md-4 col-sm-6">
              				    <div class="block-text rel zmin">
        						        <a title="" href="#">3000 Steeplechase</a>
        							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
        						        <p>Ndalat Gaa is really home</p>
        							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
      					           </div>
            							<div class="person-text rel text-light">
            								<img src="med/img/testimonials/1.jpg" alt="" class="person img-circle" />
            								<a title="" href="#">Conseslus Kipruto</a>
            								<span>World Champion, 3000 Steeplechase </span>
            							</div>
            					</div>
                      <div class="col-md-4 col-sm-6">
              				    <div class="block-text rel zmin">
        						        <a title="" href="#">3000 Steeplechase</a>
        							    <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
        						        <p>Ndalat Gaa is really home</p>
        							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
      					           </div>
            							<div class="person-text rel text-light">
            								<img src="med/img/testimonials/1.jpg" alt="" class="person img-circle" />
            								<a title="" href="#">Conseslus Kipruto</a>
            								<span>World Champion, 3000 Steeplechase </span>
            							</div>
            					</div>
                    </div>


                </div>

                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div>
	</section>
	<!-- /Section: testimonial -->

	<section id="partner" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow lightSpeedIn" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Our partners</h2>
					<p>With great partners, dreams of many have come true.</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

    <div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="partner">
					<a href="#"><img src="med/img/safaricom.png" width="150" /></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="partner">
					<a href="#"><img src="med/img/kassfm.jpg" width="150" /></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="partner">
					<a href="#"><img src="med/img/nsh.jpeg" width="100" /></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="partner">
					<a href="#"><img src="med/img/amaco.png" width="150" /></a>
					</div>
				</div>
			</div>
      <div class="row">
				<div class="col-sm-6 col-md-3">
					<div class="partner">
					<a href="#"><img src="med/img/nandi.jpeg" width="100" /></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="partner">
					<a href="#"><img src="med/img/chalan.jpg" width="100" /></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="partner">
					<a href="#"><img src="med/img/imbank.png" width="150" /></a>
					</div>
				</div>
				<div class="col-sm-6 col-md-3">
					<div class="partner">
					<a href="#"><img src="med/img/atk.jpeg" width="150" /></a>
					</div>
				</div>
			</div>
    </div>
	</section>

	<footer>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>About Ndalat Gaa I.F Kiplagat Foundation</h5>
						<p>
						   Ndalat Gaa I.F Kiplagat foundation is after the
               dream of two visionaries who saw it noble to
               nurture young talent for better life.
						</p>
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Management</a></li>
							<li><a href="#">Events</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Ndalat Gaa IF Kiplagat Foundation</h5>
						<p>
						 The source of world Champions, Nurturing talent
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 8am to 10pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> +254 722 527 470
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> ndalatgaa@gmail.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>At the heart of Source of Champions, Nandi County, Ndalat</p>

					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;2018 - Ndalat Gaa Cross Country. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">
  					<div class="text-right">
  						<div class="credits">
                <a href="/">Developed With Passion</a> by <a href="https://imond.co.ke/">iMond Solutions</a>
              </div>
  					</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
  <script src="med/js/jquery.min.js"></script>
  <script src="med/js/bootstrap.min.js"></script>
  <script src="med/js/jquery.easing.min.js"></script>
	<script src="med/js/wow.min.js"></script>
	<script src="med/js/jquery.scrollTo.js"></script>
	<script src="med/js/jquery.appear.js"></script>
	<script src="med/js/stellar.js"></script>
	<script src="med/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="med/js/owl.carousel.min.js"></script>
	<script src="med/js/nivo-lightbox.min.js"></script>
  <script src="med/js/custom.js"></script>

</body>

</html>
