<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tw_vv
 */

?>

<div class="bg-color-1 py-4 text-center text-d2 lg:static fixed w-full z-40"><p class="inline"><?php the_field('announcement_text', 'option'); ?></p></div>
<header  id="masthead" class="w-full lg:pb-0 pb-[178px] ">
	<div class="mobile-menu hidden fixed w-full h-full top-[178px] left-0 bg-black z-40">
		<div class="flex flex-col font-head text-d2 text-white">
			<?php
				$nav = wp_get_menu_array('Menu-1');
				foreach($nav as $n){
			?>
				<a href="<?= $n['url']; ?>" class="p-5 text-center"><?= $n['title']; ?></a>
			<?php } ?>
		</div>
		
	</div>
	<div class="mobile-nav fixed top-[68px] z-40 lg:hidden flex justify-between bg-no-repeat bg-[length:auto_100%] bg-left w-full bg-black" style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/splash-header.svg')">
		<div class="flex items-center">
			<a href="#" class="logo p-5">
				<img src="<?= esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="logo" class="h-[70px] ">
			</a>
		</div>
		<div class="mobile-burger p-5 close fill-white flex items-center cursor-pointer">
			<svg class="h-[50px] w-[50px] burger" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/></svg>
			<svg  class="h-[50px] w-[50px] xmark hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
		</div>
	</div>
	<nav class="lg:flex hidden justify-between bg-no-repeat bg-contain w-full bg-black" style="background-image:url('<?php bloginfo( 'wpurl' ); ?>/wp-content/uploads/2022/05/splash-header.svg')">
		<div class="flex items-center">
			<a href="/" class="logo px-5">
				<img src="<?= esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="logo" class="h-[130px] ">
			</a>
		</div>
		<div class="flex font-head text-d2 text-white">
			<?php
				$nav = wp_get_menu_array('Menu-1');
				foreach($nav as $n){
			?>
				<a href="<?= $n['url']; ?>" class="px-14 py-16"><?= $n['title']; ?></a>
			<?php } ?>
		</div>
	</nav>
</header>

		