
pagamentosBtn = document.querySelector("#fazerPagamentos")

pagamentosBtn.addEventListener("click", function(){
    pagamentosBtn.classList.toggle("open-form");
    console.log(pagamentosBtn.classList)

    if(pagamentosBtn.classList.contains('open-form')){
        document.querySelector("#pagamentosForm").style.display ="block";

    }
    else {
        document.querySelector("#pagamentosForm").style.display ="none";

    }
   
})
