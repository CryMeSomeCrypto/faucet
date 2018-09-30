<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta name="author" content="Cryptocurrency faucet script" />

    <link rel="shortcut icon" href="../img/tbitg.favicon.ico" type="image/x-icon"/>
    <!-- Default CSS -->
    <link rel="stylesheet" href="./css/default.css" type="text/css" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122596044-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-122596044-2');
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>


    <!-- Bootstrap CDN Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- chat box -->
<script id="cid0020000192923326725" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 229px;height: 239px;">{"handle":"bitcoingreen","arch":"js","styles":{"a":"006600","b":100,"c":"FFFFFF","d":"FFFFFF","k":"006600","l":"006600","m":"006600","n":"FFFFFF","p":"10","q":"006600","r":100,"usricon":0,"pos":"br","cv":1,"cvbg":"009900","cvw":263,"cvh":33,"ticker":1,"fwtickm":1}}</script>
    <!-- Bootstrap CDN Minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    {{HEAD}}

	<title>{{TITLE}}</title>

    <!-- Recaptcha theme -->
     <script type="text/javascript">
        var RecaptchaOptions = {
        theme : 'white'
     };
    </script>

</head>
<body style="visibility: hidden !important;">

<div id="wrapper" class="container">
<div id="babasbmsgx" style="visibility: visible !important;">Please disable your adblock and script blockers to view this page</div>
<center><h2><img src="../img/tBITG-LOGO.png" alt="" width="125" height="165"/>{{TITLE}} Faucet</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">About {{TITLE}}</h3>
    </div>
    <div class="panel-body">
	<b>Bitcoin Green (BITG)</b> is founded on 'The Green Protocol,' which utilizes a highly efficient proof-of-stake consensus algorithm that solves many of Bitcoin’s <br/>sustainability and scalability problems. Furthermore, Bitcoin Green can be mined on any computer or laptop without specialized equipment.<br/><br/>

	<b>Bitcoin Green</b>, the organization, aims to shed light on a number of critical issues facing proof-of-work based blockchains and raise public awareness for the <br/>environmental and economic problems arising from such issues<br/><br/>

	Download Bitcoin Green wallet<b> <a href="https://savebitcoin.io">SaveBitcoin.io </a></b><br><br>

	Find me on BitcoinGreen's<b> Discord: <a href="https://discord.gg/BHK6RXy"><img src="../img/joindiscord.png" style='height: 10%; width: 10%; object-fit: contain'></a></b><br/>
<br/>
<br/>


      {{ADS}}
    </div>
</div>





<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">TRADE Bitcoin Green here</h3>
    </div>
    <div class="panel-body">
	<a href="https://wallet.crypto-bridge.org?r=crymesomefiat4"> <img src="../img/CBridge.jpg" style='height: 65%; width: 65%; object-fit: contain'; align="middle"'>
        </a>

        <a href="https://www.coinexchange.io/market/BITG/BTC?r=378f380e"> <img src="../img/CEio.png" style='height: 65%; width: 65%; object-fit: contain'>
	</a>

	<a href="https://www.cryptopia.co.nz/Register?referrer=CryMeSomeCrypto"> <img src="../img/Cryptopia.png" style='height: 50%; width: 50%; object-fit: contain'>
        </a><br/>



    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Faucet stats</h3>
    </div>
    <div class="panel-body">
	{{TITLE}} Value: USD <span class="highlight"> ${{USD_VALUE}}</span> | BTC {{BTC_VALUE}}</br></br>

        Already paid: <span class="highlight" >{{TOTAL_PAYOUT}}</span> with <span class="highlight" >{{TOTAL_PROMO_PAYOUTS}}</span> promo on <span class="highlight" >{{NUMBER_OF_PAYOUTS}}</span> payouts.</span><br/><br/>

        How many payments are currently staged: <span class="highlight" >{{STAGED_PAYMENT_COUNT}}</span> payments.<br/>

        Total BITG staged to be sent : <span class="highlight" >{{SUM_STAGED_PAYMENTS}}</span> <br/>

        Payments will be sent after <span class="highlight" >{{STAGED_PAYMENT_THRESHOLD}}</span> staged payments.<br/>
        Operator fee: <span class="highlight" >{{OPERATOR_FEE}}%</span><br/><br/>
        You can get free {{COINNAME}} every <b>30 Minutes</b>.<br/>
	{{BALANCE}}
  </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Faucet to help developers</h3>
    </div>
    <div class="panel-body">
	This faucet is to help developers get testnet-BITG for development purposes.  <br/> <br/>
       BITG: {{DONATION_ADDRESS}}
    </div>
</div>

    <?php
        switch ($this->status())
        {
            case SF_STATUS_FAUCET_INCOMPLETE:
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
            This faucet is incomplete, it may be missing settings or the RPC client is not available.
        </div>
    </div>
    <?php
	break;
            case SF_STATUS_DRY_FAUCET:
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
	    This faucet is dry! Please donate. </br>
	    Balance: <span class="highlight" >{{BALANCE}}</span>
        </div>
    </div>
    <?php
	break;
            case SF_STATUS_RPC_CONNECTION_FAILED:
            case SF_STATUS_MYSQL_CONNECTION_FAILED:
	?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
            Cannot seem to connect at the moment, please come back later!
        </div>
    </div>
    <?php
	break;
            case SF_STATUS_PAYOUT_ACCEPTED:
	?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
            Success! You have been awarded with {{PAYOUT_AMOUNT}} {{COINNAME}}!
        </div>
    </div>
    <?php
    break;
            case SF_STATUS_PAYOUT_AND_PROMO_ACCEPTED:
	?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
            Success! You have been awarded with {{PAYOUT_AMOUNT}} {{COINNAME}}!<br/>
            Additionally, you received a bonus of {{PROMO_PAYOUT_AMOUNT}} {{COINNAME}}!
        </div>
    </div>
	<?php
	break;
            case SF_STATUS_PAYOUT_ERROR:
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
            Something went wrong, could not send you {{COINNAME}}... Please try again later.
        </div>
    </div>
    <?php
	break;
            case SF_STATUS_PAYOUT_DENIED:
	?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
            No more {{COINNAME}} for you! Try again later.
        </div>
    </div>
    <?php
    break;
            case SF_STATUS_PROXY_DETECTED:
	?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
            You are using a proxy! Proxies are not allowed.
        </div>
    </div>
    <?php
	break;
            case SF_STATUS_CAPTCHA_INCORRECT:
            case SF_STATUS_INVALID_CHAIN_ADDRESS:
            case SF_STATUS_OPERATIONAL:
	?>

    <form method="post" action="">
        <div class="input-group input-group-sm">
            <span class="input-group-addon">{{COINNAME}} address</span>
            <input  name="chaincoin_address" type="text" class="form-control" value="" placeholder="Enter your {{COINNAME}} address here" />
        </div>
        <div class="input-group input-group-sm margintop">
            <span class="input-group-addon">Promo code</span>
            <input name="promo_code" type="text" value="" class="form-control" placeholder="Promo code (optional)" />
        </div>
        <div class="margintop" id="captcha">{{CAPTCHA}}</div>
        <input id="send" name="chaincoin_submit" type="submit" class="btn btn-warning btn-md margintop" value="Send {{COINNAME}}" />
    </form>

	<?php
        if ($this->status() == SF_STATUS_INVALID_CHAIN_ADDRESS)
        {
    ?>
    <div class="panel panel-default margintop">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
            You entered an invalid {{COINNAME}} address!
        </div>
    </div>
    <?php
    }
	   elseif ($this->status() == SF_STATUS_CAPTCHA_INCORRECT)
	{
	?>
    <div class="panel panel-default margintop">
        <div class="panel-heading">
            <h3 class="panel-title">Status</h3>
        </div>
        <div class="panel-body">
            The CAPTCHA code you entered was incorrect!
        </div>
    </div>
    <?php
	}
    break;
    }
    ?>

<hr>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Social/News</h3>

<a class="twitter-follow-button"
  href="https://twitter.com/btc_green"
  data-size="large">
Follow @TwitterDev</a>

    </div>

    <div class="panel-body">

<a class="twitter-timeline" data-width="460" data-height="500" href="https://twitter.com/btc_green?ref_src=twsrc%5Etfw">Tweets by Bitcoin Green</a>



<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>
</div>
</div>
</center>

<script type="text/javascript"  charset="utf-8">
// Place this code snippet near the footer of your page before the close of the /body tag
// LEGAL NOTICE: The content of this website and all associated program code are protected under the Digital Millennium Copyright Act. Intentionally circumventing this code may constitute a violation of the DMCA.

eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q P=\'\',27=\'1Z\';1O(q i=0;i<12;i++)P+=27.X(C.L(C.O()*27.H));q 2x=8,2l=43,2c=4x,39=4y,2A=D(t){q o=!1,i=D(){z(k.1g){k.37(\'2L\',e);G.37(\'1S\',e)}R{k.2W(\'2N\',e);G.2W(\'24\',e)}},e=D(){z(!o&&(k.1g||4z.2F===\'1S\'||k.2Q===\'2M\')){o=!0;i();t()}};z(k.2Q===\'2M\'){t()}R z(k.1g){k.1g(\'2L\',e);G.1g(\'1S\',e)}R{k.2O(\'2N\',e);G.2O(\'24\',e);q n=!1;2S{n=G.4B==4C&&k.1W}2Y(r){};z(n&&n.2V){(D a(){z(o)J;2S{n.2V(\'13\')}2Y(e){J 4D(a,50)};o=!0;i();t()})()}}};G[\'\'+P+\'\']=(D(){q t={t$:\'1Z+/=\',4w:D(e){q a=\'\',d,n,o,c,s,l,i,r=0;e=t.e$(e);1e(r<e.H){d=e.16(r++);n=e.16(r++);o=e.16(r++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|o>>6;i=o&63;z(32(n)){l=i=64}R z(32(o)){i=64};a=a+10.t$.X(c)+10.t$.X(s)+10.t$.X(l)+10.t$.X(i)};J a},11:D(e){q n=\'\',d,l,c,s,r,i,a,o=0;e=e.1q(/[^A-4E-4G-9\\+\\/\\=]/g,\'\');1e(o<e.H){s=10.t$.1L(e.X(o++));r=10.t$.1L(e.X(o++));i=10.t$.1L(e.X(o++));a=10.t$.1L(e.X(o++));d=s<<2|r>>4;l=(r&15)<<4|i>>2;c=(i&3)<<6|a;n=n+S.T(d);z(i!=64){n=n+S.T(l)};z(a!=64){n=n+S.T(c)}};n=t.n$(n);J n},e$:D(t){t=t.1q(/;/g,\';\');q n=\'\';1O(q o=0;o<t.H;o++){q e=t.16(o);z(e<1C){n+=S.T(e)}R z(e>4H&&e<4I){n+=S.T(e>>6|4J);n+=S.T(e&63|1C)}R{n+=S.T(e>>12|2B);n+=S.T(e>>6&63|1C);n+=S.T(e&63|1C)}};J n},n$:D(t){q o=\'\',e=0,n=4K=1m=0;1e(e<t.H){n=t.16(e);z(n<1C){o+=S.T(n);e++}R z(n>4L&&n<2B){1m=t.16(e+1);o+=S.T((n&31)<<6|1m&63);e+=2}R{1m=t.16(e+1);2o=t.16(e+2);o+=S.T((n&15)<<12|(1m&63)<<6|2o&63);e+=3}};J o}};q a=[\'4M==\',\'4N\',\'4F=\',\'4u\',\'4k\',\'4t=\',\'4c=\',\'4d=\',\'4e\',\'4f\',\'4g=\',\'4h=\',\'4i\',\'4b\',\'4j=\',\'4l\',\'4m=\',\'4n=\',\'4o=\',\'4p=\',\'4q=\',\'4r=\',\'4s==\',\'4O==\',\'4v==\',\'4P==\',\'5c=\',\'5e\',\'5f\',\'5g\',\'5h\',\'5i\',\'5j\',\'5k==\',\'5l=\',\'5d=\',\'5m=\',\'5o==\',\'5p=\',\'5q\',\'5r=\',\'5s=\',\'5t==\',\'5u=\',\'5v==\',\'5n==\',\'5b=\',\'51=\',\'5a\',\'5w==\',\'4S==\',\'4T\',\'4U==\',\'4V=\'],f=C.L(C.O()*a.H),w=t.11(a[f]),Y=w,Z=1,W=\'#4W\',r=\'#4X\',g=\'#4Y\',b=\'#4R\',A=\'\',v=\'4Z!\',y=\'52 53 54 55\\\'56 57 58 2m 2f. 59\\\'s 4Q.  4a 46\\\'t?\',p=\'48 3e 3d-3g, 3k 3p\\\'t 3q 3r 3t 3v!\',s=\'I 3w, I 3h 3x 3s 2m 2f.  3o 3n 3m!\',o=0,u=0,n=\'3i.3l\',l=0,M=e()+\'.36\';D h(t){z(t)t=t.1K(t.H-15);q o=k.2D(\'3j\');1O(q n=o.H;n--;){q e=S(o[n].1H);z(e)e=e.1K(e.H-15);z(e===t)J!0};J!1};D m(t){z(t)t=t.1K(t.H-15);q e=k.3f;x=0;1e(x<e.H){1l=e[x].1o;z(1l)1l=1l.1K(1l.H-15);z(1l===t)J!0;x++};J!1};D e(t){q n=\'\',o=\'1Z\';t=t||30;1O(q e=0;e<t;e++)n+=o.X(C.L(C.O()*o.H));J n};D i(o){q i=[\'3c\',\'3u==\',\'3z\',\'3Q\',\'2G\',\'3S==\',\'3T=\',\'3U==\',\'3V=\',\'3W==\',\'3X==\',\'3R==\',\'3Y\',\'41\',\'42\',\'2G\'],r=[\'2i=\',\'44==\',\'45==\',\'3y==\',\'47=\',\'3Z\',\'3P=\',\'3A=\',\'2i=\',\'3O\',\'3N==\',\'3M\',\'3L==\',\'3K==\',\'3J==\',\'3I=\'];x=0;1Q=[];1e(x<o){c=i[C.L(C.O()*i.H)];d=r[C.L(C.O()*r.H)];c=t.11(c);d=t.11(d);q a=C.L(C.O()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}R{n=\'//\'+c+\'/\'+e(C.L(C.O()*20)+4)+\'.36\'};1Q[x]=21 23();1Q[x].1T=D(){q t=1;1e(t<7){t++}};1Q[x].1H=n;x++}};D F(t){};J{38:D(t,r){z(3H k.N==\'3G\'){J};q o=\'0.1\',r=Y,e=k.1a(\'1w\');e.14=r;e.j.1k=\'1I\';e.j.13=\'-1h\';e.j.V=\'-1h\';e.j.1b=\'28\';e.j.U=\'3F\';q d=k.N.2P,a=C.L(d.H/2);z(a>15){q n=k.1a(\'2a\');n.j.1k=\'1I\';n.j.1b=\'1u\';n.j.U=\'1u\';n.j.V=\'-1h\';n.j.13=\'-1h\';k.N.3E(n,k.N.2P[a]);n.1c(e);q i=k.1a(\'1w\');i.14=\'2K\';i.j.1k=\'1I\';i.j.13=\'-1h\';i.j.V=\'-1h\';k.N.1c(i)}R{e.14=\'2K\';k.N.1c(e)};l=3D(D(){z(e){t((e.1V==0),o);t((e.1X==0),o);t((e.1R==\'2E\'),o);t((e.1F==\'2p\'),o);t((e.1J==0),o)}R{t(!0,o)}},26)},1N:D(e,c){z((e)&&(o==0)){o=1;G[\'\'+P+\'\'].1B();G[\'\'+P+\'\'].1N=D(){J}}R{q p=t.11(\'3C\'),u=k.3B(p);z((u)&&(o==0)){z((2l%3)==0){q l=\'5y=\';l=t.11(l);z(h(l)){z(u.1P.1q(/\\s/g,\'\').H==0){o=1;G[\'\'+P+\'\'].1B()}}}};q f=!1;z(o==0){z((2c%3)==0){z(!G[\'\'+P+\'\'].2n){q d=[\'69==\',\'7A==\',\'6T=\',\'70=\',\'71=\'],m=d.H,r=d[C.L(C.O()*m)],a=r;1e(r==a){a=d[C.L(C.O()*m)]};r=t.11(r);a=t.11(a);i(C.L(C.O()*2)+1);q n=21 23(),s=21 23();n.1T=D(){i(C.L(C.O()*2)+1);s.1H=a;i(C.L(C.O()*2)+1)};s.1T=D(){o=1;i(C.L(C.O()*3)+1);G[\'\'+P+\'\'].1B()};n.1H=r;z((39%3)==0){n.24=D(){z((n.U<8)&&(n.U>0)){G[\'\'+P+\'\'].1B()}}};i(C.L(C.O()*3)+1);G[\'\'+P+\'\'].2n=!0};G[\'\'+P+\'\'].1N=D(){J}}}}},1B:D(){z(u==1){q E=2d.7d(\'2e\');z(E>0){J!0}R{2d.7c(\'2e\',(C.O()+1)*26)}};q h=\'7a==\';h=t.11(h);z(!m(h)){q c=k.1a(\'78\');c.1Y(\'76\',\'74\');c.1Y(\'2F\',\'1f/6S\');c.1Y(\'1o\',h);k.2D(\'73\')[0].1c(c)};72(l);k.N.1P=\'\';k.N.j.17+=\'Q:1u !19\';k.N.j.17+=\'1t:1u !19\';q M=k.1W.1X||G.35||k.N.1X,f=G.6Z||k.N.1V||k.1W.1V,a=k.1a(\'1w\'),Z=e();a.14=Z;a.j.1k=\'2s\';a.j.13=\'0\';a.j.V=\'0\';a.j.U=M+\'1z\';a.j.1b=f+\'1z\';a.j.2h=W;a.j.1U=\'6Y\';k.N.1c(a);q d=\'<a 1o="6X://6W.6V"><2v 14="2w" U="2J" 1b="40"><2z 14="2y" U="2J" 1b="40" 5x:1o="6U:2z/7h;75,7j+7q+7E+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+7G+7F+7D/7B/7y/7w/7v/7u+/7s/7r+7p/7m+7k/7l/7n/7o/7t/7C/7x+7z/77+6R+6e+6P+5T+5U/5V+5W/5X+5Y/5S+5Z+62+66+67/68+6Q/6a/6b/61+5Q+5H/5P+5A+5B+5C+E+5D/5E/5F/5z/5G/5I/+5J/5K++5L/5M/5N+5O/6c+5R+6d==">;</2v></a>\';d=d.1q(\'2w\',e());d=d.1q(\'2y\',e());q i=k.1a(\'1w\');i.1P=d;i.j.1k=\'1I\';i.j.1y=\'1M\';i.j.13=\'1M\';i.j.U=\'6z\';i.j.1b=\'6A\';i.j.1U=\'2k\';i.j.1J=\'.6\';i.j.2j=\'2g\';i.1g(\'6B\',D(){n=n.6C(\'\').6D().6E(\'\');G.2q.1o=\'//\'+n});k.1E(Z).1c(i);q o=k.1a(\'1w\'),F=e();o.14=F;o.j.1k=\'2s\';o.j.V=f/7+\'1z\';o.j.6y=M-6G+\'1z\';o.j.6I=f/3.5+\'1z\';o.j.2h=\'#6J\';o.j.1U=\'2k\';o.j.17+=\'K-1v: "6K 6L", 1n, 1s, 1r-1p !19\';o.j.17+=\'6M-1b: 6O !19\';o.j.17+=\'K-1i: 6H !19\';o.j.17+=\'1f-1A: 1x !19\';o.j.17+=\'1t: 6w !19\';o.j.1R+=\'3a\';o.j.2X=\'1M\';o.j.6n=\'1M\';o.j.6v=\'2C\';k.N.1c(o);o.j.6h=\'1u 6j 6k -6l 6f(0,0,0,0.3)\';o.j.1F=\'2t\';q Y=30,w=22,x=18,A=18;z((G.35<33)||(6m.U<33)){o.j.2U=\'50%\';o.j.17+=\'K-1i: 6o !19\';o.j.2X=\'6p;\';i.j.2U=\'65%\';q Y=22,w=18,x=12,A=12};o.1P=\'<2T j="1j:#6r;K-1i:\'+Y+\'1D;1j:\'+r+\';K-1v:1n, 1s, 1r-1p;K-1G:6s;Q-V:1d;Q-1y:1d;1f-1A:1x;">\'+v+\'</2T><34 j="K-1i:\'+w+\'1D;K-1G:6t;K-1v:1n, 1s, 1r-1p;1j:\'+r+\';Q-V:1d;Q-1y:1d;1f-1A:1x;">\'+y+\'</34><6u j=" 1R: 3a;Q-V: 0.2Z;Q-1y: 0.2Z;Q-13: 2b;Q-2u: 2b; 2H:7g 49 #6q; U: 25%;1f-1A:1x;"><p j="K-1v:1n, 1s, 1r-1p;K-1G:2r;K-1i:\'+x+\'1D;1j:\'+r+\';1f-1A:1x;">\'+p+\'</p><p j="Q-V:6i;"><2a 6g="10.j.1J=.9;" 6N="10.j.1J=1;"  14="\'+e()+\'" j="2j:2g;K-1i:\'+A+\'1D;K-1v:1n, 1s, 1r-1p; K-1G:2r;2H-6F:2C;1t:1d;6x-1j:\'+g+\';1j:\'+b+\';1t-13:28;1t-2u:28;U:60%;Q:2b;Q-V:1d;Q-1y:1d;" 79="G.2q.7b();">\'+s+\'</2a></p>\'}}})();G.2R=D(t,e){q n=7e.7f,o=G.7i,a=n(),i,r=D(){n()-a<e?i||o(r):t()};o(r);J{3b:D(){i=1}}};q 2I;z(k.N){k.N.j.1F=\'2t\'};2A(D(){z(k.1E(\'29\')){k.1E(\'29\').j.1F=\'2E\';k.1E(\'29\').j.1R=\'2p\'};2I=G.2R(D(){G[\'\'+P+\'\'].38(G[\'\'+P+\'\'].1N,G[\'\'+P+\'\'].4A)},2x*26)});',62,477,'|||||||||||||||||||style|document||||||var|||||||||if||vr6|Math|function|||window|length||return|font|floor||body|random|pFEItjtDftis|margin|else|String|fromCharCode|width|top||charAt|||this|decode||left|id||charCodeAt|cssText||important|createElement|height|appendChild|10px|while|text|addEventListener|5000px|size|color|position|thisurl|c2|Helvetica|href|serif|replace|sans|geneva|padding|0px|family|DIV|center|bottom|px|align|wqFaYZjsCp|128|pt|getElementById|visibility|weight|src|absolute|opacity|substr|indexOf|30px|SxTaHJUIAW|for|innerHTML|spimg|display|load|onerror|zIndex|clientHeight|documentElement|clientWidth|setAttribute|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789||new||Image|onload||1000|rBoscfoEjr|60px|babasbmsgx|div|auto|IuMhzkVCPe|sessionStorage|babn|blocker|pointer|backgroundColor|ZmF2aWNvbi5pY28|cursor|10000|vyifTxMzaA|ad|ranAlready|c3|none|location|300|fixed|visible|right|svg|FILLVECTID1|IWmoXlohDR|FILLVECTID2|image|JpaDqImlrN|224|15px|getElementsByTagName|hidden|type|cGFydG5lcmFkcy55c20ueWFob28uY29t|border|ulyfyOcFiA|160|banner_ad|DOMContentLoaded|complete|onreadystatechange|attachEvent|childNodes|readyState|haJuoHFDOj|try|h3|zoom|doScroll|detachEvent|marginLeft|catch|5em|||isNaN|640|h1|innerWidth|jpg|removeEventListener|iSPjvgRIri|cYXShtYYbp|block|clear|YWRuLmViYXkuY29t|advertising|without|styleSheets|income|have|moc|script|we|kcolbdakcolb|in|me|Let|can|keep|the|my|faucet|YWQubWFpbC5ydQ|flowing|understand|disabled|NzIweDkwLmpwZw|anVpY3lhZHMuY29t|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|querySelector|aW5zLmFkc2J5Z29vZ2xl|setInterval|insertBefore|468px|undefined|typeof|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|d2lkZV9za3lzY3JhcGVyLmpwZw|bGFyZ2VfYmFubmVyLmdpZg|YmFubmVyX2FkLmdpZg|ZmF2aWNvbjEuaWNv|c3F1YXJlLWFkLnBuZw|YWQtbGFyZ2UucG5n|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|YWQuZm94bmV0d29ya3MuY29t|YWRzLnp5bmdhLmNvbQ|YS5saXZlc3BvcnRtZWRpYS5ldQ|YWdvZGEubmV0L2Jhbm5lcnM|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|Y2FzLmNsaWNrYWJpbGl0eS5jb20|cHJvbW90ZS5wYWlyLmNvbQ|YWRzLnlhaG9vLmNvbQ|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn||YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YXMuaW5ib3guY29t||YmFubmVyLmpwZw|NDY4eDYwLmpwZw|doesn|c2t5c2NyYXBlci5qcGc|But|solid|Who|QWQzMDB4MjUw|YWQtbGFiZWw|YWQtbGI|YWQtZm9vdGVy|YWQtY29udGFpbmVy|YWQtY29udGFpbmVyLTE|YWQtY29udGFpbmVyLTI|QWQzMDB4MTQ1|QWQ3Mjh4OTA|YWQtaW1n|QWRBcmVh|QWRGcmFtZTE|QWRGcmFtZTI|QWRGcmFtZTM|QWRGcmFtZTQ|QWRMYXllcjE|QWRMYXllcjI|QWRzX2dvb2dsZV8wMQ|YWQtaW5uZXI|YWQtaGVhZGVy|QWRzX2dvb2dsZV8wMw|encode|295|184|event|wpLnpXguxD|frameElement|null|setTimeout|Za|YWQtZnJhbWU|z0|127|2048|192|c1|191|YWQtbGVmdA|YWRCYW5uZXJXcmFw|QWRzX2dvb2dsZV8wMg|QWRzX2dvb2dsZV8wNA|okay|FFFFFF|YWRzZW5zZQ|Z29vZ2xlX2Fk|b3V0YnJhaW4tcGFpZA|c3BvbnNvcmVkX2xpbms|EEEEEE|777777|005700|Welcome||YmFubmVyaWQ|It|looks|like|you|re|using|an|That|YWRzbG90|YWRzZXJ2ZXI|RGl2QWQ|QWRCb3gxNjA|RGl2QWQx|RGl2QWQy|RGl2QWQz|RGl2QWRB|RGl2QWRC|RGl2QWRD|QWRJbWFnZQ|QWREaXY|QWRDb250YWluZXI|YWRfY2hhbm5lbA|Z2xpbmtzd3JhcHBlcg|YWRUZWFzZXI|YmFubmVyX2Fk|YWRCYW5uZXI|YWRiYW5uZXI|YWRBZA|YmFubmVyYWQ|IGFkX2JveA|cG9wdXBhZA|xlink|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|UIWrdVPEp7zHy7oWXiUgmR3kdujbZI73kghTaoaEKMOh8up2M8BVceotd|j9xJVBEEbWEXFVZQNX9|1HX6ghkAR9E5crTgM|0t6qjIlZbzSpemi|MjA3XJUKy|SRWhNsmOazvKzQYcE0hV5nDkuQQKfUgm4HmqA2yuPxfMU1m4zLRTMAqLhN6BHCeEXMDo2NsY8MdCeBB6JydMlps3uGxZefy7EO1vyPvhOxL7TPWjVUVvZkNJ|CGf7SAP2V6AjTOUa8IzD3ckqe2ENGulWGfx9VKIBB72JM1lAuLKB3taONCBn3PY0II5cFrLr7cCp|BNyENiFGe5CxgZyIT6KVyGO2s5J5ce|bTplhb|14XO7cR5WV1QBedt3c|QhZLYLN54|e8xr8n5lpXyn|u3T9AbDjXwIMXfxmsarwK9wUBB5Kj8y2dCw|Kq8b7m0RpwasnR|uJylU|dEflqX6gzC4hd1jSgz0ujmPkygDjvNYDsU0ZggjKBqLPrQLfDUQIzxMBtSOucRwLzrdQ2DFO0NDdnsYq0yoJyEB0FHTBHefyxcyUy8jflH7sHszSfgath4hYwcD3M29I5DMzdBNO2IFcC5y6HSduof4G5dQNMWd4cDcjNNeNGmb02|E5HlQS6SHvVSU0V|F2Q|3eUeuATRaNMs0zfml|I1TpO7CnBZO|YbUMNVjqGySwrRUGsLu6|uWD20LsNIDdQut4LXA|KmSx|0nga14QJ3GOWqDmOwJgRoSme8OOhAQqiUhPMbUGksCj5Lta4CbeFhX9NN0Tpny|BKpxaqlAOvCqBjzTFAp2NFudJ5paelS5TbwtBlAvNgEdeEGI6O6JUt42NhuvzZvjXTHxwiaBXUIMnAKa5Pq9SL3gn1KAOEkgHVWBIMU14DBF2OH3KOfQpG2oSQpKYAEdK0MGcDg1xbdOWy|iqKjoRAEDlZ4soLhxSgcy6ghgOy7EeC2PI4DHb7pO7mRwTByv5hGxF|QcWrURHJSLrbBNAxZTHbgSCsHXJkmBxisMvErFVcgE||x0z6tauQYvPxwT0VM1lH9Adt5Lp|h0GsOCs9UwP2xo6||||UimAyng9UePurpvM8WmAdsvi6gNwBMhPrPqemoXywZs8qL9JZybhqF6LZBZJNANmYsOSaBTkSqcpnCFEkntYjtREFlATEtgxdDQlffhS3ddDAzfbbHYPUDGJpGT|UADVgvxHBzP9LUufqQDtV|uI70wOsgFWUQCfZC1UI0Ettoh66D|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|kmLbKmsE|pyQLiBu8WDYgxEZMbeEqIiSM8r|Uv0LfPzlsBELZ|gkJocgFtzfMzwAAAABJRU5ErkJggg|CXRTTQawVogbKeDEs2hs4MtJcNVTY2KgclwH2vYODFTa4FQ|rgba|onmouseover|boxShadow|35px|14px|24px|8px|screen|marginRight|18pt|45px|CCC|999|200|500|hr|borderRadius|12px|background|minWidth|160px|40px|click|split|reverse|join|radius|120|16pt|minHeight|fff|Arial|Black|line|onmouseout|normal|1FMzZIGQR3HWJ4F1TqWtOaADq0Z9itVZrg1S6JLi7B1MAtUCX1xNB0Y0oL9hpK4|szSdAtKtwkRRNnCIiDzNzc0RO|qdWy60K14k|css|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|data|com|blockadblock|http|9999|innerHeight|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|clearInterval|head|stylesheet|base64|rel|RUIrwGk|link|onclick|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|reload|setItem|getItem|Date|now|1px|png|requestAnimationFrame|iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoCAMAAABO8gGqAAAB|MgzNFaCVyHVIONbx1EDrtCzt6zMEGzFzFwFZJ19jpJy2qx5BcmyBM|oGKmW8DAFeDOxfOJM4DcnTYrtT7dhZltTW7OXHB1ClEWkPO0JmgEM1pebs5CcA2UCTS6QyHMaEtyc3LAlWcDjZReyLpKZS9uT02086vu0tJa|ISwIz5vfQyDF3X|Lnx0tILMKp3uvxI61iYH33Qq3M24k|VOPel7RIdeIBkdo|cIa9Z8IkGYa9OGXPJDm5RnMX5pim7YtTLB24btUKmKnZeWsWpgHnzIP5UucvNoDrl8GUrVyUBM4xqQ|1BMVEXr6|ejIzabW26SkqgMDA7HByRAADoM7kjAAAAInRSTlM6ACT4xhkPtY5iNiAI9PLv6drSpqGYclpM5bengkQ8NDAnsGiGMwAABetJREFUWMPN2GdTE1EYhmFQ7L339rwngV2IiRJNIGAg1SQkFAHpgnQpKnZBAXvvvXf9mb5nsxuTqDN|b29vlvb2xn5|HY9WAzpZLSSCNQrZbGO1n4V4h9uDP7RTiIIyaFQoirfxCftiht4sK8KeKqPh34D2S7TsROHRiyMrAxrtNms9H5Qaw9ObU1H4Wdv8z0J8obvOo|v7|aa2thYWHXUFDUPDzUOTno0dHipqbceHjaZ2dCQkLSLy|PzNzc3myMjlurrjsLDhoaHdf3|0idvgbrDeBhcK|v792dnbbdHTZYWHZXl7YWlpZWVnVRkYnJib8|EuJ0GtLUjVftvwEYqmaR66JX9Apap6cCyKhiV|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|Ly8vKysrDw8O4uLjkt7fhnJzgl5d7e3tkZGTYVlZPT08vLi7OCwu|wd4KAnkmbaePspA|fn5EREQ9PT3SKSnV1dXks7OsrKypqambmpqRkZFdXV1RUVHRISHQHR309PTq4eHp3NzPz8|sAAADr6|enp7TNTUoJyfm5ualpaV5eXkODg7k5OTaamoqKSnc3NzZ2dmHh4dra2tHR0fVQUFAQEDPExPNBQXo6Ohvb28ICAjp19fS0tLnzc29vb25ubm1tbWWlpaNjY3dfX1oaGhUVFRMTEwaGhoXFxfq5ubh4eHe3t7Hx8fgk5PfjY3eg4OBgYF|sAAADMAAAsKysKCgokJCRycnIEBATq6uoUFBTMzMzr6urjqqoSEhIGBgaxsbHcd3dYWFg0NDTmw8PZY2M5OTkfHx'.split('|'),0,{}));
</script>
</body>
</html>
