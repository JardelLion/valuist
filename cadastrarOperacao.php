
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800;900&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="dist/cadastrarOperacao.css">



</head>
  <body>
     <!-- header -->
     <?php $h1 = "Cadastrar Operação"?>
  <?php include "header.php"?>
    <main class="main container-sm">
        

        <div class="container-sm">

          <form action="#" method="post">

              <div class="row g-2">
                <div class="col-sm">
                    <label for="valorInicial">Valor Inicial</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="50 000" id="valorInicial" name="valor_inicial" aria-label="valorInicial" aria-describedby="basic-addon1" required>
                    
                    </div>
                    <label for="juros">Juros</label>
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="4.2" name="juros" aria-label="juros" aria-describedby="basic-addon2" required>
                        
                    </div>
    
                   
                   
                    <label for="mensal">Mensal</label>
                    <div class="input-group  input-group-sm mb-3">
                        <select class="form-select" name="mensal" id="mensal" required>
                            <option value="" selected>Mensal</option>
                            <option value="trimestral">Trimestral</option>
                            <option value="semestral">Semestral</option>
                            <option value="anual">Anual</option>
                        </select>
                    </div>
        
        
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Inicio" id="inicio"  name="inicio" aria-label="inicio" aria-describedby="basic-addon2" required>
                        
                    </div>
        
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="fim" name="fim" id="fim" aria-label="fim" aria-describedby="basic-addon2" required>
                        
                    </div>
        
    
                </div>
    
                <div class="col-sm">
                    <label for="cliente">Cliente</label>
                    <div class="input-group input-group-sm mb-3 after-none">
                    
                        <select class="form-select" id="cliente"  aria-label="cliente-select with button addon" required>
                            
                           <option value="" value="jardel">jardel</option>
                           <option value="elias">elias</option>
                           <option value="bernardo">bernardo</option>
                           <option value="joaquim">joaquim</option>
                       
                        </select>
                    </div>
                    <label for="jurosPreventivos">Juros Preventivos</label>
                    <div class="input-group input-group-sm mb-3 after-none">
                        <input type="text" class="form-control" placeholder="210" name="juros_preventivos" id="jurosPreventivos" aria-label="juros_preventivos" aria-describedby="basic-addon2" required>
                        
                    </div>


                    <label for="totalOperacao">Total da Operação</label>
                    <div class="input-group input-group-sm mb-3 after-none">
                        <input type="text" class="form-control" placeholder="3000" name="total_operacao" id="totalOperacao" aria-label="total_operacao" aria-describedby="basic-addon2" required>
                        
                    </div>

                </div>
    
    
              </div>
              <label for="#" style="display: block; margin-bottom:5px;">Forma de Rendimento</label>
              <div class="d-flex g-2">
                
                    <div class="col-sm__break">
                      <label for="formaRendimentoJuros">Juros</label>
                      <div class="input-group input-group-sm mb-3 after-none" >
                        <select class="form-select forma_rendimento__juros" id="formaRendimentoJuros"  aria-label="forma de rendimento juros with button addon" required>
                            
                            <option value="">0</option>
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
                        <div class="input-group input-group-sm mb-3 after-none">
                        
                            <select class="form-select forma_rendimento__capital" id="formaRendimentoCapital"  aria-label="forma de rendimento capital with button addon" required>
                                <option value="">0</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="7">7</option>
                                <option value="9">9</option>
                            
                             </select>
                        </div>
                    </div>
      

                  <div class="col-sm">
                      <div class="input-group input-group-sm mb-3 after-none" style="justify-content:end; margin-top:33px;">
                      
                          <button type="submit" class="btn btn-primary btn-sm red-69 none-decoration">Cadastrar</button>
    
                      </div>
                  </div>
      
      
                </div>
          </form>
              
              
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>