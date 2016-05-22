var geocoder;
var map;
var eventos;


function abrir_info (evento) {
	$("#info_placeholder").css("display","none");
	$("#evento_info").css("display","block");
	$("#nome_evento").text( evento.nome );
	$("#data_evento").text( evento.data );
	$("#hr_ini_evento").text( evento.hr_inicio );
	$("#hr_fim_evento").text( evento.hr_fim );
	$("#local_evento").text( evento.local );
	$("#tipo_evento").text( evento.tipo_evento );
	$("#descricao_evento").text( evento.descricao );
}

function addmarker (evento) {
	
	var latlng = new google.maps.LatLng(evento.lat , evento.lng );
		var marker = new google.maps.Marker({
			map: map,
		});
		marker.setPosition(latlng);
		
		marker.evento_info = evento;
		
		var infowindow = new google.maps.InfoWindow({
			content: 'Data: ' + evento.data +
			'<br>Inicio: ' + evento.hr_inicio
		});
		infowindow.open(map,marker);
		
		marker.addListener('click',function() { 
			abrir_info(marker.evento_info);
		});
	
}

function initialize() {
	
	
    var latlng = new google.maps.LatLng(eventos[0].lat , eventos[0].lng );
    var options = {
        zoom: 5,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("mapa"), options);

    geocoder = new google.maps.Geocoder();
	
	var i;
	for(i = 0;i<eventos.length;i++) {
		addmarker(eventos[i] );
	}
	
}

function get_eventos() {
	
	var xmlhttp = new XMLHttpRequest();
	var url = "get_eventos.php";

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			eventos = JSON.parse(xmlhttp.responseText);
			initialize();
		}
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
	
}


$(document).ready(function () {

	
	get_eventos();

    function carregarNoMapa(endereco) {
        geocoder.geocode({ 'address': endereco + ', Brasil', 'region': 'BR' }, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();

                    $('#txtEndereco').val(results[0].formatted_address);

                    var location = new google.maps.LatLng(latitude, longitude);
                    map.setCenter(location);
                    map.setZoom(16);
                }
            }
        })
    }

    $("#btnEndereco").click(function () {
        if ($(this).val() != "")
            carregarNoMapa($("#txtEndereco").val());
    })

    $("#txtEndereco").blur(function () {
        if ($(this).val() != "")
            carregarNoMapa($(this).val());
    })

    $("#txtEndereco").autocomplete({
        source: function (request, response) {
            geocoder.geocode({ 'address': request.term + ', Brasil', 'region': 'BR' }, function (results, status) {
                response($.map(results, function (item) {
                    return {
                        label: item.formatted_address,
                        value: item.formatted_address,
                        latitude: item.geometry.location.lat(),
                        longitude: item.geometry.location.lng()
                    }
                }));
            })
        },
        select: function (event, ui) {
            $("#txtLatitude").val(ui.item.latitude);
            $("#txtLongitude").val(ui.item.longitude);
            var location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
            map.setCenter(location);
            map.setZoom(16);
        }
    });
});