const input = document.getElementById('out-msg');
const form = document.querySelector('.typing-area');
const chat_box = document.querySelector('.chat-box');
const status_var = document.querySelector('header .details p');
function filebutt(){
  var x = document.getElementById('document');
  x.click();
}
function scrollbottom(){
    chat_box.scrollTop = chat_box.scrollHeight;
  }
function send_message(){
  var xmlhttp = new XMLHttpRequest();
  let formData = new FormData(form);
    xmlhttp.open("POST", "./settings/setting_chat_area.php", true);
    xmlhttp.send(formData);
}
form.onsubmit = (e)=>{
  e.preventDefault();
  input.value = "";
  chat_box.scrollTop = chat_box.scrollHeight+50;
  document.getElementById('document').value = '';
}
var chat_interval = setInterval(()=>{
  var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "./settings/get_chat.php", true);
    xmlhttp.onload = ()=>{
      if(xmlhttp.readyState === XMLHttpRequest.DONE){
        if(xmlhttp.status === 200){
          let data = xmlhttp.response;
          chat_box.innerHTML = data;
        }
      }
    }
    let formData = new FormData(form);
    xmlhttp.send(formData);
}, 400);
setTimeout(scrollbottom, 550);