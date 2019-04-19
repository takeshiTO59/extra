@include('common.header')

        <section class="cd-scrolling-bg cd-color">
            <article class="cd-container">
                <h1>募集情報入力</h1>
                <form action="/original/public/confirm" method ="post" class="row">
                    {{ csrf_field()}}
                    <div class="col-sm-10 col-sm-offset-1">
                        <p>エキストラ募集に必要な項目を下記にご記入ください。</p>
                        <p>＊個人情報の記載はお辞めください。</p>
    
                        @if (count($errors) > 0)
                        <p><font color="red" >入力に誤りがあります。</font></p>
                        @endif
                        
                        <div class="form-group">
                        @if ($errors->has('nickname'))
                            <label for="nickname">主催者ニックネーム<span class="label label-danger">必須</span><font color="red">ニックネームが入力されていません。</font></label>
                            <input type="text" name="nickname" class="form-control" />
                        @else 
                            <label for="nickname">主催者ニックネーム<span class="label label-danger">必須</span></label>
                            <input type="text" name="nickname" class="form-control" />
                        @endif
                        </div>
                        <div class="form-group">
                        @if ($errors->has('password'))
                            <label for="password">パスワード<span class="label label-danger">必須</span><font color="red">パスワードが入力されていません。</font></label>
                            <input type="password" name="password" class="form-control" />
                        @else 
                            <label for="password">パスワード<span class="label label-danger">必須</span></label>
                            <input type="password" name="password" class="form-control" />
                        @endif
                        </div>
                        <div class="form-group">
                        @if ($errors->has('title'))
                            <label for="title">タイトル</label><span class="label label-danger">必須</span><font color="red">パスワードが入力されていません。</font></label>
                            <input type="text" name="title" class="form-control" />
                         @else    
                            <label for="title">タイトル<span class="label label-danger">必須</span></label>
                            <input type="text" name="title" class="form-control" />
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="deadline">申込み締め切り日</label>
                            <input type="date" name="deadline" class="form-control"/>    
                        </div>
                        <div class="form-group">
                            <p class="control-label"><b>映像ジャンル</b></p>
                            <div class="radio-inline"> 
                                <input type="radio" name="format"  value="映画"　checked="checked"/>
                                    <label for="cinema">映画</label>
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="format"  value="テレビ"/>
                                    <label for="tv">テレビ</label>
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="format"  value="インターネット動画"/>
                                    <label for="internet">インターネット動画</label>
                            </div>
                            <div class="radio-inline">
                                <input type="radio" name="format"  value="自主映画"/>
                                    <label for="internet">自主制作映画</label>
                            </div>
                        </div>
                        <label for="period">期間</label>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-3">
                                    <input type="date" name="period" class="form-control" />
                                </div>
                                <div class="col-xs-1 help-block">～</div>
                                <div class="col-xs-3">
                                    <input type="date" name="period" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">    
                            <label for="location">場所</label>
                            <input type="text" name="location" class="form-control"/>    
                        </div>
                        <div class="form-group">    
                            <label for="contents">撮影内容</label>
                            <textarea name="contents" cols="30" row="10" class="form-control">
                            </textarea>
                        </div>
                        <div class="form-group">    
                            <label for="role">役柄</label>
                            <input type="text" name="role" class="form-control"/>
                        </div>
                        <div class="form-group">
                        @if ($errors->has('contact'))    
                            <label for="contact">担当者連絡先リンク<span class="label label-danger">必須</span></label><font color="red">連絡先リンクが入力されていません。</font></label>
                            <input type="text" name="contact" class="form-control" />
                        @else 
                            <label for="contact">担当者連絡先リンク<span class="label label-danger">必須</span></label>
                            <input type="text" name="contact" class="form-control" />
                        @endif    
                        </div>
                        <div class="form-group">    
                            <label for="image">画像リンク</label>
                            <input type="text" name="image" class="form-control"/>
                        </div>
                         <div class="form-group">    
                            <label for="video">動画リンク</label>
                            <input type="text" name="video" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="caution">注意事項</label>
                            <textarea name="caution" row="10" class="form-control">
                            </textarea>
                        </div>
                        <div class="submit">   
                            <a href="javascript:history.back()">戻る</a>
                            <input class="input" type="submit" name="button" value="確認画面へ" />
                        </div>
                    </div>    
                </form>
            </article>      
        </section>
    </body>
</html>
