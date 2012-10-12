$(function() {
	window.deviceid = $("#currentDevice").val(); // makes deviceid a global variable
	$(".temperaturecheckclass").change(function() {
		var checkedSensors = [];
		$(".temperaturecheckclass").each(function() {
			if($(this).is(":checked")) {
				checkedSensors.push($(this).attr('alt'));
			}
		});
		$.ajax({
			type:"POST",
			url:"sensorrequests.php",
			data:"deviceid=" + deviceid + "&sensors="+checkedSensors.join(","),
			success: function(sensorXML) {
				alert(sensorXML);
				//$(sensorXML).find('sensor').each(function() { //find each "sensor" tag in xml and loop through each one...
					
				//});
			}
		});
	});
});

