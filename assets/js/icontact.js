function init() {
	console.log("called init");
	bindSubscribeButton();
}

function bindSubscribeButton() {

	$('#subscribe-button').on('click', function() {
		console.log("Clicked subscribe-button");
		var buttonId = $(this).attr('id');
		$('#' + buttonId).button('loading');
		
		var email = $('#subscribeEmail').val();
		if ( email == "" ) {
			$('#subscribeEmail').focus();
			alert("Don't forget your email address.");
			$(this).button('reset');
			return false;
		}
		
		var url = 'http://localhost/development/icontact-service/icontact-service.php';
// http://www.icontact.com/developerportal/documentation/contacts/
// https://github.com/icontact/icontact-api-php/blob/master/lib/iContactApi.php	
		var posting = $.post(
			url,
			{
				'action' : 		'signup',
				'email' :		email,
				'button-id' :	buttonId
			}
		);
		posting.done(function( data ) {
			console.log("Return from iContact...");
			console.log(data);
			$('#subscribeEmail').val("");
			$('#' + buttonId).button('reset');
		});
	
	
		return true;
	});
}
