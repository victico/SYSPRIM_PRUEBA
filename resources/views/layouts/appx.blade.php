<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SYSPRIM - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
	  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">SYSPRIM</a>
	  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  </div>
	</header>
	<div class="container-fluid">
	  <div class="row">
	    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
	      <div class="position-sticky pt-3">
	        <ul class="nav flex-column">
	          <li class="nav-item">
	            <a class="nav-link {{ (Request::is('/')) ? ' active': '' }}" aria-current="page" href="/">
	              
	              Home
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link {{ (Request::is('cars')) ? 'active': '' }} " aria-current="page" href="{{Route('cars.index')}}">
	              
	              Vehiculos
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link {{ (Request::is('brand')) ? 'active': '' }}" href="{{Route('brand.index')}}">
	              
	              Marcas
	            </a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link {{ (Request::is('modelos')) ? 'active': '' }}" href="{{Route('modelos.index')}}">
	              
	              Modelos
	            </a>
	          </li>
	        </ul>
	      </div>
	    </nav>
	    @yield('content')
	  </div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/function.js')}}" ></script>
  </body>
</html>

