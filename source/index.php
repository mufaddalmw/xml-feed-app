<?php
//include header
include('includes/header.php');
?>
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

<?php
// include footer
include('includes/footer.php')
?>
