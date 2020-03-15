@extends("layout.template")
@section("title","お嫁フォーム")

@section("contents")
    <h1 class="display-4 text-center m-3">送信完了！</h1>
    <p class="text-center">
        申し込みありがとうございます！<br>
        お話ししましょ？笑（確認後連絡します）<br>
        <br>
        <a href="https://twitter.com/intent/tweet?text={{ $tweet }}">Twitterで共有する</a>
    </p>
@endsection
