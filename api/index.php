<?php

$name = $_POST['name'] ?? '';
$title = $_POST['title'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$city = $_POST['city'] ?? '';
$linkedin = $_POST['linkedin'] ?? '';
$summary = $_POST['summary'] ?? '';

$empresa = $_POST['empresa'] ?? [];
$cargo = $_POST['cargo'] ?? [];
$periodo = $_POST['periodo'] ?? [];

$faculdade = $_POST['faculdade'] ?? [];
$curso = $_POST['curso'] ?? [];
$periodoform = $_POST['periodoform'] ?? [];

$certificacao = $_POST['certificacao'] ?? [];

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

<title>Currículo</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
font-size:12px;
background:white;
}

.container{
max-width:900px;
}

.section-title{
border-bottom:2px solid #007bff;
margin-top:15px;
font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h1 class="text-center text-primary"><?=htmlspecialchars($name)?></h1>

<h5 class="text-center"><?=htmlspecialchars($title)?></h5>

<p class="text-center">

<?=$city?> |
<?=$phone?> |
<?=$email?>

</p>

<p class="text-center">

<a href="<?=$linkedin?>"><?=$linkedin?></a>

</p>

<div class="section-title">Resumo</div>

<p><?=$summary?></p>

<div class="section-title">Experiência</div>

<ul>

<?php

for($i=0;$i<count($empresa);$i++){

echo "<li><b>{$empresa[$i]}</b><br>{$cargo[$i]} ({$periodo[$i]})</li>";

}

?>

</ul>

<div class="section-title">Formação</div>

<ul>

<?php

for($i=0;$i<count($faculdade);$i++){

echo "<li><b>{$faculdade[$i]}</b> - {$curso[$i]} ({$periodoform[$i]})</li>";

}

?>

</ul>

<div class="section-title">Certificações</div>

<ul>

<?php

foreach($certificacao as $c){

echo "<li>$c</li>";

}

?>

</ul>

</div>

</body>
</html>
