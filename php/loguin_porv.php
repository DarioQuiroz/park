<!DOCTYPE html>
<html>

<head>
  <title>Piqueretaro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="csrf-param" content="authenticity_token" />
  <meta name="csrf-token" content="g/QU3AZh400Y0s1SM/hSHjFBKiI09qHAFsbE+05r+SE4rw/3W1rDo2BrVmkxQW+MPeDLmq/2WcDX7ti/5gAXUQ==" />
  <link rel="stylesheet" media="all" href="../assets/application-6eaf635c425c1686eab15669fd509649ff45060b315fe52358f8f7aef81136c8.css" data-turbolinks-track="reload" />
  <script src="../assets/application-c2684059e5b98adb61b71a5d9ac339856999beefb748deb1e974ab2a7c2943d0.js" data-turbolinks-track="reload"></script>

</head>

<body>


  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">Parque Industrial Querétaro</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarMain">
        <ul class="navbar-nav mr-auto mt-2 mt-md-0">
        </ul>

        <ul class="navbar-nav">

          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="../index.html">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="segundo.html">Intranet</a></li>
            <li class="nav-item"><a class="nav-link" href="provedores_public.php">Lista de Proveedores</a></li>

          </ul>
        </ul>
      </div>
    </div>
  </nav>



  <div class="space-100"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <h1 class="text-center">Iniciar Sesión</h1>

        <form class="new_user" id="new_user" action="validar_usuario_prov.php" accept-charset="UTF-8" method="post">
          <input name="utf8" type="hidden" value="&#x2713;" />
          <input type="hidden" name="authenticity_token" value="744PfO31v9a6OYZ1Qlw1xbtKtk+aVh4RH6Cc+LEkXQymSjhRy+F0pBYOvfGypy+gdfjSlMe6Go7v14cadaXVWw==" />
          <div class="form-group">
            <input autofocus="autofocus" placeholder="Correo electrónico" class="form-control" type="email" value="" name="usuario" id="user_email" />
          </div>

          <div class="form-group">
            <input autocomplete="off" placeholder="Contraseña" class="form-control" type="password" name="clave" id="user_password" />
          </div>



          <div class="form-group">
            <input type="submit" name="commit" value="Iniciar Sesión" class="btn btn-primary btn-block btn-lg" data-disable-with="Iniciar Sesión" />
          </div>
        </form>

      </div>
    </div>

  </div>
  <div class="space-100"></div>
  <footer class="footer text-muted bg-light">
    <div class="container">
      <span>© 2019 Parque Industrial Queretaro</span>
      <ul class="list-inline mb-0 float-right">
      </ul>
    </div>
  </footer>

</body>

</html>