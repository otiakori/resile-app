function validateform() {
          let x = document.forms['FORMS']['fname'].value;
          let y = document.forms['FORMS']['lname'].value;
          let z = document.forms['FORMS']['email'].value;
          let a = document.forms['FORMS']['pwd'].value;

          if (x == "" || y == "" || z == "" || a == "" ) {
            alert('please  enter all fields');
      
      return false;
      
    }  

}