<!DOCTYPE html>
<html lang=ja>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>エキストラ.com</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" >
    </head>    
    <body>
        <div id="navbar">
            <nav class="navbar  navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand header"  href="/original/public/extra_list">エキストラ.com</a>
                    </div><!-- /.navbar-header -->
                    
                        <ul class="nav navbar-nav">
                            <li><a class="header" href="/original/public/input">新規投稿</a></li>
                        </ul>
                    <div class="pull-right">
                        <form class="form-inline" action="/original/public/extra_list" method ="post" >
                                {{ csrf_field()}}
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" />
                                <input type="submit" name="button" value="&#xf002;" class="button"  />
                            </div>    
                        </form>    
                    </div>
                </div><!-- /.container -->
            </nav>
        </div>
        <br><br>
        
        <div class="cd-scrolling-bg cd-color">
            <div class="cd-container">   
                
                    
                    <h1>エキストラ募集一覧</h1>
                        
                        <form action="/original/public/edit/index" method ="post" class="row">
                            {{ csrf_field()}}
                            <div class="col-sm-8 col-sm-offset-2">
                                
                                <input type="hidden" name="id" value="{{$form->id}}">
                                <div class="form-group">
                                <p>主催者ニックネーム</p>
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
                                   <input type="submit" name="button" value="編集する" />
                            </div><!-- col-sm-8 -->
                        </form>
                        
                
            </div><!--container -->
        </div>
    </body>        
</html>
