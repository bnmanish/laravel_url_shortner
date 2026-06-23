<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Short URL
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                	@if(session('success'))
					    <div class="text-green-600 mb-4">
					        {!!session('success')!!}
					    </div>
					@endif
                    @if ($errors->any())
                        <div class="text-red-600 mb-4">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{route('store.link')}}">
                        @csrf
                        <div>
                        	Title : <input type="text" name="title" required>
                        </div>

                        <div>
                        	URL : <input type="text" name="url" required>
                    	</div>
                         <div class="flex">
                            <x-primary-button>Create</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
