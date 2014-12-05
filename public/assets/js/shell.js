$(document).ready(function(){
	$('.hotel,.arrive,.departure').hide();
	
	function resetHotel(){
		$('.hotel input:checkbox').removeAttr('checked');
		$('select#hotel').val('default');
		$('select#room_type').empty();
		$('select#room_type').attr('disabled', true);
		$('#rate').val('');
		$('#billing').val('');
		$('.hotel').hide();
	}

	$('select#withhotel').on("change",function(){
		if(this.value == 1){
			$('.hotel').show();
		}else{
			resetHotel();
		}	
	});

	$('select#with_arrival').on("change",function(){
		if(this.value == 1){
			$('.arrive').show();
		}else{
			$('.arrive').hide();
			$('#arrival_carrier').val('');
			$('#arrival_no').val('');
			$('#arrival_date').val('');
			$('#arrival_time').val('');
			$('#arrival_port').val('');
		}	
	});

	$('select#with_departure').on("change",function(){
		if(this.value == 1){
			$('.departure').show();
		}else{
			$('.departure').hide();
			$('#departure_carrier').val('');
			$('#departure_no').val('');
			$('#departure_date').val('');
			$('#departure_time').val('');
			$('#departure_port').val('');
			console.log(1);
		}	
	});

	$('select#room_type').attr('disabled', true);

	$('select#hotel').on("change",function(){
		$.ajax({
			type: "POST",
			data: {hotel_id: this.value},
			url: "../api/rooms",
			success: function(data){
				$('select#room_type').empty();
				$.each(data, function(i, object) {
					$('<option />', {value: object.id, text: object.room_type}).appendTo($('select#room_type')); 
				});
				if(data.length == 0){
					$('select#room_type').attr('disabled', true);
					$('select#room_type').empty();
					
				}else{
					$('select#room_type').removeAttr('disabled');	
				}
				$('#rate').val('');
		   }
		});	
	});

	$('select#room_type').on("change",function(){
		$.ajax({
			type: "POST",
			data: {room_type_id: this.value},
			url: "../api/roomrate",
			success: function(data){
				$('#rate').val(data.room_rate);
		   }
		});	
	});

	$("#register").validate({
		rules: {
			prefix: { is_natural_no_zero: true },
			first_name: "required",
			last_name: "required",
			address: "required",
			email: { required: true,
				email: true },
			company: 'required',
			country:{ is_natural_no_zero: true },
			'night[]': {
					required: {
						depends: function () {
							return $('#register select[name="withhotel"]').val() === '1';
						}
					},
					minlength: 1
				},
			hotel: {
				is_natural_no_zero: {
					depends: function () {
						return $('#register select[name="withhotel"]').val() === '1';
					}
				}
			},
			room_type: {
				is_natural_no_zero: {
					depends: function () {
						return $('#register select[name="hotel"]').val() > '0';
					}
				}
			},
			arrival_carrier: {
				required: {
					depends: function () {
						return $('#register select[name="with_arrival"]').val() === '1';
					}
				}
			},
			arrival_no: {
				required: {
					depends: function () {
						return $('#register select[name="with_arrival"]').val() === '1';
					}
				}
			},
			arrival_date: {
				required: {
					depends: function () {
						return $('#register select[name="with_arrival"]').val() === '1';
					}
				}
			},
			arrival_time: {
				required: {
					depends: function () {
						return $('#register select[name="with_arrival"]').val() === '1';
					}
				}
			},
			arrival_port: {
				required: {
					depends: function () {
						return $('#register select[name="with_arrival"]').val() === '1';
					}
				}
			},
			departure_carrier: {
				required: {
					depends: function () {
						return $('#register select[name="with_departure"]').val() === '1';
					}
				}
			},
			departure_no: {
				required: {
					depends: function () {
						return $('#register select[name="with_departure"]').val() === '1';
					}
				}
			},
			departure_date: {
				required: {
					depends: function () {
						return $('#register select[name="with_departure"]').val() === '1';
					}
				}
			},
			departure_time: {
				required: {
					depends: function () {
						return $('#register select[name="with_departure"]').val() === '1';
					}
				}
			},
			departure_port: {
				required: {
					depends: function () {
						return $('#register select[name="with_departure"]').val() === '1';
					}
				}
			},
		},
		messages: {
			
		},
		errorPlacement: function(error, element) {
			if(element.attr('id') == 'night'){
				error.insertAfter($('label[for='+element.attr('id')+']'));
			}else{
				error.insertAfter(element.siblings("label"));
			}   
			
		}
	});
	$("#arrival_date").mask("99/99/9999");
	$('#arrival_date').datetimepicker({
		pickTime: false
	});
	
	$("#departure_date").mask("99/99/9999");
	$('#departure_date').datetimepicker({
		pickTime: false
	});
	

	$('#arrival_time').datetimepicker({
		pickDate: false
	});
	$('#departure_time').datetimepicker({
		pickDate: false
	});
	$.mask.definitions['a']='[APap]';
	$.mask.definitions['m']='[mM]';
	$("#arrival_time").mask("99:99 am");
	$("#departure_time").mask("99:99 am");


	function updateHotel(){
		$('.hotel').show();
		$.ajax({
			type: "GET",
			url: "../api/rooms",
			success: function(data){
				if(data.error == false){
					$('select#room_type').empty();
					$.each(data.rooms, function(i, object) {
						if( object.id ==  data.selected){
							$("select#room_type").append('<option selected ="selected" value=' + object.id + '>' + object.room_type + '</option>');
						}else{
							$('<option />', {value: object.id, text: object.room_type}).appendTo($('select#room_type')); 
						}
						
					});
					if(data.length == 0){
						$('select#room_type').attr('disabled', true);
						$('select#room_type').empty();
						
					}else{
						$('select#room_type').removeAttr('disabled');	
					}
					$('#rate').val(data.rate);
				}else{

				}
				
		   }
		});	
	}


	function updateArrival(){
		$('.arrive').show();
	}


	if($('select#withhotel').val() == 1){
		updateHotel();
	}
	if($('select#with_arrival').val() == 1){
		updateArrival()
	}
	if($('select#with_departure').val() == 1){
		$('.departure').show();
	}


});