$(document).ready(function () {

	$(document).on('click', '#breath-map path', function () {
		const parent = $(this).parent();
		const className = $(parent).attr('class');
		const target = $(parent).attr('data-target');
		const completed = $(parent).attr('data-completed');
		const name = $(parent).attr('data-name');
		const percent = $(parent).attr('data-percent');
		const id = $(parent).attr('data-id');
		const valuekey = parseInt($(parent).attr('data-valuekey'), 10);
		const url = '/a/img/provinces/' + id + '.svg'
		$('#join').attr('data-selected', id)
		$('#province-detail .turkey').html(name)
		$('#province-detail .target').html(target)
		$('#province-detail .completed').html(completed)
		$('#province-detail .percent strong').html(percent)
		$('#province-detail .target').html(target)
		$('#province-detail figure').attr('class', className);
		$('#province-detail figure').html('')
		$('#province-detail figure').prepend('<img src="' + url + '" />')
		var $img = jQuery('#detail figure img');
		$('#join').show()

		jQuery.get(url, function (data) {
			var $svg = jQuery(data).find('svg');
			$svg = $svg.removeAttr('xmlns:a');
			$img.replaceWith($svg);
			if (valuekey === 100) {
				$('#province-detail figure').append('<img src="/a/img/tree.svg" class="tree" />')
				$('#join').hide()
			}
		}, 'xml');
		if ($('.initial').length) {
			$('.initial').removeClass('initial')
			setTimeout(() => {
				$('#top-5').show()
				$('#province-detail').show()
				$('#form').hide()
				$('#detail').show()
			}, 300);
		} else {
			$('#province-detail').show()
			$('#form').hide()
			$('#detail').show()
		}
	});


	$.get('/j', function (data, textStatus, jqXHR) {
		const province = data.places
		const top5 = data.top
		const arr = []
		$.each(province, function (key, value) {
			$('[data-id=' + key + ']').attr('class', 'percent-' + value.percent);
			$('[data-id=' + key + ']').attr('data-target', value.target)
			$('[data-id=' + key + ']').attr('data-completed', value.completed)
			$('[data-id=' + key + ']').attr('data-percent', '%' + value.percent)
			$('[data-id=' + key + ']').attr('data-valuekey', value.percent)
			$('[data-id=' + key + ']').attr('data-name', value.name)
			if (parseInt(key, 10) !== 100) {
				arr.push({
					t: value.name,
					v: key,
					percent: value.percent
				})
			}
		});

		function turkcesiralama(a, b) {
			var atitle = a.t;
			var btitle = b.t;
			var alfabe = 'AaBbCcÇçDdEeFfGgĞğHhIıİiJjKkLlMmNnOoÖöPpQqRrSsŞşTtUuÜüVvWwXxYyZz0123456789';
			if (atitle.length === 0 || btitle.length === 0) {
				return atitle.length - btitle.length;
			}
			for (var i = 0; i < atitle.length && i < btitle.length; i++) {
				var ai = alfabe.indexOf(atitle[i]);
				var bi = alfabe.indexOf(btitle[i]);
				if (ai !== bi) {
					return ai - bi;
				}
			}
		}
		arr.sort(turkcesiralama);
		$.each(arr, function (key, i) {
			if (i.percent !== 100) {
				$('#province').append('<option value="' + i.v + '">' + i.t + '</option>')
			} else {
				$('#province').append('<option value="' + i.v + '" disabled>' + i.t + '</option>')
			}
		});
		$('#target').html(province[100].target)
		$('#completed').html(province[100].completed)
		$('#turkeypercent').html('%' + province[100].percent)
		if (province[100].percent !== 100) {
			$('#startColor').attr('offset', province[100].percent - 25 + '%')
			$('#endColor').attr('offset', province[100].percent + 5 + '%')
		} else {
			$('#startColor').attr('offset', '100%')
			$('#endColor').attr('offset', '100%')
		}

		$.each(top5, function (key, value) {
			$('#top-5 ul').append(
				'<li><span class="name">' + province[value].name + '</span>:<div class="progress-holder"><div class="progress"><div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: ' + province[value].percent + '%" aria-valuenow="' + province[value].percent + '" aria-valuemin="0" aria-valuemax="100"></div></div><span>%' + province[value].percent + '</span></div></li>'
			)
		})
	});

	$(document).on('click', '.joinCTA', function () {
		if ($('.initial').length) {
			$('.initial').removeClass('initial')
			setTimeout(() => {
				$('#top-5').show()
				$('#province-detail').hide()
				$('#form').show()
				$('#detail').show()
			}, 300);
		} else {
			$('#province-detail').hide()
			$('#form').show()
			$('#detail').show()
		}
		return false
	});

	$(document).on('click', '#join', function () {
		$('#form').show()
		$('#province-detail').hide()
		$('#province option[value=' + $(this).attr('data-selected') + ']').attr('selected', 'selected');
		return false
	});

	$(document).on('click', '#complete', function () {
		$('#form').hide()
		$('#province-detail').show()
		$('#form form').show()
		$('#form form input').val('')
		$('#form .message').hide()
		grecaptcha.reset();
		return false
	});

	$.getScript('/a/js/tr.js');
	jQuery.validator.addMethod("emailordomain", function(value, element) {
		return this.optional(element) || /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(value) || /[-a-zA-Z0-9@:%_\+.~#?&//=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&//=]*)?/.test(value);
	  }, "Lütfen geçerli bir e-posta adresi giriniz.");
	  
	$('#form form').validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true,
				emailordomain: true
			},
			province: {
				required: true,
				number: true
			}
		},
		submitHandler: function () {
			var $form = $('#form form');

			function getFormData($form) {
				var unindexed_array = $form.serializeArray();
				var indexed_array = {};

				$.map(unindexed_array, function (n, i) {
					indexed_array[n['name']] = n['value'];
				});
				return indexed_array;
			}
			var obj = getFormData($form);
			$.ajax({
				type: 'POST',
				contentType: 'application/json',
				dataType: 'json',
				url: '/p',
				data: JSON.stringify(obj),
				success: function (data) {
					JSON.stringify(data)
					if(data.result==true)
					{
						// alert('oldu.');
			/* BURAYI SİLİYORUZ SADECE MOCKUP İÇİN */
			const res = {
				'name': data.name,
				'area': data.area,
				'placeToAdd': data.province
			}
			const lastCompleted = $('[data-id=' + res.placeToAdd + ']').attr('data-completed')
			const curCompleted = parseInt(lastCompleted, 10) + 5
			$('[data-id=' + res.placeToAdd + ']').attr('data-completed', curCompleted)
			$('#province-detail .completed').html(curCompleted)
			$('#form .message .name').html(res.name)
			$('#form .message .area').html(res.area)
			$('#form form').hide()
			$('#form .message').show()
			/* BURAYI SİLİYORUZ SADECE MOCKUP İÇİN */
					}
					else if(data.result==false)
					{
						$('#form .message .area').html(data.message)
						// alert('olmadı: ' + data.message);
					}
				}
			})


			return false;

		}
	});
})
