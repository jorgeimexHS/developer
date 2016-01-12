function save(){
	var nom = $('#nom').val();
	var ape = $('#ape').val();
	var eda = $('#eda').val();
	var ema = $('#ema').val();
	var params = [nom,ape ,eda ,ema];
	$.ajax({
		url: 'tester/create',
        type: 'POST',
        data: {'params':params},
        dataType: 'json',
        
        success: function (report) {
        	console.log(report);
        }
	});
	
}