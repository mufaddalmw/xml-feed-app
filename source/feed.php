<?php
// define variables and set to empty values
$url = $imageURL = "";

// if request is made from index (form) page then execute
if (!$_SERVER["REQUEST_METHOD"] == "POST") {
  header("Location: index.php");
  exit;
}
// otherwise redirect them to index (form) page
else {
  // trim down special character from string
  $url = test_input($_POST["url"]);
  // fetch xml feed
  $xml=simplexml_load_file($url) or die("Error: Cannot create object");


?>
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
  <div class="row column small-12 medium-10 large-9">
    <div class="list-view">
      <div class="row">
<?php
foreach($xml->children() as $product) {
    // echo $products->productID . ", ";
    // echo $products->name . ", ";
    // echo $products->description . ", ";
    // echo $products->price . ", ";
    // echo $products->category . ", ";
    // echo $products->productURL . ", ";
    $imageURL = $product->imageURL;

 ?>
        <div class="column column-block">
          <div class="list-view__col list-view__image">
      			<div class="list-view__img-bucket">
        			<a href="https://uae.souq.com/ae-en/apple-macbook-laptop-intel-core-m-1-1-ghz-dual-core-12-inch-256gb-8gb-gold-early-2015-mk4m2-8609694/i/">
        				<img src="<?php echo $imageURL; ?>">
        			</a>
        		</div>
        	</div>
        </div>
        <?php
      }

      }
      // end

      // function for removing special character from string
      function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
      }
         ?>
      </div>

    </div>
  </div>
  <script src="./assets/js/bundle.js"></script>
</body>
</html>
