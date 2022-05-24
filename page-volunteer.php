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
    <div class="relative px-5">
        <div class="py-11 bg-gradient-to-b from-[rgba(0,0,0,0.08)] absolute w-full top-0 left-0"></div>
        <div class="text-center pt-11 relative">
            <h2 class="text-d4 inline">SIGN UP</h2>
        </div>
        <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/upcoming-left.svg" alt="" class="max-h-[439px] absolute left-0 bottom-0 z-0">
        <div class="mx-auto py-20 relative md:px-auto">
            <ul class="flex flex-col gap-y-7 items-center mb-20">



            <?php

            // Check rows exists.
            if( have_rows('signup') ):

                // Loop through rows.
                while( have_rows('signup') ) : the_row();

                    // Load sub field value.
                    $sub_label = get_sub_field('label');
                    $sub_link = get_sub_field('link');
                    // Do something...
            ?>

                <li class="font-thin flex w-full justify-center">
                    <div class="md:px-9 md:py-6 p-5 block md:text-d4 md:mr-12 mr-5 text-d2 bg-black text-white rounded-xl max-w-[662px] w-full text-center uppercase">
                        <?= $sub_label ?>
                    </div>
                    <a href="<?php echo esc_url($sub_link); ?>" class="bg-color-2 text-black p-5 rounded-xl md:text-d4 text-d2 max-w-[349px] w-full text-center">APPLY HERE</a>
                </li>
            <?php
                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif;

            ?>








                <!-- <li class="font-thin flex w-full justify-center">
                    <a href="#" class="md:px-9 md:py-6 p-5 block md:text-d4 md:mr-12 mr-5 text-d2 bg-black text-white rounded-xl max-w-[662px] w-full text-center">
                        BECOME A VOLUNTEER</a>
                    <a href="#" class="bg-color-2 text-black p-5 rounded-xl md:text-d4 text-d2 max-w-[349px] w-full text-center">APPLY HERE</a>
                </li>
                <li class="font-thin flex w-full justify-center">
                    <a href="#" class="md:px-9 md:py-6 p-5 block md:text-d4 md:mr-12 mr-5 text-d2 bg-black text-white rounded-xl max-w-[662px] w-full text-center">
                        BECOME AN ARTIST</a>
                    <a href="#" class="bg-color-2 text-black p-5 rounded-xl md:text-d4 text-d2 max-w-[349px] w-full text-center">APPLY HERE</a>
                </li> -->
                
            </ul>
            <p class="text-d3 text-center lg:text-black text-color-3">or Email us at: <a href="mailto:VVUnderground2020@gmail.com">VVUnderground2020@gmail.com</a> </p>
        </div>
    </div>
    <div class="relative md:px-24 px-5 py-40">
        <div class="py-11 bg-gradient-to-b from-[rgba(0,0,0,0.08)] absolute w-full top-0 left-0"></div>
        <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/splash-2.svg" alt="" class="h-[372px] absolute top-0 right-0 z-0">
        <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/splash-1.svg" alt="" class="h-[372px] absolute bottom-0 left-0 z-0">
        <div class="flex flex-col">





        <?php

        // Check rows exists.
        if( have_rows('applicants') ):

            $loop=1;
            // Loop through rows.
            while( have_rows('applicants') ) : the_row();

                // Load sub field value.
                $sub_name = get_sub_field('applicant_name');
                $sub_role = get_sub_field('applicant_role');
                $sub_image = get_sub_field('applicant_image');
                // Do something...
        ?>

            <?php if($loop % 2 == 0){ ?>
                <div class="relative flex mb-5">
                    <div class="md:w-fit w-1/2">
                        <img src="<?php echo esc_url($sub_image['url']); ?>" alt="<?php echo esc_attr($sub_image['alt']); ?>" class="max-w-[414px] w-full">
                    </div>
                    <div class="flex-grow">
                        <p class="md:text-d4 text-d3 text-right mt-9"><?= $sub_name; ?></p>
                        <hr class="mb-4 border-black border-2 -ml-10">
                        <p class="md:text-d4 text-d3 text-right"><?= $sub_role; ?></p>
                    </div>
                </div>
                
            <?php 
                }else{
            ?>
                <div class="relative flex flex-row-reverse mb-5">
                    <div class="md:w-fit w-1/2">
                        <img src="<?php echo esc_url($sub_image['url']); ?>" alt="<?php echo esc_attr($sub_image['alt']); ?>" class="max-w-[414px] w-full">
                    </div>
                    <div class="flex-grow">
                        <p class="md:text-d4 text-d3 text-left mt-9"><?= $sub_name; ?></p>
                        <hr class="mb-4 border-black border-2 -mr-10">
                        <p class="md:text-d4 text-d3 text-left"><?= $sub_role; ?></p>
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






            <!-- <div class="relative flex mb-5">
                <div class="md:w-fit w-1/2">
                    <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/circle.svg" alt="" class="max-w-[414px] w-full">
                </div>
                <div class="flex-grow">
                    <p class="md:text-d4 text-d3 text-right mt-9">Justine Perez</p>
                    <hr class="mb-4 border-black border-2 -ml-10">
                    <p class="md:text-d4 text-d3 text-right">Volunteer</p>
                </div>
            </div>
            <div class="relative flex flex-row-reverse mb-5">
                <div class="md:w-fit w-1/2">
                    <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/circle.svg" alt="" class="max-w-[414px] w-full">
                </div>
                <div class="flex-grow">
                    <p class="md:text-d4 text-d3 text-left mt-9">Justine Perez</p>
                    <hr class="mb-4 border-black border-2 -mr-10">
                    <p class="md:text-d4 text-d3 text-left">Volunteer</p>
                </div>
            </div>
            <div class="relative flex mb-5">
                <div class="md:w-fit w-1/2">
                    <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/circle.svg" alt="" class="max-w-[414px] w-full">
                </div>
                <div class="flex-grow">
                    <p class="md:text-d4 text-d3 text-right mt-9">Justine Perez</p>
                    <hr class="mb-4 border-black border-2 -ml-10">
                    <p class="md:text-d4 text-d3 text-right">Volunteer</p>
                </div>
            </div>
            <div class="relative flex flex-row-reverse mb-5">
                <div class="md:w-fit w-1/2">
                    <img src="<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/circle.svg" alt="" class="max-w-[414px] w-full">
                </div>
                <div class="flex-grow">
                    <p class="md:text-d4 text-d3 text-left mt-9">Justine Perez</p>
                    <hr class="mb-4 border-black border-2 -mr-10">
                    <p class="md:text-d4 text-d3 text-left">Volunteer</p>
                </div>
            </div> -->



        </div>
    </div>
</main>

<?php
get_sidebar();
get_footer();
