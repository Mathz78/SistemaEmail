@extends('dashboard')

@section('content')

    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/novo.css') }}">
    </head>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="well well-sm">
                    <form class="form-horizontal" action="{{ route('email.add') }}" method="post">
                        @csrf
                        <fieldset>
                            <legend class="text-center">New E-mail</legend>

                            <!-- E-mail input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">E-mail</label>
                                <div class="col-md-9">
                                    <input id="name" name="email" type="search" placeholder="Your e-mail" class="form-control" list="users">
                                    <datalist id="users">
                                        @foreach($users as $user)
                                            <option value="{{ $user->email }}"></option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Subject</label>
                                <div class="col-md-9">
                                    <input id="email" name="subject" type="text" placeholder="Subject" class="form-control">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Your message</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
