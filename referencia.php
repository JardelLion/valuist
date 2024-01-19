
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Referencia</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800;900&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="dist/referencia.css">
    <link rel="stylesheet" href="dist/modal_slide.css">

    
</head>
  <body>
    <!-- header -->
    <?php $h1 = "Referencia"?>
  <?php include "header.php"?>
  
    <main class="main container-sm">


        <div class="container-sm">


            <form action="" method="post">
                <div class="row g-2">
                <div class="col-sm">
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control " placeholder="Nome" name="nome" aria-label="nome" aria-describedby="basic-addon1"
                         disabled>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="BI" name="bi" aria-label="bilhete de identidade" aria-describedby="basic-addon2" disabled>
                    </div>
                    <div class="input-group input-group-sm mb-3" style="position: relative;">
                        <span class="label-data" style="position: absolute;">Data de Nascimento</span>
                        <select class="form-select" name="day" id="inputGroupSelect01" disabled required>
                            <option value=""selected>dd</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <select class="form-select" name="month" id="inputGroupSelect02" disabled required>
                            <option value="" selected>mm</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <select class="form-select" name="year" id="inputGroupSelect03" aria-label="Example select with button addon" disabled required>
                            <option value=""selected>aaaa</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                        </select>
                        </div>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="VALIDADE DO BI"  name="valid-bi" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    </div>
                    <div class="input-group  input-group-sm mb-3">
                        <select class="form-select" name="estado" id="inputGroupSelect02" disabled required>
                            <option value=""selected>ESTADO CIVIL</option>
                            <option value="solteiro">SOLTEIRO</option>
                            <option value="casado">CASADO</option>
                            <option value="outro">OUTRO</option>
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="TELEFONE 1"  name="telefone-1" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="TELEFONE-2" name="telefone-2" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="MORADA ACTUAL" name="morada" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="ENTIDADE EMPREGADORA" name="entidade-empregadora" aria-label="Recipient's username" aria-describedby="basic-addon2" disabled>
                    </div>
                </div>
                <div class="col-sm">
                
                    <div class="client__nome-div input-group-sm">
                        <button type="button" class="client__nome-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSlide">NOTAS</button>
                    </div>
                
                
                
                    <div class="client__nome-div input-group-sm">
                    <button type="button" class="client__nome-btn btn btn-primary" id="openInputs">ALTERAR DADOS</button>
                    <button type="submit"  class="client__nome-btn btn-primary alterar" id="sendData" style="display:none;">ALTERAR</button>
             
                </div>
                
                
                </div>
                </div>
                <div class="row g-2">
                    <div class="col-sm">
                        <div class="input-group input-groups input-group-sm mb-3">
                            <input type="text" class="form-control" placeholder="RENDIMENTO MENSAL" name="rendimento-mensal" aria-label="Username" aria-describedby="basic-addon1" disabled>
                        </div>
                    </div>
                    <div class="col-sm">
                
                    </div>
                </div>
            </form>
             <!-- Modal slide-->
             <?php include "modal/modal_slide.php"?>












        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <script src="js/script.js"></script>
</body>
</html>