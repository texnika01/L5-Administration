@extends('backend.layouts.app')

@section('content')

        <div class="row">
            <div class="col-md-3">
                <a class="btn btn-primary btn-block margin-bottom" href="compose.html">Compose</a>

                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Folders</h3>

                        <div class="box-tools">
                            <button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="box-body no-padding">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox
                                    <span class="label label-primary pull-right">12</span></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                            <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                            <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
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
                            <button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                        </div>
                    </div>
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
                        <h3 class="box-title">Read Mail</h3>
                        <div class="box-tools pull-right">
                            <a title="" class="btn btn-box-tool" href="#" data-original-title="Previous" data-toggle="tooltip"><i class="fa fa-chevron-left"></i></a>
                            <a title="" class="btn btn-box-tool" href="#" data-original-title="Next" data-toggle="tooltip"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <div class="mailbox-read-info">
                            <h3>{{ $thread->subject }}</h3>
                            @each('backend.messenger.partials.messages', $thread->messages, 'message')
                        </div>
                        <!-- /.mailbox-read-info -->
                        <div class="mailbox-controls with-border text-center">
                            <div class="btn-group">
                                <button title="" class="btn btn-default btn-sm" type="button" data-original-title="Delete" data-toggle="tooltip" data-container="body">
                                    <i class="fa fa-trash-o"></i></button>
                                <button title="" class="btn btn-default btn-sm" type="button" data-original-title="Reply" data-toggle="tooltip" data-container="body">
                                    <i class="fa fa-reply"></i></button>
                                <button title="" class="btn btn-default btn-sm" type="button" data-original-title="Forward" data-toggle="tooltip" data-container="body">
                                    <i class="fa fa-share"></i></button>
                            </div>
                            <!-- /.btn-group -->
                            <button title="" class="btn btn-default btn-sm" type="button" data-original-title="Print" data-toggle="tooltip">
                                <i class="fa fa-print"></i></button>
                        </div>
                        <!-- /.mailbox-controls -->

                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <ul class="mailbox-attachments clearfix">
                            <li>
                                <span class="mailbox-attachment-icon"><i class="fa fa-file-pdf-o"></i></span>

                                <div class="mailbox-attachment-info">
                                    <a class="mailbox-attachment-name" href="#"><i class="fa fa-paperclip"></i> Sep2014-report.pdf</a>
                                    <span class="mailbox-attachment-size">
                          1,245 KB
                          <a class="btn btn-default btn-xs pull-right" href="#"><i class="fa fa-cloud-download"></i></a>
                        </span>
                                </div>
                            </li>
                            <li>
                                <span class="mailbox-attachment-icon"><i class="fa fa-file-word-o"></i></span>

                                <div class="mailbox-attachment-info">
                                    <a class="mailbox-attachment-name" href="#"><i class="fa fa-paperclip"></i> App Description.docx</a>
                                    <span class="mailbox-attachment-size">
                          1,245 KB
                          <a class="btn btn-default btn-xs pull-right" href="#"><i class="fa fa-cloud-download"></i></a>
                        </span>
                                </div>
                            </li>
                            <li>
                                <span class="mailbox-attachment-icon has-img"><img alt="Attachment" src="../../dist/img/photo1.png"></span>

                                <div class="mailbox-attachment-info">
                                    <a class="mailbox-attachment-name" href="#"><i class="fa fa-camera"></i> photo1.png</a>
                                    <span class="mailbox-attachment-size">
                          2.67 MB
                          <a class="btn btn-default btn-xs pull-right" href="#"><i class="fa fa-cloud-download"></i></a>
                        </span>
                                </div>
                            </li>
                            <li>
                                <span class="mailbox-attachment-icon has-img"><img alt="Attachment" src="../../dist/img/photo2.png"></span>

                                <div class="mailbox-attachment-info">
                                    <a class="mailbox-attachment-name" href="#"><i class="fa fa-camera"></i> photo2.png</a>
                                    <span class="mailbox-attachment-size">
                          1.9 MB
                          <a class="btn btn-default btn-xs pull-right" href="#"><i class="fa fa-cloud-download"></i></a>
                        </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.box-footer -->
                    <div class="box-footer">
                        <div class="pull-right">
                            <button class="btn btn-default" type="button"><i class="fa fa-reply"></i> Reply</button>
                            <button class="btn btn-default" type="button"><i class="fa fa-share"></i> Forward</button>
                        </div>
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-trash-o"></i> Delete
                        </button>
                        <button class="btn btn-default" type="button"><i class="fa fa-print"></i> Print</button>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
        </div>
@stop
