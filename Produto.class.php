<?php

class Produto{
    //declaracao de variaveis publicas e privadas
    public $conexao;
    public $banco;
    public $db;
    public $var;
    public $val;
    public $id;
    public $cat_id;
    public $cat_nome;
    private $nome;
    private $valor;
    private $quantidade;

    // Metodo construtor setamos aqui o que queremos que ele faça ao criar o objeto
    function __construct(){
        //criamos a nossa conexao com o banco de dados e selecionamos o banco
        $conexao = mysql_pconnect("localhost","root","") or die (mysql_error());
        $banco = mysql_select_db("oo");
    }
    
    
    
    /* O metodo __set e responsavel por receber o nome da propriedade e o valor a ser atribuido, podendo atribuir ou nao*/
    function __set($var, $val){
        $this->$var = $val;
    
    }
    
    function setProduto(){
        //realiza o insert no banco de dados passando os valores do objeto criado
        $insertProdutos = mysql_query("insert into produtos values(null,'$this->nome','$this->valor', '$this->quantidade','$this->categoria')");

        if($insertProdutos){
            $resposta="Inserido com sucesso";
        }else{
            $resposta ="Erro ao inserir";
        }
       
        return $resposta;
    }  
    
    
    function getProduto(){
        /* realiza o select no banco de dados e seleciona e guarda as informações na variavel $getProdutos,
        note que foi usava a chave estrangeira(utilizamos quando precisamos fazer alguma relacao com as tabelas) categoria que esta na tabela produto.
        */
        $getProdutos = mysql_query("select * from produtos, categorias where categoria = '$this->cat_id' and categoria = cat_id ");
        //este while serve para ir pegando os dados do select e enquanto existirem serem atribuidos a sua variavel e logo apos mostra-los na tela
        while($l = mysql_fetch_array($getProdutos)){
            $this->nome = $l["nome"];
            $this->valor = $l["valor"];
            print '<br>Nome:'.$this->nome."<br>";
            print 'Valor: R$ '.$this->valor."<br>";
        }
    }
    
    /* funcao que criei para fazer um select na tabela categorias e retornar todas as catergorias cadastradas dentro de um combo box(select) */
    function getSelect(){
        $getSelect = mysql_query("select * from categorias");
        print "<label for='Categoria'>Categoria:<br>";
        print "<select name='Categoria'>";
        while($l = mysql_fetch_array($getSelect)){
            $this->cat_id = $l["cat_id"];
            $this->cat_nome = $l["cat_nome"];
            /*veja que o value do option e o cat_id e o cat_nome e apenas o que aparece para o usuario. E este cat_id que será salvo na tabela categorias no campo categoria, para podermos fazer a nossa associacao*/
            print "<option value='{$this->cat_id}'>{$this->cat_nome}</option>";
        }
        print "</select>";
        print "</label>";
    }
}


?>