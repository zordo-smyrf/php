<x-layout>
	@foreach ($userssss as $user)
		<div>
			<h2> Имя: {{ $user->name }}</h2>
			<div>
			 <p> Email: {{ $user->email }} </p>
             <p> Возраст: {{ $user->age }} </p>   
			</div>
		</div>
	@endforeach
</x-layout>
