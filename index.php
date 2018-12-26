<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- fonte Ubuntu -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/progress-bar.css">
    <link rel="stylesheet" href="css/progress-circular.css">

    <title>Anderson Romão | Front End</title>
  </head>
  <body>

    <button id="buttonTop" class="btn shadow-none bg-detalhes"><i class="text-dark fas fa-arrow-up"></i></button>
    
    <!-- Barra de navegação -->
    <?include('inc/navbar.php');?>

    <!-- Banner e descrição -->
    <div id="index" class="jumbotron jumbotron-fluid">
      <div class="color-overlay">
        <div class="container h-100 d-flex">
          <div class="my-auto mx-auto texto">
            <img class="mx-auto d-block" src="imagens/logo.png" alt="ESCREVA_AQUI" title="ESCREVA_AQUI" width="40">
            <h1 class="display-3 font-media text-center mb-0">Anderson Romão</h1>
            <p class="text-center h1 sub-h2 mb-4 linha"><span>Front End</span></p><!-- h2 sub-h2 -->
            <!-- <p class="text-center">Não faço sites... Te faço ter uma identidade na internet<br>[MUDAR ESSA FRASE]</p> -->
            <div class="redes-sociais text-center">
              <a href="https://www.linkedin.com/in/anderson-santo-035883a2" target="_blank" rel="nofollow" class="btn btn-outline-light btn-lg rounded-circle mx-1" title="ESCREVA_AQUI"><i class="fab fa-linkedin-in"></i></a>
              <a href="https://github.com/andblade" target="_blank" rel="nofollow" class="btn btn-outline-light btn-lg rounded-circle mx-1" title="ESCREVA_AQUI"><i class="fab fa-github"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <main>

      <!-- descrição -->
      <section id="sobre">
        <div class="container">
          <div class="row my-5">
            <div class="col-12 col-md-4 border-r pr-4">
              <h2 class="text-center text-md-right h1 aspas">Sobre<br>Min</h2>
              <img src="imagens/imagem-02.jpg" class="rounded-circle d-block mx-auto float-md-right my-3" alt="Sobre Mim" title="Sobre Mim">
            </div>
            <div class="col-12 col-md-8 pl-4">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas est, incidunt hic non excepturi laborum impedit similique sed! Libero itaque culpa omnis illo alias sit expedita veniam accusantium ad delectus.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut magnam unde? Corporis quibusdam porro voluptate magnam officia magni, necessitatibus asperiores voluptatum delectus, dolor doloremque iste atque eius reprehenderit temporibus.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo dolor ullam, dicta libero obcaecati tenetur odio voluptatum deserunt expedita! Iusto quidem, mollitia corporis dignissimos quos. Asperiores expedita eius sunt harum!</p>
              <a href="#" title="ESCREVA_AQUI" class="btn bg-detalhes text-dark btn-sm" role="button">Resumo</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Habilidades -->
      <?#include('inc/progress-bar.php');?>
      <?include('inc/progress-circular.php');?>

      <!-- Projetos -->
      <section id="projetos">
        <div class="container2 my-5">
          <h2 class="text-center">Projeto</h2>
          <p class="text-center">Projetos que criei e que também contribuí</p>
          
          <div class="row mx-0 py-md-0">
            <div class="col-md-8 px-0 mb-sm-3 mb-3">
              <div class="mx-2 zoom">
                <a href="#" title="ESCREVA_AQUI">
                  <div class="clarear">
                    <img src="imagens/portfolio/laptop-01.jpg" height="200" class="w-100 img-medidas-iguais" alt="ESCREVA_AQUI" title="ESCREVA_AQUI">
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 px-0 mb-3">
              <div class="mx-2 zoom">
                <a href="#" title="ESCREVA_AQUI">
                  <div class="clarear">
                    <img src="imagens/portfolio/laptop-02.jpg" height="200" class="w-100 img-medidas-iguais" alt="ESCREVA_AQUI" title="ESCREVA_AQUI">
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row mx-0 py-md-0">
            <div class="col-md-4 px-0 mb-sm-3 mb-3">
              <div class="mx-2 zoom">
                <a href="#" title="ESCREVA_AQUI">
                  <div class="clarear">
                    <img src="imagens/portfolio/laptop-03.jpg" height="200" class="w-100 img-medidas-iguais" alt="ESCREVA_AQUI" title="ESCREVA_AQUI">
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-8 px-0 mb-3">
              <div class="mx-2 zoom">
                <a href="#" title="ESCREVA_AQUI">
                  <div class="clarear">
                    <img src="imagens/portfolio/laptop-04.jpg" height="200" class="w-100 img-medidas-iguais" alt="ESCREVA_AQUI" title="ESCREVA_AQUI">
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row mx-0 py-md-0">
            <div class="col-md-8 px-0 mb-sm-3 mb-3">
              <div class="mx-2 zoom">
                <a href="#" title="ESCREVA_AQUI">
                  <div class="clarear">
                    <img src="imagens/portfolio/laptop-05.jpg" height="200" class="w-100 img-medidas-iguais" alt="ESCREVA_AQUI" title="ESCREVA_AQUI">
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 px-0 mb-3">
              <div class="mx-2 zoom">
                <a href="#" title="ESCREVA_AQUI">
                  <div class="clarear">
                    <img src="imagens/portfolio/laptop-06.jpg" height="200" class="w-100 img-medidas-iguais" alt="ESCREVA_AQUI" title="ESCREVA_AQUI">
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="row mx-0 py-md-0">
            <div class="col-md-4 px-0 mb-sm-3 mb-3">
              <div class="mx-2 zoom">
                <a href="#" title="ESCREVA_AQUI">
                  <div class="clarear">
                    <img src="imagens/portfolio/laptop-04.jpg" height="200" class="w-100 img-medidas-iguais" alt="ESCREVA_AQUI" title="ESCREVA_AQUI">
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 px-0 mb-3">
              <div class="mx-2 zoom">
                <a href="#" title="ESCREVA_AQUI">
                  <div class="clarear">
                    <img src="imagens/portfolio/laptop-01.jpg" height="200" class="w-100 img-medidas-iguais" alt="ESCREVA_AQUI" title="ESCREVA_AQUI">
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-4 mt-sm-4 mb-3">
              <div class="h-100 d-flex">
                <a href="#" title="Veja Mais" class="btn btn-lg bg-detalhes text-dark mx-auto my-auto">Veja Mais</a>
              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Contato -->
      <section id="contato" class="bg-primaria text-white">
        <div class="container py-5">
          <h2 class="text-center">Entre em Contato</h2>

          <form action="" class="needs-validation my-5" novalidate>
            <div class="row">
              <div class="col-12 col-md">
                <div class="form-group">
                  <label for="formNome">Nome</label>
                  <input type="text" class="form-control" id="formNome" placeholder="Seu nome" required>
                  <div class="invalid-feedback">Informe seu nome</div>
                </div>
                <div class="form-group">
                  <label for="formTelefone">Telefone</label>
                  <input type="number" class="form-control" id="formTelefone" placeholder="Telefone para contato"
                  required>
                  <div class="invalid-feedback">Informe seu telefone</div>
                </div>
                <div class="form-group">
                  <label for="formEmail">E-mail</label>
                  <input type="email" class="form-control" id="formEmail" placeholder="E-mail" required>
                  <div class="invalid-feedback">Informe seu email</div>
                </div>
                
              </div>
              <div class="col-12 col-md">
                <div class="form-group">
                  <label for="formMensagem">Mensagem</label>
                  <textarea name="mensagem" id="formMensagem" rows="6" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn bg-detalhes btn-block">Enviar</button>
              </div>
            </div>
          </form>
          
        </div>
      </section>
      
    </main>

    <!-- Footer -->
    <footer class="bg-primaria border-top">
      <div class="container text-center text-white py-3">
        <span>Anderson Romão | Front End</span>
        <a href="https://www.linkedin.com/in/anderson-santo-035883a2" target="_blank" rel="nofollow" class="mx-2" title="LinkedIn"><i class="fab fa-linkedin-in text-white"></i></a>
        <a href="https://github.com/andblade" target="_blank" rel="nofollow" class="mx-2" title="GitHub"><i class="fab fa-github text-white"></i></a>
      </div>
    </footer>

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <!-- JavaScript (Opcional) -->
    <script src="js/funcoes.js"></script>
  </body>
</html>