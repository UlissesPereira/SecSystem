<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  
  <body>
    <div class="col-md-10 col-md-offset-2">
		<form action="?= base_url()?>Recurso/CadastraRecurso" method="POST"><!-- Form Name -->
      <div>
        <legend>Cadastro de Recurso</legend>
      </div>

      <div class="row">
        <!-- Código-->
        <div class="col-md-2">
          <label class="control-label" for="idRecurso">Código</label>
          <input id="idRecurso" name="idRecurso" type="text" placeholder="" class="form-control input-md">
          <span class="help-block">Até 4 digitos.</span>
        </div>
        <!-- Nome-->        
        <div class="col-md-2">
            <label class="control-label" for="Valor">Valor Total do Recurso</label>
            <input id="Valor" name="Valor" type="text" placeholder="" class="form-control input-md">
        </div>
        <!-- Fonte-->
        <div class="col-md-2">
          <label class="control-label" for="Fonte">Fonte:</label>
          <input id="Fonte" name="Fonte" type="text" placeholder="" class="form-control input-md">
        </div>
      </div>
      <br>

      <div class="row">
        <!-- DataLancamento -->
        <div class="col-md-2">
          <label class="control-label" for="DataLancamento">Competencia/Data de Lançamento</label>
          <input id="DataLancamento" name="DataLancamento" type="text" placeholder="_/___" class="form-control input-md">
        </div>
        <!-- Descricao-->
        <div class="col-md-3">
          <label class="control-label" for="Descricao">Descrição</label>
          <input id="Descricao" name="Descricao" type="text" class="form-control input-md">
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