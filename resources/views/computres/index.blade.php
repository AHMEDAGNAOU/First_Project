@extends('layout')
@section('title', 'computres')

@section('content')
<div class="max-w-6xl  mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center ml-4  items-center">
        <h2 class="ml-4">COMPUTERS </h2>
</div>
        <div>
            <div class="dark:text-gray-400 text-center ">
                @if (count($computers) > 0)
                    <ul>
                        @foreach($computers as $computre)
                            <a href="{{ route('computres.show', ['computre' => $computre['id']]) }}"><li>{{$computre['name']}} is from <strong> {{$computre['origin']}} - {{$computre['price']}}$</strong></li></a>
                        @endforeach
                    </ul>
                @else
                    <p>there are not Computers to display</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection