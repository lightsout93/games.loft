@extends('layout')

@section('content')
<!--main content start-->
<div class="main-content">
    <div class="content-main__container">
            <div>
                <div class="leave-comment mr0"><!--leave comment-->
                    @if(session('status'))
                        <div class="alert alert-danger">
                            {{session('status')}}
                        </div>
                    @endif
                    <h3 class="header-contact__phone-link">Авторизация</h3>
                    @include('admin.errors')
                    <br>
                    <form class="form-horizontal contact-form" role="form" method="post" action="/login">
                    {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="search-container__form__input" id="email" name="email" value="{{old('email')}}"
                                       placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="search-container__form__input" id="password" name="password"
                                       placeholder="Пароль">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-blue">Войти</button>

                    </form>
                </div><!--end leave comment-->
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
@endsection