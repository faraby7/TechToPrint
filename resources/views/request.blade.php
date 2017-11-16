<?php
  session_start();
  $_SESSION['id_image']="";


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang=en>
<head>
<script src="sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="html2canvas.js" type="text/javascript"></script>
<script type="text/javascript">
    function takeScreenShot(){
     
        var  element = $("#emailscreen");
        html2canvas(element,{background:'#FFFFFF',onrendered:function(canvas){
            var imgData = canvas.toDataURL('image/jpeg');

            $.ajax({
              url:'save.php',
              type:'post',
              dataType:'text',
              data:{
                base64data:imgData
              }

            });
        }
      });
    }
</script>
  <script src="jquery-1.8.1.min.js" type="text/javascript"></script>

  <meta charset=utf-8>
  <meta http-equiv=X-UA-Compatible content="IE=edge">
  <title>Web To Print - TechToPrint - Webtoprint Solution</title>
  <meta name=keywords content="Web To Print" />
  <meta name=description content="Web to Print Solutions From TechToPrint is a complete A cloud-based, easy-to-use, professional webtoprint solution for your company">
  <meta name=author content=TechToPrint.com>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon" />
  <link rel=apple-touch-icon href="../img/apple-touch-icon.png">
  <link rel=stylesheet href="../vendor/bootstrap/css/bootstrap.min.css">
  <link rel=stylesheet href="../css/themcom.css">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <link rel='dns-prefetch' href='http://maxcdn.bootstrapcdn.com/' />
  <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
  <link rel="alternate" type="application/rss+xml" title="8web Interactive &raquo; Feed" href="https://8web.gr/en/feed/" />
  <meta property="fb:app_id" content="669856226400938" />
  <link rel='stylesheet' id='lfb-reset-css' href='wp-content/plugins/WP_Estimation_Form/assets/css/reset.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='lfb-bootstrap-css' href='wp-content/plugins/WP_Estimation_Form/assets/css/bootstrap.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='lfb-bootstrap-select-css' href='wp-content/plugins/WP_Estimation_Form/assets/css/bootstrap-select.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='lfb-flat-ui-css' href='wp-content/plugins/WP_Estimation_Form/assets/css/flat-ui_frontend.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='lfb-colpick-css' href='wp-content/plugins/WP_Estimation_Form/assets/css/colpick.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='lfb-dropzone-css' href='wp-content/plugins/WP_Estimation_Form/assets/css/dropzone.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='lfb-fontawesome-css' href='wp-content/plugins/WP_Estimation_Form/assets/css/font-awesome.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='lfb-estimationpopup-css' href='wp-content/plugins/WP_Estimation_Form/assets/css/lfb_forms.min.css' type='text/css' media='all' />
  <link rel='stylesheet' id='typed-cursor-css' href='wp-content/plugins/animated-typing-effect/assets/css/cursor.css' type='text/css' media='all' />
  <link rel='stylesheet' id='contact-form-7-css' href='wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
  <link rel='stylesheet' id='jvcf7_style-css' href='wp-content/plugins/jquery-validation-for-contact-form-7/css/jvcf7_validate.css' type='text/css' media='all' />
  <link rel='stylesheet' id='wpml-legacy-dropdown-0-css' href='wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown/style.css' type='text/css' media='all' />
  <script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/core.min.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/widget.min.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/position.min.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/tooltip.min.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/mouse.min.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/slider.min.js'></script>
  <script type='text/javascript' src='wp-includes/js/jquery/ui/datepicker.min.js'></script>
  <script type='text/javascript' src='wp-content/plugins/WP_Estimation_Form/assets/js/jquery.ui.touch-punch.min.js'></script>
  <script type='text/javascript' src='wp-content/plugins/WP_Estimation_Form/assets/js/bootstrap.min.js'></script>
  <script type='text/javascript' src='wp-content/plugins/WP_Estimation_Form/assets/js/bootstrap-switch.min.js'></script>
  <script type='text/javascript' src='wp-content/plugins/WP_Estimation_Form/assets/js/bootstrap-select.min.js'></script>
  <script type='text/javascript' src='wp-content/plugins/WP_Estimation_Form/assets/js/colpick.min.js'></script>
  <script type='text/javascript' src='wp-content/plugins/WP_Estimation_Form/assets/js/dropzone.min.js'></script>
  <script type='text/javascript' src='wp-content/plugins/WP_Estimation_Form/assets/js/jquery-ui-i18n.min.js'></script>
  <script type='text/javascript'>
   
    var wpe_forms = [{
      "currentRef": 0,
      "ajaxurl": "https:\/\/8web.gr\/wp-admin\/admin-ajax.php",
      "initialPrice": "0",
      "max_price": "2000",
      "percentToPay": "50",
      "currency": "\u20ac",
      "currencyPosition": "right",
      "intro_enabled": "0",
      "save_to_cart": "0",
      "colorA": "#19BB9B",
      "close_url": "#",
      "animationsSpeed": "0.5",
      "email_toUser": "1",
      "showSteps": "0",
      "formID": "2",
      "gravityFormID": "0",
      "showInitialPrice": "0",
      "disableTipMobile": "0",
      "legalNoticeEnable": "0",
      "links": [{
        "id": "1",
        "formID": "2",
        "originID": "22",
        "destinationID": "23",
        "conditions": "[]",
        "operator": ""
      }, {
        "id": "86",
        "formID": "2",
        "originID": "27",
        "destinationID": "26",
        "conditions": "[{\"interaction\":\"27_93\",\"action\":\"clicked\"},{\"interaction\":\"27_92\",\"action\":\"clicked\"}]",
        "operator": "OR"
      }, {
        "id": "87",
        "formID": "2",
        "originID": "26",
        "destinationID": "28",
        "conditions": "[{\"interaction\":\"26_84\",\"action\":\"clicked\"},{\"interaction\":\"26_85\",\"action\":\"clicked\"},{\"interaction\":\"26_86\",\"action\":\"clicked\"},{\"interaction\":\"26_87\",\"action\":\"clicked\"},{\"interaction\":\"26_88\",\"action\":\"clicked\"},{\"interaction\":\"26_81\",\"action\":\"clicked\"},{\"interaction\":\"26_82\",\"action\":\"clicked\"},{\"interaction\":\"26_83\",\"action\":\"clicked\"},{\"interaction\":\"26_89\",\"action\":\"clicked\"},{\"interaction\":\"26_84\",\"action\":\"unclicked\"},{\"interaction\":\"26_85\",\"action\":\"unclicked\"},{\"interaction\":\"26_86\",\"action\":\"unclicked\"},{\"interaction\":\"26_87\",\"action\":\"unclicked\"},{\"interaction\":\"26_90\",\"action\":\"unclicked\"},{\"interaction\":\"26_88\",\"action\":\"unclicked\"},{\"interaction\":\"26_81\",\"action\":\"unclicked\"},{\"interaction\":\"26_82\",\"action\":\"unclicked\"},{\"interaction\":\"26_83\",\"action\":\"unclicked\"},{\"interaction\":\"26_89\",\"action\":\"unclicked\"}]",
        "operator": "OR"
      }, {
        "id": "88",
        "formID": "2",
        "originID": "28",
        "destinationID": "29",
        "conditions": "[{\"interaction\":\"28_97\",\"action\":\"clicked\"},{\"interaction\":\"28_98\",\"action\":\"clicked\"},{\"interaction\":\"28_94\",\"action\":\"clicked\"},{\"interaction\":\"28_95\",\"action\":\"clicked\"},{\"interaction\":\"28_96\",\"action\":\"clicked\"},{\"interaction\":\"28_99\",\"action\":\"clicked\"},{\"interaction\":\"28_100\",\"action\":\"clicked\"},{\"interaction\":\"28_102\",\"action\":\"clicked\"},{\"interaction\":\"28_101\",\"action\":\"clicked\"},{\"interaction\":\"28_97\",\"action\":\"unclicked\"},{\"interaction\":\"28_98\",\"action\":\"unclicked\"},{\"interaction\":\"28_94\",\"action\":\"unclicked\"},{\"interaction\":\"28_103\",\"action\":\"unclicked\"},{\"interaction\":\"28_95\",\"action\":\"unclicked\"},{\"interaction\":\"28_96\",\"action\":\"unclicked\"},{\"interaction\":\"28_99\",\"action\":\"unclicked\"},{\"interaction\":\"28_100\",\"action\":\"unclicked\"},{\"interaction\":\"28_102\",\"action\":\"unclicked\"},{\"interaction\":\"28_101\",\"action\":\"unclicked\"}]",
        "operator": "OR"
      }],
      "redirections": [],
      "useRedirectionConditions": "0",
      "usePdf": 0,
      "txt_yes": "Yes",
      "txt_no": "No",
      "txt_lastBtn": "Booking dates &#187;",
      "txt_btnStep": "Next &#187;",
      "dateFormat": "d MM yy",
      "datePickerLanguage": "el",
      "thousandsSeparator": ".",
      "decimalsSeparator": ".",
      "millionSeparator": "",
      "summary_hideQt": "0",
      "summary_hideZero": "0",
      "summary_hidePrices": "0",
      "groupAutoClick": "1",
      "filesUpload_text": "Drag n drop here, files that you want to upload",
      
      "filesUploadType_text": "Not an acceptable file type",
      "filesUploadLimit_text": "You can not upload more files",
      "sendContactASAP": "1",
      "showTotalBottom": "0",
      "stripePubKey": "",
      "scrollTopMargin": "0",
      "redirectionDelay": "5",
      "gmap_key": "",
      "txtDistanceError": "Calculating the distance could not be performed, please verify the input addresses",
      "captchaUrl": "https:\/\/8web.gr\/wp-content\/plugins\/WP_Estimation_Form\/includes\/captcha\/get_captcha.php",
      "summary_noDecimals": "0",
      "scrollTopPage": "0",
      "disableDropdowns": "0",
      "imgIconStyle": "circle"
    }];
  </script>
  <script type='text/javascript' src='wp-content/plugins/WP_Estimation_Form/assets/js/lfb_form.min.js'></script>
  <script type='text/javascript' src='wp-content/plugins/WP_Estimation_Form/assets/js/lfb_frontend.min.js'></script>
  <script type='text/javascript' src='wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-dropdown/script.js'></script>
  <script type='text/javascript' src='wp-content/plugins/circles-gallery/public/assets/js/public.js'></script>

  <link rel='https://api.w.org/' href='https://8web.gr/en/wp-json/' />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://8web.gr/xmlrpc.php?rsd" />
  <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://8web.gr/wp-includes/wlwmanifest.xml" />
  <link rel="alternate" type="application/json+oembed" href="https://8web.gr/en/wp-json/oembed/1.0/embed?url=https%3A%2F%2F8web.gr%2Fen%2Fwordpress-web-design-cost-estimator%2F" />
  <link rel="alternate" type="text/xml+oembed" href="https://8web.gr/en/wp-json/oembed/1.0/embed?url=https%3A%2F%2F8web.gr%2Fen%2Fwordpress-web-design-cost-estimator%2F&amp;format=xml" />
  <script type="text/javascript">
    var ajaxurl = "https://8web.gr/wp-admin/admin-ajax.php"
  </script>
  <meta name="generator" content="WPML ver:3.6.3 stt:1,13;" />
  <style type="text/css">
    body .section-title #portfolio-nav a:hover i {
      opacity: 0.75;
    }
    .swiper-wrapper .swiper-slide[data-color-scheme="dark"] .slider-down-arrow i.icon-default-style[class^="icon-"],
    .slider-prev.dark-cs i,
    .slider-next.dark-cs i,
    .swiper-container .dark-cs.slider-prev .slide-count span,
    .swiper-container .dark-cs.slider-next .slide-count span {
      color: #000000!important;
    }
    .swiper-container[data-bullet_style="scale"] .slider-pagination.dark-cs .swiper-pagination-switch.swiper-active-switch i,
    .swiper-container[data-bullet_style="scale"] .slider-pagination.dark-cs .swiper-pagination-switch:hover i {
      background-color: #000000;
    }
    .slider-pagination.dark-cs .swiper-pagination-switch {
      border: 1px solid #000000;
      background-color: transparent;
    }
    .slider-pagination.dark-cs .swiper-pagination-switch:hover {
      background: none repeat scroll 0 0 #000000;
    }
    .slider-pagination.dark-cs .swiper-active-switch {
      background: none repeat scroll 0 0 #000000;
    }
    #fp-nav:not(.light-controls) ul li a span:after {
      background-color: #000000;
    }
    #fp-nav:not(.light-controls) ul li a span {
      box-shadow: inset 0 0 0 8px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: inset 0 0 0 8px rgba(0, 0, 0, 0.3);
    }
    body #fp-nav ul li a.active span {
      box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.8);
      -webkit-box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.8);
    }
    .no-rgba #header-space {
      display: none;
    }
    @media only screen and (min-width: 1000px) {
      #header-space {
        display: none;
      }
      .nectar-slider-wrap.first-section,
      .parallax_slider_outer.first-section,
      .full-width-content.first-section,
      .parallax_slider_outer.first-section .swiper-slide .content,
      .nectar-slider-wrap.first-section .swiper-slide .content,
      #page-header-bg,
      .nder-page-header,
      #page-header-wrap,
      .full-width-section.first-section {
        margin-top: 0!important;
      }
      body #page-header-bg,
      body #page-header-wrap {
        height: 235px;
      }
      .swiper-container .slider-prev,
      .swiper-container .slider-next {
        top: 52%!important;
      }
      .first-section .nectar-slider-loading .loading-icon {
        opacity: 0
      }
      body #search-outer {
        z-index: 100000;
      }
    }
    .pagination-navigation {
      -webkit-filter: url("index.html#goo");
      filter: url("index.html#goo");
    }
  </style>
  <meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress." />
  <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="https://8web.gr/wp-content/plugins/js_composer_salient/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]-->
  <style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
    body:not(.wp-admin) #estimation_popup.wpe_bootstraped[data-form="2"] {
      font-family: "Open Sans";
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] {
      background-color: #ffffff;
      color: #636363;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel {
      background-color: #f5f5f5;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #lfb_loader {
      background-color: #19BB9B;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .genSlide .lfb_totalBottomContainer hr {
      border-color: #444444;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .genSlide .genContent div.selectable span.icon_select.lfb_fxZoom {
      text-shadow: -2px 0px #f5f5f5;
    }
    body #estimation_popup.wpe_bootstraped[data-form="2"] .form-control,
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel,
    #estimation_popup.wpe_bootstraped[data-form="2"] p,
    #estimation_popup.wpe_bootstraped[data-form="2"] #lfb_summary tbody td,
    #estimation_popup.wpe_bootstraped[data-form="2"] #lfb_summary tbody #sfb_summaryTotalTr th:not(#lfb_summaryTotal) {
      color: #444444;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .tooltip .tooltip-inner,
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .genSlide .genContent div.selectable span.icon_quantity,
    #estimation_popup.wpe_bootstraped[data-form="2"] .dropdown-inverse {
      background-color: #636363;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .tooltip.top .tooltip-arrow {
      border-top-color: #636363;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .tooltip.bottom .tooltip-arrow {
      border-bottom-color: #636363;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary,
    #estimation_popup.wpe_bootstraped[data-form="2"] .gform_button,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary:hover,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary:active,
    #estimation_popup.wpe_bootstraped[data-form="2"] .genPrice .progress .progress-bar-price,
    #estimation_popup.wpe_bootstraped[data-form="2"] .progress-bar,
    #estimation_popup.wpe_bootstraped[data-form="2"] .quantityBtns a,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary:active,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary.active,
    #estimation_popup.wpe_bootstraped[data-form="2"] .open .dropdown-toggle.btn-primary,
    #estimation_popup.wpe_bootstraped[data-form="2"] .dropdown-inverse li.active > a,
    #estimation_popup.wpe_bootstraped[data-form="2"] .dropdown-inverse li.selected > a,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary:active,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary.active,
    #estimation_popup.wpe_bootstraped[data-form="2"] .open .dropdown-toggle.btn-primary,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary:hover,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary:focus,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary:active,
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-primary.active,
    #estimation_popup.wpe_bootstraped[data-form="2"] .open .dropdown-toggle.btn-primary {
      background-color: #19BB9B;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .lfb_dropzone:focus,
    #estimation_popup.wpe_bootstraped[data-form="2"] .has-switch > div.switch-on label,
    #estimation_popup.wpe_bootstraped[data-form="2"] .form-group.focus .form-control,
    #estimation_popup.wpe_bootstraped[data-form="2"] .form-control:focus {
      border-color: #19BB9B;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] a:not(.btn),
    #estimation_popup.wpe_bootstraped[data-form="2"] a:not(.btn):hover,
    #estimation_popup.wpe_bootstraped[data-form="2"] a:not(.btn):active,
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .genSlide .genContent div.selectable.checked span.icon_select,
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel #finalPrice,
    #estimation_popup.wpe_bootstraped[data-form="2"] .ginput_product_price,
    #estimation_popup.wpe_bootstraped[data-form="2"] .checkbox.checked,
    #estimation_popup.wpe_bootstraped[data-form="2"] .radio.checked,
    #estimation_popup.wpe_bootstraped[data-form="2"] .checkbox.checked .second-icon,
    #estimation_popup.wpe_bootstraped[data-form="2"] .radio.checked .second-icon {
      color: #19BB9B;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .genSlide .genContent div.selectable .img {
      max-width: 64px;
      max-height: 64px;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .genSlide .genContent div.selectable .img.lfb_imgSvg {
      min-width: 64px;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel,
    #estimation_popup.wpe_bootstraped[data-form="2"] .form-control {
      color: #444444;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .form-control,
    #estimation_popup.wpe_bootstraped[data-form="2"] .lfb_dropzone {
      color: #444444;
      border-color: #bdc3c7;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .lfb_dropzone .dz-preview .dz-remove {
      color: #444444;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-default,
    #estimation_popup.wpe_bootstraped[data-form="2"] .has-switch span.switch-right,
    #estimation_popup.wpe_bootstraped[data-form="2"] .bootstrap-datetimepicker-widget .has-switch span.switch-right,
    #estimation_popup.wpe_bootstraped[data-form="2"] .dropdown-menu {
      background-color: #bdc3c7;
      color: #ffffff;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .lfb_bootstrap-select.btn-group .dropdown-menu li a {
      color: #ffffff;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .lfb_bootstrap-select.btn-group .dropdown-menu li.selected> a,
    #estimation_popup.wpe_bootstraped[data-form="2"] .lfb_bootstrap-select.btn-group .dropdown-menu li.selected> a:hover {
      background-color: #19BB9B;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .has-switch>div.switch-off label {
      border-color: #bdc3c7;
      background-color: #7f8c9a;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .has-switch>div.switch-on label {
      background-color: #bdc3c7;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .btn-default .bs-caret > .caret {
      border-bottom-color: #ffffff;
      border-top-color: #ffffff;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .genPrice .progress .progress-bar-price {
      font-size: 18px;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .itemDes {
      max-width: 240px;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .genSlide .genContent div.selectable .wpe_itemQtField {
      width: 64px;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .genSlide .genContent div.selectable .wpe_itemQtField .wpe_qtfield {
      margin-left: -18px;
    }
    body .lfb_datepickerContainer .ui-datepicker-title {
      background-color: #19BB9B;
    }
    body .lfb_datepickerContainer td a {
      color: #19BB9B;
    }
    body .lfb_datepickerContainer td.ui-datepicker-today a {
      color: #636363;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .has-switch span.switch-left {
      background-color: #19BB9B;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel #lfb_summary table thead {
      background-color: #19BB9B;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel #lfb_summary table th.sfb_summaryStep {
      background-color: #444444;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel #lfb_summary table #lfb_summaryTotal {
      color: #19BB9B;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .wpe_sliderQt {
      background-color: #444444;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel [data-type="slider"] {
      background-color: #444444;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .wpe_sliderQt .ui-slider-range,
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel .wpe_sliderQt .ui-slider-handle,
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel [data-type="slider"] .ui-slider-range,
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel [data-type="slider"] .ui-slider-handle {
      background-color: #19BB9B;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] #mainPanel #finalPrice span:nth-child(2) {
      color: #444444;
    }
    #estimation_popup.wpe_bootstraped[data-form="2"] .lfb_colorPreview {
      border-color: #444444;
    }
    #lfb_bootstraped.lfb_bootstraped[data-form="2"] #estimation_popup[data-previousstepbtn="true"] .linkPrevious {
      background-color: #bdc3c7;
      color: #ffffff;
    }
    #estimation_popup.wpe_bootstraped h2,
    .bootstrap-datetimepicker-widget h2,
    #estimation_popup.wpe_bootstraped .h2,
    .bootstrap-datetimepicker-widget .h2 {
      font-size: 35px;
      line-height: 45px;
      letter-spacing: -1px;
      font-weight: 300;
    }
    #estimation_popup.wpe_bootstraped #mainPanel #lfb_summary table th,
    #estimation_popup.wpe_bootstraped #mainPanel #lfb_summary table td {
      font-weight: 400;
    }
    #estimation_popup li {
      font-size: 13px !important;
      padding: 2px !important;
    }
    #estimation_popup.wpe_bootstraped h4,
    .bootstrap-datetimepicker-widget h4,
    #estimation_popup.wpe_bootstraped .h4,
    .bootstrap-datetimepicker-widget .h4 {
      font-weight: 400;
    }
    p.lfb_stepDescription {
      font-size: 14px !important;
    }
    #estimation_popup #lfb_summary table {
      border: 1px solid #D8D8D8 !important;
    }
    #estimation_popup #lfb_summary table th,
    #estimation_popup #lfb_summary table td {
      border: 1px solid #D8D8D8 !important;
    }
    #estimation_popup #lfb_summary table {
      border: 1px solid #D8D8D8 !important;
    }
    #estimation_popup #lfb_summary table th.sfb_summaryStep {
      border: 1px solid #D8D8D8 !important;
    }
    h2#finalText {
      font-size: 35px;
      line-height: 45px;
      letter-spacing: -1px;
      font-weight: 300;
    }
    body[data-form-style="minimal"] #estimation_popup input.form-control {
      padding: 0px !important;
      background-color: #FFF !important;
    }
    body[data-form-style="minimal"] #estimation_popup label {
      position: static;
    }
    body[data-form-style="minimal"] #estimation_popup .minimal-form-input label:before,
    body[data-form-style="minimal"] #estimation_popup .minimal-form-input label:after {
      display: none !important;
    }
    body[data-form-style="minimal"] #estimation_popup .minimal-form-input label:after {
      display: none !important;
    }
    body[data-form-style="minimal"] #estimation_popup textarea.form-control {
      background-color: #FFF !important;
    }
  </style>

</head>

<body class="page-template-default page page-id-12783 ascend nectar-auto-lightbox wpb-js-composer js-comp-ver-5.0.1 vc_responsive" data-footer-reveal="false" data-header-format="default" data-footer-reveal-shadow="none" data-dropdown-style="classic" data-cae="easeOutQuart" data-megamenu-width="contained" data-cad="1000" data-aie="zoom-out" data-ls="magnific" data-apte="standard" data-hhun="1" data-fancy-form-rcs="1" data-form-style="minimal" data-form-submit="default" data-is="minimal" data-button-style="rounded" data-header-inherit-rc="false" data-header-search="false" data-animated-anchors="true" data-ajax-transitions="false" data-full-width-header="false" data-slide-out-widget-area="true" data-slide-out-widget-area-style="fullscreen" data-user-set-ocm="1" data-loading-animation="spin" data-bg-header="true" data-ext-responsive="true" data-header-resize="0" data-header-color="custom" data-smooth-scrolling="0" data-permanent-transparent="false" data-responsive="1">


  <header id=header class=header-no-border-bottom data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 148, 'stickySetTop': '-148px', 'stickyChangeLogo': false}">
    <div class=header-body>

      <div id="ccc" class="header-container container">
        <div class=header-row>
          <div class=header-column>
            <div class=header-logo>
              <a href=index.html>
                <img alt="Webtoprint" data-sticky-width=82 data-sticky-height=40 data-sticky-top=33 width="139" height="23" src="../img/techtoprintlogo1.png">
              </a>
            </div>
          </div>
          <div class=header-column>
            <ul class="header-extra-info hidden-xs">
              <li>
                <div class="feature-box feature-box-style-3">
                  <div class=feature-box-icon>
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class=feature-box-info>
                    <h4 class=mb-none>+1 (438) 238-6555</h4>
                    <p><small>Get in touch with us</small>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="feature-box feature-box-style-3">
                  <div class=feature-box-icon>
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class=feature-box-info>
                    <h4 class=mb-none>support@techtoprint.com</h4>
                    <p><small>Send us an e-mail</small>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="header-container header-nav header-nav-bar header-nav-bar-primary">
        <div class=container>
          <button class="btn header-btn-collapse-nav" data-toggle=collapse data-target=.header-nav-main>
            <i class="fa fa-bars"></i>
          </button>
          <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
            <nav>
              <ul class="nav nav-pills" id=mainNav>
                <li class="">
                  <a href=http://www.techtoprint.com>
                        Home
                        </a>
                  <li class=dropdown>
                    <a class=dropdown-toggle href=index.html>
                      Product
                      <i class="fa fa-caret-down"></i></a>
                    <ul class=dropdown-menu>
                      <li class=dropdown-submenu>
                        <a href="#">Retail Product & Labels<i class="fa fa-caret-down"></i></a>
                        <ul class=dropdown-menu>
                          <li>
                            <div class=dropdown-mega-content>
                              <div class=row>
                                <div class="col-md-3 menu1">
                                  <span class=dropdown-mega-sub-title><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;">Packaging Labels</a> </span>
                                 
                                </div>
                                <div class="col-md-3 menu2">
                                  <span class=dropdown-mega-sub-title style="color:black;list-style:none;"><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;margin-left:-41px;">Hang Tags</a></span>
                                 
                                </div>
                                <div class="col-md-3 menu3">
                                  <span class=dropdown-mega-sub-title style="color:black;"><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;">Product Packaging</a></span>
                                  <ul class=dropdown-mega-sub-nav style="margin-left:-39px;">
                                    
                                  </ul>
                                </div>
                                <div class="col-md-3 menu4">
                                  <span class=dropdown-mega-sub-title style="color:black;margin-left:16px;"><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;">Media Packaging</a></span>
                                  <ul class=dropdown-mega-sub-nav style="margin-left:-24px;">
                                   
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class=dropdown-submenu>
                        <a href="#">Business & Marketing & Posters<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                          <li>
                            <div class=dropdown-mega-content>
                              <div class=row>
                                <div class=col-md-3>
                                  <span class=dropdown-mega-sub-title style="color:black;"><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;">Business Stationery</a> </span>
                                  <ul class=dropdown-mega-sub-nav style="margin-left: -40px;list-style:none;">
                                  </ul>
                                </div>
                                <div class=col-md-3>
                                  <span class=dropdown-mega-sub-title style="color:black;"><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;">Marketing Materials</a></span>
                                  <ul class=dropdown-mega-sub-nav style="width:308px;list-style:none;margin-left:-40px">
                                    
                                  </ul>
                                </div>
                                <div class=col-md-3>
                                  <span class=dropdown-mega-sub-title style="color:black;margin-left:-7px;"><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;">Posters,Banners,Signs& canvas</a></span>
                                  <ul class=dropdown-mega-sub-nav style="margin-left:-45px;">
                                  
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class=dropdown-submenu>
                        <a href="#">Clothings & accessories<i class="fa fa-caret-down"></i></a>
                        <ul class=dropdown-menu>
                          <li>
                            <div class=dropdown-mega-content>
                              <div class=row>
                                <div class=col-md-3>
                                  <span class=dropdown-mega-sub-title style="color:black;"><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;">Clothings</a> </span>
                                  <ul class=dropdown-mega-sub-nav style="margin-left: -40px;list-style:none;">
                                   
                                  </ul>
                                </div>
                                <div class=col-md-3>
                                  <span class=dropdown-mega-sub-title style="color:black;"><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;">TableCloths</a></span>
                                  <ul class=dropdown-mega-sub-nav style="width:308px; list-style:none; margin-left:-39px;">
                                    
                                  </ul>
                                </div>
                                <div class=col-md-3>
                                  <span class=dropdown-mega-sub-title style="color:black;margin-left:-7px;"><a href="#" style="text-decoration:none;font-weight:600;color:#1cb8a0;">accessories</a></span>
                                  <ul class=dropdown-mega-sub-nav style="margin-left:-45px;">
                                   
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                     
                      <li class=dropdown-submenu>
                        <a href="#">Calendars<i class="fa fa-caret-down"></i></a>
                       
                      </li>
                    </ul>
                  </li>
                  <li class="">
                    <a href=contact>
                            Contact us
                            </a>
                  </li>
                  <li class="">
                    <a href=http://www.techtoprint.com/contact>
                            Demo
                            </a>
                  </li>
                  <li class="">
                      <a href=".">
                      Request 
                      </a>
                      </li>
                      <li class="">
                      <a href="features/">
                      Features
                      </a>
                      </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div id="ajax-loading-screen" data-disable-fade-on-click="0" data-effect="standard" data-method="ajax">
    <div class="loading-icon spin">
      <span class="default-loading-icon spin"></span>
    </div>
  </div>

  <div id="ajax-content-wrap">
    <div class="blurred-wrap">
      <div class="container-wrap">
        <div class="container main-content">
          <div class="row">
            <div id="fws_596da5996ccfe" data-midnight="dark" data-bg-mobile-hidden="" class="wpb_row vc_row-fluid vc_row full-width-section standard_section   " style="padding-top: 4%; padding-bottom: 6%; ">
              <div class="row-bg-wrap">
                <div class="inner-wrap">
                  <div class="row-bg  using-bg-color  " style="background-color: #f5f5f5; " data-color_overlay="#ffffff" data-color_overlay_2="" data-gradient_direction="" data-overlay_strength="0.3" data-enable_gradient="false"></div>
                </div>
              </div>
              <div class="col span_12 dark left">
                <div class="vc_col-sm-12 wpb_column column_container vc_column_container col centered-text no-extra-padding" data-shadow="none" data-border-animation="" data-border-animation-delay="" data-border-width="none" data-border-style="solid" data-border-color="" data-bg-cover="" data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1" data-hover-bg="" data-hover-bg-opacity="1" data-animation="" data-delay="0">
                  <div class="vc_column-inner">
                    <div class="wpb_wrapper">

                      <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                          <div id="lfb_bootstraped" class="lfb_bootstraped">
                            <div id="estimation_popup" data-formtitle="Payment in advance - Custom project offer" data-formsession="596da5996dc6b" data-autoclick="1" data-subs="" data-form="2" class="wpe_bootstraped  ">
                              <div id="lfb_loader">
                                <div class="lfb_spinner">
                                  <div class="double-bounce1"></div>
                                  <div class="double-bounce2"></div>
                                </div>
                              </div>
                              <a id="wpe_close_btn" href="javascript:"><span class="fui-cross"></span></a>
                              <div id="wpe_panel">
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="">
                                      <p style="display:none !important;">
                                        <a href="javascript:" onclick="lfb_startFormIntro(2);" class="btn btn-large btn-primary" id="btnStart"><span class="fa introButtonIcon"></span>GET STARTED</a>
                                      </p>

                                      <div id="genPrice" class="genPrice">
                                        <div class="progress">
                                          <div class="progress-bar" style="width: 0%;">
                                            <div class="progress-bar-price ">
                                              <span>0$</span>

                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- /genPrice -->
                                      <h2 id="finalText" class="stepTitle">Thank you.<br>We will now transfer you to the payment page, so you can book the selected dates.</h2>
                                    </div>
                                    <!-- /col -->
                                  </div>
      
<!-- slide 2 -->
  <div id="mainPanel" class="palette-clouds" data-savecart="0">
    <input type="hidden" name="action" value="lfb_upload_form" />
    <input type="hidden" id="lfb_formSession" name="formSession" value="596da5996dc6b" />
    <div class="genSlide" data-start="0" data-showstepsum="1" data-stepid="26" data-title="2. Basic Storefront Add-Ons" data-dependitem="0">
      <h2 class="stepTitle">2. Basic Storefront Add-Ons</h2>
      <p class="lfb_stepDescription">Select the features you want to have included in your website:</p>
      <div class="genContent container-fluid ">
        <div class="row">
  <div class="itemBloc col-md-2  lfb_item lfb_picRow">
    <div class="selectable" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="87" data-prodid="0" data-title="Storefront Templates" data-toggle="tooltip" title="" data-originaltitle="Storefront Templates" data-placement="bottom" data-price="200" data-original-title="Storefront Templates" data-resqt="1"><img data-tint="true" src="wp-content/uploads/2016/05/diafimisis-web-design.png" alt="" class="img .png" style="opacity: 0; display: none;"><canvas class="img" style="width: 64px; height: 64px;"></canvas><span class="palette-clouds  icon_select fui-cross" style="bottom: 0px; opacity: 1;"></span>
      <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="3" data-min="0" style="display: none;">
        <div class="wpe_sliderQt ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"><div class="tooltip top" role="tooltip" style="position: absolute; top: -55px; left: -20px; opacity: 1; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1</div></div></span></div>
      </div><span class="palette-turquoise icon_quantity wpe_hidden" style="display: none;">1</span>
    </div>
    <p class="itemDes" style="">Storefront Templates</p>
  </div>

<div class="itemBloc col-md-2  lfb_item lfb_picRow">
  <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="84" data-prodid="0" data-title="OR: Custom Storefront Theme" data-toggle="tooltip" title="OR: Custom Storefront Theme" data-originaltitle="OR: Custom Storefront Theme" data-placement="bottom" data-price="700"><img data-tint="true" src="wp-content/uploads/2016/05/gkaleri-ikonwn-web-design.png" alt="responsive-sxediasmos-web-design web design" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
  </div>
  <p class="itemDes" style="">OR: Custom Storefront Theme</p>
</div>

<br>
  <div class="itemBloc col-md-2  lfb_item lfb_picRow">
    <div class="selectable" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="88" data-prodid="0" data-title="Language Support" data-toggle="tooltip" title="" data-originaltitle="Language Support" data-placement="bottom" data-price="35" data-original-title="Language Support" data-resqt="1"><img data-tint="true" src="wp-content/uploads/2016/05/poliglossiko-wpml-web-design.png" alt="" class="img .png" style="opacity: 0; display: none;"><canvas class="img" style="width: 64px; height: 64px;"></canvas><span class="palette-clouds  icon_select fui-cross" style="bottom: 0px; opacity: 1;"></span>
      <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="4" data-min="0" style="display: none;">
        <div class="wpe_sliderQt ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"><div class="tooltip top" role="tooltip" style="position: absolute; top: -55px; left: -20px; opacity: 1; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1</div></div></span></div>
      </div><span class="palette-turquoise icon_quantity wpe_hidden" style="display: none;">1</span>
    </div>
    <p class="itemDes" style="">Language Support</p>
  </div>


  <div class="itemBloc col-md-2  lfb_item lfb_picRow">
    <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="85" data-prodid="0" data-title="Hosting" data-toggle="tooltip" title="Hosting" data-originaltitle="Hosting" data-placement="bottom" data-price="300"><img data-tint="true" src="wp-content/uploads/2016/05/kampania-newsletter-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
    </div>
    <p class="itemDes" style="">Hosting</p>
  </div>

 <div class="itemBloc col-md-2  lfb_item lfb_picRow">
    <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="89" data-prodid="0" data-title="SSL Certificate(https)" data-toggle="tooltip" title="SSL Certificate(https)" data-originaltitle="SSL Certificate(https)" data-placement="bottom" data-price="20"><img data-tint="true" src="wp-content/uploads/2016/05/ssl-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
    </div>
    <p class="itemDes" style="">SSL Certificate for Secure Transmission of Information</p>
  </div>

 <div class="itemBloc col-md-2  lfb_item lfb_picRow">
    <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="90" data-prodid="0" data-title="Domain Name Registration" data-toggle="tooltip" title="Domain Name Registration" data-originaltitle="Domain Name Registration" data-placement="bottom" data-price="2"><img data-tint="true" src="wp-content/uploads/2016/05/diaxeirisi-adwords-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
    </div>
    <p class="itemDes" style="">Domain Name Registration</p>
  </div>

 <div class="itemBloc col-md-2  lfb_item lfb_picRow">
    <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="91" data-prodid="0" data-title="Social Sharing API " data-toggle="tooltip" title="Social Sharing API " data-originaltitle="Social Sharing API " data-placement="bottom" data-price="433"><img data-tint="true" src="wp-content/uploads/2016/05/diaxeirisi-social-media-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
    </div>
    <p class="itemDes" style="">Social Sharing API </p>
  </div>


 <div class="itemBloc col-md-2  lfb_item lfb_picRow">
    <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="83" data-prodid="0" data-title="Google Adwords/AdSense " data-toggle="tooltip" title="Google Adwords/AdSense " data-originaltitle="Google Adwords/AdSense " data-placement="bottom" data-price="9"><img data-tint="true" src="wp-content/uploads/2016/05/kampania-adwords-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
    </div>
    <p class="itemDes" style="">Google Adwords/AdSense Campaign Creation/Management PPC</p>
  </div>

 <div class="itemBloc col-md-2  lfb_item lfb_picRow">
    <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="86" data-prodid="0" data-title="Data Migration " data-toggle="tooltip" title="Data Migration " data-originaltitle="Data Migration " data-placement="bottom" data-price="10"><img data-tint="true" src="wp-content/uploads/2016/05/download.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
    </div>
    <p class="itemDes" style="">Data Migration</p>
  </div>
  </div>
</div>
<!-- slide 1 -->
              <div class="errorMsg alert alert-danger">You need to select an option in order to continue</div>
              <p style="margin-top: 22px; position: absolute; width: 100%;" class="text-center lfb_btnNextContainer"><a href="javascript:" id="lfb_btnNext_1" class="btn btn-wide btn-primary btn-next ">Next &#187;</a>
                <br/><a href="javascript:" class="linkPrevious">&#171; Previous</a>
              </p>
            </div>
            <div class="genSlide" data-start="1" data-showstepsum="1" data-stepid="27" data-title="1. Static or dynamic website?" data-required="true" data-dependitem="0">
              <h2 class="stepTitle">1. Standard or Web-to-print ?</h2>
              <p class="lfb_stepDescription">
                <br><b>Static website</b>: lower price, specific capabilities
                <br><b>Dynamic website</b>: value for money price, fully managed, fully extendable
                <br>
                <br>Select below:</p>
              <div class="genContent container-fluid ">

                <div class="row">

                  <div class="itemBloc col-md-2  lfb_item lfb_picRow">
                    <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="92" data-group="static_or_dynamic" data-prodid="0" data-title="Standard Ecommerce Storefront" data-toggle="tooltip" title="Standard Ecommerce Storefront" data-originaltitle="Standard Ecommerce Storefront" data-placement="bottom" data-price="190">
                      <img data-tint="true" src="wp-content/uploads/2016/05/statiko-website-web-design.png" alt="statiko-website-web-design web design" class="img .png" />
                      <span class="palette-clouds fui-cross  icon_select"></span>
                    </div>
                    <p class="itemDes" style=""><b>Standard Ecommerce Storefront</b> (SES)
                      <br>
                      <br>Marketing websites
                      <br> App websites
                      <br> Landing Pages
                      <br> Microsites
                    </p>
                  </div>

                  <div class="itemBloc col-md-2  lfb_item lfb_picRow">
                    <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="93" data-group="static_or_dynamic" data-prodid="0" data-title="Web-to-Print Ecommerce Storefront" data-toggle="tooltip" title="Web-to-Print Ecommerce Storefront" data-originaltitle="Web-to-Print Ecommerce Storefront" data-placement="bottom" data-price="170">
                      <img data-tint="true" src="wp-content/uploads/2016/05/dynamiko-web-design-web-design.png" alt="dynamiko-web-design-web-design web design" class="img .png" />
                      <span class="palette-clouds fui-cross  icon_select"></span>
                    </div>
                    <p class="itemDes" style=""><b>Web-to-Print Ecommerce Storefront</b> (Web-to-Print)
                      <br>
                      <br>Web to print
                      <br> Corporate websites
                      <br> E-shops
                      <br> Emagazines/Portals
                    </p>
                  </div>
                </div>
              </div>
              <div class="errorMsg alert alert-danger">You need to select an option in order to continue</div>
              <p style="margin-top: 22px; position: absolute; width: 100%;" class="text-center lfb_btnNextContainer"><a href="javascript:" id="lfb_btnNext_9" class="btn btn-wide btn-primary btn-next ">Next &#187;</a>
              </p>
            </div>


<!-- slide 3 -->
            <div class="genSlide" data-start="0" data-showstepsum="1" data-stepid="28" data-title="3. Payment and Shipping Add-ons" data-dependitem="0">
            <h2 class="stepTitle">3. Payment and Shipping Add-ons</h2>
            <p class="lfb_stepDescription">Please select your preferred additional services:</p>
            <div class="genContent container-fluid ">
              <div class="row">
            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="81" data-prodid="0" data-title="Multiple Currencies" data-toggle="tooltip" title="" data-originaltitle="Multiple Currencies" data-placement="bottom" data-price="30" data-original-title="Multiple Currencies" data-resqt="1"><img data-tint="true" src="wp-content/uploads/2016/05/seo-search-engine-optimization-web-design.png" alt="" class="img .png" style="opacity: 0; display: none;"><canvas class="img" style="width: 64px; height: 64px;"></canvas><span class="palette-clouds  icon_select fui-cross" style="bottom: 0px; opacity: 1;"></span>
              <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="10" data-min="0" style="display: none;">
                <div class="wpe_sliderQt ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"><div class="tooltip top" role="tooltip" style="position: absolute; top: -55px; left: -20px; opacity: 1; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1</div></div></span></div>
              </div><span class="palette-turquoise icon_quantity wpe_hidden" style="display: none;">1</span>
            </div>
            <p class="itemDes" style="">Multiple Currencies</p>
            </div>

            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="80" data-prodid="0" data-title="Payment Gateways " data-toggle="tooltip" title="" data-originaltitle="Payment Gateways " data-placement="bottom" data-price="30" data-original-title="Payment Gateways " data-resqt="1"><img data-tint="true" src="wp-content/uploads/2016/05/ilektroniko-katastima-web-design.png" alt="" class="img .png" style="opacity: 0; display: none;"><canvas class="img" style="width: 64px; height: 64px;"></canvas><span class="palette-clouds  icon_select fui-cross" style="bottom: 0px; opacity: 1;"></span>
              <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="10" data-min="0" style="display: none;">
                <div class="wpe_sliderQt ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"><div class="tooltip top" role="tooltip" style="position: absolute; top: -55px; left: -20px; opacity: 1; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1</div></div></span></div>
              </div><span class="palette-turquoise icon_quantity wpe_hidden" style="display: none;">1</span>
            </div>
            <p class="itemDes" style="">Payment Gateways </p>
            </div>
            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="97" data-prodid="0" data-title="Custom Payment Gateway" data-toggle="tooltip" title="Custom Payment Gateway" data-originaltitle="Custom Payment Gateway" data-placement="bottom" data-price="20"><img data-tint="true" src="wp-content/uploads/2016/05/diaxeirisi-adwords-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
            </div>
            <p class="itemDes" style="">Custom Payment Gateway</p>
            </div>
            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable " data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="98" data-prodid="0" data-title="Custom Shipping API" data-toggle="tooltip" title="Custom Shipping API" data-originaltitle="Custom Shipping API" data-placement="bottom" data-price="30"><img data-tint="true" src="wp-content/uploads/2016/05/diaxeirisi-social-media-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
            </div>
            <p class="itemDes" style="">Custom Shipping API</p>
            </div>

            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="99" data-prodid="0" data-title="Manage Multiple Vendors  " data-toggle="tooltip" title="" data-originaltitle="Manage Multiple Vendors  " data-placement="bottom" data-price="30" data-original-title="Manage Multiple Vendors  " data-resqt="1"><img data-tint="true" src="wp-content/uploads/2016/05/kampania-social-media-web-design.png" alt="" class="img .png" style="opacity: 0; display: none;"><canvas class="img" style="width: 64px; height: 64px;"></canvas><span class="palette-clouds  icon_select fui-cross" style="bottom: 0px; opacity: 1;"></span>
              <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="10" data-min="0" style="display: none;">
                <div class="wpe_sliderQt ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"><div class="tooltip top" role="tooltip" style="position: absolute; top: -55px; left: -20px; opacity: 1; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1</div></div></span></div>
              </div><span class="palette-turquoise icon_quantity wpe_hidden" style="display: none;">1</span>
            </div>
            <p class="itemDes" style="">Manage Multiple Vendors </p>
            </div>
            </div>
              </div>

<!-- slide 4 -->
            <div class="errorMsg alert alert-danger">You need to select an option in order to continue</div>
            <p style="margin-top: 22px; position: absolute; width: 100%;" class="text-center lfb_btnNextContainer"><a href="javascript:" id="lfb_btnNext_1" class="btn btn-wide btn-primary btn-next ">Next &#187;</a>
              <br/><a href="javascript:" class="linkPrevious">&#171; Previous</a>
            </p>
          </div>
          <div class="genSlide" data-start="0" data-showstepsum="1" data-stepid="29" data-title="4.Client Management  Add-ons" data-dependitem="0">
            <h2 class="stepTitle">4. Client Management  Add-ons</h2>
            <p class="lfb_stepDescription">Do you need anything else?</p>
            <div class="genContent container-fluid ">
              <div class="row">

          <div class="itemBloc col-md-2  lfb_item lfb_picRow">
              <div class="selectable" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="94" data-prodid="0" data-title="B2C Retail Store" data-toggle="tooltip" title="" data-originaltitle="B2C Retail Store" data-placement="bottom" data-price="30" data-original-title="B2C Retail Store" data-resqt="1"><img data-tint="true" src="wp-content/uploads/2016/05/koinotita-melon-web-design.png" alt="" class="img .png" style="opacity: 0; display: none;"><canvas class="img" style="width: 64px; height: 64px;"></canvas><span class="palette-clouds  icon_select fui-cross" style="bottom: 0px; opacity: 1;"></span>
                <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="10" data-min="0" style="display: none;">
                  <div class="wpe_sliderQt ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"><div class="tooltip top" role="tooltip" style="position: absolute; top: -55px; left: -20px; opacity: 1; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1</div></div></span></div>
                </div><span class="palette-turquoise icon_quantity wpe_hidden" style="display: none;">1</span>
              </div>
              <p class="itemDes" style="">B2C Retail Store</p>
            </div>

          <div class="itemBloc col-md-2  lfb_item lfb_picRow">
              <div class="selectable" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="95" data-prodid="0" data-title="Client Account" data-toggle="tooltip" title="" data-originaltitle="Client Account" data-placement="bottom" data-price="30" data-original-title="Order Reorder History Payment" data-resqt="1"><img data-tint="true" src="wp-content/uploads/2016/05/diafimisis-web-design.png" alt="" class="img .png" style="opacity: 0; display: none;"><canvas class="img" style="width: 64px; height: 64px;"></canvas><span class="palette-clouds  icon_select fui-cross" style="bottom: 0px; opacity: 1;"></span>
                <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="10" data-min="0" style="display: none;">
                  <div class="wpe_sliderQt ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"><div class="tooltip top" role="tooltip" style="position: absolute; top: -55px; left: -20px; opacity: 1; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1</div></div></span></div>
                </div><span class="palette-turquoise icon_quantity wpe_hidden" style="display: none;">1</span>
              </div>
              <p class="itemDes" style="">Client Account</p>
            </div>


          <div class="itemBloc col-md-2  lfb_item lfb_picRow">
              <div class="selectable" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="82" data-prodid="0" data-title="B2B/Corporate Portals" data-toggle="tooltip" title="" data-originaltitle="B2B/Corporate Portals" data-placement="bottom" data-price="30" data-original-title="B2B/Corporate Portals" data-resqt="1"><img data-tint="true" src="wp-content/uploads/2016/05/seo-search-engine-optimization-web-design.png" alt="" class="img .png" style="opacity: 0; display: none;"><canvas class="img" style="width: 64px; height: 64px;"></canvas><span class="palette-clouds  icon_select fui-cross" style="bottom: 0px; opacity: 1;"></span>
                <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="10" data-min="0" style="display: none;">
                  <div class="wpe_sliderQt ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"><div class="tooltip top" role="tooltip" style="position: absolute; top: -55px; left: -20px; opacity: 1; display: none;"><div class="tooltip-arrow"></div><div class="tooltip-inner">1</div></div></span></div>
                </div><span class="palette-turquoise icon_quantity wpe_hidden" style="display: none;">1</span>
              </div>
              <p class="itemDes" style="">B2B/Corporate Portals</p>
            </div>

            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable " data-useshowconditions="true" data-showconditions="[{\'interaction\':\'27_93\',\'action\':\'clicked\'}]" data-showconditionsoperator="OR" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="102" data-prodid="0" data-title="Preset Products with Complimentary Templates " data-toggle="tooltip" title="Preset Products with Complimentary Templates" data-originaltitle="Preset Products with Complimentary Templates" data-placement="bottom" data-price="5"><img data-tint="true" src="wp-content/uploads/2016/05/gkaleri-ikonwn-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
              <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="1000" data-min="0">
                <div class="wpe_sliderQt"></div>
              </div><span class="palette-turquoise icon_quantity wpe_hidden">1</span>
            </div>
            <p class="itemDes" style="">Preset Products with Complimentary Templates</p>
          </div>

          <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable " data-useshowconditions="true" data-showconditions="[{\'interaction\':\'27_93\',\'action\':\'clicked\'}]" data-showconditionsoperator="OR" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="101" data-prodid="0" data-title="Wide Format & Custom Size Products" data-toggle="tooltip" title="Wide Format & Custom Size Products" data-originaltitle="Wide Format & Custom Size Products" data-placement="bottom" data-price="5"><img data-tint="true" src="wp-content/uploads/2016/05/diaxeirisi-periexomenou-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
              <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="1000" data-min="0">
                <div class="wpe_sliderQt"></div>
              </div><span class="palette-turquoise icon_quantity wpe_hidden">1</span>
            </div>
            <p class="itemDes" style="">Wide Format & Custom Size Products</p>
          </div>
          <br>
          <hr>
          <br>
            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable " data-useshowconditions="true" data-showconditions="[{\'interaction\':\'27_93\',\'action\':\'clicked\'}]" data-showconditionsoperator="OR" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="103" data-prodid="0" data-title="Design Tool for  2D Products " data-toggle="tooltip" title="Design Tool for  2D Products " data-originaltitle="Design Tool for  2D Products " data-placement="bottom" data-price="5"><img data-tint="true" src="wp-content/uploads/2016/05/download4.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>

          </div>
          <p class="itemDes" style="">Design Tool for  2D Products </p>
          </div>

          <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable " data-useshowconditions="true" data-showconditions="[{\'interaction\':\'27_93\',\'action\':\'clicked\'}]" data-showconditionsoperator="OR" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="104" data-prodid="0" data-title="Templates for 2D Products" data-toggle="tooltip" title="Templates for 2D Products" data-originaltitle="Templates for 2D Products" data-placement="bottom" data-price="5"><img data-tint="true" src="wp-content/uploads/2016/05/diafimisis-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
              <div class="quantityBtns wpe_sliderQtContainer" data-stepslider="1" data-max="1000" data-min="0">
                <div class="wpe_sliderQt"></div>
              </div><span class="palette-turquoise icon_quantity wpe_hidden">1</span>
            </div>
            <p class="itemDes" style="">Templates for 2D Products</p>
          </div>

            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable " data-useshowconditions="true" data-showconditions="[{\'interaction\':\'27_93\',\'action\':\'clicked\'}]" data-showconditionsoperator="OR" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="105" data-prodid="0" data-title="Design Tool for  2D Products (Nonpaper-based/Non-rectangular)" data-toggle="tooltip" title="Design Tool for  2D Products (Nonpaper-based/Non-rectangular)" data-originaltitle="Design Tool for  2D Products (Nonpaper-based/Non-rectangular)" data-placement="bottom" data-price="5"><img data-tint="true" src="wp-content/uploads/2016/05/download2.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>

          </div>
          <p class="itemDes" style="">Design Tool for  2D Products (Nonpaper-based/Non-rectangular)</p>
          </div>

            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable " data-useshowconditions="true" data-showconditions="[{\'interaction\':\'27_93\',\'action\':\'clicked\'}]" data-showconditionsoperator="OR" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="106" data-prodid="0" data-title="Design Tool for Multipage and Book Products" data-toggle="tooltip" title="Design Tool for Multipage and Book Products" data-originaltitle="Design Tool for Multipage and Book Products" data-placement="bottom" data-price="5"><img data-tint="true" src="wp-content/uploads/2016/05/download1.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
            
          </div>
          <p class="itemDes" style="">Design Tool for Multipage and Book Products</p>
          </div>
            <div class="itemBloc col-md-2  lfb_item lfb_picRow">
            <div class="selectable " data-useshowconditions="true" data-showconditions="[{\'interaction\':\'27_93\',\'action\':\'clicked\'}]" data-showconditionsoperator="OR" data-showinsummary="true" data-woovar="0" data-reduc="0" data-reducqt="" data-operation="+" data-itemid="107" data-prodid="0" data-title="Mass Personalization using CSV" data-toggle="tooltip" title="Mass Personalization using CSV" data-originaltitle="Mass Personalization using CSV" data-placement="bottom" data-price="5"><img data-tint="true" src="wp-content/uploads/2016/05/dynamiko-web-design-web-design.png" alt="" class="img .png" /><span class="palette-clouds fui-cross  icon_select"></span>
            
          </div>
          <p class="itemDes" style="">Mass Personalization using CSV</p>
          </div>
          <br>
                </div>
              </div>
              <div class="errorMsg alert alert-danger">You need to select an option in order to continue</div>
              <p style="margin-top: 22px; position: absolute; width: 100%;" class="text-center lfb_btnNextContainer"><a href="javascript:" id="lfb_btnNext_1" class="btn btn-wide btn-primary btn-next ">Next &#187;</a>
                <br/><a href="javascript:" class="linkPrevious">&#171; Previous</a>
              </p>
            </div>

  <!-- slide 5 -->
                                    <div class="genSlide" id="finalSlide" data-stepid="final">

                                      <form id="myForm" action="mail.php" method="post">

                                        <span id="result"></span>

                                        <h2 class="stepTitle">Total cost:</h2>
                                        <div class="genContent">
                                          <div class="genContentSlide active">
                                            <p id="lfb_finalLabel"></p>
                                            <h3 id="finalPrice" style=""><span></span></h3>
                                            <div id="lfb_subTxtValue" style="display: none;"></div>
                                          
                                            <div class="form-group">
                                              <label for="field_3" style="display: none">First Name & Last Name (required)</label>
                                              <input type="text" id="Name" autocomplete="on" name="Name" data-fieldtype="" data-required="false" placeholder="First Name & Last Name" class="form-control" required />
                                            </div>
                                              <div class="form-group">
                                              <label for="field_3" style="display: none">Enter your email (required)</label>
                                              <input type="email" id="email" autocomplete="on" name="email" data-fieldtype="" data-required="false" placeholder="Enter your email" class="form-control emailField " required />
                                            </div>
                                              <div class="form-group">
                                              <label for="field_3" style="display: none">phone number (required)</label>
                                              <input type="text" id="Num" autocomplete="on" name="Num" data-fieldtype="" data-required="false" placeholder="Num" class="form-control emailField " required/>
                                            </div>
                                            <div class="form-group">
                                              <label for="field_4" style="display: none">Do you have any comments?</label>
                                              <textarea id="Comments" name = "Comments" data-fieldtype="" data-required="false" class="form-control  " placeholder="Do you have any comments?"></textarea>
                                            </div>
                                            <div class = "form-group">                                             
                                              <select id="country" autocomplete="on" name="country" data-fieldtype="" data-required="false" placeholder="country" class="form-control emailField " required>
                                               <option value ="Country">Country</option><option value=" USA"> USA</option><option value="Afghanistan">Afghanistan</option><option value="Apland">Apland</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo (Brazzaville)">Congo (Brazzaville)</option><option value="Congo (Kinshasa)">Congo (Kinshasa)</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands">Falkland Islands</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Lands">French Southern Lands</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard and McDonald Islands">Heard and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea  North">Korea  North</option><option value="Korea  South">Korea  South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia">Micronesia</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestine">Palestine</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Barthelemy">Saint Barthelemy</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin (French part)">Saint Martin (French part)</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option><option value="Spain">Spain</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Vatican City">Vatican City</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Virgin Islands">Virgin Islands</option><option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select>
                                                            </div>
                                            <div class = "form-group">  
                                           <select id="howdidyou" autocomplete="on" name="howdidyou" data-fieldtype="" data-required="false" placeholder="howdidyou" class="form-control emailField " required>
                                              <option value="Select one...">How did you hear about us?</option><option value="Advertisement">Advertisement</option><option value="Aleyant email">Aleyant email</option><option value="American Printer">American Printer</option><option value="Bing Search">Bing Search</option><option value="Canon">Canon</option><option value="CMYK QR Code">CMYK QR Code</option><option value="CRC">CRC</option><option value="Customer Referral">Customer Referral</option><option value="DesignMerge - Meadows Publishing">DesignMerge - Meadows Publishing</option><option value="DPS magazine">DPS magazine</option><option value="Drupa (trade show)">Drupa (trade show)</option><option value="Dscoop (trade show)">Dscoop (trade show)</option><option value="eDocBuilder.com">eDocBuilder.com</option><option value="efi">efi</option><option value="Enfocus">Enfocus</option><option value="ErgoSoft">ErgoSoft</option><option value="EPMS">EPMS</option><option value="Fuji">Fuji</option><option value="GOA (trade show)">GOA (trade show)</option><option value="Google Search">Google Search</option><option value="Graph Expo (trade show)">Graph Expo (trade show)</option><option value="HP">HP</option><option value="Hybrid">Hybrid</option><option value="Impostrip (Ultimate)">Impostrip (Ultimate)</option><option value="InfoTrends Ultimate Guide">InfoTrends Ultimate Guide</option><option value="Keen">Keen</option><option value="Konica/Minolta">Konica/Minolta</option><option value="LinkedIn">LinkedIn</option><option value="Metamation">Metamation</option><option value="Metrix">Metrix</option><option value="M-Power">M-Power</option><option value="MyPrintSource.com">MyPrintSource.com</option><option value="OnPoint">OnPoint</option><option value="Other">Other</option><option value="Other Search Engine">Other Search Engine</option><option value="Palmart">Palmart</option><option value="Partner">Partner</option><option value="Pressero Blog">Pressero Blog</option><option value="Pressero Website">Pressero Website</option><option value="Presswise">Presswise</option><option value="Print (trade show)">Print (trade show)</option><option value="PrintersPlan (SoftUse)">PrintersPlan (SoftUse)</option><option value="Printers Software Inc">Printers Software Inc</option><option value="Printing &amp; Graphics Solutions magazine">Printing &amp; Graphics Solutions magazine</option><option value="Printing Impressions magazine">Printing Impressions magazine</option><option value="printLeader">printLeader</option><option value="PrintOwners">PrintOwners</option><option value="PrintPlanet">PrintPlanet</option><option value="PrintPoint">PrintPoint</option><option value="PrintPoint (Australia)">PrintPoint (Australia)</option><option value="PrintStar">PrintStar</option><option value="PrintUI">PrintUI</option><option value="Quick Printing magazine">Quick Printing magazine</option><option value="Seminar - Internal">Seminar - Internal</option><option value="Seminar - Partner">Seminar - Partner</option><option value="SGIA (trade show)">SGIA (trade show)</option><option value="Trade Show">Trade Show</option><option value="Tucanna">Tucanna</option><option value="Ultimate (Impostrip)">Ultimate (Impostrip)</option><option value="Web Search">Web Search</option><option value="What They Think">What They Think</option><option value="Word of mouth">Word of mouth</option><option value="Xerox">Xerox</option><option value="Yahoo Search">Yahoo Search</option><option value="Zetaprints.com">Zetaprints.com</option><option value="Virtual Systems">Virtual Systems</option></select>

                                            </div>

                                         <div id="emailscreen" >   
                                            <div id="lfb_summary" class="table-responsive ">
                                              <h4 id ="mybox" >Synopsis</h4>
                                              <table class="table table-bordered">
                                                <thead>
                                                  <th>Description</th>
                                                  <th>Information</th>
                                                  <th class="">Quantity</th>
                                                  <th class="">Price</th>
                                                </thead>
                                                <tbody>
                                                  <tr id="lfb_summaryDiscountTr" class="lfb_static ">
                                                    <th colspan="3">Discount :</th>
                                                    <th id="lfb_summaryDiscount"><span></span>
                                                    </th>
                                                  </tr>
                                                  <tr id="sfb_summaryTotalTr" class="lfb_static ">
                                                    <th colspan="3">Total :</th>
                                                    <th id="lfb_summaryTotal"><span></span>
                                                    </th>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            </div>
                                            <p style="" class="text-center lfb_btnNextContainer">

                                              <a  href = "#mybox"  onclick="validation();" id="sub" class="btn btn-wide btn-primary">Booking dates &#187;</a>
                                              
                                              <a href="javascript:" class="linkPrevious">&#171; Previous</a>
                                            </p>
                                            </p>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                </div></div></div></div></div></div>
                      </form>
                    </div></div></div></div></div></div></div></div>

      <div id="footer-outer" data-midnight="light" data-cols="3" data-disable-copyright="false" data-using-bg-img="false" data-bg-img-overlay="0.8" data-full-width="false" data-using-widget-area="false">
      </div>
    </div>
    <a id="to-top" class=""><i class="fa fa-angle-up"></i></a>
    <script type='text/javascript' src='wp-content/plugins/animated-typing-effect/assets/js/typed.js'></script>
    <script type='text/javascript' src='wp-content/plugins/animated-typing-effect/assets/js/typed.fe.js'></script>
    <script type='text/javascript'>
      /* <![CDATA[ */
      var code_prettify_settings = {
        "base_url": "https:\/\/8web.gr\/wp-content\/plugins\/code-prettify\/prettify"
      };
      /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/code-prettify/prettify/run_prettify.js'></script>
    <script type='text/javascript' src='wp-content/plugins/jquery-validation-for-contact-form-7/js/jquery.validate.min.js'></script>
    <script type='text/javascript'>
      /* <![CDATA[ */
      var wpcf7 = {
        "apiSettings": {
          "root": "https:\/\/8web.gr\/en\/wp-json\/",
          "namespace": "contact-form-7\/v1"
        },
        "recaptcha": {
          "messages": {
            "empty": "Please verify that you are not a robot."
          }
        }
      };
      /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/jquery-validation-for-contact-form-7/js/jquery.jvcf7_validation.js'></script>

    <script type='text/javascript'>
      /* <![CDATA[ */
      var nectarLove = {
        "ajaxurl": "https:\/\/8web.gr\/wp-admin\/admin-ajax.php",
        "postID": "12783",
        "rooturl": "https:\/\/8web.gr\/en",
        "pluginPages": [],
        "disqusComments": "false",
        "loveNonce": "a79671c2b2",
        "mapApiKey": ""
      };
      /* ]]> */
    </script>

    <script type='text/javascript'>
      /* <![CDATA[ */
      var mejsL10n = {
        "language": "en-US",
        "strings": {
          "Close": "Close",
          "Fullscreen": "Fullscreen",
          "Turn off Fullscreen": "Turn off Fullscreen",
          "Go Fullscreen": "Go Fullscreen",
          "Download File": "Download File",
          "Download Video": "Download Video",
          "Play": "Play",
          "Pause": "Pause",
          "Captions\/Subtitles": "Captions\/Subtitles",
          "None": "None",
          "Time Slider": "Time Slider",
          "Skip back %1 seconds": "Skip back %1 seconds",
          "Video Player": "Video Player",
          "Audio Player": "Audio Player",
          "Volume Slider": "Volume Slider",
          "Mute Toggle": "Mute Toggle",
          "Unmute": "Unmute",
          "Mute": "Mute",
          "Use Up\/Down Arrow keys to increase or decrease volume.": "Use Up\/Down Arrow keys to increase or decrease volume.",
          "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds."
        }
      };
      var _wpmejsSettings = {
        "pluginPath": "\/wp-includes\/js\/mediaelement\/"
      };
      /* ]]> */
    </script>
    <script type='text/javascript' src='wp-includes/js/mediaelement/mediaelement-and-player.min.js'></script>
    <script type='text/javascript' src='wp-includes/js/mediaelement/wp-mediaelement.min.js'></script>

    <script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
    <script type='text/javascript'>
      /* <![CDATA[ */
      var icl_vars = {
        "current_language": "en",
        "icl_home": "https:\/\/8web.gr\/en\/",
        "ajax_url": "https:\/\/8web.gr\/en\/wp-admin\/admin-ajax.php",
        "url_type": "1"
      };
      /* ]]> */
    </script>
    <script type='text/javascript' src='wp-content/plugins/sitepress-multilingual-cms/res/js/sitepress.js'></script>
    <script type='text/javascript' src='wp-content/plugins/js_composer_salient/assets/js/dist/js_composer_front.min.js'></script>

    <footer id=footer>
      <div class=container>
        <div class=row>
          <div class=col-md-4>
            <div class=newsletter>
              <h4>TechToPrint Enterprise</h4>
              <p>TechToPrint Solution is a Web To Print service provided by TechToPrint that enables third-party companies to use our technology under their own brand.</p>
            </div>
          </div>
          <div class=col-md-4>
            <div class=contact-details>
              <h4>Contact Us</h4>
              <ul class=contact>
                <li>
                  <p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1101 St Urbain, Montréal, Québec</p>
                </li>
                <li>
                  <p><i class="fa fa-phone"></i> <strong>Phone:</strong>+1 (438) 238-6555</p>
                </li>
                <li>
                  <p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">support@techtoprint.com</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class=col-md-4>
            <h4>Follow Us</h4>
            <ul class=social-icons>
              <li class=social-icons-facebook><a href="http://www.facebook.com/" target=_blank title=Facebook><i class="fa fa-facebook"></i></a>
              </li>
              <li class=social-icons-twitter><a href="http://www.twitter.com/" target=_blank title=Twitter><i class="fa fa-twitter"></i></a>
              </li>
              <li class=social-icons-linkedin><a href="http://www.linkedin.com/" target=_blank title=Linkedin><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class=footer-copyright>
        <div class=container>
          <div class=row>
        <div class=col-md-4>
            <a href=index.html class=logo>
          <img alt="Web To Print" title="Create by Youssef Faraby"  width="182" height="30" class=img-responsive src="../img/color-3.png">
              </a>
            </div>
            <div class=col-md-4>
            <p  title="Create by Youssef faraby" style="text-align:center;">© Copyright 2017. All Rights Reserved.</p>
            </div>
            <div class=col-md-4>
              <nav id=sub-menu>
                <ul>
                  <li><a href="#">FAQ's</a>
                  </li>
                  <li><a href="#">Sitemap</a>
                  </li>
                  <li><a href="contact-us.html">Contact</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="mail.js" type="text/javascript"></script>
    <script type ="text/javascript">
    function validation(){
      var Name =document.getElementById('Name').value;
      var Num =document.getElementById('Num').value;
      var email =document.getElementById('email').value;     
      if(Name == "" ||  Num == "" || email=="" ){
        sweetAlert("Oops...", "Something went wrong!", "error");
      }else{
        swal("Good job!", "You clicked the button!", "success");
       setTimeout(function(){takeScreenShot.call(this)},20);
      }
    }
    </script>
</body>
</html>