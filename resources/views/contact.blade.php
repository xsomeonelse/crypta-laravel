@extends('layoutHeader')

@section('title', 'CRYPTA :: CONTACTO')

@section('content')
    	<div class="para-adi ae-container-fluid main-2">
    		<div class="ae-container-fluid ae-container-fluid--inner rk-main">
				@include('partials.session-status')
				<div class="ae-grid ae-grid--collapse">
					<div class="ae-grid__item item-lg-9">
						<form method="POST" action="{{ route('contact') }}" id="contactForm" class="ae-form--full">
							@csrf
							<input type="text" name="name" class="" placeholder="@lang('Name')" value="{{ old('name') }}"><br>
							{!! $errors->first('name', '<small>:message</small><br>') !!}
							<input type="email" name="email" placeholder="@lang('Email')" value="{{ old('email') }}"><br>
							{!! $errors->first('email', '<small>:message</small><br>') !!}
							<div class="captcha">
								<span>{!! captcha_img() !!}</span>
								<button type="button"  id="reload" class="arrow-button arrow-button--left arrow-button--out">&#x21bb;</button>
		    				</div>
		    				<input id="captcha" type="text" class="" placeholder="Introduce Captcha" name="captcha"><br>
		    				{!! $errors->first('captcha', '<small>:message</small><br>') !!}
		    				<button form="contactForm" type="input" class="arrow-button arrow-button--left arrow-button--out"><p class="au-xs-ta-right au-pt-2 group-buttons">@lang('Send')<span class="arrow-cont"></button>
						</form>
					</div>
				</div>
	    	</div>
    	</div>

@endsection