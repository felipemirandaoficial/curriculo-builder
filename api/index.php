<?php

$nome=$_POST['nome']??'';
$cargo=$_POST['cargo']??'';
$cidade=$_POST['cidade']??'';
$telefone=$_POST['telefone']??'';
$email=$_POST['email']??'';
$linkedin=$_POST['linkedin']??'';
$resumo=$_POST['resumo']??'';

$skills=$_POST['skills']??[];
$empresa=$_POST['empresa']??[];
$cargoexp=$_POST['cargoexp']??[];
$periodo=$_POST['periodo']??[];

$faculdade=$_POST['faculdade']??[];
$curso=$_POST['curso']??[];
$periodoform=$_POST['periodoform']??[];

$certificados=$_POST['certificados']??[];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Currículo</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{background:#FFF;font-size:12px;line-height:1.3;}

.container{max-width:880px;}

.section-title{
border-bottom:2px solid #007bff;
padding-bottom:2px;
margin-top:14px;
margin-bottom:6px;
font-weight:bold;
font-size:14px;
}

.qrcode{
position:fixed;
bottom:20px;
right:20px;
text-align:center;
font-size:11px;
}

.qrcode img{width:90px;}

</style>

</head>

<body>

<div class="container">

<h1 class="text-center text-primary"><?=htmlspecialchars($nome)?></h1>

<h5 class="text-center"><?=htmlspecialchars($cargo)?></h5>

<p class="text-center"><?=htmlspecialchars($cidade)?></p>

<p class="text-center">

<strong>Telefone:</strong> <?=htmlspecialchars($telefone)?> |
<strong>Email:</strong> <?=htmlspecialchars($email)?>

</p>

<p class="text-center">

<strong>LinkedIn:</strong>
<a href="<?=$linkedin?>" target="_blank"><?=$linkedin?></a>

</p>

<div class="section-title">Resumo Profissional</div>

<p><?=nl2br(htmlspecialchars($resumo))?></p>

<div class="section-title">Competências Técnicas</div>

<ul>
<?php foreach($skills as $s){ ?>
<li><?=htmlspecialchars($s)?></li>
<?php } ?>
</ul>

<div class="section-title">Experiência Profissional</div>

<ul>

<?php

for($i=0;$i<count($empresa);$i++){

echo "<li><strong>".htmlspecialchars($empresa[$i])."</strong><br>";

echo htmlspecialchars($cargoexp[$i])." (".htmlspecialchars($periodo[$i]).")</li>";

}

?>

</ul>

<div class="section-title">Formação Acadêmica</div>

<ul>

<?php

for($i=0;$i<count($faculdade);$i++){

echo "<li><strong>".htmlspecialchars($faculdade[$i])."</strong> – ";

echo htmlspecialchars($curso[$i])." (".htmlspecialchars($periodoform[$i]).")</li>";

}

?>

</ul>

<div class="section-title">Certificações</div>

<ul>

<?php foreach($certificados as $c){ ?>

<li><?=htmlspecialchars($c)?></li>

<?php } ?>

</ul>

</div>

<div class="qrcode">

LinkedIn<br>

<img src="https://api.qrserver.com/v1/create-qr-code/?size=120x120&data=<?=urlencode($linkedin)?>">

</div>

</body>
</html>