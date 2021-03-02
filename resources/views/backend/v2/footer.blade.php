
<script type="text/javascript" src="{{ secure_asset('/js/backend/v2/bootstrap-custom.js') }}"></script>
<script src="{{ secure_asset('/js/backend/custom.js') }}"></script>
<script type="text/javascript" src="{{ secure_asset('/js/backend/v2/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.4.5/jscolor.min.js" integrity="sha512-YxdM5kmpjM5ap4Q437qwxlKzBgJApGNw+zmchVHSNs3LgSoLhQIIUNNrR5SmKIpoQ18mp4y+aDAo9m/zBQ408g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.4.5/jscolor.js" integrity="sha512-XHuMzVqLn8UPJhFdfBuLb7YK3xUnO3ONKDP4ErFcdo7jl2Lm4s5mds4WFLV1FS+NHJ5beAbDRtifIm/B/5yymQ==" crossorigin="anonymous"></script>
<script type="text/javascript">
    //Plan
    function upgradeModal() {
        //$('#form-upgrade').modal({backdrop: 'static', keyboard: false}, 'show');
        $('#form-upgrade').modal('show');
    }

    var upgrade_model = '';
    $(document).on('click', '.upgrade-modal', function () {
        $('#form-upgrade').modal('show');
        upgrade_model = this;
    });
    //if you click CANCEL with PLAN popup
    $("#form-upgrade").on("hide.bs.modal", function (e) {
        $(upgrade_model).trigger('click');
    });

    function saveStatus(response) {
        var messageAlert = response.type;
        var messageText = response.message;
        var alertBox = '<div id="toast-container" class="toast-bottom-center"><div class="toast toast-' + messageAlert + '" aria-live="polite"><div class="toast-message">' + messageText + '</div></div></div>';
        if (messageAlert && messageText) {
            $('.ndn-loading').hide();
            $('.ndn-message').html(alertBox);
            $('.ndn-message').addClass('show');
            setTimeout(function () {
                $('.ndn-message').removeClass('show');
                $('.ndn-message').html('');
            }, 3000);
        }
    }

    //CUSTOM JS FOR APP HERE


</script>
<!-- Start of ndnappshelp Zendesk Widget script -->
<script id="ze-snippet"
        src="https://static.zdassets.com/ekr/snippet.js?key=c19b3ebd-46b2-4c72-b588-cac8deb76088"></script>
<!-- End of ndnappshelp Zendesk Widget script -->
<script type="text/javascript">
    $(function () {
        $('#showZendeskWidget').click(function (e) {
            $('#launcher').contents().find('#Embed button').click();
        });
    });
</script>
<script>
    CKEDITOR.replace('summary-ckeditor');
    CKEDITOR.replace('summary-description');
</script>
@yield('script_tdl')
@yield('script_tdl_cart')
@include('backend.v2.upgrade-popup')
@include('backend.v2.redirecting')
<div class="ndn-loading" style="display: none;">
    <img src="{{ secure_asset('/images/backend/ajax-spinner.gif') }}"/>
</div>
<div class="ndn-message">
    @include('backend.v2.message')
</div>
</body>
</html>