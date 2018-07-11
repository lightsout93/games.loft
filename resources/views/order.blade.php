@extends('layout')

@section('content')
    <!--main content start-->
    <div class="main-content">
        <div class="content-main__container">
            <div>
                {{--@auth--}}
                    {{--<h3 class="header-contact__phone-link">Ваши данные отправлены на почту администратору</h3>--}}
                {{--@endauth--}}
                {{--@guest--}}
                    <div class="leave-comment mr0"><!--leave comment-->
                        <h3 class="header-contact__phone-link">Оставьте свои данные для оформления заказа</h3>
                        @include('admin.errors')
                        <form class="form-horizontal contact-form" role="form" method="post" action="/mail">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="search-container__form__input" id="name" name="name"
                                           placeholder="Name" value="{{old('name')}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" value="{{old('email')}}" class="search-container__form__input"
                                           id="email" name="email"
                                           placeholder="Email">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-blue">Заказать</button>
                        </form>
                    </div><!--end leave comment-->
                {{--@endguest--}}
            </div>
        </div>
    </div>
    </div>
    <!-- end main content-->
@endsection