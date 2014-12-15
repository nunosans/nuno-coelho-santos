<?php
  $page='Project';
  $title='Sophie Westerlind';
  $description='Design and development for the graphic designer and
    illustrator';
  require_once('../../_header.php');
?>

<div class="project-nav">
  <h2><?php echo $title ?></h2>
  <span><?php echo $project_number ?> of <?php echo $projects_total ?></span>
  <span>
    <a href="../miti-ruangkritya/">Previous</a> &thinsp;/&thinsp;
    <a href="../fractures-from-anxiety/">Next</a>
  </span>
</div>

<?php require_once('../../_spinner.php'); ?>

<div class="project" id="sophie-westerlind">

  <img class="clear side" width="1008" height="917"
    src="/media/images/sophie-westerlind-screen.png">

</div>

<?php require_once('../../_footer.php'); ?>
