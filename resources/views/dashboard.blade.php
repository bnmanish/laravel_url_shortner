<style>
table {
    width: 100%;
    border-collapse: collapse;
}
table th,
table td {
    border: 1px solid #d1d5db;
    padding: 10px;
    text-align: left;
}
table th {
    background-color: #f3f4f6;
    font-weight: bold;
}
table tr:nth-child(even) {
    background-color: #f9fafb;
}
table tr:hover {
    background-color: #f3f4f6;
}
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>User</th>
                                <th>Company</th>
                                <th>URL</th>
                                <th>Short URL</th>
                                <th>Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $dataRow)
                            <tr>
                                <td>{{$dataRow->id}}</td>
                                <td>{{$dataRow->title}}</td>
                                <td>{{ $dataRow->user->name }}</td>
                                <td>{{ $dataRow->company->name }}</td>
                                <td>{{$dataRow->url}}</td>
                                <td><a href="{{ url($dataRow->url_id) }}" target="_blank">{{ url($dataRow->url_id) }}</a></td>
                                <td>{{$dataRow->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
