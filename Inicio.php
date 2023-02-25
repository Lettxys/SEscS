<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<section class="bcgb">
        <div class="container">
            <br>
            <h1 class="cnt">Dados do Aluno</h1>
            <div class="line"></div>
            <br>

            <form method="post" action="salvar.php" id="form">

                <div class="row mb-1">
                    <div class="col-sm-6">
                        Nome Completo: <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                    </div>
                    <div class="col-sm-3">
                        <label>Data de Nascimento:</label>
                        <div class="input-group" required>
                            <input type="date" name="DataN" class="form-control form-control-sm" id="dataNascimento" required>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        RG ou dados da certidão de nascimento: <input type="text" name="RG" placeholder="00.000.000-00" class="form-control form-control-sm" id="RG" maxlength="11" oninput="mascaraa('RG')" required>
                    </div>
                </div>

                <br>

                <div class="row mb-3">
                    <div class="col-sm-8">
                        Email: <input type="email" name="email" placeholder="exemplo@exemplo.com" class="form-control form-control-sm" id="email" required>
                    </div>
                    <div class="col-sm-4">
                        Telefone: <input type="text" name="telefone" placeholder="(00) 00000-0000" class="form-control form-control-sm" id="telefone" maxlength="11" oninput="mascaraa('TelFixo')" required>
                    </div>
                </div>

                <br>

                <h2 class="cnt">Ficha de Saúde</h2>
                <div class="line"></div>
                <br>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        País de Saída: <input type="text" class="form-control" placeholder="Brasil" name="paisSai" required>
                    </div>
                    <div class="col-sm-6">
                        País de Destino: <input type="text" class="form-control" placeholder="Canadá" name="paisDes" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-6">
                        <label>Data de Saída:</label>
                        <div class="input-group" required>
                            <input type="date" name="DataS" class="form-control form-control-sm" id="dataSaida" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label>Data de Retorno:</label>
                        <div class="input-group" required>
                            <input type="date" name="DataR" class="form-control form-control-sm" id="dataRetorno" required>
                        </div>
                    </div>
                </div>

                <div class="row mb-8">
                    <div class="col sm-5">
                        <label>Classe da Viagem:</label>
                        <select class="form-control-sm" name="classe">
                            <option>...</option>
                            <option value="ClasseEC">Classe Econômica</option>
                            <option value="ClasseEM">Classe Empresarial</option>
                            <option value="PC">Primeira Classe</option>
                        </select>
                    </div>
                </div>

                <br>

                <div class="row mb-7">
                    <div class="col sm-6">
                        Por favor, marque os serviços que você precisa:
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="servicos" id="PassagensAe" value="Passagens">
                            <label class="form-check-label" for="PassagensAe">Passagens Aéreas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="servicos" id="aluguel" value="Aluguel">
                            <label class="form-check-label" for="aluguel">Aluguel de Carros</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="servicos" id="acomodacoes" value="Acomodacoes">
                            <label class="form-check-label" for="acomodacoes">Acomodações em Hotéis</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-dark" id="btnSalvar" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Enviar
                    </button>
                </div>

                <br>
            </form>
        </div>

        <br>
</section>
</body>
</html>