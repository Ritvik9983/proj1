const SearchBar = document.querySelector(".users .search input"),
searchBtn = document.querySelector(".users .search button");
searchBtn.onclick = ()=>{
    SearchBar.classList.toggle("active");
    SearchBar.focus();
    searchBtn.classList.toggle("active");
}
const userlist = document.querySelector(".wrapper .users .users-list");
var userinterval =  setInterval(()=>{
    var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("POST", "./settings/searchbar2.php", true);
      xmlhttp.onload = ()=>{
        if(xmlhttp.readyState === XMLHttpRequest.DONE){
          if(xmlhttp.status === 200){
            let data = xmlhttp.response;
            userlist.innerHTML = data;
          }
        }
      }
      xmlhttp.send()
  }, 400);

function showHint(str) {
  if (str.length == 0) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          userlist.innerHTML = this.responseText;
          if(userinterval == 0){
            userinterval =  setInterval(()=>{
              var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("POST", "./settings/searchbar2.php", true);
                xmlhttp.onload = ()=>{
                  if(xmlhttp.readyState === XMLHttpRequest.DONE){
                    if(xmlhttp.status === 200){
                      let data = xmlhttp.response;
                      userlist.innerHTML = data;
                    }
                  }
                }
                xmlhttp.send()
              }, 500)
          }
      }
    };
    xmlhttp.open("GET", "./settings/searchbar2.php?q=" + str, true);
    xmlhttp.send();
    return ;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          userlist.innerHTML = this.responseText;
          clearInterval(userinterval);
          userinterval = 0;
      }
    };
    xmlhttp.open("GET", "./settings/searchbar.php?q=" + str, true);
    xmlhttp.send();
}
}