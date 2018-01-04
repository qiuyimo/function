<?php
/**
 * Created by PhpStorm.
 * User: qiuyu
 * Date: 2018/1/4
 * Time: 下午4:02
 */
 
 
/**
 * 获取跳转后的url地址.
 * @param $url, string, 要测试的url
 * @return string, 最终跳转后的url.
 */
function get_redirect_url ($url) {
    $header = get_headers($url, 1);
    if (strpos($header[0], '301') !== false || strpos($header[0], '302') !== false) {
        if (is_array($header['Location'])) {
            return $header['Location'][count($header['Location']) - 1];
        } else {
            return $header['Location'];
        }
    } else {
        return $url;
    }
}