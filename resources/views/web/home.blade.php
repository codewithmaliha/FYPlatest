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
                            class="vc_row wpb_row vc_row-fluid vc_custom_1568850484830 vc_row-has-fill" style="height: 50rem">
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
                                        <div class="woocommerce columns-4">
                                            <ul class="products columns-4 grid">
                                                @foreach ($category as $item)
                                                    <li class="product-category product first"> <a
                                                            aria-label="Visit product category Scissor Lift"
                                                            href="{{url('/category/'.$item->slug)}}"><img
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
                                                class="sub_title_b" data-text="SOME FEATURES AND">Welcome to AgriConnect
                                            </h5>
                                            <h3 style="margin:0;font-weight:800;" class="">Your Trusted Partner in Agriculture Machinery Services</h3>
                                        </div>
                                        <div class='wd_empty_space' data-heightmobile='5' data-heighttablet='5'
                                            data-heightdesktop='5' style='height:5px'>
                                        </div>
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <p>
                                                    At AgriConnect, we understand the vital role that modern machinery plays in ensuring a productive and sustainable farming operation. Our mission is to empower farmers with state-of-the-art equipment and reliable services tailored to meet the unique demands of the agricultural sector. Whether you're looking to increase efficiency, reduce costs, or embrace innovative farming practices, our extensive range of vehicles and services is designed to help you achieve your goals with ease.
                                                </p>
                                                <p>
                                                    From high-performance tractors and harvesters to cutting-edge soil preparation and irrigation systems, we provide farmers with access to the latest machinery that meets international standards. In addition to our equipment, we offer a range of services, including routine maintenance, repair support, and technical consultations, to ensure your machines perform at their best year-round. Our knowledgeable team is dedicated to understanding your specific needs and delivering customized solutions that maximize productivity and profitability.
                                                </p>
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
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </section>
                </div>
            </article>
        </div>
    </main>
@endsection
