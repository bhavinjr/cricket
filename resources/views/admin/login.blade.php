@extends('admin.layouts.login_layout')
@section('content')
    <section id="wrapper" class="new-login-register">
        <div class="lg-info-panel">
            <div class="inner-panel">
                <a href="javascript:void(0)" class="p-20 di"><img src="{{asset('cms_assets/admin/plugins/images/cricket-bats.png')}}"></a>
        		<div class="lg-content">
                    <h2>Remember that life’s greatest lessons are usually learned at the worst times…</h2>
                </div>
            </div>
    	</div>
    	<div class="new-login-box">
            <div class="white-box">
                <h3 class="box-title m-b-0">Sign In to Admin</h3>
                <small>Enter your details below</small>
                {{Form::open(['route'=>'admin.login','class'=>'form-horizontal new-lg-form','id'=>'loginform'])}}
    	            <div class="form-group m-t-20 @if ($errors->has('email')) has-error @endif">
              			<div class="col-xs-12">
    	                	{{Form::label('email','Email Address')}}
    	                	{{Form::email('email',null,['class'=>'form-control','placeholder'=>'Email address','required'])}}
                            @if ($errors->has('email'))
                                <div class="help-block with-errors">
                                    <ul class="list-unstyled">
                                        {{ $errors->first('email') }}</li>
                                    </ul>
                                </div>
    			            @endif
    	              	</div>
    	            </div>
                	<div class="form-group">
                  		<div class="col-xs-12">
                    		{{Form::label('password','Password')}}
                    		{{Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'])}}
                  		</div>
                	</div>
                	<div class="form-group text-center m-t-20">
                  		<div class="col-xs-12">
                  			<button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Log In</button>
                  		</div>
                	</div>
              	{{Form::close()}}
            </div>
    	</div>
    </section>
@endsection
