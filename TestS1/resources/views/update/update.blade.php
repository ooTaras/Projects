@extends('layout.layout')
@section('main_content')

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Add Article</h1>
                <p class="lead text-muted">Будь-ласка заповніть форму </p>
            </div>
        </div>
    </section>
    <div class="container vac">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="container">
        <div class="container vac" >
            <form action="{{route('sub_update',$data->id)}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                    <input type="text" class="form-control" name="Title" value="{{$data->Title}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Description</label>
                    <input type="text" class="form-control" name="Description" value="{{$data->Description}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Text</label>
                    <textarea class="form-control" name="Text" rows="3">{{$data->Text}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
