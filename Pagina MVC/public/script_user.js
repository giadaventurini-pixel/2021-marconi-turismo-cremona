let receiveData = function (jsonData) 
{
  
  console.log(jsonData);
    $("#username").text(jsonData.username);
		$("#poi_left_number").text(jsonData.poi_left_number);
		$("#subscription").text(jsonData.subscription);
		$("#poi_list").html(jsonData.poi_list);
}

let onFail = function(error) 
{
  console.log("errore nella lettura del file json");
  console.log(error);
}

let init = function() 
{
  $.getJSON('data_user')
  .done(receiveData)
  .fail(onFail);
}

$(document).ready(init);