<?php
session_start();
include "chat/settings/Database_Connection_rchat.php";
error_reporting(0);
if(!empty($_SESSION["unique_id"])){
    $cipher = "AES-128-CTR";
    $option = 0;
    $vector_initialize = "12987587654252";
    $encryption_key = "ch54c32194847";

  $usr_sql = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM users WHERE `unique_id` = '{$_SESSION['unique_id']}'"));
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise AI v0.01, ai.mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="A vibrant online platform for college students to share notes, tutorials, videos, and engage in chat. Buy and sell items within the college community.">

  <title>College Student Hub</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/parallax/jarallax.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;700&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/additional.css"><link rel="stylesheet" href="assets/mobirise/css/additional.css" type="text/css">
  
  

  <style>:root{ --background: #FDF8E6; --dominant-color: #EEB902; --primary-color: #2D7DD2; --secondary-color: #A2C945; --success-color: #20AC6B; --danger-color: #AE1E2C; --warning-color: #CC9900; --info-color: #0AA3C2; --background-text: #000000; --dominant-text: #000000; --primary-text: #FFFFFF; --secondary-text: #000000; --success-text: #FFFFFF; --danger-text: #FFFFFF; --warning-text: #000000; --info-text: #FFFFFF;}</style>
</head>
<body>

<?php 
  include_once "navbar.php";
?>
<section class="header18 cid-u5dVDjaXCB mbr-fullscreen" data-bg-video="https://www.youtube.com/embed/8cpM-NSxkZQ?autoplay&#x3D;1&amp;loop&#x3D;1&amp;playlist&#x3D;8cpM-NSxkZQ&amp;t&#x3D;20&amp;mute&#x3D;1&amp;playsinline&#x3D;1&amp;controls&#x3D;0&amp;showinfo&#x3D;0&amp;autohide&#x3D;1&amp;allowfullscreen&#x3D;true&amp;mode&#x3D;transparent" id="hero-15-u5dVDjaXCB">
  <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="content-wrap col-12 col-md-8">
        <h1
          class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1 animate__animated animate__delay-1s animate__fadeInUp">
          <strong>Connect Campus</strong>
        </h1>
        <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7 animate__animated animate__delay-1s animate__fadeInUp">Where Notes, Tutorials, and Chats Collide! Join the Wild Academic Adventure Today!</p>
        <div class="mbr-section-btn">
          <a class="btn btn-white-outline display-7 animate__animated animate__delay-1s animate__fadeInUp" href="#">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>

  <section class="article2 cid-u5dVDjarQa" id="about-us-2-u5dVDjarQa">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-12 col-lg-6 image-wrapper">
          <img class="w-100" src="assets/images/photo-1477281765962-ef34e8bb0967.jpeg">
        </div>
        <div class="col-12 col-md-12 col-lg">
          <div class="text-wrapper align-left">
            <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2">
              <strong>Our Academic Playground</strong>
            </h1>
            <p class="mbr-text align-left mbr-fonts-style mb-3 display-7">Welcome to the hub of knowledge exchange, where students rule and learning rocks!</p>
            <p class="mbr-text align-left mbr-fonts-style mb-3 display-7">At Collegify, we believe in the power of sharing, selling, and buying educational treasures.</p>
            <p class="mbr-text align-left mbr-fonts-style mb-3 display-7">Join us in the quest for academic excellence and unrivaled fun!</p>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="people03 cid-u5dVDjbahE" id="team-1-u5dVDjbahE">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 content-head">
				<div class="mbr-section-head mb-5">
					<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
						<strong>Meet Mavericks</strong>
					</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/photo-1694026307715-0d3709e69adf.jpeg">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style display-5">
							<strong>Max</strong></h6>
						<p class="mbr-text mbr-fonts-style display-7">Chief Knowledge Officer</p>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/photo-1589571739149-47ed80eae6ba.jpeg">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style display-5">
							<strong>Luna</strong></h6>
						<p class="mbr-text mbr-fonts-style display-7">Tech Sorceress</p>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/photo-1564564244660-5d73c057f2d2.jpeg">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style display-5">
							<strong>Leo</strong></h6>
						<p class="mbr-text mbr-fonts-style display-7">Marketplace Maestro</p>
					</div>
				</div>
			</div>
      <div class="item features-image col-12 col-md-6 col-lg-3">
        <div class="item-wrapper">
          <div class="item-img mb-3">
            <img src="assets/images/photo-1529139574466-a303027c1d8b.jpeg">
          </div>
          <div class="item-content align-left">
            <h6 class="item-subtitle mbr-fonts-style display-5">
              <strong>Aria</strong>
            </h6>
            <p class="mbr-text mbr-fonts-style display-7">Chat Champion</p>
          </div>
        </div>
      </div>
		</div>
	</div>
</section>
<section class="image02 cid-u5dVDjbZB2 mbr-fullscreen mbr-parallax-background" id="image-13-u5dVDjbZB2">
    <div class="container">
        <div class="row"></div>
    </div>
</section>
<section class="gallery10 cid-u5dVDjbAuV" id="features-61-u5dVDjbAuV">
  <div class="container-fluid">
      <div class="loop-container">
        <div class="item display-1" data-linewords="
          Note Sharing *
          Interactive Tutorials *
          Vibrant Marketplace *
          Real-Time Chats *
          Treasure Trove *
          Academic Bazaar *" 
        data-direction="-1" data-speed="0.05">
        </div>
        <div class="item display-1" data-linewords="
          Note Sharing *
          Interactive Tutorials *
          Vibrant Marketplace *
          Real-Time Chats *
          Treasure Trove *
          Academic Bazaar *" 
        data-direction="-1" data-speed="0.05">
        </div>
      </div>   
  </div>
</section>
<section class="header2 cid-u5dVDjbfVi" id="subscription-form-1-u5dVDjbfVi">
  <div class="container">
    <div class="row content-wrapper justify-content-center">
      <div class="col-lg-8 mbr-form">
        <div class="">
          <h1 class="mbr-section-title mbr-fonts-style mb-5 display-1">
            <strong>Share, Learn, Connect, Thrive!</strong>
          </h1>
        </div>
        <div class="text-wrapper align-left" data-form-type="formoid">
          <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="">
            <div class="row">
              <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
              <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                Oops...! some problem!
              </div>
            </div>
            <div class="dragArea row">
              <div data-for="email" class="col-lg-6 col-md-6 col-sm-12 form-group">
                <input type="email" name="email" placeholder="test@email.com" data-form-field="email" class="form-control display-7" value="" id="email-header02-0">
              </div>
              <div class="col-auto mbr-section-btn"><button type="submit" class="w-100 btn btn-primary display-7">Join Now</button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="list1 cid-u5dVDjbVhX" id="faq-1-u5dVDjbVhX">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-12 col-lg-10 m-auto">
				<div class="content">
					<div class="mbr-section-head align-left mb-5">
						<h3 class="mbr-section-title mb-2 mbr-fonts-style display-2">
							<strong>Curious Minds Ask</strong>
						</h3>
					</div>
					<div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
						<div class="card mb-3">
							<div class="card-header" role="tab" id="headingOne">
								<a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_0" aria-expanded="false" aria-controls="collapse1">
									<h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
										How to Share Notes?
									</h6>
									<span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
								</a>
							</div>
							<div id="collapse1_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
								<div class="panel-body">
									<p class="mbr-fonts-style panel-text display-7">
										Sharing notes is as easy as pie! Just upload your notes and let the magic happen. Your classmates will thank you later!
									</p>
								</div>
							</div>
						</div>
						<div class="card mb-3">
							<div class="card-header" role="tab" id="headingOne">
								<a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_0" aria-expanded="false" aria-controls="collapse2">
									<h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
										Need Help with Tutorials?
									</h6>
									<span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
								</a>
							</div>
							<div id="collapse2_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
								<div class="panel-body">
									<p class="mbr-fonts-style panel-text display-7">
										Struggling with a concept? Dive into our treasure trove of tutorials shared by your brilliant peers. Learning made fun and easy!
									</p>
								</div>
							</div>
						</div>
						<div class="card mb-3">
							<div class="card-header" role="tab" id="headingOne">
								<a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_0" aria-expanded="false" aria-controls="collapse3">
									<h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
										Want to Sell or Buy?
									</h6>
									<span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
								</a>
							</div>
							<div id="collapse3_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
								<div class="panel-body">
									<p class="mbr-fonts-style panel-text display-7">
										Got something to sell or itching to buy? Our marketplace is buzzing with deals waiting for you. Don&#x27;t miss out on the action!
									</p>
								</div>
							</div>
						</div>
						<div class="card mb-3">
							<div class="card-header" role="tab" id="headingOne">
								<a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse4_0" aria-expanded="false" aria-controls="collapse4">
									<h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
										How to Connect with Others?
									</h6>
									<span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
								</a>
							</div>
							<div id="collapse4_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
								<div class="panel-body">
									<p class="mbr-fonts-style panel-text display-7">
										Chat, discuss, and make friends in our vibrant community. The more, the merrier! Join the conversation now!
									</p>
								</div>
							</div>
						</div>
						<div class="card mb-3">
							<div class="card-header" role="tab" id="headingOne">
								<a role="button" class="panel-title collapsed" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse5_0" aria-expanded="false" aria-controls="collapse5">
									<h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
										Looking for Videos?
									</h6>
									<span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
								</a>
							</div>
							<div id="collapse5_0" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_0">
								<div class="panel-body">
									<p class="mbr-fonts-style panel-text display-7">
										Lights, camera, action! Watch engaging and educational videos uploaded by the community. Entertainment and learning rolled into one!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="header18 cid-u5dVDjbc77 mbr-fullscreen" data-bg-video="https://www.youtube.com/embed/Kd7Wrtc85n4?autoplay&#x3D;1&amp;loop&#x3D;1&amp;playlist&#x3D;Kd7Wrtc85n4&amp;t&#x3D;20&amp;mute&#x3D;1&amp;playsinline&#x3D;1&amp;controls&#x3D;0&amp;showinfo&#x3D;0&amp;autohide&#x3D;1&amp;allowfullscreen&#x3D;true&amp;mode&#x3D;transparent" id="video-5-u5dVDjbc77">
  <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>
  <div class="container-fluid">
    <div class="row">
    </div>
  </div>
</section>
<section class="header12 cid-u5dVDjbZFJ" id="call-to-action-8-u5dVDjbZFJ">
    <div class="text-center container">
        <div class="row mb-4 justify-content-center">
            <div class="col-12 col-md-4">
                <img src="assets/images/photo-1531482615713-2afd69097998.jpeg">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 content-head">
                <h1 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                    <strong>Unleash Your Potential</strong>
                </h1>
                <p class="mbr-text mbr-fonts-style mb-4 display-7">
                    Join the revolution of knowledge sharing and collaboration. Your journey starts here!
                </p>
                <div class="mbr-section-btn mt-4">
                    <a class="btn btn-primary display-7" href="#">Start Exploring</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="video04 cid-u5dVDjbZJi" id="video-6-u5dVDjbZJi">
  <div class="container">
    <div class="mbr-section-head mb-5">
      <h4 class="mbr-section-title mbr-fonts-style mb-0 mt-0 display-2">
        <strong>Educate, Entertain, Empower</strong>
      </h4>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 video-block">
        <div class="video-wrapper">
          <iframe class="mbr-embedded-video"
            src="https://www.youtube.com/embed/vsR-yiGFDZc?autoplay&#x3D;1&amp;loop&#x3D;1&amp;playlist&#x3D;vsR-yiGFDZc&amp;t&#x3D;20&amp;mute&#x3D;1&amp;playsinline&#x3D;1&amp;controls&#x3D;0&amp;showinfo&#x3D;0&amp;autohide&#x3D;1&amp;allowfullscreen&#x3D;true&amp;mode&#x3D;transparent"
            width="1280" height="720" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="gallery10 cid-u5dVDjco1u" id="features-61-u5dVDjco1u">
  <div class="container-fluid">
      <div class="loop-container">
        <div class="item display-1" data-linewords="
          Instant College Chat *
          Note Sharing Hub *
          Video Exchange Zone *
          Student Marketplace *
          Knowledge Swap *
          Interactive Learning *" 
        data-direction="-1" data-speed="0.05">
        </div>
        <div class="item display-1" data-linewords="
          Instant College Chat *
          Note Sharing Hub *
          Video Exchange Zone *
          Student Marketplace *
          Knowledge Swap *
          Interactive Learning *" 
        data-direction="-1" data-speed="0.05">
        </div>
      </div>   
  </div>
</section>
<section class="pricing02 cid-u5dVDjc5d2" id="product-list-8-u5dVDjc5d2">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Student Market</strong>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1524995997946-a1c2e315a42f.jpeg" >
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Classy Notes</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">
                            $10
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Premium class notes for the savvy student
                        </p>
                        <div class="mbr-section-btn item-footer"><a href=""
                                class="btn item-btn btn-primary display-7">Get It</a></div>
                    </div>

                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1497864149936-d3163f0c0f4b.jpeg">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Tutorial Treasure</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">
                            $15
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Unlock the secrets of success with exclusive tutorials
                        </p>
                        <div class="mbr-section-btn item-footer"><a href=""
                                class="btn item-btn btn-primary display-7">Get It</a></div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1497633762265-9d179a990aa6.jpeg" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Video Vault</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">
                            $20
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Dive into a world of knowledge with captivating videos<br>
                        </p>
                        <div class="mbr-section-btn item-footer"><a href=""
                                class="btn item-btn btn-primary display-7">Get It</a></div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1521587760476-6c12a4b040da.jpeg">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5">
                            <strong>Student Essentials</strong>
                        </h5>
                        <h6 class="item-subtitle mbr-fonts-style display-7">
                            $5
                        </h6>
                        <p class="mbr-text mbr-fonts-style display-7">
                            Must-have items for every college student<br>
                        </p>
                        <div class="mbr-section-btn item-footer"><a href=""
                                class="btn item-btn btn-primary display-7">Get It</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features03 cid-u5dVDjcpiX" id="events-1-u5dVDjcpiX">
	<div class="container-fluid">
		<div class="row justify-content-center mb-5">
			<div class="col-12 content-head">
				<div class="mbr-section-head">
					<h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
						<strong>Upcoming Buzz</strong>
					</h4>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="item features-image col-12 col-md-6 col-lg-3 active">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/photo-1524178232363-1fb2b075b655.jpeg">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
							<strong><a class="text-black fw-bold" href="#">Midterm Madness</a></strong>
						</h6>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">March 1, 2024</p>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">Prepare for the ultimate academic showdown with surprise challenges and rewards</p>
						<div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7">Join</a></div>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/photo-1509062522246-3755977927d7.jpeg" data-slide-to="1" data-bs-slide-to="1">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
							<strong><a class="text-black fw-bold" href="#">Study Fiesta</a></strong>
						</h6>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">March 10, 2024</p>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">Celebrate learning with a carnival of knowledge, games, and prizes for all students</p>
						<div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7">Join</a></div>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/photo-1556761175-5973dc0f32e7.jpeg" data-slide-to="2" data-bs-slide-to="2">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
							<strong><a class="text-black fw-bold" href="#">Knowledge Quest</a></strong>
						</h6>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">March 20, 2024</p>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">Embark on a quest for wisdom with thrilling puzzles and brain-teasing adventures</p>
						<div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7">Join</a></div>
					</div>
				</div>
			</div>
			<div class="item features-image col-12 col-md-6 col-lg-3">
				<div class="item-wrapper">
					<div class="item-img mb-3">
						<img src="assets/images/photo-1581078426770-6d336e5de7bf.jpeg" data-slide-to="3" data-bs-slide-to="3">
					</div>
					<div class="item-content align-left">
						<h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
							<strong><a class="text-black fw-bold" href="#">Brainiac Bash</a></strong>
						</h6>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">March 30, 2024</p>
						<p class="mbr-text mbr-fonts-style mb-3 display-7">Join the brightest minds for a night of fun, challenges, and brainy banter</p>
						<div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7">Join</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features03 cid-u5dVDjc0mX" id="partners-1-u5dVDjc0mX">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5">
            <div class="col-12 content-head">
                <div class="mbr-section-head">
                    <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Our Allies</strong>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2 active">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1668081177040-3d6a3eaf2218.jpeg" data-slide-to="1" data-bs-slide-to="1">
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1622547748225-3fc4abd2cca0.jpeg" data-slide-to="2" data-bs-slide-to="2">
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1617791160588-241658c0f566.jpeg" data-slide-to="3" data-bs-slide-to="3">
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1517191434949-5e90cd67d2b6.jpeg" data-slide-to="4" data-bs-slide-to="4">
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1642427749670-f20e2e76ed8c.jpeg" data-slide-to="5" data-bs-slide-to="5">
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/photo-1604079628040-94301bb21b91.jpeg" data-slide-to="6" data-bs-slide-to="6">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="people04 cid-u5dVDjccSr" id="testimonials-4-u5dVDjccSr">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-12 mb-0 content-head">
				<h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
					<strong>Raves</strong>
				</h3>	
			</div>
		</div>
		<div class="row mbr-masonry" data-masonry="{&quot;percentPosition&quot;: true }">
			<div class="item features-without-image col-12 col-md-6 col-lg-4 active">
				<div class="item-wrapper">
					<div class="card-box align-left">
						<p class="card-text mbr-fonts-style display-7">
							This platform changed my college life! I found amazing notes and made new friends.
						</p>
						<div class="img-wrapper mt-4 mb-3">
							<img src="assets/images/photo-1535704882196-765e5fc62a53.jpeg" data-slide-to="0" data-bs-slide-to="0">
						</div>
						<h5 class="card-title mbr-fonts-style display-7">
							<strong>Samantha</strong>
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="card-box align-left">
						<p class="card-text mbr-fonts-style display-7">
							The chat feature is a game-changer! I love connecting with classmates instantly.
						</p>
						<div class="img-wrapper mt-4 mb-3">
							<img src="assets/images/photo-1621624666561-84d0107001dc.jpeg" data-slide-to="1" data-bs-slide-to="1">
						</div>
						<h5 class="card-title mbr-fonts-style display-7">
							<strong>Jake</strong>
						</h5>
					</div>
				</div>
			</div>
			<div class="item features-without-image col-12 col-md-6 col-lg-4">
				<div class="item-wrapper">
					<div class="card-box align-left">
						<p class="card-text mbr-fonts-style display-7">
							Selling my old textbooks here was a breeze. Great way to earn some extra cash!
						</p>
						<div class="img-wrapper mt-4 mb-3">
							<img src="assets/images/photo-1525614686090-7a3108e3758e.jpeg" data-slide-to="2" data-bs-slide-to="2">
						</div>
						<h5 class="card-title mbr-fonts-style display-7">
							<strong>Emily</strong>
						</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    
<section class="gallery07 cid-u5dVDjdOrc" id="gallery-14-u5dVDjdOrc">
  <div class="container-fluid gallery-wrapper">
    <div class="grid-container">
      <div class="grid-container-3" style="transform: translate3d(-200px, 0px, 0px);">
        <div class="grid-item">
          <img src="assets/images/photo-1522661067900-ab829854a57f.jpeg">
        </div>
        <div class="grid-item">
          <img src="assets/images/photo-1606636660488-16a8646f012c.jpeg">
        </div>
        <div class="grid-item">
          <img src="assets/images/photo-1454165804606-c3d57bc86b40.jpeg">
        </div>
        <div class="grid-item">
          <img src="assets/images/photo-1488190211105-8b0e65b80b4e.jpeg">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="social05 cid-u5dVDjdk6V" id="follow-us-2-u5dVDjdk6V">
    <div class="container">
        <div class="row">
            <h3 class="mbr-section-title align-center mb-5 mbr-fonts-style display-2">
                <strong>Join the Fun with Us!</strong>
            </h3>
            <div class="col-12">
                <div class="social-row">
                    <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont socicon socicon-facebook"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont socicon socicon-linkedin"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont socicon socicon-twitch"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="form5 cid-u5dVDjdjy3" id="contact-form-3-u5dVDjdjy3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                        <strong>Get in Touch Now!</strong>
                    </h3>                    
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control" value="" id="name-form02-0">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control" value="" id="email-form02-0">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="url">
                            <input type="url" name="url" placeholder="Phone" data-form-field="url" class="form-control" value="" id="url-form5-0">
                        </div>
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control" id="textarea-form02-0"></textarea>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit" class="btn btn-primary display-7">Send Message</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="contacts03 cid-u5dVDjdJnw" id="contacts-11-u5dVDjdJnw">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <div class="col-12 col-md-12">
          <h5 class="mbr-section-title mbr-fonts-style mt-0 mb-4 display-2">
            <strong>Connect Today!</strong>
          </h5>
          <p class="mbr-section-subtitle mbr-fonts-style mt-0 mb-4 display-7">
            Phone: <a href="">123-456-7890</a>
            <br>Email: info@collegename.edu
            <br>Location:  India
            <br>Hours: Mon-Fri: 9am-5pm</p> 
        </div>
      </div>
      <div class="col-lg-8 side-features">
        <div class="google-map">
          <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key&#x3D;AIzaSyCt1265A4qvZy9HKUeA8J15AOC4SrCyZe4&amp;q&#x3D;%20India" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="footer2 cid-u5dVDjdVAa" id="footer-5-u5dVDjdVAa">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 center mt-2 mb-3">
        <p class="mbr-fonts-style copyright mb-0 display-7">
          © 2024 CollegeName. All Rights Reserved.
        </p>
      </div>
      <div class="col-12 col-lg-6 center">
        <div class="row-links mt-2 mb-3">
          <ul class="row-links-soc">
            <li class="row-links-soc-item mbr-fonts-style display-7">
              <a href="#" class="text-white">About</a>
            </li>
            <li class="row-links-soc-item mbr-fonts-style display-7">
              <a href="#" class="text-white">Services</a>
            </li>
            <li class="row-links-soc-item mbr-fonts-style display-7">
              <a href="#" class="text-white">Blog</a>
            </li>
            <li class="row-links-soc-item mbr-fonts-style display-7">
              <a href="#" class="text-white">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="assets/parallax/jarallax.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/scrollgallery/scroll-gallery.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  <script>

    (function(){
      var animationInput = document.createElement('input');
      animationInput.setAttribute('name', 'animation');
      animationInput.setAttribute('type', 'hidden');
      document.body.append(animationInput);
    })();

  </script>
</body>
</html>