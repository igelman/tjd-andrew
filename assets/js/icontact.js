function init() {
	console.log("called init");
	bindSubscribeButton();
}

function bindSubscribeButton() {

	$('#subscribe-button').on('click', function() {
		console.log("Clicked subscribe-button");
		$(this).button('loading');
		
		var email = $('#subscribeEmail').val();
		if ( email == "" ) {
			$('#subscribeEmail').focus();
			alert("Don't forget your email address.");
			$(this).button('reset');
			return false;
		}
		
		var url = 'https://app.icontact.com/icp/signup.php';
		var icontact_params = {
			'fields_email' : 		email,
			'redirect' :			'http://www.icontact.com/www/signup/thanks.html',
			'errorredirect' :		'http://www.icontact.com/www/signup/error.html',
			'listid' :				165421,
			'specialid:165421' :	'2Q1B',
			'clientid' :			532549,
			'formid' :				13729,
			'reallistid' :			1,
			'doubleopt' :			1
		};
	
		var posting = $.post(
			url,
			icontact_params
		);
		posting.done(function( data ) {
			console.log("Return from iContact...");
			console.log(data);
			$(this).button('reset');
		});
	
	
		return true;
	});
}
