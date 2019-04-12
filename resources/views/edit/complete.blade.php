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
    
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet" >
    </head>    
    <body>
        <div id="navbar">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/original/public/extra_list">
                        エキストラ.com
                    </a>
                </div><!-- /.navbar-header -->
                
                    <ul class="nav navbar-nav">
                        <li><a href="/original/public/input">新規投稿</a></li>
                    </ul>
                <div class="pull-right">
                    <form class="form-inline" action="/original/public/extra_list" method ="post" >
                            {{ csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" />
                            <input type="submit" name="button" value="検索" />
                        </div>    
                    </form>    
                </div>
            </div><!--container-fluid -->
        </nav>
        </div>
        <br><br> 
        <div class="cd-scrolling-bg cd-color">
            <div class="cd-container">   
                <div class="table-responsive">
                       
                    
                        <h1>登録完了しました。</h1>
                    
                        <a href="/original/public/extra_list">記事一覧へ</a>
                    
                </div>
            </div><!--cd-container -->
        </div>
    </body>
</html>