<?php
include_once 'includes/msg.php';
include_once 'includes/header.php';
include_once 'action/db_connect.php';
?>


    <div class="center-align">
        <h3>Listagem de Produtos</h3>
    </div>

<div class="row">
    <div class="col s12 m4 push-m4">
        <br>
        <table class="highlight">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th class="center-align">Valor</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    $sql = "SELECT * FROM products ORDER BY valor ASC";
                    $show = mysqli_query($connect, $sql);

                    if(mysqli_num_rows($show)>0){
                        while($data = mysqli_fetch_array($show)){
                ?>
                        <tr>
                            <td><?php echo $data['item']?></td>
                            <td class="center-align"><?php echo "R$".number_format($data['valor'],2,",",".").""?></td>

                            <td class="right">
                                <a href="#modal<?php echo $data['id'] ?>" class="red btn-floating btn-small waves-effect waves-light modal-trigger"><i class="material-icons">delete</i></a>
                            </td>
                            
                            <div id="modal<?php echo $data['id'];?>"class="modal">
                                <div class="modal-content">
                                    <h4>Excluir</h4>
                                    <p>Deseja excluir esse registro?</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="action/delete.php" method="POST" >
                                        <input type="hidden" name="id" value="<?php echo $data['id']?>">
                                        <button type="submit" class="waves-effect waves-light btn red" name="del-button">Excluir</button>
                                        <a href="#!" class="modal-action modal-close waves-effect waves-light btn blue">Cancelar</a>
                                        <br>
                                    </form>
                                </div>
                            </div>

                            <td class="right">
                                <a href="edit.php?id=<?php echo $data['id'] ?>" class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">edit</i></a>
                            </td>
                        </tr>
                <?php
                    } 
                 }
                 else {
                    ?>
                    <td class="left" >
                        <p> Nenhum Registro</p>
                    </td>

                  <?php
                 }
                ?>
            </tbody>
            <br>
     
        </table>
        <br>
        <a href="add.php" class="btn waves-effect waves-light blue">Adicionar Produto</a>
        <a href="complete.php" class="btn waves-effect waves-light orange right">Listagem Completa</a>
    </div>
</div>

<?php 
include_once 'includes/footer.php';
?>