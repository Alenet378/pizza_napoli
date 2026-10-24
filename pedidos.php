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

        .segundo{
            background-color: var(--golden-pollen);
        }

        .tercero {
            background-color: var(--bright-gold);
        }

        .cuarto{
            background-color: var(--blood-red);
        }
    </style>
</head>
<body >
    <div class="col-lg-12">
        <div class="card shadow-sm border-0 fondo">
            <div class="card-header text-center py-3 tercero">
                <h1 class="mb-0">Formulario de Pedidos de Pizza</h1>
            </div>
            <div class="card-body p-8 cuarto container mt-5 rounded-4">
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                    <div class="mb-3 segundo rounded-4 shadow">
                        <label for="cliente" class="form-label fw-bold p-1">Nombre Completo:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="cliente" name="cliente"  placeholder="Ej: Juanito Alcachofa" required>
                    </div>
                    <div class="mb-3 segundo rounded-4 shadow">
                                <label for="rtn" class="form-label fw-bold p-1">Número de RTN: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="rtn" name="rtn" 
                                       placeholder="Ej: 08241995111111" maxlength="14">
                                <div class="form-text p-1 fw-bold">Sin guiones ni espacios. Requisito tributario del SAR de Honduras.</div>
                            </div>
                </form>
            </div>













        </div>
    </div>
</body>
</html>
