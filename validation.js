function validateForm() {
    let x = document.forms["myForm"]["nama"].value;
    let y = document.forms["myForm"]["email"].value;
    let z = document.forms["myForm"]["pesan"].value;
    let s = document.forms["myForm"]["subjek"].value;
    if (x == "") {
      alert("Nama dan Harus Diisi");
      return false;
    }

    else if (y == "") {
        alert("Email dan Harus Diisi");
        return false;
      }

    else if (s == "") {
        alert("Subjek dan Harus Diisi");
        return false;
    }


    else if (z == "" ) {
        alert("Message Harus Diisi");
        return false;
    }


  }
 
  



