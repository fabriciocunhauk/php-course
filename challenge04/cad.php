<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Currency Converter</h1>
    </header>
    <main>
        <?php
        $startDate = date("m-d-Y", strtotime("-7 days"));
        $endDate = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $startDate . '\'&@dataFinalCotacao=\'' . $endDate . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

        $data = json_decode(file_get_contents($url), true);

        $real = $_GET['number'] ?? "No Number";
        $dolarPrice = $data["value"][0]["cotacaoCompra"];
        $convertedNumber = $real / $dolarPrice;

        echo "Your " . number_format($real, 2, ",", ".") . " Converted to Dolar is  US$" . number_format($convertedNumber, 2, ",", ".");
        ?>
        <a href="javascript:history.go(-1)">Back</a>
    </main>
</body>

</html>