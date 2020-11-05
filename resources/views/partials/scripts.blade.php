<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

	// $(document).ready(function(){
	// 	if (document.getElementById( "buttonCaptForm" )) {
	// 		$("#captFormDiv").hide();
	// 	}
	// });
</script>