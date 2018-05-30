@extends('campus.layouts.app')

@section('content')
<div id="section-escuela" class="container-fluid">

  <div class="container">
    <div class="row-login">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <table>
              <tr>
                <td style="width:30%"><img src="images/logo-menu.png" class="user-image img-responsive" /></td>
                <td style="width:70%"></td>
              </tr>
            </table>
          </div>

          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-3 control-label login-label">E-Mail</label>

                <div class="col-md-8">
                  <input id="email" type="email" class="form-control login-input" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                  <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-3 control-label login-label">Contraseña</label>

                <div class="col-md-8">
                  <input id="password" type="password" class="form-control login-input" name="password" required>

                  @if ($errors->has('password'))
                  <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-7 col-md-offset-3">
                  <div class="col-md-5">
                    <div class="checkbox">
                      <label class="login-label">
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar</label>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <a class="btn btn-link" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-2 col-md-offset-8">
                  <button type="submit" class="bttn-slant bttn-primary">Entrar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
