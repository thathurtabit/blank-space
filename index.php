<?php

// HEADER
$pageName = 'Stephen Fairbanks | ';
$myPath = '';
$currentNav = "nav-cur--home";

include_once('dist/includes/head.inc.php'); ?>

  <div id="barba-wrapper">
    <!-- BARBA CONTAINER -->
    <div class="barba-container">

    <!-- NAVBAR -->
    <?php include_once('dist/includes/nav.inc.php'); ?>

      <!-- INNER CONTAINER -->
      <div id="home" class="inner-container page--home">
        

  		<div id="panel-info1" class="full-panel panel--info1">
  			<div class="content-wrap">
          <div class="content-block content-block--1">          
            <h1 class="trans-letters"><span>'</span><span>S</span><span>u</span><span>p</span><span>?</span></h1>
            <h2>I'm Stephen</h2>

            <ul id="sub-nav" class="nav" role="tablist">
              <li class="nav-item"><a href="#panel-info1" class="nav-link scroll-to">01</a></li>
              <li class="nav-item"><a href="#panel-info2" class="nav-link scroll-to">02</a></li>
              <li class="nav-item"><a href="#panel-info3" class="nav-link scroll-to">03</a></li>
              <li class="nav-item"><a href="#panel-info4" class="nav-link scroll-to">04</a></li>
              <li class="nav-item"><a href="#panel-info5" class="nav-link scroll-to">05</a></li>
              <li class="nav-item"><a href="#panel-info6" class="nav-link scroll-to">06</a></li>
              <li class="nav-item"><a href="#panel-info7" class="nav-link scroll-to">07</a></li>
              <li class="nav-item"><a href="<?php echo $root ?>/about" title="About" class="nav-link scroll-to">></a></li>
            </ul>

          </div>
          <div class="content-block content-block--2">          
            <h3>I <strong>design</strong> <span class="color--brand amp">&amp;</span> <strong>build</strong> websites</h3>          
          </div>
          <div class="content-block content-block--3"> 
            
            <div class="skin-float"></div>

          </div>
        </div>



  		</div>
  		<div id="panel-info2" class="full-panel panel--info2">
  			<div class="content-wrap">
          <div class="content-block content-block--1 hidden-lg-down">
          </div>
          <div class="content-block content-block--2">
            <h3>I enjoy making things <strong>usable</strong>,<br />as well as <strong>pretty</strong></h3>       
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
  		</div>
  		<div id="panel-info3" class="full-panel panel--info3">
        <div class="content-wrap">
          <div class="content-block content-block--1 hidden-lg-down">
          </div>
          <div class="content-block content-block--2">
            <h3>I mainly design in <strong>code</strong> <small class="display--block">(HTML, CSS, JavaScript)</small></h3>        
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
      </div>
      <div id="panel-info4" class="full-panel panel--info4">
        <div class="content-wrap">
          <div class="content-block content-block--1 hidden-lg-down">
          </div>
          <div class="content-block content-block--2">
            <h3>I've been making websites<br />since <strong>1995</strong> <small class="display--block">(I'm old now)</small></h3>        
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
      </div>
      <div id="panel-info5" class="full-panel panel--info5">
        <div class="content-wrap">
          <div class="content-block content-block--1 hidden-lg-down">
          </div>
          <div class="content-block content-block--2">
            <!-- CONTENT LIFT -->
            <div class="content--lift">
              <h3>I've won some <a href="http://awwwards.com" title="Visit Awwwards.com" target="_blank"><strong>Awwwards</strong></a> in the past <small class="display--block">(Not to brag, OK, maybe a bit)</small></h3>
            </div>
            <!-- / CONTENT LIFT -->  
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
      </div>
      <div id="panel-info6" class="full-panel panel--info6">
        <div class="content-wrap">
          <div class="content-block content-block--1 hidden-lg-down">
          </div>
          <div class="content-block content-block--2">
            <h3><em class="important">!important</em> I like <strong>pizza</strong>,<br /> but I don't like <strong>spiders</strong> <small class="display--block">(Spider pizza is also a 'no')</small></h3>       
          </div>
          <div class="content-block content-block--3"> 
            <div class="skin-float"></div>
          </div>
        </div>
      </div>
      <div id="panel-info7" class="full-panel panel--info7 panel--last">
        <div class="content-wrap">
          <div class="content-block content-block--1 hidden-lg-down">
          </div>
          <div class="content-block content-block--2">
            <!-- CONTENT LIFT -->
            <div class="content--lift">
              <a href="<?php echo $root; ?>/about" class="btn--circle" title="Next Page">Next Page</a>
            </div>
            <!-- / CONTENT LIFT -->
          </div>
          <div class="content-block content-block--3 hidden-md-down"> 
            <div class="skin-float"></div>
          </div>
        </div>
      </div>
  		<?php include_once('dist/includes/loader.inc.php'); ?>
    </div><!-- / INNER CONTAINER -->
    </div><!-- / BARBA CONTAINER -->
  </div>
      
<?php include_once('dist/includes/footer.inc.php'); ?>