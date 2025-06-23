<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Loja Informática</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>Loja Informática</h1>
    <nav>
      <a href="#">Início</a>
      <a href="#">Produtos</a>
      <a href="#">Contato</a>
    </nav>
  </header>

  <main>
    <h2>Produtos em Destaque</h2>
    <div class="produtos">
      <div class="produto">
        <img src="img/laptop.jpg" alt="Laptop HP">
        <h3>Laptop HP i5</h3>
        <p>Preço: 350.000 Kz</p>
        <button onclick="verDetalhes('laptop')">Ver Detalhes</button>
      </div>
      <div class="produto">
        <img src="img/teclado.jpg" alt="Teclado">
        <h3>Teclado Mecânico RGB</h3>
        <p>Preço: 25.000 Kz</p>
        <button onclick="verDetalhes('teclado')">Ver Detalhes</button>
      </div>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 Loja Informática</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
