<?php
function iniciar_configuração()
{
$configuracao = "configuracao/configuracao.php";  
include("$configuracao");
}
function iniciar_template()
{
$inicio_html = "temas/padrao/html.php";
include("$inicio_html");
} 
function inciar_cabecario()
{
$cabecario = "temas/padrao/topo.php";
include("$cabecario");
}
function iniciar_rodape()
{
$rodape = "temas/padrao/rodape.php";
include("$rodape");
}
?>

<?php iniciar_configuração(); ?>
<?php iniciar_template(); ?>
<?php inciar_cabecario(); ?>
<?php iniciar_rodape()?>