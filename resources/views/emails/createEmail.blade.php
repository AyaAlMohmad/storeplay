@extends('dashboard.layout.dashboard')

@section('content')
    <ul id="inbox-tabs" class="inbox-tabs nav nav-tabs padding-16 tab-size-bigger tab-space-1">
        <!-- #section:pages/inbox.compose-btn -->
        <li class="li-new-mail pull-right">
            <a data-toggle="tab" href="#write" data-target="write" class="btn-new-mail">
                <span class="btn btn-purple no-border">
                    <i class="ace-icon fa fa-envelope bigger-130"></i>
                    <span class="bigger-110">Write Mail</span>
                </span>
            </a>
        </li><!-- /.li-new-mail -->
    </ul>
    <form id="id-message-form" class="hide form-horizontal message-form col-xs-12" method="POST" enctype="multipart/form-data"
        action="{{ route('orders.sentemail') }}">

        @csrf
        <!-- #section:pages/inbox.compose -->
        <div>
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-recipient">Recipient:</label>

                <div class="col-sm-9">
                    <span class="input-icon">
                        <input type="email" name="email" id="form-field-recipient" data-value="alex@doe.com"
                            value="{{ $item->user->email }}" placeholder="Recipient(s)" readonly />
                        <i class="ace-icon fa fa-user"></i>
                    </span>
                </div>
            </div>

            <div class="hr hr-18 dotted"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-subject">Subject:</label>

                <div class="col-sm-6 col-xs-12">
                    <div class="input-icon block col-xs-12 no-padding">
                        <input maxlength="100" type="text" class="col-xs-12" name="subject" id="form-field-subject"
                            placeholder="Subject" />
                        <i class="ace-icon fa fa-comment-o"></i>
                    </div>
                </div>
            </div>

            <div class="hr hr-18 dotted"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right">
                    <span class="inline space-24 hidden-480"></span>
                    Message:
                </label>

                <!-- #section:plugins/editor.wysiwyg -->
                <div class="col-sm-9">
                    <h4 class="header green"></h4>
                    <div class="widget-box widget-color-blue">
                        <div class="widget-header widget-header-small"> </div>
                        <div class="widget-body">
                            <div class="widget-main no-padding">
                                <textarea data-provide="markdown" data-iconlibrary="fa" rows="10" placeholder="body" name="body" id="body">
                                     You order the product  {{ $item->product->name }}
                                     In quantity  {{ $item->amount }} Unit price {{ $item->product->price }} 
                                      It's full price
                                       {{ $item->price_total }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /section:plugins/editor.wysiwyg -->
            </div>

            <div class="hr hr-18 dotted"></div>


            <div class="space"></div>


            <div class="messagebar-item-right">
                <span class="inline btn-send-message">
                    <button type="submit" class="btn btn-sm btn-primary no-border btn-white btn-round">
                        <span class="bigger-110">Send</span>

                        <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                    </button>
                </span>
            </div>

        </div>
        
        <!-- /section:pages/inbox.compose -->
    </form>
@endsection
