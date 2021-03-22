
let receiveData = function(data) 
{
    console.log(data);
    $("#nome_poi").text(data.nome_poi);
		$("#foto_mappa").html(data.foto_mappa);
		$("#info_poi").html(data.info_poi);
		$("#foto_museo_fuori").html(data.foto_museo_fuori);
		$("#descrizione_poi").html(data.descrizione_poi);
		$("#foto_museo_dentro").html(data.foto_museo_dentro);
		$("#video_yt").html(data.video_yt);
}

let onFail = function(error)
{
	console.log("Errore nella lettura del json");
	console.log(error);
}

let appendList = function(data)
{
	console.log(data);

}
let init = function() 
{
  $.getJSON("data_poi").done(receiveData)
  .fail(onFail);
}

$(document).ready(init);