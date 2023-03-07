const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
  e.preventDefault(); // prevent default form submission

  // get the form data
  const formData = new FormData(form);

  // send the AJAX request to the PHP script
  fetch('add_review.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    console.log(data);
    // display a success message to the user
  })
  .catch(error => {
    console.error(error);
    // display an error message to the user
  });
});

function crud(){ 
  //validating name
  let name=document.form.customerName.value; 
  let rtext=document.form.reviewText.value; 
  // to check if name is empty of not  
  if (name==null || name==""){  
    alert("Name can't be blank");  
    return false;  
  }
  // // to ensure name cannot be more than 5 characters
  else if(name.length>20){  
      alert("Name can't more than 15 characters");  
      return false;  
    } 
  }
  


  function uploadImage() {
    var fileInput = document.getElementById("imageUpload");
    var file = fileInput.files[0];
    
    if (fileInput.files && fileInput.files[0]) {
      // Check if file size is less than 1MB
    }
    // create FormData object
    var formData = new FormData();
    formData.append("image", file);
  
    // create XHR object
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../PHP_files/add_review.php", true);
  
    // set headers
    xhr.setRequestHeader("Content-Type", "multipart/form-data");
  
    // handle response
    xhr.onreadystatechange = function() {
      if (this.readyState === 4 && this.status === 200) {
        console.log("Image uploaded successfully");
      }
    }
  
    // send request with FormData object
    xhr.send(formData);
  }

  

  function checkFileSize() {
    var input = document.getElementById("imageUpload");
    if (input.files && input.files[0]) {
      if (input.files[0].size > 2000000) {
        alert("The file size is too large. Please select a file less than 2 MB.");
        input.value = "";
      }
    }
  }

  
  