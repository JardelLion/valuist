<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800;900&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/style.css">
    
    <link rel="stylesheet" href="dist/credito.css">
    <title>Cadastrar Credito</title>
</head>

<body>
     <!-- header -->
     <?php $h1 = "Cadastrar Credito"?>
  <?php include "header.php"?>

    <main class="main container-sm">

        <div class="credito-div">
            <button class="credito-btn" id="CreditoBtn">
               CREDITO NOVO
            </button>
        </div>


       <!-- credito -->
       
       <div class="container d-flex">
            
            <div>

                <div class="row row-cols-2">
                    <div class="col year">
                        <button type="button">2022</button type="button">
                    </div>
                    <div class="col year">
                        <button type="button">2021</button type="button">
                    </div>
                    <div class="col year">
                        <button type="button">2023</button type="button">
                    </div>
                    
                    
                </div>
    
                <div class="row row-cols-2">
                    <div class="col year">
                        <button type="button">2023</button type="button">
                    </div>
                    
                </div>
            </div>

            <div>

                <div class="row row-cols-2">
                    <div class="col">
                        <button type="button">01</button type="button">
                    </div>
                    <div class="col">
                        <button type="button">02</button type="button">
                    </div>
                    <div class="col">
                        <button type="button">03</button type="button">
                    </div>
                    <div class="col">
                    <button type="button">04</button type="button">
                    </div>
                    <div class="col">
                        <button type="button">05</button type="button">
                    </div>
                    <div class="col">
                        <button type="button">06</button type="button">
                    </div>
                </div>
    
                <div class="row row-cols-2">
                    <div class="col">
                        <button type="button">07</button type="button">
                    </div>
                    <div class="col">
                        <button type="button">08</button type="button">
                    </div>
                    <div class="col">
                        <button type="button">09</button type="button">
                    </div>
                    <div class="col">
                    <button type="button">10</button type="button">
                    </div>
                    <div class="col" style="margin-left: 6px;">
                        <button type="button">11</button type="button">
                    </div>
                    <div class="col" style="margin-left: 5px;">
                        <button type="button">12</button type="button">
                    </div>
                </div>
            </div>


      </div>

       


        <div class="flex">
            <p class="total-credito">8 credito</p>
            <p class="total-credito">20.000kz</p>
        </div>
        
        
        <button type="button" class=" container container-sm d-flex ">
            <p class="content-credito">jardel</p>
            <p class="content-credito">0302020200</p>
           
        </button>


        <button type="button" class="container container-sm d-flex ">
            <p class="content-credito">jardel</p>
            <p class="content-credito">0302020200</p>
           
        </button>


        <button type="button" class="container container-sm d-flex ">
            <p class="content-credito">jardel</p>
            <p class="content-credito">0302020200</p>
           
        </button>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- <script>
        document.querySelector("#CreditoBtn").addEventListener("click", function(){
            window.location.href = "cadastrarCredito.php";
        })
    </script> -->
</body>
</html>