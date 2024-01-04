<!DOCTYPE html>
<?php session_start();?>
<html lang="id-ID" prefix="og: https://ogp.me/ns#">


    <head>
    <link rel="icon" type="image/x-icon" href="/img/icon.ico">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
        <style type="text/css">
            .wdp-comment-text img {
                max-width: 100% !important;
            }

        </style>
        <link rel="icon" href="icon/icon.png" type="image/gif" sizes="16x16">
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        
        <link rel="stylesheet" id="bdt-uikit-css" href="css/bdt-uikit-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="ep-helper-css" href="css/ep-helper-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="wp-block-library-css" href="css/wp-block-library-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="pafe-extension-style-css" href="css/pafe-extension-style-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="wdp_style-css" href="css/wdp_style-css.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#tabelLeaderboard').DataTable({"order": [[2,'desc'] ]});
            });
            function rundown(h){
                $.ajax({

                    type: "POST",
                    url: "tabulasi.php", 
                    data: {
                        h : h,
                    },
                    success: function(result){
                        var tabel = document.getElementById('tabel');
                        tabel.innerHTML='';
                        tabel.innerHTML=result;
                    }
                });
                        
            };
                    
        </script>
        <style id="wdp_style-inline-css" type="text/css">
            .center {
                text-align: center;
            }

            .pagination {
                display: inline-block;
            }

            .pagination a {
                color: black;
                float: left;
                padding: 8px 16px;
                text-decoration: none;
                transition: background-color .3s;
                border: 1px solid #ddd;
                margin: 0 4px;
            }

            .pagination a.active {
                background-color: #4CAF50;
                color: white;
                border: 1px solid #4CAF50;
            }

            .pagination a:hover:not(.active) {background-color: #ddd;}

            .wdp-wrapper {
                font-size: 14px;
            }

            .wdp-wrapper {
                background: #f4f4f4;
            }

            .wdp-wrapper.wdp-border {
                border: 1px solid #f4f4f4;
            }

            .wdp-wrapper .wdp-wrap-comments a:link,
            .wdp-wrapper .wdp-wrap-comments a:visited {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-wrap-link a.wdp-link {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-wrap-link a.wdp-link.wdp-icon-link-true .wdpo-comment {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-wrap-link a.wdp-link:hover {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-wrap-link a.wdp-link:hover .wdpo-comment {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-wrap-form {
                border-top: 1px solid #f4f4f4;
            }

            .wdp-wrapper .wdp-wrap-form .wdp-container-form textarea.wdp-textarea {
                border: 1px solid #f4f4f4;

                background: #ffffff;

                color: #3a3a3a;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-info .wdp-post-author {
                background: #3a3a3a;
            }

            .wdp-wrapper .wdp-wrap-form .wdp-container-form input[type="text"] {
                border: 1px solid #f4f4f4;

                background: #ffffff;

                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-wrap-form .wdp-container-form input.wdp-input:focus,
            .wdp-wrapper .wdp-wrap-form .wdp-container-form textarea.wdp-textarea:focus {
                border-color: #64b6ec;
            }

            .wdp-wrapper .wdp-wrap-form .wdp-container-form input[type="submit"],
            .wdp-wrapper .wdp-wrap-form .wdp-container-form input[type="button"].wdp-form-btn {
                color: "";

                background: #3a3a3a;
            }

            .wdp-wrapper .wdp-wrap-form .wdp-container-form input[type="submit"]:hover,
            .wdp-wrapper .wdp-wrap-form .wdp-container-form input[type="button"].wdp-form-btn:hover {
                background: "";
            }

            .wdp-wrapper .wdp-wrap-form .wdp-container-form .wdp-captcha .wdp-captcha-text {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-media-btns a > span {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-media-btns a > span:hover {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-comment-status {
                border-top: 1px solid #f4f4f4;
            }

            .wdp-wrapper .wdp-comment-status p.wdp-ajax-success {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-comment-status p.wdp-ajax-error {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-comment-status.wdp-loading > span {
                color: #3a3a3a;
            }

            .wdp-wrapper ul.wdp-container-comments {
                border-top: 1px solid #f4f4f4;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment {
                border-bottom: 1px solid #f4f4f4;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment ul li.wdp-item-comment {
                border-top: 1px solid #f4f4f4;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-info a.wdp-commenter-name {
                color: #3a3a3a !important;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-info a.wdp-commenter-name:hover {
                color: #3a3a3a !important;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-info .wdp-comment-time {
                color: #3a3a3a;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-text p {
                color: #3a3a3a;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-actions a {
                color: #3a3a3a;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-actions a:hover {
                color: #3a3a3a;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-rating .wdp-rating-link > span {
                color: #c9cfd7;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-rating .wdp-rating-link > span:hover {
                color: #3d7dbc;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-rating .wdp-rating-count {
                color: #3a3a3a;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-rating .wdp-rating-count.wdp-rating-positive {
                color: #2c9e48;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-rating .wdp-rating-count.wdp-rating-negative {
                color: #d13d3d;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content .wdp-comment-rating .wdp-rating-count.wdpo-loading {
                color: #c9cfd7;
            }

            .wdp-wrapper ul.wdp-container-comments a.wdp-load-more-comments:hover {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-counter-info {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-holder span {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-holder a,
            .wdp-wrapper .wdp-holder a:link,
            .wdp-wrapper .wdp-holder a:visited {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-holder a:hover,
            .wdp-wrapper .wdp-holder a:link:hover,
            .wdp-wrapper .wdp-holder a:visited:hover {
                color: #3a3a3a;
            }

            .wdp-wrapper .wdp-holder a.jp-previous.jp-disabled,
            .wdp-wrapper .wdp-holder a.jp-previous.jp-disabled:hover,
            .wdp-wrapper .wdp-holder a.jp-next.jp-disabled,
            .wdp-wrapper .wdp-holder a.jp-next.jp-disabled:hover {
                color: #3a3a3a;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-avatar img {
                max-width: 28px;

                max-height: 28px;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment .wdp-comment-content {
                margin-left: 38px;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment ul .wdp-comment-avatar img {
                max-width: 24px;

                max-height: 24px;
            }

            .wdp-wrapper ul.wdp-container-comments li.wdp-item-comment ul ul .wdp-comment-avatar img {
                max-width: 21px;

                max-height: 21px;
            }
            
            
            
            .videos {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 0.5rem;
    padding: 0.5rem;
    border: 1px dashed blue;
}
.video {
    min-height: 6rem;
    border: 1px dashed red;
}
.video:nth-child(4n),
.video:nth-child(5n),
.video:nth-child(6n) {
    min-height: 3rem;
    border: 1px dashed orange;
}
        </style>

        <link rel="stylesheet" id="wdp-centered-css-css" href="css/wdp-centered-css-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="wdp-horizontal-css-css" href="css/wdp-horizontal-css-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="wdp-fontello-css-css" href="css/wdp-fontello-css-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="exad-main-style-css" href="css/exad-main-style-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="googlefonts-css" href="css/googlefonts-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-icons-css" href="css/elementor-icons-css.css" type="text/css" media="all" />
        <script src="https://kit.fontawesome.com/0ad58184f5.js" crossorigin="anonymous"></script>
        <style id="elementor-icons-inline-css" type="text/css">
            .elementor-add-new-section .elementor-add-templately-promo-button {
                background-color: #5d4fff;
                background-image: url(https://invitationwedding.id/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
                background-repeat: no-repeat;
                background-position: center center;
                margin-left: 5px;
                position: relative;
                bottom: 5px;
            }
        </style>
        <link rel="stylesheet" id="elementor-frontend-legacy-css" href="css/elementor-frontend-legacy-css.css" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-frontend-css" href="css/elementor-frontend-css.css" type="text/css" media="all" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Water+Brush&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Cinzel+Decorative&display=swap');
            @import url("fonts.css");
        </style>
        <style id="elementor-frontend-inline-css" type="text/css">
            @font-face {
                font-family: eicons;
                src: url(https://invitationwedding.id/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0);
                src: url(https://invitationwedding.id/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.eot?5.10.0#iefix) format("embedded-opentype"),
                    url(https://invitationwedding.id/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff2?5.10.0) format("woff2"),
                    url(https://invitationwedding.id/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.woff?5.10.0) format("woff"),
                    url(https://invitationwedding.id/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.ttf?5.10.0) format("truetype"),
                    url(https://invitationwedding.id/wp-content/plugins/elementor/assets/lib/eicons/fonts/eicons.svg?5.10.0#eicon) format("svg");
                font-weight: 400;
                font-style: normal;
            }

            .elementor-kit-8309 {
                --e-global-color-primary: #6ec1e4;
                --e-global-color-secondary: #54595f;
                --e-global-color-text: #7a7a7a;
                --e-global-color-accent: #61ce70;
                --e-global-typography-primary-font-family: "Roboto";
                --e-global-typography-primary-font-weight: 600;
                --e-global-typography-secondary-font-family: "Roboto Slab";
                --e-global-typography-secondary-font-weight: 400;
                --e-global-typography-text-font-family: "Roboto";
                --e-global-typography-text-font-weight: 400;
                --e-global-typography-accent-font-family: "Roboto";
                --e-global-typography-accent-font-weight: 500;
            }
            .elementor-section.elementor-section-boxed > .elementor-container {
                max-width: 1140px;
            }
            .elementor-widget:not(:last-child) {
                margin-bottom: 20px;
            }
            h1.entry-title {
                display: var(--page-title-display);
            }
            @media (max-width: 1024px) {
                .elementor-section.elementor-section-boxed > .elementor-container {
                    max-width: 1024px;
                }
            }
            @media (max-width: 767px) {
                .elementor-section.elementor-section-boxed > .elementor-container {
                    max-width: 767px;
                }
            }
            .elementor-103677 .elementor-element.elementor-element-ebc1981:not(.elementor-motion-effects-element-type-background),
            .elementor-103677 .elementor-element.elementor-element-ebc1981 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                background-color: #000000;
            }
            .elementor-103677 .elementor-element.elementor-element-ebc1981 > .elementor-background-overlay { /BACKGROUND LAMAN KEDUA SLICE PERTAMA/
                background-image: url("img/ptmbokedeh.png");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                opacity: 1;
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }
            .elementor-103677 .elementor-element.elementor-element-ebc1981 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 200px 0px 200px 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-ebc1981 > .elementor-shape-bottom .elementor-shape-fill {
                fill: #490251; /background color/
            }
            .elementor-103677 .elementor-element.elementor-element-ebc1981 > .elementor-shape-bottom svg {
                width: calc(150% + 1.3px);
                height: 69px;
            }
            .elementor-103677 .elementor-element.elementor-element-1be9c976 > .elementor-element-populated {
                margin: 160px 0px -110px 0px;
                padding: 0px 0px 0px 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-666836ac {
                text-align: center;
            }
            .elementor-103677 .elementor-element.elementor-element-666836ac .elementor-heading-title {
                color: #ffffff;
                font-family: "Lato", Sans-serif;
                font-size: 12px;
                font-style: normal;
                letter-spacing: 5px;
            }
            .elementor-103677 .elementor-element.elementor-element-666836ac > .elementor-widget-container {
                margin: 0px 0px -15px 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-46eb9ad5 {
                text-align: center;
            }
            .elementor-103677 .elementor-element.elementor-element-46eb9ad5 .elementor-heading-title { /CSS LAMAN PERTAMA PALING ATAS/
                color: white;
                font-family: flaming;
                font-size: 90px;
                font-weight: 400;
                font-style: normal;
                line-height: 1.3em;
                letter-spacing: 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-46eb9ad5 > .elementor-widget-container {
                margin: -10px 0px 0px 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-4fc6aee:not(.elementor-motion-effects-element-type-background),
            .elementor-103677 .elementor-element.elementor-element-4fc6aee > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                background-color: transparent;
                background-image: linear-gradient(180deg, #490251 0%, #330138 100%); /gradient background color/
            }
            .elementor-103677 .elementor-element.elementor-element-4fc6aee {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin-top: -10px;
                margin-bottom: 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-4fc6aee > .elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }
            .elementor-103677 .elementor-element.elementor-element-1e484b1 img {
                width: 8%;
            }
            .elementor-103677 .elementor-element.elementor-element-1e484b1 > .elementor-widget-container {
                margin: 20px 0px -15px 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-c454c2a {
                text-align: center;
                color: #ffffff;
                font-family: "Lato", Sans-serif;
                font-size: 100px;
                font-style: normal;
            }
            .elementor-103677 .elementor-element.elementor-element-c454c2a > .elementor-widget-container {
                margin: 0px 0px -25px 0px;
                padding: 0px 200px 0px 200px;
            }
            .elementor-103677 .elementor-element.elementor-element-2b1f171 {
                text-align: center;
            }
            .elementor-103677 .elementor-element.elementor-element-2b1f171 .elementor-heading-title {
                color: #ffffff;
                font-family: "Playfair Display", Sans-serif;
                font-size: 20px;
                font-weight: 500;
                letter-spacing: 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-2b1f171 > .elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-b07c89f { /*selamat menjalani hidup blabnlababla unika */
                text-align: center;
                color: #ffffff;
                font-family: "Arial", Sans-serif;
                font-size: 80px;
                font-weight: 300;
            }
            .elementor-103677 .elementor-element.elementor-element-b07c89f > .elementor-widget-container {
                margin: -10px 0px 0px 0px;
                padding: 0px 200px 20px 200px;
            }
            .elementor-103677 .elementor-element.elementor-element-f03c512:not(.elementor-motion-effects-element-type-background),
            .elementor-103677 .elementor-element.elementor-element-f03c512 > .elementor-motion-effects-container > .elementor-motion-effects-layer {
                background-color: #edebe3;
                background-image: url("img/SCU BSB Drone New.png");
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-repeat:no-repeat;
                background-position:center;
            }
            .elementor-103677 .elementor-element.elementor-element-f03c512 > .elementor-background-overlay {
                background-color: #000000;
                opacity: 0.1;
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }
            .elementor-103677 .elementor-element.elementor-element-f03c512 {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                padding: 100px 0px 100px 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-c51915a > .elementor-element-populated {
                transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
                margin: 0px 0px 0px 0px;
                padding: 0px 0px 0px 0px;
            }
            .elementor-103677 .elementor-element.elementor-element-c51915a > .elementor-element-populated > .elementor-background-overlay {
                transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            }
            .elementor-103677 .elementor-element.elementor-element-3306cbaf {
                text-align: center;
            }
            .elementor-103677 .elementor-element.elementor-element-3306cbaf .elementor-heading-title { /we are escaping unika/
                color: #ffff;
                font-family: "Lato", Sans-serif;
                font-size: 30px;
                font-weight: bold;
                letter-spacing: 1.9px;
            }
            .elementor-103677 .elementor-element.elementor-element-bc42c58 {
                color: #ffff;
                font-family: "Lato", Sans-serif;
                font-size: 18px;
                text-align: center;
            }
            .elementor-103677 .elementor-element.elementor-element-bc42c58 .elementor-heading-title { /by the grace of god/
                color: #ffff;
                font-family: "Lato", Sans-serif;
                font-size: 10px;
                font-style: italic;
                line-height: 1.5em;
                text-align: center;
            }
            .elementor-103677 .elementor-element.elementor-element-bc42c58 > .elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 0px 200px 0px 200px;
            }
            .elementor-103677 .elementor-element.elementor-element-1b7551ba > .elementor-element-populated {
                margin: 20px 20px 20px 20px;
                padding: 10px 10px 10px 10px;
            }
            .elementor-103677 .elementor-element.elementor-element-415db7cc.elementor-position-right .elementor-image-box-img {
                margin-left: 15px;
            }
            .elementor-103677 .elementor-element.elementor-element-415db7cc.elementor-position-left .elementor-image-box-img {
                margin-right: 15px;
            }
            .elementor-103677 .elementor-element.elementor-element-415db7cc.elementor-position-middle .elementor-image-box-img {@__CLASS__}