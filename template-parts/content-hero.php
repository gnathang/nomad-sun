
<!-- using the_permalink () gives us a link to the post -->

<!-- <h1>

	<a href="<?php the_permalink ();?>">
		Check out <?php the_title (); ?>!
	</a>

</h1> -->

<!-- here we use an inline style attribute to attach 
	our hero image as a CSS background diretly on to the element.  -->

	<!-- here, using tachyons, we have a minimum height of 100%, apply background cofer, apply fledbox
		with align and justify.  -->
    <a class="db link hero min-vh-100 cover bg-center flex items-center justify-center" 
		style="<?php nice_background ('hero_image');?>" href="<?php the_permalink();?>">


		<div class="hero-content white tc">

			<!-- our location title -->
			<!-- here we make it bold, have 0 margin and uppercase letters  -->
			<h1 class="hero-heading archivo b f2 f1-l mt0 mb2 ttu lh-title"><?php the_title(); ?> </h1>

			<!-- our subheading -->
			<?php if( get_field('subhead') ): ?>
				<!-- here we do a similar thing but make margin bottom of 6px. -->
    			<p class="hero-subhead tenor f2 f1-l mb5 mb6-l mt0 ttu lh-title"><?php the_field('subhead'); ?></p>
			<?php endif; ?>
			
			<!-- our formatted date -->
			<?php if( get_field('date') ): ?>

				<p class="archivo f6 bold ma0 white ttu tracked">
					<?php
					// here we convert our date into a format 
					// that php can work with. Then we format it to be nice and readable.
					nice_date (get_field ('date'));
					?>
				</p>	

			<?php endif; ?>

		</div>

	</a>