<?php
    session_start();
    include_once "../connect.php"; 
    $pageType = 2; //[TEMPLATE]
    $id = $_SESSION['userid']; 
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>[TEMPLATE] title</title>
    <meta name="description" content="[TEMPLATE] description" />
    <meta name="author" content="[TEMPLATE] Satish Subramanyam">
    <link href="[TEMPLATE] https://www.rocketblocks.me/blog/wayfair-interview-process.php" rel="canonical">

    <!-- [TEMPLATE] -->
    <script defer type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"Blog","mainEntityOfPage":"https:\/\/www.rocketblocks.me/blog/wayfair-interview-process.php","headline":"Wayfair product manager interview process", "about":{"@type":"Thing","url":"https:\/\/www.rocketblocks.me/blog/wayfair-interview-process.php","name":"Wayfair product manager interview process","description":"An overview of the product management interview process at Wayfair, including tips and sample questions."},"publisher":{"@type":"Organization","name":"RocketBlocks","sameAs": ["https://www.youtube.com/rocketblocks","https://www.linkedin.com/company/rocketblocks-me/"]},"datePublished":"2022-03-15","dateModified":"2022-03-15","author":{"@type": "Person","name":"Satish Subramanyam","URL":"https://www.rocketblocks.me/contributors/satish-subramanyam.php"}}</script>
    
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="[TEMPLATE] title">
    <meta itemprop="description" content="[TEMPLATE] description">
    <meta itemprop="image" content="[TEMPLATE] https://www.rocketblocks.me/images/blog/cards/wayfair-pm-interview-1200.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@rocketblocks">
    <meta name="twitter:title" content="[TEMPLATE] title">
    <meta name="twitter:description" content="[TEMPLATE] description"> <!--less than 200 characters-->
    <meta name="twitter:creator" content="@rocketblocks">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="[TEMPLATE] https://www.rocketblocks.me/images/blog/cards/wayfair-pm-interview-1200.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="[TEMPLATE] title" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="[TEMPLATE] https://www.rocketblocks.me/blog/wayfair-interview-process.php" />
    <meta property="og:image" content="[TEMPLATE] https://www.rocketblocks.me/images/blog/cards/wayfair-pm-interview-1200.png" />
    <meta property="og:description" content="[TEMPLATE] description" />
    <meta property="og:site_name" content="RocketBlocks" />
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    <link defer rel="stylesheet" type="text/css" href="/main.css?v=4">
    <link defer rel="stylesheet" type="text/css" href="blog.css">       
</head>
<body>
<?php
    include_once "../a/headerAlt.php"; 
?>
<div class="container-fluid">
    <a href="/blog.php" class="btn btn-lg btn-outline-secondary back-to-main">See all RocketBlocks posts</a>
    <div class="row">   
        <div class="col-12 col-md-10 mx-auto blog-text-new blog-container">

            <!-- [TEMPLATE] h1 header {Example from wayfair-interview-process.php} -->
            <h1 class="blog-h1-new">Wayfair product manager interview process</h1>

            <!-- [TEMPLATE] Author {Example from wayfair-interview-process.php} -->
            <table class="blog-bio mb-5">
                <tr>
                    <td class="align-middle">
                        <img src="/images/team/satish-45.jpeg" class="rounded-circle mr-2" srcset="/images/team/satish-90.jpeg 2x, /images/team/satish-45.jpeg" width="45" height="45" />
                    </td>
                    <td>
                        <table class="blog-bio-table">
                            <tr class="blog-bio-table">
                                <td><a href="/contributors/satish-subramanyam.php" target="_blank" rel="noopener">Satish Subramanyam</a>, Senior Product Manager at Chime, ex-Wayfair PM</td>
                            </tr>
                            <tr class="blog-bio-table">
                                <td class="blog-date">Published: March 15, 2022</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <!-- [TEMPLATE] Outline {Example from wayfair-interview-process.php} -->
            <a class="anchor-tag" name="outline"></a>
            <p><a href="#recruiter">Recruiter screen</a> | <a href="#phone">Phone interview</a> | <a href="#design">Onsite #1</a> | <a href="#analytics">Onsite #2</a> | <a href="#experience">Onsite #3</a> | <a href="#stakeholders">Onsite #4</a> | <a href="#hiring">Team matching </a></p>

            <!-- [TEMPLATE] img {Example from wayfair-interview-process.php} -->
            <p><img width="1932" height="1016" class="img-center img-fluid" src="/images/blog/cards/wayfair-pm-interview-1200.png" alt="Overview of the product managaer interview process at Wayfair" title="Wayfair PM interview process"></p>

            <!-- [TEMPLATE] full width img {Example from what-is-a-prd.php} -->
            <img width="1352" height="628" src="/images/blog/prd-uber-header.png" class="img-fluid img-center full-width" alt="Example of a project requirements document (PRD) for an Uber app feature" title="Example Uber PRD">

            <!-- [TEMPLATE] h2 header {Example from wayfair-interview-process.php} -->
            <h2 class="blog-h2-new">Interview process</h2>

            <!-- [TEMPLATE] PM plug {Example from wayfair-interview-process.php} -->
            <?php include_once "pmPlugAlt.html"; ?>

            <!-- [TEMPLATE] Blue box {Example from what-is-a-prd.php} -->
            <p class="blog-blockquote blue-one-bg">Recent user research sessions showed that many riders often skip rating their driver on this screen because they can't remember which driver they're rating (e.g., many riders never even see their driver face-to-face since they're in the back).</p><p>Since driver ratings are an important dataset for our algorithms and operations, any "nudge" we can give users to rate drivers will have an important, compounding impact on the business.</p>

            <!-- [TEMPLATE] Example question {Example from wayfair-interview-process.php} -->
            <h4 class="example-question blog-blockquote blue-one-bg">Sample question #1: <i>What is your experience working with cross functional folks?</i></h4>

            <!-- [TEMPLATE] Example link {Example from what-is-a-prd.php} -->
            <a href="https://docs.google.com/document/d/1mEMDcHmtQ6twzNlpvF-9maNlAcezpWDtCnyIqWkODZs/edit" target="_blank" rel="noopener">PRD template</a>

            <!-- [TEMPLATE] Example table {Example from what-is-a-case-interview.php} -->
            <div class="table-wrapper full-width">
                <table class="table table-hover">
                    <thead>
                        <tr><td class="red-font"><strong>Don't</strong></td><td class="green-font"><strong>Do</strong></td></tr>
                    </thead>
                    <tbody>
                        <tr><td>List everything and try to "boil the ocean"</td><td>Structure your thoughts into independent "buckets"</td></tr>
                        <tr><td>use a canned framework like Porter's 5 forces</td><td>Propose a specific framework that addresses the case head on</td></tr>
                        <tr><td>Try to keep everything in your head</td><td>Draw your framework as a reference for yourself and the interviewer</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- [TEMPLATE] Video {Example from why-consulting.php} -->
            <iframe class="img-center" width="560" height="315" src="https://www.youtube-nocookie.com/embed/ib33aTlVRnM?rel=0" frameborder="0" allowfullscreen></iframe>
            <div class="pb-3 pt-1"></div>

            <!-- [TEMPLATE] Outline link and h3 header {Example from wayfair-interview-process.php} -->
            <a class="anchor-tag" name="hiring"></a>
            <h3 class="blog-h3-new">Onsite #5: Team matching with hiring managers <span class="small"><a href="#outline" class="small">(Top)</a></span></h3>

            <?php
                include_once "a/relevantLinks.php";
                displayRelevantLinks(__FILE__);
            ?>

            <div class="pb-3 pt-1"></div>

            <!-- [TEMPLATE] product shoutout {Example from wayfair-interview-process.php} -->
            <?php include_once "pmShoutout.html"; ?>
        </div>
    </div><!--row-->
</div><!--container-->

<div class="pb-5 pt-5"></div>
<?php include_once "../a/footerAlt.php"; ?>

<script src="/js/jquery.min.js"></script>
<script defer src="/js/general-v6.js"></script>
<script defer src="/js/cookieConsent-v1.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23663418-1', 'auto');
  ga('send', 'pageview');
</script>
<script defer type="text/javascript">
    var addthis_share;

    $(document).on('scroll', function(){

        if (!addthis_share) {

    addthis_share = {
        passthrough : {
            twitter: {
                via: "rocketblocks",
                text: "[TEMPLATE] Title"
                    }
                }
            }

            $('body').append('<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5826049884929212">');

        }

    });
</script>
</body>
</html>