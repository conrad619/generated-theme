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
    <div class="bg-cover bg-no-repeat bg-center lg:px-36 px-8 py-40" style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/home-banner.png')">
        <p class="lg:text-d5 text-d4 text-white font-head text-center uppercase">
            <?php single_post_title(); ?>
        </p>
    </div>
    <div class="bg-color-3 relative px-5">
        <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/upcoming-left.svg" alt="" class="max-h-[439px] absolute left-0 bottom-0 z-0">
        <div class="mx-auto py-28 relative md:px-auto">
            <ul class="flex flex-col gap-y-7 items-center">


                <?php

                // Check rows exists.
                if( have_rows('tickets') ):

                    // Loop through rows.
                    while( have_rows('tickets') ) : the_row();

                        // Load sub field value.
                        $sub_label = get_sub_field('ticket_label');
                        $sub_link = get_sub_field('ticket_link');
                        // Do something...
                ?>
                
                    <li class=" font-thin max-w-fit flex">
                        <div class="md:px-9 md:py-6 p-5 block md:text-d4 md:mr-12 mr-5 text-d2 bg-white text-black rounded-xl">
                            <?= $sub_label ?>
                        </div>
                        <a href="<?php echo esc_url($sub_link); ?>" class="bg-black text-white p-5 rounded-xl md:text-d4 text-d2 flex items-center">BUY</a>
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
    <div class="relative md:px-24 px-5 py-40">
        <div class="py-11 bg-gradient-to-b from-[rgba(0,0,0,0.08)] absolute w-full top-0 left-0"></div>
        <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/splash-2.svg" alt="" class="h-[372px] absolute top-0 right-0 z-0">
        <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/splash-1.svg" alt="" class="h-[372px] absolute bottom-0 left-0 z-0">
        <div class="grid md:grid-cols-2 grid-cols-1 relative z-10 md:gap-y-8 md:gap-x-20 gap-5">



            <?php

            // Check rows exists.
            if( have_rows('people') ):

                $loop=1;
                // Loop through rows.
                while( have_rows('people') ) : the_row();

                    // Load sub field value.
                    $sub_name = get_sub_field('person_name');
                    $sub_image = get_sub_field('person_image');
                    // Do something...
            ?>

                <?php if($loop % 2 == 0){ ?>
                    <div class="relative flex flex-col  md:items-start items-center">
                        <img src="<?php echo esc_url($sub_image['url']); ?>" alt="<?php echo esc_attr($sub_image['alt']); ?>" class="max-w-[488px] w-full">
                        <div class="bottom-[12%] lg:pl-[42%] w-full absolute">
                            <div class="bg-color-2 max-w-[485px] w-full lg:text-d4 text-d2 rounded-xl text-center lg:py-6 lg:px-5 p-3 z-10 mx-auto"><?= $sub_name; ?></div>
                        </div>
                    </div>
                    
                <?php 
                    }else{
                ?>
                    <div class="relative flex flex-col md:items-end items-center">
                        <img src="<?php echo esc_url($sub_image['url']); ?>" alt="<?php echo esc_attr($sub_image['alt']); ?>" class="max-w-[488px] w-full">
                        <div class="bottom-[12%] lg:pr-[42%] w-full absolute">
                            <div class="bg-color-2  max-w-[485px] w-full lg:text-d4 text-d2 rounded-xl text-center lg:py-6 lg:px-5 p-3 z-10 mx-auto"><?= $sub_name; ?></div>
                        </div>
                    </div>
                <?php } ?>

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
