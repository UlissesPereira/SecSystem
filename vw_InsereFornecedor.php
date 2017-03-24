<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  
  <body>
    <div class="col-md-10 col-md-offset-2">
      <form action="?= base_url()?>Fornecedor/CadastraFornecedor" method="POST">
        
        <div>
          <legend>Cadastro de Fornecedores e Prestadores de Serviço</legend>
        </div>
        <div class="row">
          
          <div class="col-md-2">
            <label class="control-label" for="IdPrestadores">Código</label>
            <input id="idPrestadores" name="idPrestadores" type="text"
            placeholder="" class="form-control input-md">
            <span class="help-block">Até 4 digitos.</span>
          </div>
          
          <div class="col-md-4">
            <label class="control-label" for="Nome">Nome/Razão Social</label>
            <input id="Nome" name="Nome"
            type="text" placeholder="" class="form-control input-md">
          </div>
          
          <div class="col-md-2">
            <label class="control-label" for="CpfCnpj">CPF/CNPJ</label>
            <input id="CpfCnpj" name="CpfCnpj" type="text" placeholder="___-___-__/____-__"
            class="form-control input-md">
          </div>
        </div>
        <br>
        <div class="row">
         
          <div class="col-md-3">
            <label class="control-label" for="Telefone">Telefone</label>
            <input id="Telefone" name="Telefone" type="text" placeholder=""
            class="form-control input-md">
          </div>
         
          <div class="col-md-3">
            <label class="control-label" for="Banco">Banco</label>
            <input id="Banco" name="Banco" type="text" placeholder=""
            class="form-control input-md">
          </div>
         
          <div class="col-md-2">
            <label class="control-label" for="Agencia">Agencia</label>
            <input id="Agencia" name="Agencia" type="text" placeholder=""
            class="form-control input-md">
          </div>
        </div>
        <br>
        <div class="row">
          
          <div class="col-md-2">
            <label class="control-label" for="ContaCorrente">Nº da Conta Corrente</label>
            <input id="ContaCorrente" name="ContaCorrente"
            type="text" placeholder="" class="form-control input-md">
          </div>
        
          <div class="col-md-2">
            <label class="control-label" for="CEP">CEP</label>
            <input id="CEP" name="CEP" type="text" placeholder="" class="form-control input-md">
          </div>
          <div class="col-md-2">
            <label class="control-label" for="Cidade">Cidade</label>
            <input id="Cidade" name="Cidade" type="text" placeholder=""
            class="form-control input-md">
          </div>
          <div class="col-md-2">
            <label class="control-label" for="Estado">Estado</label>
            <input id="Estado" name="Estado" type="text" placeholder=""
            class="form-control input-md">
          </div>
		  <div class="col-md-2">
            <label class="control-label" for="Endereco">Endereco</label>
            <input id="Endereco" name="Endereco" type="text" placeholder=""
            class="form-control input-md">
          </div>
        </div>
        <br>
        <!-- Button (Double) -->
        <div class="form-group">
          <div class="col-md-4">
            <button type="submit" id="Salvar" name="Salvar" class="btn btn-primary">Salvar</button>
            <button type="reset" name="Limpar" class="btn btn-link"
            id="Limpar">Limpar</button>
          </div>
        </div>
      </form>
    </div>
  </body>

</html>