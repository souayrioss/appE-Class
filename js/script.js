
        let inputs = document.querySelectorAll('input');
        let messages = document.querySelectorAll('#message');
        let formatName = /^\(?([a-z]{3,20})$/i;
        let formatEmail = /\S+@\S+\.\S+/;
        let formatPhone =  /^\(?([0]{1})([0-9]{9})$/;
        let sup = document.getElementById('singup');
        let sin = document.getElementById('signin');
        let menu_btn = document.querySelector("#menu-btn")
        let sidebar = document.querySelector("#sideBar")
        let btn = document.querySelector(".menu-btn")
        let boxes = document.querySelector(".boxes")
        let suppStd = document.querySelector("#suppStd")
        if(menu_btn){
            menu_btn.addEventListener("click",()=>{
                sidebar.classList.toggle("active-nav")
                btn.classList.toggle("active-cont")
                boxes.classList.toggle("active-boxes")
            })
        }
        if(sup) {
            sup.onclick = function(event) {
                    let countin=inputs.length;
                        for(let i=0 ;i<countin-2;i++){
                        if(inputs[i].value.trim() == "" ){
                            event.preventDefault()
                            if(inputs[3].value.trim() !== inputs[4].value.trim() ){
                                inputs[4].classList.add("border-danger");
                                inputs[4].focus();
                                messages[4].classList.remove("d-none");
                                break;  
                                }
                                inputs[i].classList.add("border-danger");
                                messages[i].classList.remove("d-none");
                                inputs[i].focus();
                            break;
                        }
                        inputs[i].classList.remove("border-danger");
                        messages[i].classList.add("d-none");
                    }
                }
        }
        if(sin){
            sin.addEventListener("click" , function(event){
                let countin=inputs.length;
                for(let i=0 ;i<countin-2;i++){
                    if(inputs[i].value.trim() == "" ){
                        event.preventDefault()
                            inputs[i].classList.add("border-danger");
                            messages[i].classList.remove("d-none");
                            inputs[i].focus();
                        break;
                    }
                    inputs[i].classList.remove("border-danger");
                    messages[i].classList.add("d-none");
                }
            })
        }
