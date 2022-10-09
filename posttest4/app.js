
function sidebarActive() {
  elements = [
    document.getElementsByClassName("sidebar-wrapper")[0],
    document.getElementsByClassName("main-content")[0],
    document.getElementsByClassName("content-wrapper")[0]
  ];

  for (i=0; i<elements.length; i++) {
    elements[i].classList.toggle("sidebar-active");
  }
}

function darkModeActive() {
  var body = document.getElementsByTagName("body")[0];
  
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    
  }

}

function notAvailableAlert() {
  alert("Coming Soon!\nPage not available yet.");
}

function openPopUp(img, name, price) {
  $(".pop-up").fadeIn(500);
  $(".pop-up").css("display", "flex");

  $(".pop-up-img").css("background", "url('img/" + img + "')")
  $(".pop-up-img").css("background-position", "center")
  $(".pop-up-img").css("background-size", "cover")

  $(".pop-up-name").text($(".pop-up-name").text().replace("product-name", name));
  $(".pop-up-price").text($(".pop-up-price").text().replace("product-price", price));

  $(".quit-pop-up, .cancel-co").click(
    function () {
      $(".pop-up").fadeOut(500);
    }
  );
}


