function filebutt(){
    var x = document.getElementById('photo');
    x.click();
}
function photo_but_pos(){
    var photo_upload_but = document.getElementById("photo_upload");
    var warning = document.getElementById("warning");
    var strength_meter = document.getElementById("strength_meter");
    if(warning.style.display=="none" && strength_meter.style.display=="none"){
        photo_upload_but.style.top = "-10.5vw";
        photo_upload_but.style.left = "5.1vw";
    }
    else if(warning.style.display=="block" && strength_meter.style.display=="none"){
        photo_upload_but.style.top = "-12.9vw";
        photo_upload_but.style.left = "15.1vw";
    }
    else if(warning.style.display=="none" && strength_meter.style.display=="block"){
        photo_upload_but.style.top = "-11.6vw";
        photo_upload_but.style.left = "5.1vw";
    }
    else if(warning.style.display=="block" && strength_meter.style.display=="block"){
        photo_upload_but.style.top = "-15.1vw";
        photo_upload_but.style.left = "15.1vw";
    }
}
function showpass() {
    var x = document.getElementById("pass1");
    var y = document.getElementById("pass2");
    var a = document.getElementById("showbtn1");
    var b = document.getElementById("showbtn2");
    if (x.type === "password" && y.type === "password") {
    x.type = "text";
    y.type = "text";
    a.innerHTML = "Hide";
    a.style.color = "rgb(0, 255, 255)";
    b.innerHTML = "Hide";
    b.style.color = "rgb(0, 255, 255)";
    } 
    else {
    x.type = "password";
    y.type = "password";
    a.innerHTML = "Show";
    a.style.color = "rgb(0, 0, 0)";
    b.innerHTML = "Show";
    b.style.color = "rgb(0, 0, 0)";
     }
     }
function match_pass(){
        var x = document.getElementById("pass1");
        var y = document.getElementById("pass2");
        var z = document.getElementById("warning");
        if(y.value=="" && x.value===y.value){
            z.style.display = "none";
            photo_but_pos();
        }
        else if(y.value=="" && x.value!=y.value){
            z.style.display = "none";
            photo_but_pos();
        }
        else if(x.value===y.value){
            z.style.display = "block";
            z.innerHTML = "Password matched";
            z.style.color = "rgb(72, 255, 0)";
            photo_but_pos();
        }
        else{
            z.style.display = "block";
            z.innerHTML = "Password not match";
            z.style.color = "rgb(255, 38, 0)";
            photo_but_pos();
        }
    }
    
function password_strength(){
        var input = document.getElementById("pass1");
        var c = document.getElementById("pass2");
        var z = document.getElementById("warning");
        var a = document.getElementById("showbtn1");
        var y = document.getElementById("strength_meter");
        var indicator = document.getElementsByTagName("span");
        var num = "0123456789";
        var small = "abcdefghijklmnopqrstuvwxyz";
        var capital = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var special_char = "~`!@#$%^&*()_+-=[]{};: '<>,./?\\|";
        var indiword = document.getElementById("indiword");
        function strength_checker(){
            function num_check(){
                for (let i = 0; i < num.length; i++) {
                    if(input.value.includes(num[i])){
                        return true;
                    }
                }
            }
            function small_check(){
                for (let i = 0; i < small.length; i++) {
                    if(input.value.includes(small[i])){
                        return true;
                    }
                }
            }
            function capital_check(){
                for (let i = 0; i < capital.length; i++) {
                    if(input.value.includes(capital[i])){
                        return true;
                    }
                }
            }
            function special_char_check(){
                for (let i = 0; i < special_char.length; i++) {
                    if(input.value.includes(special_char[i])){
                        return true;
                    }
                }
            }
            if(input.value!=""){
                y.style.display = "block";
                z.style.top = "-13.45vw";
                a.style.top = "-13.2vw";
                if(num_check()==true){
                    indicator[0].className = "indicator very_weak";
                    indicator[1].className = "indicator";
                    indicator[2].className = "indicator";
                    indicator[3].className = "indicator";
                    if(small_check()==true){
                        indicator[0].className = "indicator very_weak";
                        indicator[1].className = "indicator";
                        indicator[2].className = "indicator";
                        indicator[3].className = "indicator";
                        if(capital_check()==true){
                            indicator[1].className = "indicator weak";
                            indicator[2].className = "indicator";
                            indicator[3].className = "indicator";
                            if(special_char_check()==true){
                                indicator[2].className = "indicator strong";
                                indicator[3].className = "indicator";
                                if(input.value.length>=8){
                                    indicator[3].className = "indicator very_strong";
                                }
                            }
                            else if(input.value.length>=8){
                                indicator[2].className = "indicator strong";
                                indicator[3].className = "indicator";
                            }
                        }
                        else if(special_char_check()==true){
                            indicator[1].className = "indicator weak";
                            indicator[2].className = "indicator";
                            indicator[3].className = "indicator";
                            if(input.value.length>=8){
                                indicator[2].className = "indicator strong";
                                indicator[3].className = "indicator";
                            }
                        }
                        else if(input.value.length>=8){
                            indicator[1].className = "indicator weak";
                            indicator[2].className = "indicator";
                            indicator[3].className = "indicator";
                        }
                    }
                    else if(capital_check()==true){
                        indicator[0].className = "indicator very_weak";
                        indicator[1].className = "indicator";
                        indicator[2].className = "indicator";
                        indicator[3].className = "indicator";
                        if(special_char_check()==true){
                            indicator[1].className = "indicator weak";
                            indicator[2].className = "indicator";
                            indicator[3].className = "indicator";
                            if(input.value.length>=8){
                                indicator[2].className = "indicator strong";
                                indicator[3].className = "indicator";
                            }
                        }
                    }
                    else if(special_char_check()==true){
                        indicator[0].className = "indicator very_weak";
                        indicator[1].className = "indicator";
                        indicator[2].className = "indicator";
                        indicator[3].className = "indicator";
                        if(input.value.length>=8){
                            indicator[1].className = "indicator weak";
                            indicator[2].className = "indicator";
                            indicator[3].className = "indicator";
                        }
                    }
                }
                else if(small_check()==true){
                    indicator[0].className = "indicator very_weak";
                    indicator[1].className = "indicator";
                    indicator[2].className = "indicator";
                    indicator[3].className = "indicator";
                    if(capital_check()==true){
                        indicator[0].className = "indicator very_weak";
                        indicator[1].className = "indicator";
                        indicator[2].className = "indicator";
                        indicator[3].className = "indicator";
                        if(special_char_check()==true){
                            indicator[1].className = "indicator weak";
                            indicator[2].className = "indicator";
                            indicator[3].className = "indicator";
                            if(input.value.length>=8){
                                indicator[2].className = "indicator strong";
                                indicator[3].className = "indicator";
                            }
                        }
                        else if(input.value.length>=8){
                            indicator[1].className = "indicator weak";
                            indicator[2].className = "indicator";
                            indicator[3].className = "indicator";
                        }
                    }
                    else if(special_char_check()==true){
                        indicator[0].className = "indicator very_weak";
                        indicator[1].className = "indicator";
                        indicator[2].className = "indicator";
                        indicator[3].className = "indicator";
                        if(input.value.length>=8){
                            indicator[1].className = "indicator weak";
                            indicator[2].className = "indicator";
                            indicator[3].className = "indicator";
                        }
                    }
                    else if(input.value.length>=8){
                        indicator[0].className = "indicator very_weak";
                        indicator[1].className = "indicator";
                        indicator[2].className = "indicator";
                        indicator[3].className = "indicator";
                    }
                }
                else if(capital_check()==true){
                    indicator[0].className = "indicator very_weak";
                    indicator[1].className = "indicator";
                    indicator[2].className = "indicator";
                    indicator[3].className = "indicator";
                    if(special_char_check()==true){
                        indicator[0].className = "indicator very_weak";
                        indicator[1].className = "indicator";
                        indicator[2].className = "indicator";
                        indicator[3].className = "indicator";
                        if(input.value.length>=8){
                            indicator[1].className = "indicator weak";
                            indicator[2].className = "indicator";
                            indicator[3].className = "indicator";
                        }
                    }
                }
                else{
                    indicator[0].className = "indicator very_weak";
                    indicator[1].className = "indicator";
                    indicator[2].className = "indicator";
                    indicator[3].className = "indicator";
                }
                photo_but_pos();
            }
            else{
                z.style.top = "-11.1vw";
                a.style.top = "-12vw";
                y.style.display = "none";
                photo_but_pos();
            }
            function indiword_fn(){

                if(input.value==""){
                    indiword.style.display = "none";
                }
                else if(indicator[3].className=="indicator very_strong"){
                     indiword.innerHTML = "Very Strong";
                     indiword.style.display = "block";
                     indiword.style.color = "rgb(72, 255, 0)";
                }
                else if(indicator[2].className=="indicator strong"){
                     indiword.innerHTML = "Strong";
                     indiword.style.display = "block";
                     indiword.style.color = "rgb(205, 205, 0)";
                }
                else if(indicator[1].className=="indicator weak"){
                     indiword.innerHTML = "Weak";
                     indiword.style.display = "block";
                     indiword.style.color = "rgb(255, 166, 0)";
                }
                else if(indicator[0].className=="indicator very_weak"){
                     indiword.innerHTML = "Very weak";
                     indiword.style.display = "block";
                     indiword.style.color = "rgb(255, 0, 0)";
                }
            }
            indiword_fn();
        }
        if(input.value==""){
            strength_checker();
            photo_but_pos();
        }
        else if(input.value===c.value){
            strength_checker();
            z.innerHTML = "Password matched";
            z.style.color = "rgb(72, 255, 0)";
            photo_but_pos();
        }
        else{
            strength_checker();
            z.innerHTML = "Password not match";
            z.style.color = "rgb(255, 38, 0)";
            photo_but_pos();
        }
    }
function stop_submit(){
    var x = document.getElementById("pass1");
    var y = document.getElementById("pass2");
    var indicator = document.getElementsByTagName("span");

    if(x.value!==y.value){
        if(indicator[3].className=="indicator very_strong"){
            alert("both password do not match");
            event.preventDefault();//stop submission of form
        }
        else{
            alert("Please select a strong password and both passwords do not match");
            event.preventDefault();//stop submission of form
        }
    }
    else if(x.value==y.value){
        if (indicator[3].className=="indicator very_strong") {
            if(document.getElementById('photo').value ==""){
                alert("Please select a photo");
                event.preventDefault();
            }
            else{
            }
            
        }
        else{
            alert("Please select a strong password");
            event.preventDefault();
        }
    }
}