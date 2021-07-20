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

@endsection()


@section('topics')
	<div class="topical">
		<a class="topics">
			DESTINATIONS
		</a>
	</div>

@endsection()

@section('cuadrado')

	<form action="" class="cajita">
		<fieldset>
			<legend class="callme">MADRID</legend>
			
			<div class="pcity">
				<img class="a1" src="<?php echo e(asset('images/madrid.jpg')); ?>">
				<p class= "texto">
				Capital city of Spain since 1562, active and modern, it offers countless attractions to its visitors. Geographical center of the Iberian Peninsula, it has a very extensive monumental heritage with a huge number of museums and art galleries. Madrid is located on a plateau, and its proximity to the surrounding mountains influences its climate, endowing it with hot summers and relatively cold winters. Hello world!
				</p>
			</div>
		</fieldset>


		<fieldset>
		<legend class="callme">QUITO</legend>
		<div class="pcity">
			<img class="a1" src="<?php echo e(asset('images/quito.jpg')); ?>">
				<p class= "texto">
					Quito, the first city declared by UNESCO Cultural Heritage of Humanity, is located in the Andes mountain range. The city is surrounded by twelve volcanoes, among them: Pichincha, Cotopaxi, Antisana, Cayambe, which make up a majestic Andean contour. The historic center of Quito is probably the largest in Latin America, not only for its size but also for the architectural monuments that contains. Thus, Quito offers you a variety of cultural, academic, recreational options, museums, bookstores and shows..</p>
		</div>
		</fieldset>
		
		

		<fieldset>
		<legend class="callme">TURKEY</legend>
			<div class="pcity">
				<img class="a1" src="<?php echo e(asset('images/turquia.jpg')); ?>">

				<p class= "texto">
					Turkey is a country between Asia and Europe, with 814,578 km² of total area. It occupies most of Asia Minor (Anatolia), however the western territory that surrounds Istanbul is European. These two parts of its territory are separated by the Bosphorus channel. Turkish Thrace in Europe covers about 3% of the country's land area.
				</p>
			</div>
				</fieldset>
			

		<fieldset>
		<legend class="callme" >MOSCOW</legend>
			<div class="pcity">
			<img class="a1" src="<?php echo e(asset('images/moscu.jpg')); ?>">
				<p class= "texto">
				Moscow is the capital and largest city of Russia. Since its founding in 1147, Moscow (Russian: Moskva) has been at the crossroads of history as the capital of empires and a frequent target of invaders. As the capital of the Russian Empire, the Soviet Union and, today, the Russian Federation , has played a central role in the development of the largest country in the world. For many, the view of the Kremlin complex in the city center still is steeped in symbolism and history.Today, Moscow is a prosperous capital and lush, brimming with life, culture, and sometimes traffic. Moscow, a sprawling metropolis, home to numerous museums, monoliths Soviet-era and post-Soviet kitsch, but continues to raid the path as Muscovites move into the 21st century
				</p>
			</div>
		</fieldset>


		<fieldset>
		<legend class="callme">PARIS</legend>
			<div class="pcity">
				<img class="a1" src="<?php echo e(asset('images/paris.jpg')); ?>">

		<p class= "texto" >
			Paris is the capital of France and one of the great European cities. It is for many the most romantic and popular tourist destination on the entire planet.Notre Dame CathedralPhotography by Julian Fong Located in north central France, Paris is one of the most visited cities in the world, as well as being the cradle of some avant-garde movements. Its long history and its rich cultural, gastronomic and social heritage make it the preferred destination for thousands of tourists, attracted by fantastic monuments such as the Arc de Triomphe, the Notre Dame Cathedral or the Eiffel Tower, among others, as well as by the works of art that the Louvre Museum owns. .
			</p>
			</div>
		</fieldset>


		<fieldset>
		<legend class="callme">MALLORCA</legend>
			<div class="pcity">
				<img class="a1" src="<?php echo e(asset('images/mallorca.jpg')); ?>">

				<p class= "texto">
				Mallorca is the largest island of the Balearic Islands. It is also, and with good reason, one of the most popular and beloved destinations in the Mediterranean.The Balearic Islands form an autonomous community made up of Mallorca, Menorca, Ibiza and Formentera. The two official languages ​​are Catalan and Spanish, and on the island it is common to hear people speak in Majorcan (Majorcan), a local dialect of Catalan. English and German are also very present, greatly facilitating communication.
				</p>
			</div>
		</fieldset>


		<fieldset>
		<legend class="callme">RIO OF JANEIRO</legend>
			<div class="pcity">
				<img class="a1" src="<?php echo e(asset('images/brasil.jpg')); ?>">

				<p class= "texto">
					Rio de Janeiro is located in the southeast of Brazil and is the second most populated city, one of the main economic sources of that country and which has a large amount of financial and cultural resources. It is the Brazilian city with the highest tourist influx and has the privilege of being the first city in South America to hold an Olympiad.This city is known as Ciudad Maravillosa (Cidade Maravilhosa in Portuguese) and it is that it elegantly combines the urban with nature, culture, history and fun.This city is established in an area that is not very conducive to the establishment of a large city due to the geographical characteristics of the area that is very limited between the mountains and the ocean. All these characteristics demanded an effort from its urban planners to design various bridges and tunnels for transit, since sometimes the width of the city is limited to no more than 10 blocks.
				</p>
			</div>
		</fieldset>
	</form>
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
@endsection