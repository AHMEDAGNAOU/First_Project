@extends('layout')
@section('title', 'Edit Computres')

@section('content')
<div class="max-w-6xl  mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center ml-4  items-center">
        <h1  class="ml-4">Edit an old Computre </h1>
    </div>
        <div class="ml-12">
            <form action="{{route('computres.update', $computer->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="Computre-name">Computer Name  :</label>
                    <input id="Computre-name" name="Computre-name" value="{{$computer->name}}" type="text">
                    @error('Computre-name') 
                        <div class="form-error">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="Computre-origin">Computer Origin  :</label>
                    <input id="Computre-origin" name="Computre-origin" value="{{$computer->origin}}" type="text">
                    @error('Computre-origin')
                        <div class="form-error">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="Computre-price">Computer Price  :</label>
                    <input id="Computre-price" name="Computre-price" value="{{$computer->price}}" type="text">
                    @error('Computre-price')    
                        <div class="form-error">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
