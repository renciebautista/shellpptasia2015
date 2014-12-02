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
		}	
	});

	$('select#with_departure').on("change",function(){
		if(this.value == 1){
			$('.departure').show();
		}else{
			$('.departure').hide();
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
				$.each(data, function(i, text) {
					$('<option />', {value: i, text: text}).appendTo($('select#room_type')); 
				});
				if(data.length == 0){
					$('select#room_type').attr('disabled', true);
					$('select#room_type').empty();
					$('#rate').val('');
				}else{
					$('select#room_type').removeAttr('disabled');	
				}
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
					minlength: 2
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
});