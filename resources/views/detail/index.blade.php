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
                <div class="table-responsive">
                    
                    <table class="table">
                        <caption>
                            <h1>{{$item->title}}</h1>
                            <a href="/original/public/edit/check?id={{$item->id}}">編集する</a>
                        </caption>
                        
                        <tbody>
                            
                            <tr>
                                <th>投稿日</th>
                                <td>{{\Carbon\Carbon::createFromTimestamp($item->today)->format("Y/m/d")}}</td>
                            </tr>
                            <tr>
                                <th>タイトル</th>
                                <td>{{$item->title}}</td>
                            </tr>
                            <tr>
                                <th>申込み締め切り日</th>
                                <td>{{$item->deadline}}</a></td>
                            </tr>
                            
                            <tr>
                                <th>映像ジャンル</th>
                                <td>{{$item->format}}</a></td>
                            </tr>
                            <tr>
                                <th>期間</th>
                                <td>{{$item->period}}</a></td>
                            </tr>
                            <tr>
                                <th>場所</th>
                                <td>{{$item->location}}</a></td>
                            </tr>
                            <tr>
                                <th>撮影内容</th>
                                <td>{{$item->contents}}</a></td>
                            </tr>
                            <tr>
                                <th>役柄</th>
                                <td>{{$item->role}}</a></td>
                            </tr>
                            <tr>
                                <th>担当者連絡先リンク</th>
                                <td>{{$item->contact}}</a></td>
                            </tr>
                            <tr>
                                <th>画像リンク</th>
                                <td>{{$item->image}}</a></td>
                            </tr>
                            <tr>
                                <th>動画リンク</th>
                                <td>{{$item->video}}</a></td>
                            </tr>
                            <tr>
                                <th>注意事項</th>
                                <td>{{$item->caution}}</a></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </body>
</html>
