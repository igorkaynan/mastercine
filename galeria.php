<?php include "cabecalho.php"?>

<?php

$filme1 = ["titulo" => "A Investigação",
"nota" =>9.1, 
"sinopse" => "O detetive é consumido pela conduta da moça e os inexplicáveis acontecimentos que giram em torno dela.",
"poster"=> "Imagem/1.jpg"
];

$filme2 = ["titulo" => "Mulher Maravilha",
"nota" =>9.2, 
"sinopse" => "Lutando para acabar com todas as lutas, Diana percebe o alcance de seus poderes e sua verdadeira missão na Terra.",
"poster"=> "Imagem/2.jpg"
];

$filme3 = ["titulo" => "Homem Aranha 3",
"nota" =>8.5, 
"sinopse" => "Sob a influência dessa nova roupa, Peter se torna convencido e arrogante, passando ainda a negligenciar as pessoas que mais ama.",
"poster"=> "Imagem/3.jpg"
];

$filme4 = ["titulo" => "Matrix",
"nota" =>9.8, 
"sinopse" => "Thomas Anderson, um jovem programador de computador que mora em um cubículo escuro, é atormentado por pesadelos.",
"poster"=> "Imagem/4.jpg"
];

$filme5 = ["titulo" => "Liga da Justiça",
"nota" =>9.1, 
"sinopse" => "Super-Homem, Batman e Mulher-Maravilha recrutam uma equipe de meta-humanos para uma ameaça recém-despertada.",
"poster"=> "Imagem/5.jpg"
];

$filme6 = ["titulo" => "Esquadrão Suicida",
"nota" =>8.7, 
"sinopse" => "Após a aparição do Superman, a agente Amanda Waller está convencida que o governo americano precisa ter sua própria equipe de metahumanos.",
"poster"=> "Imagem/6.jpg"
];

$filme7 = ["titulo" => "Na Escuridão",
"nota" =>7.7, 
"sinopse" => "Atrás da verdade, Sofia arrisca sua vida em busca de respostas e mergulha em um obscuro submundo de corrupção, violência e chantagem.",
"poster"=> "Imagem/7.jpg"
];

$filme8 = ["titulo" => "Apollo 18",
"nota" =>8.4, 
"sinopse" => "Quando um deles encontra um capacete rachado em pleno solo lunar eles percebem que há algo de errado ali.",
"poster"=> "Imagem/8.jpg"
];

$filmes = [$filme1, $filme2, $filme3, $filme4, $filme5, $filme6, $filme7, $filme8];

?>


<body>

<!-- Topo do Site -->
<nav class="nav-extended indigo darken-3 ">
    <div class="nav-wrapper ">
      <ul id="nav-mobile" class="right ">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
    	<h1>Mastercine</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent indigo darken-3">
        <li class="tab"><a href="#test1">Todos</a></li>
        <li class="tab"><a class="active" href="#test2">Assistidos</a></li>
        <li class="tab disabled"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
</nav>
<!-- /Topo do Site -->

<!-- Cards -->
<div class="row">
<?php foreach ($filmes as $filme) : ?>
<!-- Card 1 -->
<div class="col s3">
  <div class="card">
    <div class="card-image">
        <img src="<?php echo $filme ["poster"] ?>">
        <span class="card-title"><?php echo $filme ["titulo"] ?></span>
        <a class="btn-floating halfway-fab waves-effect waves-light red">
        <i class="material-icons">favorite_border</i></a>
      </div>
      <div class="card-content">
        <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?php echo $filme ["nota"] ?></p>
        <p><?php echo $filme ["sinopse"] ?></p>
    </div>
  </div>
</div>
<?php endforeach ?>
<!-- /Card 1 -->
</div>

</body>
</html>

