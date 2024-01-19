
btnDados = document.querySelector("#openInputs");
inputGroup = document.querySelectorAll(".input-group");
inputTag = document.querySelectorAll("input");
selectTag = document.querySelectorAll("select")
sendDataBtn = document.querySelector("#sendData");

btnDados.addEventListener("click", function(){

    //change the background-color
    //btnDados.classList.toggle("clicked");
    sendDataBtn.classList.toggle("clicked")
    sendDataBtn.style.display = 'block';
    btnDados.style.display= 'none';

    
    
    

    //input group class
    for(let index = 0; index < inputGroup.length; index ++){
        inputGroup[index].classList.toggle("redBorder");
        
        
    }

    //input tag
    for(let index = 0; index < inputTag.length; index ++){
        inputTag[index].toggleAttribute("disabled");
        inputTag[index].setAttribute("required", "")
        
    }

    //select tag
    for(let index = 0; index < selectTag.length; index ++){
        selectTag[index].toggleAttribute("disabled");
        
    }

})


