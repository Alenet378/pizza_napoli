<?php





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
    </style>
</head>

<body>
    <div class="col-lg-12 cuarto">
        <div class="card shadow-sm  cuarto">
            <div class="card-header mt-4 container p-8 text-center py-3 rounded-4  tercero">
                <h1 class="mb-0">Formulario de Pedidos de Pizza</h1>
            </div>

            <div class="card-body p-8 quinto container mt-4 rounded-4">
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="cliente" class="form-label fw-bold p-1">Nombre Completo:<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control " id="cliente" name="cliente"
                            placeholder="Ej: Juanito Alcachofa" required>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="rtn" class="form-label fw-bold p-1">Número de RTN: <span class="text-danger">*</span></label>
                        <input type="text" class="form-control " pattern="[0-9]{14}" id="rtn" name="rtn"
                            placeholder="Ej: 08241995111111" maxlength="14">
                        <div class="form-text p-1 fw-bold">Sin guiones ni espacios. Requisito tributario del SAR de
                            Honduras.</div>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="tel" class="form-label fw-bold p-1">Numero de Telefono: <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" pattern="[0-9]{8}" id="tel" name="tel"
                            placeholder="Ej:88881111" maxlength="8">
                        <div class="form-text p-1 fw-bold">Sin guiones ni espacios.</div>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="correo" class="form-label fw-bold p-1">Correo Electronico:<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="correo" placeholder="ejemplo@correo.com"
                            required>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="direccion" class="form-label fw-bold p-1"> Dirección de Entrega y Punto deReferencia:<span class="text-danger">*</span></label>
                        <textarea class="form-control" id="direccion" name="direccion" rows="3" placeholder="Ingrese la dirección y un punto de referencia" required></textarea>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow ">
                        <label for="pizza" class="form-label fw-bold p-1">Selecciona tu pizza <span class="text-danger">*</span></label>
                        <select class="form-select" id="pizza" name="pizza" required>
                            <option value="" selected disabled>Elige una pizza</option>
                            <option value="pepperoni">Pepperoni</option>
                            <option value="hawaiana">Hawaiana</option>
                            <option value="queso">Extra queso</option>
                            <option value="suprema">Suprema</option>
                            
                        </select>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="tamano" class="form-label fw-bold p-1">Tamaño <span class="text-danger">*</span></label>
                        <select class="form-select" id="tamano" name="tamano" required>
                            <option value="" selected disabled>Elige el tamaño</option>
                            <option value="pequena">Pequeña</option>
                            <option value="mediana">Mediana</option>
                            <option value="grande">Grande</option>
                            <option value="extra-grande">Extra Grande</option>
                        </select>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="cantidad" class="form-label fw-bold p-1">Cantidad <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" step="1" placeholder="Ingrese la cantidad" required>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="envio" class="form-label fw-bold p-1">Modalidad de entrega <span class="text-danger">*</span></label>
                        <select class="form-select" id="envio" name="envio" required>
                            <option value="" selected disabled>Elige el envio</option>
                            <option value="pequena">Comer en Restaurante</option>
                            <option value="mediana">Para Llevar</option>
                            <option value="grande">Delivery</option>
                        </select>
                    </div>

                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="pago" class="form-label fw-bold p-1">Metodo de Pago <span class="text-danger">*</span></label>
                        <select class="form-select" id="pago" name="pago" required>
                            <option value="" selected disabled>Elija el metodo de pago</option>
                            <option value="pequena">Efectivo</option>
                            <option value="mediana">Tarjeta de Credito/Debito</option>
                            <option value="grande">Transferencia ACH</option>
                        </select>
                    </div>
                    
                </form>
            </div>













        </div>
    </div>
</body>

</html>