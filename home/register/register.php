<!DOCTYPE html>
<html lang="pt-br">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
    <header class="register_header">
            <img class="logotipo" src="imagens/logo_ame.jpg" alt="Logotipo ame">
        </header>

        <form action="/action_page.php">
            
        <div class="container">
            <h1>Cadastre-se e ajude a salvar vidas!</h1>
            <p>
            Doar leite materno humano é um gesto que salva vidas. O leite materno é importante para todos os bebês, principalmente para os que estão 
            internados e não podem ser amamentados pela própria mãe. Todos os anos aproximadamente 150 mil litros de leite materno humano são coletados, 
            processados e distribuídos aos recém-nascidos de baixo peso que estão internados em unidades neonatais de todo o Brasil.

            Um litro de leite materno doado pode alimentar até 10 recém-nascidos por dia. Dependendo do peso do prematuro, 1 ml já é o suficiente para 
            nutri-lo cada vez em que ele for alimentado. Os bebês que estão internados e não podem ser amamentados pelas próprias mães têm a chance de receber 
            os benefícios do leite materno com a sua doação. Com ele, a criança se desenvolve com saúde, tem mais chances de recuperação e fica protegida de 
            infecções, diarreias e alergias.
            </p>
            <hr>

            <label for="nome"><b>Nome</b></label>
            <input id="nome" type="text" placeholder="Digite seu Nome" name="nome" required>

            <label for="sobrenome"><b>Sobrenome</b></label>
            <input id="sobrenome" type="text" placeholder="Digite seu Sobrenome" name="sobrenome" required>

            <label for="identidade"><b>Identidade</b></label>
            <input id="identidade" type="number" placeholder="Digite seu RG" name="identidade" required>

            <label for="cpf"><b>CPF</b></label>
            <input id="cpf" type="number" placeholder="Digite seu CPF" name="cpf" required>

            <label for="datanasc"><b>Data de nascimento</b></label>
            <input id="datanasc" type="text" placeholder="Digite a data do seu nascimento" name="datanasc" required>

            <label for="endereco"><b>Endereço</b></label>
            <input id="endereco" type="text" placeholder="Digite seu Endereço" name="endereco" required>
            <hr>
            <p>Ao criar uma conta, você concorda com nossos <a href="#">Termos</a>.</p>

            <button class="registerbtn" id="registerbtn">Cadastrar</button>
        </div>
    
        <div class="container signin">
            <p>Já possui uma conta ? <a href="#">Login</a>.</p>
        </div>

    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

        $(document).ready(function() {

            $(".registerbtn").click(function(event) {

                event.preventDefault();

                let data = new FormData();

                data.append("nome", $("#nome").val());
                data.append("sobrenome", $("#sobrenome").val());
                data.append("identidade", $("#identidade").val());
                data.append("cpf", $("#cpf").val());
                data.append("datanasc", $("#datanasc").val());
                data.append("endereco", $("#endereco").val());

                $.ajax({
                    url: "./control/function/insertUser.php",
                    type: "POST",
                    dataType: "json",
                    data: data,
                    processData: false,
                    contentType: false
                }).done(function(result) {
                    console.log(result);

                }).fail(function(jqXHR, textStatus ) {
                    console.log("Request failed: " + textStatus);

                }).always(function() {
                    console.log("completou");
                });

            });

        });

    </script>

</html>
