@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    {{ config('app.name', 'Laravel') }}
                </div>
            <div>
                <div class="panel-body">
                    <ul class="chat">
                        @foreach($messages as $m)
                            <li class="right clearfix"><span class="chat-img pull-right">
                                <img src="http://placehold.it/70/4286f4/fff&text={{ $m->email }}" alt="User Avatar" class="img-circle" />
                                </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>{{ date('d-m-Y', strtotime($user->from_date)) }}</small>
                                        <strong class="pull-right primary-font">{{ $m->email }}</strong>
                                    </div>
                                    <p>
                                        {{ $m->message }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer">
                    <form class="input-group">
                              <input type="text" name="name"  class="form-control input-sm" placeholder="Input Your name..."/>
                                <textarea id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." name="message" />
                                </textarea>
                        <span class="input-group-btn" style="padding-left: 5px">
                            <button class="btn btn-success btn-block" type="submit">
                                Send</button>
                        </span>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
