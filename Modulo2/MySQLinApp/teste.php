<?php
define('DB_HOST'        , "dbweb01,1433");
define('DB_USER'        , "webdombosco");
define('DB_PASSWORD'    , "D0mB0sc02014");
define('DB_NAME'        , "DomBosco");
define('DB_DRIVER'      , "sqlsrv");

require_once "Conexao.php";

try{

    $Conexao    = Conexao::getConnection();
    $query      = $Conexao->query("SELECT TOP (1000) * FROM [DomBosco].[dbo].[banners]");
    $produtos   = $query->fetchAll();

 }catch(Exception $e){

    echo $e->getMessage();
    exit;

 }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Conexão PDO SQL Server</title>
</head>
<body>
  <form>
        <table border=1>
            <tr>
               <td>Nome</td>
               <td>Preço</td>
               <td>Quantidade</td>
            </tr>
            <?php
               foreach($produtos as $produto) {
            ?>
            <tr>
                <td><?php echo $produto['nome']; ?></td>
                <td>R$ <?php echo $produto['preco']; ?></td>
                <td><?php echo $produto['quantidade']; ?></td>
            </tr>
            <?php
               }
            ?>
        </table>
    </form>
</body>
</html>