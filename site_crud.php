<?php
    session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laboratório Coletivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        font-size: larger;
    }

    #logo {
        width: 35px;
        border-radius: 50%;
    }

    #fotos img {
        width: 400px;
        height: 400px;
        border-radius: 50%;
        border: 7px solid #ad0606;
    }

    #fotos {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin-left: 50px;
        margin-right: 50px;
        padding-bottom: 20px;
    }

    h1 {
        background-color: #ad0606;
        text-align: center;
        color: white;
        padding-bottom: 5px;
    }
</style>

<body>
    <nav class="navbar" data-bs-theme="dark" style="background-color: #ad0606;">
        <div class="container-fluid">
            <a class="navbar-brand"><img id="logo" src="logo.jpg"> Laboratório Coletivo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#t1">Quem somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#t2">Doação de sangue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#t3">Seja um doador</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="card mb-3">
        <img id="t1" src="sangue.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Quem somos?</h5>
            <p class="card-text">Seja bem-vindo ao Laboratório Coletivo! Somos uma plataforma dedicada à
                promoção da saúde e ao bem-estar através da doação voluntária de sangue. Nosso objetivo é conectar
                doadores altruístas com aqueles que precisam desse gesto de solidariedade para salvar vidas. Com
                tecnologia avançada e um compromisso inabalável com a segurança e eficiência, facilitamos o processo de
                doação de sangue de forma simples e acessível para todos. <br>
                Nossa missão é salvar vidas através da doação de sangue. Acreditamos que cada gota de sangue doada é um
                gesto de amor e solidariedade que pode fazer a diferença na vida de alguém. Trabalhamos incansavelmente
                para conscientizar sobre a importância da doação regular e garantir que todos os que precisam de sangue
                possam recebê-lo prontamente e de forma segura. <br>
                Nosso trabalho é pautado por valores fundamentais que guiam todas as nossas ações: <br>

                <strong>Solidariedade:</strong> Acreditamos no poder transformador da solidariedade humana e nos
                esforçamos para
                promovê-la em todas as nossas atividades. <br>
                <strong>Compromisso:</strong> Somos comprometidos com a excelência e a ética, garantindo a segurança e a
                confiabilidade
                em todo o processo de doação. <br>
                <strong>Respeito:</strong> Respeitamos a diversidade e as necessidades individuais de cada doador e
                receptor de sangue. <br>
                <strong>Inovação:</strong> Buscamos constantemente melhorar e inovar nossos serviços, utilizando
                tecnologia de ponta para
                facilitar e agilizar o processo de doação. <br>
                <strong>Transparência:</strong> Mantemos total transparência em todas as nossas operações, desde a
                coleta até a
                distribuição do sangue doado. <br>
                Estamos aqui para fazer a diferença na vida das pessoas, promovendo uma cultura de doação de sangue que
                salva vidas e traz esperança para o futuro. Junte-se a nós nessa nobre causa e ajude a construir um
                mundo mais saudável e solidário!
            </p>
        </div>
    </div>
    <h1 id="t2">Doação de sangue</h1>
    <section id="fotos">
        <img src="doacao de sangue3.jpg">
        <img src="doacao de sangue.jpg">
        <img src="doacao de sangue2.jpg">
    </section>
    <p>A doação de sangue é um processo pelo qual uma pessoa voluntariamente contribui com uma parte do seu sangue para
        ser utilizado por outra pessoa que necessita. Aqui estão os passos básicos de como funciona o processo de doação
        de sangue: <br><br>

        <strong>1. Elegibilidade:</strong> Antes de doar sangue, é necessário verificar se você atende aos requisitos
        básicos
        estabelecidos pelos serviços de hemoterapia. Isso inclui critérios como idade mínima e máxima, peso adequado,
        boa saúde geral e ausência de certas condições médicas. <br>

        <strong>2. Cadastro e triagem:</strong> No local de doação, você será cadastrado e passará por uma triagem
        inicial. Isso
        geralmente inclui perguntas sobre seu histórico médico e um breve exame físico para garantir que você está
        saudável o suficiente para doar sangue. <br>

        <strong>3. Coleta de sangue:</strong> Uma vez aprovado na triagem, você será encaminhado para a área de coleta.
        Um
        profissional de saúde limpará a área de inserção (geralmente o braço) com um desinfetante e fará a punção de uma
        veia usando uma agulha estéril. <br>

        <strong>4. Coleta do sangue:</strong> O sangue é coletado em uma bolsa esterilizada ligada à agulha. A
        quantidade de sangue
        coletada geralmente varia de acordo com as políticas locais de coleta, mas é geralmente cerca de 450 ml. <br>

        <strong>5. Recuperação:</strong> Após a doação, você será levado a uma área de recuperação onde poderá descansar
        e tomar
        líquidos. Isso é importante para ajudar na sua recuperação e evitar tonturas ou fraquezas após a doação. <br>

        <strong>6. Armazenamento e processamento:</strong> O sangue doado é rotulado e transportado para um centro de
        processamento,
        onde será testado para garantir que seja seguro para transfusão. O processamento também envolve separar os
        componentes do sangue (glóbulos vermelhos, plasma, plaquetas) para serem usados conforme as necessidades
        médicas. <br>

        <strong>7. Distribuição:</strong> Uma vez processado e aprovado nos testes de segurança, o sangue é armazenado
        adequadamente
        e distribuído para hospitais e clínicas que solicitam transfusões para pacientes. <br>

        <strong>8. Acompanhamento:</strong> Após a doação, algumas organizações de doação de sangue podem acompanhar seu
        estado de
        saúde para garantir que você não tenha efeitos adversos e também podem solicitar que você retorne para doações
        futuras, geralmente respeitando um intervalo de tempo entre doações para garantir sua saúde. <br><br>

        É um processo relativamente simples e seguro, mas fundamental para salvar vidas em situações de emergência,
        cirurgias, tratamentos contra o câncer, entre outros casos onde a transfusão de sangue é necessária. <br>

        A compatibilidade sanguínea é crucial para garantir que uma transfusão de sangue seja segura e eficaz. Ela é
        determinada por dois sistemas principais: o sistema ABO e o sistema Rh. <br><br>

        <strong>Sistema ABO</strong> <br> <br>
        O sistema ABO classifica o sangue com base na presença ou ausência de certos antígenos (substâncias estranhas ao
        corpo) nas células vermelhas do sangue e nos anticorpos correspondentes no plasma. Existem quatro tipos
        principais de sangue no sistema ABO: <br><br>

        Tipo A: Possui antígenos do tipo A nas células vermelhas e anticorpos anti-B no plasma. <br>

        Tipo B: Possui antígenos do tipo B nas células vermelhas e anticorpos anti-A no plasma. <br>

        Tipo AB: Possui antígenos A e B nas células vermelhas, mas não possui anticorpos anti-A nem anti-B no plasma
        (considerado receptor universal para plasma). <br>

        Tipo O: Não possui antígenos A nem B nas células vermelhas, mas possui anticorpos anti-A e anti-B no plasma
        (considerado doador universal para células vermelhas). <br>

        A compatibilidade no sistema ABO é crucial: um receptor de sangue tipo A não pode receber sangue tipo B (e
        vice-versa), enquanto o tipo AB pode receber qualquer tipo de sangue (universal para plasma). O tipo O pode doar
        para qualquer tipo de sangue (universal para células vermelhas). <br><br>

        <strong>Sistema Rh</strong> <br> <br>
        O sistema Rh refere-se à presença ou ausência do antígeno Rh (também chamado de fator Rh) nas células vermelhas
        do sangue. A maioria das pessoas é Rh positivo (Rh+), o que significa que possuem o antígeno Rh. Se uma pessoa é
        Rh negativo (Rh-), ela não possui o antígeno Rh. <br>

        A incompatibilidade Rh pode ocorrer em transfusões de sangue ou durante a gravidez, especialmente se a mãe é Rh
        negativo e o bebê é Rh positivo. Isso pode levar à produção de anticorpos contra o fator Rh no sangue da mãe, o
        que pode afetar gestações futuras. <br><br>

        <strong>Determinando a Compatibilidade</strong> <br><br>
        Para garantir a compatibilidade sanguínea durante uma transfusão de sangue, tanto o sistema ABO quanto o sistema
        Rh são considerados. O sangue do receptor deve ser compatível com o tipo sanguíneo do doador, levando em conta
        tanto os antígenos ABO quanto o fator Rh. <br>

        Em resumo, a compatibilidade sanguínea depende da combinação dos tipos sanguíneos ABO e Rh entre o doador e o
        receptor. Garantir essa compatibilidade é essencial para prevenir reações adversas e garantir que a transfusão
        seja segura e eficaz para o paciente.
    </p>
<h1 id="t3">Seja um doador</h1>
<h4>Informe seus dados:</h4>
<form action="siteprocessa.php" method="post">
    <label>Nome:</label>
    <input type="text" name="nome">
    <br>
    <label>Tipo sanguíneo:</label>
    <select name="sangue">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>
    <br>
    <input type="submit" value="Cadastrar">
</form>
<?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
?>
<a href="sitelistar.php"><button>Lista de doadores</button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>