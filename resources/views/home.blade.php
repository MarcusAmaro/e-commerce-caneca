@extends('layouts.main')
@section('content')
	<style>
        .carousel-item img {
            width: 100%;
            height: auto;
        }



         

   


    </style>

    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	    </ol>

	    <div class="carousel-inner">
	        <div class="carousel-item active">
	            <img src="{{ asset('banners/exemplo1.png') }}" class="d-block w-100" alt="Banner 1">
	        </div>
	        <div class="carousel-item">
	            <img src="{{ asset('banners/exemplo1.png') }}" class="d-block w-100" alt="Banner 1">
	        </div>
	        <div class="carousel-item">
	            <img src="{{ asset('banners/exemplo1.png') }}" class="d-block w-100" alt="Banner 1">
	        </div>
	    </div>

	    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	    </a>

	    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	        <span class="carousel-control-next-icon" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	    </a>

	</div>


	<div class="container mt-4">
		<h1 class="h1 text-center">Mais vendidos</h1>
		<div class="row">
			<div class="col-md-3 mb-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="{{ asset('pagina de venda/imagem1.png') }}" alt="Card image cap">
				  <div class="card-body text-center">
				  	<h5 class="card-title">Caneca Personalizada do seu Jeito (100% Preta)</h5>

				    <p class="card-text ">
				    	<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733; <span class="text-muted">(20)</span></span><br>
		                <span class="font-weight-bold text-success">R$ 37,90 <small class="text-muted">no pix</small></span><br>
		                <small class="text-muted">com 5% de desconto</small><br>
		                <span class="text-muted"><s>R$ 39,90</s></span><br>
		                <span class="text-muted">até 2x de R$ 19,95 sem juros</span>

				    </p>
				    <a href="#" class="btn btn-success btn-block mb-2">Comprar</a>
				  </div>
				</div>
			</div>

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="{{ asset('pagina de venda/imagem1.png') }}" alt="Card image cap">
				  <div class="card-body text-center">
				  	<h5 class="card-title">Caneca Personalizada do seu Jeito (100% Preta)</h5>

				    <p class="card-text ">
				    	<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733; <span class="text-muted">(20)</span></span><br>
		                <span class="font-weight-bold text-success">R$ 37,90 <small class="text-muted">no pix</small></span><br>
		                <small class="text-muted">com 5% de desconto</small><br>
		                <span class="text-muted"><s>R$ 39,90</s></span><br>
		                <span class="text-muted">até 2x de R$ 19,95 sem juros</span>

				    </p>
				    <a href="#" class="btn btn-success btn-block mb-2">Comprar</a>
				  </div>
				</div>
			</div>

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="{{ asset('pagina de venda/imagem1.png') }}" alt="Card image cap">
				  <div class="card-body text-center">
				  	<h5 class="card-title">Caneca Personalizada do seu Jeito (100% Preta)</h5>

				    <p class="card-text ">
				    	<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733; <span class="text-muted">(20)</span></span><br>
		                <span class="font-weight-bold text-success">R$ 37,90 <small class="text-muted">no pix</small></span><br>
		                <small class="text-muted">com 5% de desconto</small><br>
		                <span class="text-muted"><s>R$ 39,90</s></span><br>
		                <span class="text-muted">até 2x de R$ 19,95 sem juros</span>

				    </p>
				    <a href="#" class="btn btn-success btn-block mb-2">Comprar</a>
				  </div>
				</div>
			</div>

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="{{ asset('pagina de venda/imagem1.png') }}" alt="Card image cap">
				  <div class="card-body text-center">
				  	<h5 class="card-title">Caneca Personalizada do seu Jeito (100% Preta)</h5>

				    <p class="card-text ">
				    	<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733; <span class="text-muted">(20)</span></span><br>
		                <span class="font-weight-bold text-success">R$ 37,90 <small class="text-muted">no pix</small></span><br>
		                <small class="text-muted">com 5% de desconto</small><br>
		                <span class="text-muted"><s>R$ 39,90</s></span><br>
		                <span class="text-muted">até 2x de R$ 19,95 sem juros</span>

				    </p>
				    <a href="#" class="btn btn-success btn-block mb-2">Comprar</a>
				  </div>
				</div>
			</div>

		</div>



		<h1 class="h1 text-center">Novidades</h1>
		<div class="row">
			<div class="col-md-3 mb-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="{{ asset('pagina de venda/imagem2.png') }}" alt="Card image cap">
				  <div class="card-body text-center">
				  	<h5 class="card-title">Caneca Personalizada do seu Jeito (100% Preta)</h5>

				    <p class="card-text ">
				    	<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733; <span class="text-muted">(20)</span></span><br>
		                <span class="font-weight-bold text-success">R$ 37,90 <small class="text-muted">no pix</small></span><br>
		                <small class="text-muted">com 5% de desconto</small><br>
		                <span class="text-muted"><s>R$ 39,90</s></span><br>
		                <span class="text-muted">até 2x de R$ 19,95 sem juros</span>

				    </p>
				    <a href="#" class="btn btn-success btn-block mb-2">Comprar</a>
				  </div>
				</div>
			</div>

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="{{ asset('pagina de venda/imagem2.png') }}" alt="Card image cap">
				  <div class="card-body text-center">
				  	<h5 class="card-title">Caneca Personalizada do seu Jeito (100% Preta)</h5>

				    <p class="card-text ">
				    	<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733; <span class="text-muted">(20)</span></span><br>
		                <span class="font-weight-bold text-success">R$ 37,90 <small class="text-muted">no pix</small></span><br>
		                <small class="text-muted">com 5% de desconto</small><br>
		                <span class="text-muted"><s>R$ 39,90</s></span><br>
		                <span class="text-muted">até 2x de R$ 19,95 sem juros</span>

				    </p>
				    <a href="#" class="btn btn-success btn-block mb-2">Comprar</a>
				  </div>
				</div>
			</div>

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="{{ asset('pagina de venda/imagem2.png') }}" alt="Card image cap">
				  <div class="card-body text-center">
				  	<h5 class="card-title">Caneca Personalizada do seu Jeito (100% Preta)</h5>

				    <p class="card-text ">
				    	<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733; <span class="text-muted">(20)</span></span><br>
		                <span class="font-weight-bold text-success">R$ 37,90 <small class="text-muted">no pix</small></span><br>
		                <small class="text-muted">com 5% de desconto</small><br>
		                <span class="text-muted"><s>R$ 39,90</s></span><br>
		                <span class="text-muted">até 2x de R$ 19,95 sem juros</span>

				    </p>
				    <a href="#" class="btn btn-success btn-block mb-2">Comprar</a>
				  </div>
				</div>
			</div>

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="{{ asset('pagina de venda/imagem2.png') }}" alt="Card image cap">
				  <div class="card-body text-center">
				  	<h5 class="card-title">Caneca Personalizada do seu Jeito (100% Preta)</h5>

				    <p class="card-text ">
				    	<span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733; <span class="text-muted">(20)</span></span><br>
		                <span class="font-weight-bold text-success">R$ 37,90 <small class="text-muted">no pix</small></span><br>
		                <small class="text-muted">com 5% de desconto</small><br>
		                <span class="text-muted"><s>R$ 39,90</s></span><br>
		                <span class="text-muted">até 2x de R$ 19,95 sem juros</span>

				    </p>
				    <a href="#" class="btn btn-success btn-block mb-2">Comprar</a>
				  </div>
				</div>
			</div>

		</div>


	</div>
	

@endsection