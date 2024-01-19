
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Descrisão despesa</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800;900&display=swap" rel="stylesheet">




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="dist/descrisaoDespesa.css">
    <link rel="stylesheet" href="dist/modal_slide.css">

 
</head>
  <body>
    <!-- header -->
    <?php $h1 = "Descrisão Despesa"?>
  <?php include "header.php"?>
  
    <main class="main container-sm">


        <div class="container-sm">


        
            <div class="row g-2">
                <div class="col-sm">
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control " placeholder="Descrisão" name="descrisao" aria-label="nome" aria-describedby="basic-addon1"
                        disabled>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Valor" name="valor" aria-label="valor" aria-describedby="basic-addon2" disabled>
                    </div>
                    <div class="input-group input-group-sm mb-3">
            
                        <select class="form-select" name="categoria" id="Categoria" disabled>
                        <option selected>Categoria</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        </select>
                    </div>
                    <div class="input-group input-group-sm mb-3">
            
                        <select class="form-select" name="natureza" id="Natureza" disabled>
                        <option selected>Natureza</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        </select>
                    </div>
                    <div class="input-group v input-group-sm mb-3">
            
                        <select class="form-select" name="dia" id="Dia" disabled>
                        <option selected>dd</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        </select>
            
                        <select class="form-select" name="mes" id="Mes" disabled>
                            <option selected>mm</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
            
            
                        <select class="form-select" name="year" id="inputGroupSelect03" aria-label="Example select with button addon" disabled>
                            <option selected>aaaa</option>
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
                </div>
                <div class="col-sm">
            
                    <div class="descrisao-despesa__nome-div input-group-sm">
                        <button type="button" class="descrisao-despesa__nome-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSlide">NOTAS</button>
                    </div>
            
                    <!-- Modal slide -->
                    <?php include "Modal/modal_slide.php" ?>
            
                    <div class="descrisao-despesa__nome-div input-group-sm">
            
                        <button type="button" class="descrisao-despesa__nome-btn btn btn-primary" id="openInputs" data-bs-toggle="modal" data-bs-target="#ModalAlterarDados" >ALTERAR DADOS</button>
        
                    </div>
                     <!-- Modal alterar dados -->
                     <?php include "descrisaoDespesaModal/modal_alterar_dados.php"?>
            
            
                    <div class="descrisao-despesa__nome-div input-group-sm">
                        <!-- Button trigger modal -->
                    <button type="button" class="descrisao-despesa__nome-btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDelete">APAGAR</button>
                    </div>
        
                    <!-- Modal delete-->
                    <?php include "clienteNomeModal/modal_delete.php"?>


                    <div class="descrisao-despesa__nome-div input-group-sm">
                    <button type="button" class="descrisao-despesa__nome-btn btn btn-primary" id="pedidoAlteracao" data-bs-toggle="modal" data-bs-target="#ModalPedidoDeAlteracao">PEDIDO DE ALTERAÇÃO</button>
                    </div>


                    <!-- Modal pedido de alteracao de  dados -->
                    <?php include "descrisaoDespesaModal/modal_pedido_de_alteracao.php"?>
            
            
            
                </div>
            </div>
            


        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>