<?php
include_once 'includes/msg.php';
include_once 'includes/header.php';
include_once 'action/db_connect.php';
?>


    <div class="center-align">
        <h3>Listagem Completa</h3>
    </div>

<div class="row">
    <div class="col s12 m6 push-m3">
        <br>
        <table class="highlight">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Descrição</th>
                    <th class="center-align" >Valor</th>
                    <th class="right" >Disponível para venda</th>
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
                            <td><?php echo $data['item'] ?></td>
                            <td><?php echo $data['descrição'] ?></td>

                            <td class="center-align" ><?php echo "R$".number_format($data['valor'],2,",",".")."";?></td>

                            <td class="right"><?php echo $data['venda']?><td>
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
        <a href="index.php" class="btn waves-effect waves-light orange right">Listagem resumida</a>
    </div>
</div>

<?php 
include_once 'includes/footer.php';
?>