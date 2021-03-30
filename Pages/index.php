<?php 
    include('../Includes/header.php');
    include('../Acoes/cadastrar.php');
    session_start();
    if(empty($_SESSION['loggedin'])){
        header("Location: login.php");
        exit;
    }
?>
<body class="bg-light">
    <div class="container">
        <h1 class="text-info text-center p-3">CRUD PDO</h1>
        <div class="row">
            <div class="col-md-12 mt-4">
                <form name="formulario" method="post" action="index.php">
                    <div class="form-group">
                        <input autocomplete="off" type="text" class="form-control form-control-sm" placeholder="DIGITE SEU NOME" id="nome" name="nome">
                    </div>
                    <div class="form-group">
                        <input autocomplete="off" type="text" class="form-control form-control-sm" placeholder="DIGITE SEU E-MAIL" id="email" name="email">
                    </div>
                    <div class="form-group form-row">
                        <div class="col">
                        <input autocomplete="off" type="text" class="form-control form-control-sm" placeholder="DIGITE SUA CIDADE" id="cidade" name="cidade">
                        </div>
                        <div class="col">
                        <input autocomplete="off" type="text" class="form-control form-control-sm" placeholder="DIGITE SEU ESTADO" id="estado" name="estado">
                        </div>
                        <div class="col-1">
                        <input autocomplete="off" type="text" class="form-control form-control-sm" placeholder="ID" id="id" name="id">
                        </div>                     
                    </div>
                    <div class="form-group">
                        <input type="submit" name="btnSalvar" class="btn btn-success m-1" value ="Salvar">
                        <input type="submit" name="btnEditar" class="btn btn-info m-1" value ="Editar">
                        <input type="submit" name="btnDeletar" class="btn btn-danger m-1" value ="Deletar">                                                        
                    </div>  
                </form>
            </div>
            <div class="col-md-12 mt-2 text-right">               
                <?php include('../Includes/tabela.php')?>
                <small>Usuário Logado: <?=$_SESSION['loggedin']?>
                <a name="btnSair" class="btn btn-danger btn-sm" href="../Acoes/logout.php">Sair</a>   </small>                                
            </div>
        </div>
    </div>
</body>
<?php include('../Includes/footer.php')?>
