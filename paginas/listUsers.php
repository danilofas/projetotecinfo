<?php
$page_title = "Lista de usuários";
include_once('../_includes/header.php');
require_once('../_includes/dbconnection.php');


?>

    <div class="container">
        <div class="row">
            <table class="striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Usuário</th>
                        <th>Matrícula</th>
                        <th>Cargo</th>
                        <th colspan="2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM usuarios";
                    mysqli_set_charset($connect, "utf8");

                    $resultadoUsuarios = mysqli_query($connect, $sql);

                    while($rowDados = mysqli_fetch_assoc($resultadoUsuarios)){
                    ?>
                        <tr>
                            <td><?php echo ucwords($rowDados['nome']); ?></td>
                            <td><?php echo $rowDados['email']; ?></td>
                            <td><?php echo $rowDados['usuario']; ?></td>
                            <td><?php echo $rowDados['matricula']; ?></td>
                            <td><?php echo ucwords($rowDados['cargo']);?></td>
                            <td><a href="editarUser.php?id=<?php echo $rowDados['id']; ?>" class="btn-floating grey"><i class="material-icons">edit</i></a></td>
                            <td><a title="Deletar usuário?" href="#modal?id=<?php echo $rowDados['id']; ?>" class="btn-floating red waves-effect waves-light btn modal-trigger"><i class="material-icons">delete</i></a></td>

                             <!-- Modal Structure -->
                             <div id="modal?id=<?php echo $rowDados['id']; ?>" class="modal">
                                <div class="modal-content">
                                <h4>Tem certeza que deseja apagar esse usuário?</h4>
                                    <form action="../_phpaction/actionDeleteUser.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $rowDados['id']; ?>" />
                                        <div class="modal-footer">
                                        <button type="submit" class="btn red">Excluir</button>
                                        <a href="listUsers.php" class="modal-close waves-effect waves-green btn green">Cancelar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

    <?php
    mysqli_close($connect);
    include_once('../_includes/footer.php')

?>