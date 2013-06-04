<?
  $title='Kent & Curwen';
  $description='Development of the Kent & Curwen website';
  require_once('../../header.inc.php');
?>

<div class="project-nav">
  <h2><? echo $title ?></h2>
  <span><? echo $projects_total ?>の<? echo $project_number ?></span>
  <span>
    <a href="../stylize-d/">前</a> &thinsp;/&thinsp;
    <a href="../keepon/">次</a>
  </span>
</div>

<div class="project" id="kent-and-curwen">

  <img class="full" width="1264" height="902" src="/media/images/kent-and-curwen-on-an-ipad.jpg">

  <img class="clear side" width="1264" height="902" src="/media/images/kent-and-curwen-iphone.jpg">


  <div class="txt">
    <h2>Kent &amp; Curwen</h2>
    <h6>Front-end Development</h6>
    <p>
      Kent &amp; Curwen is a British Gentleman's Club Sports wear brand established
      in 1926. As part of their brand refresh and campaign for a new collection, I
      built the website designed by Jasmine Lau and Douglas Potts and adjusted it
      to work as a responsive website. The relaunch of Kent & Curwen seeks to present
      the brand with it's original and classic style, but present that in a modern
      and updated format. That is the main reason why the website assumed a minimal
      look and feel with interesting scroll effects and complex animations.
    </p>
  </div>

  <div class="clear txt">
    <p>
      The logo on the landing page was animated using CSS3 keyframe animations.
      JavaScript was an option for animating this title, but in despite of a better
      support, CSS3 results in a smoother and quicker animation.
    </p>
    <p class="icon-globe-1">
      <a href="http://v1.kentandcurwen.co.uk/" target="_blank">kentandcurwen.co.uk</a>
    </p>
  </div>
  <img class="side" width="1264" height="481" src="/media/images/kent-and-curwen-logo-animation.gif">

  <img class="site-plan" width="1166" height="4056" src="/media/images/kent-and-curwen-website-plan.jpg">

</div>

<? require_once('../../footer.inc.php'); ?>
