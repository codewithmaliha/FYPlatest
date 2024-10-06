@extends('web.index')
@section('main-container')

    <div class="bg-parallax-text">
        <div>Our construction and total service offering lets us deliver projects in their entirety. We can lead
            projects all the way from the initial concept phase to long-term asset management, operations and
            maintenance</div>
        <div>Our construction and total service offering lets us deliver projects in their entirety. We can lead
            projects all the way from the initial concept phase to long-term asset management, operations and
            maintenance</div>
    </div>
    <main class="l-main row">
        <div class="main large-12 small-12 columns">
            <article>
                <div class="body field clearfix ">
                    <section class="wpb-content-wrapper">
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1568850484830 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='' data-heighttablet='150'
                                            data-heightdesktop='230' style='height:230px'></div>
                                        <div class="wd-heading text-center  " style="max-width: 100%">
                                            <h2 style="margin:0;font-size:60px;color:#ffffff;" class="title_b"
                                                data-text="Find your construction machines and more!"> Rent or Buy.
                                            </h2>
                                            <p style="font-size:18px;color:#ffffff;" class="sub_title_b"> Find
                                                your
                                                construction machines and more!</p>
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='30' data-heighttablet=''
                                            data-heightdesktop='40' style='height:40px'></div>
                                        <script type="text/javascript" src="{{ asset('frontend/cdn.jsdelivr.net/momentjs/latest/moment.min.js') }}"></script>
                                        <script type="text/javascript"
                                            src="{{ asset('frontend/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js') }}"></script>
                                        <link rel="stylesheet" type="text/css"
                                            href="{{ asset('frontend/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css') }}" />
                                        <script type="text/javascript">
                                            jQuery(document).ready(function($) {
                                                "use strict";
                                                var currentDate = moment().format("MM/DD/YYYY");
                                                var form_input = $('input[name="daterange"]');
                                                if (form_input.length) {
                                                    $('input[name="daterange"]').daterangepicker({
                                                        opens: 'left',
                                                        minDate: currentDate
                                                    }, function(start, end, label) {
                                                        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' +
                                                            end.format('YYYY-MM-DD'));
                                                    });
                                                }
                                            });
                                        </script>
                                        <div class="brands_form  one_line devia-anim item-target"
                                            data-devia-animate='{"triggerHandler":"inview","animationTarget":".item-target","duration":"1200","delay":"150",
"initValues":{"y":41,"z":-118,"rotateX":-65,"opacity":0},
"animations":{"y":0,"z":0,"rotateX":0,"opacity":1,"delay":2,"ease":"easeOutQuint"}}'>
                                            <div class='html-before item-target'></div>
                                            <form role="search" method="get"
                                                action="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/shop/">
                                                <ul class="inline-list">
                                                    <li class="item-target"> <input type="hidden" name="post_type"
                                                            value="product"> <select name="s" id="product_name">
                                                            <option value=""></option>
                                                        </select></li>
                                                    <li class="item-target"> <select name='product-category' id='term'
                                                            class='product_categories'>
                                                            <option value='-1'>Select category</option>
                                                            <option class="level-0" value="boom-lift">Boom
                                                                Lift  (8)
                                                            </option>
                                                            <option class="level-1" value="articulating-boom-lift">
                                                                Articulating Boom Lift  (5)</option>
                                                            <option class="level-1" value="telescopic-boom-lift">
                                                                Telescopic Boom Lift  (3)</option>
                                                            <option class="level-0" value="scissor-lift">Scissor
                                                                Lift  (7)</option>
                                                            <option class="level-1" value="electric-scissor-lift">
                                                                Electric Scissor Lift  (5)</option>
                                                            <option class="level-1" value="rough-terrain-scissor-lift">
                                                                Rough Terrain
                                                                Scissor Lift  (4)</option>
                                                            <option class="level-0" value="forklift">Forklift  (5)
                                                            </option>
                                                            <option class="level-1" value="industrial-forklift">
                                                                Industrial Forklift  (0)</option>
                                                            <option class="level-1" value="pallet-jack">   Pallet
                                                                Jack  (1)</option>
                                                            <option class="level-1" value="telehandler">
                                                                Telehandler  (2)</option>
                                                            <option class="level-0" value="manlift">Manlift  (1)
                                                            </option>
                                                            <option class="level-1" value="self-propelled-manlift">
                                                                Self Propelled Manlift  (1)</option>
                                                            <option class="level-0" value="earthmoving-equipment">
                                                                Earthmoving Equipment  (22)</option>
                                                            <option class="level-1" value="backhoe-loader">
                                                                Backhoe Loader  (1)</option>
                                                            <option class="level-1" value="bulldozer">
                                                                Bulldozer  (6)</option>
                                                            <option class="level-1" value="mini-excavator">   Mini
                                                                Excavator  (7)</option>
                                                            <option class="level-1" value="excavator">
                                                                Excavator  (7)</option>
                                                            <option class="level-0" value="compaction-equipment">
                                                                Compaction Equipment  (9)</option>
                                                            <option class="level-1" value="double-drum-roller">
                                                                Double Drum Roller  (4)</option>
                                                            <option class="level-1" value="single-drum-roller">
                                                                Single Drum Roller  (6)</option>
                                                            <option class="level-0" value="construction-site-services">
                                                                Construction
                                                                Site
                                                                Services  (10)</option>
                                                            <option class="level-1" value="dumpster">
                                                                Dumpster  (6)</option>
                                                            <option class="level-1" value="storage-container">
                                                                Storage Container  (7)</option>
                                                            <option class="level-1" value="towable-light-tower">
                                                                Towable Light Tower  (5)</option>
                                                            <option class="level-0" value="carry-deck-crane">Carry
                                                                Deck Crane  (11)</option>
                                                            <option class="level-1" value="2-5-9-ton">   2.5 – 9
                                                                Ton  (6)</option>
                                                            <option class="level-1" value="10-30-ton">   10 – 30
                                                                Ton  (5)</option>
                                                        </select></li>
                                                    <li class="daterange item-target"> <input type="text"
                                                            name="daterange" /></li>
                                                    <li class="item-target">
                                                        <div class="submit-button item-target"> <input type="submit"
                                                                class="button" value="Search">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </form>
                                            <div class='html-after item-target'></div>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element  vc_custom_1562340542408">
                                            <div class="wpb_wrapper">
                                                <p style="text-align: center; color: #fff;">Or list all available
                                                    equipment in <a href="shop/index.html">marketplace.</a></p>
                                            </div>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="30" data-heighttablet="130px"
                                            data-heightdesktop="200" style="height: 200px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='50' data-heighttablet='50'
                                            data-heightdesktop='100' style='height:100px'></div>
                                        <div class="wd-heading text-left  " style="max-width: 100%">
                                            <h2 style="margin:0;font-weight:800;" class="title_a"
                                                data-text="Let's Choose"> Categories</h2>
                                            <p style="" class="sub_title_a"> Let's Choose</p>
                                            <hr class='hr_a' style=' margin: 10px;' />
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='20' data-heighttablet='20'
                                            data-heightdesktop='60' style='height:60px'></div>

                                             {{-- Step #1 For Grid Pick Nav --}}

                                                <nav class="gridlist-toggle"><a href="#" id="show_grid" title="Grid view"><span
                                                    class="dashicons dashicons-grid-view"></span> <em>Grid view</em></a><a
                                                    href="#" id="show_list" class="active" title="List view"><span
                                                    class="dashicons dashicons-exerpt-view"></span> <em>List view</em></a>
                                                </nav>
                                                {{-- Step #1 For Grid Pick Nav --}}

                                        <div class="woocommerce columns-4">
                                            <ul class="products columns-4 grid">
                                                @foreach ($category as $item)
                                                    <li class="product-category product first"> <a
                                                            aria-label="Visit product category Scissor Lift"
                                                            href="{{url('/post-category')}}"><img
                                                                fetchpriority="high" decoding="async"
                                                                src="{{ asset($item->image) }}"
                                                                alt="{{$item->slug}}" width="700" height="700" />
                                                            <h2 class="woocommerce-loop-category__title"> {{ $item->name }}
                                                                <mark class="count">(7)</mark>
                                                            </h2>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="10" data-heighttablet="25"
                                            data-heightdesktop="25" style="height: 25px;"></div>
                                        <div class="wd_empty_space" data-heightmobile="100" data-heighttablet="200"
                                            data-heightdesktop="200" style="height: 200px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid moved-box moved-box--left">
                            <div class="wpb_column vc_column_container vc_col-sm-7">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='0' data-heighttablet='0'
                                            data-heightdesktop='0' style='height:0px'></div>
                                        <div class="wd-heading text-left  " style="max-width: 100%">
                                            <h5 style="font-weight:500;font-size:14px;color:#fdb900;text-transform:Uppercase;letter-spacing:1.4px;"
                                                class="sub_title_b" data-text="SOME FEATURES AND"> SOME FEATURES
                                                AND
                                            </h5>
                                            <h2 style="margin:0;font-weight:800;" class="title_b"> The Benefits of
                                                using backhoe today</h2>
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='5' data-heighttablet='5'
                                            data-heightdesktop='5' style='height:5px'>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>We are committed to providing our customers with super
                                                    exceptional service while offering our employees the best
                                                    training and a working environment in which they can excel best
                                                    of all place for more than a half century.</p>
                                                <p>This company focus has been in place for more than a half
                                                    century. We are committed to providing our customers with
                                                    exceptional service while offering our employees the best
                                                    training best of all and a working environment.</p>
                                            </div>
                                        </div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1562158357343">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <h5>Building companies</h5>
                                                                <p class="p-small">Banks & Financial Institutions
                                                                    face a challenging & dynamic environment with…
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <h5>Building companies</h5>
                                                                <p class="p-small">Banks & Financial Institutions
                                                                    face a challenging & dynamic environment with…
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wd-video-box-bg wpb_video_widget wpb_content_element vc_clearfix   vc_custom_1570730699154 vc_video-aspect-ratio- vc_video-el-width- vc_video-align-"
                                            style="background: url() center center no-repeat;
background-size: cover">
                                            <div class="wpb_wrapper">
                                                <div class="wd-video-box" style="min-height: 100px; min-width: 100px;">
                                                    <div class="full_screen_video_wrapper  text-left"><a href="#"
                                                            id="play" data-toggle="modal668701fb99aca"
                                                            data-reveal-id="modal668701fb99aca"
                                                            class="play popup1_open"><i
                                                                class="fa fa-play fa-1x"></i><span>Watch video
                                                                tour
                                                                5 min lenght</span>
                                                            <div class="playvideo_animation"></div>
                                                            <div class="playvideo_animation"
                                                                style="animation-delay: 1.2s;"></div>
                                                            <div class="playvideo_animation"
                                                                style="animation-delay: 2.4s;"></div>
                                                        </a>
                                                        <div class="medium reveal" id="modal668701fb99aca" data-reveal
                                                            data-reset-on-close="true" data-animation-in="fade-in"
                                                            data-animation-out="fade-out">
                                                            <div class="flex-video widescreen"> <iframe id="ytplayer"
                                                                    type="text/html" height="100%"
                                                                    data-video-id="v9nBysHSzhE" frameborder="0"></iframe>
                                                            </div> <a class="close-button" data-close
                                                                aria-label="Close reveal">×</a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            document.addEventListener("DOMContentLoaded", function() {
                                                const videoBoxes = document.querySelectorAll(".wd-video-box")
                                                videoBoxes.forEach(videoBox => {
                                                    videoBox.querySelector("#play").addEventListener("click", e => {
                                                        const revealList = document.querySelectorAll(".reveal")
                                                        revealList.forEach(reveal => {
                                                            if (reveal.id == e.target.closest("#play").dataset.revealId) {
                                                                const iframe = reveal.querySelector("iframe"),
                                                                    url =
                                                                    `https://www.youtube.com/embed/${iframe.dataset.videoId}?autoplay=1&origin=http://example.com`
                                                                iframe.src = url
                                                            }
                                                        })
                                                    })
                                                })
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-5">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <noscript><img decoding="async" class="vc_single_image-img "
                                                            src="wp-content/uploads/2019/06/moved-img-1%402x-578x704.jpg"
                                                            width="578" height="704" alt="moved-img-1@2x"
                                                            title="moved-img-1@2x" /></noscript><img decoding="async"
                                                        class="lazyload vc_single_image-img "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20578%20704%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/moved-img-1@2x-578x704.jpg"
                                                        width="578" height="704" alt="moved-img-1@2x"
                                                        title="moved-img-1@2x" />
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="20"
                                            data-heightdesktop="40" style="height: 40px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1570125319426 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner vc_custom_1568992250492">
                                    <div class="wpb_wrapper">
                                        <div class="swiper wd-clients-carousel nav_arrow" data-clientshow="7">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide wd-clients-carousel-item ">
                                                    <noscript><img decoding="async" class=""
                                                            src="wp-content/uploads/2019/09/client-1.png" width="125"
                                                            height="50" alt="client"></noscript><img
                                                        decoding="async" class="lazyload "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/client-1.png"
                                                        width="125" height="50" alt="client">
                                                </div>
                                                <div class="swiper-slide wd-clients-carousel-item ">
                                                    <noscript><img decoding="async" class=""
                                                            src="wp-content/uploads/2019/09/client-2.png" width="125"
                                                            height="50" alt="client"></noscript><img
                                                        decoding="async" class="lazyload "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/client-2.png"
                                                        width="125" height="50" alt="client">
                                                </div>
                                                <div class="swiper-slide wd-clients-carousel-item ">
                                                    <noscript><img decoding="async" class=""
                                                            src="wp-content/uploads/2019/09/client-3.png" width="125"
                                                            height="50" alt="client"></noscript><img
                                                        decoding="async" class="lazyload "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/client-3.png"
                                                        width="125" height="50" alt="client">
                                                </div>
                                                <div class="swiper-slide wd-clients-carousel-item ">
                                                    <noscript><img decoding="async" class=""
                                                            src="wp-content/uploads/2019/09/client-4.png" width="125"
                                                            height="50" alt="client"></noscript><img
                                                        decoding="async" class="lazyload "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/client-4.png"
                                                        width="125" height="50" alt="client">
                                                </div>
                                                <div class="swiper-slide wd-clients-carousel-item ">
                                                    <noscript><img decoding="async" class=""
                                                            src="wp-content/uploads/2019/09/client-5.png" width="125"
                                                            height="50" alt="client"></noscript><img
                                                        decoding="async" class="lazyload "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/client-5.png"
                                                        width="125" height="50" alt="client">
                                                </div>
                                                <div class="swiper-slide wd-clients-carousel-item ">
                                                    <noscript><img decoding="async" class=""
                                                            src="wp-content/uploads/2019/09/client-6.png" width="125"
                                                            height="50" alt="client"></noscript><img
                                                        decoding="async" class="lazyload "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/client-6.png"
                                                        width="125" height="50" alt="client">
                                                </div>
                                                <div class="swiper-slide wd-clients-carousel-item ">
                                                    <noscript><img decoding="async" class=""
                                                            src="wp-content/uploads/2019/09/client-7.png" width="125"
                                                            height="50" alt="client"></noscript><img
                                                        decoding="async" class="lazyload "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20125%2050%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/client-7.png"
                                                        width="125" height="50" alt="client">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='50' data-heighttablet='50'
                                            data-heightdesktop='100' style='height:100px'></div>
                                        <div class="wd-heading text-left  " style="max-width: 100%">
                                            <h2 style="margin:0;" class="title_a" data-text="Our Best">
                                                Features
                                            </h2>
                                            <p style="" class="sub_title_a"> Our Best</p>
                                            <hr class='hr_a' style=' margin: 10px;' />
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='20' data-heighttablet='20'
                                            data-heightdesktop='50' style='height:50px'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                            <div class="text-icon__container  left ">
                                                <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                            src="wp-content/uploads/2019/10/precision-icon.svg"
                                                            alt='icon' /></noscript><img class="lazyload"
                                                        decoding="async"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/precision-icon.svg"
                                                        alt='icon' /></div>
                                                <div class="text-icon__content-box">
                                                    <h4 class="text-icon__title "> Precison</h4>
                                                    <p class="text-icon__text  "> Accurately understand the needs
                                                        of
                                                        customers, provide efficient and cost-effective construction
                                                        equipment for various customers in different operations.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                            <div class="text-icon__container  left ">
                                                <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                            src="wp-content/uploads/2019/10/study-icon.svg"
                                                            alt='icon' /></noscript><img class="lazyload"
                                                        decoding="async"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/study-icon.svg"
                                                        alt='icon' /></div>
                                                <div class="text-icon__content-box">
                                                    <h4 class="text-icon__title "> Study</h4>
                                                    <p class="text-icon__text  "> Constantly study industry
                                                        trends,
                                                        commit to new technologies and methods, and launch the
                                                        latest technical construction engineering equipment.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                            <div class="text-icon__container  left ">
                                                <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                            src="wp-content/uploads/2019/10/no-delay-icon.svg"
                                                            alt='icon' /></noscript><img class="lazyload"
                                                        decoding="async"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/no-delay-icon.svg"
                                                        alt='icon' /></div>
                                                <div class="text-icon__content-box">
                                                    <h4 class="text-icon__title "> No delay</h4>
                                                    <p class="text-icon__text  "> Respond quickly to any questions
                                                        and needs of customers, and collect the latest and best
                                                        quality equipment for customers in the first time.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                            <div class="text-icon__container  left ">
                                                <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                            src="wp-content/uploads/2019/10/study-icon.svg"
                                                            alt='icon' /></noscript><img class="lazyload"
                                                        decoding="async"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/study-icon.svg"
                                                        alt='icon' /></div>
                                                <div class="text-icon__content-box">
                                                    <h4 class="text-icon__title "> Study</h4>
                                                    <p class="text-icon__text  "> Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore. Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <noscript><img decoding="async" class="vc_single_image-img "
                                                            src="wp-content/uploads/2019/08/bulldozer-420x290.jpg"
                                                            width="420" height="290" alt="bulldozer"
                                                            title="bulldozer" /></noscript><img decoding="async"
                                                        class="lazyload vc_single_image-img "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20420%20290%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/08/bulldozer-420x290.jpg"
                                                        width="420" height="290" alt="bulldozer"
                                                        title="bulldozer" />
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-xs-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class=" border-shadow text-icon text-icon--icon-top_position boxes  clearfix">
                                            <div class="text-icon__container  left ">
                                                <div class="text-icon__icon-box "> <noscript><img decoding="async"
                                                            src="wp-content/uploads/2019/10/precision-icon.svg"
                                                            alt='icon' /></noscript><img class="lazyload"
                                                        decoding="async"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/precision-icon.svg"
                                                        alt='icon' /></div>
                                                <div class="text-icon__content-box">
                                                    <h4 class="text-icon__title "> Precison</h4>
                                                    <p class="text-icon__text  "> Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit, sed do eiusmod tempor
                                                        incididunt ut labore et dolore. Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="50"
                                            data-heightdesktop="200" style="height: 200px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid moved-box moved-box--right">
                            <div class="wpb_column vc_column_container vc_col-sm-5">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <noscript><img decoding="async" class="vc_single_image-img "
                                                            src="wp-content/uploads/2019/10/compactor.jpg" width="578"
                                                            height="704" alt="compactor"
                                                            title="compactor" /></noscript><img decoding="async"
                                                        class="lazyload vc_single_image-img "
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20578%20704%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/compactor.jpg"
                                                        width="578" height="704" alt="compactor"
                                                        title="compactor" />
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-7">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='0' data-heighttablet='0'
                                            data-heightdesktop='0' style='height:0px'>
                                        </div>
                                        <div class="wd-heading text-left  " style="max-width: 100%">
                                            <h5 style="font-weight:500;font-size:14px;color:#fdb900;text-transform:Uppercase;letter-spacing:1.4px;"
                                                class="sub_title_b" data-text="SOME FEATURES AND"> SOME FEATURES
                                                AND
                                            </h5>
                                            <h2 style="margin:0;font-weight:800;" class="title_b"> The Benefits
                                                of
                                                using backhoe today</h2>
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='5' data-heighttablet='5'
                                            data-heightdesktop='5' style='height:5px'>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>We are committed to providing our customers with super
                                                    exceptional service while offering our employees the best
                                                    training and a working environment in which they can excel best
                                                    of all place for more than a half century.</p>
                                                <p>This company focus has been in place for more than a half
                                                    century. We are committed to providing our customers with
                                                    exceptional service while offering our employees the best
                                                    training best of all and a working environment.</p>
                                            </div>
                                        </div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1562157304682">
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <h5>Building companies</h5>
                                                                <p class="p-small">Banks & Financial Institutions
                                                                    face a challenging & dynamic environment with…
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <div class="wpb_text_column wpb_content_element ">
                                                            <div class="wpb_wrapper">
                                                                <h5>Building companies</h5>
                                                                <p class="p-small">Banks & Financial Institutions
                                                                    face a challenging & dynamic environment with…
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="20"
                                            data-heightdesktop="36" style="height: 36px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid hide">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='50' data-heighttablet='50'
                                            data-heightdesktop='140' style='height:140px'></div>
                                        <div class="wd-heading text-left  " style="max-width: 100%">
                                            <h2 style="margin:0;" class="title_a" data-text="Case Studies">
                                                Case
                                                Studies</h2>
                                            <p style="" class="sub_title_a"> Case Studies</p>
                                            <hr class='hr_a' style=' margin: 10px;' />
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='40' data-heighttablet='60'
                                            data-heightdesktop='60' style='height:60px'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='100' data-heighttablet='40'
                                            data-heightdesktop='170' style='height:170px'></div>
                                        <div class="wd-heading text-left  " style="max-width: 100%">
                                            <h2 style="margin:0;" class="title_a" data-text="Our Latest">
                                                Featured
                                                Offers</h2>
                                            <p style="" class="sub_title_a"> Our Latest</p>
                                            <hr class='hr_a' style=' margin: 10px;' />
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='60' data-heighttablet='60'
                                            data-heightdesktop='60' style='height:60px'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="woocommerce columns-4 ">
                                            <ul class="products columns-4 grid">
                                                <li
                                                    class="product type-product post-3703 status-publish first instock product_cat-earthmoving-equipment product_cat-excavator has-post-thumbnail featured shipping-taxable purchasable product-type-simple wd-wc-style-1">
                                                    <div class='product-image-wrapper'><a
                                                            href="product/cat-c4-4-acert-with-twin-turbo-2/index.html"><noscript><img
                                                                    decoding="async" width="700" height="700"
                                                                    src="wp-content/uploads/2019/06/product_0006__-700x700.jpg"
                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-100x100.jpg 100w"
                                                                    sizes="(max-width: 700px) 100vw, 700px" /></noscript><img
                                                                decoding="async" width="700" height="700"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20700%20700%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-700x700.jpg"
                                                                class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0006__-100x100.jpg 100w"
                                                                data-sizes="(max-width: 700px) 100vw, 700px" /></a>
                                                    </div>
                                                    <div class="product-details-wrapper">
                                                        <h2 class="woocommerce-loop-product__title"> <a
                                                                href="product/cat-c4-4-acert-with-twin-turbo-2/index.html">Cat
                                                                C4.4 ACERT with Twin Turbo </a></h2>
                                                        <div class="pricing-location">
                                                            <div class="pricing-partial rates-3">
                                                                <h5>Hire</h5>
                                                                <ul>
                                                                    <li class="pricing pricing-day">
                                                                        <div>
                                                                            <p class="label">Day Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>290.00</bdi></span>
                                                                                <small> / Day</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="pricing pricing-week">
                                                                        <div>
                                                                            <p class="label">Week Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>630.00</bdi></span>
                                                                                <small> / Week</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="pricing pricing-fourWeek">
                                                                        <div>
                                                                            <p class="label">Month Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>3,600.00</bdi></span>
                                                                                <small> / Month</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="with-operator">
                                                                <h5>Hire with operator</h5>
                                                                <div> <span class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.00</bdi></span>
                                                                    <small> / Hour</small>
                                                                </div>
                                                            </div>
                                                            <div class="location"> Phoenix, AZ, San Diego, CA, San
                                                                Francisco, CA, San Jose, CA</div>
                                                        </div>
                                                        <div class="description"> Pellentesque habitant morbi
                                                            tristique senectus et netus et malesuada fames ac turpis
                                                            egestas. Vestibulum tortor quam, feugiat vitae,
                                                            ultricies eget, tempor sit amet, ante. Donec eu libero
                                                            sit amet quam egestas semper. Aenean ultricies mi vitae
                                                            est. Mauris placerat eleifend leo.</div> <a
                                                            href="index1709.html?add-to-cart=3703"
                                                            aria-describedby="woocommerce_loop_add_to_cart_link_describedby_3703"
                                                            data-quantity="1"
                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                            data-product_id="3703" data-product_sku="woo-sunglasses-10"
                                                            aria-label="Add to cart: “Cat C4.4 ACERT with Twin Turbo”"
                                                            rel="nofollow">Add to cart</a><span
                                                            id="woocommerce_loop_add_to_cart_link_describedby_3703"
                                                            class="screen-reader-text"> </span>
                                                    </div>
                                                </li>
                                                <li
                                                    class="product type-product post-3701 status-publish instock product_cat-earthmoving-equipment product_cat-excavator has-post-thumbnail featured shipping-taxable purchasable product-type-variable wd-wc-style-1">
                                                    <div class='product-image-wrapper'><a
                                                            href="product/telescopic-handler-copy-4/index.html"><noscript><img
                                                                    decoding="async" width="700" height="700"
                                                                    src="wp-content/uploads/2019/06/product_0010__-700x700.jpg"
                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-100x100.jpg 100w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-600x600.jpg 600w"
                                                                    sizes="(max-width: 700px) 100vw, 700px" /></noscript><img
                                                                decoding="async" width="700" height="700"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20700%20700%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-700x700.jpg"
                                                                class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-100x100.jpg 100w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0010__-600x600.jpg 600w"
                                                                data-sizes="(max-width: 700px) 100vw, 700px" /></a>
                                                    </div>
                                                    <div class="product-details-wrapper">
                                                        <h2 class="woocommerce-loop-product__title"> <a
                                                                href="product/telescopic-handler-copy-4/index.html">35000
                                                                – 39000 lbs, Excavator </a></h2>
                                                        <div class="pricing-location">
                                                            <div class="pricing-partial rates-3">
                                                                <h5>Hire</h5>
                                                                <ul>
                                                                    <li class="pricing pricing-day">
                                                                        <div>
                                                                            <p class="label">Day Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>230.00</bdi></span>
                                                                                – <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>3,300.00</bdi></span>
                                                                                <small> / Day</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="pricing pricing-week">
                                                                        <div>
                                                                            <p class="label">Week Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>630.00</bdi></span>
                                                                                <small> / Week</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="pricing pricing-fourWeek">
                                                                        <div>
                                                                            <p class="label">Month Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>3,600.00</bdi></span>
                                                                                <small> / Month</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="with-operator">
                                                                <h5>Hire with operator</h5>
                                                                <div> <span class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.00</bdi></span>
                                                                    <small> / Hour</small>
                                                                </div>
                                                            </div>
                                                            <div class="location"> San Francisco, CA</div>
                                                        </div>
                                                        <div class="description"> Mel an esse salutandi, eos wisi
                                                            nonumes democritum id. Eu affert dolore rationibus mel.
                                                            Porro vocent ut vel. Rebum deleniti voluptua at sed, ut
                                                            tollit prodesset eum, ea eos nostrud.</div> <a
                                                            href="product/telescopic-handler-copy-4/index.html"
                                                            aria-describedby="woocommerce_loop_add_to_cart_link_describedby_3701"
                                                            data-quantity="1"
                                                            class="button product_type_variable add_to_cart_button"
                                                            data-product_id="3701" data-product_sku="woo-sunglasses-8"
                                                            aria-label="Select options for “35000 - 39000 lbs, Excavator”"
                                                            rel="nofollow">Select options</a><span
                                                            id="woocommerce_loop_add_to_cart_link_describedby_3701"
                                                            class="screen-reader-text"> </span>
                                                    </div>
                                                </li>
                                                <li
                                                    class="product type-product post-3697 status-publish instock product_cat-bulldozer product_cat-earthmoving-equipment has-post-thumbnail featured shipping-taxable purchasable product-type-backhoe_bookin_product wd-wc-style-1">
                                                    <div class='product-image-wrapper'><a
                                                            href="product/telescopic-handler-copy-8/index.html"><noscript><img
                                                                    decoding="async" width="700" height="700"
                                                                    src="wp-content/uploads/2019/06/product_0012__-700x700.jpg"
                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-100x100.jpg 100w"
                                                                    sizes="(max-width: 700px) 100vw, 700px" /></noscript><img
                                                                decoding="async" width="700" height="700"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20700%20700%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-700x700.jpg"
                                                                class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_0012__-100x100.jpg 100w"
                                                                data-sizes="(max-width: 700px) 100vw, 700px" /></a>
                                                    </div>
                                                    <div class="product-details-wrapper">
                                                        <h2 class="woocommerce-loop-product__title"> <a
                                                                href="product/telescopic-handler-copy-8/index.html">90
                                                                – 99 Hp, Bulldozer </a></h2>
                                                        <div class="pricing-location">
                                                            <div class="pricing-partial rates-3">
                                                                <h5>Hire</h5>
                                                                <ul>
                                                                    <li class="pricing pricing-day">
                                                                        <div>
                                                                            <p class="label">Day Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>290.00</bdi></span><small>/
                                                                                    Day</small> <small> /
                                                                                    Day</small></div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="pricing pricing-week">
                                                                        <div>
                                                                            <p class="label">Week Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>630.00</bdi></span>
                                                                                <small> / Week</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="pricing pricing-fourWeek">
                                                                        <div>
                                                                            <p class="label">Month Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>3,600.00</bdi></span>
                                                                                <small> / Month</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="with-operator">
                                                                <h5>Hire with operator</h5>
                                                                <div> <span class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.00</bdi></span>
                                                                    <small> / Hour</small>
                                                                </div>
                                                            </div>
                                                            <div class="location"> San Francisco, CA</div>
                                                        </div>
                                                        <div class="description"> Pellentesque habitant morbi
                                                            tristique senectus et netus et malesuada fames ac turpis
                                                            egestas. Vestibulum tortor quam, feugiat vitae,
                                                            ultricies eget, tempor sit amet, ante. Donec eu libero
                                                            sit amet quam egestas semper. Aenean ultricies mi vitae
                                                            est. Mauris placerat eleifend leo.</div> <a
                                                            href="index35f4.html?add-to-cart=3697"
                                                            aria-describedby="woocommerce_loop_add_to_cart_link_describedby_3697"
                                                            data-quantity="1"
                                                            class="button product_type_backhoe_bookin_product add_to_cart_button ajax_add_to_cart"
                                                            data-product_id="3697" data-product_sku="woo-sunglasses-4"
                                                            aria-label="Add to cart: “90 - 99 Hp, Bulldozer”"
                                                            rel="nofollow">Add to cart</a><span
                                                            id="woocommerce_loop_add_to_cart_link_describedby_3697"
                                                            class="screen-reader-text"> </span>
                                                    </div>
                                                </li>
                                                <li
                                                    class="product type-product post-3698 status-publish last instock product_cat-bulldozer product_cat-earthmoving-equipment has-post-thumbnail featured shipping-taxable purchasable product-type-backhoe_bookin_product wd-wc-style-1">
                                                    <div class='product-image-wrapper'><a
                                                            href="product/cat-3046/index.html"><noscript><img
                                                                    decoding="async" width="700" height="700"
                                                                    src="wp-content/uploads/2019/06/product_image_27-175-700x700.jpg"
                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                    alt=""
                                                                    srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-100x100.jpg 100w"
                                                                    sizes="(max-width: 700px) 100vw, 700px" /></noscript><img
                                                                decoding="async" width="700" height="700"
                                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20700%20700%22%3E%3C/svg%3E'
                                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-700x700.jpg"
                                                                class="lazyload attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                alt=""
                                                                data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-700x700.jpg 700w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-150x150.jpg 150w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-194x194.jpg 194w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-314x314.jpg 314w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-200x200.jpg 200w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/product_image_27-175-100x100.jpg 100w"
                                                                data-sizes="(max-width: 700px) 100vw, 700px" /></a>
                                                    </div>
                                                    <div class="product-details-wrapper">
                                                        <h2 class="woocommerce-loop-product__title"> <a
                                                                href="product/cat-3046/index.html">Cat 3046 </a>
                                                        </h2>
                                                        <div class="pricing-location">
                                                            <div class="pricing-partial rates-3">
                                                                <h5>Hire</h5>
                                                                <ul>
                                                                    <li class="pricing pricing-day">
                                                                        <div>
                                                                            <p class="label">Day Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>290.00</bdi></span><small>/
                                                                                    Day</small> <small> /
                                                                                    Day</small></div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="pricing pricing-week">
                                                                        <div>
                                                                            <p class="label">Week Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>630.00</bdi></span>
                                                                                <small> / Week</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="pricing pricing-fourWeek">
                                                                        <div>
                                                                            <p class="label">Month Rate</p>
                                                                            <div class="price_value"> <span
                                                                                    class="woocommerce-Price-amount amount"><bdi><span
                                                                                            class="woocommerce-Price-currencySymbol">$</span>3,600.00</bdi></span>
                                                                                <small> / Month</small>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="with-operator">
                                                                <h5>Hire with operator</h5>
                                                                <div> <span class="woocommerce-Price-amount amount"><bdi><span
                                                                                class="woocommerce-Price-currencySymbol">$</span>150.00</bdi></span>
                                                                    <small> / Hour</small>
                                                                </div>
                                                            </div>
                                                            <div class="location"> San Francisco, CA</div>
                                                        </div>
                                                        <div class="description"> Pellentesque habitant morbi
                                                            tristique senectus et netus et malesuada fames ac turpis
                                                            egestas. Vestibulum tortor quam, feugiat vitae,
                                                            ultricies eget, tempor sit amet, ante. Donec eu libero
                                                            sit amet quam egestas semper. Aenean ultricies mi vitae
                                                            est. Mauris placerat eleifend leo.</div> <a
                                                            href="indexd2c5.html?add-to-cart=3698"
                                                            aria-describedby="woocommerce_loop_add_to_cart_link_describedby_3698"
                                                            data-quantity="1"
                                                            class="button product_type_backhoe_bookin_product add_to_cart_button ajax_add_to_cart"
                                                            data-product_id="3698" data-product_sku="woo-sunglasses-5"
                                                            aria-label="Add to cart: “Cat 3046”" rel="nofollow">Add
                                                            to cart</a><span
                                                            id="woocommerce_loop_add_to_cart_link_describedby_3698"
                                                            class="screen-reader-text"> </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='50' data-heighttablet='50'
                                            data-heightdesktop='120' style='height:120px'></div>
                                        <div class="wd-heading text-left  " style="max-width: 100%">
                                            <h2 style="margin:0;" class="title_a" data-text="The Process"> How
                                                does
                                                it Work</h2>
                                            <p style="" class="sub_title_a"> The Process</p>
                                            <hr class='hr_a' style=' margin: 10px;' />
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='40' data-heighttablet='60'
                                            data-heightdesktop='60' style='height:60px'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="header-number wpb_column vc_column_container vc_col-sm-6 vc_col-xs-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div
                                            class=" vc_custom_1570994220145 no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                            <div class="text-icon__container   ">
                                                <div class="text-icon__icon-box "> <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="37"
                                                        height="85">
                                                        <path
                                                            d="M26 23.188V69h-9.844V34.312q-.812.72-1.937 1.376-1.094.624-2.344 1.156-1.25.5-2.594.875-1.344.343-2.656.5v-8.313q3.844-1.125 7.25-2.875t6.156-3.843z"
                                                            aria-label="1" font-weight="700" font-size="64"
                                                            font-family="SegoeUI-Bold,'Segoe UI'" fill="#fdb900" />
                                                    </svg></div>
                                                <div class="text-icon__content-box">
                                                    <h4 class="text-icon__title "> Search for the equipment you
                                                        need
                                                    </h4>
                                                    <p class="text-icon__text  "> Get all the blog lists & single
                                                        post templates you’ll ever need to share your news & stories
                                                        with the crowd. Get all the blog lists & single post
                                                        templates you’ll ever need to share your news & stories with
                                                        the crowd.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="50" data-heighttablet="0"
                                            data-heightdesktop="0" style="height: 0px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <noscript><img decoding="async" width="1248" height="793"
                                                            src="wp-content/uploads/2019/09/Section.png"
                                                            class="vc_single_image-img attachment-full" alt=""
                                                            title="Section"
                                                            srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section.png 1248w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section-300x191.png 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section-1024x651.png 1024w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section-768x488.png 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section-800x508.png 800w"
                                                            sizes="(max-width: 1248px) 100vw, 1248px" /></noscript><img
                                                        decoding="async" width="1248" height="793"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201248%20793%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section.png"
                                                        class="lazyload vc_single_image-img attachment-full"
                                                        alt="" title="Section"
                                                        data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section.png 1248w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section-300x191.png 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section-1024x651.png 1024w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section-768x488.png 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Section-800x508.png 800w"
                                                        data-sizes="(max-width: 1248px) 100vw, 1248px" />
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1569339400324 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner vc_custom_1569339505360">
                                    <div class="wpb_wrapper">
                                        <div class="wd_empty_space" data-heightmobile="290" data-heighttablet="200"
                                            data-heightdesktop="0" style="height: 0px;"></div>
                                        <div
                                            class="wpb_single_image wpb_content_element vc_align_center   show-for-large">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <noscript><img decoding="async" width="630" height="236"
                                                            src="wp-content/uploads/2019/09/arrows.png"
                                                            class="vc_single_image-img attachment-full" alt=""
                                                            title="arrows"
                                                            srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows.png 630w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-300x112.png 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-600x225.png 600w"
                                                            sizes="(max-width: 630px) 100vw, 630px" /></noscript><img
                                                        decoding="async" width="630" height="236"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20630%20236%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows.png"
                                                        class="lazyload vc_single_image-img attachment-full"
                                                        alt="" title="arrows"
                                                        data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows.png 630w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-300x112.png 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-600x225.png 600w"
                                                        data-sizes="(max-width: 630px) 100vw, 630px" />
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1569329885436">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner vc_custom_1569340168765">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <noscript><img decoding="async" width="694" height="376"
                                                            src="wp-content/uploads/2019/09/Group-1539.png"
                                                            class="vc_single_image-img attachment-full" alt=""
                                                            title="Group 1539"
                                                            srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Group-1539.png 694w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Group-1539-300x163.png 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Group-1539-640x347.png 640w"
                                                            sizes="(max-width: 694px) 100vw, 694px" /></noscript><img
                                                        decoding="async" width="694" height="376"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20694%20376%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Group-1539.png"
                                                        class="lazyload vc_single_image-img attachment-full"
                                                        alt="" title="Group 1539"
                                                        data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Group-1539.png 694w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Group-1539-300x163.png 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/Group-1539-640x347.png 640w"
                                                        data-sizes="(max-width: 694px) 100vw, 694px" />
                                                </div>
                                            </figure>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="50" data-heighttablet="0"
                                            data-heightdesktop="0" style="height: 0px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-number wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner vc_custom_1569340175773">
                                    <div class="wpb_wrapper">
                                        <div
                                            class=" vc_custom_1570994395551 no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                            <div class="text-icon__container   ">
                                                <div class="text-icon__icon-box "> <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="37"
                                                        height="85">
                                                        <path
                                                            d="M13.406 60.813h19V69H2.594v-3.375q0-3.438 1.156-6.156 1.156-2.75 2.906-4.907 1.75-2.187 3.813-3.843 2.094-1.688 3.969-3.032 1.968-1.406 3.437-2.687 1.5-1.281 2.5-2.531 1.031-1.282 1.531-2.563.5-1.312.5-2.781 0-2.875-1.625-4.344-1.625-1.468-4.968-1.468-5.782 0-11.063 4.593V27.22q5.844-3.782 13.188-3.782 3.406 0 6.093.907 2.719.875 4.594 2.531 1.875 1.656 2.844 4.031 1 2.344 1 5.25 0 3.094-.969 5.5-.938 2.407-2.531 4.375-1.563 1.969-3.625 3.625-2.063 1.625-4.282 3.157-1.5 1.062-2.906 2.124Q16.781 55.97 15.72 57q-1.063 1-1.688 1.969-.625.968-.625 1.843z"
                                                            aria-label="2" font-weight="700" font-size="64"
                                                            fill="#fdb900" />
                                                    </svg></div>
                                                <div class="text-icon__content-box">
                                                    <h4 class="text-icon__title "> Find the Equipment and Order it
                                                        Online</h4>
                                                    <p class="text-icon__text  "> Get all the blog lists & single
                                                        post templates you’ll ever need to share your news & stories
                                                        with the crowd. Get all the blog lists & single post
                                                        templates you’ll ever need to share your news & stories with
                                                        the crowd.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1569339400324 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner vc_custom_1569339505360">
                                    <div class="wpb_wrapper">
                                        <div class="wd_empty_space" data-heightmobile="250" data-heighttablet="200"
                                            data-heightdesktop="0" style="height: 0px;"></div>
                                        <div
                                            class="wpb_single_image wpb_content_element vc_align_center   show-for-large">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <noscript><img decoding="async" width="630" height="236"
                                                            src="wp-content/uploads/2019/09/arrows-2.png"
                                                            class="vc_single_image-img attachment-full" alt=""
                                                            title="arrows-2"
                                                            srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-2.png 630w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-2-300x112.png 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-2-600x225.png 600w"
                                                            sizes="(max-width: 630px) 100vw, 630px" /></noscript><img
                                                        decoding="async" width="630" height="236"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20630%20236%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-2.png"
                                                        class="lazyload vc_single_image-img attachment-full"
                                                        alt="" title="arrows-2"
                                                        data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-2.png 630w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-2-300x112.png 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/09/arrows-2-600x225.png 600w"
                                                        data-sizes="(max-width: 630px) 100vw, 630px" />
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1569329901110">
                            <div class="header-number wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner vc_custom_1569340182535">
                                    <div class="wpb_wrapper">
                                        <div
                                            class=" vc_custom_1570994468579 no-hover text-icon text-icon--icon-left_position boxes  clearfix">
                                            <div class="text-icon__container   ">
                                                <div class="text-icon__icon-box "> <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="37"
                                                        height="85">
                                                        <path
                                                            d="M3.656 67.531v-8.594q4.5 3.282 10.5 3.282 3.781 0 5.875-1.625 2.125-1.625 2.125-4.532 0-3-2.625-4.624-2.593-1.626-7.156-1.626H8.219V42.25h3.844q8.75 0 8.75-5.813 0-5.468-6.72-5.468-4.5 0-8.75 2.906v-8.063q4.72-2.375 11-2.375 6.876 0 10.688 3.094 3.844 3.094 3.844 8.032 0 8.78-8.906 11v.156q4.75.593 7.5 3.468 2.75 2.844 2.75 7 0 6.282-4.594 9.938-4.594 3.656-12.688 3.656-6.937 0-11.28-2.25z"
                                                            aria-label="3" font-weight="700" font-size="64"
                                                            font-family="SegoeUI-Bold,'Segoe UI'" fill="#fdb900" />
                                                    </svg></div>
                                                <div class="text-icon__content-box">
                                                    <h4 class="text-icon__title "> Get The Equipment Shipped to
                                                        your
                                                        Working</h4>
                                                    <p class="text-icon__text  "> Get all the blog lists & single
                                                        post templates you’ll ever need to share your news & stories
                                                        with the crowd. Get all the blog lists & single post
                                                        templates you’ll ever need to share your news & stories with
                                                        the crowd.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="120" data-heighttablet="0"
                                            data-heightdesktop="0" style="height: 0px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner vc_custom_1569340187354">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                    <noscript><img decoding="async" width="1252" height="670"
                                                            src="wp-content/uploads/2019/10/Section-1.jpg"
                                                            class="vc_single_image-img attachment-full" alt=""
                                                            title="Section-1"
                                                            srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1.jpg 1252w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1-300x161.jpg 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1-1024x548.jpg 1024w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1-768x411.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1-800x428.jpg 800w"
                                                            sizes="(max-width: 1252px) 100vw, 1252px" /></noscript><img
                                                        decoding="async" width="1252" height="670"
                                                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%201252%20670%22%3E%3C/svg%3E'
                                                        data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1.jpg"
                                                        class="lazyload vc_single_image-img attachment-full"
                                                        alt="" title="Section-1"
                                                        data-srcset="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1.jpg 1252w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1-300x161.jpg 300w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1-1024x548.jpg 1024w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1-768x411.jpg 768w, https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/10/Section-1-800x428.jpg 800w"
                                                        data-sizes="(max-width: 1252px) 100vw, 1252px" />
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1569260648992 vc_row-has-fill"
                            style="background-position: center !important;">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wd_empty_space" data-heightmobile="20" data-heighttablet="30"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid dashed-bg vc_custom_1569610275707 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="30"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                        <div class="wd-count-up "> <noscript><img decoding="async" width="62"
                                                    height="62"
                                                    src="wp-content/uploads/2019/06/champion-2842_fcb453b6-d2d7-4d18-b67f-ecc793150b3f.png"
                                                    class="attachment-thumbnail size-thumbnail"
                                                    alt="" /></noscript><img decoding="async" width="62"
                                                height="62"
                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2062%2062%22%3E%3C/svg%3E'
                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/champion-2842_fcb453b6-d2d7-4d18-b67f-ecc793150b3f.png"
                                                class="lazyload attachment-thumbnail size-thumbnail" alt="" />
                                            <h3 class="wd-count-up__counter small-heading" data-file="15"
                                                style='color: #ffffff'> 15</h3>
                                            <h4 class="wd-count-up__title small-heading" style='color: #ffffff'>
                                                Awwards</h4>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="25"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="30"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                        <div class="wd-count-up "> <noscript><img decoding="async" width="62"
                                                    height="50"
                                                    src="wp-content/uploads/2019/06/team-2715_cef8922e-7aa0-4ddd-96a7-34fde8bdc608.png"
                                                    class="attachment-thumbnail size-thumbnail"
                                                    alt="" /></noscript><img decoding="async" width="62"
                                                height="50"
                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2062%2050%22%3E%3C/svg%3E'
                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/team-2715_cef8922e-7aa0-4ddd-96a7-34fde8bdc608.png"
                                                class="lazyload attachment-thumbnail size-thumbnail" alt="" />
                                            <h3 class="wd-count-up__counter small-heading" data-file="1024"
                                                style='color: #ffffff'> 1024</h3>
                                            <h4 class="wd-count-up__title small-heading" style='color: #ffffff'>
                                                Happy clients</h4>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="25" data-heighttablet="40"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="30"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                        <div class="wd-count-up "> <noscript><img decoding="async" width="50"
                                                    height="62"
                                                    src="wp-content/uploads/2019/06/spacecraft-3240_6a607206-a24b-4dbf-90db-0994df49b8c2.png"
                                                    class="attachment-thumbnail size-thumbnail"
                                                    alt="" /></noscript><img decoding="async" width="50"
                                                height="62"
                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2050%2062%22%3E%3C/svg%3E'
                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/spacecraft-3240_6a607206-a24b-4dbf-90db-0994df49b8c2.png"
                                                class="lazyload attachment-thumbnail size-thumbnail" alt="" />
                                            <h3 class="wd-count-up__counter small-heading" data-file="1024"
                                                style='color: #ffffff'> 1024</h3>
                                            <h4 class="wd-count-up__title small-heading" style='color: #ffffff'>
                                                Projects</h4>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="0" data-heighttablet="25"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-xs-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wd_empty_space" data-heightmobile="15" data-heighttablet="30"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                        <div class="wd-count-up "> <noscript><img decoding="async" width="64"
                                                    height="64"
                                                    src="wp-content/uploads/2019/06/safe-2291_ffa36413-4b0a-4d71-b890-8c672e1bac8c.png"
                                                    class="attachment-thumbnail size-thumbnail"
                                                    alt="" /></noscript><img decoding="async" width="64"
                                                height="64"
                                                src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2064%2064%22%3E%3C/svg%3E'
                                                data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/06/safe-2291_ffa36413-4b0a-4d71-b890-8c672e1bac8c.png"
                                                class="lazyload attachment-thumbnail size-thumbnail" alt="" />
                                            <h3 class="wd-count-up__counter small-heading" data-file="99"
                                                style='color: #ffffff'> 99</h3>
                                            <h4 class="wd-count-up__title small-heading" style='color: #ffffff'>
                                                Up
                                                Time</h4>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="30" data-heighttablet="25"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1570182560154 vc_row-has-fill">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='40' data-heighttablet='80'
                                            data-heightdesktop='80' style='height:80px'></div>
                                        <div class="wd-heading text-left  " style="max-width: 100%">
                                            <h2 style="margin:0;color:#ffffff;" class="title_a"
                                                data-text="Our Clients"> Testimonials</h2>
                                            <p style="color:#ffffff;" class="sub_title_a"> Our Clients</p>
                                            <hr class='hr_a' style=' margin: 10px;' />
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='15' data-heighttablet='20'
                                            data-heightdesktop='40' style='height:40px'></div>
                                        <div class="owl-testimonial swiper-container testimonail-swiper wd-testimonial wd-testimonial_layout_3"
                                            data-slick='{ "slidesToShow": 1, "slidesToScroll": 1}'>
                                            <div class="swiper-wrapper">
                                                <blockquote class="swiper-slide wd-testimonial__item">
                                                    <div class="wd-testimonial__thumbnail">
                                                        <div class="lazyload"
                                                            data-bg="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/testimon-@2x-833x510.jpg"
                                                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E)">
                                                        </div>
                                                    </div>
                                                    <div class="wd-testimonial__info">
                                                        <div class="excerpt" style="color:#ffffff"> So happy to
                                                            write this testimonial to see that I'm very thankful to
                                                            you guys even you so awesome and professional Although
                                                            with service while offering our employees the best
                                                            training and a working environment in which they can
                                                            excel.</div>
                                                        <h5 class="title" style="color:#ffffff"> Mark James
                                                        </h5>
                                                        <p class="job p-small"> Creative Heads Inc</p>
                                                    </div>
                                                </blockquote>
                                                <blockquote class="swiper-slide wd-testimonial__item">
                                                    <div class="wd-testimonial__thumbnail">
                                                        <div class="lazyload"
                                                            data-bg="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/07/testimon-@2x-2-833x510.jpg"
                                                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E)">
                                                        </div>
                                                    </div>
                                                    <div class="wd-testimonial__info">
                                                        <div class="excerpt" style="color:#ffffff"> I was very
                                                            surprised by the quality of the equipment of this
                                                            company, and I will buy from them always and so happy to
                                                            write this testimonial to see that I'm very thankful to
                                                            you guys even you so awesome and professional Although
                                                            moreover.</div>
                                                        <h5 class="title" style="color:#ffffff"> Sammy Lovell
                                                        </h5>
                                                        <p class="job p-small"> CTO - Google</p>
                                                    </div>
                                                </blockquote>
                                                <blockquote class="swiper-slide wd-testimonial__item">
                                                    <div class="wd-testimonial__thumbnail">
                                                        <div class="lazyload"
                                                            data-bg="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2018/04/testimon_-833x510.jpg"
                                                            style="background-image: url(data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20500%20300%22%3E%3C/svg%3E)">
                                                        </div>
                                                    </div>
                                                    <div class="wd-testimonial__info">
                                                        <div class="excerpt" style="color:#ffffff"> I was very
                                                            surprised by the quality of the equipment of this
                                                            company, and I will buy from them always and so happy to
                                                            write this testimonial to see that I'm very thankful to
                                                            you guys even you so awesome and professional Although.
                                                        </div>
                                                        <h5 class="title" style="color:#ffffff"> Veriency Dun
                                                        </h5>
                                                        <p class="job p-small"> Creative Heads Inc</p>
                                                    </div>
                                                </blockquote>
                                            </div> <span class="swiper-button-prev left slick-arrow"><svg version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 512.008 512.008"
                                                    style="enable-background:new 0 0 512.008 512.008;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M384.001,53.333V10.667c0-4.354-2.646-8.281-6.688-9.896C376.022,0.25,374.668,0,373.335,0
    c-2.854,0-5.646,1.146-7.708,3.292L130.96,248.625c-3.937,4.125-3.937,10.625,0,14.75l234.667,245.333
    c3.021,3.146,7.646,4.167,11.688,2.521c4.042-1.615,6.688-5.542,6.688-9.896v-42.667c0-2.729-1.042-5.354-2.917-7.333L196.022,256
    L381.085,60.667C382.96,58.688,384.001,56.063,384.001,53.333z"></path>t
                                                        </g>
                                                    </g>
                                                </svg> </span> <span class="swiper-button-next right slick-arrow"><svg
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 512.008 512.008"
                                                    style="enable-background:new 0 0 512.008 512.008;"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M381.048,248.633L146.381,3.299c-3.021-3.146-7.646-4.167-11.688-2.521c-4.042,1.615-6.688,5.542-6.688,9.896v42.667
    c0,2.729,1.042,5.354,2.917,7.333l185.063,195.333L130.923,451.341c-1.875,1.979-2.917,4.604-2.917,7.333v42.667
    c0,4.354,2.646,8.281,6.688,9.896c1.292,0.521,2.646,0.771,3.979,0.771c2.854,0,5.646-1.146,7.708-3.292l234.667-245.333
    C384.986,259.258,384.986,252.758,381.048,248.633z"></path>
                                                        </g>
                                                    </g>
                                                </svg></span>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="20" data-heighttablet="30"
                                            data-heightdesktop="50" style="height: 50px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='wd_empty_space' data-heightmobile='60' data-heighttablet='60'
                                            data-heightdesktop='75' style='height:75px'></div>
                                        <div class="wd-heading text-left  " style="max-width: 100%">
                                            <h2 style="margin:0;" class="title_a" data-text="Our Latest">
                                                Updates
                                            </h2>
                                            <p style="" class="sub_title_a"> Our Latest</p>
                                            <hr class='hr_a' style=' margin: 10px;' />
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='60' data-heighttablet='60'
                                            data-heightdesktop='60' style='height:60px'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-animation-delay="150" class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class='small-up-1 medium-up-2 large-up-3'>
                                            <div class="column column-block  animated " data-animated=fadeInUp>
                                                <article
                                                    class="wd-post wd-post--multicolumn post-258 post type-post status-publish format-standard has-post-thumbnail hentry category-news ">
                                                    <div class="wd-post__thumbnail"> <noscript><img decoding="async"
                                                                width="840" height="500"
                                                                src="wp-content/uploads/2019/08/bulldozer-840x500.jpg"
                                                                class="attachment-backhoe_sblog-thumb size-backhoe_sblog-thumb wp-post-image"
                                                                alt="" /></noscript><img decoding="async"
                                                            width="840" height="500"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20840%20500%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/08/bulldozer-840x500.jpg"
                                                            class="lazyload attachment-backhoe_sblog-thumb size-backhoe_sblog-thumb wp-post-image"
                                                            alt="" /></div>
                                                    <div class="wd-post__content">
                                                        <ul class="wd-post__meta clearfix">
                                                            <li>28/08/2019</li>
                                                            <li class="wd-post__author">By:root</li>
                                                            <li class="wd-post__category"><a
                                                                    href="blog/category/news/index.html"
                                                                    rel="category tag">News</a></li>
                                                            <li class="wd-post__comments">no comments</li>
                                                        </ul>
                                                        <h4 class="wd-post__title"> <a
                                                                href="blog/2019/08/28/best-practices-of-hr-management/index.html">Best
                                                                Practices of HR management</a></h4>
                                                        <div class="wd-post__read-more"> <a
                                                                href="blog/2019/08/28/best-practices-of-hr-management/index.html">
                                                                Learn more <noscript><img decoding="async"
                                                                        src="wp-content/themes/backhoe/images/more.svg"
                                                                        alt="icon"></noscript><img class="lazyload"
                                                                    decoding="async"
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/themes/backhoe/images/more.svg"
                                                                    alt="icon"> </a></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="column column-block  animated " data-animated=fadeInUp>
                                                <article
                                                    class="wd-post wd-post--multicolumn post-260 post type-post status-publish format-standard has-post-thumbnail hentry category-updates ">
                                                    <div class="wd-post__thumbnail"> <noscript><img decoding="async"
                                                                width="840" height="500"
                                                                src="wp-content/uploads/2017/12/2-truck-840x500.jpg"
                                                                class="attachment-backhoe_sblog-thumb size-backhoe_sblog-thumb wp-post-image"
                                                                alt="" /></noscript><img decoding="async"
                                                            width="840" height="500"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20840%20500%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2017/12/2-truck-840x500.jpg"
                                                            class="lazyload attachment-backhoe_sblog-thumb size-backhoe_sblog-thumb wp-post-image"
                                                            alt="" /></div>
                                                    <div class="wd-post__content">
                                                        <ul class="wd-post__meta clearfix">
                                                            <li>30/03/2019</li>
                                                            <li class="wd-post__author">By:root</li>
                                                            <li class="wd-post__category"><a
                                                                    href="blog/category/updates/index.html"
                                                                    rel="category tag">Updates</a></li>
                                                            <li class="wd-post__comments">no comments</li>
                                                        </ul>
                                                        <h4 class="wd-post__title"> <a
                                                                href="blog/2019/03/30/10-tips-to-find-best-backhoe/index.html">10
                                                                Tips to Find Best Backhoe</a></h4>
                                                        <div class="wd-post__read-more"> <a
                                                                href="blog/2019/03/30/10-tips-to-find-best-backhoe/index.html">
                                                                Learn more <noscript><img decoding="async"
                                                                        src="wp-content/themes/backhoe/images/more.svg"
                                                                        alt="icon"></noscript><img class="lazyload"
                                                                    decoding="async"
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/themes/backhoe/images/more.svg"
                                                                    alt="icon"> </a></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="column column-block  animated " data-animated=fadeInUp>
                                                <article
                                                    class="wd-post wd-post--multicolumn post-262 post type-post status-publish format-standard has-post-thumbnail hentry category-news ">
                                                    <div class="wd-post__thumbnail"> <noscript><img decoding="async"
                                                                width="840" height="500"
                                                                src="wp-content/uploads/2019/03/1-backhoe-840x500.jpg"
                                                                class="attachment-backhoe_sblog-thumb size-backhoe_sblog-thumb wp-post-image"
                                                                alt="" /></noscript><img decoding="async"
                                                            width="840" height="500"
                                                            src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20840%20500%22%3E%3C/svg%3E'
                                                            data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/uploads/2019/03/1-backhoe-840x500.jpg"
                                                            class="lazyload attachment-backhoe_sblog-thumb size-backhoe_sblog-thumb wp-post-image"
                                                            alt="" /></div>
                                                    <div class="wd-post__content">
                                                        <ul class="wd-post__meta clearfix">
                                                            <li>28/12/2017</li>
                                                            <li class="wd-post__author">By:root</li>
                                                            <li class="wd-post__category"><a
                                                                    href="blog/category/news/index.html"
                                                                    rel="category tag">News</a></li>
                                                            <li class="wd-post__comments">no comments</li>
                                                        </ul>
                                                        <h4 class="wd-post__title"> <a
                                                                href="blog/2017/12/28/how-to-organize-a-construction-site/index.html">How
                                                                to Setup a Construction Site</a></h4>
                                                        <div class="wd-post__read-more"> <a
                                                                href="blog/2017/12/28/how-to-organize-a-construction-site/index.html">
                                                                Learn more <noscript><img decoding="async"
                                                                        src="wp-content/themes/backhoe/images/more.svg"
                                                                        alt="icon"></noscript><img class="lazyload"
                                                                    decoding="async"
                                                                    src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
                                                                    data-src="https://themes.webdevia.com/backhoe-heavy-construction-equipment-rentals-machinery-wordpress-theme/wp-content/themes/backhoe/images/more.svg"
                                                                    alt="icon"> </a></div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                        <div class="wd_empty_space" data-heightmobile="20" data-heighttablet="40"
                                            data-heightdesktop="84" style="height: 84px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </article>
        </div>
    </main>
@endsection
