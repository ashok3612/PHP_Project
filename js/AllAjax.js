
	function SendSmsUser1()
	{
		var msg1 = $("#text_user1").val();
		var request = $.ajax({
			  url: "updateChat.php",
			  type: "POST",
			  data: {"msg" : msg1}
			});
		
		request.done(function(msg) {
			
			});

	}
	
	function SendSmsUser2()
	{
		var msg2 = $("#text_user2").val();
		var request = $.ajax({
			  url: "updateChat.php",
			  type: "POST",
			  data: {"msg" : msg2} 
			});
		
		request.done(function(msg) {

			});

	}
	
	
	function UpdateDiv()
	{
		var request = $.ajax({
			  url: "updateDivBySms.php",
			  type: "POST",
			});
		
		request.done(function(msg) {
			  $("#user-2-container").empty();
			  $("#user-1-container").empty();
			  $("#user-2-container").append(msg);
			  $("#user-1-container").append(msg);
			});

			request.fail(function(jqXHR, textStatus) {
			  alert( "Request failed: " + textStatus );
			});
	}
	
	setInterval(function(){ UpdateDiv(); }, 1000);
	
	