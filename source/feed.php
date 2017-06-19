<?php
// define variables and set to empty values
$xmlurl = $imageURL = $productURL = $name = $description = $category = $price = $category = "";

// if request is made from index (form) page then execute
if (!$_SERVER["REQUEST_METHOD"] == "POST") {
  header("Location: index.php");
  exit;
}
// otherwise redirect them to index (form) page
else {
  // trim down special character from string
  $xmlurl = test_input($_POST["url"]);
  // fetch xml feed
  $xml=simplexml_load_file($xmlurl) or die("Error: Cannot create object");


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
    $productID = $product->productID;
    $name = $product->name;
    $description = $product->description;
    $price = $product->price;
    $category = $product->category;
    $productURL = $product->productURL;
    $imageURL = $product->imageURL;

 ?>
        <div class="column column-block list-view__item">
          <div class="list-view__col list-view__image">
      			<div class="list-view__img-bucket">
        			<a href="<?php echo $productURL; ?>">
        				<img src="<?php echo $imageURL; ?>" alt="<?php echo $name; ?>" title="<?php echo $name; ?>">
        			</a>
        		</div>
        	</div>
          <div class="list-view__col list-view__info">
            <a href="<?php echo $productURL; ?>" title="<?php echo $name; ?>"><h1><?php echo $name; ?></h1> </a>
            <p><?php echo $description; ?></p>
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
