<html>
<head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="/assets/twitter-bootstrap/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/assets/custom/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="/assets/font-awesome/css/font-awesome.css">
</head>
<body class="container-fluid">
    <header clas="row-fluid"><h1 class="text-center"><a href="http://protestando.org"><i class="icon-flag icon-white"></i> Protestando.org</a></h1></header>
    <nav>
        <div class="navbar">
            <div class="navbar-inner">
                <ul class="nav">
                    <li class="active"><a href="http://protestando.org"><i class="icon-flag icon-white"></i> Protestos</a></li>
                    <li><a href="/auth/show_users"><i class="icon-user icon-white"></i> Protestantes</a></li>
                </ul>
                <ul class="nav pull-right">
                    <?php if ($this->ion_auth->logged_in()):?>
                        <li class=""><a href="/auth/logout">Sair!</a></li>
                    <?php else:?>
                        <li class=""><a href="/auth/login"><i class="icon-signin "></i> Entrar!</a></li>
                        <li class=""><a href="/auth/create_user"><i class="icon-plus icon-white"></i> Cadastrar</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
    <section class="row-fluid" id="contents"><?= $contents ?></section>
    <footer class="row-fluid" id="footer"><a href="https://github.com/wouerner/protestando"><i class="icon-github"></i> Github</a></footer>
</body>
</html>
