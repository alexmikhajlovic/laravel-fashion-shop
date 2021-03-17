@extends ('layouts.app')

@section('title', 'Products')

@section('content')

<h1>Products</h1>
<div class="dresses">

    @foreach ($dresses as $dress)

        <div class="dress-box text-center">

            <div class="cover-path">
                <img src="{{$dress->cover_path}}" alt="">
            </div>

            <div class="info">

                <h3>{{$dress->name}}</h3>
    
                <p class="long-string">{{$dress->overview}}</p>

                <p><i class="fas fa-dollar-sign"></i>{{$dress->price}} | <i class="fas fa-tag"></i>{{$dress->size}}</p>

                <p><i class="fas fa-fingerprint"></i>{{$dress->item_id}}</p>
            </div>

            
        
        </div>

        
    @endforeach

</div>

@endsection