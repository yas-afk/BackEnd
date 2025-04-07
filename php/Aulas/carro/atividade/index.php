<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comidas</title>
 <link rel="stylesheet" href="styles/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <header>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Procurar produto" aria-label="Search">
            <button class="btn btn-outline-danger" type="submit">Pesquisar</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <section id="categorias" class="container-fluid d-flex flex-column align-items-center">
      <h2 class="text-light">Comidas na oferta:</h2>
     
      <div id="categoriaItems" class="container-fluid d-flex justify-content-center my-4 flex-wrap gap-3">

     
    </section>
  <main>
    <section id="banner">
      <div id="carouselExampleIndicators" class="carousel slide w-90  mx-auto shadow-1g">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
            aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"
            aria-label="Slide 6"></button>
            
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/salada.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/chocolate.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/atividade3.png" class="d-block w-100" alt="...">
            <div class="carousel-item">
            <img src="images/lasanha.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="images/hamburguer.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="carro/atividade/pizza.png" class="d-block w-100" alt="...">

          </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </section>


</main>
<section id="categorias" class="container-fluid d-flex flex-column align-items-center">
      <h2 class="text-light">Venham conhecer o nosso catágolo!!!</h2>
     
      <div id="categoriaItems" class="container-fluid d-flex justify-content-center my-4 flex-wrap gap-3">

     
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="scripts/scripts.js">

  </script>

</body>

</html>