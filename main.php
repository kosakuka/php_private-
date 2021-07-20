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


//原因としては、親Bookクラスと子TextBookクラスの変数valueは別物であったということ。
//private変数だから、子クラスからアクセスはできない。つまり引き継ぎができていない。
//その状態で、21行目のような処理を行うと、子クラスに新たにvalue変数が生成されることとなる。

//なお、privateではなくprotected（クラス自身と子クラスからのみアクセス可）という宣言方法を使うと、
//19~22行目のような状態は起きなくなるので、その方が安全。

//なお、Javaでは当該の問題は発生しない、Javaでは継承の際に、変数valueはprivateであるという情報をしっかり渡せているのだろう。
