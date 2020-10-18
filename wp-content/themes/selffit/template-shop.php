<?php 
/* 
Template Name: Shop Page
*/

get_header(); ?>
<div class="container-fluid py-5 storePage">

  
<h1><?php the_title()?></h1>

<?php 
  if(have_posts()){
    while(have_posts()){
      the_post();
      the_content();
    }
}?>

</div>

<?php 
	require_once('Partials/rellinks.php');
get_footer(); ?>