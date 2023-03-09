  
  // check the image type and size.

  function checkImage() {
    var input = document.getElementById("imageUpload");
        var fileType = input.files[0].type;

          // Check file type
       	 if (!fileType.match('image/jpeg') && !fileType.match('image/png') && !fileType.match('image/gif')) {
     	  alert("Only JPEG, PNG, and GIF files are allowed.");
    	   input.value = "";
 	}
      

    if (input.files && input.files[0]) {
      if (input.files[0].size > 2000000) {
        alert("The file size is too large. Please select a file less than 2 MB.");
        input.value = "";
      }
    }
  }

  
  