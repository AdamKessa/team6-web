function validateform(){  

    //validating name
    let name=document.myform.name.value;  
    // to check if name is empty of not  
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    }
    // to check if name has atleast 5 characters
    else if(name.length<5){  
        alert("Name can't less than 5 characters");  
        return false;  
      }
    // // to ensure name cannot be more than 5 characters
    else if(name.length>15){  
        alert("Name can't more than 15 characters");  
        return false;  
      }

    //validating email 
    let email=document.myform.email.value;
    if (email==null || email==""){  
        alert("Email can't be blank");  
        return false;  
      }
