@extends('user/app')

@section('bg-img',asset('user/img/movie.jpg'))
@section('sub-heading','Millions of movies to discover. Explore now.')
@section('title','Movie Details')


@section('main-content')
    <div class="col-12">
        <div class="card bg-light">
            <div class="card-body">
                <div class="table-responsive">
                    <a href="/home" class="btn btn-primary" style="float: right;margin-right: 100px;border-radius: 5px;padding: 15px">Back</a>
                    <table class="table table-borderless w-100 m-0">
                        <tr>
                            <td class="text-center">
                                <img src="data:image/png;base64, {{$movie->poster}}" alt="poster" width="250px"
                                     height="400px"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Movie Name : <a href="/movie/{{$movie->id}}" class="text-info underline"><p>{{$movie->title}}</p></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Runtime : <p class="text-primary">{{floor($movie->runtime / 60).' H : '.($movie->runtime - floor($movie->runtime / 60) * 60).' M'}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Release Date : <p>{{$movie->release_year}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Overview : <p>{{$movie->overview}}</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                cast :
                            </td>
                        </tr>

                        <tr>
                            <td>
                                @foreach(\App\Models\Cast::select("*")->where("movie_id", "=", $movie->id)->get() as $castdata)
                                    @foreach(\App\Models\Actor::select("*")->where("id", "=", $castdata->actor_id)->get() as $cast)
                                    @endforeach
                                    <div class="mt-1 d-inline-block bg-light text-center">
                                        <img src="data:image/png;base64, {{$cast->image}}" alt="poster" width="100px" height="100px" style="display: inline-block;"/>
                                        <br><a href="/actor/{{$cast->id}}" class="text-info">{{$cast->name}}</a><br>
                                        <span class="text-primary">{{$castdata->role}}</span>
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
