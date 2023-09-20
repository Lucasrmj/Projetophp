<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>

    * {
    font-family:'Quicksand', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

      #navbar {
        height: 10vh;
      }
      
    </style>

    <title>Document</title>
</head>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" id="navbar">
                <div class="container">
                  <a class="navbar-brand" href="../index.php">
                    <img src="../img/logo.png" height="50px" width="150px">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php"id="palavras">
                        <img src="../img/Home.png" height="35px" width="35px">
                        Home
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="../img/Usuário.png" height="35px" width="35px">
                          Usuário
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="../cadastro/cadastro.php" id="palavras2">Cadastro</a></li>
                          <li><a class="dropdown-item" href="../login/login.php" id="palavras2">Login</a></li>
                          <li><a class="dropdown-item" href="../adm/adm.php" id="palavras2">ADM</a></li>
                          <li><a class="dropdown-item" href="../adm/consultaparametro.php" id="palavras2">Consultar Produtos</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="../img/categoria.png" height="35px" width="35px">
                          Categorias
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="../generos/acao.php">Ação</a></li>
                          <li><a class="dropdown-item" href="../vgeneros/suspense.php">Suspense</a></li>
                          <li><a class="dropdown-item" href="../generos/terror.php">Terror</a></li>
                          <li><a class="dropdown-item" href="../generos/romance.php">Romance</a></li>
                          <li><a class="dropdown-item" href="../generos/drama.php">Drama</a></li>
                          <li><a class="dropdown-item" href="../generos/scifi.php">Sci-fi</a></li>
                          <li><a class="dropdown-item" href="../generos/ficcao.php">Ficção</a></li>
                          <li><a class="dropdown-item" href="../generos/historia.php">História</a></li>
                          <li><a class="dropdown-item" href="../generos/mangas.php">Mangás</a></li>
                          <li><a class="dropdown-item" href="../generos/artes.php">Arte</a></li>
                          <li><a class="dropdown-item" href="../generos/culinaria.php">Culinaria</a></li>
                        </ul>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../contato/contato.php" id="palavras">
                        <img src="../img/arroba.png" height="35px" width="35px">
                        Fale Conosco
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>