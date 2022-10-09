<?php

require "functions.php";

if (isset($_POST["name"])) {

  if (add_to_array($_POST, $_FILES)) {
    echo "<script> alert('New product added successfully!'); </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/layout.css?v=<?= time(); ?>">
  <link rel="stylesheet" href="css/skins.css?v=<?= time(); ?>">

  <link rel="icon" href="img/logo.png">

  <title> Home | Tarvita Pastel </title>
</head>

<body>

  <?php include "header.php"; ?>

  <div class="main-wrapper">

    <?php include "sidebar.php"; ?>

    <div class="content-wrapper">
      <div class="intro">
        <div class="container">

          <div class="intro-img" id="intro-img"></div>

          <div class="intro-desc">
            <h1> Welcome to Tarvita Pastel! </h1>
            <p>
              <span class="description">
                Provide your needs for the beauty of art. <br>
              </span>

              <span class="quotes">
                Love of beauty is taste.<br>
                The creation of beauty is art. <br>

                <i> - Ralph Waldo Emerson </i>
            </p>
          </div>

        </div>
      </div>

      <div class="main-content">

        <div class="content-container">
          <section>
            <div class="title">
              <h1> Paintings </h1>
              <p> Decorate your room with our pantings. </p>
            </div>

            <div class="products container">

              <?php foreach ($paintings as $painting) { ?>
                <div class="product <?= $painting[0]; ?> " onclick="openPopUp('products/<?= $painting[1]; ?>', '<?= $painting[2]; ?> ', '<?= $painting[4]; ?>')" onmouseover="selectProduct()">
                  <div class="product-img" style="background-image: url('img/products/<?= $painting[1] ?>')"></div>
                  <div class="product-desc">
                    <h3> <?= $painting[2]; ?> </h3>
                    <p>
                      <span class="description"> <?= $painting[3]; ?> </span> <br>
                      <span class="price"> <?= $painting[4]; ?> </span>
                    </p>
                  </div>
                </div>
              <?php } ?>

              <div class="product content-load" onclick="notAvailableAlert()">
                <img src="img/load.png" alt="load">
                <p> More </p>
              </div>

            </div>
          </section>

          <section>

            <div class="title">
              <h1> Tools </h1>
              <p> Create your own painting with our stuffs. </p>
            </div>

            <div class="products container">

              <?php foreach ($tools as $tool) { ?>
                <div class="product <?= $tool[0]; ?> " onclick="openPopUp('products/<?= $tool[1]; ?>', '<?= $tool[2]; ?> ', '<?= $tool[4]; ?>')">
                  <div class="product-img" style="background-image: url('img/products/<?= $tool[1] ?>')"></div>
                  <div class="product-desc">
                    <h3> <?= $tool[2]; ?> </h3>
                    <p>
                      <span class="description"> <?= $tool[3]; ?> </span> <br>
                      <span class="price"> <?= $tool[4]; ?> </span>
                    </p>
                  </div>
                </div>
              <?php } ?>

              <div class="product content-load" onclick="notAvailableAlert()">
                <img src="img/load.png" alt="load">
                <p> More </p>
              </div>

            </div>

          </section>
        </div>

      </div>

      <div class="pop-up">
        <img src='img/x-1.png' class="quit-pop-up">
        <div class="pop-up-img"></div>

        <div class="pop-up-content">
          <div class="content">
            <h1 class="pop-up-name"> product-name </h1>
            <h2 class="pop-up-price"> product-price </h2>
          </div>

          <div class="pop-up-btn">
            <button class="check-out" onclick="notAvailableAlert()"> Check Out </button>
            <button class="cancel-co"> Cancel </button>
          </div>
        </div>

      </div>


    </div>

  </div>
  <?php include "footer.php"; ?>

  <script src="jquery.js?v=<?= time(); ?>"></script>
  <script src="app.js?v=<?= time(); ?>"></script>


</body>

</html>