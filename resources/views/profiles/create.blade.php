@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">名物おじいさんおばあさんのプロフィール投稿</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-4">

                                <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input type="file" name="files[]" id="js-upload-files" multiple>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
                                    </div>
                                </form>

                                <!-- Drop Zone -->
                                <h4>Or drag and drop files below</h4>
                                <div class="upload-drop-zone" id="drop-zone">
                                    写真をここにドラッグとドロップしてください。
                                </div>

                                <!-- Progress Bar -->
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="sr-only">60% Complete</span>
                                    </div>
                                </div>

                                <!-- Upload Finished -->
                                <div class="js-upload-finished">
                                    <h3>Processed files</h3>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">成功</span>image-01.jpg</a>
                                        <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">成功</span>image-02.jpg</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
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
                                    <div class="col-sm-10">
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
        </div>

@endsection
@section('javascript')
    <script type="text/javascript">

        + function($) {
            'use strict';

            // UPLOAD CLASS DEFINITION
            // ======================

            var dropZone = document.getElementById('drop-zone');
            var uploadForm = document.getElementById('js-upload-form');

            var startUpload = function(files) {
                console.log(files)
            }

            uploadForm.addEventListener('submit', function(e) {
                var uploadFiles = document.getElementById('js-upload-files').files;
                e.preventDefault()

                startUpload(uploadFiles)
            })

            dropZone.ondrop = function(e) {
                e.preventDefault();
                this.className = 'upload-drop-zone';

                startUpload(e.dataTransfer.files)
            }

            dropZone.ondragover = function() {
                this.className = 'upload-drop-zone drop';
                return false;
            }

            dropZone.ondragleave = function() {
                this.className = 'upload-drop-zone';
                return false;
            }

        }(jQuery);
    </script>
@endsection

