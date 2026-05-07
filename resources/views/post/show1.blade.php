<x-layout>
	@foreach ($userssss as $user)
		<div>
			<h3> Имя: {{ $user->name }}</h3>
			<div>
			 <ul>
				<li> Email: {{ $user->email }}</li>
				<li> Возраст: {{ $user->age }}</li>
				<li> Зарплата: {{ $user->salary }}</li>
				<li> Дата создания: {{ $user->created_at }}</li>
				<li> Дата обновления: {{ $user->updated_at }}</li>
			 </ul>  
			</div>
		</div>
	@endforeach
</x-layout>
