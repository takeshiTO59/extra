@include('common.header')

        <div class="cd-scrolling-bg cd-color">
            <div class="cd-container">
                <h1>編集</h1>
                
                <form action="/original/public/edit/confirm" method ="post" class="row">
                    
                    {{ csrf_field()}}
                    <div class="col-sm-10 col-sm-offset-1">
                        <p>エキストラ募集に必要な項目を下記にご記入ください。</p>
                        <p>＊個人情報の記載はお辞めください。</p>
                        
                        <input type="hidden" name="id" value="{{$form->id}}">
                        <input type="hidden" name="today" value="{{ $form->today }}">
                        @if (count($errors) > 0)
                        <p><font color="red" >入力に誤りがあります。</font></p>
                        @endif
                        
                        <div class="form-group">
                        @if ($errors->has('nickname'))
                            <label for="nickname">組織 (会社・学校・グループ等)<span class="label label-danger">必須</span><font color="red">ニックネームが入力されていません。</font></label>
                            <input type="text" name="nickname" class="form-control" />
                        @else 
                            <label for="nickname">組織 (会社・学校・グループ等)<span class="label label-danger">必須</span></label>
                            <input type="text" name="nickname" class="form-control" value="{{$form->nickname}}"/>
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
                            <label for="title">タイトル</label>
                            <input type="text" name="title" class="form-control" value="{{$form->title}}"/>
                        </div>
                        <div class="form-group">
                        <label for="deadline">申込み締め切り日</label>
                        <input type="text" name="deadline" class="form-control" value="{{$form->deadline}}"/>    
                        </div>
                        <div class="form-group">
                            <label for="format">映像ジャンル</label>
                            <input type="text" name="format" class="form-control" value="{{$form->format}}"/>
                        </div>
                        <div class="form-group">
                            <label for="period">期間</label>
                            <input type="text" name="period" class="form-control" value="{{$form->period}}"/>
                        </div>
                        <div class="form-group">    
                            <label for="location">場所</label>
                            <input type="text" name="location" class="form-control" value="{{$form->location}}"/>    
                        </div>
                        <div class="form-group">    
                            <label for="contents">撮影内容</label>
                            <textarea name="contents" cols="30" row="10" class="form-control" value="{{$form->contents}}"/>
                            </textarea>
                        </div>
                        <div class="form-group">    
                            <label for="role">求める人</label>
                            <input type="text" name="role" class="form-control" value="{{$form->role}}"/>
                        </div>
                        <div class="form-group">
                        @if ($errors->has('contact'))    
                            <label for="contact">担当者連絡先リンク<span class="label label-danger">必須</span></label><font color="red">連絡先リンクが入力されていません。</font></label>
                            <input type="text" name="contact" class="form-control" value="{{$form->contact}}"/>
                        @else 
                            <label for="contact">担当者連絡先リンク<span class="label label-danger">必須</span></label>
                            <input type="text" name="contact" class="form-control" value="{{$form->contact}}"/>
                        @endif    
                        </div>
                        
                         <div class="form-group">    
                            <label for="video">動画リンク</label>
                            <input type="text" name="video" class="form-control" value="{{$form->video}}"/>
                        </div>
                        <div class="form-group">
                            <label for="caution">注意事項</label>
                            <textarea name="caution" row="10" class="form-control" value="{{$form->caution}}">
                            </textarea>
                        </div>
                        <div class="submit">   
                            <a href="javascript:history.back()">戻る</a>
                            <input class="input" type="submit" name="button" value="確認画面へ" />
                        </div>
                    </div><!-- col-sm-8 -->
                </form>
            </div><!--container -->
        </div>    
    </body>        
</html>
