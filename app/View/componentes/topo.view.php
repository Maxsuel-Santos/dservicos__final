<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./././public/img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="<?=css('style')?>">
    <title>D+ Serviços | Site de contratação de serviços online</title>
</head>
<body>
    <!--=============== CABEÇALHO ===============-->
    <header id="cabecalho">
        <section id="logo">
            <a href="<?= linkUrl('home') ?>">
                <img src="<?=imagem('dServicosAzulPreto.png')?>" alt="D+ SERVIÇOS">
            </a>
        </section>

        <nav id="menu">
            <ul>
                <li><a href="<?= linkUrl('login') ?>" target="_self" rel="author">Login</a></li>
                <li><a href="<?= linkUrl('cadastroprofissional') ?>" target="_self" rel="author" class="btn__header">Seja um profissional</a></li>
            </ul>
        </nav>
    </header>