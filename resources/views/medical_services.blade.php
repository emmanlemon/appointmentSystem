@extends('layout.master')

@section('content')
<title>Medical Services</title>
<div class="container min-vh-100 mt-2 mb-2">
    <div class="h-25 w-100 p-4" style="background-image:url({{ asset('images/history.png') }}); background-size: 100%; min-height: 50vh; background-repeat: no-repeat;">
    </div>
    <div class="row mt-4">
        @forelse($services as $service)
        <span class="border border-info text-center text-uppercase font-weight-bold fs-5 text-white shadow p-2 rounded" style="background-color:#329dc7;">        {{ $service->name }}        </span>
        <table class="table table-striped">
        @forelse($service->children->chunk(3) as $chunk)
        <tr>
            @foreach ($chunk as $children)
                    <td>{{ $children->name }}</td>
            @endforeach
        </tr>
        @empty
        <p>No Service Child for this Service</p>
        @endforelse
</table>
    @empty
    <span class="border border-info text-center text-uppercase font-weight-bold fs-5 text-white shadow p-2 rounded" style="background-color:#329dc7;">No services available</span>
    @endforelse
    
    </div>

</div>
@endsection
