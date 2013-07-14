// JavaScript Document
// Grub All Form Actions
		$(document).ready(function () {
			$('#reg').submit(function() {
			$.post('./php/register_new_user.php', $('#reg').serialize(), function (data) {
				$('#results').html(data);
			});
			return false;
			});
			
		});
			
			
