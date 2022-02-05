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
- Backgrounds - turquoise #00bfd8
- Backgrounds - blue #0079f9
- Backgrounds - light gray #f7fcfd
- Buttons, bullets, icons, links - turquoise #00bfd8
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

body, p {
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
	text-decoration: underline;
}

a:hover {
	color: #626262;
	text-decoration: underline;
}

a.turquoise {
	color: #00bfd8;
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
	color: #00bfd8;
}

.btn-solid-reg {
	display: inline-block;
	padding: 1.1875rem 2.125rem 1.1875rem 2.125rem;
	border: 0.125rem solid #00bfd8;
	border-radius: 2rem;
	background-color: #00bfd8;
	color: #fff;
	font: 700 0.75rem/0 "Raleway", sans-serif;
	text-decoration: none;
	transition: all 0.2s;
}

.btn-solid-reg:hover {
	background-color: transparent;
	color: #00bfd8;
	text-decoration: none;
}

.btn-solid-lg {
	display: inline-block;
	padding: 1.375rem 2.625rem 1.375rem 2.625rem;
	border: 0.125rem solid #00bfd8;
	border-radius: 2rem;
	background-color: #00bfd8;
	color: #fff;
	font: 700 0.75rem/0 "Raleway", sans-serif;
	text-decoration: none;
	transition: all 0.2s;
}

.btn-solid-lg:hover {
	background-color: transparent;
	color: #00bfd8;
	text-decoration: none;
}

.btn-outline-reg {
	display: inline-block;
	padding: 1.1875rem 2.125rem 1.1875rem 2.125rem;
	border: 0.125rem solid #00bfd8;
	border-radius: 2rem;
	background-color: transparent;
	color: #00bfd8;
	font: 700 0.75rem/0 "Raleway", sans-serif;
	text-decoration: none;
	transition: all 0.2s;
}

.btn-outline-reg:hover {
	background-color: #00bfd8;
	color: #fff;
	text-decoration: none;
}

.btn-outline-lg {
	display: inline-block;
	padding: 1.375rem 2.625rem 1.375rem 2.625rem;
	border: 0.125rem solid #00bfd8;
	border-radius: 2rem;
	background-color: transparent;
	color: #00bfd8;
	font: 700 0.75rem/0 "Raleway", sans-serif;
	text-decoration: none;
	transition: all 0.2s;
}

.btn-outline-lg:hover {
	background-color: #00bfd8;
	color: #fff;
	text-decoration: none;
}

.btn-outline-sm {
	display: inline-block;
	padding: 1rem 1.625rem 0.875rem 1.625rem;
	border: 0.125rem solid #00bfd8;
	border-radius: 2rem;
	background-color: transparent;
	color: #00bfd8;
	font: 700 0.625rem/0 "Raleway", sans-serif;
	text-decoration: none;
	transition: all 0.2s;
}

.btn-outline-sm:hover {
	background-color: #00bfd8;
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
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
	.label-control {
		top: 0.9375rem;
	}
}

.form-control-input:focus + .label-control,
.form-control-input.notEmpty + .label-control,
.form-control-textarea:focus + .label-control,
.form-control-textarea.notEmpty + .label-control {
	top: 0.125rem;
	opacity: 1;
	font-size: 0.75rem;
	font-weight: 700;
}

.form-control-input,
.form-control-select {
	display: block; /* needed for proper display of the label in Firefox, IE, Edge */
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
	-webkit-appearance: none; /* removes inner shadow on form inputs on ios safari */
}

.form-control-select {
	padding-top: 0.5rem;
	padding-bottom: 0.5rem;
	height: 3rem;
}

/* IE10+ hack to solve lower label text position compared to the rest of the browsers */
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
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
    background-image: url('../img/down-arrow.png');
    background-position: 96% 50%;
    background-repeat: no-repeat;
    outline: none;
}

select::-ms-expand {
    display: none; /* removes the ugly default down arrow on select form field in IE11 */
}

.form-control-textarea {
	display: block; /* used to eliminate a bottom gap difference between Chrome and IE/FF */
	width: 100%;
	height: 8rem; /* used instead of html rows to normalize height between Chrome and IE/FF */
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
	outline: none; /* Removes blue border on focus */
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
@media screen and (-ms-high-contrast: active), screen and (-ms-high-contrast: none) {  
	input[type='checkbox'] {
		vertical-align: -9%;
	}
}

.form-control-submit-button {
	display: inline-block;
	width: 100%;
	height: 3.125rem;
	border: 1px solid #00bfd8;
	border-radius: 1.5rem;
	background-color: #00bfd8;
	color: #fff;
	font: 700 0.75rem/1.75rem "Raleway", sans-serif;
	cursor: pointer;
	transition: all 0.2s;
}

.form-control-submit-button:hover {
	background-color: transparent;
	color: #00bfd8;
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
	10%, 20% {
		-webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
		-ms-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
		transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
	}
	30%, 50%, 70%, 90% {
		-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
		-ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
		transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
	}
	40%, 60%, 80% {
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
	10%, 20% {
		-webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
		-ms-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
		transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
	}
	30%, 50%, 70%, 90% {
		-webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
		-ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
		transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
	}
	40%, 60%, 80% {
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


/*************************/
/*     02. Preloader     */
/*************************/
.spinner-wrapper {
	position: fixed;
	z-index: 999999;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background: #fff;
}

.spinner {
	position: absolute;
	top: 50%; /* centers the loading animation vertically one the screen */
	left: 50%; /* centers the loading animation horizontally one the screen */
	width: 3.75rem;
	height: 1.25rem;
	margin: -0.625rem 0 0 -1.875rem; /* is width and height divided by two */ 
	text-align: center;
}

.spinner > div {
	display: inline-block;
	width: 1rem;
	height: 1rem;
	border-radius: 100%;
	background-color: #00bfd8;
	-webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
	animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
	-webkit-animation-delay: -0.32s;
	animation-delay: -0.32s;
}

.spinner .bounce2 {
	-webkit-animation-delay: -0.16s;
	animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
	0%, 80%, 100% { -webkit-transform: scale(0); }
	40% { -webkit-transform: scale(1.0); }
}

@keyframes sk-bouncedelay {
	0%, 80%, 100% { 
		-webkit-transform: scale(0);
		-ms-transform: scale(0);
		transform: scale(0);
	} 40% { 
		-webkit-transform: scale(1.0);
		-ms-transform: scale(1.0);
		transform: scale(1.0);
	}
}


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
	color: #00bfd8;
}

/* Dropdown Menu */
.navbar-custom .dropdown:hover > .dropdown-menu {
	display: block; /* this makes the dropdown menu stay open while hovering it */
	min-width: auto;
	animation: fadeDropdown 0.2s; /* required for the fade animation */
}

@keyframes fadeDropdown {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.navbar-custom .dropdown-toggle:focus { /* removes dropdown outline on focus */
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
	color: #00bfd8;
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

.navbar-custom button[aria-expanded='false'] .navbar-toggler-awesome.fas.fa-times{
	display: none;
}

.navbar-custom button[aria-expanded='false'] .navbar-toggler-awesome.fas.fa-bars{
	display: inline-block;
}

.navbar-custom button[aria-expanded='true'] .navbar-toggler-awesome.fas.fa-bars{
	display: none;
}

.navbar-custom button[aria-expanded='true'] .navbar-toggler-awesome.fas.fa-times{
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
	text-align: center;
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


/************************/
/*     06. Services     */
/************************/
.cards-1 {
	padding-top: 4rem;
	padding-bottom: 1.625rem;
	text-align: center;
}

.cards-1 h2 {
	margin-bottom: 1rem;
}

.cards-1 .card {
	max-width: 21rem;
	margin-right: auto;
	margin-bottom: 4.5rem;
	margin-left: auto;
	padding: 3.25rem 2rem 2rem 2rem;
	border: 1px solid #c4d8dc;
	border-radius: 0.5rem;
	background: transparent;
}

.cards-1 .card-image {
	width: 6rem;
	height: 6rem;
	margin-right: auto;
	margin-bottom: 2rem;
	margin-left: auto;
}

.cards-1 .card-title {
	margin-bottom: 0.875rem;
}

.cards-1 .card-body {
	padding: 0;
}


/*************************/
/*     07. Details 1     */
/*************************/
.basic-1 {
	padding-top: 1.625rem;
	padding-bottom: 3.75rem;
}

.basic-1 .text-container {
	margin-bottom: 4rem;
}

.basic-1 h2 {
	margin-bottom: 1.375rem;
}

.basic-1 .btn-solid-reg {
	margin-top: 0.625rem;
}


/*************************/
/*     08. Details 2     */
/*************************/
.basic-2 {
	padding-top: 3.75rem;
	padding-bottom: 4rem;
}

.basic-2 .image-container {
	margin-bottom: 4rem;
}

.basic-2 h2 {
	margin-bottom: 1.375rem;
}

.basic-2 .list-unstyled .fas {
	color: #00bfd8;
	line-height: 1.375rem;
}

.basic-2 .list-unstyled .media-body {
	margin-left: 0.625rem;
}

.basic-2 .btn-solid-reg {
	margin-top: 0.625rem;
}


/**********************************/
/*     09. Details Lightboxes     */
/**********************************/
.lightbox-basic {
	margin: 2.5rem auto;
	padding: 2rem 1.5rem 2rem 1.5rem;
	border-radius: 0.25rem;
	background: #fff;
	text-align: left;
}

.lightbox-basic .container {
	padding-right: 0;
	padding-left: 0;
}

.lightbox-basic .image-container {
	max-width: 33.75rem;
	margin-right: auto;
	margin-bottom: 3rem;
	margin-left: auto;
}

.lightbox-basic h3 {
	margin-bottom: 0.5rem;
}

.lightbox-basic hr {
	width: 2.5rem;
	height: 0.125rem;
	margin-top: 0;
	margin-bottom: 1.25rem;
	margin-left: 0;
	border: 0;
	background-color: #00bfd8;
	text-align: left;
}

.lightbox-basic h4 {
	margin-bottom: 1rem;
}

.lightbox-basic .list-unstyled .fas {
	color: #00bfd8;
	line-height: 1.375rem;
}

.lightbox-basic .list-unstyled .media-body {
	margin-left: 0.625rem;
}

.lightbox-basic .btn-outline-reg,
.lightbox-basic .btn-solid-reg {
	margin-top: 0.75rem;
}

/* Signup Button */
.lightbox-basic .btn-solid-reg.mfp-close {
	position: relative;
	width: auto;
	height: auto;
	color: #fff;
	opacity: 1;
}

.lightbox-basic .btn-solid-reg.mfp-close:hover {
	color: #00bfd8;
}
/* end of signup Button */

/* Back Button */
.lightbox-basic a.mfp-close.as-button {
	position: relative;
	width: auto;
	height: auto;
	margin-left: 0.375rem;
	color: #00bfd8;
	opacity: 1;
}

.lightbox-basic a.mfp-close.as-button:hover {
	color: #fff;
}
/* end of back button */

.lightbox-basic button.mfp-close.x-button {
	position: absolute;
	top: -0.125rem;
	right: -0.125rem;
	width: 2.75rem;
	height: 2.75rem;
	color: #707984;
}


/***********************/
/*     10. Pricing     */
/***********************/
.cards-2 {
	padding-top: 3rem;
	padding-bottom: 2.75rem;
	text-align: center;
}

.cards-2 h2 {
	margin-bottom: 1rem;
}

.cards-2 .card {
	display: block;
	max-width: 19.5rem;
	margin-right: auto;
	margin-bottom: 6rem;
	margin-left: auto;
	border: 1px solid #c4d8dc;
	border-radius: 0.5rem;
	vertical-align: top;
}

.cards-2 .card .card-body {
	padding: 2.5rem 2.75rem 1.875rem 2.5rem;
}

.cards-2 .card .card-title {
	margin-bottom: 0.625rem;
	color: #393939;
	font-weight: 700;
	font-size: 1.75rem;
	line-height: 2.25rem;
	text-align: center;
}

.cards-2 .card .card-subtitle {
	margin-bottom: 1.75rem;
}

.cards-2 .card .cell-divide-hr {
	height: 1px;
	margin-top: 0;
	margin-bottom: 0;
	border: none;
	background-color: #c4d8dc;
}

.cards-2 .card .price {
	padding-top: 0.875rem;
	padding-bottom: 1.5rem;
}

.cards-2 .card .value {
	color: #00bfd8;
	font-weight: 700;
	font-size: 3.5rem;
	line-height: 4rem;
	text-align: center;
}

.cards-2 .card .currency {
	margin-right: 0.375rem;
	color: #00bfd8;
	font-size: 1.5rem;
	vertical-align: 56%;
}

.cards-2 .card .frequency {
	margin-top: 0.25rem;
	font-size: 0.875rem;
	text-align: center;
}

.cards-2 .card .list-unstyled {
	margin-top: 1.875rem;
	margin-bottom: 1.625rem;
	text-align: left;
}

.cards-2 .card .list-unstyled.li-space-lg li {
	margin-bottom: 0.5rem;
}

.cards-2 .card .list-unstyled .fas {
	color: #00bfd8;
	line-height: 1.375rem;
}

.cards-2 .card .list-unstyled .fas.fa-times {
	margin-left: 0.1875rem;
	margin-right: 0.125rem;
	color: #777b7e;
}

.cards-2 .card .list-unstyled .media-body {
	margin-left: 0.625rem;
}

.cards-2 .card .button-wrapper {
	position: absolute;
	right: 0;
	bottom: -1.25rem;
	left: 0;
	text-align: center;
}

.cards-2 .card .btn-solid-reg:hover {
	background-color: #fff;
}

/* Best Value Label */
.cards-2 .card .label {
    position: absolute;
    top: 0;
    right: 0;
    width: 10.625rem;
    height: 10.625rem;
    overflow: hidden;
}

.cards-2 .card .label .best-value {
    position: relative;
	width: 13.75rem;
	padding: 0.3125rem 0 0.3125rem 4.125rem;
    background-color: #00bfd8;
	color: #fff;
    -webkit-transform: rotate(45deg) translate3d(0, 0, 0);
    -ms-transform: rotate(45deg) translate3d(0, 0, 0);
    transform: rotate(45deg) translate3d(0, 0, 0);
}
/* end of best value label */


/***********************/
/*     11. Request     */
/***********************/
.form-1 {
	padding-top: 6.875rem;
	padding-bottom: 6.25rem;
	background-color: #f9fafc;
}

.form-1 h2 {
	margin-bottom: 1.25rem;
}

.form-1 .list-unstyled {
	margin-top: 1.375rem;
}

.form-1 .list-unstyled .fas {
	color: #00bfd8;
	line-height: 1.375rem;
}

.form-1 .list-unstyled .media-body {
	margin-left: 0.625rem;
}

.form-1 .text-container {
	margin-bottom: 3.5rem;
}


/*********************/
/*     12. Video     */
/*********************/
.basic-3 {
	padding-top: 6.875rem;
	padding-bottom: 6.125rem;
}

.basic-3 h2 {
	margin-bottom: 3rem;
	text-align: center;
}

.basic-3 .image-container {
	margin-bottom: 2.25rem;
}

.basic-3 .image-container img {
	border-radius: 0.5rem;
}

.basic-3 .video-wrapper {
	position: relative;
}

/* Video Play Button */
.basic-3 .video-play-button {
	position: absolute;
	z-index: 10;
	top: 50%;
	left: 50%;
	display: block;
	box-sizing: content-box;
	width: 2rem;
	height: 2.75rem;
	padding: 1.125rem 1.25rem 1.125rem 1.75rem;
	border-radius: 50%;
	-webkit-transform: translateX(-50%) translateY(-50%);
	-ms-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);
}
  
.basic-3 .video-play-button:before {
	content: "";
	position: absolute;
	z-index: 0;
	top: 50%;
	left: 50%;
	display: block;
	width: 4.75rem;
	height: 4.75rem;
	border-radius: 50%;
	background: #00bfd8;
	animation: pulse-border 1500ms ease-out infinite;
	-webkit-transform: translateX(-50%) translateY(-50%);
	-ms-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);
}
  
.basic-3 .video-play-button:after {
	content: "";
	position: absolute;
	z-index: 1;
	top: 50%;
	left: 50%;
	display: block;
	width: 4.375rem;
	height: 4.375rem;
	border-radius: 50%;
	background: #00bfd8;
	transition: all 200ms;
	-webkit-transform: translateX(-50%) translateY(-50%);
	-ms-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);
}
  
.basic-3 .video-play-button span {
	position: relative;
	display: block;
	z-index: 3;
	top: 0.375rem;
	left: 0.25rem;
	width: 0;
	height: 0;
	border-left: 1.625rem solid #fff;
	border-top: 1rem solid transparent;
	border-bottom: 1rem solid transparent;
}
  
@keyframes pulse-border {
	0% {
		transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
		opacity: 1;
	}
	100% {
		transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
		opacity: 0;
	}
}
/* end of video play button */

.basic-3 p {
	text-align: center;
}


/****************************/
/*     13. Testimonials     */
/****************************/
.slider-2 {
	padding-top: 7.5rem;
	padding-bottom: 7rem;
	background: url('../img/testimonials-background.jpg') center center no-repeat;
	background-size: cover; 
}

.slider-2 .image-container {
	margin-bottom: 4rem;
}

.slider-2 h2 {
	margin-bottom: 2.5rem;
	text-align: center;
}

.slider-2 .slider-container {
	position: relative;
}

.slider-2 .swiper-container {
	position: static;
	width: 90%;
	text-align: center;
}

.slider-2 .swiper-button-prev:focus,
.slider-2 .swiper-button-next:focus {
	/* even if you can't see it chrome you can see it on mobile device */
	outline: none;
}

.slider-2 .swiper-button-prev {
	left: -0.5rem;
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2028%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%23626262'%2F%3E%3C%2Fsvg%3E");
	background-size: 1.125rem 1.75rem;
}

.slider-2 .swiper-button-next {
	right: -0.5rem;
	background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2028%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%23626262'%2F%3E%3C%2Fsvg%3E");
	background-size: 1.125rem 1.75rem;
}

.slider-2 .card {
	position: relative;
	border: none;
	background-color: transparent;
}

.slider-2 .card-image {
	width: 7rem;
	height: 7rem;
	margin-right: auto;
	margin-bottom: 0.25rem;
	margin-left: auto;
	border-radius: 50%;
}

.slider-2 .card-body {
	padding-bottom: 0;
}

.slider-2 .testimonial-author {
	margin-bottom: 0;
}


/*********************/
/*     14. About     */
/*********************/
.basic-4 {
	padding-top: 7rem;
	padding-bottom: 4rem;
	text-align: center;
}

.basic-4 h2 {
	margin-bottom: 1rem;
	text-align: center;
}

.basic-4 .team-member {
	max-width: 12.5rem;
	margin-right: auto;
	margin-bottom: 3.5rem;
	margin-left: auto;
}

/* Hover Animation */
.basic-4 .image-wrapper {
	overflow: hidden;
	margin-bottom: 1.5rem;
	border-radius: 50%;
}

.basic-4 .image-wrapper img {
	margin: 0;
	transition: all 0.3s;
}

.basic-4 .image-wrapper:hover img {
	-moz-transform: scale(1.15);
	-webkit-transform: scale(1.15);
	transform: scale(1.15);
} 
/* end of hover animation */

.basic-4 .team-member .p-large {
	margin-bottom: 0.25rem;
	font-size: 1.125rem;
}

.basic-4 .team-member .job-title {
	margin-bottom: 0.375rem;
}

.basic-4 .fa-stack {
	margin-top: 0.375rem;
	margin-right: 0.125rem;
	margin-left: 0.125rem;
	font-size: 0.875rem;
}

.basic-4 .fa-stack-2x {
	color: #00bfd8;
	transition: all 0.2s ease;
}

.basic-4 .fa-stack-1x {
	color: #fff;
	transition: all 0.2s ease;
}

.basic-4 .fa-stack:hover .fa-stack-2x {
	color: #00a7bd;
}

.basic-4 .fa-stack:hover .fa-stack-1x {
	color: #fff;
}


/***********************/
/*     15. Contact     */
/***********************/
.form-2 {
	padding-top: 7rem;
	padding-bottom: 6.25rem;
	background: url('../img/contact-background.jpg') center center no-repeat;
	background-size: cover; 
}

.form-2 h2 {
	margin-bottom: 1rem;
	text-align: center;
}

.form-2 .list-unstyled {
	margin-bottom: 3.75rem;
	font-size: 1rem;
	line-height: 1.5rem;
	text-align: center;
}

.form-2 .list-unstyled .fas,
.form-2 .list-unstyled .fab {
	margin-right: 0.5rem;
	font-size: 0.875rem;
	color: #00bfd8;
}

.form-2 .list-unstyled .fa-phone {
	vertical-align: 3%;
}

.form-2 .map-responsive {
	position: relative;
	overflow: hidden;
	height: 0;
	margin-bottom: 4rem;
	padding-bottom: 70%;
	border-radius: 0.25rem;
}

.form-2 .map-responsive iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	border: none; 
}


/**********************/
/*     16. Footer     */
/**********************/
.footer {
	padding-top: 4.625rem;
	padding-bottom: 0.5rem;
}

.footer .footer-col {
	margin-bottom: 2.25rem;
}

.footer h4 {
	margin-bottom: 1rem;
}

.footer .list-unstyled .fas {
	color: #00bfd8;
	font-size: 0.5rem;
	line-height: 1.375rem;
}

.footer .list-unstyled .media-body {
	margin-left: 0.625rem;
}

.footer .fa-stack {
	margin-bottom: 0.75rem;
	margin-right: 0.5rem;
	font-size: 1.5rem;
}

.footer .fa-stack .fa-stack-1x {
    color: #fff;
	transition: all 0.2s ease;
}

.footer .fa-stack .fa-stack-2x {
	color: #00bfd8;
	transition: all 0.2s ease;
}

.footer .fa-stack:hover .fa-stack-1x {
	color: #fff;
}

.footer .fa-stack:hover .fa-stack-2x {
    color: #00a7bd;
}


/*************************/
/*     17. Copyright     */
/*************************/
.copyright {
	padding-top: 1rem;
	padding-bottom: 0.375rem;
	text-align: center;
}

.copyright .p-small {
	padding-top: 1.375rem;
	border-top: 1px solid #c4d8dc;
	opacity: 0.7;
}


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
	background: #00bfd8 url("../img/up-arrow.png") no-repeat center 47%;
	background-size: 1.125rem 1.125rem;
	text-indent: -9999px;
}

a:hover.back-to-top {
	background-color: #00a7bd; 
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
	color: #00bfd8;
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


	/* Video */
	.basic-3 p {
		width: 85%;
		margin-right: auto;
		margin-left: auto;
	}
	/* end of video */


	/* Testimonials */
	.slider-2 .slider-container {
		width: 70%;
		margin-right: auto;
		margin-left: auto;
	}

	.slider-2 .swiper-container {
		width: 85%;
	}

	.slider-2 .swiper-button-prev {
		left: 1rem;
		width: 1.375rem;
		background-size: 1.375rem 2.125rem;
	}
	
	.slider-2 .swiper-button-next {
		right: 1rem;
		width: 1.375rem;
		background-size: 1.375rem 2.125rem;
	}
	/* end of testimonials */


	/* About */
	.basic-4 .team-member {
		display: inline-block;
		width: 12.5rem;
		margin-right: 2rem;
		margin-left: 2rem;
		vertical-align: top;
	}
	/* end of about */


	/* Contact */
	.form-2 .list-unstyled li {
		display: inline-block;
		margin-right: 0.5rem;
		margin-left: 0.5rem;
	}

	.form-2 .list-unstyled .address {
		display: block;
	}
	/* end of contact */


	/* Extra Pages */
	.ex-header {
		padding-top: 11rem;
		padding-bottom: 9rem;
	}

	.ex-basic-2 .text-container.dark {
		padding: 2.5rem 3rem 2rem 3rem;
	}

	.ex-basic-2 .text-container.column {
		width: 90%;
		margin-right: auto;
		margin-left: auto;
	}
	/* end of extra pages */
}
/* end of min-width width 768px */


/* Min-width width 992px */
@media (min-width: 992px) {
	
	/* Navigation */
	.navbar-custom {
		padding: 2.125rem 1.5rem 2.125rem 2rem;
		box-shadow: none;
        background: transparent;
	}
	
	.navbar-custom .navbar-nav {
		margin-top: 0;
		margin-bottom: 0;
	}

	.navbar-custom .nav-item .nav-link {
		padding: 0.25rem 0.75rem 0.25rem 0.75rem;
		color: #fff;
		opacity: 0.8;
	}
	
	.navbar-custom .nav-item .nav-link:hover,
	.navbar-custom .nav-item .nav-link.active {
		color: #fff;
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
		color: #00bfd8;
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
		color: #00bfd8;
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
		color: #00bfd8;
	}

	.navbar-custom.top-nav-collapse .fa-stack-2x {
		color: #00bfd8;
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
		background: url('../img/header-background.jpg') center center no-repeat;
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


	/* Services */
	.cards-1 .card {
		display: inline-block;
		max-width: 17.125rem;
		vertical-align: top;
	}

	.cards-1 .col-lg-12 div.card:nth-child(3n+2) {
		margin-right: 2rem;
		margin-left: 2rem;
	}
	/* end of services */


	/* Details 1 */
	.basic-1 .text-container {
		margin-top: 3.875rem;
		margin-bottom: 0;
	}
	/* end of details 1 */


	/* Details 2 */
	.basic-2 .image-container {
		margin-bottom: 0;
	}

	.basic-2 .text-container {
		margin-top: 3.125rem;
	}
	/* end of details 2 */


	/* Details Lightboxes */
	.lightbox-basic {
		max-width: 62.5rem;
		padding: 2.5rem 2.5rem 2.5rem 2.5rem;
	}

	.lightbox-basic .image-container {
		max-width: 100%;
		margin-right: 2rem;
		margin-bottom: 0;
		margin-left: 0.5rem;
	}
	
	.lightbox-basic h3 {
		margin-top: 0.5rem;
	}
	/* end of details lightboxes */


	/* Pricing */
	.cards-2 .card {
		display: inline-block;
		width: 17.125rem;
		max-width: 100%;
		margin-right: 1rem;
		margin-left: 1rem;
	}
	/* end of pricing */


	/* Request */
	.form-1 {
		padding-top: 7.5rem;
	}

	.form-1 .text-container {
		margin-top: 1.5rem;
		margin-bottom: 0;
	}
	/* end of request */


	/* Video */
	.basic-3 .image-container {
		max-width: 53.125rem;
		margin-right: auto;
		margin-left: auto;
	}

	.basic-3 p {
		width: 65%;
	}
	/* end of video */
	

	/* Testimonials */
	.slider-2 {
		padding-bottom: 7.5rem;
	}

	.slider-2 .image-container {
		margin-bottom: 0;
	}

	.slider-2 .slider-container {
		width: 88%;
	}

	.slider-2 .swiper-container {
		width: 82%;
	}
	/* end of testimonials */


	/* Contact */
	.form-2 .map-responsive {
		margin-bottom: 0;
	}
	/* end of contact */


	/* Extra Pages */
	.ex-header {
		background: url('../img/ex-header-background.jpg') center center no-repeat;
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
	
	/* Navigation */
	.navbar-custom {
		padding: 2.125rem 5rem 2.125rem 5rem;
	}

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


	/* Services */
	.cards-1 .card {
		max-width: 21rem;
	}

	.cards-1 .col-lg-12 div.card:nth-child(3n+2) {
		margin-right: 2.875rem;
		margin-left: 2.875rem;
	}
	/* end of services */


	/* Details 1 */
	.basic-1 .text-container {
		margin-top: 6.125rem;
		margin-right: 4rem;
		margin-left: 1rem;
	}
	/* end of details 1 */


	/* Details 2 */
	.basic-2 .text-container {
		margin-top: 5.375rem;
		margin-right: 1rem;
		margin-left: 4rem;
	}
	/* end of details 2 */


	/* Pricing */
	.cards-2 .card {
		width: 19.5rem;
		margin-right: 1.625rem;
		margin-left: 1.625rem;
	}
	/* end of pricing */


	/* Request */
	.form-1 .text-container {
		margin-right: 1.5rem;
		margin-left: 6rem;
	}

	.form-1 form {
		margin-right: 6rem;
		margin-left: 1.5rem;
	}
	/* end of request */


	/* Video */
	.basic-3 p {
		width: 55%;
	}
	/* end of video */


	/* Testimonials */
	.slider-2 h2 {
		margin-top: 3.5rem;
	}
	/* end of testimonials */


	/* About */
	.basic-4 .team-member {
		margin-right: 2.25rem;
		margin-left: 2.25rem;
	}
	/* end of about */


	/* Contact */
	.form-2 .map-responsive {
		max-width: 31rem;
		margin-right: auto;
		margin-left: auto;
	}

	.form-2 #contactForm {
		max-width: 31rem;
		margin-right: auto;
		margin-left: auto;
	}
	/* end of contact */


	/* Footer */
	.footer .footer-col {
		width: 90%;
	}

	.footer .footer-col.middle {
		margin-right: auto;
		margin-left: auto;
	}

	.footer .footer-col.last {
		margin-right: 0;
		margin-left: auto;
	}
	/* end of footer */


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
</style>