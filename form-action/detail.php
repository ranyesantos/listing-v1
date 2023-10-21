<?php 
include_once '../includes/header.php';
include_once '../action/db_connect.php';

if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect,$_GET['id']);
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $result = mysqli_query($connect,$sql);
    $data = mysqli_fetch_array($result);
}

$texto = $data['descrição'];
?>
    <div class="center-align" >
        <h3>Detalhes do produto</h3>
    </div>
<div class="row">
    <div class="col s12 m4 push-m4">
       <form action="../action/update.php" method="POST">
            <div class="input-field col s12">
                <input readonly value="<?php echo $data['item'] ?>" id="prod" type="text">
                <label for="prod">Produto</label>
            </div>

            <div class="input-field col s12">
                <textarea readonly name="desc" id="desc" class="materialize-textarea"  type="text"><?php echo $data['descrição'] ?></textarea>
                <label for="desc">Descrição</label>
            </div>

            <div class="input-field col s12">
                <input name="val" readonly value="<?php echo $data['valor'] ?> " id="val" type="text">
                <label for="val">Valor(R$)</label>
            </div>
            
            <div class="input-field col s12">
                <input name="venda" readonly value="<?php echo $data['venda']?> " id="venda" type="text" >
                <label for="venda">Disponível para venda?</label>
            </div>

            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

            <a href="../index.php" class="btn waves-effect waves-light orange right">Retornar</a>    
       </form>
    </div>
</div>

<?php 
include_once '../includes/footer.php';
?>