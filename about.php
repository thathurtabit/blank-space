<?php

// HEADER
$pageName = 'About Stephen Fairbaks |';
$myPath = '';
$currentNav = "nav-cur--about";

include_once('dist/includes/head.inc.php'); ?>

   <div id="barba-wrapper">
    
    <!-- BARBA CONTAINER -->
    <div class="barba-container">

    <!-- NAVBAR -->
    <?php include_once('dist/includes/nav.inc.php'); ?>

      <!-- INNER CONTAINER -->
      <div id="about" class="inner-container page--about">
        

  		<div id="panel-info1" class="full-panel panel--info1">
  			<div class="content-wrap">
          <div class="content-block content-block--1">          
            <h1 class="trans-letters"><span>A</span><span>b</span><span>o</span><span>u</span><span>t</span></h1>
            <h2>Vital statistics</h2>

            <ul id="sub-nav" class="nav" role="tablist">
	          <li class="nav-item"><a href="#panel-info1" class="nav-link scroll-to">01</a></li>
	          <li class="nav-item"><a href="#panel-info2" class="nav-link scroll-to">02</a></li>
	          <li class="nav-item"><a href="#panel-info3" class="nav-link scroll-to">03</a></li>
	          <li class="nav-item"><a href="#panel-info4" class="nav-link scroll-to">04</a></li>
	          <li class="nav-item"><a href="<?php echo $root ?>/contact.php" class="nav-link scroll-to">></a></li>
	        </ul>

          </div>
          <div class="content-block content-block--2">          
            <h3>Professional <span class="color--brand amp">&amp;</span> personal stuff</h3>          
          </div>
          <div class="content-block content-block--3"> 
            
            <div class="stat-block">
	            <h3>Personal stats</h3>
	            <ul class="stat-list">
		            <li>Age: 33</li>
		            <li>Height: 6'0" (I think)</li>
		            <li>Location: Manchester, England</li>
		        </ul>
	        </div>

	        <div class="stat-block">
	            <h3>A very particular set of skills</h3>
	            <ul class="stat-list">
		            <li>Digital Design (UI)</li>
		            <li>Adobe Creative Cloud</li>
		            <li>CSS3 (Sass, Less)</li>
		            <li>HTML5</li>
		            <li>JavaScript</li>
		            <li>WordPress</li>
		        </ul>
	        </div>

	        <div class="stat-block">
	            <h3>Folks I've worked with</h3>
	            <ul class="stat-list">
		            <li>Digital Design (UI)</li>
		            <li>Adobe Creative Cloud</li>
		            <li>CSS3 (Sass, Less)</li>
		            <li>HTML5</li>
		            <li>JavaScript</li>
		            <li>WordPress</li>
		        </ul>
	        </div>

	        <div class="stat-block">
	            <h3>Bragging rights</h3>
	            <ul class="stat-list">
		            <li>2 Awwwards 'Website of the Day'</li>
		            <li>Features in Net magazine a few times</li>
		            <li>11+ years experience</li>
		            <li>Released 4 albums worth of music (nobody listens to them)</li>
		        </ul>
	        </div>


	        <div class="panel--last">
		        <a href="<?php echo $root; ?>/contact.php" class="btn--circle" title="Next Page">Next Page</a>
		    </div>

          </div>
        </div>
  		</div>
  		
  		<?php include_once('dist/includes/loader.inc.php'); ?>
    </div><!-- / INNER CONTAINER -->
    </div><!-- / BARBA CONTAINER -->
      </div>
      
<?php include_once('dist/includes/footer.inc.php'); ?>