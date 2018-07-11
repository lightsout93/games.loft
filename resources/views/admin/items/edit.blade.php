@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить статью
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        {{Form::open([
            'route'	=>	['items.update', $item->id],
            'files'	=>	true,
            'method'	=>	'put'
        ])}}
        <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Обновляем статью</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=""
                                   value="{{$item->title}}" name="title">
                        </div>

                        <div class="form-group">
                            <img src="{{$item->getImage()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" id="exampleInputFile" name="image">

                            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            {{Form::select('category_id',
                                $categories,
                              $item->getCategoryID(),
                                ['class' => 'form-control select2'])
                            }}
                        </div>
                        <div class="form-group">
                            <label>Цена</label>
                            <input type="text" class="form-control pull-right" value="{{$item->price}}"
                                   name="price">
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <textarea name="content" id="" cols="30" rows="10"
                                      class="form-control">{{$item->content}}</textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <!-- /.box-footer-->
                </div>

                <div class="box-footer">
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                <!-- /.box -->
            </div>

            {{Form::close()}}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection