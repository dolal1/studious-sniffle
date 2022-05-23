{{-- Blade Syntax --}}
<h1>{{$heading}}</h1>

@if (count($listings) ==0)
    <p>No listings Found</p>
@endif

@foreach($listings as $list)
    <h2>
        <a href="/listing/{{$list['id']}}">
        {{$list['title']}}
        </a>
    </h2>
    <p>{{$list['description']}}</p>
@endforeach
