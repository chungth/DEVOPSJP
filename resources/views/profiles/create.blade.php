@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">名物おじいさんおばあさんのプロフィール投稿</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => route('profile.store'), 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">氏名</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputName">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">フリガナ</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputName">
                            </div>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">都道府県</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">年齢</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="inputName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">性別</label>
                            <div class="col-sm-5">
                                <select class="form-control">
                                    <option value="">----</option>
                                    <option value="male">男性</option>
                                    <option value="female">女性</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">属性</label>
                            <div class="col-sm-5">
                                <select class="form-control">
                                    <option value="----">---</option>
                                    <option value="">面白</option>
                                    <option value="female">技を持っている</option>
                                    <option value="female">ゆるキャラ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">得意技</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">オススメ度</label>
                            <div class="col-sm-5">
                                <select class="form-control">
                                    <option value="">---</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">投稿</button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

