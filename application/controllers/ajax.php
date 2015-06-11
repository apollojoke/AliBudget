<?php

class Ajax extends MpController
{
    public function doIndex(){
        $urls = $_POST['urls'];
        $api_url="http://gw.api.alibaba.com/openapi/param2/2/portals.open/api.getPromotionLinks/61724";
        $http = new WoniuHttp();
        $data['trackingId'] = "apollojoke";
        $data['fields'] = "url,promotionUrl";
        $data['urls'] = $urls;
        $ref="http://www.alibudget.com/";
        $result=$http->setReferer($ref)->post($api_url, $data);
        header('Content-Type: application/json');
        echo $result;
    }
}