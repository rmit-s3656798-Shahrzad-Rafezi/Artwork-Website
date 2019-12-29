function doMenu() {
    var menu = document.getElementById("menu");
    var optionValue = menu.value;
    var url = "gallery.php";
    if (optionValue != "Any") {
        url += "?category=" + optionValue;
    }

    location.href = url;
}
