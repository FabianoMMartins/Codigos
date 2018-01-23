<?php

include_once('Produto.class.php');
// pega a variavel GET que passamos no action do form
if (isset($_GET['acao'])){
$acao = $_GET['acao'];

// Verifica qual formulario foi submetido
    switch($acao) {
        //se for setProduto
        case "setProduto":{
            //Criando e Instanciando o objeto
            $produto1 = new Produto;
            //Atribuindo valores ao objeto
            $produto1->nome = $_POST['Nome'];
            $produto1->valor = $_POST['Valor'];
            $produto1->quantidade = $_POST['Quantidade'];
            $produto1->categoria = $_POST['Categoria'];
            //chamando a funcao que faz o insert
            $produto1->setProduto();
            }
            break;
        //se for setProduto
        case "getProduto": {
            $getProduto = new Produto;
            $getProduto->cat_id = $_POST['Categoria'];
            $getProduto->getProduto();
        }
        break;
    }

}
?>
<html>
<body>
    <p>Incluir Dados</p>
    <form action="<?php $SELF_PHP;?>?acao=setProduto" method="post" >
    <label for="Nome">
    Nome:
    <br />
    <input type="text" name="Nome"/></label>
    <br />
    <label for="Valor">Valor:
    <br />
    <input type="text" name="Valor" /></label>
    <br />
    <label for="Quantidade">Quantidade:
    <br />
    <input type="text" name="Quantidade" /></label>
    <br />
    
    <?php $getSelect = new Produto;
        $getSelect->getSelect(); ?>
    <br />
    <br />
    <input type="submit" value="Enviar" />
    </form>
    <p>Resgatar Dados</p>
    <form method="post" action="<?php $SELF_PHP;?>?acao=getProduto" >
        <?php $getSelect->getSelect(); ?>
        <input type="submit" value="Listar Produtos" />
    </form>
</body>
</html>