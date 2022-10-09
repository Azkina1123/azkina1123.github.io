<?php

$paintings = [
  ["painting-1","painting-1.jpg", "Hirondelle Amour Painting", "Hand-painted canvas reproduction with quality oil painting.",  "IDR 6.019.905"],
  ["painting-2","painting-2.jpg", "Koi Alpha Tree Painting", "Koi fish painting with LED FLS and size 50x100 cm.", "IDR 2.190.000"],
  ["painting-3","painting-3.jpg", "Seascape Painting", "Large art hand-painted 4pcs/set oil painting on canvas unframed.", "IDR 690.909"],
  ["painting-4","painting-4.jpg", "Abstract City Painting", "Landscape painting with modern canvas for living room decoration.", "IDR 4.976.784"],
  ["painting-5","painting-5.jpg", "Girl Full Round Drill Rhinestone", "The most popular painting which can perfectly decorate your room. ", "IDR 108.450"]
];

$tools = [
  ["tool-1", "tool-1.jpeg", "Paint Brushes", "Set professional brushes for acrylic, watercolor, and oil painting.", "IDR 25.500"],
  ["tool-2", "tool-2.jpg", "Painting Canvas", "High quality painting canvas with medium texture cotton duck fabric.", "IDR 38.402"],
  ["tool-3", "tool-3.jpg", "Watercolor Paint", "Paint with the finest materials, smooth application, and true color.", "IDR 29.450"],
  ["tool-4", "tool-4.jfif", "Plastic Pallete Painting", "Brand new and high quality pallete. Suitable for all water based media.", "IDR 59.990"],
  ["tool-5", "tool-5.jpg", "Craft Painting Tools Kits", "The tools set is used for decorating and painting DIY model spraying.", "IDR 273.000"]
];

function new_class($product) {
  global $paintings, $tools;

  if ($product == "painting") {
    return "painting-" . count($paintings) + 1;
  } else if ($product == "tool") {
    return "tool-" . count($tools) + 1;
  }

  return false;
}

function name_up_file($product, $arr_files) {
  $error = $_FILES["image"]["error"];   
  
  // kalau tidak upload, tidak apa
  if ($error === 4) {
    return "new-product.png";
  }
  
  $name  = $arr_files["image"]["name"];    // nama file
  $type  = $arr_files["image"]["type"];    // jenis file
  $temp  = $arr_files["image"]["tmp_name"];// direktory file
  $size  = $arr_files["image"]["size"];    // ukuran file
  
  // in_array(elemen, array) = apakah elemen ada dalam array, return bool
  if ($size > 100000) { // 1 MB   
    echo "<script> alert('Add product failed! (max size: 100KB)') </script>";

    return false; // keluar dari fungsi
  }
  
  $possibility = explode(".", $name);
  $format = end($possibility);
  $name = new_class($product) .".$format";

  return $name;

}

function add_to_array($arr_post, $arr_files) {
  global $paintings, $tools;

  $product = $arr_post["product"];
  $new_price = "IDR ". $arr_post["price"];
  $name_file = name_up_file($product, $arr_files);
  
  // jika ada gambar di up, tapi tidak berhasil
  // gagal tambahkan
  if ($name_file === false) {
    return false;
  } 

  // pindahkan file yg di up
  move_uploaded_file($arr_files["image"]["tmp_name"], "img/products/$name_file");

  // berhasil tambahkan
  if ($product == "painting") {
    array_push(
      $paintings,
      [new_class($product),
        $name_file,
        $arr_post["name"],
        $arr_post["desc"],
        $new_price]
    );
    return true;
  } else if ($product == "tool") {
    array_push(
      $tools,
      [new_class($product),
        $name_file,
        $arr_post["name"],
        $arr_post["desc"],
        $new_price]
    );

    return true;    
  }

  return false;
}

?>