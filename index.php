<?php

// HEADER
$pageName = 'My Page Title |';
$myPath = '';

include_once('dist/includes/head.inc.php'); ?>
<?php include_once('dist/includes/nav.inc.php'); ?>

  <div id="barba-wrapper">
    <div class="barba-container">
      <ul id="sub-nav" class="nav flex-column" role="tablist">
        <li class="nav-item"><a href="#panel-info1" class="nav-link scroll-to">Panel 1</a></li>
        <li class="nav-item"><a href="#panel-info2" class="nav-link scroll-to">Panel 2</a></li>
        <li class="nav-item"><a href="#panel-info3" class="nav-link scroll-to">Panel 3</a></li>
        <li class="nav-item"><a href="#panel-info4" class="nav-link scroll-to">Panel 4</a></li>
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
          [[BODY #1]]

        </div>
      </div>
		</div>
		<div id="panel-info2" class="full-panel panel--info2">
			<div class="content-wrap">
        <div class="content-block content-block--1">
        </div>
        <div class="content-block content-block--2">
          <h3>I like making things usuable, as well as pretty.</h3>       
        </div>
        <div class="content-block content-block--3"> 
          [[BODY #2]]
        </div>
      </div>
		</div>
		<div id="panel-info3" class="full-panel panel--info3">
      <div class="content-wrap">
        <div class="content-block content-block--1">
        </div>
        <div class="content-block content-block--2">
          <h3>I mainly design in code (HTML, CSS, JavaScript)</h3>        
        </div>
        <div class="content-block content-block--3"> 
          [[BODY #3]]
        </div>
      </div>
    </div>
    <div id="panel-info4" class="full-panel panel--info4">
      <div class="content-wrap">
        <div class="content-block content-block--1">
        </div>
        <div class="content-block content-block--2">
          <h3>But I also just code OR design. If that makes sense.</h3>        
        </div>
        <div class="content-block content-block--3"> 
          [[BODY #4]]
        </div>
      </div>
    </div>
    <div id="panel-info5" class="full-panel panel--info5">
      <div class="content-wrap">
        <div class="content-block content-block--1">
        </div>
        <div class="content-block content-block--2">
          <a href="about.php">Go to Next Page</a>        
        </div>
        <div class="content-block content-block--3"> 
          [[BODY #5]]
        </div>
      </div>
    </div>
		<?php include_once('dist/includes/loader.inc.php'); ?>
    </div>
  </div>
      
<?php include_once('dist/includes/footer.inc.php'); ?>