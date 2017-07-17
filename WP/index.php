<?php
  get_header();
?>
<div class="site__container">
  <div class="subinfo">
    <div class="breadcrumb">
      <ul>
        <li><a href="#">home</a></li>
        <li>/ </li>
        <li><a href="#"> projecten</a></li>
        <li>/ </li>
        <li><a href="#"> nieuw project</a></li>
      </ul>
    </div>
    <div class="categorieen">
      <ul>
        <li><a href="#">nieuwbouw</a></li>
        <li><a href="#">verbouwing</a></li>
        <li><a href="#">interieur</a></li>
        <li><a href="#">meubel</a></li>
      </ul>
    </div>
  </div>
<section class="portfolio">

  <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="portfolio__item">
    <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail(); ?>">
      <div class="portfolio__item--info">
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
      </div>
    </a>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</section>


<?php
  get_footer();
?>
