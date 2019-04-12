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
                <div class="table-responsive">
                        <h1>確認画面</h1>
                    <form action="/original/public/complete" method ="post" >    
                            <table class="table">
                                <tbody> 
                                        {{ csrf_field()}}
                                        <input type="hidden" name="today" value="{{ $today }}">
                                    <tr>    
                                        <th>主催者ニックネーム</th>
                                        <td>{{ $nickname }}</td>
                                        <input type="hidden" name="nickname" value="{{ $nickname }}">
                                    </tr>
                                    <tr>
                                        <th>パスワード</th>
                                        <td>非表示</td>
                                        <input type="hidden" name="password" value="{{ $password }}"> 
                                    </tr>
                                    <tr>    
                                        <th>タイトル</th>
                                        <td>{{ $title }}</td>
                                        <input type="hidden" name="title" value="{{ $title }}">
                                    </tr>
                                    <tr>    
                                        <th>申込み締め切り日</th>
                                        <td>{{ $deadline }}</td>
                                        <input type="hidden" name="deadline" value="{{ $deadline }}">
                                    </tr>
                                    <tr>    
                                        <th>映像ジャンル</th>
                                        <td>{{ $format }}</td>
                                        <input type="hidden" name="format" value="{{ $format }}">
                                    </tr>
                                    <tr>    
                                        <th>期間</th>
                                        <td>{{ $period }}</td>
                                        <input type="hidden" name="period" value="{{ $period }}">
                                    </tr>
                                    <tr>    
                                        <th>場所</th>
                                        <td>{{ $location }}</td>
                                        <input type="hidden" name="location" value="{{ $location }}">
                                    </tr>
                                    <tr>    
                                        <th>撮影内容</th> 
                                        <td>{{ $contents }}</td>
                                        <input type="hidden" name="contents" value="{{ $contents }}">
                                    </tr>
                                    <tr>    
                                        <th>役柄</th>
                                        <td>{{ $role }}</td>
                                        <input type="hidden" name="role" value="{{ $role }}">
                                    </tr>
                                    <tr>    
                                        <th>画像リンク</th>
                                        <td>{{ $image }}</td>
                                        <input type="hidden" name="image" value="{{ $image }}">
                                    </tr>
                                    <tr>    
                                        <th>動画リンク</th>
                                        <td>{{ $video }}</td>
                                        <input type="hidden" name="video" value="{{ $video }}">
                                    </tr>
                                    <tr>    
                                        <th>担当者連絡先リンク</th>
                                        <td>{{ $contact }}</td>
                                        <input type="hidden" name="contact" value="{{ $contact }}">
                                    </tr>
                                    <tr>    
                                        <th>注意事項</th>
                                        <td>{{ $caution }}</td>
                                        <input type="hidden" name="caution" value="{{ $caution }}">
                                    </tr>
                                    
                                </tbody>
                            </table>
                        <a href="javascript:history.back()">戻る</a>
                        <input type="submit" name="button" value="投稿する" />
                    </form>
                </div>    
            </article>
        </section>
    </body>
</html>