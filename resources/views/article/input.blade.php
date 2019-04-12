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
                            <input type="text" name="deadline" class="form-control"/>    
                        </div>
                        <div class="form-group">
                            <label for="format">映像ジャンル</label>
                            <input type="text" name="format" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="period">期間</label>
                            <input type="text" name="period" class="form-control"/>
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
                            <input type="submit" name="button" value="確認画面へ" />
                        </div>
                    </div>    
                </form>
            </article>      
        </section>
    </body>
</html>
