<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
  <?php include("includes/head-tag-contents.php");?>
  <style>
    .products {
      display: grid;
      justify-content: center;
      grid-auto-flow: row;
      gap: 16px;
      padding: 16px;
      grid-template-columns: repeat(4, max-content);
    }
    @media (max-width: 1200px) {
      .products {
        grid-template-columns: repeat(2, max-content);
      }
    }
    @media (max-width: 700px) {
      .products {
        grid-template-columns: repeat(1, max-content);
      }
    }
  </style>
</head>
<body>
  <header>
	<?php include("includes/navigation.php");?>
  </header>

  <main>
    <div class="products">
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
	  <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
	  <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
      <?php include("includes/product-card.php");?>
    </div>
  </main>

  <footer><?php include("includes/footer.php");?></footer>
</body>
</html>