// a simple function that triggers alert box
function hello(){
    alert("Welcome to my website");
}

//adding 2 numbers
function add(){
    document.write(5+6);
}

//document.getElementById(id)
    //to echo soemthing without overwriting page

//function to change bg color of page
function changeColor(where, newColor){
    if(where=="background")
    document.body.style.backgroundColor = newColor;
}   

//crud function to check if input requirements are correct for reportBug form
function validateform(){  

    //validating name
    let name=document.reportBug.name1.value;  
    // to check if name is empty of not  
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    }
    // to check if name has atleast 5 characters
    else if(name.length<5){  
        alert("Name can't be less than 5 characters");  
        return false;  
      }
    // // to ensure name cannot be more than 5 characters
    else if(name.length>15){  
        alert("Name can't be more than 15 characters");  
        return false;  
      }

    //validating email 
    let email=document.reportBug.email.value;
    if (email==null || email==""){  
        alert("Email can't be blank");  
        return false;  
      }
    
    let message=document.reportBug.message.value;
    if (message==null || message==""){  
        alert("Message can't be blank");  
        return false;  
      }

    else if(message.length<10){
        alert("Message can't be less than 10 characters long");  
        return false; 
    }
    
    }  