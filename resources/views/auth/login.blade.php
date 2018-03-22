
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="alert">
                       <div class="input-append">
                        
                            
                                <input id="email" type="email" placeholder="email" class="text_entry form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <br>
            
                                <input id="password" type="password" placeholder="password" class="text_entry form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                               <br>
                        
                                <div class="checkbox">
                                    <label class="checkbox_register">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                                


                                <button type="submit" class="btn btn_entry2">
                                    {{ __('Войти') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                         <div class="line"></div>
                                             <div class="input-append ">
                                                 
                                                 <a href="{{ route('register') }}" class="btn btn-success btn_entry">Регистрация</a>
                                             </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

