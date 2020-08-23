@extends('layouts.app')

@section('content')
    <div class="container text-black">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-lg">You can mail us
                        <i class="material-icons mx-2 ml-2" style="font-size:25px">email</i></div>

                    <div class="card-body">

                            <div class="alert alert-success font-bold text-2xl " role="alert">
                                Hi sir
                            </div>
                        @if(count($errors) > 0)
                            <ul>
                            @foreach($errors->all() as $error )
                            <div class="alert alert-danger" role="alert">
                                <li> {{$error}}</li>
                            </div>
                            @endforeach
                            </ul>
                        @endif

                        @if($message = \Illuminate\Support\Facades\Session::get('Email Sent'))
                            <div class="alert alert-success font-bold text-2xl " role="alert">
                                <strong>{{$message}}</strong>
                            </div>
                        @endif

                        <form method="post" action="{{ url('sendMail/send') }}" >
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1"> enter your Email address</label>
                                @csrf
                                <input name="email" type="email" class="form-control"  placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">type of request</label>
                                <select class="form-control" name="type">
                                    <option>work</option>
                                    <option>hiring</option>
                                    <option>complaint</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">your massege</label>
                                <i class="material-icons">create</i>
                                @csrf
                                <textarea name="message" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary rounded-full ">send
                                <i class="material-icons mx-2 ml-2 text-sm" >send</i> </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
