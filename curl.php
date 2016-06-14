<?php

$ch = curl_init();
$url = "https://segmentfault.com/api/user/login?_=259f90fcf626f304c69c52db1454f03e";

$data = array(
    'mail' => '***',
    'password' => '**',
);
foreach ($data as $key => $value){
    $postfields .= urlencode($key) . '=' . urlencode($value) . '&';
}
$postfields = rtrim($postfields, '&');
$headers = array(
    'Accept:*/*',
    'Accept-Encoding:gzip, deflate',
    'Accept-Language:zh-CN,zh;q=0.8',
    'Connection:keep-alive',
    'Content-Type:application/x-www-form-urlencoded; charset=UTF-8',
    'Cookie:mp_18fe57584af9659dea732cf41c1c0416_mixpanel=%7B%22distinct_id%22%3A%20%22153c6c3ec0c91-04fd9c038-12771e2d-1fa400-153c6c3ec0d18a%22%2C%22%24initial_referrer%22%3A%20%22%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%7D; editor-code-detect-disabled=1; PHPSESSID=web2~oag2uol7e47i88hp6t6uqac9b0; Hm_lvt_e23800c454aa573c0ccb16b52665ac26=1465290769,1465713371,1465781816,1465866651; Hm_lpvt_e23800c454aa573c0ccb16b52665ac26=1465867161; _ga=GA1.2.1469164019.1455850659; _gat=1',
    'Host:segmentfault.com',
    'Origin:https://segmentfault.com',
    'Referer:https://segmentfault.com/',
    'User-Agent:Mozilla/5.0 (X11; Linux i686 (x86_64)) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/48.0.2564.97 Safari/537.36',
    'X-Requested-With:XMLHttpRequest',
);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_ENCODING, "");
$result = curl_exec($ch);
curl_close($ch);

var_dump($result);