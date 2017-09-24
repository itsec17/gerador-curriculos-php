<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Currículo | Modelo 2</title>
    <link rel="stylesheet" href="css/modelo2.css">
</head>
<body>
    <main>
        <section class="lateral">
            <img src="img/avatar1.png" alt="Foto" class="foto">
            <div class="topico-lateral">
                <img src="img/icone-endereco-1.png" alt="Endereço">
                <span><?= $dados['endereco']; ?></span>
            </div>
            <div class="topico-lateral">
                <img src="img/icone-telefone-1.png" alt="Telefone">
                <span><?= $dados['telefone']; ?></span>
            </div>
            <div class="topico-lateral">
                <img src="img/icone-email-1.png" alt="E-mail">
                <span><?= $dados['email']; ?></span>
            </div>
        </section>
        <section class="principal">
            <h1><?= $dados['nome']; ?></h1>
            
            <h2><?= $dados['cargo']; ?></h2>
            
            <p><?= $dados['resumo']; ?></p>
            
            <div class="cabecalho-secao">
                <img src="img/icone-formacao-1.png" alt="Formação">
                <h3>Formação</h3>
                <div class="separador"></div>
            </div>
        
            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Bacharelado em Engenharia Elétrica</h4>
                        <p>Universidade Federal da Paraíba</p>
                        <p>2017</p>
                    </div>
                </li>
                <li>
                    <div>
                        <h4>Técnico em Eletricidade e Eletrônica</h4>
                        <p>Instituto Federal de Educação, Ciência e Tecnologia da Paraíba</p>
                        <p>2013</p>
                    </div>
                </li>
            </ul>
            
            <div class="cabecalho-secao">
                <img src="img/icone-experiencia-1.png" alt="Experiência">
                <h3>Experiência</h3>
                <div class="separador"></div>
            </div>

            <ul class="lista-topicos">
                <li>
                    <div>
                        <h4>Estágio em Engenharia Elétrica</h4>
                        <p>Super Top Engenharia</p>
                        <p>2015 a 2017</p>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <h4>Técnico em Eletrônica</h4>
                            <p>Eletrotunts</p>
                            <p>2013 a 2015</p>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <script>
        window.print();
    </script>
</body>
</html>