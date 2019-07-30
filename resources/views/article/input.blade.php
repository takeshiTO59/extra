@include('common.header')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
                            <label for="nickname">組織 (会社・学校・グループ等)<span class="label label-danger">必須</span><font color="red">ニックネームが入力されていません。</font></label>
                            <input type="text" name="nickname" class="form-control" />
                        @else 
                            <label for="nickname">組織 (会社・学校・グループ等)<span class="label label-danger">必須</span></label>
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
                            <label for="title">タイトル</label><span class="label label-danger">必須</span><font color="red">タイトルが入力されていません。</font></label>
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
                                <div class="col-xs-4">
                                    <input type="date" name="period" class="form-control" />
                                </div>
                                <div class="col-xs-1 help-block">～</div>
                                <div class="col-xs-4">
                                    <input type="date" name="period" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        @if ($errors->has('location'))    
                            <label for="location">場所<font color="red">100文字以内に収めてください。</font></label>
                            <input type="text" name="location" class="form-control"/>    
                        </div>
                        <div class="form-group">
                        @else 
                            <label for="location">場所</label>
                            <input type="text" name="location" class="form-control"/>    
                        @endif
                        </div>
                        <div class="form-group"> 
                        @if($errors->has('contents'))
                            <script type="text/javascript" src="/original/public/js/contents.js"></script>
                            <label for="contents">撮影内容<font color="red">5000文字以内に収めてください。</font></label>
                            <p>
                                <span id="textCount">0</span>文字入力しました。
                                あと<span id="textLest">5000</span>文字入力できます。
                            </p>
                            <textarea id="textArea" name="contents" cols="30" row="10" class="form-control"></textarea>
                            <p id="textAttention" style="display:none; color:red;">入力文字数が多すぎます。</p>
                            
                        </div>
                        <div class="form-group"> 
                        @else
                            <script type="text/javascript" src="/original/public/js/contents.js"></script>
                            <label for="contents">撮影内容</label>
                            <p>
                                <span id="textCount">0</span>文字入力しました。
                                あと<span id="textLest">5000</span>文字入力できます。
                            </p>
                            <textarea id="textArea" name="contents" cols="30" row="10" class="form-control"></textarea>
                            <p id="textAttention" style="display:none; color:red;">入力文字数が多すぎます。</p>
                        @endif    
                        </div>
                        <div class="form-group">
                        @if ($errors->has('role'))    
                            <label for="role">求める人<font color="red">100文字以内に収めてください。</font></label>
                            <input type="text" name="role" class="form-control"/>
                        </div>
                        <div class="form-group">
                        @else
                            <label for="role">求める人</label>
                            <input type="text" name="role" class="form-control"/>
                        @endif
                        </div>
                        <div class="form-group">
                        @if ($errors->has('contact'))    
                            <label for="contact">担当者連絡先リンク(主催者代表のSNSアカウント名、メールアドレスなど)<span class="label label-danger">必須</span>
                            <br></label><font color="red">連絡先リンクが入力されていません。</font></label>
                            <input type="text" name="contact" class="form-control" />
                        @else 
                            <label for="contact">担当者連絡先リンク(主催者代表のSNSアカウント名、メールアドレスなど)<span class="label label-danger">必須</span></label>
                            <input type="text" name="contact" class="form-control" />
                        @endif    
                        </div>
                         <div class="form-group">    
                            <label for="video">動画リンク</label>
                            <input type="text" name="video" class="form-control"/>
                        </div>
                        <div class="form-group">
                        @if($errors->has('caution'))    
                            <script type="text/javascript" src="/original/public/js/caution.js"></script>
                            <label for="caution">注意事項<font color="red">5000文字以内に収めてください。</font></label>
                            <p>
                                <span id="textCount2">0</span>文字入力しました。
                                あと<span id="textLest2">5000</span>文字入力できます。
                            </p>
                            <textarea id="textArea2" name="caution" row="10" class="form-control"></textarea>
                            <p id="textAttention2" style="display:none; color:red;">入力文字数が多すぎます。</p>
                        </div>
                        <div class="form-group">
                        @else    
                            <script type="text/javascript" src="/original/public/js/caution.js"></script>
                            <label for="caution">注意事項</label>
                            <p>
                                <span id="textCount2">0</span>文字入力しました。
                                あと<span id="textLest2">5000</span>文字入力できます。
                            </p>
                            <textarea id="textArea2" name="caution" row="10" class="form-control"></textarea>
                            <p id="textAttention2" style="display:none; color:red;">入力文字数が多すぎます。</p>
                        @endif
                        </div>
                        <div class="submit">   
                            <a href="javascript:history.back()">戻る</a>
                            <input class="input" type="submit" name="button" value="確認画面へ" />
                        </div>
                    </div>    
                </form>
            </article>      
        </section>
@include('common.footer')