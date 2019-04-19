@include('common.header')

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
                        <div class="submit">    
                            <a href="javascript:history.back()">戻る</a>
                            <input class="input" type="submit" name="button" value="投稿する" />
                        </div>
                    </form>
                </div>    
            </article>
        </section>
    </body>
</html>