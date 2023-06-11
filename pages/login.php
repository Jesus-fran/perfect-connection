<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>RS WISP</title>
    <!-- CSS files -->
    <link href="assets/dist/css/tabler.min.css?1668288743" rel="stylesheet"/>
    <link href="assets/dist/css/tabler-flags.min.css?1668288743" rel="stylesheet"/>
    <link href="assets/dist/css/tabler-payments.min.css?1668288743" rel="stylesheet"/>
    <link href="assets/dist/css/tabler-vendors.min.css?1668288743" rel="stylesheet"/>
    <link href="assets/dist/css/demo.min.css?1668288743" rel="stylesheet"/>
  </head>
  <body  class=" d-flex flex-column bg-white">
    <script src="assets/dist/js/demo-theme.min.js?1668288743"></script>
    <div class="row g-0 flex-fill">
      <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
        <div class="container container-tight my-5 px-lg-5">
          <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
          </div>
          <h2 class="h3 text-center mb-3">
            CONTROL DE ACCESO
          </h2>
          <form action="" method="post" id="adminLoginFrm">
            <div class="mb-3">
              <label class="form-label">Correo Empleado</label>
              <input type="email" name="username" class="form-control" placeholder="tuemail@email.com" autocomplete="off">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Contraseña
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" name="password" placeholder="Tu contraseña"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Ingresar al Sistema</button>
            </div>
          </form>
          <div class="text-center text-muted mt-3">
            ¿No tienes una cuenta? Acude con Soporte Técnico
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url(assets/dist/img/fondoindex.jpg)"></div>
      </div>
    </div>
    <!-- <script src="assets/dist/js/tabler.min.js?1668288743" defer></script>
    <script src="assets/dist/js/demo.min.js?1668288743" defer></script> -->
  </body>
</html>

