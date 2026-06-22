<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Invite User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                	@if(session('success'))
					    <div class="text-green-600 mb-4">
					        {{ session('success') }}
					    </div>
					@endif
                    <form method="POST" action="{{ route('invite.store') }}">
                        @csrf
                        <div>
                        	Name : <input type="text" name="name" required>
                        </div>
                        <div>
                        	email : <input type="email" name="email" required>
                    	</div>
                        @if(Auth::user()->role === 'Super Admin')
                    	<div> Select Company : 
                        <select name="company" required >
                            <option value="">Select Company</option>
                            @foreach($companies as $company)
                                <option value="{{ $company->id }}">
                                    {{ $company->name }}
                                </option>
                            @endforeach
                        </select>
                    	</div>
                        @endif
                    	<div>
	                        Password : <input type="password" name="password" required>
                    	</div>
                         <div class="flex justify-end">
                            <x-primary-button>Submit</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
