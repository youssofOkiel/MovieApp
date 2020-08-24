@extends('layouts.app')

@section('content')
{{--<div class="" >--}}

    <div class="container text-black ">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header flex flex-row items-center ">
                        <i class="fa fa-tachometer text-orange-600 mr-2" style="font-size:36px"></i>
                        <div class="font-semibold text-xl">Hi, {{auth::user()->name}} </div>
                    </div>

                    <div class="card-body">
                          <div class="card border-danger
                            transition duration-500 ease-out transform hover:scale-110 hover:shadow-2xl" style="width:300px">
                            <img class="card-img-top" src="{{asset('image/avatar.png')}}" alt="Card image" style="width:100%">
                            <div class="card-body">
                                <h4 class="card-title text-blue-800 font-bold text-lg">
                                    MR,&nbsp;{{auth::user()->name}}</h4>
                                <p class="card-text my-4">
                                    your Email : &nbsp;&nbsp;
                                    {{auth::user()->email}} </p>
                                <a href="#" class="btn btn-primary">update Profile</a>
                                <a href="#" class="btn btn-danger">delete Profile</a>
                            </div>
                          </div>
                    </div>

                    <div class="card flex-row-reverse  text-red-600 " >
                        !!! Updating  sooon ... More features :) &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--</div>--}}
@endsection
