<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>FitPlanner</title>
</head>

<body class="d-flex justify-content-center flex-column gap-2" style="height: 100vh; width:100vw;">

    <nav class="navbar bg-body-primary w-100 bg-primary ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="logo.png" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                    FitPlanner
            </a>
        </div>
    </nav>
    <main class="d-flex justify-content-center flex-column align-items-center gap-2" style="height: 90vh; width:100vw;">
        <div class="d-flex justify-content-center flex-column h-100 bg-dark rounded text-white" style="width: 80%; height: 80%;">
            <div class="d-flex flex-column mb-2 align-items-center justify-content-center h-100 w-100">
                <h2>Escolha sua opção de login:</h2>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary">
                        <a href="loginp.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover w-100">
                            <p class="m-0">Personal</p>
                        </a>
                    </button>
                    <button class="btn btn-primary">
                        <a href="loginc.php"class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover w-100">
                            <p class="m-0">Cliente</p>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </main>



</body>

</html>