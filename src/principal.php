<?php
session_start();

// Verifica se precisa limpar o carrinho
if (isset($_GET['clear']) && $_GET['clear'] == '1') {
    // Garante que o carrinho esteja vazio
    if (isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
        unset($_SESSION['carrinho']);
    }
    // Redireciona para remover os parâmetros da URL
    header('Location: principal.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="imagens/MR_processed.png" type="image/icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/principal.css"> 
    <link rel="manifest" href="../src/manifest.json">

    <title>MarketRecycla</title>
</head>

<body>
<?php
include "Include/navbar.php";
include "Include/main.php";
?>

<div class="bemvindo">
    <h1>Bem Vindo ao <span>MarketRecycla!</span></h1>
    <p>Uma empresa que conecta você à sustentabilidade ambiental e ao desenvolvimento de uma sociedade consciente com os cuidados da natureza através da reciclagem e reutilzação.</p>
</div>

<div class="paginas">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
 
  <div class="carousel-inner">
    <a href="https://www.ecommercebrasil.com.br/artigos/e-commerce-sustentavel-pratica" target="_blank">
    <div class="carousel-item active">
      <img src="imagens/empresa.webp" class="d-block w-100" alt="e-commerce sustentável">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:#275C39; font-weight:bold; white-space: nowrap; ;">MarketRecycla & Sustentabilidade</h5>
        <p  style="color:#275C39; font-weight:bold;"></p>
      </div>
    </div>
    </a>
    <a href="https://blog.brkambiental.com.br/reciclagem/"target="_blank">
    <div class="carousel-item">
      <img src="imagens/importancia.jpg" class="d-block w-100" alt="Reciclagem">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:green; font-weight:bold">Reciclagem</h5>
        <p style="color:green; font-weight:bold">Conheça a importância de reciclar.</p>
      </div>
    </div>
    </a>

    <a href="https://www.ecycle.com.br/como-reciclar/"target="_blank">
    <div class="carousel-item">
      <img src="imagens/comunidade.jpg" class="d-block w-100" alt="Reutilização">
      <div class="carousel-caption ">
        <h5 Style= "color:green; font-weight:bold ">Reutilização</h5>
        <p Style="color:green; font-weight:bold">O que fazer com materias já usados?</p>
      </div>
    </div>
    </a>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  </div>

</div>

<div class="produto">
  <h2>Na Prática</h2>
  <p>A compra de produtos que já estão usados, com o propósito de serem descartados, permite que você
    os reutilize para diversos fins, seja como um objeto de decoração, uso domestico ou até mesmo para algum projeto de feira de ciências.
    Além disso, você estará contribuindo para a preservação do meio ambiente, evitando que esses produtos sejam descartados de forma incorreta, vendo ao mesmo tempo como esse ramo gera lucro e empregos para a sociedade.</p>
</div>

<div class="imagem">
<img src="imagens/exemplo.jpg" alt="Exemplo de Reutilização">
</div>

<?php
include "Include/footer.php"
?>
   

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
    if (localStorage.getItem('limpar_carrinho') === 'true') {
        fetch('controllers/limpar_carrinho.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(() => {
            localStorage.removeItem('limpar_carrinho');
            location.reload();
        });
    }
    </script>
</body>

</html>