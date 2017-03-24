<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  
  <body>
    <div class="col-md-10 col-md-offset-2">
		<form action="" method="POST"><!-- Form Name -->
      <div>
        <legend>Cadastro de Orgão</legend>
      </div>

      <div class="row">
        <!-- Código-->
        <div class="col-md-2">
          <label class="control-label" for="idOrgao">Código</label>
          <input id="idOrgao" name="idOrgao" type="text" placeholder="" class="form-control input-md">
          <span class="help-block">Até 4 digitos.</span>
        </div>
        <!-- Nome-->        
        <div class="col-md-4">
            <label class="control-label" for="NomeFantasia">Nome/Razão Social</label>
            <input id="NomeFantasia" name="NomeFantasia" type="text" placeholder="" class="form-control input-md">
        </div>
        <!-- CPF/CNPJ-->
        <div class="col-md-2">
          <label class="control-label" for="CnpjCpf">CPF/CNPJ</label>
          <input id="CnpjCpf" name="CnpjCpf" type="text"  class="form-control input-md">
        </div>
      </div>
      <br>

      <div class="row">
        <!-- Endereço-->
        <div class="col-md-3">
          <label class="control-label" for="Endereco">Endereço</label>
          <input id="Endereco" name="Endereco" type="text" placeholder="" class="form-control input-md" required="Campo Obrigatorio">
        </div>
        <!-- Cidade-->
        <div class="col-md-3">
          <label class="control-label" for="Cidade">Cidade</label>
          <input id="Cidade" name="Cidade" type="text" placeholder="" class="form-control input-md" required="Campo Obrigatorio">
        </div>
        <!-- Estado-->
        <div class="col-md-2">
          <label class="control-label" for="Estado">Estado</label>
          <input id="Estado" name="Estado" type="text" placeholder="" class="form-control input-md" required="Campo Obrigatorio">
        </div>
      </div>
      <br>

      <div class="row">
        <!-- Telefone-->
        <div class="col-md-2">
          <label class="control-label" for="Telefone">Telefone</label>
          <input id="Telefone" name="Telefone" type="text" placeholder="" class="form-control input-md">
        </div>
        <!-- CNES-->
        <div class="col-md-2">
          <label class="control-label" for="CNES">Código do CNES</label>
          <input id="CNES" name="CNES" type="text" placeholder="" class="form-control input-md">
          <span class="help-block">Até 8 digitos</span>
        </div>
        <!-- Login-->
        <div class="col-md-2">
          <label class="control-label" for="Login">Login</label>
          <input id="Login" name="Login" type="text" placeholder="" class="form-control input-md">
        </div>
        <!-- Senha-->
        <div class="col-md-2">
          <label class="control-label" for="Senha">Senha</label>
          <input id="Senha" name="Senha" type="password" placeholder="" class="form-control input-md">
          <span class="help-block">A Senha deve ter entre 4 a 10, caracteres entre letras e numeros</span>
        </div>
      </div>
      <br>
	
        <!-- Button (Double) -->
        <div class="form-group">
          <div class="col-md-4">
            <button type="submit" id="Salvar" name="Salvar" class="btn btn-primary">Salvar</button>
            <button type="reset" name="Limpar" class="btn btn-link" id="Limpar">Limpar</button>
          </div>
        </div>
      </div>
    </form>
	</div>
  </body>

</html>