function search () {
	var name = document.getElementById("name").value;
	
	$.getJSON("https://api.github.com/users/"+name, function(result){
	   console.log(result);

	   $('#fullname').html(result.name);
	   $('#dp').attr("src",result.avatar_url);
	   $('#followers').html("followers : "+result.followers);
	   $('#following').html("following : "+result.following);
	   $('#created_at').html("created_at : "+result.created_at);

	}).fail(function() { 
		$('#fullname,#dp,#followers,#following,#created_at').hide();
		// $('#dp ').hide();
		$('#msg').html('This Username is not available');

	})
}