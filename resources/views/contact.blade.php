<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Contact Page - Abstract</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
     ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

<!-- header
================================================== -->
@include('layouts.header')<!-- end header -->


<!-- content
================================================== -->
<section id="content-wrap" class="site-page">
    <div class="row">
        <div class="col-twelve">

            <section>

                <div class="content-media">
                    <div id="map-wrap">
                        <div id="map-container"></div>
                        <div id="map-zoom-in"></div>
                        <div id="map-zoom-out"></div>
                    </div>
                </div>

                <div class="primary-content">

                    <h1 class="entry-title add-bottom">Get In Touch With Us.</h1>

                    <p class="lead">Lorem ipsum Deserunt est dolore Ut Excepteur nulla occaecat magna occaecat Excepteur nisi esse veniam dolor consectetur minim qui nisi esse deserunt commodo ea enim ullamco non voluptate consectetur minim aliquip Ut incididunt amet ut cupidatat.</p>

                    <p>Duis ex ad cupidatat tempor Excepteur cillum cupidatat fugiat nostrud cupidatat dolor sunt sint sit nisi est eu exercitation incididunt adipisicing veniam velit id fugiat enim mollit amet anim veniam dolor dolor irure velit commodo cillum sit nulla ullamco magna amet magna cupidatat qui labore cillum sit in tempor veniam consequat non laborum adipisicing aliqua ea nisi sint ut quis proident ullamco ut dolore culpa occaecat ut laboris in sit minim cupidatat ut dolor voluptate enim veniam consequat occaecat fugiat in adipisicing in amet Ut nulla nisi non ut enim aliqua laborum mollit quis nostrud sed sed.</p>

                    <div class="row">
                        <div class="col-six tab-full">
                            <h4>Where to Find Us</h4>

                            <p>
                                1600 Amphitheatre Parkway<br>
                                Mountain View, CA<br>
                                94043 US
                            </p>

                        </div>

                        <div class="col-six tab-full">
                            <h4>Contact Info</h4>

                            <p>someone@abstractwebsite.com<br>
                                info@abstractwebsite.com <br>
                                Phone: (+63) 555 1212
                            </p>

                        </div>

                    </div>

                    <form name="cForm" id="cForm" method="post" action="">
                        <fieldset>

                            <div class="form-field">
                                <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                            </div>

                            <div class="form-field">
                                <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                            </div>

                            <div class="form-field">
                                <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                            </div>

                            <div class="message form-field">
                                <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                            </div>

                            <button type="submit" class="submit button-primary full-width-on-mobile">Submit</button>

                        </fieldset>
                    </form> <!-- end form -->

            </section>


        </div> <!-- end col-twelve -->
    </div> <!-- end row -->
</section> <!-- end content -->


<!-- footer
================================================== -->
@include(".layouts.footer")

<!-- Java Script
================================================== -->
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/plugins.js"></script>
<script src="http://maps.google.com/maps/api/js?v=3.13&amp;sensor=false"></script>
<script src="js/main.js"></script>

</body>

</html>
