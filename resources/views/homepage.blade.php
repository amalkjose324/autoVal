<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="OzonHub">
  <meta name="google" content="notranslate" />
  <meta content="autoVal API : jQuery based Automatic Form Validation" name="Amal K Jose">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link href="favicon.ico" rel="icon">

  <title>AutoVal : Automatic Form Validatior</title>


  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="css/homestyle.css" rel="stylesheet">
</head>
<style>
  .navbar-logo-img {
    height: 75px;
    margin-top: -25px !important;
  }

  .navbar-logo-img-big {
    max-width: 620px;
    width: 70%;
    margin-top: -25px !important;
  }
</style>

<body>
  <!-- Add your content of header -->
  <header>
    <nav class="navbar navbar-default active">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="./index.html" title="">
              <img src="images/icon/logo-white.png" class="navbar-logo-img" alt="AutoVal">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <p>
                <a href="https://github.com/ozonhub/autoVal" class="btn btn-default navbar-btn" title=""><i class="fa fa-github fa-2x" style="font-size:24px;"aria-hidden="true">    Get on Github</i></a>
              </p>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Add your site or app content here -->
  <div class="hero-full-container background-image-container white-text-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1><img src="images/icon/logo-white_lo.png" class="navbar-logo-img-big" alt="AutoVal"></h1>
          <p>A complete solution API for Automatic Form Validation.</p>
          <br>
          <a href="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" download="jquery-3.2.1.min.js" class="btn btn-default btn-lg"
            title="">Go to Console</a>
        </div>
      </div>
    </div>
  </div>

  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <div class="text-center">
            <h2>About API</h2>
            <p> autoVal is a free Form validation API based on jQuery. It is developed by Amal K Jose as part of project work.
              The first version of autoVal v1.0.0 was released on 17<sup>th</sup> October, 2017. Now it is in a developing
              stage. And so, there may have more frequent updates. </p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="section-container">
    <div class="container text-center">
      <div class="row section-container-spacer">
        <div class="col-xs-12 col-md-12">
          <h2>Usage</h2>
          <p>Here you can get all information about how to use autoVal API in your project.</p>
        </div>
      </div>
      <div class="row">
        <h4><big><b>Steps to implement API to your forms</b></big></h4><br>
        <div style="text-align:left;padding-left:10%;padding-right:10%;">
          <b>1. Include following lines to your website.</b><br>
          <div style="margin-left:20px;ext-align:left; width:110%">
            &lt;!-- Adding autoVal css style --&gt;<br> &lt;link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/autoVal/master/css/autoval-style.css"&gt;<br>            &lt;!-- Adding jQuery script. It must be before other script files --&gt;<br> &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"&gt;
            &lt;/script&gt;
            <br> &lt;!-- Adding autoVal script file --&gt;<br> &lt;script src="https://rawgit.com/ozonhub/autoVal/master/js/autoval-script.js"&gt;&lt;/script&gt;<br>
          </div><br>
          <b>2. Add a Form with <strong style="color:black;">onsubmit="return"</strong > and <strong  style="color:black;">class="autoval-form"</strong>.</b><br>
          <div style="margin-left:20px;ext-align:left; width:110%">
            Example:<br> &lt;form action="destignaion.php" class="autoval-form" method="post" onsubmit="return"&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;!--Form
            elements --&gt;<br> &lt;/form&gt;
            <br>
          </div><br>
          <b>3. Add all required elements with <strong  style="color:black;">class="av-format"</strong> and  <strong style="color:black;">av-message="Error message"</strong >.</b><br>
          <div style="margin-left:20px;ext-align:left; width:110%">
            Example:<br> &lt;input type="text" name="email" class="av-email" av-message="Invalid email address"/&gt;<br>
          </div><br>
          <b>4. Add a submit button on your form.</b><br>
          <div style="margin-left:20px;ext-align:left; width:110%">
            Example:<br> &lt;input type="submit" name="submit" value="Submit"/&gt;<br>
          </div><br>
        </div>
      </div>
    </div>
  </div>
  <div class="section-container">
    <div class="container text-center">
      <div class="row section-container-spacer">
        <div class="col-xs-12 col-md-12">
          <div class="text-center">
            <h2>Validation Formats</h2>
            <p>Here you can get all validation formats with description. These formats can be used for your validation purpose
              directly.
              <br>
              <table border="1" width="100% ">
                <tr>
                  <th style="text-align:center; width:5%">No</th>
                  <th style="text-align:center; width:12.5%">Validator</th>
                  <th style="text-align:center; width:12.5%">AV-Format</th>
                  <th style="text-align:center; width:40%">Description</th>
                  <th style="text-align:center; width:20%">Test here</th>
                  <th style="text-align:center; width:15%">Implemented</th>
                </tr>

              </table>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-container">
    <div class="container text-center">
      <div class="row section-container-spacer">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <div class="text-center">
            <h2>Live example</h2>
            <p>Here live example of autoVal API implementation.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <h4><big><b>Code</b></big></h4><br>
            <div style="text-align:left; width:110%; ">
              &lt;!-- Adding autoVal css style --&gt;<br> &lt;link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/autoVal/master/css/autoval-style.css"&gt;<br>              &lt;!-- Adding jQuery script. It must be before other script files --&gt;<br> &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"&gt;&lt;/script&gt;<br>              &lt;!-- Adding autoVal script file --&gt;<br> &lt;script src="https://rawgit.com/ozonhub/autoVal/master/js/autoval-script.js"&gt;&lt;/script&gt;<br>
              <br> &lt;form action="" method="post" onsubmit="return" class="autoval-form"&gt;<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input
              type="text" name="email" av-message="invalid email" &gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input
              type="text" name="phone" av-message="invalid phone" class="av-phone"&gt; <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input
              type="submit" name="sub" value="Submit"&gt;<br> &lt;/form&gt;
            </div><br>
          </div>
          <div class="col-xs-12 col-md-4">
            <h4><big><b>Live Output</b></big></h4><br>
            <div style="text-align:center;" class="av-error">
              <form action="" method="post" onsubmit="return" class="autoval-form">
                <input type="text" name="email1" av-message="invalid email" av-expression="/^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{3,5}$/"
                  placeholder="E-mail"><br><br>
                <input type="text" name="phone1" av-message="invalid phone" class="av-phone" placeholder="Phone"><br><br>
                <input type="submit" name="submit" value="Submit">
              </form>
            </div><br>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-container contact-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="section-container-spacer">
            <h2 class="text-center">Get in touch</h2>
            <p class="text-center">You can submit your Validation requirements here. We will try to implement all requests from you as most valuable.</p>
          </div>
          <div class="card-container">
            <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="" class="reveal-content autoval-form" onsubmit="return" method="post">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <input type="email" name="mail" class="form-control av-email" av-message="Invalid email format" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control av-required" av-message="Invalid Subject" id="subject" placeholder="Request Subject">
                    </div>
                    <div class="form-group">
                      <textarea name="content" class="form-control av-required" av-message="Invalid content" rows="3" placeholder="Request Content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit Request</button>
                  </div>
                  <div class="col-md-5">
                    <ul class="list-unstyled address-container">
                      <li>
                        Please make sure that you are giving a valid email address. We will send the request status to this email id.
                      </li>
                      <hr>
                      <li>
                        support@autoval.ml
                      </li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
          navbarFixedTopAnimation();
        });
  </script>

  <footer class="footer-container white-text-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3>autoVal</h3>
          <div class="row">
            <div class="col-xs-12 col-sm-7">
              <p><small>Copyright © 2017 OzonHub , All rights reserved.</small>
              </p>
            </div>
            <div class="col-xs-12 col-sm-5">
              <p class="text-right">
                <a href="https://facebook.com/ozonhub" class="social-round-icon white-round-icon fa-icon" title="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                <a href="https://twitter.com/ozonhub" class="social-round-icon white-round-icon fa-icon" title="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                <a href="https://www.linkedin.com/ozonhub" class="social-round-icon white-round-icon fa-icon" title="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
    document.addEventListener("DOMContentLoaded", function (event) {
          navActivePage();
          scrollRevelation('.reveal');
        });
  </script>
  <script type="text/javascript" src="js/homescript.js"></script>

</body>

</html>