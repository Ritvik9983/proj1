function showpass() {
    var x = document.getElementById("pass");
    var y = document.getElementById("showbtn");
    if (x.type === "password") {
    x.type = "text";
    y.innerHTML = "Hide";
    y.style.color = "rgb(0, 255, 255)"
    } 
    else {
    x.type = "password";
    y.innerHTML = "Show";
    y.style.color = "rgb(0, 0, 0)"
     }
     }