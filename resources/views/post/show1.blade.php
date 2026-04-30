<x-layout>
	@foreach ($userssss as $user)
		<div>
			<h2>{{ $user->name }}</h2>
			<div>
				{{ $user->email }}
                {{ $user->age }}
                {{ $user->salary }}
                {{ $user->created_at }}
                {{ $user->updated_at }}
			</div>
		</div>
	@endforeach
</x-layout>
