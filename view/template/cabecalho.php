<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .bg-black {
            background-color: black;
        }

        .text-white {
            color: white;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body>

    <!-- Cabeçalho do sistema -->
    <header class="bg-black text-white">
        <div class="container pt-3 pb-3">
            <a href="<?= base_url() . "c=home" ?>" class="text-white text-decoration-none">
                <h1>Catálogo do IF</h1>
            </a>
            <p>Aqui você encontra de tudo!</p>
        </div>
    </header>