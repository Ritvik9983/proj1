<section class="menu menu2 cid-u5dVDjaLBC" once="menu" id="menu-5-u5dVDjaLBC">
  <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
    <div class="container">
      <div class="navbar-brand">
        <span class="navbar-logo">
					<a href="https://mobiri.se">
						<img src="assets/images/photo-1580582932707-520aed937b7b.jpeg" style="height: 4.3rem;">
					</a>
				</span>
				<span class="navbar-caption-wrap">
          <a class="navbar-caption text-black display-4" href="https://mobiri.se">Collegify</a>
        </span>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-bs-toggle="collapse" data-target="#navbarSupportedContent"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarNavAltMarkup" aria-expanded="false"
        aria-label="Toggle navigation">
        <div class="hamburger">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="chat/userpage.php">Chats</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="#"
              aria-expanded="false">Tutorials</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link text-black display-4" href="marketplace/index.php">Marketplace</a>
          </li>
        </ul>
        <div class="navbar-buttons mbr-section-btn">
          <?php
          if(!empty($_SESSION["unique_id"])){?>
          <a href="#"><img style="width:80px;height:80px;" src="<?php echo 'chat/settings/'.$usr_sql['img']; ?>" alt="" srcset=""></a>
          <?php
          }
          else{
            ?>
            <a class="btn btn-primary display-4" href="chat/signup.php">Join Now</a>
            <?php
          }
          ?>
        </div>
      </div>
    </div>
  </nav>
</section>