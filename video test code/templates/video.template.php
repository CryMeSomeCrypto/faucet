<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="author" content="Cryptocurrency faucet script" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <!-- Default CSS -->
    <link rel="stylesheet" href="./css/default.css" type="text/css" />

    <!-- Bootstrap CDN Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- chat box -->
<script id="cid0020000174727755736" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 232px;height: 383px;">{"handle":"socialsendfaucet","arch":"js","styles":{"a":"0084EF","b":100,"c":"FFFFFF","d":"FFFFFF","k":"0084EF","l":"0084EF","m":"0084EF","n":"FFFFFF","p":"10","q":"0084EF","r":100,"pos":"br","cv":1,"cvbg":"0084EF","cvw":200,"cvh":30,"cnrs":"0.35","ticker":1,"fwtickm":1}}</script>
    <!-- Bootstrap CDN Minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    {{HEAD}}

	<title>{{TITLE}}</title>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="http://www.youtube.com/player_api"></script>

    <!-- Recaptcha theme -->
     <script type="text/javascript">
        var RecaptchaOptions = {
        theme : 'white'
     };
    </script>

</head>
<body>
<div id="wrapper" class="container">
<h2>{{TITLE}}</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Faucet Promo Video</h3>
    </div>
    <div class="panel-body">
	<div id="youtubevideo"></div>



<script>
    
    // create player
    var youtubevideo;
    function onYouTubePlayerAPIReady() {
        youtubevideo = new YT.Player('youtubevideo', {
          height: '390',
          width: '640',
          videoId: '<?php global $sVideoID; echo($sVideoID); ?>',
    
    //Here the video autoplays, the player hide controls and disable keyboard to prevent users from running past the video. NB: Autoplay only works on PCs. iOS 8 also forces Native controls.
    
          playerVars:{'rel':0,'showinfo':0,'autoplay':0,'controls':0,'disablekb':1,'modestbranding':1},
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
    }

function onPlayerReady(event) {
    event.target.playVideo();
}
    //This tells the youtube player to trigger the hello() function when done watching the video
    
    function onPlayerStateChange(event) {        
        if(event.data === 0) {            
            showCupon();
        }
    }
    //THe hello function uses ajax to bring up html after the video ends. It is achieved using jquery DOM manupulation
    function showCupon(){
        jQuery.ajax({
                url:'/code.php',
                type: "POST",
                data: { },
                dataType: "json"
                   })
                .done(function (json) {  
                    jQuery('#Code').html(json.code);
                }
             );
    }
</script>
        <div style="text-align: center; font-size: 16px; padding: 10px;">Your coupon code:</div>
        <div style="text-align: center; font-size: 22px; padding: 10px;border: 4px dashed #90b92d;color: #90b92d; border-radius: 8px;" id="Code">Will be available after watching video</div>
  </div>
</div>
</div>


</body>
</html>

