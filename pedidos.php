<?php

$errores=[];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-pedido'])) {

    $nombre   = trim(htmlspecialchars($_POST['cliente'] ?? '', ENT_QUOTES, 'UTF-8'));
    $correo   = trim(htmlspecialchars($_POST['correo'] ?? '', ENT_QUOTES, 'UTF-8'));
    $rtn   = trim(htmlspecialchars($_POST['rtn'] ?? '', ENT_QUOTES, 'UTF-8'));
    $telefono  = trim(htmlspecialchars($_POST['tel'] ?? '', ENT_QUOTES, 'UTF-8'));
    $direccion = trim(htmlspecialchars($_POST['direccion'] ?? '', ENT_QUOTES, 'UTF-8'));
    $pizza = trim(htmlspecialchars($_POST['pizza'] ?? '', ENT_QUOTES, 'UTF-8'));
    $tamano = trim(htmlspecialchars($_POST['tamano'] ?? '', ENT_QUOTES, 'UTF-8'));
    $cantidad = trim(htmlspecialchars($_POST['cantidad'] ?? '', ENT_QUOTES, 'UTF-8'));
    $tipo_envio = trim(htmlspecialchars($_POST['envio'] ?? '', ENT_QUOTES, 'UTF-8'));
    $metodo_pago = trim(htmlspecialchars($_POST['pago'] ?? '', ENT_QUOTES, 'UTF-8'));


    if(empty($nombre) || empty($correo) || empty($telefono) || empty($direccion) || empty($pizza) || empty($tamano) || empty($cantidad) || empty($tipo_envio) || empty($metodo_pago)) {
        $errores[] = "Existen campos por llenar verifique nuevamente";
  }

    if(empty($rtn)) {
        $errores[] = "Falta agregar  el numero de RTN";
    } elseif (!preg_match('/^[0-9]{14}$/', $rtn)) {
            $errores[] = "El RTN debe contener exactamente 14 dígitos numéricos según la normativa oficial del SAR de Honduras.";
    }

    if(empty($telefono)){
        $errores[] = "Falta agregar el numero de telefono";
    } elseif (!preg_match('/^[0-9]{8}$/', $telefono)) {
        $errores[] = "El  telefono debe contener  8 digitos numericos";

    }

    if ($cantidad <= 0) {
        $errores[] = "La cantidad solicitada debe ser un número entero mayor a cero.";
    }

    if (empty($errores)) {

        $precios_pizza = [
        'peperoni' => 0,
        'hawaiana' => 40,
        'extra-queso' => 80,
        'suprema' => 100
        ];

        $precios_tamano = [
        'pequena' => 99,
        'mediana' => 139,
        'grande' => 159,
        'extra-grande' => 199
        ];

        $precios_envio =[
            'local' => 0,
            'llevar' => 0,
            'delivery' => 45
        ];

        $pizzaelegida = $precios_pizza[$pizza];
        $tamanoelegido = $precios_tamano[$tamano];
        $envioelegido = $precios_envio[$tipo_envio];

        $subTotal = ($pizzaelegida + $tamanoelegido)* $cantidad;

        if($cantidad >= 3 ){
            $descuentocantidad = $subTotal * 0.10;
            $subTotal = $subTotal - $descuentocantidad;
        }

        $isv= $subTotal *0.15;
        $totalAPagar = $subTotal + $isv + $envioelegido;

        $totalAPagar= number_format($totalAPagar,2);

    }

}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos | Pizzeria Napoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --bright-gold: #ffe100ff;
            --golden-pollen: #ffc917ff;
            --pure-red: #f00000ff;
            --blood-red: #8c0000ff;
            --black: #050505ff;
        }

        .fondo {
            background-color: var(--black);
        }

        .primero {
            background-color: var(--pure-red);
        }

        .segundo {
            background-color: var(--golden-pollen);
        }

        .tercero {
            background-color: var(--bright-gold);
        }

        .cuarto {
            background-color: var(--blood-red);
        }

        .quinto {
            background-color: #FFF0CC;
        }

        .btn-pedido {
            background-color: #722F37;
            color: #FFFFFF;
            border: 2px solid #722F37;
            border-radius: 10px;
            padding: 12px 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-pedido:hover {
            background-color: #F2C94C;
            color: #722F37;
            border-color: #F2C94C;
        }
    </style>
</head>

<body>

    <?php if (!empty($errores)): ?>
            <div class="alert alert-danger shadow-sm" role="alert">
                <h5 class="alert-heading fw-bold">⚠️ Se encontraron los siguientes errores en el formulario:</h5>
                <ul class="mb-0">
                    <?php foreach ($errores as $err): ?>
                        <li><?= htmlspecialchars($err, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

    <div class="col-lg-12 cuarto">
        <div class="card shadow-sm  cuarto">
            <div class="card-header mt-4 container p-8 text-center py-3 rounded-4  tercero">
                <h1 class="mb-0">Formulario de Pedidos de Pizza</h1>
            </div>

            <div class="card-body p-8 quinto container mt-4 rounded-4">
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" novalidate>

                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="segundo rounded-4 shadow p-2 ">
                                <label for="cliente" class="form-label fw-bold"> Nombre Completo: <span
                                        class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="cliente" name="cliente"
                                    placeholder="Ej: Juanito Alcachofa" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="segundo rounded-4 shadow p-2 ">
                                <label for="correo" class="form-label fw-bold">Correo Electrónico: <span
                                        class="text-danger">*</span> </label>
                                <input type="email" class="form-control" id="correo" name="correo"
                                    placeholder="ejemplo@correo.com" required>
                            </div>
                        </div>

                    </div>


                    <div class="row g-4 mt-2 mb-4">
                        <div class="col-md-6">
                            <div class="segundo rounded-4 shadow p-2 ">
                                <label for="tel" class="form-label fw-bold ">Número de Teléfono: <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control" pattern="[0-9]{8}" id="tel" name="tel"
                                    placeholder="Ej: 88881111" maxlength="8" required>
                                <div class="form-text p-1 fw-bold">Sin guiones ni espacios.</div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="segundo rounded-4 shadow p-2 ">
                                <label for="rtn" class="form-label fw-bold"> Número de RTN: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" pattern="[0-9]{14}" id="rtn" name="rtn"
                                    placeholder="Ej: 08241995111111" maxlength="14" required>
                                <div class="form-text p-1 fw-bold">Sin guiones ni espacios. Requisito tributario del SAR
                                    de Honduras.</div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow p-2">
                        <label for="direccion" class="form-label fw-bold p-1"> Dirección de Entrega y Punto de
                            Referencia:<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="direccion" name="direccion" rows="3"
                            placeholder="Ingrese la dirección y un punto de referencia" required></textarea>
                    </div>

                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="mb-3 segundo rounded-4 shadow p-2">
                                <label for="pizza" class="form-label fw-bold p-1">Selecciona tu pizza <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="pizza" name="pizza" required>
                                    <option value="" selected disabled>Elige una pizza</option>
                                    <option value="peperoni">Pepperoni - L.99</option>
                                    <option value="hawaiana">Hawaiana - L.139</option>
                                    <option value="extra-queso">Extra queso - L.159</option>
                                    <option value="suprema">Suprema - L.199</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3 segundo rounded-4 shadow p-2">
                                <label for="tamano" class="form-label fw-bold p-1">Tamaño <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="tamano" name="tamano" required>
                                    <option value="" selected disabled>Elige el tamaño</option>
                                    <option value="pequena">Pequeña - L.0</option>
                                    <option value="mediana">Mediana - L.40</option>
                                    <option value="grande">Grande - L.80</option>
                                    <option value="extra-grande">Extra Grande - L.100</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3 segundo rounded-4 shadow p-2">
                                <label for="cantidad" class="form-label fw-bold p-1">Cantidad <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" step="1"
                                    placeholder="Ingrese la cantidad" required>
                                <div class="form-text p-1 fw-bold">Por la compra de 3 pizza o mas recibe un 10% de descuento.</div>
                            </div>
                        </div>
                    </div>

                    
                    
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="mb-3 segundo rounded-4 shadow p-2">
                                <label for="envio" class="form-label fw-bold p-1">Modalidad de entrega <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="envio" name="envio" required>
                                    <option value="" selected disabled>Elige el envio</option>
                                    <option value="local">Comer en Restaurante - L.0 </option>
                                    <option value="llevar">Para Llevar - L.0</option>
                                    <option value="delivery">Delivery - L.45</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3 segundo rounded-4 shadow p-2">
                                <label for="pago" class="form-label fw-bold p-1">Metodo de Pago <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="pago" name="pago" required>
                                    <option value="" selected disabled>Elija el metodo de pago</option>
                                    <option value="efectivo">Efectivo</option>
                                    <option value="tarjeta">Tarjeta de Credito/Debito</option>
                                    <option value="transferencia">Transferencia ACH</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-4 mb-4  rounded-4 shadow">
                        <button type="submit" name="btn-pedido" class="btn btn-pedido mb-4"> Hacer pedido </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>