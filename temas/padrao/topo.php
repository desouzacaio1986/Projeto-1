<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo carregarnome1()?> - <?php echo carregarnome2()?></title>
<style>
<?php
function estilo_padrao()
{
$css_padrao = "temas/padrao/css/padrao1.css";
include("$css_padrao");
}
estilo_padrao()
?>
</style>
<div class="topo">
<ul class="logo">
<li><?php echo carregarnome1()?></li>
<li><?php echo carregarnome2()?></li>
</ul>
<ul class="menu">
<li><a href="#">inicio</a></li>
<li><a href="#">mini games</a></li>
<li><a href="#">regras</a></li>
<li><a href="#">staffs</a></li>
<li><a href="#">doação</a></li>
<li><a href="#">contato</a></li>
<li><a href="#">login</a></li>
</ul>
</div>
</head>
