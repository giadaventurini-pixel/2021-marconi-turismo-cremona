let receiveData = function(data) {
    console.log(data);
    $("#username").text(data.username);
}

let init = function() {
  //$.getJSON("poi_list.json").done(receiveData);
  $.getJSON("index.php").done(receiveData);
}

$(document).ready(init);