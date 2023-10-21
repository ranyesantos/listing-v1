<?php 
include_once '../includes/header.php';
?>
    <div class="center-align" >
        <h3>Adicionar Produto</h3>
    </div>
<div class="row">
    <div class="col s12 m4 push-m4">
       <form action="../action/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="prod" required id="prod">
                <label for="prod">Produto</label>
            </div>

            <div class="input-field col s12">
                <textarea required name="desc" id="desc" class="materialize-textarea" type="text"></textarea>
                <label for="desc">Descrição</label>
            </div>

            <div class="input-field col s12">
                <input type="number" required name="val" step=".01" id="val">
                <label for="val">Valor(R$)</label>
            </div>
            
            <div class="input-field col s12">
                <p>
                    <label>Disponível para Venda?</a>
                        <select name="sell" required="required" >
                        <option value="Sim">Sim</option>
                        <option value="Não">Não</option>
                    </select>
                </p>
            </div>

            <button type="submit" name="sub-button" class="btn waves-effect waves-light blue">
             Finalizar
            </button>
            <div class="right">
                <a href="../index.php" class="btn waves-effect waves-light orange right">Listagem</a>
            </div>
       </form>
    </div>
</div>

<?php 
include_once '../includes/footer.php';
?>