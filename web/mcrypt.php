<?php
    /* 打开加密算法和模式 */
    $td = mcrypt_module_open('rijndael-256', '', 'ofb', '');

    /* 创建初始向量，并且检测密钥长度。 
     * Windows 平台请使用 MCRYPT_RAND。 */
    echo mcrypt_enc_get_iv_size($td);
    echo $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_DEV_RANDOM);
    echo $ks = mcrypt_enc_get_key_size($td);

    /* 创建密钥 */
    $key = substr(md5('very secret key'), 0, $ks);

    /* 初始化加密 */
    mcrypt_generic_init($td, $key, $iv);

    /* 加密数据 */
    $encrypted = mcrypt_generic($td, 'This is very important data');
    echo(base64_encode($encrypted));
    /* 结束加密，执行清理工作 */
    mcrypt_generic_deinit($td);

    /* 初始化解密模块 */
    mcrypt_generic_init($td, $key, $iv);

    /* 解密数据 */
    $decrypted = mdecrypt_generic($td, $encrypted);

    /* 结束解密，执行清理工作，并且关闭模块 */
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);

    /* 显示文本 */
    echo trim($decrypted) . "\n";
?>