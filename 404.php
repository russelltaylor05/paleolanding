<?php

    $message = "<html><body>";
    $message .= "<h1>Customer: ".$_SERVER['REMOTE_ADDR']."</h1>";
    $message .= $_POST['order'];
    $message .= "</body></html>";

    $to = "russelltaylor05@gmail.com";
    $subject = "Paleo Order (".$_SERVER['REMOTE_ADDR'].")";
    $from = "someonelse@example.com";

    //$headers = "MIME-Version: 1.0rn"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1rn";
    $headers .= "From:" . $from;

    mail($to,$subject,$message,$headers);

?>

<!doctype html>

<head>
    <meta charset="utf-8">
    <title>Simple Paleo Diet - Delicious Paleo Diet Food made Simple</title>
    <meta name="description" content="Recipes Template, Food Template Recipes Blog Template, cooking, Food, chef, Responsive Template, html5 Template, html5, css3, jquery, responsive">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="js/html5.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic|Crete+Round:400,400italic|Lobster|Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link id="color" rel="stylesheet" href="css/color1.css">
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
    <link rel="stylesheet" href="css/mediaelementplayer.min.css" />
    <link href="colorbox/colorbox.css" rel="stylesheet" type="text/css" media="screen" />

    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-399601-16']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
    
</head>

<body>

<!--Header Part Start-->
<header id="header" class="clearfix">
  <div class="headerstrip"><div class="spiral"></div></div>
  
  <div class="container clearfix">
    <a href="index.html" id="logo">
      <img src="images/paleo_logo.png" alt="Tasty Delicious Recipes">
    </a>
    <ul id="shopping">
        <li class="clearfix"><a class="linkbuttonsmall cart" href="#shopping-cart">Cart (<span class="count">0</span>)</a></li>
        <li class="clearfix"><a class="linkbuttonsmall checkout clearfix" href="#">Checkout</a></li>
    </ul>
    <nav id="topnav">
      <ul>
        <li class="active"><a  class="home-link" href="index.html" data-description="Our Products">Home</a></li>
        <li><a class="about-us" href="#about-us" data-description="Our Philosophy">About Us</a></li>
        <li><a class="about-us" href="#contact-us" data-description="Give us some Feedback">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</header>
<!--
<h1 class="topcontent"><span>Whoops! Looks like there is an error with our shopping cart.</span></h1>
<p class="top-detail">Unfortunately we are unable to process your order at this time. We are sorry for the inconvenience and hope to have things back up and running soon. </p>
-->
<!--Middle Part Start-->
<section id="maincontainer" class="container clearfix">
  <h1 class="heading1">Error</h1>
  <h2 class="heading3">Unfortunately we cannot connect to our shopping cart server right now. Please try again at a later date.</h2>
  <p>Sorry, but the page you were trying to view does not exist.</p>
  <p>It looks like this was the result of either:</p>
  <ul class="listoption1">
    <li>A mistyped address</li>
    <li>An out-of-date link</li>
  </ul>
</section>
<!--Middle container End-->
<!--Header Part End-->


<!--Footer Start-->
<footer id="footer" class="clearfix">
  <div class="footerbg clearfix">
    <ul class="footersection container">
      <li class="testimonial">
        <h4>Testimonial</h4>
        <p class="testi">"The Goji Cranberry bars are delicious!! I have at least one a day as a snack at work."</p>    
        <span>Russell Taylor <br> Fresno, CA</span>
      </li>
      
      <li class="testimonial">
        <h4>Testimonial</h4>
        <p class="testi">"I was sceptical about the smoothies are first but once I tried them I was a believer. I usually add soy milk and strawberries to make them pop."</p>
        <span>David Fintel <br>San Luis Obispo, CA</span>
      </li>

      <li class="testimonial">
        <h4>Testimonial</h4>
        <p class="testi">"All their food is absolutely delicious. Ever since I started the paleo diet 2 months ago I have been ordering from Simple Paleo to make my life easier."</p>    
        <span>Alyssa Friesen <br>Canton, OH</span>
      </li>

      <li class="links">
        <h4>Categories</h4>
        <ul>
          <li>Breads</li>
          <li>Sauces</li>
          <li>Bars</li>
          <li>Chips</li>
          <li>Trail Mix</li>
          <li>Smoothies</li>      
        </ul>
      </li>
    </ul>
  </div>
  
  <!--Social links Start-->

  <section id="social" class="container">
    <div class="leftline">@2012 All images & icons are copyright to their owners.</div>
    <!--
    <div id="footersocial">
      <a class="facebook" title="Facebook" href="#">Facebook</a>
      <a class="twitter" title="Twitter" href="#">Twitter</a>
      <a class="linkedin" title="Linkedin" href="#">Linkedin</a>
      <a class="blooger" title="Blogger" href="#">Blogger</a>
      <a class="rss" title="rss" href="#">rss</a>
      <a class="dig" title="Dig" href="#">Dig</a>
      <a class="googleplus" title="Googleplus" href="#">Googleplus</a>
      <a class="skype" title="Skype" href="#">Skype</a>
      <a class="flickr" title="Flickr" href="#">Flickr</a>
    </div>
    -->
  </section>

  <!--Social links End-->
  <!--Go to Top-->
  <a title="Go Top" id="gotop" href="#">&nbsp;</a>
</footer>
<!--Footer End-->

<div style="display: none;">
    <div id="about-us">
        <h1>About Us</h1>
        <img src="images/bliss.jpg" />
        <p>Dolore vel euismod erat adipiscing sollemnes. Investigationes quam in consequat augue dolore. Investigationes claram legentis legunt nunc lobortis. Dolore est mirum esse iis est. Aliquip typi eodem duis ullamcorper processus. Typi feugiat consequat sequitur legentis volutpat. </p>
        <p>Ea sed decima nisl ullamcorper vel. Eum decima accumsan in anteposuerit iis. Erat odio quam quod diam vel. Doming eodem mazim facit usus dolore. Eorum nibh ex eorum quod formas. Demonstraverunt eorum luptatum lobortis nunc facer. </p>
        <p>Parum tation notare typi te non. Legentis blandit dolor erat nisl parum. Possim nobis quam vero id adipiscing. Doming feugiat nisl demonstraverunt sit nunc. Mazim tincidunt lius luptatum ipsum et. Eros saepius diam qui eros enim. Quis ad ullamcorper erat mirum insitam. Sed claram littera consequat gothica notare. Aliquam facer aliquip me wisi imperdiet. Claritatem dolor autem facilisi vulputate nam. Nulla nunc habent lius lectores eum. Ad magna quis molestie lectores legentis. </p>
        <p>Sit nonummy non parum te nostrud. Exerci magna dolor facer in dignissim. Iis blandit tation id nobis augue.</p>
    </div>
</div>

<div style="display: none;">
    <div id="shopping-cart" class="clearfix">
        <h1>Shopping Cart</h1>
        <table>
            <thead>
                <tr>
                    <th class="remove-column"></th>
                    <th>Product</th>
                    <th class="price-column">Price</th>
                </tr>
            </thead>        
        </table>
        <p id="shipping">Free Shipping</p>
        <p id="subtotal">Total: $<span class="value">0.00</span></p>
        <a href="#" class="linkbuttonmiddum checkout">Checkout</a>
        <a href="#" class="linkbuttonmiddum continue">Continue Shopping</a>
    </div>
</div>


<div style="display: none;">
    <div id="contact-us">
        <h1>Contact Us</h1>
        <p>Fill out the form below and let us know if you have an questions or concerns. If you just want to let us know how good our food is thats cool too. We always love compliments.</p>
        <form>
            <ul>
                <li>
                    <label>Email:</label>
                    <input type="text" name="name" />
                </li>

            <li>
            <label>Name:</label>
            <input type="text" name="name" />
            </li>

            <li>
                <label>Comment:</label>
                <textarea></textarea>
            </li>
            <li class="clearfix">
                <input type="submit" value="Submit" class="submit" />
            </li>
            </ul>

        </form>
    </div>
</div>




<!-- Google Code for Paleo Order Made Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1069753908;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "vHy0CPasygMQtMyM_gM";
var google_conversion_value = 0;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://www.googleadservices.com/pagead/conversion/1069753908/?value=0&amp;label=vHy0CPasygMQtMyM_gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



<!--Javascripts-->
<script src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script  type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script><script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script  type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/jquery.gmap.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>