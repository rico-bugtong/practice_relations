@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- @foreach ($users as $user)
                        <h2>{{ $user->name }}</h2>
                        <p>{{ $user->address->country }}</p>
                    @endforeach --}}

                    {{-- @foreach ($addresses as $address)
                        <h2>{{ $address->country }}</h2>
                        <p>{{ $address->user->name }}</p>
                    @endforeach --}}

                    @foreach ($users as $user)
                        <h2>{{ $user->name }}</h2>

                        @foreach ($user->addresses as $address)
                            <p>{{ $address->country }}</p>
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
