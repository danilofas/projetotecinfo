<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>
        <?php echo $page_title ?>
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- CSS import -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="../css/materialize.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
</head>

<body>
    <header>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="../paginas/newClient.php">Clientes</a></li>
            <li class="divider"></li>
            <li><a href="../paginas/newUser.php">Usuários</a></li>
            <li class="divider"></li>
            <li><a href="../paginas/newProduct.php">Produtos</a></li>
            <li class="divider"></li>
            <li><a href="../paginas/newOrder.php">Pedidos</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
            <li><a href="../paginas/searchClient.php">Clientes</a></li>
            <li class="divider"></li>
            <li><a href="!#">Usuários</a></li>
            <li class="divider"></li>
            <li><a href="../paginas/searchProduct.php">Produtos</a></li>
            <li class="divider"></li>
            <li><a href="!#">Pedidos</a></li>
        </ul>
        <ul id="dropdown3" class="dropdown-content">
            <li><a href="../paginas/listClients.php">Clientes</a></li>
            <li class="divider"></li>
            <li><a href="../paginas/listUsersOO.php">Usuários</a></li>
            <li class="divider"></li>
            <li><a href="../paginas/listProducts.php">Produtos</a></li>
            <li class="divider"></li>
            <li><a href="../paginas/listOrders.php">Pedidos</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper">
                <a href="../paginas/home.php" class="brand-logo">SENAC</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="dropdown-trigger" href="!#" data-target="dropdown1">Cadastrar</a></li>
                    <li><a class="dropdown-trigger" href="!#" data-target="dropdown2">Pesquisar</a></li>
                    <li><a class="dropdown-trigger" href="!#" data-target="dropdown3">Listar</a></li>
                    <li><a href="../_phpaction/actionLogout.php">Logout</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    </header>