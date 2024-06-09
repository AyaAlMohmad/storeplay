<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/jquery-ui.css') }}" />

    <!-- page specific plugin styles -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap-duallistbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap-multiselect.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/jquery-ui.custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/chosen.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap-timepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/daterangepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/bootstrap-datetimepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/colorpicker.css') }}" />

    <!-- text fonts -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/ace-fonts.css') }}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/ace.css') }}" class="ace-main-stylesheet"
        id="main-ace-style" />


    <script src="{{ asset('dashboard/assets/js/ace-extra.js') }}"></script>

</head>

<body class="no-skin">

    <div id="navbar" class="navbar navbar-default">
        <script type="text/javascript">
            try {
                ace.settings.check('navbar', 'fixed')
            } catch (e) {}
        </script>

        @include('dashboard.layout.include.nevbar')
    </div>

    <!-- /section:basics/navbar.layout -->
    <div class="main-container" id="main-container">
        <script type="text/javascript">
            try {
                ace.settings.check('main-container', 'fixed')
            } catch (e) {}
        </script>

        <!-- #section:basics/sidebar -->
        <div id="sidebar" class="sidebar                  responsive">
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'fixed')
                } catch (e) {}
            </script>
            @include('dashboard.layout.include.sidebar')

            <!-- /section:basics/sidebar.layout.minimize -->
            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {}
            </script>
        </div>

        <!-- /section:basics/sidebar -->
        <div class="main-content">
            <div class="main-content-inner">
                <!-- #section:basics/content.breadcrumbs -->
                <div class="breadcrumbs" id="breadcrumbs">
                    <script type="text/javascript">
                        try {
                            ace.settings.check('breadcrumbs', 'fixed')
                        } catch (e) {}
                    </script>

                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="{{ route('dash.index') }}">Home</a>
                        </li>
                        <li class="active">Dashboard</li>
                    </ul><!-- /.breadcrumb -->

                    <!-- #section:basics/content.searchbox -->
                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input"
                                    id="nav-search-input" autocomplete="off" />
                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div><!-- /.nav-search -->

                    <!-- /section:basics/content.searchbox -->
                </div>

                <!-- /section:basics/content.breadcrumbs -->
                <div class="page-content">

                    <div class="ace-settings-container" id="ace-settings-container">
                        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                            <i class="ace-icon fa fa-cog bigger-130"></i>
                        </div>

                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="pull-left width-50">
                                <!-- #section:settings.skins -->
                                <div class="ace-settings-item">
                                    <div class="pull-left">
                                        <select id="skin-colorpicker" class="hide">
                                            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                                        </select>
                                    </div>
                                    <span>&nbsp; Choose Skin</span>
                                </div>

                                <!-- /section:settings.skins -->

                                <!-- #section:settings.navbar -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                                </div>

                                <!-- /section:settings.navbar -->

                                <!-- #section:settings.sidebar -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                                </div>

                                <!-- /section:settings.sidebar -->

                                <!-- #section:settings.breadcrumbs -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                                </div>

                                <!-- /section:settings.breadcrumbs -->

                                <!-- #section:settings.rtl -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                                </div>

                                <!-- /section:settings.rtl -->

                                <!-- #section:settings.container -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2"
                                        id="ace-settings-add-container" />
                                    <label class="lbl" for="ace-settings-add-container">
                                        Inside
                                        <b>.container</b>
                                    </label>
                                </div>

                                <!-- /section:settings.container -->
                            </div>
                            <!-- /.pull-left -->

                            <div class="pull-left width-50">
                                <!-- #section:basics/sidebar.options -->
                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
                                    <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
                                    <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
                                </div>

                                <div class="ace-settings-item">
                                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
                                    <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
                                </div>

                                <!-- /section:basics/sidebar.options -->
                            </div>
                            <!-- /.pull-left -->
                        </div>
                        <!-- /.ace-settings-box -->
                    </div>

                    <div class="page-header">
                        <h1>
                            Dashboard
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                <a href="{{ route($module_name . '.index') }}" >
                                    {{ $module_name }}
                                </a>
                            </small>
                        </h1>
                    </div><!-- /.page-header -->
                    <div class="row">
                        <div class="col-xs-12">
                            @if ($message = \Session::get('success'))
                        
                            <div class="alert alert-block alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>

                                <i class="ace-icon fa fa-check green"></i>
                                {{ $message }}
                                
                            </div>
                        @endif
                        @if ($message = \Session::get('error'))
                        
                           

                        
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">
                                <i class="ace-icon fa fa-times"></i>
                            </button>

                            <strong>
                                <i class="ace-icon fa fa-times"></i>
                              
                            </strong>

                            {{ $message }}
                            <br />
                        </div>
                    @endif
                       
                            <div class="row">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                @include('dashboard.layout.include.footer')
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script type="text/javascript">
            window.jQuery || document.write("<script src='{{ asset('dashboard/assets/js/jquery.js') }}'>" + "<" + "/script>");
        </script>

        <!-- <![endif]-->

        <!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='../assets/js/jquery1x.js'>" + "<" + "/script>");
</script>
<![endif]-->
        <script type="text/javascript">
            if ('ontouchstart' in document.documentElement) document.write(
                "<script src='{{ asset('dashboard/assets/js/jquery.mobile.custom.js') }}'>" + "<" + "/script>");
        </script>
        <script src="{{ asset('dashboard/assets/js/bootstrap.js') }}"></script>

        <!-- page specific plugin scripts -->
        <script src="{{ asset('dashboard/assets/js/bootstrap-tag.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/jquery.hotkeys.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/bootstrap-wysiwyg.js') }}"></script>
        <!--[if lte IE 8]>
  <script src="../assets/js/excanvas.js"></script>
  <![endif]-->
        <script src="{{ asset('dashboard/assets/js/jquery-ui.custom.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/jquery.ui.touch-punch.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/jquery.easypiechart.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/jquery.sparkline.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/flot/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/markdown/markdown.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/markdown/bootstrap-markdown.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/jquery.hotkeys.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/bootstrap-wysiwyg.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/bootbox.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/chosen.jquery.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/jquery.autosize.js') }}"></script>

        <!-- page specific plugin scripts -->
        <script src="{{ asset('dashboard/assets/js/dataTables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/dataTables/jquery.dataTables.bootstrap.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/dataTables/extensions/TableTools/js/dataTables.tableTools.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/dataTables/extensions/ColVis/js/dataTables.colVis.js') }}"></script>
        <!-- ace scripts -->
        <script src="{{ asset('dashboard/assets/js/ace/elements.scroller.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/elements.colorpicker.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/elements.fileinput.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/elements.typeahead.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/elements.wysiwyg.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/elements.spinner.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/elements.treeview.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/elements.wizard.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/elements.aside.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.ajax-content.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.touch-drag.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.sidebar.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.sidebar-scroll-1.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.submenu-hover.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.widget-box.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.settings.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.settings-rtl.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.settings-skin.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.widget-on-reload.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.searchbox-autocomplete.js') }}"></script>

        <!-- inline scripts related to this page -->
        <script type="text/javascript">
            jQuery(function($) {

                //handling tabs and loading/displaying relevant messages and forms
                //not needed if using the alternative view, as described in docs
                $('#inbox-tabs a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                    var currentTab = $(e.target).data('target');
                    if (currentTab == 'write') {
                        Inbox.show_form();
                    } else if (currentTab == 'inbox') {
                        Inbox.show_list();
                    }
                })



                //basic initializations
                $('.message-list .message-item input[type=checkbox]').removeAttr('checked');
                $('.message-list').on('click', '.message-item input[type=checkbox]', function() {
                    $(this).closest('.message-item').toggleClass('selected');
                    if (this.checked) Inbox.display_bar(1); //display action toolbar when a message is selected
                    else {
                        Inbox.display_bar($('.message-list input[type=checkbox]:checked').length);
                        //determine number of selected messages and display/hide action toolbar accordingly
                    }
                });


                //check/uncheck all messages
                $('#id-toggle-all').removeAttr('checked').on('click', function() {
                    if (this.checked) {
                        Inbox.select_all();
                    } else Inbox.select_none();
                });

                //select all
                $('#id-select-message-all').on('click', function(e) {
                    e.preventDefault();
                    Inbox.select_all();
                });

                //select none
                $('#id-select-message-none').on('click', function(e) {
                    e.preventDefault();
                    Inbox.select_none();
                });

                //select read
                $('#id-select-message-read').on('click', function(e) {
                    e.preventDefault();
                    Inbox.select_read();
                });

                //select unread
                $('#id-select-message-unread').on('click', function(e) {
                    e.preventDefault();
                    Inbox.select_unread();
                });

                /////////

                //display first message in a new area
                $('.message-list .message-item:eq(0) .text').on('click', function() {
                    //show the loading icon
                    $('.message-container').append(
                        '<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>'
                        );

                    $('.message-inline-open').removeClass('message-inline-open').find('.message-content')
                        .remove();

                    var message_list = $(this).closest('.message-list');

                    $('#inbox-tabs a[href="#inbox"]').parent().removeClass('active');
                    //some waiting
                    setTimeout(function() {

                        //hide everything that is after .message-list (which is either .message-content or .message-form)
                        message_list.next().addClass('hide');
                        $('.message-container').find('.message-loading-overlay').remove();

                        //close and remove the inline opened message if any!

                        //hide all navbars
                        $('.message-navbar').addClass('hide');
                        //now show the navbar for single message item
                        $('#id-message-item-navbar').removeClass('hide');

                        //hide all footers
                        $('.message-footer').addClass('hide');
                        //now show the alternative footer
                        $('.message-footer-style2').removeClass('hide');


                        //move .message-content next to .message-list and hide .message-list
                        $('.message-content').removeClass('hide').insertAfter(message_list.addClass(
                            'hide'));

                        //add scrollbars to .message-body
                        $('.message-content .message-body').ace_scroll({
                            size: 150,
                            mouseWheelLock: true,
                            styleClass: 'scroll-visible'
                        });

                    }, 500 + parseInt(Math.random() * 500));
                });


                //display second message right inside the message list
                $('.message-list .message-item:eq(1) .text').on('click', function() {
                    var message = $(this).closest('.message-item');

                    //if message is open, then close it
                    if (message.hasClass('message-inline-open')) {
                        message.removeClass('message-inline-open').find('.message-content').remove();
                        return;
                    }

                    $('.message-container').append(
                        '<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>'
                        );
                    setTimeout(function() {
                        $('.message-container').find('.message-loading-overlay').remove();
                        message
                            .addClass('message-inline-open')
                            .append('<div class="message-content" />')
                        var content = message.find('.message-content:last').html($(
                            '#id-message-content').html());

                        //remove scrollbar elements
                        content.find('.scroll-track').remove();
                        content.find('.scroll-content').children().unwrap();

                        content.find('.message-body').ace_scroll({
                            size: 150,
                            mouseWheelLock: true,
                            styleClass: 'scroll-visible'
                        });

                    }, 500 + parseInt(Math.random() * 500));

                });



                //back to message list
                $('.btn-back-message-list').on('click', function(e) {

                    e.preventDefault();
                    $('#inbox-tabs a[href="#inbox"]').tab('show');
                });



                //hide message list and display new message form
                /**
                $('.btn-new-mail').on('click', function(e){
                    e.preventDefault();
                    Inbox.show_form();
                });
                */




                var Inbox = {
                    //displays a toolbar according to the number of selected messages
                    display_bar: function(count) {
                        if (count == 0) {
                            $('#id-toggle-all').removeAttr('checked');
                            $('#id-message-list-navbar .message-toolbar').addClass('hide');
                            $('#id-message-list-navbar .message-infobar').removeClass('hide');
                        } else {
                            $('#id-message-list-navbar .message-infobar').addClass('hide');
                            $('#id-message-list-navbar .message-toolbar').removeClass('hide');
                        }
                    },
                    select_all: function() {
                        var count = 0;
                        $('.message-item input[type=checkbox]').each(function() {
                            this.checked = true;
                            $(this).closest('.message-item').addClass('selected');
                            count++;
                        });

                        $('#id-toggle-all').get(0).checked = true;

                        Inbox.display_bar(count);
                    },
                    select_none: function() {
                        $('.message-item input[type=checkbox]').removeAttr('checked').closest('.message-item')
                            .removeClass('selected');
                        $('#id-toggle-all').get(0).checked = false;

                        Inbox.display_bar(0);
                    },
                    select_read: function() {
                        $('.message-unread input[type=checkbox]').removeAttr('checked').closest('.message-item')
                            .removeClass('selected');

                        var count = 0;
                        $('.message-item:not(.message-unread) input[type=checkbox]').each(function() {
                            this.checked = true;
                            $(this).closest('.message-item').addClass('selected');
                            count++;
                        });
                        Inbox.display_bar(count);
                    },
                    select_unread: function() {
                        $('.message-item:not(.message-unread) input[type=checkbox]').removeAttr('checked')
                            .closest('.message-item').removeClass('selected');

                        var count = 0;
                        $('.message-unread input[type=checkbox]').each(function() {
                            this.checked = true;
                            $(this).closest('.message-item').addClass('selected');
                            count++;
                        });

                        Inbox.display_bar(count);
                    }
                }

                //show message list (back from writing mail or reading a message)
                Inbox.show_list = function() {
                    $('.message-navbar').addClass('hide');
                    $('#id-message-list-navbar').removeClass('hide');

                    $('.message-footer').addClass('hide');
                    $('.message-footer:not(.message-footer-style2)').removeClass('hide');

                    $('.message-list').removeClass('hide').next().addClass('hide');
                    //hide the message item / new message window and go back to list
                }

                //show write mail form
                Inbox.show_form = function() {
                    if ($('.message-form').is(':visible')) return;
                    if (!form_initialized) {
                        initialize_form();
                    }


                    var message = $('.message-list');
                    $('.message-container').append(
                        '<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner orange2 bigger-160"></i></div>'
                        );

                    setTimeout(function() {
                        message.next().addClass('hide');

                        $('.message-container').find('.message-loading-overlay').remove();

                        $('.message-list').addClass('hide');
                        $('.message-footer').addClass('hide');
                        $('.message-form').removeClass('hide').insertAfter('.message-list');

                        $('.message-navbar').addClass('hide');
                        $('#id-message-new-navbar').removeClass('hide');


                        //reset form??
                        $('.message-form .wysiwyg-editor').empty();

                        $('.message-form .ace-file-input').closest(
                            '.file-input-container:not(:first-child)').remove();
                        $('.message-form input[type=file]').ace_file_input('reset_input');

                        $('.message-form').get(0).reset();

                    }, 300 + parseInt(Math.random() * 300));
                }




                var form_initialized = false;

                function initialize_form() {
                    if (form_initialized) return;
                    form_initialized = true;

                    //intialize wysiwyg editor
                    $('.message-form .wysiwyg-editor').ace_wysiwyg({
                        toolbar: [
                            'bold',
                            'italic',
                            'strikethrough',
                            'underline',
                            null,
                            'justifyleft',
                            'justifycenter',
                            'justifyright',
                            null,
                            'createLink',
                            'unlink',
                            null,
                            'undo',
                            'redo'
                        ]
                    }).prev().addClass('wysiwyg-style1');



                    //file input
                    $('.message-form input[type=file]').ace_file_input()
                        .closest('.ace-file-input')
                        .addClass('width-90 inline')
                        .wrap('<div class="form-group file-input-container"><div class="col-sm-7"></div></div>');

                    //Add Attachment
                    //the button to add a new file input
                    $('#id-add-attachment')
                        .on('click', function() {
                            var file = $('<input type="file" name="attachment[]" />').appendTo('#form-attachments');
                            file.ace_file_input();

                            file.closest('.ace-file-input')
                                .addClass('width-90 inline')
                                .wrap(
                                    '<div class="form-group file-input-container"><div class="col-sm-7"></div></div>'
                                    )
                                .parent().append('<div class="action-buttons pull-right col-xs-1">\
                                <a href="#" data-action="delete" class="middle">\
                                    <i class="ace-icon fa fa-trash-o red bigger-130 middle"></i>\
                                </a>\
                            </div>')
                                .find('a[data-action=delete]').on('click', function(e) {
                                    //the button that removes the newly inserted file input
                                    e.preventDefault();
                                    $(this).closest('.file-input-container').hide(300, function() {
                                        $(this).remove()
                                    });
                                });
                        });
                } //initialize_form

                //turn the recipient field into a tag input field!
                /**	
                    var tag_input = $('#form-field-recipient');
                    try { 
                        tag_input.tag({placeholder:tag_input.attr('placeholder')});
                    } catch(e) {}
                
                
                    //and add form reset functionality
                    $('#id-message-form').on('reset', function(){
                        $('.message-form .message-body').empty();
                        
                        $('.message-form .ace-file-input:not(:first-child)').remove();
                        $('.message-form input[type=file]').ace_file_input('reset_input_ui');
                
                        var val = tag_input.data('value');
                        tag_input.parent().find('.tag').remove();
                        $(val.split(',')).each(function(k,v){
                            tag_input.before('<span class="tag">'+v+'<button class="close" type="button">&times;</button></span>');
                        });
                    });
                    */

            });
        </script>

        <!-- the following scripts are used in demo only for onpage help and you don't need them -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets/css/ace.onpage-help.css') }}" />
        <link rel="stylesheet" href="{{ asset('dashboard/assets/docs/js/themes/sunburst.css') }}" />

        <script type="text/javascript">
            ace.vars['base'] = '..';
        </script>
        <script src="{{ asset('dashboard/assets/js/ace/elements.onpage-help.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/ace/ace.onpage-help.js') }}"></script>
        <script src="{{ asset('dashboard/assets/docs/js/rainbow.js') }}"></script>
        <script src="{{ asset('dashboard/assets/docs/js/language/generic.js') }}"></script>
        <script src="{{ asset('dashboard/assets/docs/js/language/html.js') }}"></script>
        <script src="{{ asset('dashboard/assets/docs/js/language/css.js') }}"></script>
        <script src="{{ asset('dashboard/assets/docs/js/language/javascript.js') }}"></script>

        <script src="{{ asset('dashboard/assets/js/my-js.js') }}"></script>
</body>

</html>
