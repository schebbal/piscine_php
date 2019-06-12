function showCateg(categ) {
  print(catalog);
  var x = document.getElementsByClassName("article");
  var i;
  for (i = 0; i < x.length; i++) {
    y = x[i].getAttribute("categ");
    if (categ != 'all') {
      y = y.split(" ");
      x[i].style.display = "none";
      for (j = 0; j < y.length; j++) {
        if (y[j] == categ) {
          x[i].style.display = "block";
        }
      }
    }
    else {
      x[i].style.display = "block";
    }
  }
}
