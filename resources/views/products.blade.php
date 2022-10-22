@extends('base')

@section('content')
    <h1>Products</h1>
    <hr>

    @if(count($products)==0)
        <p>There are no products.</p>
    @else
        <ul>
            @foreach($products as $p)
                <li>{{$p}}</li>
            @endforeach
        </ul>
    @endif
@endsection


@section('scripts')

<script>
</script>

@endsection

