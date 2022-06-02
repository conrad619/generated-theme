<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tw_vv
 */

get_header();
?>

    <main>
        <div class="bg-cover bg-no-repeat lg:pt-44 pt-14 lg:px-36 px-8 md:pb-[280px] pb-28" style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/home-banner.png')">
            <p class="lg:text-d5 text-d4 text-white font-head lg:mb-64 mb-14 lg:max-w-[780px] lg:text-left text-center">
<!--                 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero  -->
				<?php the_field('banner_text'); ?>
            </p>
            <div class="flex md:flex-row flex-col gap-y-5 px-5 gap-x-10 justify-center">
				<?php 
				$link = get_field('buy_tickets_button');
				if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				$link_url = $link_url ? $link_url : '#';
				?>
				 	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="bg-color-2 px-12 py-3 text-center rounded-xl font-thin text-d3">
                    <?php echo esc_html( $link_title ); ?>
                </a>
				<?php endif; ?>
               <?php 
				$link = get_field('volunteer_button');
				if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				$link_url = $link_url ? $link_url : '#';
				?>
				 	<a href="<?php echo esc_url( $link_url ); ?>" <?php echo esc_attr( $link_target ); ?> class="bg-white px-12 py-3 text-center rounded-xl font-thin text-d3">
                    <?php echo esc_html( $link_title ); ?>
                </a>
				<?php endif; ?>
                
            </div>
        </div>
        <div>
            <div class="py-11 bg-gradient-to-b from-[rgba(0,0,0,0.08)] absolute w-full top-0 left-0"></div>
            <h2 class="font-thin text-d4 py-11 mb-12 text-center">PARTNERS</h2>
            <div class="flex flex-wrap gap-y-7 md:pb-28 pb-16 justify-center mx-7">
                <?php

					// Check rows exists.
					if( have_rows('partners') ):

						// Loop through rows.
						while( have_rows('partners') ) : the_row();

							// Load sub field value.
							$sub_image = get_sub_field('partner_image');
							$sub_link = get_sub_field('partner_link');
							// Do something...
				?>
					<?php if($sub_link): ?>
						<a href="<?php echo esc_url($sub_link); ?>" class="md:w-auto sm:w-1/2 w-full px-5">
							<img src="<?php echo esc_url($sub_image['url']); ?>" alt="<?php echo esc_attr($sub_image['alt']); ?>" class="max-w-[350px] mx-auto w-full">
						</a>
					<?php else: ?>
						<div class="md:w-auto sm:w-1/2 w-full px-5">
							<img src="<?php echo esc_url($sub_image['url']); ?>" alt="<?php echo esc_attr($sub_image['alt']); ?>" class="max-w-[350px] mx-auto w-full">
					</div>
					<?php endif; ?>

				<?php
						// End loop.
						endwhile;

					// No value.
					else :
						// Do something...
					endif;
				
				?>


            </div>
        </div>
        <div class="bg-color-3 relative">
            <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/upcoming-splash.svg" alt="" class="max-h-[439px] absolute right-0 bottom-0 z-0">
            <div class="px-5 text-center bg-gradient-to-t from-[rgba(0,0,0,0.08)] py-11 relative">
                <h2 class="text-d4 inline">UPCOMING EVENTS</h2>
            </div>
            <div class="mx-auto py-12 relative md:px-auto px-5">
				<ul class="flex flex-col gap-y-7 items-center">
				<?php

					// Check rows exists.
					if( have_rows('upcoming_events') ):

						// Loop through rows.
						while( have_rows('upcoming_events') ) : the_row();

							// Load sub field value.
							$sub_text = get_sub_field('event_text');
							$sub_link = get_sub_field('event_link');
							$sub_link = $sub_link ? $sub_link : '#';
							// Do something...
				?>
					<li class="bg-black text-white font-thin  rounded-xl max-w-fit">
                        <a href="<?php $sub_link ?>" class="px-9 py-6 block md:text-d4 text-d3">
                            <?= $sub_text ?></a>
                    </li>
				<?php
						// End loop.
						endwhile;

					// No value.
					else :
						// Do something...
					endif;
				
				?>
                </ul>
				
				
            </div>
        </div>
        <div class="bg-black text-white relative pt-16 pb-6">
            <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/images/svg/splash-1.svg" alt="" class="max-h-[439px] absolute left-0 bottom-0 z-0">
            <div class="relative">
                <h2 class="text-d5 pb-7 font-thin text-center">TEAM</h2>



				<?php

					// Check rows exists.
					if( have_rows('team') ):
                        $loop = 1;

						// Loop through rows.
						while( have_rows('team') ) : the_row();
                            
							// Load sub field value.
							$team_name = get_sub_field('team_name');
							$team_image = get_sub_field('team_image');
							$team_description = get_sub_field('team_description');
							// Do something...
				?>
                            <div class="flex lg:flex-row <?php if($loop % 2 == 0){ echo 'lg:ml-20 lg:flex-row-reverse lg:mr-44'; } else { echo 'lg:ml-44'; } ?> flex-col lg:mr-20 mx-8 mb-5 items-center">
                                <div class="w-full max-w-[400px] flex-shrink-0">
                                    <img src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_image['alt']); ?>">
                                </div>
                                <div class="mt-16">
                                    <h3 class="text-d4 <?php if($loop % 2 == 0){ echo 'lg:text-left'; }else{ echo 'lg:text-right'; } ?> text-center font-thin"><?= $team_name ?></h3>
                                    <hr class="mb-7 <?php if($loop % 2 == 0){ echo 'lg:-mr-10'; }else{ echo 'lg:-ml-10'; } ?>  ">
                                    <div class="text-d2 <?php if($loop % 2 == 0){ echo 'lg:text-left'; }else{ echo 'lg:text-right'; } ?> text-center">
                                        <?php echo $team_description ?>
                                    </div>
                                </div>
                            </div>
				<?php
						// End loop.
                        $loop += 1;
						endwhile;

					// No value.
					else :
						// Do something...
					endif;
				
				?>




            </div>
        </div>
    </main>

<?php
get_sidebar();
get_footer();
