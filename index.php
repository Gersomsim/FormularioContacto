<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario de contacto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <form action="./server.php" method="post" class="col-12 col-sm-10 col-md-8 col-lg-7">
        <div class="content">
          <h1>Contactanos</h1>

          <div class="mb-3">
            <label class="form-label" for="name">Nombre:</label>
            <input type="text" name="name" id="name" class="form-control" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="email">Correo:</label>
            <input type="email" name="email" id="email" class="form-control" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="subject">Asunto:</label>
            <input type="text" name="subject" id="subject" class="form-control" />
          </div>
          <div class="mb-3">
            <label class="form-label" for="message">Mensaje:</label>
            <textarea name="message" id="message" rows="3" class="form-control"></textarea>
          </div>
          <div class="mb-3 text-center">
            <button class="button" name="form">Enviar</button>
          </div>
          <?php if (isset($_GET['status'])) : ?>
            <?php if ($_GET['status'] == 'success') : ?>
              <div class="alert text-center alert-success">
                <span>Mensaje enviado con exito</span>
              </div>
            <?php else : ?>
              <div class="alert text-center alert-danger">
                <span>Surgio un problema</span>
              </div>
            <?php endif; ?>
          <?php endif; ?>
          <div class="info">
            Av. Vicente Guerrero #234, Cuernavaca, Morelos
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>