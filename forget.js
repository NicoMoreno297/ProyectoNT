var frameModule = require("ui/frame");
var email = require("nativescript-email");

exports.signup = function() {
    frameModule.topmost().navigate("views/login/login");
};
function sendMail(){
    var min=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"]; 
    var simbolo =["?","¿","!","¡",".",",","´","*","+","-","_"]; 
    for (var i = 0; i < 3; i++) { 
          num = Math.floor((Math.random() * min.length)); 
          texto = texto + min[num]; 
          num = Math.floor((Math.random() * simbolo.length)); 
          texto = texto + simbolo[num]; 
          num = Math.floor((Math.random() * 10) + 1); 
          texto = texto + num;  
    
    }
    var email=stackLayout.getElementById
    email.available().then(function(avail) {
        console.log("Email available? " + avail);
        email.compose({
            subject: "Nueva contraseña",
            body: "Su nueva contraseña es:".texto,
            to: [email],
        }).then(
          function() {
            console.log("Email composer closed");
          }, function(err) {
            console.log("Error: " + err);
          });
    }) 
}
exports.sendMail=sendMail;