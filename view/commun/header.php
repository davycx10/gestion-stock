<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Gestion Stock</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        
                        <!-- Menu Accueil -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=accueil"><i class="bi bi-box"></i> Accueil</a>
                        </li>

                        <!-- Menu Produits -->
                        <li class="nav-item">
                            <a class="nav-link" href="/products"><i class="bi bi-box"></i> Produits</a>
                        </li>

                        <!-- Menu Type de produits avec sous-menu -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="typeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-tags"></i> Types de Produits
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="typeDropdown">
                                <li><a class="dropdown-item" href="/types/informatique">Informatique</a></li>
                                <li><a class="dropdown-item" href="/types/bureau">Bureau</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li class="dropdown-submenu dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#">Informatique</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/types/informatique/claviers">Claviers</a></li>
                                        <li><a class="dropdown-item" href="/types/informatique/souris">Souris</a></li>
                                        <li><a class="dropdown-item" href="/types/informatique/ecrans">Écrans</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Exemple d’un menu Stock -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/stock"><i class="bi bi-clipboard-data"></i> Stock</a>
                        </li> -->
                    </ul>

                    <!-- Menu Utilisateur avec sous-menu -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person"></i> Utilisateur
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="/login"><i class="bi bi-box-arrow-in-right"></i> Connexion</a></li>
                                <li><a class="dropdown-item" href="/register"><i class="bi bi-person-plus"></i> Inscription</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/users"><i class="bi bi-people"></i> Liste des utilisateurs</a></li>
                                <li><a class="dropdown-item text-danger" href="/logout"><i class="bi bi-box-arrow-right"></i> Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <!-- Contenu principal -->
    </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>