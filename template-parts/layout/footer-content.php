<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tw_vv
 */

?>

<footer>
    <div class="flex items-center gap-x-5 sm:flex-row flex-col gap-y-5 justify-between bg-color-4 py-3 relative lg:px-0 px-5">
        <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/splash-footer.svg" alt="" class="h-full absolute right-0 bottom-0 z-0 object-cover md:opacity-100 opacity-50">
        <div class="relative">
            <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/logo-black.svg" alt="" class="md:h-[140px] h-[100px]">
        </div>
        <div class="relative flex items-center">
            <p class="lg:text-d4 md:text-d2 text-d1 text-center font-thin lg:text-black text-white"><?php the_field('copyright', 'option'); ?></p>
        </div>
        <div class="flex gap-x-6 relative md:pr-24 items-center justify-center">

        <?php

        // Check rows exists.
        if( have_rows('social_media','option') ):

            // Loop through rows.
            while( have_rows('social_media','option') ) : the_row();

                // Load sub field value.
                $sub_link = get_sub_field('link');
                $sub_image = get_sub_field('icon');
                // Do something...
        ?>

            <a href="<?php echo esc_url($sub_link); ?>">
                <img src="<?php echo esc_url($sub_image['url']); ?>" alt="<?php echo esc_attr($sub_image['alt']); ?>" class="md:w-[36px] w-[25px]">
            </a>
        <?php
            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;

        ?>


            <!-- <a href="#">
                <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/social-media-3.svg" alt="fb" class="md:w-[36px] w-[25px]">
            </a>
            <a href="#">
                <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/social-media-2.svg" alt="instagram" class="md:w-[36px] w-[25px]">
            </a>
            <a href="#">
                <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/social-media-1.svg" alt="twitter" class="md:w-[36px] w-[25px]">
            </a> -->
        </div>
    </div>
</footer>
<div class="modal fixed top-1/2 left-1/2 max-w-[570px] w-full transform -translate-x-1/2 -translate-y-1/2 hidden z-50">
    <div class="bg-color-1 flex flex-col w-full px-10 py-14 relative rounded-xl drop-shadow-[0_0_20px_rgba(255,255,255,1)]">
        <div class="close cursor-pointer w-[27px] fill-white absolute right-[10px] top-[10px]">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
        </div>
        <h3 class="text-d4 text-center mb-10 font-head">Sign up for our Newsletter</h3>
        <form action="">
            <div class="mb-10">
                <input type="email" placeholder="Enter Your Email" class="w-full px-4 py-5 rounded-xl">
            </div>
            <div class="flex justify-center">
                <input type="submit" value="Submit" class="px-8 py-3 text-black text-d2 bg-white rounded-xl">
            </div>
        </form>
    </div>
</div>
