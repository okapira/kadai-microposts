@if (Auth::id() != $user->id)
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- アンお気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif