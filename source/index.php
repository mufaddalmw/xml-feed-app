<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>XML Feed App</title>
<link rel="icon" href="./assets/img/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="./assets/css/app.css">
</head>
<body>
  <div data-sticky-container>
    <div class="sticky sticky-header" data-sticky data-margin-top="0">
      <!-- Header -->
      <header class="site-header">
        <div class="row column large-8">
          <a href="index.php" class="site-header__logo"><img src="assets/img/centralpoint-logo.png" alt="centralpoint-logo"></a>
        </div>
      </header>
    </div>
  </div>
      <!-- Feed -->
      <div class="row column small-centered large-4 medium-6 small-12">
        <div class="feed-block">
          <form class="" id="productFeedForm" action="<?php echo htmlspecialchars('products.php');?>" method="post" data-abide novalidate>
            <h3>Products XML</h3>
            <div data-abide-error class="alert callout" style="display: none;">
              <p>There are some errors in your form.</p>
            </div>
            <label>
              URL
              <input type="url" name="url" required pattern="url" placeholder="Enter only xml url" value="http://pf.tradetracker.net/?aid=1&type=xml&encoding=utf-8&fid=251713&categoryType=2&additionalType=2&limit=10">
            </label>
            <button type="submit" name="button" class="button">Show Products</button>
          </form>
        </div>
      </div>



  <script src="./assets/js/bundle.js"></script>
</body>
</html>
