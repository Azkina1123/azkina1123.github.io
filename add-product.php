<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/layout.css?v=<?= time(); ?>">
  <link rel="stylesheet" href="css/skins.css?v=<?= time(); ?>">


  <title> Add a Product | Tarvita Pastel </title>
</head>

<body>
  <?php include "header.php"; ?>

  <div class="main-wrapper">

    <?php include "sidebar.php"; ?>

    <div class="content-wrapper">

      <div class="main-content">

        <div class="content-container">
          <form action="index.php" method="POST" enctype="multipart/form-data" class="add-product">
            <caption>
              <h1> New Product </h1>
            </caption>
            <table cellspacing="20">
              <tr>
                <td colspan="4"> Add a product: </td>
              </tr>
  
              <!-- tanggal update -->
              <tr>
                <td> <label for="date"> Updated at </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td>
                  <input type="date" name="date" id="date" value="<?= date("Y-m-d"); ?>" readonly>
  
                </td>
  
              </tr>
  
              <!-- jenis produk -->
              <tr>
                <td> <label for="product"> Product </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td>
                  <select name="product">
                    <option value="painting"> Painting </option>
                    <option value="tool"> Tool </option>
                  </select>
                </td>
              </tr>
  
              <!-- nama produk -->
              <tr>
                <td> <label for="name"> Name </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td> <input type="text" name="name" placeholder="Name" id="name" required autocomplete="off"> </td>
  
              </tr>
  
              <!-- harga produk -->
              <tr>
                <td> <label for="number"> Price </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td> <input type="number" name="price" placeholder="Number" id="number" required min="0"> </td>
              </tr>
  
              <!-- deskripsi product -->
              <tr>
                <td> <label for="desc"> Description </label> </td>
                <td>
                  <center> : </center>
                </td>
                <td>
                  <textarea name="desc" id="desc" cols="15" rows="3" maxlength="50" required autocomplete="off"></textarea>
                </td>
              </tr>
  
              <tr>
                <td> <label for="image"> Upload Image </label> </td>
                <td> <center> :  </center> </td>
                <td>
                  <input type="file" name="image" id="image" accept="image/*">
                </td>
              </tr>
  
              <!-- tombol submit -->
              <tr>
                <td colspan="4">
                  <center> <input type="submit" name="submit"> </center>
                </td>
              </tr>
  
  
            </table>
          </form>

        </div>

      </div>

    </div>

  </div>

  <?php include "footer.php"; ?>

  <script src="jquery.js?v=<?= time(); ?>"></script>
  <script src="app.js?v=<?= time(); ?>"></script>

</body>

</html>