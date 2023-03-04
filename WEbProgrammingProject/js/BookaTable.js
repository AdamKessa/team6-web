 function crud(){ 
    //validating name
    let name=document.myform.fname.value;  
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

     //validating Last name 
    let llname=document.myform.lname.value;     
    if (llname==null || llname==""){  
      alert("Last name can't be blank");  
      return false;  
    }
      // to check if name has atleast 5 characters
      else if(llname.length<5){  
        alert("Last name can't less than 5 characters");  
        return false;  
      }
    // // to ensure name cannot be more than 5 characters
    else if(llname.length>15){  
        alert("Last name can't more than 15 characters");  
        return false;  
      }
    //validating phonenumber 
    let Phone=document.myform.phonenumber.value;     
    if (Phone==null || Phone==""){  
      alert("Phonenumber can't be blank");  
      return false;  
    }
    else if(Phone.length<9){  
      alert("Phonenumber can't less than 9 digits");  
      return false;  
    }
  // // to ensure name cannot be more than 5 characters
  else if(Phone.length>9){  
      alert("Phonenumber can't more than 9 digits");  
      return false;  
    }
  }     
    //validating email 
  function Bookemail(){ 
    let emaill=document.myform.email.value;
    if (emaill==null || emaill==""){  
        alert("Email can't be blank");  
        return false;  
      }
      let pattern = /@/;
      let eemail=document.myform.email.value;
      let result = pattern.test(eemail);
      // document.write(result);
      if (result==false) {
        alert("Email must contain @");
      }   
    }
    