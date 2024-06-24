<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2, h3 {
            color: #201E1E;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 20px;
            margin-bottom: 8px;
        }
        h3 {
            font-size: 18px;
            margin-bottom: 6px;
        }
        ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        ul li {
            margin-bottom: 4px;
        }
        hr {
            border: 1px solid #201E1E;
            margin: 20px 0;
        }
    </style>
</head>
<body>
<h1>REUNIÃO GERAL ADMINISTRATIVA</h1>
<h2>ALTA SOROCABANA</h2>
<h2>Relatório de Presenças</h2>

<h3>Total por Administração</h3>
<ul>
    @foreach($totalsByAdministration as $administration => $total)
        <li>{{ $administration }}: {{ $total }}</li>
    @endforeach
</ul>

<h3>Total por Departamento</h3>
<ul>
    @foreach($totalsByDepartment as $department => $total)
        <li>{{ $department }}: {{ $total }}</li>
    @endforeach
</ul>

<h3>Total Geral</h3>
<p>Total de Pessoas Presentes: {{ $totalOverall }}</p>

<hr>

<h2>Detalhes Individuais</h2>
<ul>
    @foreach($people as $person)
        <li>{{ $person->name }} - {{ $person->administration->name }} - {{ $person->department->name }} - Presente: {{ $person->present ? 'Sim' : 'Não' }}</li>
    @endforeach
</ul>
</body>
</html>
