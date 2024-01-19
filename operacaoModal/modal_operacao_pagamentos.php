
<!-- Modal -->
<div class="modal fade" id="modalOperacaoPagamentos" tabindex="-1" aria-labelledby="modalOperacaoPagamentosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <div class="row g-2">
            <div class="col-sm x">
                <h3 class="left">PAGAMENTOS</h3>

                <label for="operacaoCapitalPagamentos" class="label">CAPITAL OU JUROS ?</label>
                <div class="input-group input-group-sm mb-3 after-none">
                <select class="form-select " id="operacaoCapitalPagamentos"  aria-label="select with button addon" disabled >
                                    
                    <option value="capital">Capital</option>
                    <option value="juros">Juros</option>
                    
                                
                    </select>
                  
                </div>
                <label for="operacaoCapitalPagamentosComprovativo" class="label">NÚMERO DE COMPROVATIVO</label>
                <div class="input-group input-group-sm mb-3 after-none">

                    <p class="form-control operacao-comprovativo" id="operacaoCapitalPagamentosComprovativo" disabled>0000045</p>
                
                </div>   
                
                <span class="line"></span>
                
                <label for="operacaoCapitalPagamentos_" class="label">CAPITAL OU JUROS ?</label>
                <div class="input-group input-group-sm mb-3 after-none">
                <select class="form-select " id="operacaoCapitalPagamentos_"  aria-label="select with button addon" disabled >
                                    
                    <option value="capital">Capital</option>
                    <option value="juros">Juros</option>
                    
                                
                    </select>
                  
                </div>

                <label for="operacaoCapitalPagamentosComprovativo_" class="label">NÚMERO DE COMPROVATIVO</label>
                <div class="input-group input-group-sm mb-3 after-none">

                    <p class="form-control operacao-comprovativo" id="operacaoCapitalPagamentosComprovativo_" disabled>0000045</p>
                
                </div>  
              
              

            </div>

            <div class="col-sm" style="overflow:hidden;">
                <h3 class="right">TOTAL: <span class="operacao-pagamentos__total">90000</span></h3>
                <label for="operacaoPagamentosBanco" class="label">BANCO</label>
                <div class="input-group input-group-sm mb-3 after-none">
                    <p class="form-control operacao-referencia__nome" id="opercaoPagamentosBanco" disabled>BANCO BAI</p>
                
              
                </div>

                <label for="operacaoPagamentosValor" class="label">VALOR DO PAGAMENTO</label>
                <div class="input-group input-group-sm mb-3 after-none">

                    <p class="form-control operacao-referencia__estado" id="operacaoPagamentosValor"disabled>90.0000,00 AO</p>
                </div>
                <span class="line"></span>

                <label for="operacaoPagamentosBanco_" class="label">BANCO</label>
                <div class="input-group input-group-sm mb-3 after-none">
                    <p class="form-control operacao-referencia__nome" id="opercaoPagamentosBanco_" disabled>BANCO BAI</p>
                
              
                </div>

                <label for="operacaoPagamentosValor_" class="label">VALOR DO PAGAMENTO</label>
                <div class="input-group input-group-sm mb-3 after-none">

                    <p class="form-control operacao-referencia__estado" id="operacaoPagamentosValor_"disabled>90.0000,00 AO</p>
                </div>
                
            </div>
            <span class="line"></span>
    
    
        </div>
       
        
      
      </div>

     

    </div>
   
  </div>

</div>

