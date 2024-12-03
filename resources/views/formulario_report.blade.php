<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurar Relatório</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-size: 14px;
            color: #333;
            margin-bottom: 10px;
            display: block;
        }

        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 10px;
        }

        button {
            background-color: #5c6bc0;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #3f4e9b;
        }

        .options-group {
            margin-bottom: 20px;
        }

        .options-group input[type="checkbox"] {
            display: inline-block;
            margin-right: 10px;
        }

        .options-group label {
            display: inline-block;
            margin: 0 15px 10px 0;
        }

        .options-group select {
            width: 50%;
            margin-top: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input[type="text"], .form-group select {
            width: calc(100% - 20px);
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <form method="POST" action="{{ route('generate_report') }}">
        @csrf
        <h1>Configurar Relatório</h1>

        <div class="form-group">
            <div class="options-group">
                <label>
                    <input type="checkbox" name="header">
                    Adicionar Cabeçalho
                </label>
                <input type="text" name="header_text" placeholder="Texto do Cabeçalho">
            </div>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="border">
                Adicionar Borda
            </label>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="color">
                Adicionar Cor
            </label>
            <select name="color_value">
                <option value="black">Preto</option>
                <option value="red">Vermelho</option>
                <option value="blue">Azul</option>
                <option value="green">Verde</option>
                <option value="purple">Purple</option>
                <option value="orange">Orange</option>
                <option value="pink">Pink</option>
                <option value="brown">brown</option>
            </select>
        </div>

        <div class="form-group">
            <div class="options-group">
                <label>
                    <input type="checkbox" name="footer">
                    Adicionar Rodapé
                </label>
                <input type="text" name="footer_text" placeholder="Texto do Rodapé">
            </div>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="margin">
                Adicionar Margem
            </label>
            <select name="margin_value">
                <option value="10px">10px</option>
                <option value="20px">20px</option>
                <option value="30px">30px</option>
                <option value="40px">40px</option>
            </select>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="font">
                Adicionar Fonte
            </label>
            <select name="font_value">
            <option value="Arial">Arial</option>
            <option value="Verdana">Verdana</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Courier New">Courier New</option>
            <option value="Roboto">Roboto</option>
            <option value="Georgia">Georgia</option>
            <option value="Tahoma">Tahoma</option>
            <option value="Comic Sans MS">Comic Sans MS</option>
            <option value="Lucida Console">Lucida Console</option>
        </select>
        </div>

        <button type="submit">Gerar Relatório</button>
    </form>

</body>
</html>
