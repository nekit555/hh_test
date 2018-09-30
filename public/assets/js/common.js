
$(function() {

	$(".form").parsley({

	 errorClass: 'is-invalid text-danger',

	 successClass: 'is-valid', // Comment this option if you don't want the field to become green when valid. Recommended in Google material design to prevent too many hints for user experience. Only report when a field is wrong.

	 errorsWrapper: '<span class="form-text text-danger"></span>',

	 errorTemplate: '<span></span>',

	 trigger: 'change'

	});

});


$('.form').submit(function(e) {
	var form = $(this);
	Parsley.on('form:success', function() {

	  $.ajax({
	    type: form.attr('method'),
	    url: form.attr('action'),
	    data: form.serialize()
	  }).done(function() {
	    $('.alert').find('div').text('Комментарий успешно отправлен!');
	    $('.alert').addClass('alert-success');
	    $('.alert').show();
	    form.trigger("reset");
	  }).fail(function() {
	    $('.alert').find('div').text('Ошибка при отправке комментария');
	    $('.alert').addClass('alert-error');
	    $('.alert').show();
	  });

	});

  //отмена действия по умолчанию для кнопки submit
  e.preventDefault();
});

$('.alert').on('closed.bs.alert', function () {
  $(this).removeClass('alert-error');
  $(this).removeClass('alert-success');
})
