@extends('admin/layouts/app')
@section('headSection')
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">

    <link rel="stylesheet" href="{{asset("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-responsive/css/responsive.bootstrap4.min.css") }}">
    <link rel="stylesheet" href="{{asset("plugins/datatables-buttons/css/buttons.bootstrap4.min.css") }}">


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

@endsection
@section('main-content')


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb ">
                            <li class="breadcrumb-item" style="font-size: 25px"><a href="#">Movies Details</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="text-center">
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('movies-create')}}" style="font-size: 15px;border-radius: 10px"> Add New Movie</a>
                        <a class='col-lg-offset-5 btn btn-success' href="{{route('cast-create')}}" style="font-size: 15px;border-radius: 10px"> Add Cast</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr style="font-size: 15px">
                                    <th>Sr. No</th>
                                    <th>Movie Title</th>
                                    <th>Movie Poster</th>
                                    <th>overview</th>
                                    <th>Runtime</th>
                                    <th>Release Year</th>
                                    <th>Cast</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($movie as $movies)
                                    <tr>
                                        <td style="font-size: 14px">{{$loop->index +1}}</td>
                                        <td style="font-size: 14px">{{$movies->title}}</td>
                                        <td> <img src="data:image/png;base64, {{$movies->poster}}" alt="image" width="150px" height="200px"></td>
                                        <td style="font-size: 14px">{{$movies->overview}}</td>
                                        <td style="font-size: 14px">{{floor($movies->runtime / 60).' H : '.($movies->runtime - floor($movies->runtime / 60) * 60).' M'}}</td>
                                       
                                        <td style="font-size: 14px">{{$movies->release_year}}</td>
                                        <td>
                                            @foreach(\App\Models\Cast::select("actor_id")->where("movie_id", "=", $movies->id)->get() as $castdata)
                                                @foreach(\App\Models\Actor::select("image")->where("id", "=", $castdata->actor_id)->get() as $cast)
                                                @endforeach
                                                <img src="data:image/png;base64, {{$cast->image}}" alt="image" width="40px" height="40px" style="display: inline-block;"/>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
    </div>
@endsection
