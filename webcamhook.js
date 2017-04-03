webcam.set_hook( 'onComplete', 'my_completion_handler', 'confirmation' );
		
		function take_snapshot() {
			// take snapshot and upload to server
			document.getElementById('upload_results').innerHTML = '<center><span>Uploading...</span></center>';
			webcam.snap();
			confirmation();
		}
		
		function my_completion_handler(msg) {
			// extract URL out of PHP output
			if (msg.match(/(http\:\/\/\S+)/)) {
				var image_url = RegExp.$1;
				// show JPEG image in page
				document.getElementById('upload_results').innerHTML = 
					'<center><span>Upload Successful!</span></center>'; 
					
				
				// reset camera for another shot
			
				webcam.reset();
			}
			else alert("PHP Error: " + msg);
		}
		function confirmation(msg){
			
		document.getElementById('confirmation').innerHTML = 
					'<center><span>Click confirm to complete your clock in.</span><br />' +
					'<input class="button" type=submit src="btn.png" value="Submit" /></center>'; 
					}