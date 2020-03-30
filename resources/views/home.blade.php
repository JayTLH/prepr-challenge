@extends('layouts.app')

@section('content')
<div class="container">
    <div class="lab" style="background: #ffffff; padding: 20px;">
        <div class="lab__nav" style="margin: 0 0 10px 0; display: flex; justify-content: space-between; align-items: center;">
            <h3 class="lab__header" style="font-weight: bold; color: #727d92;">LABS</h3>
            <div class="lab__features" style="display: flex; justify-content: space-between; align-items: center;">
                @if ($admin ?? '' === 'admin')
                <a class="lab__admin-link" href="{{ url('/admin') }}">
                    <button class="lab__admin-button" style="background: #ffffff; color: #8b8b8b; border: 1px solid #dbdfe2;">ADMIN FEATURE</button>
                </a>
                @endif
            </div>
        </div>
        <div class="lab__divider" style="width: 100%; height:1px; background: #727d92; margin: 0 0 20px 0;"></div>

        <div class="lab__body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
            @endif

            @foreach ($labs as $lab)
            <div class="lab__card" style="margin: 0 0 20px 0; display: flex;">
                <a class="lab__map-link" href="http://maps.google.com/?q={{$lab['address']}}" target="_blank">
                    <img class="lab__img" style="width: 320px; margin: 0 30px 0 0;" src='{{asset("images/placeholder.png")}}' alt="image of the lab">
                </a>
                <div class="lab__info">
                    <a class="lab__map-link" href="http://maps.google.com/?q={{$lab['address']}}" target="_blank">
                        <h4 class="lab__title" style="font-weight: bold; color: #727d92; margin: 0 0 20px 0;">{{$lab['title']}}</h4>
                    </a>
                    <div class="lab__map-info" style="display: flex; align-items: center">
                        <img class="lab__map-marker-icon" style="width: 18px; height: 30px;margin: 0 10px 0 0;" src='{{asset("images/map-marker.png")}}' alt="map marker icon" />
                        <a class="lab__map-link" href="http://maps.google.com/?q={{$lab['address']}}" target="_blank">
                            <p class="lab__map-address" style="margin: 0; color: #0064cf">{{$lab['address']}}</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="lab__divider" style="width: 100%; height:1px; background: #727d92; margin: 0 0 20px 0;"></div>
            @endforeach

        </div>
    </div>
</div>
@endsection