<html>
<head>
    <title>O CS: GO</title>
</head>
<body>
<center>
<link type="text/css" rel="stylesheet" href="maa/estilo.css" />

    <?php
        session_start();
        if(isset($_SESSION['msg'])){
          echo $_SESSION['msg'];
          unset($_SESSION['msg']);
        }
        include_once("conecta.inc.php");
        include_once("topo.php");
        include_once("menu.php");
    
        if(empty($_SERVER["QUERY_STRING"])){
            $var = "conteudo.php";
            include_once("$var");
        }else{
            $pg = $_GET['pg'];
            include_once("$pg.php");
        }
    
        include_once("rodape.php");
    ?>
    </center>
</body>
</html>