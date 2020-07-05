<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ url('frontend/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ url('frontend/css/aos.css') }}">

<!-- font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

<!-- WA -->
<script type="text/javascript">
    (function() {
            var options = {
                whatsapp: "+6283841230838", // WhatsApp number
                call_to_action: "", // Call to action
                position: "right", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
</script>