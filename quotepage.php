<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale = 1.0">
    <meta name="keywords" content="trucking insurance, aurora il, trucking insurance, insurance for trucks, insurance">
    <title> Trucking Insurance Solutions | Welcome </title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- social icons link -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="./file.js"></script>

</head>

<body>

<header>
  <div id="wrapper_header">
    <div id="mobile-navi"> </div>
    <nav>
      <div id="logo">
      <a href="index.html"><img src="./img/cropped-Logo-large.jpg"/></a>
      </div>

      <div id="login">
        <a href="https://www.nowcerts.com/Login.aspx"><button id="login_button">Client Login</button></a>
      </div>

      <ul class="mobile-nav">
        <li><a class="scroll" href="index.php">Home</a></li>
        <li><a class="scroll" href="index.php#AboutSection">About</a></li>
        <li><a class="scroll" href="index.php#CoveragesSection">Coverages</a></li>
        <li><a class="scroll" href="#ContactSection">Contact</a></li>
        <li><a href="quotepage.php#QuoteSection">Quote</a></li>
      </ul>
    </nav>

    <div id="banner_wrapper">
      <div id="banner_text">
      <span id="part_one">SOLUTIONS DESIGNED</span><span id="part_two">TO PROTECT <span style="color:#BBA47A">YOU</span>
      </div>
    </div>

    <div id="get_a_quote">
      <a href="quotepage.html"><button id="get_a_quote_button" >Get A Quote</button></a>
    </div>
</header>

<section>


  <div id="quotepage"><div id="QuoteSection"></div>

<br><br><br><br><br><br>

    <script id="nowcerts" src="https://www.nowcerts.com/Resources/Scripts/import.js?v-qr" data-url="https://www6.nowcerts.com/Pages/QuoteRequests/Auto/Commercial.aspx?AgencyId=b468ddcd-eab9-4b26-abe1-48fd4179c89b" data-height="600" type="text/javascript"></script>

<br><br><br><br><br><br>
  </div>


</section>




<footer>

  <section id="contact_form"> <div id="ContactSection"></div>

    <div id="contact_form_title">
      <p><span style="color:#BBA47A">CONTACT</span> US<img class="circlebar" src="./img/gear_white.png" /></p>
    </div>

  <div id="contact_form_inner">
      <form action="contact_form.php" method="post">
        <p><input style="font-family: wsfont;" type="text" name="name" class="form_field" placeholder="Insured Name"></p>
        <p><input style="font-family: wsfont;" type="email" name="email" class="form_field" placeholder="Insured Email"></p>
        <p><input style="font-family: wsfont;" type="text" name="phone" class="form_field" placeholder="Subject"></p>
        <p><textarea style="font-family: wsfont;" rows="7" name="message" class="form_field" placeholder="Description"></textarea></p>
        <p><button style="font-family: wsfont;"type="submit" name="submit" class="form_button">Send Request</button></p>
      </form>
      <?php
        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if (strpos($fullURL, "mail=send") ==true) {
          echo "<center><p>Thanks! We'll be in contact shortly!<p></center>";
        }
        ?>
  </div>

  <div id="contact_form_info">
      <div id="address">
        <p>1700 N Farnsworth Ave. Suite 25<br>
          Aurora, IL 60505</p>
        <p>Suite 1 Aurora IL 60505</p>
      </div>
      <div id="numbers">
        <a id="office"style="text-decoration:none;" href="tel: 6308004214"><p>Office: 630.800.4214</p></a>
        <p>info@truckinginsurancesolutions.com<p>
      </div>
    </div>

    <div id="copyright">
      <p>2018 &copy; Trucking Insurance Solutions</p>
      <p>Design By <a style="text-decoration: none; color: white;"href="http://www.brandevolutionco.com">Brand Evolution Co.</span></p>
    </div>

  </section>


</footer>





</body>

</html>
