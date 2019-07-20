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
                            <th>組織 (会社・学校・グループ等)</th>
                            <td>{{ $item->nickname }}</td>
                        </tr>
                        <tr>
                            <th>タイトル</th>
                            <td>{{$item->title}}</td>
                        </tr>
                        <tr>
                            <th>申込み期限</th>
                            <td>{{$item->deadline}}</td>
                        </tr>
                        
                        <tr>
                            <th>映像ジャンル</th>
                            <td>{{$item->format}}</td>
                        </tr>
                        <tr>
                            <th>期間</th>
                            <td>{{$item->period}}</td>
                        </tr>
                        <tr>
                            <th>場所</th>
                            <td>{{$item->location}}</td>
                        </tr>
                        <tr>
                            <th>撮影内容</th>
                            <td class="sentence">{{$item->contents}}</td>
                        </tr>
                        <tr>
                            <th>求める人</th>
                            <td>{{$item->role}}</td>
                        </tr>
                        <tr>
                            <th>担当者連絡先リンク</th>
                            <td>{{$item->contact}}</td>
                        </tr>
                        <tr>
                            <th>動画リンク</th>
                            <td><iframe src="{{$item->video}}"  width="500" height="300">
                                    
                                </iframe>
                            </td>
                        </tr>
                        <tr>
                            <th>注意事項</th>
                            <td class="sentence">{{$item->caution}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        
@include('common.footer')