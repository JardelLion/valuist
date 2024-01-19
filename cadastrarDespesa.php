
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar Despesa</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800;900&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dist/style.css">
    <link rel="stylesheet" href="./dist/cadastrarDespesa.css">

</head>
  <body>
    <!-- header -->
    <?php $h1 = "Cadastrar Despesa"?>
    <?php include "header.php"?>

    <main class="main container-sm">
        

        <div class="container-sm">

          <form action="#" method="post">

              <div class="row g-2">
                <div class="col-sm">
    
                    <div class="input-group input-group-sm mb-3">
                    
                        <input type="text" class="form-control" placeholder="Descrisão" name="descrisao" aria-label="descrisao" aria-describedby="basic-addon1" required>
                    
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Valor" name="valor" aria-label="valor" aria-describedby="basic-addon2" required>
                        
                    </div>


                    <div class="input-group input-group-sm mb-3">
                      
                        <select class="form-select" name="categoria" id="Categoria" required>
                          <option value=""selected>Categoria</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
        
                    </div>

                    <div class="input-group input-group-sm mb-3">
                    <select class="form-select" name="natureza" id="Natureza" required>
                          <option value=""selected>Natureza</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                    </div>
        
        
    
                   
                   
                      
        
                    <div class="input-group v input-group-sm mb-3">
                        
                        <select class="form-select" name="dia" id="Dia" required>
                          <option value="" selected>dd</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
        
        
                       
                        <select class="form-select" name="mes" id="Mes" required>
                            <option value=""selected>mm</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                         
        
        
                       
                        <select class="form-select" name="ano" id="Ano" aria-label="ano-select select with button addon" required>
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
                
        
    
                </div>
    
                <div class="col-sm">
                    

                    
                </div>
    
    
              </div>

              <div class="row g-2">
        
                  <div class="col-sm">
                      <div class="input-group input-group-sm mb-3  input-group__last">
                      
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