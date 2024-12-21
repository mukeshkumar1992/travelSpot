// validation code
function validateForm() {
    let x = document.forms["myForm"]["name"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }

    let y = document.forms["myForm"]["education"].value;
    if (y == "") {
      alert("Education must be filled out");
      return false;
    }

    let z = document.forms["myForm"]["mobile"].value;
    if (z == "") {
      alert("Mobile must be filled out");
      return false;
    }

    let a = document.forms["myForm"]["email"].value;
    if (a == "") {
      alert("Email No must be filled out");
      return false;
    }

    let b = document.forms["myForm"]["age"].value;
    if (b == "") {
      alert("Age No must be filled out");
      return false;
    }

    let c = document.forms["myForm"]["Date Of Birth"].value;
    if (c == "") {
      alert("Date Of Birth No must be filled out");
      return false;
    }
  }



  $("#d2").change(function(){
    debugger
// datetimefunction
  const compareDates = (d1, d2) => {
    let date1 = new Date(d1).getTime();
    let date2 = new Date(d2).getTime();
  
    if (date1 < date2) {
      console.log(`${d1} is less than ${d2}`);
    } else if (date1 > date2) {
      console.log(`${d1} is greater than ${d2}`);
    } else {
      console.log(`Both dates are equal`);
    }
  };
  

});
//   compareDates("06/21/2022", "07/28/2021");
//   compareDates("01/01/2001", "01/01/2001");
//   compareDates("11/01/2021", "02/01/2022");