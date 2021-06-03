@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('main-content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="font-size: 24px">
                Create Movies
            </h1>

        </section>

        <section class="content">
            <div class="row">
                <div class="col-md-12" style="font-size: 15px">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title" style="font-size: 18px;padding: 5px">Movie</h3>
                        </div>
                        @if(count($errors) >0)
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                        @if (session()->has('message'))
                            <p class="alert-default-success">{{session('message')}}</p>
                        @endif

                        <form role="form" action="{{route('movies-save')}}" method="post" enctype="multipart/form-data">

                            {{csrf_field()}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="movie_title">Movie Title</label>
                                    <input type="text" class="form-control"  style="font-size: 15px;height: 35px" id="movie_title" name="movie_title" placeholder="Movie Name">
                                </div>

                                <div class="form-group">
                                    <label for="movie_overview">Overview</label>
                                    <textarea type="text" name="movie_overview" class="input p-2 w-100" placeholder="Movie Overview" style="height: 150px;" required></textarea>
                                    {{--                                    <input type="text" class="form-control" style="font-size: 15px;height: 35px" id="bio" name="bio" placeholder="bio">--}}
                                </div>

                                <div class="form-group">
                                    <label for="movie_runtime">Runtime</label>
                                    <input type="number" class="form-control" style="font-size: 15px;height: 35px" id="movie_runtime" name="movie_runtime" placeholder="birth date">
                                </div>

                                <div class="form-group">
                                    <label for="movie_image">Poster</label>
                                    <input type="file"  name="movie_image" id="movie_image" class="input p-2 w-100">
                                </div>

                                <div class="form-group">
                                    <label for="movie_release_year">Release Year</label>
                                    <input type="date" class="form-control" style="font-size: 15px;height: 35px" id="movie_release_year" name="movie_release_year" placeholder="Release year">
                                </div>

                                <div class="form-group">
                                    Is Popular   <input type="checkbox" name="movie_popular" >

                                    Is Trending   <input type="checkbox" name="movie_trending">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="font-size: 18px">Submit</button>
                                <a type="button"  href="" class="btn btn-warning" style="font-size: 18px">Back</a>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('footerSection')
    <script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        $(document).ready(function (){
            $(".select2").select2();
        });

    </script>
@endsection
