let receiveData = function(data) 
{
    console.log(data);
    $("#username").text(data.username);
		$("#poi_left_number").text(data.poi_left_number);
		$("#subscription").text(data.subscription);
		$("#poi_list").html(data.poi_list);
}

let appendList = function(data)
{
	console.log(data);

}
let init = function() 
{
  $.getJSON("index.php").done(receiveData);
}

$(document).ready(init);