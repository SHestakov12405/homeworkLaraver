<html lang="en-US"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Новости</title>

  <link href="{{asset("assets/css/app.css")}}" rel="stylesheet">
  <script type="text/javascript" src="https://themes.getbootstrap.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp"></script>
  <script type="text/javascript" src="https://themes.getbootstrap.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1"></script>
 
    
  </head>
    <body>
      <style>html{margin-top:0 !important;}</style>
  
      <header>
        <nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
          <div class="container">
    
            <button class="navbar-toggler order-2 order-md-1" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <a class="navbar-brand mx-auto order-1 order-md-3" href="index.html">News Portal</a>
    
            <div class="collapse navbar-collapse order-4 order-md-4" id="navbar-right">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('news.category')}}">Категории новостей</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">О нас</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
  
      <main class="main pt-4">

        <div class="container">
    
          <div class="row">
            @yield('show')
            <div class="col-md-3 ms-auto">
    
              <aside class="sidebar">
                <div class="card mb-4">
                  <div class="card-body">
                    <h4 class="card-title">About</h4>
                    <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam <a href="#">semper libero</a>, sit amet adipiscing sem neque sed ipsum. </p>
                  </div>
                </div><!-- /.card -->
              </aside>
    
              <aside class="sidebar sidebar-sticky">
                <div class="card mb-4">
                  <div class="card-body">
                    <h4 class="card-title">Tags</h4>
                    <a class="btn btn-light btn-sm mb-1" href="page-category.html">Journey</a>
                    <a class="btn btn-light btn-sm mb-1" href="page-category.html">Work</a>
                    <a class="btn btn-light btn-sm mb-1" href="page-category.html">Lifestype</a>
                    <a class="btn btn-light btn-sm mb-1" href="page-category.html">Photography</a>
                    <a class="btn btn-light btn-sm mb-1" href="page-category.html">Food &amp; Drinks</a>
                  </div>
                </div><!-- /.card -->
              </aside>
    
            </div>
          </div>
        </div>
    
      </main>
      <div class="site-newsletter">
        <div class="container">
          <div class="text-center">
            <h3 class="h4 mb-2">Подпишитесь на наши новости</h3>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem quisquam quibusdam iste labore deserunt minus alias voluptates beatae impedit natus incidunt</p>
    
            <div class="row">
              <div class="col-xs-12 col-sm-9 col-md-7 col-lg-5 ms-auto me-auto">
                <div class="input-group mb-3 mt-3">
                  <input type="text" class="form-control" placeholder="Email address" aria-label="Email address">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Подписаться</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <footer class="site-footer bg-dark">
        <div class="container">
    
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="#">Политика конфиденциальности</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Правила</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Обратная связь</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Реклама</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="page-contact.html">Контакты</a>
            </li>
          </ul>
          <div class="copy">
            © news portal 2023<br>
            Все права защищены
          </div>
        </div>
      </footer>
  
      <script src="{{asset("assets/js/Chart.min.js")}}"></script>
      <script src="{{asset("assets/js/Chart.bundle.min.js")}}"></script>
      <script src="{{asset("assets/js/tether.min.js")}}"></script>
      <script src="{{asset("assets/js/popper.min.js")}}"></script>
      <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
      <script src="{{asset("assets/js/lazysizes.min.js")}}"></script>
  
      <!-- The filemtime is to append a timestamp for the last time the stylesheet was updated to automate cache busting from CloudFlare -->
      <script src="https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/assets/javascript/scripts.js?ver=1670173476"></script>
  
  
  
  
  </body></html>