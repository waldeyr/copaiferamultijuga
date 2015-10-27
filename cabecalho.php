<head>
    <meta charset="UTF-8">
    <title>Copaifera multijuga</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.1.js.js"/>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script> 
    <script src="js/validacoes.js"></script>
</head>

<body>
    <div class="container clearfix">
        <header class="header">
            
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="publications.php">Publications</a></li>
                    <li><a href="pathways.php">Metabolic Pathways</a></li>
                    <li><a href="<?php echo ($_SESSION['logado'] == 1) ? 'logout.php' : 'login.php'; ?>"><?php echo ($_SESSION['logado'] == 1) ? 'Logout' : 'Login'; ?></a></li>
                </ul>
            </nav>
        </header>

        <div class="banner">
            <div class="caixa">
                <h1><i>Copaifera multijuga Haynes</i></h1>
            </div>
        </div>