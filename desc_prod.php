<?php
include __DIR__ . "/includes/head.php";
include __DIR__ . "/includes/navbar.php";
?>

<body>
    <main>
        <div class="container">
            <h1>Detalhes do Produto</h1>
            <hr>
            <article class="row produtos-compra">
                <figure class="col-md-7">
                    <img src=".\img\Fralda Sapeka P - 10unid.jpg" class="img-fluid col-5" alt="Fralda Sapeka P - 10unid">
                </figure>
                <section class="col-md-5 d-flex flex-column">
                    <article class="produtos-info">
                        <h1>Fralda Sapeka P - 10unid</h1>
                        <p>
                            -Super Gel Absorvente - para absorver o xixi e deixar o seu bebê sempre sequinho;
                            -Nova e Melhor Fita Abre e Fecha - para facilitar o abre e fecha da fralda na hora de trocar;
                            -Maiores Barreiras Antivazamento - ajuste perfeito ás perninhas do seu bebê, evitando vazamentos com proteção extra ;
                            -Formato Justinho - perfeito para se ajustar ao corpinho do seu bebê;
                        </p>
                    </article>
                    <article class="produtos-preco">
                        <strong>
                            <h1>$11,00</h1>
                            <span class="d-block">Em até 3x sem juros.</span>
                        </strong>

                        <form action="#">
                            <div class="form-group">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <button type="submit" class="btn col-md-12 btn-success mb-2"><a href="carrinho.php" class="text-light text-decoration-none">Adicionar ao Carrinho</a></button>
                        </form>
                    </article>

        </div>
        </article>
        </section>
        </article>
        </section>
    </main>
    <hr>

    <?php
    include __DIR__ . "/includes/footer.php";
    ?>