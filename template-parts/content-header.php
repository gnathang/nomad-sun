<!-- here we have our header -->
<!-- we make the header apply flexbox on large screens with the 
suffix '-l' in the class name with tachyons -->
<div class="flex-l">

	<!-- our header background image -->
	<!-- we make our header 60% width and then 100% width
					on large screens, as well as 50vh and 100vh height on small
					and large screens -->
	<div class="w-100 w-60-l vh-50 vh-100-l bg-center cover" 
			style="<?php nice_background('hero_image'); ?>"> 
	</div>

	<!-- our header content -->
	<!-- by default we'll make our header content block to have 
					100% width and then we change it to 40% at large screen sizes -->
	<div class="w-100 w-40-l flex items-center justify-center ph-3 ph4-l relative"> 
			
			<div class="tc">
					<!-- here we use absolute positioning on larger screens 
											to put the date in the top center. -->
							<p class="f6 archivo mt3 mb5 mb0-l ttu tracked absolute-l top-0-l left-0-l w-100-l pt5">
									<?php
									// in our funtions.php we have converted our date into a format 
									// that php can work with. Then we format it to be nice and readable.
									nice_date (get_field ('date'));
									?>
									<span class="line mt3"> </span>
							</p>

							<!-- standard wordpress data -->
							<!-- we change the typescape for larger screens and squish
							the line height a bit because of the bigger font size. -->
							<h1 class="f2 f1-l archivo mt0 mb2 ttu lh-title">
									<?php the_title(); ?>
							</h1>

							<p class="f2 f1-l tenor mt0 mb4 mb5-l ttu lh-title">
									<?php the_field('subhead'); ?>
							</p>

							<!-- specific to this component -->
							<p class="f4 cardo i measure center mv0">
									<?php the_sub_field('header_intro'); ?>
							</p>

			</div>
	</div>

</div>