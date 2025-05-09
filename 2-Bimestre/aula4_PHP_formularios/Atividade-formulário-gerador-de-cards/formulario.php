<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


    <body class=" flex text-center content-center bg-gray-500 items-center">
        <div class="full-box flex content-center items-center grid">
            <h2 class="h2 bg-gray-700 rounded-xl items-center text-center p-2">Insira os dados do filme </h2>

            <div class="p-2">
                <form method="POST"
                    action="filme_card.php">


                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="nome" placeholder="Insira o nome do filme" />
                    <br><br>

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="autor" placeholder="Insira o nome do autor " />
                    <br><br>

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="ano" placeholder="Insira o ano de lançamento" />
                    <br><br>

                    <input class="input rounded-md bg-gray-200 placeholder-gray-500 ml-2 pl-2" type="text" name="link" placeholder="Insira o link da capa do filme" />
                    <br><br>
            </div>

            <button class="bg-green-900 rounded-md ml-2 pl-2" type="submit">Enviar</button>
            </form>
        </div>




</html>