window.addEventListener("load", function () {

    function sendData() {
      var xhr; 
      try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
      catch (e) 
      {
          try {   xhr = new ActiveXObject('Microsoft.XMLHTTP'); }
          catch (e2) 
          {
             try {  xhr = new XMLHttpRequest();  }
             catch (e3) {  xhr = false;   }
           }
      }
  
      var formData = new FormData(form);
  
      xhr.addEventListener("load", function(event) {
        $msg=(event.target.responseText!="")?event.target.responseText:"OK";
        //alert($msg);
      });
  
      xhr.addEventListener("error", function(event) {
        //alert('Oups! Quelque chose s\'est mal passé.');
      });
  
      xhr.open("POST", "traitement/saisieCueillette.php", true);


      xhr.onreadystatechange  = function() 
      { 
        if(xhr.readyState  == 4) {
          if(xhr.status  == 200) {
            var result = JSON.parse(xhr.responseText);
            
            alert(result);
            
            var ver = document.getElementById("verification");
            ver.innerHTML = "";
            var div = document.createElement('div');
            
            if (result == 0) {
              div.className ="alert alert-danger";
              div.textContent = "Poids insuffisant pour cueillette !";
            } else {
              div.className ="alert alert-success";
              div.textContent = "Cueillette effectué avec succès.";
            }

            div.role = "alert";

            ver.appendChild(div);
          } else {
              document.dyn="Error code " + xhr.status;
          }
        }
      }; 
  
      xhr.send(formData);
    }
  
    var form = document.getElementById("form");
  
    form.addEventListener("submit", function (event) {
    event.preventDefault(); // évite de faire le submit par défaut
    sendData();
  });
});