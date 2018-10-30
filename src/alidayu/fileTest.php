<?php
    include "TopSdk.php";
    date_default_timezone_set('Asia/Shanghai'); 

    $c = new TopClient;
    $c->appkey = '12497914';
    $c->secretKey = '4b0f28396e072d67fae169684613bcd1';
     $req = new TradeVoucherUploadRequest;
     $req->setFileName("example");
     $req->setFileData("@/Users/xt/Downloads/1.jpg");
     $req->setSellerNick("奥利奥官方旗舰店");
     $req->setBuyerNick("101NufynDYcbjf2cFQDd62j8M/mjtyz6RoxQ2OL1c0e/Bc=");
     var_dump($c->execute($req));


?>