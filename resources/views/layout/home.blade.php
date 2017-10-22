<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title')</title>
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>

    <link href="/asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/asset/css/family.css" rel="stylesheet">
    <link href="/asset/css/button_switch.css" rel="stylesheet">
    <link href="/asset/js/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    <link href="/asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/asset/bower_components/bootstrap-sweetalert/dist/sweetalert.css" rel="stylesheet">
    <link href="/asset/bower_components/Snarl/dist/snarl.min.css" rel="stylesheet">
    <link href="/asset/bower_components/animate.css/animate.min.css" rel="stylesheet">
    <link href="/asset/bower_components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet">

    <script src="/asset/bower_components/jquery/dist/jquery.min.js"></script>

</head>
<body>

<style>    /** ====================== */
    /**
    * Giao thừa tại chùa Giác Ngộ
    */
    #gird_date .date#date-2017-01-27 {
        background: Chocolate;
    }

    /** ====================== */
    /**
    * Mùng 1 tết năm Đinh Dậu
    */
    #gird_date .date#date-2017-01-28 {
        background: yellow;
    }

    #gird_date .date#date-2017-03-08 {
        background: red;
    }

    #gird_date .date#date-2017-03-08 {
        background: black;
    }

    /** ====================== */
</style>

@yield('page-content')

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="/asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/asset/js/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
<script src="/asset/bower_components/jquery-form/jquery.form.js"></script>
<script src="/asset/bower_components/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
<script src="/asset/bower_components/Snarl/dist/snarl.min.js"></script>
<script src="/asset/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script src="/asset/bower_components/blueimp-file-upload/js/jquery.fileupload.js"></script>
<script src="/asset/js/app.js"></script>

<script src="/asset/bower_components/bLazy/blazy.min.js"></script>
<script src="/asset/js/comment.js"></script>
<script src="/asset/js/script.js"></script>
<script src="/asset/js/box_ky_niem_date.js"></script>
<div class="modal fade popup" id="modal-general">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<div class="modal fade popup" id="modal-id-popup">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">
                <img onError="this.src='https://placeholdit.imgix.net/~text?txtsize=9&txt=No%20image&w=300&h=300'" src='/asset/file_upload/media/2017/06/27/2017-06-25_12_54_57.png'>
            </div>
        </div>
    </div>
</div>
<script>
    $("#button_popup").click(function () {
        $("#modal-id-popup").modal("show");
        return false;
    });
</script>

</body>
</html>
