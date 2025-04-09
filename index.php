<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Fracciones</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #56CCF2, #2F80ED);
            margin: 0;
        }

        .ventana {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 30px;
            width: 320px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        h2 {
            color: #2F80ED;
            font-size: 26px;
            margin-bottom: 20px;
        }

        h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 18px;
        }

        input[type="number"], select {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            background-color: #f8f8f8;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus, select:focus {
            border-color: #2F80ED;
            outline: none;
        }

        input[type="submit"] {
            background-color: #2F80ED;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            width: 100%;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        input[type="submit"]:hover {
            background-color: #1C5BB1;
            transform: scale(1.05);
        }

        input[type="submit"]:active {
            transform: scale(1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

    </style>
</head>
<body>
    <div class="ventana">
        <h2>Calculadora de Fracciones</h2>
        <form action="procesar.php" method="POST">
            <h3>Fracción 1:</h3>
            Parte Entera: <input type="number" name="entero1" required><br>
            Numerador: <input type="number" name="num1" required><br>
            Denominador: <input type="number" name="den1" required><br>

            <h3>Fracción 2:</h3>
            Parte Entera: <input type="number" name="entero2" required><br>
            Numerador: <input type="number" name="num2" required><br>
            Denominador: <input type="number" name="den2" required><br>

            <h3>Operación:</h3>
            <select name="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select><br><br>

            <input type="submit" value="Calcular">
        </form>
    </div>
</body>
</html>

