<?php include("template/cabecera.php"); ?>
        
<!DOCTYPE html>
<html>
<head>
    <style>
        .horario {
            width: 200px;
            border: 1px solid black;
            padding: 10px;
            margin: 0 auto;
            text-align: center;
        }
        .dia {
            font-weight: bold;
            color: #333;
        }
        .hora {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="horario">
        <div>
            <span class="dia">Lunes:</span>
            <span class="hora">9:00 AM - 5:00 PM</span>
        </div>
        <div>
            <span class="dia">Martes:</span>
            <span class="hora">9:00 AM - 5:00 PM</span>
        </div>
        <div>
            <span class="dia">Miércoles:</span>
            <span class="hora">9:00 AM - 5:00 PM</span>
        </div>
        <div>
            <span class="dia">Jueves:</span>
            <span class="hora">9:00 AM - 5:00 PM</span>
        </div>
        <div>
            <span class="dia">Viernes:</span>
            <span class="hora">9:00 AM - 5:00 PM</span>
        </div>
    </div>
</body>
</html>

<?php include("template/pie.php"); ?>