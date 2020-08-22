<!-- incluindo o arquivo php -->
<?php require_once 'processo.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Crud - PHP</title>
        <style>
            * {
                margin : 0px;
                padding : 0px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">CRUD PHP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pessoas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="button dropdown-item"  data-toggle="modal" data-target="#exampleModal">Ações</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <?php if(isset($_SESSION['message'])): ?>
                <div class="alert alert-<?=$_SESSION['msg_type']?>" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    ?>
                    
                </div>
            <?php endif; ?>
            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content rounded-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                            <svg width="0.75em" height="0.75em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg>
                            Pessoas
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <!-- rotina para listar os itens do banco de dados  -->
                                <?php 
                                    // abrindo conexão com o banco de dados 
                                    $mysqli = new mysqli('localhost', 'root', '', 'erp_crud') or die(mysqli_error($mysqli));

                                    $resultado = $mysqli->query("SELECT * FROM erp_tb_pessoas") or die($mysqli->error);

                                    // pre_r($resultado->fetch_assoc());
                                ?>

                                <div class="row justify-content-center">
                                    <table class="table table-sm">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Nome</th>
                                                <th>Cidade</th>
                                                <th colspan="2">Ação</th>
                                            </tr>
                                        </thead>
                                        <?php while($linha = $resultado->fetch_assoc()): ?>
                                            <tr>
                                                <td><?php echo $linha['id']; ?></td>
                                                <td><?php echo $linha['nome']; ?></td>
                                                <td><?php echo $linha['cidade']; ?></td>
                                                <td>
                                                    <a href="index.php?edit=<?php echo $linha['id']; ?>" class="btn btn-info btn-sm rounded-0">Editar
                                                    <svg width="0.75em" height="0.75em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
                                                        <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
                                                    </svg>
                                                </a>
                                                    <a href="processo.php?delete=<?php echo $linha['id']; ?>" class="btn btn-danger btn-sm rounded-0">Apagar
                                                    <svg width="0.75em" height="0.75em" viewBox="0 0 16 16" class="bi bi-trash2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2.037 3.225l1.684 10.104A2 2 0 0 0 5.694 15h4.612a2 2 0 0 0 1.973-1.671l1.684-10.104C13.627 4.224 11.085 5 8 5c-3.086 0-5.627-.776-5.963-1.775z"/>
                                                        <path fill-rule="evenodd" d="M12.9 3c-.18-.14-.497-.307-.974-.466C10.967 2.214 9.58 2 8 2s-2.968.215-3.926.534c-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466zM8 5c3.314 0 6-.895 6-2s-2.686-2-6-2-6 .895-6 2 2.686 2 6 2z"/>
                                                    </svg>
                                                </a>
                                                </td>
                                            </tr>
                                        <?php endwhile; ?>
                                    </table>
                                </div>
                                <?php
                                    function pre_r($array) {
                                        echo '<pre>';
                                        print_r($array);
                                        echo '</pre>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary btn-sm rounded-0" data-dismiss="modal">Fechar</button> -->
                            <a href="processo.php?apagarTudo" class="btn btn-danger btn-sm rounded-0">Apagar tudo  
                            <svg width="0.80em" height="0.80em" viewBox="0 0 16 16" class="bi bi-exclamation-diamond" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                                <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 150px;">
                <form action="processo.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" >
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control rounded-0" value="<?php echo $nome; ?>" name="nome" />
                    </div>
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control rounded-0" value="<?php echo $cidade; ?>" name="cidade" />
                    </div>
                    <div class="form-group">
                        <?php if($update == true): ?>
                            <button type="submit" class="btn btn-info" name="update">Alterar</button>
                        <?php else: ?>
                            <button type="submit" class="btn btn-primary btn-block rounded-0" name="gravar">Salvar
                            <svg width="0.75em" height="0.75em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z"/>
                            </svg>
                            </button>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>