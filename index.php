<?php 
/**
 * Main Template File
 * @package Elohim
 */

 get_header();
 
?>



<div id="adbyrd-billboard">
    <div class="mx-auto max-w-7xl px-2 h-screen relative">

        <div class="absolute left-[0] p-[15px] bottom-[0px] md:bottom-[300px] md:bg-[white] md:opacity-[.7] md:rounded-[5px] md:p-[30px] md:w-1/2">
            <h2 class="text-[3.75rem] leading-none tracking-[-.025em] font-bold m-0">We're changing the way people connect.</h2>
            <h3 class="">Cupidatat minim id magna ipsum sint dolor qui. Sunt sit in quis cupidatat mollit aute velit. Et labore commodo nulla aliqua proident mollit ullamco exercitation tempor. Sint aliqua anim nulla sunt mollit id pariatur in voluptate cillum. Eu voluptate tempor esse minim amet fugiat veniam occaecat aliqua.</h3>
        </div>

    </div>
</div>


<div id="adbyrd-md-video-container" class="invisible md:visible z-[-1] h-screen absolute top-0 left-0 bg-gray-50 w-full">
    <video autoplay loop muted class="absolute right-[0] top-[0] [@media(min-aspect-ratio:16/9)]:w-full [@media(min-aspect-ratio:16/9)]:h-auto [@media(max-aspect-ratio:16/9)]:w-auto [@media(max-aspect-ratio:16/9)]:h-full">
        <source src="http://localhost:8888/adbyrd/i.elohim/wp-content/uploads/2023/11/adbyrd_billboard-001__noline-pos.mp4" type="video/mp4">
    </video>
</div>

<div id="adbyrd-sm-video-container" class="visible md:invisible z-[-1] h-screen absolute top-0 left-0 w-full">
    <div class="bg-[white] absolute top-[0] bottom-[0] w-full h-screen opacity-[.7] z-[1]"></div>
    <video autoplay loop muted class="w-[1920px] block max-w-[1920px] absolute -left-[1000px]">
        <source src="http://localhost:8888/adbyrd/i.elohim/wp-content/uploads/2023/11/adbyrd_billboard-001__noline-pos.mp4" type="video/mp4">
    </video>
</div>


<?php get_footer(); ?>