@extends('layouts.app')

@section('content')

<div class="container py-4">

    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Dashboard</h4>

            @if(in_array(Auth::user()->role, ['Admin', 'Member']))
                <a href="{{ route('create.link') }}" class="btn btn-primary">
                    Create Short URL
                </a>
            @endif
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th width="60">#</th>
                            <th>Title</th>
                            <th>User</th>
                            <th>Company</th>
                            <th>Original URL</th>
                            <th>Short URL</th>
                            <th width="180">Created</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($data as $row)

                            <tr>

                                <td>{{ $row->id }}</td>

                                <td>{{ $row->title }}</td>

                                <td>{{ $row->user->name ?? '-' }}</td>

                                <td>{{ $row->company->name ?? '-' }}</td>

                                <td>
                                    <a href="{{ $row->url }}"
                                       target="_blank"
                                       class="text-decoration-none">
                                        {{ Str::limit($row->url, 60) }}
                                    </a>
                                </td>

                                <td>
                                    <a href="{{ url($row->url_id) }}"
                                       target="_blank"
                                       class="fw-bold">
                                        {{ url($row->url_id) }}
                                    </a>
                                </td>

                                <td>
                                    {{ $row->created_at->format('d M Y h:i A') }}
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="7" class="text-center">
                                    No Short URLs Found.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection