
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operação</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800;900&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="dist/operacao.css">
   

    
        
</head>
  <body>

   <!-- header -->
   <?php $h1 = "Operação"?>
  <?php include "header.php"?>
    
    <main class="main container-sm">

    <div class="container-sm">
        <!-- <button type="button" class="operacao-titular" id="modalOperacaoTitular" data-bs-toggle="modal" data-bs-target="#modalOperacaoTitular">
        </button> -->

        <!-- Button trigger modal -->
        <button type="button" class="btn-primary operacao-titular" data-bs-toggle="modal" data-bs-target="#modalOperacaoTitular">
        Jardel elias bernado <img src="img/ponto-de-interrogacao.png" alt="ponto de interrogação">
        </button>

        <!-- modal operacao-titular -->
        <?php include "operacaoModal/modal_operacao_titular.php"?>

    </div>
        

        <div class="container-sm">

            <form action="#" method="post">

                    <div class="row g-2">
                        <div class="col-sm">
                            <label for="valorInicial">Valor Inicial</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control" placeholder="50 000" id="valorInicial" name="valor_inicial" aria-label="valorInicial" aria-describedby="basic-addon1" disabled >
                            
                            </div>
                            <label for="juros">Juros</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control" placeholder="4.2" name="juros" aria-label="juros" aria-describedby="basic-addon2" disabled >
                                
                            </div>
            
                        
                        
                            <label for="mensal">Mensal</label>
                            <div class="input-group  input-group-sm mb-3">
                                <select class="form-select" name="mensal" id="mensal" disabled  required>
                                    <option value=""selected>Mensal</option>
                                    <option value="trimestral">Trimestral</option>
                                    <option value="semestral">Semestral</option>
                                    <option value="anual">Anual</option>
                                </select>
                            </div>
                
                            <label for="inicio">INICIO</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control" placeholder="Inicio" id="inicio"  name="inicio" aria-label="inicio" aria-describedby="basic-addon2" disabled >
                                
                            </div>
                            <label for="fim">FIM</label>
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" class="form-control" placeholder="fim" name="fim" id="fim" aria-label="fim" aria-describedby="basic-addon2" disabled >
                                
                            </div>

                            <label for="#" style="display: block; margin-bottom:5px; margin-top:47px">FORMA DE RENDIIMENTO</label>
                            <div class="d-flex g-2">
                            
                            
                        
                                <div class="col-sm__break">
                                        <label for="formaRendimentoJuros">Juros</label>
                                        <div class="input-group input-group-sm mb-3 after-hidden" >
                                        <select class="form-select forma_rendimento__juros" id="formaRendimentoJuros"  aria-label="select with button addon" disabled required >
                                            
                                            <option value="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                        
                                            </select>
                                        
                                            
                                        </div>
                                    </div>
                
                                    <div class="col-sm__break">
                                        <label for="formaRendimentoCapital">Capital</label>
                                        <div class="input-group input-group-sm mb-3 after-hidden">
                                        
                                            <select class="form-select forma_rendimento__capital" id="formaRendimentoCapital"  aria-label="select with button addon" disabled required >
                                            
                                                <option value="">3</option>
                                                <option value="4">4</option>
                                                <option value="7">7</option>
                                                <option value="9">9</option>
                                            
                                                </select>
                                        </div>
                                    </div>
                        
                
                                </div>
                    

                            
                
                            </div>    
                        <div class="col-sm">

                            <div class="operacao__nome-div input-group-sm" style="margin-top: 24px;">
                                <button type="button" class="operacao__nome-btn  btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">VENCIDO</button>
                            </div>

                            <div class="operacao__nome-div input-group-sm" style="margin-top: 45px;">
                                <button type="button" class="operacao__nome-btn  btn-primary" data-bs-toggle="modal" data-bs-target="#modalOperacaoPagamentos">PAGAMENTOS</button>
                            </div>

                           
                            <label for="jurosPreventivos">Juros Preventivos</label>
                            <div class="input-group input-group-sm mb-3 after-none">
                                <input type="text" class="form-control" placeholder="210" name="juros_preventivos" id="jurosPreventivos" aria-label="juros_preventivos" aria-describedby="basic-addon2" disabled>
                                
                            </div>


                            <label for="totalOperacao">Total da Operação</label>
                            <div class="input-group input-group-sm mb-3 after-none">
                                <input type="text" class="form-control" placeholder="3000" name="total_operacao" id="totalOperacao" aria-label="total_operacao" aria-describedby="basic-addon2" disabled>
                                
                            </div>


                            <div class="input-group input-group-sm mb-3 after-none red-border_none">
                                    <div>
                                    <p>JUROS PAGOS: 1/3</p>
                                    <p>TOTAL PAGO 30000</p>
                                    <p>TOTAL A PAGAR: 30000</p>
                                </div>

                            
                            </div>
                            
                            <div class="input-group input-group-sm mb-3 after-none red-border_none">
                            <div class="second-div">
                                <p>CAPITAL PAGO: 1/3</p>
                                <p>TOTAL PAGO: 30000</p>
                                <p>TOTAL A  PAGAR: 4000</p>
                            
                            </div>
                            
                            </div>

                            <div class="input-group input-group-sm mb-3 after-none red-border_none">
                                <div style="padding-top: 4px;">
                                <p>TOTAL RETORNADO: 400000</p>
                                
                                
                                </div>
                                
                            </div>
                            
                    


                        </div>
            
            
                    </div>
                    
                    <div class="d-flex flex-button">
                            <button type="button" class="operacao__nome-btn btn-primary alterar" id="openInputs">ALTERAR</button>
                            <button type="submit"  class="operacao__nome-btn btn-primary alterar" id="sendData" style="display:none;">ALTERAR</button>
                            
                            <button type="button" class="operacao__nome-btn btn-primary apagar"  data-bs-toggle="modal" data-bs-target="#modalOperacaoApagarDespesas">APAGAR</button>
                            
                         

                            <button type="button" class="operacao__nome-btn btn-primary notificar" data-bs-toggle="modal" data-bs-target="#modalOperacaoNotificar">NOTIFICAR</button>
                        
                           
                    </div>


                   
            </form>

                <div class="d-flex submit-btn fazer-pagamentos" id="fazerPagamentos" style="margin-top:20px;margin-bottom:20px;">
                    <button type="button">FAZER PAGAMENTOS</button>
                </div>

                <form action="#" method="post" id="pagamentosForm" style="display:none;">
                <div class="row g-2">
                    <div class="col-sm">
                    
        
                    
                    
                        <label for="cj">CAPITAL OUR JUROS</label>
                        <div class="input-group  input-group-sm mb-3 after-none">
                            <select class="form-select" name="cj" id="cj" required >
                                <option value="">Capital</option>
                                <option value="juros">Juros</option>
                            
                            </select>
                        </div>
            
                        <label for="Banco">BANCO</label>
                        <div class="input-group input-group-sm mb-3 after-none">
                            <select class="form-select" name="banco" id="Banco" required >
                                <option value="">BANCO BAI</option>
                                <option value="banco bpc">BANCO BPC</option>
                            
                            </select>
                        </div>
                        <label for="valorDoPagamento">VALOR DO PAGAMENTO</label>
                        <div class="input-group input-group-sm mb-3 after-none">
                            <input type="text" class="form-control" placeholder="20000" name="valor-do-pagament" id="valorDoPagamento" aria-label="valordopagamento" aria-describedby="basic-addon2" required >
                            
                        </div>

            
                        <div class="d-flex g-2">
                        
                                                    
            
                                <div class="col-sm__break">
                                
                                </div>
                    
            
                            </div>
                

                        
            
                        </div>   
                        
                    <div class="col-sm">

                        <label for="numeroDoComprovativo" style="margin-top:71px;">NÚMERO DO COMPROVATIVO</label>
                        <div class="input-group input-group-sm mb-3 after-none">
                            <input type="text" class="form-control" placeholder="3000" name="numerodocomprovativo" id="numeroDoComprovativo" aria-label="numerodocomprovativo" aria-describedby="basic-addon2" required>
                            
                        </div>

                        <div class="operacao__nome-div input-group-sm" style="margin-top: 41px;">
                            <button type="submit" class="operacao__nome-btn  btn-primary" >FAZER PAGAMENTO</button>
                        </div>
                


                    </div>
        
        
                </div>
                    
                
            
                </div>
            </form>

             <!-- modal operacao pagamentos -->
            <?php include "operacaoModal/modal_operacao_pagamentos.php"?>            

            <!-- modal operacao apagar despesas -->
            <?php include "operacaoModal/modal_operacao_apagar_despesas.php"?>

             <!-- modal operacao notificar -->
             <?php include "operacaoModal/modal_operacao_notificar.php"?>
                        

           
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/script.js" defer></script>
    <script src="js/operacao.js" defer></script>
</body>
</html>