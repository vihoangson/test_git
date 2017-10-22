@extends('layout.sample')
{{--@yield('title','asldkfjsal;dkfj')--}}
@section('page-title')
Happy Family
@endsection
@section('page-content')
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://family.vihoangson.com/"><img style="margin-top:-6px;display:inline;" src="/favicon.ico">
                    My Family
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://family.vihoangson.com/">Trang chủ</a></li>
                    <li><a href="#" id="button_popup">Popup</a></li>
                </ul>
                <form action="/homepage/search_keyword" class="navbar-form navbar-left" role="search" method="post">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="javascript:void(0)" data-toggle="tooltip" id="sync_db" title="Sync db from server">
                            <div class="glyphicon glyphicon-refresh"></div>
                        </a></li>
                    <li>
                        <a href="http://family.vihoangson.com/calendar" id="button_calendar" data-toggle="tooltip" title="Xem lịch của gia đình nha">Lịch gia đình</a>
                    </li>
                    <li><a href="#" data-toggle="tooltip" title="Đếm tuổi của Kem">Bé Kem ( 1 Năm 5 Tháng 13 Ngày )</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://family.vihoangson.com/admin"><i class="fa fa-user"></i> Admin page</a></li>
                            <li><a href="http://family.vihoangson.com/blog"><i class="fa fa-book"></i> Blog</a></li>
                            <li><a href="http://family.vihoangson.com/timeline"><i class="fa fa-image"></i> Time line</a>
                            </li>
                            <li>
                                <a href="http://family.vihoangson.com/homepage/slide"><i class="fa fa-image"></i> Ageing picture</a>
                            </li>
                            <li><a href="http://family.vihoangson.com/idear"><i class="fa fa-eye"></i> Idear</a></li>
                            <li>
                                <a href="http://family.vihoangson.com/homepage/custom/tool"><i class="fa fa-facebook"></i> Các công cụ liên quan</a>
                            </li>
                            <li>
                                <a href="http://family.vihoangson.com/admin/admin_page/custom_css"><i class="fa fa-gear"></i> Custom Css</a>
                            </li>
                            <li><a href="http://family.vihoangson.com/logout"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class='custom_banner top'>
            <button class='btn change_banner' data-position='top'>Change banner</button>
            <img src='/asset/file_upload/custom_banner_top/1231231.jpg' onError='this.src="http://placehold.it/1000x60"' style='width:100%;'>
        </div>
        <div class="row">
            <h2>Time Line</h2>
        </div>

        <select class="form-control change-year" style="width:100px;">
            <option value="2015"> 2015</option>
            <option value="2016"> 2016</option>
            <option value="2017" selected> 2017</option>
        </select>
        <div class="text-right">
            <button type="button" id="button_add" class="btn btn-primary">Thêm kỷ niệm</button>
        </div>
        <hr>
        <div class="qa-message-list" id="wallmessages">
            <div class="message-item " id="m" data-step="">
                <div class="message-inner">
                    <div class="">
                        <form action="/homepage/add_new" id="add_new" method="POST" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Hôm nay gia đình mình có gì ? (<span style="color:red;">*</span>)</label>
                                <textarea data-time="1503797571" name="content" id="content" class="form-control" style="height:50px;" required=""></textarea>
                            </div>
                            <div class="clearfix"></div>
                            <div class="icon_box" style="padding: 10px; display: none; ">
                                <span class="emotion_icon" alt=";)"><img src="/asset/data/img_emotion/3.gif" alt="winking"></span>
                                <span class="emotion_icon" alt=":D"><img src="/asset/data/img_emotion/4.gif" alt="big grin"></span>
                                <span class="emotion_icon" alt=":P"><img src="/asset/data/img_emotion/10.gif" alt="tongue"></span>
                                <span class="emotion_icon" alt=":-*"><img src="/asset/data/img_emotion/11.gif" alt="kiss"></span>
                                <span class="emotion_icon" alt=":*"><img src="/asset/data/img_emotion/11.gif" alt="kiss"></span>
                                <span class="emotion_icon" alt="=(("><img src="/asset/data/img_emotion/12.gif" alt="broken heart"></span>
                                <span class="emotion_icon" alt="B-)"><img src="/asset/data/img_emotion/16.gif" alt="cool"></span>
                                <span class="emotion_icon" alt=":-S"><img src="/asset/data/img_emotion/17.gif" alt="worried"></span>
                                <span class="emotion_icon" alt=":(("><img src="/asset/data/img_emotion/20.gif" alt="crying"></span>
                                <span class="emotion_icon" alt=":))"><img src="/asset/data/img_emotion/21.gif" alt="laughing"></span>
                                <span class="emotion_icon" alt=":)"><img src="/asset/data/img_emotion/1.gif" alt="happy"></span>
                                <span class="emotion_icon" alt=":("><img src="/asset/data/img_emotion/2.gif" alt="sad"></span>
                                <span class="emotion_icon" alt="/:)"><img src="/asset/data/img_emotion/23.gif" alt="raised eyebrows"></span>
                                <span class="emotion_icon" alt="=))"><img src="/asset/data/img_emotion/24.gif" alt="rolling on the floor"></span>
                                <span class="emotion_icon" alt="O:-)"><img src="/asset/data/img_emotion/25.gif" alt="angel"></span>
                                <span class="emotion_icon" alt="<3"><img src="/asset/data/img_emotion/heart.png" alt="angel"></span>
                            </div>
                            <div class="row">
                                <div class="col-xs-9 text-left">
                                    <div style="padding:4px 0;">
                                        <button type="button" class="btn btn-default" onclick="$('.icon_box').toggle();">
                                            <img src="/asset/data/img_emotion/1.gif">
                                        </button>
                                        <label for="fileupload" class="btn btn-default">Choose a file</label>
                                        <input class="hidden" id="fileupload" type="file" name="userfile" multiple="" data-url="ajax_up_files" accept="image/x-png,image/gif,image/jpeg">
                                        <button type="button" class="btn btn-default add-tag-video" onclick="">Add tag video</button>
                                    </div>
                                </div>
                                <div class="col-xs-3 text-right">
                                    <button type="submit" class="btn btn-primary ">Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="content-ajax"></div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-default loadmore">Load more »</button>
        </div>

        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Hạnh phúc là một quá trình không phải là đích đến</h4>
                    </div>
                    <div class="modal-body">
                        <form action="http://family.vihoangson.com/homepage/add_new" id="add_new" method="POST" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Tên của kỷ niệm</label>
                                <input name="title" type="text" class="form-control" id="" placeholder="Input field" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Nội dung (<span style="color:red;">*</span>)</label>
                                <div style="padding:4px 0;">
                                    <button type="button" class="btn btn-default" onclick="$('.icon_box').toggle();">
                                        <img src="/asset/data/img_emotion/1.gif"></button>
                                    <button type="button" class="btn btn-default insert-img" onclick="">Insert img</button>
                                    <button type="button" class="btn btn-default add-tag-video" onclick="">Add tag video</button>
                                </div>
                                <div class="icon_box" style="display:none; padding:10px;">
                                    <span class='emotion_icon' alt=';)'><img src="/asset/data/img_emotion/3.gif" alt="winking"></span>
                                    <span class='emotion_icon' alt=':D'><img src="/asset/data/img_emotion/4.gif" alt="big grin"></span>
                                    <span class='emotion_icon' alt=':P'><img src="/asset/data/img_emotion/10.gif" alt="tongue"></span>
                                    <span class='emotion_icon' alt=':-*'><img src="/asset/data/img_emotion/11.gif" alt="kiss"></span>
                                    <span class='emotion_icon' alt=':*'><img src="/asset/data/img_emotion/11.gif" alt="kiss"></span>
                                    <span class='emotion_icon' alt='=(('><img src="/asset/data/img_emotion/12.gif" alt="broken heart"></span>
                                    <span class='emotion_icon' alt='B-)'><img src="/asset/data/img_emotion/16.gif" alt="cool"></span>
                                    <span class='emotion_icon' alt=':-S'><img src="/asset/data/img_emotion/17.gif" alt="worried"></span>
                                    <span class='emotion_icon' alt=':(('><img src="/asset/data/img_emotion/20.gif" alt="crying"></span>
                                    <span class='emotion_icon' alt=':))'><img src="/asset/data/img_emotion/21.gif" alt="laughing"></span>
                                    <span class='emotion_icon' alt=':)'><img src="/asset/data/img_emotion/1.gif" alt="happy"></span>
                                    <span class='emotion_icon' alt=':('><img src="/asset/data/img_emotion/2.gif" alt="sad"></span>
                                    <span class='emotion_icon' alt='/:)'><img src="/asset/data/img_emotion/23.gif" alt="raised eyebrows"></span>
                                    <span class='emotion_icon' alt='=))'><img src="/asset/data/img_emotion/24.gif" alt="rolling on the floor"></span>
                                    <span class='emotion_icon' alt='O:-)'><img src="/asset/data/img_emotion/25.gif" alt="angel"></span>
                                    <span class='emotion_icon' alt='<3'><img src="/asset/data/img_emotion/heart.png" alt="angel"></span>
                                </div>
                                <textarea data-time="1508636832" name="content" id="content" class="form-control" style="height:250px;" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">File</label>
                                <input name="userfile[]" type="file" class="form-control" id="" placeholder="Input field" multiple>
                            </div>
                            <div id="tags_list">
                                <span class='tag_ele' alt='(#CoTu)'><a href='javascript:void()'> (#CoTu) </a></span><span class='tag_ele' alt='(#DuLich)'><a href='javascript:void()'> (#DuLich) </a></span><span class='tag_ele' alt='(#MonNgonMeNau)'><a href='javascript:void()'> (#MonNgonMeNau) </a></span><span class='tag_ele' alt='(#BaiTho)'><a href='javascript:void()'> (#BaiTho) </a></span><span class='tag_ele' alt='(#MonAn)'><a href='javascript:void()'> (#MonAn) </a></span><span class='tag_ele' alt='(#KyNiem)'><a href='javascript:void()'> (#KyNiem) </a></span><span class='tag_ele' alt='(#BaCo)'><a href='javascript:void()'> (#BaCo) </a></span><span class='tag_ele' alt='(#BiBenh)'><a href='javascript:void()'> (#BiBenh) </a></span><span class='tag_ele' alt='(#MocRang)'><a href='javascript:void()'> (#MocRang) </a></span><span class='tag_ele' alt='(#Rang)'><a href='javascript:void()'> (#Rang) </a></span><span class='tag_ele' alt='(#KhongChiuAn)'><a href='javascript:void()'> (#KhongChiuAn) </a></span><span class='tag_ele' alt='(#BiBong)'><a href='javascript:void()'> (#BiBong) </a></span><span class='tag_ele' alt='(#TieuChay)'><a href='javascript:void()'> (#TieuChay) </a></span><span class='tag_ele' alt='(#AnBangMuong)'><a href='javascript:void()'> (#AnBangMuong) </a></span>
                            </div>
                            <select name="status_kyniem">
                                <option value="0" selected>Bình thường</option>
                                <option value="1">Đặc biệt</option>
                            </select>
                            <div class="clearfix"></div>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </form>
                        <script>

                            // Nút add video vào textarea
                            $('.add-tag-video').click(function () {
                                $("#content").val($("#content").val() + "[video][/video]");
                            });

                            // Khi bấm nút sẽ tự động lưu vào localStorage
                            $('textarea,input').keyup(function () {
                                localStorage.setItem(this.name + "_" + $(this).data("id") + "_" + $("textarea").first().data("time"), this.value);
                            });

                            // Khi tắt trang sẽ đẩy lên server
                            window.onbeforeunload = function () {
                                if (localStorage.length > 0) {
                                    $.post('/ajax/do_ajax/ajax_save_cache', {localStorage: localStorage}, function (data, textStatus, xhr) {
                                        localStorage.clear();
                                    });
                                }
                            };

                        </script>
                        <div id="dialog"></div>

                        <div class="modal fade" id="modal-upload-media">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script src="/asset/js/jquery.form.js"></script>
                        <script src="/asset/js/media-box.js"></script>
                        <script>
                            /**
                             * Box hình ảnh
                             */
                            $(".insert-img").open_media({
                                callbackevent_before: function () {
                                    $(document).on("click", "#modal-upload-media .modal-body img", function () {
                                        // SmartDown add img
                                        src = "![](" + $(this).attr("data-src") + ")";

                                        // Đóng modal
                                        $("#modal-upload-media").modal("hide");
                                        val_text = $("#content").val();
                                        $("#content").val(val_text + src);
                                    });
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>

        <div id="tags_list">
            <h3>Tags</h3>
            <span><a href='/homepage/tags/CoTu'> #CoTu </a></span><span><a href='/homepage/tags/DuLich'> #DuLich </a></span><span><a href='/homepage/tags/MonNgonMeNau'> #MonNgonMeNau </a></span><span><a href='/homepage/tags/BaiTho'> #BaiTho </a></span><span><a href='/homepage/tags/MonAn'> #MonAn </a></span><span><a href='/homepage/tags/KyNiem'> #KyNiem </a></span><span><a href='/homepage/tags/BaCo'> #BaCo </a></span><span><a href='/homepage/tags/BiBenh'> #BiBenh </a></span><span><a href='/homepage/tags/MocRang'> #MocRang </a></span><span><a href='/homepage/tags/Rang'> #Rang </a></span><span><a href='/homepage/tags/KhongChiuAn'> #KhongChiuAn </a></span><span><a href='/homepage/tags/BiBong'> #BiBong </a></span><span><a href='/homepage/tags/TieuChay'> #TieuChay </a></span><span><a href='/homepage/tags/AnBangMuong'> #AnBangMuong </a></span>
        </div>
        @include('homepage.includes.ele_kyniem');
        <script>
            $(document).ready(function(){
                loadKyniem();
            })

            $(window).scroll(function () {
                if ($(window).scrollTop() + $(window).height() == $(document).height()) {
                    loadKyniem();
                }
            });

            $(".loadmore").click(function (event) {
                loadKyniem();
            });
            var page_current = 0;
            var loadKyniem = function () {
                $.get('/api/kyniem',{'step' : page_current},function(equal){
                    page_current = page_current + 10;
                    $.each(equal,function(k,v){
                        var m = $("#sample-message-item").clone();
                        m.find(".content_main_block").html(v.kyniem_content);
                        m.find(".handle").html(v.kyniem_title);
                        m.removeClass('hidden');
                        m.appendTo('#wallmessages');
                    })
                });

                return ;
                var step = $(".message-item").last().data("step") + 1;
                if ($(".fa-spin").length == 0) {
                    $("#wallmessages").append('<div class="text-center"><i style="color:#828282;" class="fa fa-refresh fa-spin fa-3x"></i></div>');
                    $.post('/api/kyniem/?step=' + step, function (data) {
                        $(".fa-spin").remove();
                        if (data) {
                            $("#wallmessages").append(data);
                        } else {
                            alert("Hết rồi!");
                        }
                    });
                }
            }

        </script>

        <div class='custom_banner bottom'>
            <button class='btn change_banner' data-position='bottom'>Change banner</button>
            <img src='/asset/file_upload/custom_banner_bottom/footer_banner.png' onError='this.src="http://placehold.it/1000x60"' style='width:100%;'>
        </div>
        <div class="text-center center-block">
            <p class="txt-railway">- Sweet house -</p>
            <img src="/asset/data/Sweet_House.gif">
            <br/>
            <a href="https://www.facebook.com/conduonghanhphuc/" target="_blank"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
            <a href="http://youtube.com/vihoangson/" target="_blank"><i id="social-tw" class="fa fa-youtube-square fa-3x social"></i></a>
            <a href="https://picasaweb.google.com/106931759947217084754" target="_blank"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
            <a href="/cdn-cgi/l/email-protection#a5d3cccdcac4cbc2d6cacbe5c2c8c4ccc98bc6cac8" target="_blank"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
    </div>
@endsection
