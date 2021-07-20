@extends('layout')

@section('content')


	<header>
			<a class="encabezado"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
					<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					<line x1="10" y1="14" x2="21" y2="3" />
					<path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
				</svg><h4 class="tituloprincipal">MyNameIsTravel!</h4>
				<form ><input class="buscador" type="text" placeholder="Search in the Blog"></form>	
			</a>
			
		</header>

@endsection



<!-- image Alex -->

@section('image')

	<div class= "alex">
		
		<img  src="<?php echo e(asset('images/a.png')); ?>">

	</div>

@endsection

@section('topics')
	<div class="topical">
		<a class="topics">
			TOPICS
		</a>
	</div>

@endsection

@section('imagetopics')


	<div class="imagen123">	

		

		<input type="image" class="a" src="<?php echo e(asset('images/madrid.jpg')); ?>">
		<input type="image" class="a" src="<?php echo e(asset('images/quito.jpg')); ?>" >
		<input type="image" class="a" src="<?php echo e(asset('images/turquia.jpg')); ?>">
		<input type="image" class="a" src="<?php echo e(asset('images/moscu.jpg')); ?>">
		<input type="image" class="a" src="<?php echo e(asset('images/paris.jpg')); ?>">
		<input type="image" class="a" src="<?php echo e(asset('images/mallorca.jpg')); ?>">
		<input type="image" class="a" src="<?php echo e(asset('images/brasil.jpg')); ?>">
		

	</div>
	

@endsection()

@section('paices')

		@foreach ($destino as $item)
			<a  href="{{ route ('home',$item)}}" class="callme letrita">{{$item}}</a>
		@endforeach

		@if(!empty($nombre))

			
			@switch($nombre)

				@case($nombre == 'Madrid')
					<fieldset>
						<legend class="callme">{{$nombre}}</legend>
	
						<p class= "texto">
							Capital city of Spain since 1562, active and modern, it offers countless attractions to its visitors. Geographical center of the Iberian Peninsula, it has a very extensive monumental heritage with a huge number of museums and art galleries. Madrid is located on a plateau, and its proximity to the surrounding mountains influences its climate, endowing it with hot summers and relatively cold winters. Hello world!
						</p>
					
					</fieldset>
				@break	
			@endswitch
		@endif	

@endsection


@section('footer')
<footer>
		<nav >
			<section class="navfin">
	
					<div class="redes">
						
						<svg xmlns="http://www.w3.org/2000/svg" class="face icon-tabler icon-tabler-brand-facebook" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC300" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							<path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
						  </svg>
		
						  <svg xmlns="http://www.w3.org/2000/svg" class="insta icon-tabler icon-tabler-brand-instagram" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC300" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							<rect x="4" y="4" width="16" height="16" rx="4" />
							<circle cx="12" cy="12" r="3" />
							<line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
						  </svg>
		
						  <svg xmlns="http://www.w3.org/2000/svg" class="vk icon-tabler icon-tabler-brand-vk" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC300" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							<path d="M10 6h2v12c-4.5 -1 -8 -6.5 -9 -12" />
							<path d="M20 6c-1 2 -3 5 -5 6h-3" />
							<path d="M20 18c-1 -2 -3 -5 -5 -6" />
						  </svg>
		
						  <svg xmlns="http://www.w3.org/2000/svg" class="email icon-tabler icon-tabler-at" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC300" fill="none" stroke-linecap="round" stroke-linejoin="round">
							<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
							<circle cx="12" cy="12" r="4" />
							<path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
						  </svg>

						  <h3 class="netwok">follow me on my social networks for more adventures around the world</h3> 
					</div>

			</section>
			<div class="navend">
				<h4 class="copyright"> © 2021 MyNameIsTravel. All rigths resrved .<div>Made by Alex David Lastra Garcia</div><span></span></h4>
			</div>

		</nav>
	</footer>
@endsection()
