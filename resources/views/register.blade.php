@extends('layout')

@section('content')
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="leave-comment mr0"><!--leave comment-->
                    
                    <h3 class="header-contact__phone-link">Регистрация</h3>
                    @include('admin.errors')
                    <br>
                    <form class="form-horizontal contact-form" role="form" method="post" action="/register">
                    {{csrf_field()}}
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="search-container__form__input" id="name" name="name"
                                       placeholder="Name" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" value="{{old('email')}}" class="search-container__form__input" id="email" name="email"
                                       placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="search-container__form__input" id="password" name="password"
                                       placeholder="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" class="minimal" name="admin">
                            </label>
                            <label>
                                Администратор
                            </label>
                        </div>
                        <button type="submit" class="btn send-btn">Зарегистрироваться</button>
                    </form>
                </div><!--end leave comment-->
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
@endsection