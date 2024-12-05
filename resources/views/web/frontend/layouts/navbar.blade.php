
<header class="l-header creative-layout" data-sticky-container>
    <div class="top-bar-container  slideUp sticky ">
        <div class="row">
            <nav class="site-navigation top-bar">
                <div class="top-bar-left">
                    <div class="site-desktop-title top-bar-title">
                        <div class="logo-wrapper " data-dropdown-menu> <a href="{{ url('/') }}" rel="home"
                            title="Backhoe &#8211; Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme"
                            class="active"><img src="{{ asset('frontend/logo/navbar-logo-latest.png') }}"
                                    alt="Backhoe &#8211; Heavy &amp; Construction Equipment Rentals &amp; Machinery WordPress Theme" /></a>
                    </div>
                    </div>
                </div>

                <div class="top-bar-right">
                    <ul id="menu-primary-menu" class="desktop-menu menu">
                        <li
                            class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-home    color-2 menu-item-home">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li
                            class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current-menu-item current_page_item active  is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-3 menu-item-has-children">
                            <a href="{{ url('/') }}">Services</a>
                            <ul class="submenu is-dropdown-submenu ">
                                <li
                                    class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children   is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-3 menu-item-has-children">
                                    <a href="{{ url('/category/agriculture-machinery') }}">Agriculture Machinery</a>
                                </li>
                                <li
                                    class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children   is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-3 menu-item-has-children">
                                    <a href="{{ url('/category/agriculture-vehicle') }}">Agriculture Vehicle</a>
                                </li>
                                <li
                                    class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children   is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-3 menu-item-has-children">
                                    <a href="{{ url('/category/loading-vehicle') }}">Loading Vehicle</a>
                                </li>
                                <li
                                    class=" menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children   is-dropdown-submenu-parent opens-right not-click has-dropdown not-click  color-3 menu-item-has-children">
                                    <a href="{{ url('/category/labour') }}">Labour</a>
                                </li>
                            </ul>
                        </li>
                        <li class=" menu-item menu-item-type-post_type menu-item-object-page    color-4 "><a
                                href="{{ url('/about-us') }}">About Us</a></li>
                        <li class=" menu-item menu-item-type-post_type menu-item-object-page    color-4 "><a
                                href="{{ url('/contact-us') }}">Contact Us</a></li>
                    </ul>
                    <div   id="navbar" class="header-cta show-for-large-up large-screen"> <a
                            href="{{ url('/admin/create-post') }}" class="wd-btn btn-solid btn-medium  icon-after">
                            Post an AD? </a></div>
                    <nav class="mobile-menu vertical menu" id="mobile-menu">
                        <ul id="menu-primary-menu-1" class="vertical menu" data-accordion-menu
                            data-submenu-toggle="true">
                            <li id="menu-item-5424"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-5424">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li id="menu-item-62"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current-menu-item current_page_item menu-item-62">
                                <a href="{{ url('/') }}" aria-current="page">Services</a>
                                <ul class="vertical nested menu">
                                    <li id="menu-item-5352"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5352">
                                        <a href="{{ url('/category/agriculture-machinery') }}">Agriculture Machinery</a>
                                    </li>
                                    <li id="menu-item-3745"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3745">
                                        <a href="{{ url('/category/agriculture-vehicle') }}">Agriculture Vehicle</a>
                                    </li>
                                    <li id="menu-item-3745"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3745">
                                        <a href="{{ url('/category/loading-vehicle') }}">Loading Vehicle</a>
                                    </li>
                                    <li id="menu-item-3745"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3745">
                                        <a href="{{ url('/category/labour') }}">Labour</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-4078"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4078">
                                <a href="{{ url('/about-us') }}">About Us</a>
                            </li>
                            <li id="menu-item-4078"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4078">
                                <a href="{{ url('/contact-us') }}">Contact Us</a>
                            </li>

                        </ul>
                        <div class="header-cta show-for-large-up large-screen"> <a
                                href="{{ url('/admin/create-post') }}"
                                class="wd-btn btn-solid btn-medium  icon-after"> Post An AD? </a></div>
                    </nav>
                </div>

            </nav>
        </div>
    </div>
</header>
