// JavaScript Document
function submitdata() {
  var kysymys1 = document.querySelector('input[name="kysymys1"]:checked').value;
  var kysymys2 = document.querySelector('input[name="kysymys2"]:checked').value;
  var kysymys3 = document.querySelector('input[name="kysymys3"]:checked').value;
  var kysymys4 = document.querySelector('input[name="kysymys4"]:checked').value;
  var kysymys5 = document.querySelector('input[name="kysymys5"]:checked').value;
  alert(kysymys1)

  // Returns successful data submission message when the entered information is stored in database.
  var dataString = 'kysymys1=' + kysymys1 + 'kysymys2=' + kysymys2 + 'kysymys3=' + kysymys3 + 'kysymys4=' + kysymys4 + 'kysymys5=' + kysymys5;
      if (kysymys1 == '' || kysymys2 == '' || kysymys3 == '' || kysymys4 == '' || kysymys5 == '') {
      alert("Please Fill All Fields");
      }
      else {
                  // AJAX code to submit form.
                  $.ajax({
                  type: "POST",
                  url: "submit.php",
                  data: dataString,
                  cache: false,
                  success: function(html) {
                  alert(html);
                  }
                  });
              }
      return false;
}