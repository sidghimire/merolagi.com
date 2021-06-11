$(document).ready(function () {
	var extType = ['jpeg', 'jpg', 'png'];
	var selection = document.getElementById('coverPhoto');

	$('#coverPhoto').bind('change', function () {
		$('.l-file-error').remove();
		$('.l-file-success').remove();
		var ext = this.files[0].name.split('.').pop();
		if (extType.includes(ext) == false) {
			$('.l-file-error').remove();
			$('.l-file-success').remove();
			$('#coverPhoto').val('');
			

			alertify.error('We only support file with extension: .jpeg, .jpg, .png');
		} else {
			$(document).remove('.l-file-error');
			$(document).remove('.l-file-success');
		}
	});
});
