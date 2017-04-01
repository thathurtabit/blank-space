<?php

// HEADER
$pageName = 'Designer &amp; Developer Stephen Fairbanks |';
$myPath = '';

include_once('dist/includes/head.inc.php'); ?>
<?php include_once('dist/includes/nav.inc.php'); ?>

  <div id="barba-wrapper">
    <!-- BARBA CONTAINER -->
    <div class="barba-container">
      <!-- INNER CONTAINER -->
      <div id="home" class="inner-container">
        <ul id="sub-nav" class="nav flex-column" role="tablist">
          <li class="nav-item"><a href="#panel-info1" class="nav-link scroll-to">Part 1</a></li>
          <li class="nav-item"><a href="#panel-info2" class="nav-link scroll-to">Part 2</a></li>
          <li class="nav-item"><a href="#panel-info3" class="nav-link scroll-to">Part 3</a></li>
          <li class="nav-item"><a href="#panel-info4" class="nav-link scroll-to">Part 4</a></li>
          <li class="nav-item"><a href="#panel-info5" class="nav-link scroll-to">Part 5</a></li>
          <li class="nav-item"><a href="#panel-info6" class="nav-link scroll-to">Part 6</a></li>
          <li class="nav-item"><a href="<?php echo $root ?>/about.php" class="nav-link scroll-to">Next</a></li>
        </ul>

  		<div id="panel-info1" class="full-panel panel--info1">
  			<div class="content-wrap">
          <div class="content-block content-block--1">          
            <h1>'Sup?</h1>
            <h2>I'm Stephen</h2>
          </div>
          <div class="content-block content-block--2">          
            <h3>I design &amp; make websites</h3>          
          </div>
          <div class="content-block content-block--3"> 
            
            <div class="skin-float"></div>

          </div>
        </div>
  		</div>
  		<div id="panel-info2" class="full-panel panel--info2">
  			<div class="content-wrap">
          <div class="content-block content-block--1">
          </div>
          <div class="content-block content-block--2">
            <h3>I enjoy making things usuable,<br />as well as pretty</h3>       
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
  		</div>
  		<div id="panel-info3" class="full-panel panel--info3">
        <div class="content-wrap">
          <div class="content-block content-block--1">
          </div>
          <div class="content-block content-block--2">
            <h3>I mainly design in code<br />(HTML, CSS, JavaScript)</h3>        
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
      </div>
      <div id="panel-info4" class="full-panel panel--info4">
        <div class="content-wrap">
          <div class="content-block content-block--1">
          </div>
          <div class="content-block content-block--2">
            <h3>I've been making websites<br />since 1995 <span>I'm old now</span></h3>        
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
      </div>
      <div id="panel-info5" class="full-panel panel--info5">
        <div class="content-wrap">
          <div class="content-block content-block--1">
          </div>
          <div class="content-block content-block--2">
            <h3>I like pizza,<br />I don't like spiders</h3>        
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
      </div>
      <div id="panel-info6" class="full-panel panel--info6">
        <div class="content-wrap">
          <div class="content-block content-block--1">
          </div>
          <div class="content-block content-block--2">
            <a href="about.php">Go to Next Page</a>        
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
      </div>
  		<?php include_once('dist/includes/loader.inc.php'); ?>
    </div><!-- / INNER CONTAINER -->
    </div><!-- / BARBA CONTAINER -->
  </div>
      
<?php include_once('dist/includes/footer.inc.php'); ?>