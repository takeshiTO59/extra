@include('common.header')
 
        <div class="cd-scrolling-bg cd-color">
            <div class="cd-container">   
                <div class="table-responsive">
                    
                    <table class="table">
                        <caption>
                            <h1>{{$item->title}}</h1>
                            <a href="/original/public/edit/check?id={{$item->id}}">投稿者として編集する</a>
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
