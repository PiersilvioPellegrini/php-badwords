<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
  <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
  <title>Php BadWords</title>
  <!-- Third party libraries -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- Custom css
  <link rel="stylesheet" href="css/style.css"> -->
</head>
<body>
  <main class="container pb-5">
    <h1 class="my-5">Php BadWords</h1>
    

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="data.php" method="GET">
          <legend>BadWords</legend>
          <!-- parola da censurare -->
          <div class="mb-3">
            <label  class="form-label">Parola da Censurare</label>
            <input type="text" class="form-control" name="badword">
          </div>
          <!-- messaggio -->
          <div class="mb-3">
            <label for="" class="form-label">Messaggio da inviare</label>
            <textarea class="form-control" name="message"></textarea>
          </div>
          <!-- button -->
          <button class="btn btn-primary">Invia</button>
        </form>
      </div>
      </div>
    </div>
  </main>
</html>