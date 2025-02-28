<style id='webdevia-all-products-style-inline-css' type='text/css'>
        .wp-block-webdevia-all-products {
            position: relative
        }

        .wp-block-webdevia-all-products .product-box-preview {
            display: flex;
            flex-direction: column
        }

        .wp-block-webdevia-all-products .product-box-preview figure {
            height: 100%;
            max-height: 400px
        }

        .wp-block-webdevia-all-products .product-box-preview figure img {
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%
        }

        .wp-block-webdevia-all-products .pagination {
            align-items: center;
            display: flex;
            justify-content: flex-end
        }

        .wp-block-webdevia-all-products .pagination button {
            padding: 8px 16px;
            text-decoration: none
        }

        .wp-block-webdevia-all-products .pagination button:hover {
            cursor: pointer
        }

        .wp-block-webdevia-all-products .overlay {
            background-color: hsla(0, 0%, 81%, .509);
            display: none;
            height: 100%;
            position: absolute;
            width: 100%;
            z-index: 1
        }

        .wp-block-webdevia-all-products .overlay__content {
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .wp-block-webdevia-all-products .overlay.loading {
            display: block
        }

        .wp-block-webdevia-all-products .wd_spinner {
            animation: spin 1s linear infinite;
            border-color: var(--primary-color-contrast);
            border-radius: 100%;
            border-style: solid;
            border-top-color: var(--primary-color);
            border-width: 2px;
            display: inline-block;
            height: 75px;
            width: 75px
        }

        @keyframes spin {
            to {
                transform: rotate(1turn)
            }
        }
    </style>
    <style id='webdevia-categories-list-style-inline-css' type='text/css'>
        .wp-block-webdevia-first-block {
            background-color: #21759b;
            color: #fff;
            padding: 2px
        }
    </style>
    <style id='webdevia-responsive-spacer-style-inline-css' type='text/css'></style>
    <style id='webdevia-carousel-style-inline-css' type='text/css'>
        .wp-block-webdevia-carousel .swiper-wrapper .swiper-slide img {
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            width: 100%
        }
    </style>
    <style id='webdevia-accordion-block-style-inline-css' type='text/css'>
        .wd-blocks-accordion__title {
            --gray-2-color: #fdf8f2;
            align-items: center;
            background: var(--gray-2-color);
            display: flex;
            justify-content: space-between;
            padding: .5em
        }

        .wd-blocks-accordion__title__text {
            margin: 0 0 0 .5rem
        }

        .wd-blocks-accordion__title__icon {
            display: flex;
            transition: transform .5s ease-in-out .2s
        }

        .wd-blocks-accordion__title__icon.accordion-hide {
            transform: rotate(-180deg)
        }

        .wd-blocks-accordion__title__icon svg {
            height: 20px;
            width: 20px
        }

        .wd-blocks-accordion__title:hover {
            cursor: pointer
        }

        .wd-blocks-accordion__content {
            display: grid;
            grid-template-rows: 1fr;
            padding-inline: .5rem;
            transition: grid-template-rows ease-in-out
        }

        .wd-blocks-accordion__content__wrapper {
            overflow: hidden
        }

        .wd-blocks-accordion__content.accordion-hide {
            grid-template-rows: 0fr
        }
    </style>
    <style id='webdevia-team-member-style-inline-css' type='text/css'>
        .wp-block-webdevia-team-member {
            margin-inline: auto !important;
            position: relative;
            width: 100%
        }

        .wp-block-webdevia-team-member.team-list-style1 {
            margin: 0 -15px
        }

        .wp-block-webdevia-team-member.team-list-style1 li {
            list-style: none
        }

        .wp-block-webdevia-team-member.team-list-style1 .components-responsive-wrapper,
        .wp-block-webdevia-team-member.team-list-style1 .team-member__picture {
            margin: 0 15px;
            padding: 0 15px
        }

        .wp-block-webdevia-team-member.team-list-style1 .components-responsive-wrapper img,
        .wp-block-webdevia-team-member.team-list-style1 .team-member__picture img {
            border-radius: 50% !important;
            transition: all .3s cubic-bezier(.02, .54, .58, 1);
            width: 100%
        }

        .wp-block-webdevia-team-member.team-list-style1 .team-member__info {
            text-align: center
        }

        .wp-block-webdevia-team-member.team-list-style1 .team-member__name {
            margin-bottom: 5px;
            margin-top: 30px
        }

        .wp-block-webdevia-team-member.team-list-style1 .team-member__name span {
            position: relative
        }

        .wp-block-webdevia-team-member.team-list-style1 .team-member__name span:before {
            background: var(--primary-color);
            border-radius: 5px;
            bottom: 3px;
            content: "";
            height: 3px;
            left: 0;
            position: absolute;
            transform: scaleX(0);
            transition: .1s linear;
            visibility: hidden;
            width: 100%
        }

        .wp-block-webdevia-team-member.team-list-style1 .team-member__socialmedia {
            display: none
        }

        .wp-block-webdevia-team-member.team-list-style1:hover .components-responsive-wrapper img,
        .wp-block-webdevia-team-member.team-list-style1:hover .team-member__picture img {
            box-shadow: 0 4px 15px rgba(0, 0, 0, .1);
            transform: translate3d(0, -8px, 0)
        }

        .wp-block-webdevia-team-member.team-list-style1:hover h3 span:before,
        .wp-block-webdevia-team-member.team-list-style1:hover h4 span:before {
            transform: scaleX(1);
            visibility: visible
        }

        .wp-block-webdevia-team-member.team-list-style2 {
            background: var(--gray-2-color);
            border: 1px solid transparent;
            border-radius: 5px;
            margin: 0 -15px;
            overflow: hidden;
            position: relative;
            transition: all .35s cubic-bezier(.45, .05, .55, .95)
        }

        .wp-block-webdevia-team-member.team-list-style2 li {
            list-style: none
        }

        .wp-block-webdevia-team-member.team-list-style2.team-member:hover {
            box-shadow: 0 20px 60px hsla(0, 0%, 50%, .2);
            transform: translate3d(0, -20px, 0)
        }

        .wp-block-webdevia-team-member.team-list-style2 .components-responsive-wrapper,
        .wp-block-webdevia-team-member.team-list-style2 .team-member__picture {
            padding: 0
        }

        .wp-block-webdevia-team-member.team-list-style2 .components-responsive-wrapper img,
        .wp-block-webdevia-team-member.team-list-style2 .team-member__picture img {
            border-radius: 5px 5px 0 0;
            width: 100%
        }

        .wp-block-webdevia-team-member.team-list-style2 .team-member__info {
            padding: 25px 30px 10px
        }

        .wp-block-webdevia-team-member.team-list-style2 .team-member__name {
            margin: 0 0 5px
        }

        .wp-block-webdevia-team-member.team-list-style2 .team-member__job {
            font-size: 15px
        }

        .wp-block-webdevia-team-member.team-list-style2 .team-member__socialmedia {
            background: var(--accent-color);
            border-radius: 4px;
            box-shadow: 0 6px 21px rgba(2, 2, 2, .3);
            display: inline;
            padding: 5px 15px;
            position: absolute;
            right: -100%;
            top: 10px;
            transition: all .25s ease-in-out
        }

        .wp-block-webdevia-team-member.team-list-style2 .team-member__socialmedia ul {
            margin: 0
        }

        .wp-block-webdevia-team-member.team-list-style2 .team-member__socialmedia ul li {
            display: inline
        }

        .wp-block-webdevia-team-member.team-list-style2 .team-member__socialmedia ul li a {
            color: #fff;
            font-size: 20px;
            font-weight: 400
        }

        .wp-block-webdevia-team-member.team-list-style2:hover .team-member__socialmedia {
            right: -2px
        }

        .wp-block-webdevia-team-member.team-list-style3 {
            margin: 0 -15px;
            padding: 0 20px
        }

        .wp-block-webdevia-team-member.team-list-style3 .components-responsive-wrapper img,
        .wp-block-webdevia-team-member.team-list-style3 .team-member__picture img {
            border: 20px solid #fff;
            border-radius: 50%;
            box-shadow: 0 8px 21px #ebebec;
            width: 100%
        }

        .wp-block-webdevia-team-member.team-list-style3 .team-member__info {
            border-radius: 34px 34px 0;
            box-shadow: 0 8px 21px #ebebec;
            margin-top: -40px;
            padding: 63px 40px 20px
        }

        .wp-block-webdevia-team-member.team-list-style3 .team-member__socialmedia {
            background: var(--accent-color);
            border-radius: 24px 24px 0;
            box-shadow: 0 6px 21px rgba(2, 2, 2, .3);
            display: inline;
            padding: 5px 28px;
            position: absolute;
            right: -10px;
            top: 10px;
            transition: all .25s ease-in-out
        }

        .wp-block-webdevia-team-member.team-list-style3 .team-member__socialmedia ul {
            margin: 0
        }

        .wp-block-webdevia-team-member.team-list-style3 .team-member__socialmedia ul li {
            display: inline;
            margin: 0
        }

        .wp-block-webdevia-team-member.team-list-style3 .team-member__socialmedia ul li a {
            color: #fff;
            font-size: 20px;
            font-weight: 400
        }

        .wp-block-webdevia-team-member.team-list-style3:hover .team-member__socialmedia {
            right: 60px
        }

        .wp-block-webdevia-team-member.team-list-style2 ul,
        .wp-block-webdevia-team-member.team-list-style3 ul {
            align-items: center;
            display: flex
        }

        .wp-block-webdevia-team-member.team-list-style2 ul li,
        .wp-block-webdevia-team-member.team-list-style3 ul li {
            max-height: 40px;
            width: 50%
        }

        .wp-block-webdevia-team-member.team-list-style2 ul li a,
        .wp-block-webdevia-team-member.team-list-style3 ul li a {
            display: block;
            width: 50px
        }

        .wp-block-webdevia-team-member.team-list-style2 ul li a svg,
        .wp-block-webdevia-team-member.team-list-style3 ul li a svg {
            display: block;
            width: 100%
        }
    </style>
    <style id='webdevia-count-up-style-inline-css' type='text/css'>
        .wp-block-webdevia-count-up {
            padding: 1rem;
            text-align: center
        }

        .wp-block-webdevia-count-up__picture {
            margin: 0 auto 1.25em
        }

        .wp-block-webdevia-count-up__picture img {
            width: 100%
        }

        .wp-block-webdevia-count-up__info__counter,
        .wp-block-webdevia-count-up__info__label {
            margin: 0
        }
    </style>
    <style id='webdevia-text-with-icon-style-inline-css' type='text/css'>
        .wp-block-webdevia-text-with-icon {
            display: flex;
            gap: 1rem
        }

        .wp-block-webdevia-text-with-icon img {
            width: 100%
        }

        .wp-block-webdevia-text-with-icon p {
            margin: 5px 0
        }

        .wp-block-webdevia-text-with-icon__info__title__position-top {
            flex-direction: column;
            gap: .2rem
        }

        .wp-block-webdevia-text-with-icon__info__title__position-right {
            align-items: center;
            flex-direction: row-reverse;
            gap: 1rem;
            justify-content: flex-end
        }

        .wp-block-webdevia-text-with-icon__info__title__position-bottom {
            flex-direction: column-reverse;
            gap: .2rem
        }

        .wp-block-webdevia-text-with-icon__info__title__position-left {
            align-items: center;
            flex-direction: row;
            gap: 1rem;
            justify-content: flex-start
        }

        @media(max-width:750px) {

            .wp-block-webdevia-text-with-icon__info__title__position-bottom,
            .wp-block-webdevia-text-with-icon__info__title__position-left,
            .wp-block-webdevia-text-with-icon__info__title__position-right,
            .wp-block-webdevia-text-with-icon__info__title__position-top {
                align-items: center !important;
                justify-content: center !important;
                text-align: center !important
            }
        }

        .wp-block-webdevia-text-with-icon__info__title__text {
            margin: 0
        }

        .wp-block-webdevia-text-with-icon__position-top {
            flex-direction: column;
            gap: .2rem
        }

        .wp-block-webdevia-text-with-icon__position-right {
            flex-direction: row-reverse;
            justify-content: flex-start
        }

        .wp-block-webdevia-text-with-icon__position-bottom {
            flex-direction: column-reverse;
            gap: .2rem
        }

        .wp-block-webdevia-text-with-icon__position-left {
            flex-direction: row
        }

        @media(max-width:750px) {

            .wp-block-webdevia-text-with-icon__position-bottom,
            .wp-block-webdevia-text-with-icon__position-left,
            .wp-block-webdevia-text-with-icon__position-right,
            .wp-block-webdevia-text-with-icon__position-top {
                align-items: center !important;
                justify-content: center !important;
                text-align: center !important
            }
        }
    </style>
    <style id='webdevia-pricing-table-style-inline-css' type='text/css'>
        .wp-block-webdevia-pricing-table {
            margin-inline: auto;
            padding: 50px 30px 45px;
            transition: all .4s ease-in-out
        }

        .wp-block-webdevia-pricing-table:hover {
            transform: translate3d(0, -10px, 0) !important;
            transition: all .3s cubic-bezier(.68, -.55, .27, 1.55)
        }

        .wp-block-webdevia-pricing-table hr {
            max-width: unset !important
        }

        .wp-block-webdevia-pricing-table li,
        .wp-block-webdevia-pricing-table ul {
            font-size: inherit !important
        }

        .wp-block-webdevia-pricing-table ul {
            padding: 0 !important
        }

        .wp-block-webdevia-pricing-table li {
            color: inherit !important;
            list-style-type: none
        }

        .wp-block-webdevia-pricing-table__header {
            align-items: center;
            display: flex;
            justify-content: space-between
        }

        .wp-block-webdevia-pricing-table__header h3 {
            font-size: inherit !important
        }

        .wp-block-webdevia-pricing-table__header-left h3,
        .wp-block-webdevia-pricing-table__header-right h3 {
            -webkit-margin-after: 0;
            margin-block-end: 0
        }

        .wp-block-webdevia-pricing-table__header-left>:nth-child(2),
        .wp-block-webdevia-pricing-table__header-right>:nth-child(2) {
            font-size: 14px
        }

        .wp-block-webdevia-pricing-table__body {
            font-weight: 400
        }

        .wp-block-webdevia-pricing-table__body__option__icon svg {
            display: block;
            height: 100%;
            width: 30px
        }

        .wp-block-webdevia-pricing-table__body__option__icon__check {
            fill: #fff
        }

        .wp-block-webdevia-pricing-table__body__option__icon__close {
            fill: #ffc400
        }

        .wp-block-webdevia-pricing-table__sub-body {
            font-weight: 500
        }

        .wp-block-webdevia-pricing-table__body__option,
        .wp-block-webdevia-pricing-table__sub-body__option {
            align-items: center;
            display: flex;
            justify-content: space-between
        }
    </style>
    <style id='webdevia-progress-bar-style-inline-css' type='text/css'>
        .wd-block-webdevia-progress-bar .meter {
            background-color: #ccc;
            box-shadow: inset 0 -1px 1px hsla(0, 0%, 100%, .3);
            color: inherit;
            display: block;
            height: 45px;
            margin-bottom: 10px;
            position: relative
        }

        .wd-block-webdevia-progress-bar .meter>span {
            background-color: #2bc253;
            background-image: linear-gradient(0deg, #2bc253 37%, #54f054 69%);
            box-shadow: inset 0 2px 9px hsla(0, 0%, 100%, .3), inset 0 -2px 6px rgba(0, 0, 0, .4);
            color: inherit;
            display: block;
            height: 100%;
            overflow: hidden;
            position: relative;
            transition: width 1.5s ease-out
        }

        .wd-block-webdevia-progress-bar .meter p {
            -webkit-padding-start: .7rem;
            color: inherit;
            font-size: 1.3rem;
            margin: 0;
            padding-inline-start: .7rem;
            position: absolute;
            top: 50%;
            transform: translateY(-50%)
        }

        .wd-block-webdevia-progress-bar .meter>span:after {
            background-image: linear-gradient(-45deg, hsla(0, 0%, 100%, .2) 25%, transparent 0, transparent 50%, hsla(0, 0%, 100%, .2) 0, hsla(0, 0%, 100%, .2) 75%, transparent 0, transparent);
            background-size: 50px 50px;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 8px;
            border-top-left-radius: 20px;
            border-top-right-radius: 8px;
            bottom: 0;
            content: "";
            left: 0;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 1
        }

        .wd-block-webdevia-progress-bar .meter>span.animate-stripes:after {
            animation: move 1.5s linear infinite
        }

        .wd-block-webdevia-progress-bar .animate>span:after {
            display: none
        }

        @keyframes move {
            0% {
                background-position: 0 0
            }

            to {
                background-position: 50px 50px
            }
        }

        .wd-block-webdevia-progress-bar .nostripes>span:after,
        .wd-block-webdevia-progress-bar .nostripes>span>span {
            background-image: none
        }
    </style>

<style id='webdevia-tab-style-inline-css' type='text/css'>
    .wp-block-webdevia-tab {
        max-width: unset !important
    }
</style>
<style id='webdevia-panorama-style-inline-css' type='text/css'>
    .wp-block-webdevia-panorama {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover
    }

    .wp-block-webdevia-panorama #container {
        height: 100%;
        width: 100%
    }

    .wp-block-webdevia-panorama__content {
        display: flex;
        flex-direction: column;
        gap: 10px;
        height: 100%
    }

    .wp-block-webdevia-panorama__content__title {
        margin: 0
    }

    .wp-block-webdevia-panorama__content.is-vertically-aligned-top {
        justify-content: flex-start
    }

    .wp-block-webdevia-panorama__content.is-vertically-aligned-center {
        justify-content: center
    }

    .wp-block-webdevia-panorama__content.is-vertically-aligned-bottom {
        justify-content: flex-end
    }

    .wp-block-webdevia-panorama__content.is-horizontally-aligned-left {
        align-items: flex-start
    }

    .wp-block-webdevia-panorama__content.is-horizontally-aligned-center {
        align-items: center
    }

    .wp-block-webdevia-panorama__content.is-horizontally-aligned-right {
        align-items: flex-end
    }
</style>
<style id='webdevia-banner-style-inline-css' type='text/css'>
    .wd-block-webdevia-banner {
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover
    }

    .wd-block-webdevia-banner__content {
        display: flex;
        flex-direction: column;
        gap: 10px;
        height: 100%
    }

    .wd-block-webdevia-banner__content__title {
        margin: 0
    }

    .wd-block-webdevia-banner__content.is-vertically-aligned-top {
        justify-content: flex-start
    }

    .wd-block-webdevia-banner__content.is-vertically-aligned-center {
        justify-content: center
    }

    .wd-block-webdevia-banner__content.is-vertically-aligned-bottom {
        justify-content: flex-end
    }

    .wd-block-webdevia-banner__content.is-horizontally-aligned-left {
        align-items: flex-start
    }

    .wd-block-webdevia-banner__content.is-horizontally-aligned-center {
        align-items: center
    }

    .wd-block-webdevia-banner__content.is-horizontally-aligned-right {
        align-items: flex-end
    }
</style>
<style id='webdevia-testimonial-style-inline-css' type='text/css'></style>
<style id='webdevia-timeline-style-inline-css' type='text/css'>
    .wd-block-webdevia-timeline {
        position: relative
    }

    .wd-block-webdevia-timeline__events {
        align-items: center;
        display: flex;
        gap: 20px;
        list-style-type: none;
        margin: 0;
        padding: 10px
    }

    .wd-block-webdevia-timeline__events .timeline__event {
        display: flex;
        position: relative;
        width: 100%
    }

    .wd-block-webdevia-timeline__events .timeline__event__img {
        height: 200px;
        -o-object-fit: contain;
        object-fit: contain
    }

    .wd-block-webdevia-timeline__events .timeline__event__content__head {
        margin: 0
    }

    .wd-block-webdevia-timeline__events .timeline__event__content__head a {
        text-decoration: none
    }

    .wd-block-webdevia-timeline__events .timeline__event:before {
        background-color: #0f0000;
        border-radius: 50%;
        content: "";
        height: 17px;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 17px
    }

    .wd-block-webdevia-timeline__events:before {
        background-color: #d3d3d3;
        content: "";
        position: absolute
    }

    .wd-block-webdevia-timeline__events-layout-ha,
    .wd-block-webdevia-timeline__events-layout-hs {
        flex-direction: row;
        flex-wrap: nowrap;
        gap: 15px;
        overflow-x: scroll
    }

    .wd-block-webdevia-timeline__events-layout-ha .timeline__event,
    .wd-block-webdevia-timeline__events-layout-hs .timeline__event {
        gap: 60px
    }

    .wd-block-webdevia-timeline__events-layout-ha .timeline__event__content,
    .wd-block-webdevia-timeline__events-layout-hs .timeline__event__content {
        text-align: center
    }

    .wd-block-webdevia-timeline__events-layout-ha:before,
    .wd-block-webdevia-timeline__events-layout-hs:before {
        height: 2px;
        left: 50%;
        transform: translateX(-50%);
        width: 95%
    }

    .wd-block-webdevia-timeline__events-layout-ha .timeline__event {
        flex-direction: column
    }

    .wd-block-webdevia-timeline__events-layout-ha .timeline__event__content,
    .wd-block-webdevia-timeline__events-layout-ha .timeline__event__img {
        padding-block: 0 30px
    }

    .wd-block-webdevia-timeline__events-layout-ha .timeline__event:nth-child(2n) {
        flex-direction: column-reverse
    }

    .wd-block-webdevia-timeline__events-layout-ha .timeline__event:nth-child(2n) .timeline__event__content,
    .wd-block-webdevia-timeline__events-layout-ha .timeline__event:nth-child(2n) .timeline__event__img {
        padding-block: 30px 0
    }

    .wd-block-webdevia-timeline__events-layout-hs .timeline__event {
        flex-direction: column;
        gap: 0
    }

    .wd-block-webdevia-timeline__events-layout-hs .timeline__event__img {
        padding-block: 0 80px
    }

    .wd-block-webdevia-timeline__events-layout-vse,
    .wd-block-webdevia-timeline__events-layout-vsi {
        flex-direction: column
    }

    .wd-block-webdevia-timeline__events-layout-vse .timeline__event,
    .wd-block-webdevia-timeline__events-layout-vsi .timeline__event {
        align-items: center
    }

    .wd-block-webdevia-timeline__events-layout-vse .timeline__event__content,
    .wd-block-webdevia-timeline__events-layout-vse .timeline__event__img,
    .wd-block-webdevia-timeline__events-layout-vsi .timeline__event__content,
    .wd-block-webdevia-timeline__events-layout-vsi .timeline__event__img {
        width: 50%
    }

    .wd-block-webdevia-timeline__events-layout-vse:before,
    .wd-block-webdevia-timeline__events-layout-vsi:before {
        height: 95%;
        width: 2px
    }

    .wd-block-webdevia-timeline__events-layout-vse .timeline__event {
        flex-direction: row;
        gap: 100px
    }

    .wd-block-webdevia-timeline__events-layout-vse .timeline__event:nth-child(2n) {
        flex-direction: row-reverse
    }

    .wd-block-webdevia-timeline__events-layout-vse .timeline__event:nth-child(2n) .timeline__event__content {
        text-align: right
    }

    .wd-block-webdevia-timeline__events-layout-vsi .timeline__event {
        flex-direction: row-reverse;
        gap: 20px;
        margin: 0 0 0 52%;
        width: 48%
    }

    .wd-block-webdevia-timeline__events-layout-vsi .timeline__event:before {
        left: -4.2%
    }

    .wd-block-webdevia-timeline__events-layout-vsi .timeline__event:nth-child(2n) {
        flex-direction: row;
        margin: 0 52% 0 0
    }

    .wd-block-webdevia-timeline__events-layout-vsi .timeline__event:nth-child(2n):before {
        left: 104.2%
    }

    .wd-block-webdevia-timeline__events__navigation__next,
    .wd-block-webdevia-timeline__events__navigation__prev {
        cursor: pointer;
        display: flex;
        height: 30px;
        position: absolute;
        width: 30px
    }

    .wd-block-webdevia-timeline__events__navigation__next {
        right: 0
    }

    .wd-block-webdevia-timeline__events__navigation__prev {
        left: 0
    }

    .wd-block-webdevia-timeline__events::-webkit-scrollbar {
        display: none
    }
</style>
<style id='webdevia-portfolio-style-inline-css' type='text/css'></style>
<style id='webdevia-maps-style-inline-css' type='text/css'></style>
<style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #fff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--color--foreground: #000;
        --wp--preset--color--background: #fff;
        --wp--preset--color--primary: #1a4548;
        --wp--preset--color--secondary: #ffe2c7;
        --wp--preset--color--tertiary: #f6f6f6;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, #9b51e0 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, #7adcb4 0%, #00d082 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, #cf2e2e 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, #eee 0%, #a9b8c3 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, #4aeadc 0%, #9778d1 20%, #cf2aba 40%, #ee2c82 60%, #fb6962 80%, #fef84c 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, #ffceec 0%, #9896f0 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, #fecda5 0%, #fe2d2d 50%, #6b003e 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, #ffcb70 0%, #c751c0 50%, #4158d0 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, #fff5cb 0%, #b6e3d4 50%, #33a7b5 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, #caf880 0%, #71ce7e 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, #020381 0%, #2874fc 100%);
        --wp--preset--gradient--vertical-secondary-to-tertiary: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--tertiary) 100%);
        --wp--preset--gradient--vertical-secondary-to-background: linear-gradient(to bottom, var(--wp--preset--color--secondary) 0%, var(--wp--preset--color--background) 100%);
        --wp--preset--gradient--vertical-tertiary-to-background: linear-gradient(to bottom, var(--wp--preset--color--tertiary) 0%, var(--wp--preset--color--background) 100%);
        --wp--preset--gradient--diagonal-primary-to-foreground: linear-gradient(to bottom right, var(--wp--preset--color--primary) 0%, var(--wp--preset--color--foreground) 100%);
        --wp--preset--gradient--diagonal-secondary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--secondary) 50%, var(--wp--preset--color--background) 50%);
        --wp--preset--gradient--diagonal-background-to-secondary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--secondary) 50%);
        --wp--preset--gradient--diagonal-tertiary-to-background: linear-gradient(to bottom right, var(--wp--preset--color--tertiary) 50%, var(--wp--preset--color--background) 50%);
        --wp--preset--gradient--diagonal-background-to-tertiary: linear-gradient(to bottom right, var(--wp--preset--color--background) 50%, var(--wp--preset--color--tertiary) 50%);
        --wp--preset--font-size--small: .9rem;
        --wp--preset--font-size--medium: 1rem;
        --wp--preset--font-size--large: 1.75rem;
        --wp--preset--font-size--x-large: clamp(1.75rem, 3vw, 2.25rem);
        --wp--preset--font-family--system-font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
        --wp--preset--font-family--source-serif-pro: "Source Serif Pro", serif;
        --wp--preset--spacing--20: .44rem;
        --wp--preset--spacing--30: .67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, .2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, .4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, .2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        --wp--custom--spacing--small: max(1.25rem, 5vw);
        --wp--custom--spacing--medium: clamp(2rem, 8vw, calc(4*var(--wp--style--block-gap)));
        --wp--custom--spacing--large: clamp(4rem, 10vw, 8rem);
        --wp--custom--spacing--outer: var(--wp--custom--spacing--small, 1.25rem);
        --wp--custom--typography--font-size--huge: clamp(2.25rem, 4vw, 2.75rem);
        --wp--custom--typography--font-size--gigantic: clamp(2.75rem, 6vw, 3.25rem);
        --wp--custom--typography--font-size--colossal: clamp(3.25rem, 8vw, 6.25rem);
        --wp--custom--typography--line-height--tiny: 1.15;
        --wp--custom--typography--line-height--small: 1.2;
        --wp--custom--typography--line-height--medium: 1.4;
        --wp--custom--typography--line-height--normal: 1.6
    }

    body {
        margin: 0;
        --wp--style--global--content-size: 1300px;
        --wp--style--global--wide-size: 1600px
    }

    .wp-site-blocks>.alignleft {
        float: left;
        margin-right: 2em
    }

    .wp-site-blocks>.alignright {
        float: right;
        margin-left: 2em
    }

    .wp-site-blocks>.aligncenter {
        justify-content: center;
        margin-left: auto;
        margin-right: auto
    }

    :where(.wp-site-blocks)>* {
        margin-block-start: 1.5rem;
        margin-block-end: 0
    }

    :where(.wp-site-blocks)>:first-child:first-child {
        margin-block-start: 0
    }

    :where(.wp-site-blocks)>:last-child:last-child {
        margin-block-end: 0
    }

    body {
        --wp--style--block-gap: 1.5rem
    }

    :where(body .is-layout-flow)>:first-child:first-child {
        margin-block-start: 0
    }

    :where(body .is-layout-flow)>:last-child:last-child {
        margin-block-end: 0
    }

    :where(body .is-layout-flow)>* {
        margin-block-start: 1.5rem;
        margin-block-end: 0
    }

    :where(body .is-layout-constrained)>:first-child:first-child {
        margin-block-start: 0
    }

    :where(body .is-layout-constrained)>:last-child:last-child {
        margin-block-end: 0
    }

    :where(body .is-layout-constrained)>* {
        margin-block-start: 1.5rem;
        margin-block-end: 0
    }

    :where(body .is-layout-flex) {
        gap: 1.5rem
    }

    :where(body .is-layout-grid) {
        gap: 1.5rem
    }

    body .is-layout-flow>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em
    }

    body .is-layout-flow>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0
    }

    body .is-layout-flow>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important
    }

    body .is-layout-constrained>.alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em
    }

    body .is-layout-constrained>.alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0
    }

    body .is-layout-constrained>.aligncenter {
        margin-left: auto !important;
        margin-right: auto !important
    }

    body .is-layout-constrained>:where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important
    }

    body .is-layout-constrained>.alignwide {
        max-width: var(--wp--style--global--wide-size)
    }

    body .is-layout-flex {
        display: flex
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center
    }

    body .is-layout-flex>* {
        margin: 0
    }

    body .is-layout-grid {
        display: grid
    }

    body .is-layout-grid>* {
        margin: 0
    }

    body {
        background-color: var(--wp--preset--color--background);
        color: var(--wp--preset--color--foreground);
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        line-height: var(--wp--custom--typography--line-height--normal);
        padding-top: 0;
        padding-right: 0;
        padding-bottom: 0;
        padding-left: 0
    }

    a:where(:not(.wp-element-button)) {
        color: var(--wp--preset--color--foreground);
        text-decoration: underline
    }

    h1 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--colossal);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny)
    }

    h2 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--gigantic);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--small)
    }

    h3 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--huge);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny)
    }

    h4 {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--preset--font-size--x-large);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny)
    }

    h5 {
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        font-weight: 700;
        line-height: var(--wp--custom--typography--line-height--normal);
        text-transform: uppercase
    }

    h6 {
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        font-weight: 400;
        line-height: var(--wp--custom--typography--line-height--normal);
        text-transform: uppercase
    }

    .wp-element-button,
    .wp-block-button__link {
        background-color: #32373c;
        border-width: 0;
        color: #fff;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        text-decoration: none
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important
    }

    .has-foreground-color {
        color: var(--wp--preset--color--foreground) !important
    }

    .has-background-color {
        color: var(--wp--preset--color--background) !important
    }

    .has-primary-color {
        color: var(--wp--preset--color--primary) !important
    }

    .has-secondary-color {
        color: var(--wp--preset--color--secondary) !important
    }

    .has-tertiary-color {
        color: var(--wp--preset--color--tertiary) !important
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important
    }

    .has-foreground-background-color {
        background-color: var(--wp--preset--color--foreground) !important
    }

    .has-background-background-color {
        background-color: var(--wp--preset--color--background) !important
    }

    .has-primary-background-color {
        background-color: var(--wp--preset--color--primary) !important
    }

    .has-secondary-background-color {
        background-color: var(--wp--preset--color--secondary) !important
    }

    .has-tertiary-background-color {
        background-color: var(--wp--preset--color--tertiary) !important
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important
    }

    .has-foreground-border-color {
        border-color: var(--wp--preset--color--foreground) !important
    }

    .has-background-border-color {
        border-color: var(--wp--preset--color--background) !important
    }

    .has-primary-border-color {
        border-color: var(--wp--preset--color--primary) !important
    }

    .has-secondary-border-color {
        border-color: var(--wp--preset--color--secondary) !important
    }

    .has-tertiary-border-color {
        border-color: var(--wp--preset--color--tertiary) !important
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important
    }

    .has-vertical-secondary-to-tertiary-gradient-background {
        background: var(--wp--preset--gradient--vertical-secondary-to-tertiary) !important
    }

    .has-vertical-secondary-to-background-gradient-background {
        background: var(--wp--preset--gradient--vertical-secondary-to-background) !important
    }

    .has-vertical-tertiary-to-background-gradient-background {
        background: var(--wp--preset--gradient--vertical-tertiary-to-background) !important
    }

    .has-diagonal-primary-to-foreground-gradient-background {
        background: var(--wp--preset--gradient--diagonal-primary-to-foreground) !important
    }

    .has-diagonal-secondary-to-background-gradient-background {
        background: var(--wp--preset--gradient--diagonal-secondary-to-background) !important
    }

    .has-diagonal-background-to-secondary-gradient-background {
        background: var(--wp--preset--gradient--diagonal-background-to-secondary) !important
    }

    .has-diagonal-tertiary-to-background-gradient-background {
        background: var(--wp--preset--gradient--diagonal-tertiary-to-background) !important
    }

    .has-diagonal-background-to-tertiary-gradient-background {
        background: var(--wp--preset--gradient--diagonal-background-to-tertiary) !important
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important
    }

    .has-system-font-font-family {
        font-family: var(--wp--preset--font-family--system-font) !important
    }

    .has-source-serif-pro-font-family {
        font-family: var(--wp--preset--font-family--source-serif-pro) !important
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit
    }

    .wp-block-pullquote {
        border-width: 1px 0;
        font-size: 1.5em;
        line-height: 1.6
    }

    .wp-block-button .wp-block-button__link {
        background-color: var(--wp--preset--color--primary);
        border-radius: 0;
        color: var(--wp--preset--color--background);
        font-size: var(--wp--preset--font-size--medium)
    }

    .wp-block-post-title {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--gigantic);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--tiny)
    }

    .wp-block-post-comments {
        padding-top: var(--wp--custom--spacing--small)
    }

    .wp-block-query-title {
        font-family: var(--wp--preset--font-family--source-serif-pro);
        font-size: var(--wp--custom--typography--font-size--gigantic);
        font-weight: 300;
        line-height: var(--wp--custom--typography--line-height--small)
    }

    .wp-block-quote {
        border-width: 1px
    }

    .wp-block-site-title {
        font-family: var(--wp--preset--font-family--system-font);
        font-size: var(--wp--preset--font-size--medium);
        font-weight: 400;
        line-height: var(--wp--custom--typography--line-height--normal)
    }
</style>


