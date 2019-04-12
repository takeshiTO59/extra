@include('common.header')
        <br><br>
       
            <section id="bg-01">
                <div class="section-conts">
                  <div class="bg-white">
                    <h2>エキストラと映像作品をつなぐ掲示板サイト</h2>
                    <p>引きの画が欲しい方は登録お願いします。ボランティアスタッフ募集も歓迎です！</p>
                    <p>端役でもいいから出演したい人は検索してください！</p>
                  </div>
                <div>    
            </section>
            
        
            <section class="cd-scrolling-bg cd-color">
                <article class="cd-container">
                    
                    <p class="caption">現在、エキストラを募集中の企画はこちらです。</p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class ="time">投稿日</th>
                                    <th>タイトル</th>
                                    <th class ="time">申込み期限</th>
                                    <th>役柄</th>
                                </tr>
                            </thead>    
                            <tbody>
                                @foreach($items as $item)
                                
                                <tr class="table table-hover">
                                    <td>
                                        {{\Carbon\Carbon::createFromTimestamp($item->today)->format("Y/m/d")}}
                                    </td>
                                    <td>
                                        <a href="/original/public/detail?id={{$item->id}}">{{$item->title}}</a><br>
                                    </td>
                                    <td class="time">
                                        <a href="/original/public/detail?id={{$item->id}}">{{$item->deadline}}</a>
                                    </td>
                                    <td class="long">
                                        <a href="/original/public/detail?id={{$item->id}}">{{$item->role}}</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                            
                        </table>
                        
                </article>
            </section>
            <footer>
                <p>(c)copy right</p>
            </footer>
            
        </div>
    </body>
</html>