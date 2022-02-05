<style>
    /* Template: Evolo - StartUp HTML Landing Page Template
   Author: Inovatik
   Created: June 2019
   Description: Master CSS file
*/

    /*****************************************
Table Of Contents:

01. General Styles
02. Preloader
03. Navigation
04. Header
05. Customers
06. Services
07. Details 1
08. Details 2
09. Details Lightboxes
10. Pricing
11. Request
12. Video
13. Testimonials
14. About
15. Contact
16. Footer
17. Copyright
18. Back To Top Button
19. Extra Pages
20. Media Queries
******************************************/

    /*****************************************
Colors:
- Backgrounds - turquoise #d8c200
- Backgrounds - blue #d8c200
- Backgrounds - light gray #f7fcfd
- Buttons, bullets, icons, links - turquoise #d8c200
- Cards border, inputs border - light gray #c4d8dc
- Text headers, navbar links - black #393939
- Text body - black #626262
******************************************/


    /******************************/
    /*     01. General Styles     */
    /******************************/
    body,
    html {
        width: 100%;
        height: 100%;
    }

    body,
    p {
        color: #626262;
        font: 400 0.875rem/1.375rem "Raleway", sans-serif;
    }

    .p-large {
        font: 400 1rem/1.5rem "Raleway", sans-serif;
    }

    .p-small {
        font: 400 0.75rem/1.25rem "Raleway", sans-serif;
    }

    .p-heading {
        margin-bottom: 3.875rem;
    }

    .li-space-lg li {
        margin-bottom: 0.25rem;
    }

    .indent {
        padding-left: 1.25rem;
    }

    h1 {
        color: #393939;
        font: 700 3rem/3.5rem "Raleway", sans-serif;
    }

    h2 {
        color: #393939;
        font: 700 2.25rem/2.75rem "Raleway", sans-serif;
    }

    h3 {
        color: #393939;
        font: 700 1.75rem/2rem "Raleway", sans-serif;
    }

    h4 {
        color: #393939;
        font: 700 1.375rem/1.875rem "Raleway", sans-serif;
    }

    h5 {
        color: #393939;
        font: 700 1.125rem/1.625rem "Raleway", sans-serif;
    }

    h6 {
        color: #393939;
        font: 700 1rem/1.5rem "Raleway", sans-serif;
    }

    a {
        color: #626262;
        text-decoration: none;
    }

    a:hover {
        color: #626262;
        text-decoration: none;
    }

    a.turquoise {
        color: #d8c200;
    }

    a.white {
        color: #fff;
    }

    .testimonial-text {
        font: italic 400 1rem/1.5rem "Raleway", sans-serif;
    }

    .testimonial-author {
        font: 700 1rem/1.5rem "Raleway", sans-serif;
    }

    .turquoise {
        color: #d8c200;
    }

    .btn-solid-reg {
        display: inline-block;
        padding: 1.1875rem 2.125rem 1.1875rem 2.125rem;
        border: 0.125rem solid #d8c200;
        border-radius: 2rem;
        background-color: #d8c200;
        color: #fff;
        font: 700 0.75rem/0 "Raleway", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-solid-reg:hover {
        background-color: transparent;
        color: #d8c200;
        text-decoration: none;
    }

    .btn-solid-lg {
        display: inline-block;
        padding: 1.375rem 2.625rem 1.375rem 2.625rem;
        border: 0.125rem solid #d8c200;
        border-radius: 2rem;
        background-color: #d8c200;
        color: #fff;
        font: 700 0.75rem/0 "Raleway", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-solid-lg:hover {
        background-color: transparent;
        color: #d8c200;
        text-decoration: none;
    }

    .btn-outline-reg {
        display: inline-block;
        padding: 1.1875rem 2.125rem 1.1875rem 2.125rem;
        border: 0.125rem solid #d8c200;
        border-radius: 2rem;
        background-color: transparent;
        color: #d8c200;
        font: 700 0.75rem/0 "Raleway", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline-reg:hover {
        background-color: #d8c200;
        color: #fff;
        text-decoration: none;
    }

    .btn-outline-lg {
        display: inline-block;
        padding: 1.375rem 2.625rem 1.375rem 2.625rem;
        border: 0.125rem solid #d8c200;
        border-radius: 2rem;
        background-color: transparent;
        color: #d8c200;
        font: 700 0.75rem/0 "Raleway", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline-lg:hover {
        background-color: #d8c200;
        color: #fff;
        text-decoration: none;
    }

    .btn-outline-sm {
        display: inline-block;
        padding: 1rem 1.625rem 0.875rem 1.625rem;
        border: 0.125rem solid #d8c200;
        border-radius: 2rem;
        background-color: transparent;
        color: #d8c200;
        font: 700 0.625rem/0 "Raleway", sans-serif;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline-sm:hover {
        background-color: #d8c200;
        color: #fff;
        text-decoration: none;
    }

    .form-group {
        position: relative;
        margin-bottom: 1.25rem;
    }

    .form-group.has-error.has-danger {
        margin-bottom: 0.625rem;
    }

    .form-group.has-error.has-danger .help-block.with-errors ul {
        margin-top: 0.375rem;
    }

    .label-control {
        position: absolute;
        top: 0.87rem;
        left: 1.375rem;
        color: #626262;
        opacity: 1;
        font: 400 0.875rem/1.375rem "Raleway", sans-serif;
        cursor: text;
        transition: all 0.2s ease;
    }

    /* IE10+ hack to solve lower label text position compared to the rest of the browsers */
    @media screen and (-ms-high-contrast: active),
    screen and (-ms-high-contrast: none) {
        .label-control {
            top: 0.9375rem;
        }
    }

    .form-control-input:focus+.label-control,
    .form-control-input.notEmpty+.label-control,
    .form-control-textarea:focus+.label-control,
    .form-control-textarea.notEmpty+.label-control {
        top: 0.125rem;
        opacity: 1;
        font-size: 0.75rem;
        font-weight: 700;
    }

    .form-control-input,
    .form-control-select {
        display: block;
        /* needed for proper display of the label in Firefox, IE, Edge */
        width: 100%;
        padding-top: 1.0625rem;
        padding-bottom: 0.0625rem;
        padding-left: 1.3125rem;
        border: 1px solid #c4d8dc;
        border-radius: 0.25rem;
        background-color: #fff;
        color: #626262;
        font: 400 0.875rem/1.875rem "Raleway", sans-serif;
        transition: all 0.2s;
        -webkit-appearance: none;
        /* removes inner shadow on form inputs on ios safari */
    }

    .form-control-select {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        height: 3rem;
    }

    /* IE10+ hack to solve lower label text position compared to the rest of the browsers */
    @media screen and (-ms-high-contrast: active),
    screen and (-ms-high-contrast: none) {
        .form-control-input {
            padding-top: 1.25rem;
            padding-bottom: 0.75rem;
            line-height: 1.75rem;
        }

        .form-control-select {
            padding-top: 0.875rem;
            padding-bottom: 0.75rem;
            height: 3.125rem;
            line-height: 2.125rem;
        }
    }

    select {
        /* you should keep these first rules in place to maintain cross-browser behavior */
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        background-image: url("<?= base_url('assets/'); ?>img/down-arrow.png");
        background-position: 96% 50%;
        background-repeat: no-repeat;
        outline: none;
    }

    select::-ms-expand {
        display: none;
        /* removes the ugly default down arrow on select form field in IE11 */
    }

    .form-control-textarea {
        display: block;
        /* used to eliminate a bottom gap difference between Chrome and IE/FF */
        width: 100%;
        height: 8rem;
        /* used instead of html rows to normalize height between Chrome and IE/FF */
        padding-top: 1.25rem;
        padding-left: 1.3125rem;
        border: 1px solid #c4d8dc;
        border-radius: 0.25rem;
        background-color: #fff;
        color: #626262;
        font: 400 0.875rem/1.75rem "Raleway", sans-serif;
        transition: all 0.2s;
    }

    .form-control-input:focus,
    .form-control-select:focus,
    .form-control-textarea:focus {
        border: 1px solid #a1a1a1;
        outline: none;
        /* Removes blue border on focus */
    }

    .form-control-input:hover,
    .form-control-select:hover,
    .form-control-textarea:hover {
        border: 1px solid #a1a1a1;
    }

    .checkbox {
        font: 400 0.75rem/1.25rem "Raleway", sans-serif;
    }

    input[type='checkbox'] {
        vertical-align: -15%;
        margin-right: 0.375rem;
    }

    /* IE10+ hack to raise checkbox field position compared to the rest of the browsers */
    @media screen and (-ms-high-contrast: active),
    screen and (-ms-high-contrast: none) {
        input[type='checkbox'] {
            vertical-align: -9%;
        }
    }

    .form-control-submit-button {
        display: inline-block;
        width: 100%;
        height: 3.125rem;
        border: 1px solid #d8c200;
        border-radius: 1.5rem;
        background-color: #d8c200;
        color: #fff;
        font: 700 0.75rem/1.75rem "Raleway", sans-serif;
        cursor: pointer;
        transition: all 0.2s;
    }

    .form-control-submit-button:hover {
        background-color: transparent;
        color: #d8c200;
    }

    /* Form Success And Error Message Formatting */
    #rmsgSubmit.h3.text-center.tada.animated,
    #cmsgSubmit.h3.text-center.tada.animated,
    #pmsgSubmit.h3.text-center.tada.animated,
    #rmsgSubmit.h3.text-center,
    #cmsgSubmit.h3.text-center,
    #pmsgSubmit.h3.text-center {
        display: block;
        margin-bottom: 0;
        color: #626262;
        font: 400 1.125rem/1rem "Raleway", sans-serif;
    }

    .help-block.with-errors .list-unstyled {
        color: #626262;
        font-size: 0.75rem;
        line-height: 1.125rem;
        text-align: left;
    }

    .help-block.with-errors ul {
        margin-bottom: 0;
    }

    /* end of form success and error message formatting */

    /* Form Success And Error Message Animation - Animate.css */
    @-webkit-keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        10%,
        20% {
            -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            -ms-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes tada {
        from {
            -webkit-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        10%,
        20% {
            -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            -ms-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
        }

        to {
            -webkit-transform: scale3d(1, 1, 1);
            -ms-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    .tada {
        -webkit-animation-name: tada;
        animation-name: tada;
    }

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    /* end of form success and error message animation - Animate.css */

    /* Fade-move Animation For Lightbox - Magnific Popup */
    /* at start */
    .my-mfp-slide-bottom .zoom-anim-dialog {
        opacity: 0;
        transition: all 0.2s ease-out;
        -webkit-transform: translateY(-1.25rem) perspective(37.5rem) rotateX(10deg);
        -ms-transform: translateY(-1.25rem) perspective(37.5rem) rotateX(10deg);
        transform: translateY(-1.25rem) perspective(37.5rem) rotateX(10deg);
    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready .zoom-anim-dialog {
        opacity: 1;
        -webkit-transform: translateY(0) perspective(37.5rem) rotateX(0);
        -ms-transform: translateY(0) perspective(37.5rem) rotateX(0);
        transform: translateY(0) perspective(37.5rem) rotateX(0);
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing .zoom-anim-dialog {
        opacity: 0;
        -webkit-transform: translateY(-0.625rem) perspective(37.5rem) rotateX(10deg);
        -ms-transform: translateY(-0.625rem) perspective(37.5rem) rotateX(10deg);
        transform: translateY(-0.625rem) perspective(37.5rem) rotateX(10deg);
    }

    /* dark overlay, start state */
    .my-mfp-slide-bottom.mfp-bg {
        opacity: 0;
        transition: opacity 0.2s ease-out;
    }

    /* animate in */
    .my-mfp-slide-bottom.mfp-ready.mfp-bg {
        opacity: 0.8;
    }

    /* animate out */
    .my-mfp-slide-bottom.mfp-removing.mfp-bg {
        opacity: 0;
    }

    /* end of fade-move animation for lightbox - magnific popup */

    /* Fade Animation For Image Slider - Magnific Popup */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fadeIn {
        -webkit-animation: fadeIn 0.6s;
        animation: fadeIn 0.6s;
    }

    @-webkit-keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }

    .fadeOut {
        -webkit-animation: fadeOut 0.8s;
        animation: fadeOut 0.8s;
    }

    /* end of fade animation for image slider - magnific popup */


    /**************************/
    /*     03. Navigation     */
    /**************************/
    .navbar-custom {
        background-color: #fff;
        box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
        font: 600 0.875rem/0.875rem "Raleway", sans-serif;
        transition: all 0.2s;
    }

    .navbar-custom .navbar-brand.logo-image img {
        width: 7.4375rem;
        height: 2rem;
    }

    .navbar-custom .navbar-brand.logo-text {
        font: 600 2rem/1.5rem "Raleway", sans-serif;
        color: #393939;
        text-decoration: none;
    }

    .navbar-custom .navbar-nav {
        margin-top: 0.75rem;
        margin-bottom: 0.5rem;
    }

    .navbar-custom .nav-item .nav-link {
        padding: 0.625rem 0.75rem 0.625rem 0.75rem;
        color: #393939;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .navbar-custom .nav-item .nav-link:hover,
    .navbar-custom .nav-item .nav-link.active {
        color: #d8c200;
    }

    /* Dropdown Menu */
    .navbar-custom .dropdown:hover>.dropdown-menu {
        display: block;
        /* this makes the dropdown menu stay open while hovering it */
        min-width: auto;
        animation: fadeDropdown 0.2s;
        /* required for the fade animation */
    }

    @keyframes fadeDropdown {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    .navbar-custom .dropdown-toggle:focus {
        /* removes dropdown outline on focus */
        outline: 0;
    }

    .navbar-custom .dropdown-menu {
        margin-top: 0;
        border: none;
        border-radius: 0.25rem;
        background-color: #fff;
    }

    .navbar-custom .dropdown-item {
        color: #393939;
        text-decoration: none;
    }

    .navbar-custom .dropdown-item:hover {
        background-color: #fff;
    }

    .navbar-custom .dropdown-item .item-text {
        font: 600 0.875rem/0.875rem "Raleway", sans-serif;
    }

    .navbar-custom .dropdown-item:hover .item-text {
        color: #d8c200;
    }

    .navbar-custom .dropdown-items-divide-hr {
        width: 100%;
        height: 1px;
        margin: 0.75rem auto 0.725rem auto;
        border: none;
        background-color: #c4d8dc;
        opacity: 0.2;
    }

    /* end of dropdown menu */

    .navbar-custom .social-icons {
        display: none;
    }

    .navbar-custom .navbar-toggler {
        border: none;
        color: #393939;
        font-size: 2rem;
    }

    .navbar-custom button[aria-expanded='false'] .navbar-toggler-awesome.fas.fa-times {
        display: none;
    }

    .navbar-custom button[aria-expanded='false'] .navbar-toggler-awesome.fas.fa-bars {
        display: inline-block;
    }

    .navbar-custom button[aria-expanded='true'] .navbar-toggler-awesome.fas.fa-bars {
        display: none;
    }

    .navbar-custom button[aria-expanded='true'] .navbar-toggler-awesome.fas.fa-times {
        display: inline-block;
        margin-right: 0.125rem;
    }


    /*********************/
    /*    04. Header     */
    /*********************/
    .header {
        background-color: #fff;
    }

    .header .header-content {
        padding-top: 8rem;
        padding-bottom: 4rem;
        text-align: center;
    }

    .header .text-container {
        margin-bottom: 4rem;
    }

    .header h1 {
        margin-bottom: 1.125rem;
        font-size: 2.5rem;
        line-height: 3.125rem;
    }

    .header .p-large {
        margin-bottom: 1.875rem;
    }


    /*************************/
    /*     05. Customers     */
    /*************************/
    .slider-1 {
        padding-top: 2.25rem;
        padding-bottom: 2.125rem;
    }

    .slider-1 h5 {
        margin-bottom: 0.75rem;
    }

    .slider-1 .slider-container {
        padding-top: 2.75rem;
        padding-bottom: 2.75rem;
        border-radius: 0.5rem;
        background-color: #f7fcfd;
    }


    /*************************/
    /*     17. Copyright     */
    /*************************/
    .copyright {
        padding-top: 1rem;
        padding-bottom: 0.375rem;
        text-align: center;
        width: 100%;
    }

    .copyright .p-small {
        padding-top: 1.375rem;
        border-top: 1px solid #c4d8dc;
        opacity: 0.7;
    }



    /***************************/
    /*     19. Extra Pages     */
    /***************************/
    .ex-header {
        padding-top: 8rem;
        padding-bottom: 5rem;
        text-align: center;
    }

    .ex-basic-1 {
        padding-top: 2rem;
        padding-bottom: 0.875rem;
        background-color: #f7fcfd;
    }

    .ex-basic-1 .breadcrumbs {
        margin-bottom: 1.125rem;
    }

    .ex-basic-1 .breadcrumbs .fa {
        margin-right: 0.5rem;
        margin-left: 0.625rem;
    }

    .ex-basic-2 {
        padding-top: 4.75rem;
        padding-bottom: 4rem;
    }

    .ex-basic-2 h3 {
        margin-bottom: 1rem;
    }

    .ex-basic-2 .text-container {
        margin-bottom: 3.625rem;
    }

    .ex-basic-2 .text-container.last {
        margin-bottom: 0;
    }

    .ex-basic-2 .list-unstyled .fas {
        color: #d8c200;
        font-size: 0.5rem;
        line-height: 1.375rem;
    }

    .ex-basic-2 .list-unstyled .media-body {
        margin-left: 0.625rem;
    }

    .ex-basic-2 .btn-outline-reg {
        margin-top: 1.75rem;
    }

    .ex-basic-2 .image-container-large {
        margin-bottom: 4rem;
    }

    .ex-basic-2 .image-container-large img {
        border-radius: 0.25rem;
    }

    .ex-basic-2 .image-container-small img {
        border-radius: 0.25rem;
    }

    .ex-basic-2 .text-container.dark-bg {
        padding: 1.625rem 1.5rem 0.75rem 2rem;
        background-color: #f9fafc;
    }


    /*****************************/
    /*     20. Media Queries     */
    /*****************************/
    /* Min-width width 768px */
    @media (min-width: 768px) {

        /* General Styles */
        .p-heading {
            width: 85%;
            margin-right: auto;
            margin-left: auto;
        }

        /* end of general styles */


        /* Header */
        .header .header-content {
            padding-top: 10.5rem;
            height: 30rem;
        }

        .header h1 {
            font-size: 3rem;
            line-height: 3.5rem;
        }

        /* end of header */


        /* Customers */
        .slider-1 {
            padding-top: 3rem;
            padding-bottom: 2.875rem;
        }

        .slider-1 .slider-container {
            padding-right: 3.5rem;
            padding-left: 3.5rem;
        }

        /* end of customers */



        /* Min-width width 992px */
        @media (min-width: 992px) {

            /* Navigation */
            .navbar-custom {
                box-shadow: none;
                background: #fff;
            }

            .navbar-custom .navbar-nav {
                margin-top: 0;
                margin-bottom: 0;
            }

            .navbar-custom .nav-item .nav-link {
                padding: 0.25rem 0.75rem 0.25rem 0.75rem;
                color: #393939;
                opacity: 0.8;
            }

            .navbar-custom .nav-item .nav-link:hover,
            .navbar-custom .nav-item .nav-link.active {
                color: #393939;
                opacity: 1;
            }

            .navbar-custom.top-nav-collapse {
                padding: 0.5rem 1.5rem 0.5rem 2rem;
                box-shadow: 0 0.0625rem 0.375rem 0 rgba(0, 0, 0, 0.1);
                background-color: #fff;
            }

            .navbar-custom.top-nav-collapse .nav-item .nav-link {
                color: #393939;
                opacity: 1;
            }

            .navbar-custom.top-nav-collapse .nav-item .nav-link:hover,
            .navbar-custom.top-nav-collapse .nav-item .nav-link.active {
                color: #d8c200;
            }

            .navbar-custom .dropdown-menu {
                padding-top: 1rem;
                padding-bottom: 1rem;
                border-top: 0.75rem solid rgba(0, 0, 0, 0);
                border-radius: 0.25rem;
            }

            .navbar-custom.top-nav-collapse .dropdown-menu {
                border-top: 0.5rem solid rgba(0, 0, 0, 0);
                box-shadow: 0 0.375rem 0.375rem 0 rgba(0, 0, 0, 0.02);
            }

            .navbar-custom .dropdown-item {
                padding-top: 0.25rem;
                padding-bottom: 0.25rem;
            }

            .navbar-custom .dropdown-items-divide-hr {
                width: 84%;
            }

            .navbar-custom .social-icons {
                display: block;
                margin-left: 0.5rem;
            }

            .navbar-custom .fa-stack {
                margin-bottom: 0.1875rem;
                margin-left: 0.25rem;
                font-size: 0.75rem;
            }

            .navbar-custom .fa-stack-2x {
                color: #d8c200;
                transition: all 0.2s ease;
            }

            .navbar-custom .fa-stack-1x {
                color: #fff;
                transition: all 0.2s ease;
            }

            .navbar-custom .fa-stack:hover .fa-stack-2x {
                color: #fff;
            }

            .navbar-custom .fa-stack:hover .fa-stack-1x {
                color: #d8c200;
            }

            .navbar-custom.top-nav-collapse .fa-stack-2x {
                color: #d8c200;
            }

            .navbar-custom.top-nav-collapse .fa-stack-1x {
                color: #fff;
            }

            .navbar-custom.top-nav-collapse .fa-stack:hover .fa-stack-2x {
                color: #00a7bd;
            }

            .navbar-custom.top-nav-collapse .fa-stack:hover .fa-stack-1x {
                color: #fff;
            }

            /* end of navigation */


            /* General Styles */
            .p-heading {
                width: 65%;
            }

            /* end of general styles */


            /* Header */
            .header {
                background: url("<?= base_url('assets/'); ?>img/header-background.jpg") center center no-repeat;
                background-size: cover;
            }

            .header .header-content {
                padding-top: 11.5rem;
                text-align: left;
            }

            .header .text-container {
                margin-top: 3rem;
                margin-bottom: 0;
            }

            /* end of header */


            /* Extra Pages */
            .ex-header {
                background: url("<?= base_url('assets/'); ?>img/ex-header-background.jpg") center center no-repeat;
                background-size: cover;
            }

            .ex-header h1 {
                width: 80%;
                margin-right: auto;
                margin-left: auto;
            }

            .ex-basic-2 {
                padding-bottom: 5rem;
            }

            .ex-basic-2 .text-container.column {
                margin-bottom: 0;
            }

            /* end of extra pages */
        }

        /* end of min-width width 992px */


        /* Min-width width 1200px */
        @media (min-width: 1200px) {


            .navbar-custom.top-nav-collapse {
                padding: 0.5rem 5rem 0.5rem 5rem;
            }

            /* end of navigation */


            /* General Styles */
            .p-heading {
                width: 55%;
            }

            /* end of general styles */


            /* Header */
            .header .header-content {
                padding-top: 12.5rem;
            }

            .header .text-container {
                margin-top: 5.375rem;
                margin-left: 1rem;
                margin-right: 2rem;
            }

            .header .image-container {
                margin-left: 2rem;
                margin-right: 1rem;
            }

            /* end of header */


            /* Customers */
            .slider-1 .slider-container {
                margin-right: 3rem;
                margin-left: 3rem;
                padding-right: 2.5rem;
                padding-left: 2.5rem;
            }

            /* end of customers */



            /* Extra Pages */
            .ex-header h1 {
                width: 60%;
                margin-right: auto;
                margin-left: auto;
            }

            .ex-basic-2 .form-container {
                margin-left: 1.75rem;
            }

            .ex-basic-2 .image-container-small {
                margin-left: 1.75rem;
            }

            /* end of extra pages */
        }

        /* end of min-width width 1200px */



        /**********************************/
        /*     18. Back To Top Button     */
        /**********************************/
        a.back-to-top {
            position: fixed;
            z-index: 999;
            right: 0.75rem;
            bottom: 0.75rem;
            display: none;
            width: 2.625rem;
            height: 2.625rem;
            border-radius: 1.875rem;
            background: #d8c200 url("<?= base_url('assets/'); ?>img/up-arrow.png") no-repeat center 47%;
            background-size: 1.125rem 1.125rem;
            text-indent: -9999px;
        }

        a:hover.back-to-top {
            background-color: #00a7bd;
        }
</style>