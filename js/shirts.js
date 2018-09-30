var jpgcontainer = document.getElementById('jpg');
var files = {
  'jpg': 300
};

var files2 = {
  'png': 200
};

for (var jpgext in files) {
  for (var i = 0; i < files[jpgext]; i++) {
    var jpgsrc = "img/shirts/" + (i + 1) + "." + jpgext;
    var jpgimg = new Image();
    jpgimg.src = jpgsrc;
    jpgcontainer.appendChild(jpgimg);
  }
}