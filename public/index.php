<!DOCTYPE html>
<html lang="en">
    <?php
        require __DIR__."/config/connection.php";
    ;?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Login | Pill Pack Sistema de etiquetas</title>
</head>

<body>
    <main class="flex justify-center items-center p-2 h-screen">

        <div class="flex flex-col w-lg m-auto items-center justify-center bg-(--bg-baby-powder) p-2 rounded-lg">
            <img class="flex items-center justify-center max-w-70 mb-5" src="assets/images/logotipo-avanti-pill-pack.png" alt="Pill Pack">

            <form class="flex w-full flex-col justify-center items-center flex-wrap" action="dashboard.php" method="post">
                <input class="w-full max-w-100 rounded-lg bg-seasalt  size-12 p-5 mb-5 border-1 border-(--border-platinum) text-onyx" type="text" name="" id="" placeholder="Nome">
                <input class="w-full max-w-100 rounded-lg bg-seasalt size-12 p-5 mb-5 border-1 border-(--border-platinum) text-onyx" type="password" name="" id="" placeholder="Senha">
                <input class="bg-(--bg-btn) hover:bg-(--bg-btn-hover) duration-500 text-stone-50 border-(--border-platinum) w-full max-w-100 rounded-lg p-3 cursor-pointer font-bold mb-5" type="submit" value="Entrar">
                <p><a class="color-prussian-blue underline p-2" href="#" target="__blank">Esqueci minha senha</a></p>
            </form>

        </div>

<?php require __DIR__."/templates/footer.php";?>