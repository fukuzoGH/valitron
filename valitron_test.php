<?php
//
// valitron
//  phpのフレームワークを使わない場合のバリデーション
//

// 実行テスト用
// http://localhost/valitron/valitron_test.php
//

// valitron 製品 (Git)
// https://github.com/vlucas/valitron
//

//
// 説明動画
// https://www.youtube.com/watch?v=7z9WVPnw6MM&ab_channel=%E3%80%90%E9%81%85%E5%92%B2%E3%81%8D%E3%82%A8%E3%83%B3%E3%82%B8%E3%83%8B%E3%82%A2%E3%80%91%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0Tips%EF%BC%81
//

// シンプルで使いやすい！バリデーションライブラリ「Valitron」の使い方
// https://tech.arms-soft.co.jp/entry/2019/10/30/090000

// クラウド開発環境 PaizaCloudクラウドIDE
// https://paiza.cloud/ja/

//require_once('../vendor/autoload.php');
require_once('vendor/autoload.php');



// 前もって渡しておく
$_POST["name"]='yamada';
$_POST["email"]='taro@yamada.jp';
$_POST["address"]='tokyo';



$v = new Valitron\Validator($_POST);

$v->rule('required', ['name', 'email']); //required:必須
$v->rule('email', 'email');
$v->rule('required','address');

if($v->validate()) {
    echo "バリデーションのルールに合ってます";
} else {
    // Errors
    print_r($v->errors());
}