<div class="grid container center ph4-l mb5-l">

  <?php 
    global $hero_post;
    $args = array(
      'posts_per_page' => 4,
      // this will make sure it doesn’t show us the hero post
      'post__not_in' => array($hero_post),
      'orderby' => 'rand',
    );

    $the_query = new WP_Query($args);
    if ($the_query->have_posts()): while ($the_query->have_posts()):     $the_query->the_post(); 
  ?>

    <a class="navigation-link db link" href="<?php the_permalink();?>">
      <div class="aspect-ratio">
        <div class="aspect-ratio--object cover bg-center flex items-center justify-center " style="<?php nice_background('hero_image');?>">
          <p class="archivo white ma0 ttu tracked f5 f4-l ph4 tc lh-title">
            <?php the_title();?>
          </p>
        </div>
      </div>
    </a>

  <?php endwhile; endif; ?>

</div>