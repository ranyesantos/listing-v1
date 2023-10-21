<?php 
include_once '../includes/header.php';
include_once '../action/db_connect.php';

if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect,$_GET['id']);
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    $data = mysqli_fetch_array($result);
}
?>
    <div class="center-align" >
        <h3>Editar</h3>
    </div>
<div class="row">
    <div class="col s12 m4 push-m4">
       <form action="../action/update.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="prod" value="<?php echo $data['item'] ?>" required id="prod">
                <label for="prod">Produto</label>
            </div>

            <div class="input-field col s12">
                <textarea required name="desc" id="desc" class="materialize-textarea" type="text"><?php echo $data['item'] ?></textarea>
                <label for="desc">Descrição</label>
            </div>

            <div class="input-field col s12">
                <input type="number" required name="val" value="<?php echo $data['valor'] ?>" id="val">
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
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

            <button type="submit" name="edit-button"  class="btn waves-effect waves-light blue">
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