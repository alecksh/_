<!DOCTYPE html>
<html>
  <head>
    <title>Expat Exchange</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,400italic' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="picsloc">
    <section class="container">
      <div class="content row">
        <section class="main col col-lg-12">
        <?php include "components/php/header.php"; ?>
          <div class="row">
           <h3 class="loc-heading">Choose your location</h3>
            <div class="col-lg-10 col-lg-offset-1 picsloc-main">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#line1" data-toggle="tab">Subway Line 1</a></li>
                <li><a href="#line2" data-toggle="tab">Subway Line 2</a></li>
                <li><a href="#districts" data-toggle="tab">Districts</a></li>
                <li><a href="#bases" data-toggle="tab">Military Bases</a></li>
              </ul> <!-- nav-tabs -->
              <div class="tab-content tab-content-style">
                <?php include "locations.php"; ?>
              </div>  <!-- tab-conten -->
            </div> <!-- picsloc-main -->
          </div>
          <div class="row">
          <h3 class="loc-heading">Choose your pictures</h3>
            <div class="col-lg-10 col-lg-offset-1 pics-upload">
              <div class="form-group">
                <label for="postPic">Upload Pictures</label>
                <input type="file" id="postPic">
                <p class="help-block">You can choose up to four pictures. The first picture will be used as a 
                                      feature for your post.</p>

              </div>
            </div>
            </div>
          </div>
        </section> <!-- main -->
      </div> <!-- content -->
    </section> <!-- container -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/myscript.js"></script>
  </body>
</html>