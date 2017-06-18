<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>XML Feed App</title>
<link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="./assets/css/app.css">
</head>
<body>
  <div class="row column small-5">
    <form class="" id="productFeedForm" action="<?php echo htmlspecialchars('feed.php');?>" method="post" data-abide novalidate>
      <h3>Submit product feed url</h3>
      <div data-abide-error class="alert callout" style="display: none;">
        <p>There are some errors in your form.</p>
      </div>
      <label>
        Feed URL
        <input type="url" name="url" value="" required pattern="url">
      </label>
      <button type="submit" name="button" class="button button-primary">Submit</button>
    </form>

  </div>
  <script src="./assets/js/bundle.js"></script>
</body>
</html>
