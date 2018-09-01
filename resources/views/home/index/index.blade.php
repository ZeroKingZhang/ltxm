@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')

<div id="content">
	<div class="layout layout-fs">
        <div class="col-main">
	<div class="focus">
       <div class="layui-carousel" id="test1">
            <div carousel-item>
              @foreach($carousel as $k=>$v)
              <div><img src="{{$v->carousel_pic}}" alt=""></div>
              @endforeach
            </div>
      </div>
          <!-- 条目中可以是任意内容，如：<img src=""> -->
           
          <script src="/layui/layui.js"></script>
          <script>
          layui.use('carousel', function(){
            var carousel = layui.carousel;
            //建造实例
            carousel.render({
              elem: '#test1'
              ,width: '640px'//设置容器宽度
              ,height: '280px' //设置容器高度
              ,arrow: 'always' //始终显示箭头
              ,autoplay: true
              ,arrow:'hover'
              ,anim: 'default' //切换动画方式
            });
          });
          </script>
    </div>
   
      <div class="hots"> 
   <dl class="hots-title"> 
    <dt class="word" title=" 热门帖子"></dt> 
    <dd> 
     <a href="" target="_blank" class="highlight"></a> 
    </dd> 
   </dl> 
   <ul id="hot"> 
    <li class="hot-list">
     <div class="hot"> 
      <div class="title"> 
       <h3> <a href="http://shuyuan.taobao.com/?spm=a2e1t.8741129.a214tr8.17.5d25304ciYkkIB#!/knowledge/detail?id=Wz&amp;targetType=text" target="_blank" title="猜你喜欢全新升级，解码全新手淘首页流量玩法">猜你喜欢全新升级，解码全新手淘首页流量玩法</a></h3> 
      </div> 
      <p class="detail">随着手淘版块的不断变更，如何抓住推荐场景的流量对于商家来说将越来越重要。直钻推广猜你喜欢全新升级，为您带来全新手淘首页流量玩法</p> 
      <p class="time">发表于 2018-06-1510:40</p> 
     </div> 
     </li> 
   </ul> 
  </div>
</div>  
<div class="col-sub"> 
   <div class="hot-post focus"> 
    <h4 class="post-title">公告：<a href="/announcement/{{$announcements->announcement_id}}" target="_blank">{{$announcements->announcement_title}}</a> </h4> 
    <div class="info"> 
     <dl class="reply-list"> 
      <dt>
       销量太少？
      </dt> 
      <dd>
       告诉你如何销量突破 
     </dl> 
    </div> 
   </div> 
   <div class="right-box ju"> 
    <h2 class="icon-title">右侧标题</h2> 
    <ul class="post-list"> 
     
    </ul> 
   </div> 
   <div class="right-box service"> 
    <h2 class="icon-title"><a href="#" title="服务之声专区" target="_blank"></a></h2> 
    <div class="news-img-info"> 
     <a class="news-img" href="https://wenshangyou.taobao.com/talk/detail?spm=a21m3.8109699.0.0.46029439bHL9zT&amp;id=16385055" target="_blank" title="春节前店铺必做事宜！"> <img src="picture/tb2bycsxfusbunkhfqdxxxfhvxa_!!0-martrix_bbs.jpg" /> </a> 
     <div class="news-info">
      <h4><a href="https://wenshangyou.taobao.com/talk/detail?spm=a21m3.8109699.0.0.46029439bHL9zT&amp;id=16385055">春节前店铺必做事宜！</a></h4> 
      <p>春节临近，这件事是每个店铺必须要做的！<a href="https://wenshangyou.taobao.com/talk/detail?spm=a21m3.8109699.0.0.46029439bHL9zT&amp;id=16385055" target="_blank">[详细]</a></p> 
     </div> 
    </div> 
    <ul class="post-list"> 
     <li> 
      <s class="dot"></s> <p><a href="https://daxue.taobao.com/markets/daxue/jinjie" target="_blank" title="中小卖家福利！赢收快速升级10倍的秘籍！">中小卖家福利！赢收快速升级10倍的秘籍！</a></p> </li> 
     <li> 
      <s class="dot"></s> <p><a href="https://daxue.taobao.com/markets/daxue/jingpinke" target="_blank" title="双11电商大咖告诉你赚钱秘籍">双11电商大咖告诉你赚钱秘籍</a></p> </li> 
    </ul> 
   </div> 
   <div class="right-box assess"> 
    <h2 class="icon-title"><a href="//www.taobao.com/go/act/taoinfo/evaluate.php?spm=1.358608.295676.1" title="评价专区" target="_blank"></a></h2> 
    <div class="news-img-info"> 
     <a class="news-img" href="https://hot.bbs.taobao.com/detail.html?spm=a210m.8146691.0.0.LklSA4&amp;postId=7637918" target="_blank" title="你也犯过同样的错误？"> <img src="picture/tb2cr9cud0opufjszfxxxadnvxa_!!0-martrix_bbs.jpg" /> </a> 
     <div class="news-info"> 
      <h4><a href="https://hot.bbs.taobao.com/detail.html?spm=a210m.8146691.0.0.LklSA4&amp;postId=7637918">你也犯过同样的错误？</a></h4> 
      <p> 朋友们，近期在抽查判定结果中有二个点大家认识不够清晰？一起来看看！<a href="https://hot.bbs.taobao.com/detail.html?spm=a210m.8146691.0.0.LklSA4&amp;postId=7637918" target="_blank">[详细]</a> </p> 
     </div> 
    </div> 
    <ul class="post-list"> 
     <li> 
      <s class="dot"></s> <p><a href="" target="_blank" title="“规避”售后交易纠纷，官方后门曝光!">“规避”售后交易纠纷，官方后门曝光!</a></p> </li> 
    </ul> 
   </div> 
  </div>  


@endsection