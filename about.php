<?php

// HEADER
$pageName = 'About Stephen Fairbanks |';
$myPath = '';
$currentNav = "nav-cur--about";

include_once('dist/includes/head.inc.php'); ?>

	
	<?php

	// WHAT'S MY AGE AGAIN?

  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "09/23/1983";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
	?>





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
	          <li class="nav-item"><a href="<?php echo $root ?>" title="Home" class="nav-link scroll-to"><</a></li>
	          <li class="nav-item"><a href="#panel-info1" class="nav-link scroll-to">01</a></li>
	          <li class="nav-item"><a href="#panel-info2" class="nav-link scroll-to">02</a></li>
	          <li class="nav-item"><a href="#panel-info3" class="nav-link scroll-to">03</a></li>
	          <li class="nav-item"><a href="#panel-info4" class="nav-link scroll-to">04</a></li>
	          <li class="nav-item"><a href="<?php echo $root ?>/contact" title="Contact" class="nav-link scroll-to">></a></li>
	        </ul>

          </div>
          <div class="content-block content-block--2">          
            <h3>Professional <span class="color--brand amp">&amp;</span> personal stuff</h3>          
          </div>
          <div class="content-block content-block--3">

          	<!-- CONTENT LIFT -->
          	<div class="content--lift">
          	
	          	<div class="block--header">

	          		<div class="block--header-img">
	          			<img src="dist/images/about-img.png" alt="It's Stephen Fairbanks - Designer &amp; Developer - All about him!" />
	          		</div>

	          	</div>

	            
	            <div id="panel-info1" class="block--list">
		            <h3>Personal stats</h3>
		            <ul class="stat-list">
		            	<li><span>Name:</span> Stephen Fairbanks</li>
			            <li><span>Age:</span> <?php echo $age; ?></li>
			            <li><span>Height:</span> 6'0" (I think)</li>
			            <li><span>Location:</span> Manchester, England</li>
			        </ul>
		        </div>

		        <div id="panel-info2" class="block--list">
		            <h3>A very particular set of skills</h3>
		            <ul class="stat-list">
			            <li>Digital Design (UI)</li>
			            <li>Adobe Creative Cloud</li>
			            <li>CSS3 (Sass, Less)</li>
			            <li>HTML5</li>
			            <li>JavaScript</li>
			            <li>WordPress</li>
			            <li>Git / SVN</li>
			        </ul>
		        </div>

		        <div id="panel-info3" class="block--list">
		            <h3>Some companies I've worked with</h3>
		            <ul class="stat-list">
			            <li><a href="http://ghosthorses.co.uk" target="_blank" class="btn-link--alt">Ghosthorses</a></li>
			            <li><a href="http://weconvene.com" target="_blank" class="btn-link--alt">WeConvene</a></li>
			            <li><a href="http://unshackled.com" target="_blank" class="btn-link--alt">Unshackled</a></li>
			            <li><a href="http://codecomputerlove.com" target="_blank" class="btn-link--alt">Code Computerlove</a></li>
			            <li><a href="http://creativespark.co.uk" target="_blank" class="btn-link--alt">Creative Spark</a></li>
			            <li><a href="https://havaslynx.com" target="_blank" class="btn-link--alt">Havas Lynx</a></li>
			            <li><a href="http://www.smrs.co.uk" target="_blank" class="btn-link--alt">SMRS</a></li>
			            <li><a href="http://ampersandcommerce.com/" target="_blank" class="btn-link--alt">Ampersand</a></li>
			        </ul>
		        </div>

		        <div id="panel-info4" class="block--list">
		            <h3>Personal projects</h3>
		            <ul class="stat-list">
			            <li><a href="http://itwouldbeniceif.com" target="_blank" class="btn-link--alt">It Would Be Nice If</a></li>
			            <li><a href="http://thesolarsystem.space" target="_blank" class="btn-link--alt">The Solar System</a></li>
			            <li><a href="http://fretmap.com" target="_blank" class="btn-link--alt">Fretmap</a></li>
			            <li><a href="http://qwota.co.uk" target="_blank" class="btn-link--alt">Qwota</a></li>			            
			            <li><a href="http://whatisyourproblem.co.uk" target="_blank" class="btn-link--alt">What Is Your Problem?</a></li>
			            <li><a href="http://nonbeliever.co.uk" target="_blank" class="btn-link--alt">Nonbeliever</a></li>
			        </ul>
		        </div>

		        <div id="section4" class="block--list">
		            <h3>Bragging rights</h3>
		            <ul class="stat-list">
			            <li>2 <a href="http://awwwards.com" target="_blank" class="btn-link--alt">Awwwards</a> 'Website of the Day'</li>
			            <li>Numerous other CSS-based awards</li>
			            <li>Features in Net magazine a few times</li>
			            <li>11+ years experience in Design / Development</li>
			            <li>Used to live next door to Manchester United's reserve goalkeeper</li>
			            <li>Released 4 albums worth of music (nobody listens to them)</li>
			        </ul>
		        </div>


		        <div class="block--last">
			        <a href="<?php echo $root; ?>/contact" class="btn--circle" title="Next Page">Next Page</a>
			    </div>

			
          	</div>
          	<!-- / CONTENT LIFT -->

          </div>
        </div>
  		</div>
  		
  		<?php include_once('dist/includes/loader.inc.php'); ?>
    </div><!-- / INNER CONTAINER -->
    </div><!-- / BARBA CONTAINER -->
      </div>
      
<?php include_once('dist/includes/footer.inc.php'); ?>