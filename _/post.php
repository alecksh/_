<!DOCTYPE html>
<html>
  <head>
    <title>Expat Exchange</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,400italic' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/mystyles.css" rel="stylesheet" media="screen">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myscript.js"></script>

    
  </head>
  <body id="post">
    <section class="container">
      <div class="content row">
        <section class="main col col-lg-12">
          <?php include "components/php/header.php"; ?>
          <div class="row">
            <div class="col-lg-10 col-lg-offset-1 post-main">
              <div class="row">
                <section class="col-lg-5">
                  <div class="form-group">
                    <label class="sr-only" for="postTitle">Post title</label>
                    <input type="text" class="form-control" id="postTitle" placeholder="Post title"></input>
                  </div>
                </section>
                
              <section class="col-lg-3">
                <div class="input-group">
                  <span class="input-group-addon">₩</span>
                  <input type="text" class="form-control" id="postPrice" placeholder="Price"></input>
                </div>
              </section>
              </div>
              <div class="form-group">
                <label for="postDescription">Description</label>
                <textarea class="form-control" rows="10"></textarea>
              </div>
                <form role="form">
                  <section class="row">
                    <div class="form-group col-lg-4">
                      <label for="postEmail">Reply to</label>
                      <input type="email" class="form-control" id="postEmail" placeholder="Enter your email">
                    </div>
                  </section>
                  <section class="row">
                    <div class="form-group col-lg-4">
                      <input type="email" class="form-control" id="postEmail" placeholder="Enter your email again">
                    </div>
                  </section>
                </form>
                <a class="btn btn-default btn-sm" href="picsloc.php" role="button">Pics and Location ></a>
            </div> <!-- post-main -->
          </div>
        </section> <!-- main -->
      </div> <!-- content -->
    </section> <!-- container -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    
  </body>
</html>