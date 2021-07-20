<?php
class Book{//Bookクラス
    private $value;//private変数 value を定義

    public function __construct()
    {
        $this->value = 1800;//コンストラクタにて値を代入
    }
}
class TextBook extends Book{//TextBookクラス　親クラスBookを継承
    public function __construct()
    {
        parent::__construct();//親コンストラクタを呼び出し
    }
}

$tb = new TextBook();//TextBookクラスを生成

echo $tb->value;//=> 空欄が表示  =====子クラスから親のprivate変数にアクセスしてるのにエラーにならない？？？

$tb->value = 2000;
echo $tb->value;//=> 2000と表示 =====子クラスから親のprivate変数に代入できている？？？？