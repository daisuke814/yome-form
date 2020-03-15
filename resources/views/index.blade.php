@extends("layout.template")
@section("title","お嫁フォーム")

@section("contents")
    <h1 class="display-4 text-center m-3">お嫁フォーム</h1>
    <div class="alert-success">
        見てくれてありがとう！<br>
        僕は今、絶賛婚活中なんだ！ よかったら僕と結婚しない？笑<br>
        とりま、以下のフォームより申し込んでよ！
        <hr>
        個人情報の取り扱いには十分注意します (^^)
    </div>
    <form action="/" method="post">
        @csrf
        <div class="form-group">
            <label for="name">お名前</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="山田 花子" required>
        </div>
        <div class="form-group">
            <label for="year">年齢</label>
            <input type="number" class="form-control" name="year" id="year" placeholder="21才（半角数字のみ）" required>
        </div>
        <div class="form-group">
            <label for="work">職業</label>
            <input type="text" class="form-control" name="work" id="work" placeholder="会社員">
        </div>
        <div class="form-group">
            <label for="child">ほしい子どもの人数は？</label>
            <select multiple class="form-control" id="child" name="child">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="10plus">それ以上</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">嫁になる意気込みを！</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="mail">返信様アドレス</label>
            <input type="email" class="form-control" id="mail" name="email" placeholder="name@example.com">
        </div>
        <label for="validationCustomUsername">Twitter<span class="text-danger"> ※必須</span></label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
            </div>
            <input type="text" class="form-control" name="twitter" id="validationCustomUsername" placeholder="_______Sakamoto" aria-describedby="inputGroupPrepend" required>
        </div>
        <button type="submit" class="btn btn-primary mb-3">申し込み！</button>
    </form>
@endsection
