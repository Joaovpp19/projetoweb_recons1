<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
    <title>Projeto_web</title>
</head>

<body class="text-bg-light">
    <div class="container text-center">
        <div class="row bg-primary">
            <div class="col bg-primary">
                <nav class="navbar navbar-expand-lg bg-primary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="row bg-white">
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="row bg-white">
                    <div class="col text-start">
                        <p class="fs-2">CONSULTA - CLIENTES</p>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>(11)98255-6633</td>

                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-primary" type="button">Editar</button>
                                            <button class="btn btn-primary" type="button">Excluir</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>(11)2566-5533</td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-primary" type="button">Editar</button>
                                            <button class="btn btn-primary" type="button">Excluir</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</body>

</html>