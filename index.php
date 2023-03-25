<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
   <!-- CORPO -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php">HOME</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="?page=novo">Novo Usuário</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="?page=listar">Listar</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
      <div class="container">
      <div class="row">
      <div class="col mt-5">
            <?php
              include("config.php");
              switch(@$_REQUEST["page"]){
                case "novo":
                  include("novo-usuario.php");
                break;
                case "listar":
                  include("listar-usuario.php");
                break;
                case "salvar":
                  include("salvar-usuario.php");
                  break;
                default:
                  print "<h1>Bem vindo!</h1>";
              }
              ?>
            </div>
        </div>
      </div>
     <!-- JavaScript (Opcional) -->
     <script src="js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- JavaScript (Opcional) -->
</body>
</html>