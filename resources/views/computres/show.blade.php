@extends('layout')
@section('title', 'Show Computres')

@section('content')
<div class="max-w-6xl  mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center ml-4  items-center">
        <h3  class="ml-4">COMPUTERS </h3>
</div>
        <div class="ml-12">
            <div class="mt-4  text-gray-600 dark:text-gray-400 ">
                <h3>{{$computer['name']}} is from <strong> {{$computer['origin']}} - </strong>{{$computer['price']}}$</h3>              
            </div>
            <div class="text-center mt-8">
                <a class="edit-btn" href="{{ route('computres.edit',$computer->id)}}">edit</a>
                <form action="{{ route('computres.destroy',$computer->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="delete-btn" type="submit" value="delete">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection