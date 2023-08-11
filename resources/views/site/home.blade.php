@extends('site.layout')
@section('conteudo')

<div class="row container">
    @foreach ($events as $event)
        <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img src="{{ $event->image }}">
                <a href="{{ route('site.details', $event->id) }}" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">remove_red_eye
                </i></a>
                </div>
                <div class="card-content">
                <span class="card-title">{{ $event->name }}</span>
                <p>{{ Str::limit($event->description, 20)}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="row">
    {{ $events->links('custom.pagination') }}
</div>

@endsection