@extends('user/app')

@section('bg-img',asset('user/img/movie.jpg'))
@section('sub-heading','Millions of movies to discover. Explore now.')
@section('title','Welcome')


@section('main-content')
    @if(isset($trending) && !$trending->isEmpty())
        <div class="col-12 m-0">
            <div class="card  bg-danger">
                <div class="card-header m-0">
                    <h5 class="card-title text-white">Trending Movies</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($trending as $movies)
                    <div class="col-4">
                        <div class="card" style="padding: 10px">
                            <h4 class="card-title" style="text-align: center;font-family: 'Times New Roman';padding-top: 10px"><a href="/movie/{{$movies->id}}" class="text-info underline"><p>{{$movies->title}}</p></a></h4>
                            <a href="">
                                <img src="data:image/png;base64, {{$movies->poster}}" alt="poster" class="w-75 p-3" style="margin-left: 35px"/>
                            </a>
                            <p class="card-text">Runtime
                                : {{floor($movies->runtime / 60).' H : '.($movies->runtime - floor($movies->runtime / 60) * 60).' M'}}</p>
                            </div>
                    </div>
                @endforeach
                <br>
            </div>
        </div>
        <hr>
    @endif
    @if(isset($popular) && !$popular->isEmpty())
        <div class="col-12">
            <div class="card bg-info">
                <div class="card-header m-0">
                    <h5 class="card-title text-white">Popular Movies</h5>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($popular as $movies)
                    <div class="col-4">
                        <div class="card" style="padding: 10px">
                            <h4 class="card-title" style="text-align: center;font-family: 'Times New Roman';padding-top: 10px"><a href="/movie/{{$movies->id}}" class="text-info underline"><p>{{$movies->title}}</p></a></h4>
                            <a href="">
                                <img src="data:image/png;base64, {{$movies->poster}}" alt="poster" class="w-75 p-3" style="margin-left: 35px"/>
                            </a>
                            <p class="card-text">Runtime
                                : {{floor($movies->runtime / 60).' H : '.($movies->runtime - floor($movies->runtime / 60) * 60).' M'}}</p>
                        </div>
                    </div>
                @endforeach
                <br>
            </div>
        </div>
    @endif
    @if(isset($search))
        <div class="col-12">
            <div class="card bg-info">
                <div class="card-header m-0">
                    <h5 class="card-title text-white">Seach Results</h5>
                </div>
            </div>
        </div>
        @foreach($search as $result)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table w-100">
                                <tr>
                                    <td>
                                        <img src="data:image/png;base64, {{$result->poster}}" alt="poster" width="250px"
                                             height="400px"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">
                                        <a href="/movie/{{$result->id}}" class="text-info underline">
                                            <p>{{$result->title}}</p></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        <p>Runtime
                                            : {{floor($result->runtime / 60).' H : '.($result->runtime - floor($result->runtime / 60) * 60).' M'}}</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    @if(isset($trending,$popular) && $trending->isEmpty() && $popular->isEmpty() && !isset($search))
        <div class="col-12">
            <div class="card bg-dark text-white text-center">
                <div class="card-body">
                    <div class="table-responsive" style="height:500px;font-size: x-large;">
                        No Movies Available
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
