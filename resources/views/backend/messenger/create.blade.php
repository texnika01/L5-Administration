@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>Messages</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Messages</a></li>
        <li class="active">create new messages</li>
    </ol>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <a class="btn btn-primary btn-block margin-bottom" href="mailbox.html">Back to Inbox</a>

            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Folders</h3>

                    <div class="box-tools">
                        <button class="btn btn-box-tool" type="button" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox
                                <span class="label label-primary pull-right">12</span></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                        <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                        <li><a href="#"><i class="fa fa-filter"></i> Junk <span
                                        class="label label-warning pull-right">65</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /. box -->
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Labels</h3>

                    <div class="box-tools">
                        <button class="btn btn-box-tool" type="button" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Compose New Message</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div><!-- /.box tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{ route('admin.messages.store') }}" method="post">
                    {{ csrf_field() }}

                    <!-- Subject Form Input -->
                        <div class="form-group {{ $errors->has('subject') ? ' has-error' : ''}}">
                            {{ Form::label('subject','Subject :') }}
                            {{ Form::text('subject', null ,['class'=> 'form-control']) }}
                            @if($errors->has('subject'))
                                <span class="help-block">
                                            {{$errors->first('subject')}}
                                        </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="control-label">Message</label>
                            <textarea name="message" class="form-control"  style="height: 300px;" >{{ old('message') }}</textarea>
                        </div>
                        @if($users->count() > 0)
                            <div class="checkbox">
                                @foreach($users as $user)
                                    <label title="{{ $user->name }}"><input type="checkbox" name="recipients[]" value="{{ $user->id }}">{!!$user->name!!}</label>
                                @endforeach
                            </div>
                        @endif
                        <div class="form-group">
                            <div class="btn btn-default btn-file">
                                <i class="fa fa-paperclip"></i> Attachment
                                <input name="attachment" type="file">
                            </div>
                            <p class="help-block">Max. 32MB</p>
                        </div>
                        <!-- Submit Form Input -->
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="pull-right">
                                <button class="btn btn-default" type="button"><i class="fa fa-pencil"></i> Draft</button>
                                <button class="btn btn-primary" type="submit"><i class="fa fa-envelope-o"></i> Send</button>
                            </div>
                            <button class="btn btn-default" type="reset"><i class="fa fa-times"></i> Discard</button>
                        </div>
                        <!-- /.box-footer -->

                    </form>
                </div>

            </div>
            <!-- /. box -->
        </div>
        <!-- /.col -->
    </div>
    <script>
        $(document).ready(function () {
            $('.sidebar-menu').tree()
        })
    </script>
@stop
