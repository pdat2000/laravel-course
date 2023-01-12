{{-- <h1>Product page</h1> --}}
{{-- <h2>{{$title}}</h2> --}}
{{-- <h2>{{$x}}</h2>
<h2>{{$y}}</h2> --}}
<h3>
    @foreach ($my_phone as $item )
        <h2>
            {{$item}}
        </h2>
    @endforeach
</h3>
