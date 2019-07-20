@include('common.header')

        <div class="cd-scrolling-bg cd-color">
            <div class="cd-container">   
                <h1>エキストラ募集一覧</h1>
                <form action="/original/public/edit/index" method ="post" class="row">
                    {{ csrf_field()}}
                    <div class="col-sm-8 col-sm-offset-2">
                        
                        <input type="hidden" name="id" value="{{$form->id}}">
                        <div class="form-group">
                        <p>組織 (会社・学校・グループ等)</p>
                        <p>{{$form->nickname}}</p>
                        </div>
                        <div class="form-group">
                        <p>タイトル</p>
                        <p>{{$form->title}}</p>
                        </div>
                        <div class="form-group">
                        <p>パスワードを入力してください。</p>
                        
                        @if ($errors->has('password'))
                            <label for="password"><font color="red">パスワードが入力されていません。</font></label>
                            <input type="password" name="password"  class="form-control" />
                        @else
                            @if($msg == 1)
                            <label for="password"><font color="red">パスワードが間違っています。</font></label>
                            @endif
                            <input type="password" name="password"  class="form-control" />
                        @endif
                        
                        </div>
                        <div class="submit">
                           <input class="input" type="submit" name="button" value="編集する" />
                        </div>   
                    </div><!-- col-sm-8 -->
                </form>    
            </div><!--container -->
        </div>
@include('common.footer')
