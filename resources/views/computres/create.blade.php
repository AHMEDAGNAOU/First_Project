@extends('layout')
@section('title', 'Cerate Computres')

@section('content')
<div class="max-w-6xl  mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center ml-4  items-center">
        <h1  class="ml-4">Create a new Computre </h1>
        <!-- <h1  class="ml-4">Create a new Computre </h1> -->
    </div>
        <div class="ml-12">
            <form action="{{route('computres.store')}}" method="post">
                @csrf
                <div>
                    <label for="Computre-name">Computer Name  :</label>
                    <input id="Computre-name" name="Computre-name" value="{{old('Computre-name')}}" type="text">
                    @error('Computre-name')
                        <div class="form-error">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="Computre-origin">Computer Origin  :</label>
                    <input id="Computre-origin" name="Computre-origin" value="{{old('Computre-origin')}}" type="text">
                    @error('Computre-origin')
                        <div class="form-error">{{$message}}</div>
                    @enderror
                </div>
                <div>
                    <label for="Computre-price">Computer Price  :</label>
                    <input id="Computre-price" name="Computre-price" value="{{old('Computre-price')}}" type="text">
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
