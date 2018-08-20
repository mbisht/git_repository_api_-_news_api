<script>
		function myFunction() {
		var user = document.getElementById("user").value;
		var comment = document.getElementById("comment").value;
		
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'user=' + user + 'comment=' + comment;
		if (user == '' || comment == '') {
		alert("Please Fill All Fields");
		} else {
		// AJAX code to submit form.
		$.ajax({
		type: "POST",
		url: "ajaxjs.php",
		data: dataString,
		cache: false,
		success: function(html) {
		alert(html);
		}
		});
		}
		return false;
		}
</script>