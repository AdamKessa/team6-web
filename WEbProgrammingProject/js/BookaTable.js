function Book(){  

    //validating name
    let name=document.myform.fname.value;  
    // to check if name is empty of not  
    if (name==null || name==""){  
      alert("Name can't be blank");  
      return false;  
    } 
     //validating Last name 
    let llname=document.myform.lname.value;     
    if (llname==null || llname==""){  
      alert("Last name can't be blank");  
      return false;  
    }
    //validating phonenumber 
    let Phone=document.myform.phonenumber.value;     
    if (Phone==null || Phone==""){  
      alert("Phonenumber can't be blank");  
      return false;  
    }      
    //validating email 
    let email=document.myform.email.value;
    if (email==null || email==""){  
        alert("Email can't be blank");  
        return false;  
      }
    }