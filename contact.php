<?php

// HEADER
$pageName = 'Contact Stephen Fairbanks |';
$myPath = '';
$currentNav = "nav-cur--contact";

include_once('dist/includes/head.inc.php'); ?>

  <div id="barba-wrapper">
    
    <!-- BARBA CONTAINER -->
    <div class="barba-container">

      <!-- NAVBAR -->
    <?php include_once('dist/includes/nav.inc.php'); ?>

      <!-- INNER CONTAINER -->
      <div id="contact" class="inner-container page--contact">
        
        <div id="panel-info1" class="full-panel panel--info1">
        <div class="content-wrap">
          <div class="content-block content-block--1">          
            <h1 class="trans-letters"><span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></h1>
            <h2>Get in touch</h2>

            <ul id="sub-nav" class="nav" role="tablist">
            <li class="nav-item"><a href="#panel-info1" class="nav-link scroll-to">01</a></li>
            <li class="nav-item"><a href="#panel-info2" class="nav-link scroll-to">02</a></li>
            <li class="nav-item"><a href="#panel-info3" class="nav-link scroll-to">03</a></li>
            <li class="nav-item"><a href="<?php echo $root ?>/contact.php" class="nav-link scroll-to">></a></li>
          </ul>

          </div>
          <div class="content-block content-block--2">          
            <h3>Get your <strong>stalk</strong> on</h3>          
          </div>
          <div class="content-block content-block--3">

            <!-- CONTENT LIFT -->
            <div class="content--lift">
            
              <div class="block--header">

                <div class="block--header-img">
                  <img src="dist/images/contact-img.png" alt="It's Stephen Fairbanks - Designer &amp; Developer - Contact him!" />
                </div>

              </div>

              
              <div id="panel-info1" class="block--text">
                <h3>Contact info</h3>
                <p>
                  Like some weird internet shape-shifting thing, I can take many forms.</p>
                  <p>You can find me through one of the many links below, or find me through my main website: <a href="http://ghosthorses.co.uk" target="_blank" class="btn-link--alt">Ghosthorses.co.uk</a>
              </p>
            </div>
           
            <div id="panel-info2" class="block--list">
                <h3>Places that I exist</h3>
                <ul class="stat-list">
                  <li><span>Main portfolio: </span><a href="http://ghosthorses.co.uk/contact" target="_blank" class="btn-link--alt">ghosthorses</a></li>
                  <li><span>Twitter: </span><a href="http://twitter.com/nonbeliever" target="_blank" class="btn-link--alt">nonbeliever</a></li>
                  <li><span>CodePen: </span><a href="http://codepen.io/thathurtabit/" target="_blank" class="btn-link--alt">thathurtabit</a></li>
                  <li><span>GitHub: </span><a href="https://github.com/thathurtabit" target="_blank" class="btn-link--alt">thathurtabit</a></li>
                  <li><span>LinkedIn: </span><a href="http://www.linkedin.com/in/stephenfairbanks" target="_blank" class="btn-link--alt">stephenfairbanks</a></li>
                  <li><span>Facebook: </span><a href="https://www.facebook.com/ghosthorses" target="_blank" class="btn-link--alt">ghosthorses</a></li>
              </ul>
            </div>

            <div id="panel-info3" class="block--list">
                <h3>Personal projects</h3>
                <ul class="stat-list">
                  <li><a href="http://nonbeliever.co.uk" target="_blank" class="btn-link--alt">Nonbeliever</a></li>
                  <li><a href="http://fretmap.com" target="_blank" class="btn-link--alt">Fretmap</a></li>
                  <li><a href="http://qwota.co.uk" target="_blank" class="btn-link--alt">Qwota</a></li>
                  <li><a href="http://itwouldbeniceif.com" target="_blank" class="btn-link--alt">It Would Be Nice If</a></li>
                  <li><a href="http://whatisyourproblem.co.uk" target="_blank" class="btn-link--alt">What Is Your Problem?</a></li>
              </ul>
            </div>
            
            <div class="block--last">
              <a href="<?php echo $root; ?>/" class="btn--circle" title="Home Page">Home Page</a>
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