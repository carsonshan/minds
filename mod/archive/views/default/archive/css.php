<?php
/**
 * Archive CSS
 */
?>

.elgg-main > .minds-album{
	padding:4px;
	margin:0;
}
.minds-album > li{
	width:300px;
	padding:0;
	margin:4px;
	height:300px;
}

.archive-upload{
	width:750px;
	margin:auto;
}
.archive-upload > .column {
	float:left;
}
.archive-upload > .column > a >img{
	margin:25px 40px;
}
.archive-upload > .column > a > h3{
	width:100%;
	text-align:center;
}
.archive-wall-title{
	margin:0 10px;
}
.archive-footer{
	width: 100%;
	height: 26px;
	margin: 10px;
	display: block;
}
.archive-footer .license{
	float:left;
}
.player-container{
	width:100%;
	position:relative;
}
/* Position the button */
.vjs-res-button {
float: right;
line-height: 3em;
}

/* Don't show hover effects on title */
ul li.vjs-menu-title.vjs-res-menu-title:hover {
cursor: default;
background-color: transparent;
color: #CCC;

-moz-box-shadow: none;
-webkit-box-shadow: none;
box-shadow: none;
}
**
* videojs.ads.css
*/

/* Ad playback */
.vjs-ad-playing .vjs-progress-control {
  pointer-events: none;
}
.vjs-ad-playing .vjs-play-progress {
  background-color: #ffe400;
}

/* Ad loading */
.vjs-ad-loading .vjs-loading-spinner {
  display: block;
}
.vast-skip-button {
    display: block;
    position: absolute;
    top: 5px;
    right: 0;
    width: auto;
    background-color: #000;
    color: #AAA;
    font-size: 12px;
    font-style: italic;
    line-height: 12px;
    padding: 10px;
    z-index: 2;
}

.vast-skip-button.enabled {
    cursor: pointer;
    color: #fff;
}

.vast-skip-button.enabled:hover {
    cursor: pointer;
    background: #333;
}

.vast-blocker {
    display: block;
    position: absolute;
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}
.player-container .vjs-default-skin .vjs-control-bar { 
	font-size: 125%; 
}
.player-container .vjs-default-skin .vjs-big-play-button{
	left:45%;
	top:45%;
	border-radius:0;
}
.archive-plays{
	float: left;
	padding: 8px 24px;
	color: #333;
	font-weight: bold;
}
.archive-note{
	background: #F3F3F3;
	padding: 16px 32px;
	font-weight: bolder;
}
.archive-description{
	background: #F8F8F8;
	padding: 10px;
	margin: 0 0 10px;
}

.archive-button-right{
	float:right;
	margin:0 2px;
}
.archive-video-wrapper{
	position:relative;
	padding-bottom:55%;
	height:0;
}
.archive-video-wrapper .archive-large-widget{
	clear:both;
	width:100%;
	margin: 0;
	height:100%;
	position:absolute;
}
/*.archive.archive-video{
	width:110%;
	height:0;
	padding-bottom:60%;
	margin-left:-10px;
	position:relative;
	overflow:hidden;
}*/
.archive.archive-video span{
	height:90%;
	width:95%;
}
.archive-video{
	width:110%;
	margin-left:-10px;
	height:0;
	display:block;
	position:relative;
	overflow:hidden;
	padding-bottom: 56.25%;
}
/* If anyone has a better way of getting this centred, please left me know!! /MH */
.archive.archive-video span {
	position:absolute;
	display:inline-block;
	cursor:pointer;
	margin:auto;
	height:100%;
	width:100%;
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/embed_extender/graphics/play_button.png) no-repeat center center;
	z-index:2;
}
.archive-video img{
	position:absolute;
	width:100%;
}
.uiVideoInline.archive object, .uiVideoInline.archive embed{
	position:absolute;
	width:100%;
	height:100%;
	top:0;
	left:0;
	margin:0;
}
/**
 * Right sidebar modules
 */
.elgg-module.sidebar .kalturavideoitem{
	/*padding:10px;*/
}
.elgg-module.sidebar .kalturavideoitem h3 a{
	font-size:13px;
	color:#4690D6;
}
.elgg-module.sidebar .kalturavideoitem p{
	font-size:11px;
	display:block;
}

.elgg-form-archive-save{
	width: 90%;
	background: #F8F8F8;
	padding: 16px;
	margin: auto;
}

.minds-river-attachments .elgg-photo.large{
	border:0;
	padding:0;
	width:100%;
}

.image-thumbnail{
	margin-left:-5%;
	width:100%;
}
.image-thumbnail > img{
	width:110%;
}

.minds-spotlight{
	z-index:1000000;
	margin:100px 5%;
	max-height:90%;
}
.minds-spotlight .main{
	
	background: transparent;
}
.minds-spotlight .sidebar{

}
.minds-spotlight img{
	margin:auto;
	width:auto;
	max-height:100%;
	max-width:100%;
}


/**
 * Lightbox/colorbox (tmp here)
 */
/* Magnific Popup CSS */
.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1042;
  overflow: hidden;
  position: fixed;
  background: #0b0b0b;
  opacity: 0.8;
  filter: alpha(opacity=80); }

.mfp-wrap {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1043;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden; }

.mfp-container {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 8px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

.mfp-container:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle; }

.mfp-align-top .mfp-container:before {
  display: none; }

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 1045; }

.mfp-inline-holder .mfp-content, .mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto; }

.mfp-ajax-cur {
  cursor: progress; }

.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out; }

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-auto-cursor .mfp-content {
  cursor: auto; }

.mfp-close, .mfp-arrow, .mfp-preloader, .mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none; }

.mfp-loading.mfp-figure {
  display: none; }

.mfp-hide {
  display: none !important; }

.mfp-preloader {
  color: #cccccc;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 1044; }
  .mfp-preloader a {
    color: #cccccc; }
    .mfp-preloader a:hover {
      color: white; }

.mfp-s-ready .mfp-preloader {
  display: none; }

.mfp-s-error .mfp-content {
  display: none; }

button.mfp-close, button.mfp-arrow {
  overflow: visible;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  display: block;
  outline: none;
  padding: 0;
  z-index: 1046;
  -webkit-box-shadow: none;
  box-shadow: none; }
button::-moz-focus-inner {
  padding: 0;
  border: 0; }

.mfp-close {
  width: 44px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  right: 0;
  top: 0;
  text-decoration: none;
  text-align: center;
  opacity: 0.65;
  filter: alpha(opacity=65);
  padding: 0 0 18px 10px;
  color: white;
  font-style: normal;
  font-size: 28px;
  font-family: Arial, Baskerville, monospace; }
  .mfp-close:hover, .mfp-close:focus {
    opacity: 1;
    filter: alpha(opacity=100); }
  .mfp-close:active {
    top: 1px; }

.mfp-close-btn-in .mfp-close {
  color: #333333; }

.mfp-image-holder .mfp-close, .mfp-iframe-holder .mfp-close {
  color: white;
  right: -6px;
  text-align: right;
  padding-right: 6px;
  width: 100%; }

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #cccccc;
  font-size: 12px;
  line-height: 18px; }

.mfp-arrow {
  position: absolute;
  opacity: 0.65;
  filter: alpha(opacity=65);
  margin: 0;
  top: 50%;
  margin-top: -55px;
  padding: 0;
  width: 90px;
  height: 110px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }
  .mfp-arrow:active {
    margin-top: -54px; }
  .mfp-arrow:hover, .mfp-arrow:focus {
    opacity: 1;
    filter: alpha(opacity=100); }
  .mfp-arrow:before, .mfp-arrow:after, .mfp-arrow .mfp-b, .mfp-arrow .mfp-a {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent; }
  .mfp-arrow:after, .mfp-arrow .mfp-a {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px; }
  .mfp-arrow:before, .mfp-arrow .mfp-b {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: 0.7; }

.mfp-arrow-left {
  left: 0; }
  .mfp-arrow-left:after, .mfp-arrow-left .mfp-a {
    border-right: 17px solid white;
    margin-left: 31px; }
  .mfp-arrow-left:before, .mfp-arrow-left .mfp-b {
    margin-left: 25px;
    border-right: 27px solid #3f3f3f; }

.mfp-arrow-right {
  right: 0; }
  .mfp-arrow-right:after, .mfp-arrow-right .mfp-a {
    border-left: 17px solid white;
    margin-left: 39px; }
  .mfp-arrow-right:before, .mfp-arrow-right .mfp-b {
    border-left: 27px solid #3f3f3f; }

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px; }
  .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px; }
  .mfp-iframe-holder .mfp-close {
    top: -40px; }

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%; }
  .mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: black; }

/* Main image in popup */
img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 40px 0 40px;
  margin: 0 auto; }

/* The shadow behind the image */
.mfp-figure {
  line-height: 0; }
  .mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #444444; }
  .mfp-figure small {
    color: #bdbdbd;
    display: block;
    font-size: 12px;
    line-height: 14px; }
  .mfp-figure figure {
    margin: 0; }

.mfp-bottom-bar {
  margin-top: -36px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto; }

.mfp-title {
  text-align: left;
  line-height: 18px;
  color: #f3f3f3;
  word-wrap: break-word;
  padding-right: 36px; }

.mfp-image-holder .mfp-content {
  max-width: 100%; }

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer; }

@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  /**
       * Remove all paddings around the image on small screen
       */
  .mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0; }
  .mfp-img-mobile img.mfp-img {
    padding: 0; }
  .mfp-img-mobile .mfp-figure:after {
    top: 0;
    bottom: 0; }
  .mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px; }
  .mfp-img-mobile .mfp-bottom-bar {
    background: rgba(0, 0, 0, 0.6);
    bottom: 0;
    margin: 0;
    top: auto;
    padding: 3px 5px;
    position: fixed;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box; }
    .mfp-img-mobile .mfp-bottom-bar:empty {
      padding: 0; }
  .mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px; }
  .mfp-img-mobile .mfp-close {
    top: 0;
    right: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    text-align: center;
    padding: 0; } }

@media all and (max-width: 900px) {
  .mfp-arrow {
    -webkit-transform: scale(0.75);
    transform: scale(0.75); }
  .mfp-arrow-left {
    -webkit-transform-origin: 0;
    transform-origin: 0; }
  .mfp-arrow-right {
    -webkit-transform-origin: 100%;
    transform-origin: 100%; }
  .mfp-container {
    padding-left: 6px;
    padding-right: 6px; } }

.mfp-ie7 .mfp-img {
  padding: 0; }
.mfp-ie7 .mfp-bottom-bar {
  width: 600px;
  left: 50%;
  margin-left: -300px;
  margin-top: 5px;
  padding-bottom: 5px; }
.mfp-ie7 .mfp-container {
  padding: 0; }
.mfp-ie7 .mfp-content {
  padding-top: 44px; }
.mfp-ie7 .mfp-close {
  top: 0;
  right: 0;
  padding-top: 0; }