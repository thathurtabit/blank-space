<?php
// NOTE: You'll need to change this on the live server, don't add trailing slash "/"

$root = "http://localhost:3000/blank-space";

?>


<nav class="navbar navbar-toggleable-sm fixed-top <?php echo $currentNav ?>">
  <a class="navbar-brand nav-link mr-auto btn--slide-hover" href="<?php echo $root ?>" title="<?php echo $websiteName; ?>"><h1><?php echo $websiteName; ?></h1></a>

  <div class="navbar-wrap">
    <ul class="navbar-nav">
      <li class="nav-item nav-about">
        <a class="nav-link btn--slide-hover" href="<?php echo $root ?>/about.php" title="About">About</a>
      </li>
      <li class="nav-item nav-contact">
        <a class="nav-link btn--slide-hover" href="<?php echo $root ?>/contact.php" title="Contact">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>