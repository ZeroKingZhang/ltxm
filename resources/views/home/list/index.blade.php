@extends('home.layout.layout')


@section('content')
<div id="wp" class="wp">
<style id="diy_style" type="text/css"></style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->
<div id="pt" class="bm cl">
<div class="z">
<a href="./" class="nvhm" title="首页">长岛论坛</a><em>&raquo;</em><a href="forum.php">论坛</a> <em>&rsaquo;</em> <a href="forum.php?gid=26">长岛区</a><em>&rsaquo;</em> <a href="forum-9-1.html">百姓杂谈</a></div>
</div><div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>
<div class="boardnav">
<div id="ct" class="wp cl">

<div class="mn">
<div class="bm bml pbn">
<div class="bm_h cl">
<span class="o"><img id="forum_rules_9_img" src="picture/collapsed_no_1.gif" title="收起/展开" alt="收起/展开" onclick="toggle_collapse('forum_rules_9')" /></span><span class="y">
<a href="home.php?mod=spacecp&amp;ac=favorite&amp;type=forum&amp;id=9&amp;handlekey=favoriteforum&amp;formhash=c73d2b30" id="a_favorite" class="fa_fav" onclick="showWindow(this.id, this.href, 'get', 0);">收藏本版 <strong class="xi1" id="number_favorite" >(<span id="number_favorite_num">60</span>)</strong></a>

</span>
<h1 class="xs2">
<a href="forum-9-1.html">百姓杂谈</a>
<span class="xs1 xw0 i">今日: <strong class="xi1">7</strong><b class="ico_fall">&nbsp;</b><span class="pipe">|</span>主题: <strong class="xi1">27371</strong><span class="pipe">|</span>排名: <strong class="xi1" title="上次排名:1">1</strong><b class="ico_increase">&nbsp;</b></span></h1>
</div>
<div class="bm_c cl pbn">
<div>版主: <span class="xi2"><a href="space-username-%C7%E0%B5%BA%8B%A0%D4%DA%B3%A4%B5%BA.html" class="notabs" c="1">青岛嫚在长岛</a></span></div><div id="forum_rules_9" style=";">
<div class="ptn xg2">1、严禁发表违反国家法律法规以及政治，色情与广告相关的帖子以及全坛禁止发布的内容，如病毒贴、QQ广告贴等。2、严禁发布涉及以下内容的贴: <font color="red">A．严禁发表任何类型的人身攻击的文章或会员之间在帖子中相互攻击谩骂;B．严禁使用带有侮辱性质的语言、容易引起歧义的语言以及其他不文明语言;C．严禁发表地方性歧视的言辞; D．严禁发表有性别歧视倾向的言辞;E．严禁发布关于修改、恶搞国旗、国徽、人民币、国家领导人等类图片的帖子;F．严禁发表广告贴及拉游客留电话的帖子。</font>处罚：帖子删除处理，给予10-100积分扣除处罚，情节严重的，追加禁言处理。</div>
</div>
</div>
</div>



<div class="drag">
<!--[diy=diy4]--><div id="diy4" class="area"></div><!--[/diy]-->
</div>




<div id="pgt" class="bm bw0 pgs cl">
<span id="fd_page_top"><div class="pg"><strong>1</strong><a href="forum-9-2.html">2</a><a href="forum-9-3.html">3</a><a href="forum-9-4.html">4</a><a href="forum-9-5.html">5</a><a href="forum-9-6.html">6</a><a href="forum-9-7.html">7</a><a href="forum-9-8.html">8</a><a href="forum-9-9.html">9</a><a href="forum-9-10.html">10</a><a href="forum-9-913.html" class="last">... 913</a><label><input type="text" name="custompage" class="px" size="2" title="输入页码，按回车快速跳转" value="1" onkeydown="if(event.keyCode==13) {window.location='forum.php?mod=forumdisplay&fid=9&amp;page='+this.value;; doane(event);}" /><span title="共 913 页"> / 913 页</span></label><a href="forum-9-2.html" class="nxt">下一页</a></div></span>
<span class="pgb y"  ><a href="forum.php">返&nbsp;回</a></span>
<a href="javascript:;" id="newspecial" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=9')" title="发新帖"><img src="picture/pn_post_1.png" alt="发新帖" /></a></div>
<div id="threadlist" class="tl bm bmw">
<div class="th">
<table cellspacing="0" cellpadding="0">
<tr>
<th colspan="2">
<div class="tf">
<span id="atarget" onclick="setatarget(1)" class="y" title="在新窗口中打开帖子">新窗</span>
<a id="filter_special" href="javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">全部主题</a>&nbsp;						
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=lastpost&amp;orderby=lastpost" class="xi2">最新</a>&nbsp;
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=heat&amp;orderby=heats" class="xi2">热门</a>&nbsp;
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=hot" class="xi2">热帖</a>&nbsp;
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=digest&amp;digest=1" class="xi2">精华</a>&nbsp;
<a id="filter_dateline" href="javascript:;" class="showmenu xi2" onclick="showMenu(this.id)">更多</a>&nbsp;
<span id="clearstickthread" style="display: none;">
<span class="pipe">|</span>
<a href="javascript:;" onclick="clearStickThread()" class="xi2" title="显示置顶">显示置顶</a>
</span>
</div>
</th>
<td class="by">作者</td>
<td class="num">回复/查看</td>
<td class="by">最后发表</td>
</tr>
</table>
</div>
<div class="bm_c">
<script type="text/javascript">var lasttime = 1534839860;var listcolspan= '5';</script>
<div id="forumnew" style="display:none"></div>
<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&amp;action=moderate&amp;fid=9&amp;infloat=yes&amp;nopost=yes">
<input type="hidden" name="formhash" value="c73d2b30" />
<input type="hidden" name="listextra" value="page%3D1" />
<table summary="forum_9" cellspacing="0" cellpadding="0" id="threadlisttableid">
<tbody id="stickthread_323">
<tr>
<td class="icn">
<a href="thread-323-1-1.html" title="全局置顶主题 - 新窗口打开" target="_blank">
<img src="picture/pin_3_1.gif" alt="全局置顶" />
</a>
</td>
<th class="common">
<a href="javascript:;" id="content_323" class="showcontent y" title="更多操作" onclick="CONTENT_TID='323';CONTENT_ID='stickthread_323';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a href="javascript:void(0);" onclick="hideStickThread('323')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('323', 'stickthread_323');">预览</a>
 <a href="thread-323-1-1.html" style="font-weight: bold;color: #2B65B7;" onclick="atarget(this)" class="s xst">来长岛必吃的几道长岛美食好菜--看看</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<span class="tps">&nbsp;...<a href="thread-323-2-1.html">2</a><a href="thread-323-3-1.html">3</a><a href="thread-323-4-1.html">4</a><a href="thread-323-5-1.html">5</a><a href="thread-323-6-1.html">6</a>..<a href="thread-323-18-1.html">18</a></span>
</th>
<td class="by">
<cite>
<a href="space-uid-4036.html" c="1">浪花</a></cite>
<em><span>2006-8-11</span></em>
</td>
<td class="num"><a href="thread-323-1-1.html" class="xi2">137</a><em>4097877</em></td>
<td class="by">
<cite><a href="space-username-%CC%A9%B0%B2%C0%CF%B6%A1.html" c="1">泰安老丁</a></cite>
<em><a href="forum.php?mod=redirect&tid=323&goto=lastpost#lastpost">2018-7-31 13:52</a></em>
</td>
</tr>
</tbody>
<tbody id="stickthread_29327">
<tr>
<td class="icn">
<a href="thread-29327-1-1.html" title="全局置顶主题 - 新窗口打开" target="_blank">
<img src="picture/pin_3_1.gif" alt="全局置顶" />
</a>
</td>
<th class="common">
<a href="javascript:;" id="content_29327" class="showcontent y" title="更多操作" onclick="CONTENT_TID='29327';CONTENT_ID='stickthread_29327';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a href="javascript:void(0);" onclick="hideStickThread('29327')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('29327', 'stickthread_29327');">预览</a>
 <a href="thread-29327-1-1.html" style="font-weight: bold;color: #8F2A90;" onclick="atarget(this)" class="s xst">【最美丽的海】走进大风车王国，揭开岛屿的绮丽</a>
<img src="picture/common_1.gif" alt="attachment" title="附件" align="absmiddle" />
<img src="picture/digest_1_1.gif" align="absmiddle" alt="digest" title="精华 1" />
<span class="tps">&nbsp;...<a href="thread-29327-2-1.html">2</a><a href="thread-29327-3-1.html">3</a><a href="thread-29327-4-1.html">4</a><a href="thread-29327-5-1.html">5</a><a href="thread-29327-6-1.html">6</a></span>
</th>
<td class="by">
<cite>
<a href="space-uid-4036.html" c="1">浪花</a></cite>
<em><span>2012-3-8</span></em>
</td>
<td class="num"><a href="thread-29327-1-1.html" class="xi2">46</a><em>3949954</em></td>
<td class="by">
<cite><a href="space-username-%BC%AA%CB%FD.html" c="1">吉她</a></cite>
<em><a href="forum.php?mod=redirect&tid=29327&goto=lastpost#lastpost">2018-4-28 15:42</a></em>
</td>
</tr>
</tbody>
<tbody id="stickthread_125">
<tr>
<td class="icn">
<a href="thread-125-1-1.html" title="全局置顶主题 - 新窗口打开" target="_blank">
<img src="picture/pin_3_1.gif" alt="全局置顶" />
</a>
</td>
<th class="common">
<a href="javascript:;" id="content_125" class="showcontent y" title="更多操作" onclick="CONTENT_TID='125';CONTENT_ID='stickthread_125';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a href="javascript:void(0);" onclick="hideStickThread('125')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('125', 'stickthread_125');">预览</a>
 <a href="thread-125-1-1.html" style="color: #EE1B2E;" onclick="atarget(this)" class="s xst">2005“五一”网友鸟岛[海上游]归来，美图！！！</a>
<img src="picture/common_1.gif" alt="attachment" title="附件" align="absmiddle" />
<span class="tps">&nbsp;...<a href="thread-125-2-1.html">2</a><a href="thread-125-3-1.html">3</a><a href="thread-125-4-1.html">4</a><a href="thread-125-5-1.html">5</a></span>
</th>
<td class="by">
<cite>
<a href="space-uid-461.html" c="1">cdzxg</a></cite>
<em><span>2005-5-4</span></em>
</td>
<td class="num"><a href="thread-125-1-1.html" class="xi2">39</a><em>3973397</em></td>
<td class="by">
<cite><a href="space-username-%D0%FD%C2%C9_YEVN.html" c="1">旋律_YEVN</a></cite>
<em><a href="forum.php?mod=redirect&tid=125&goto=lastpost#lastpost">2017-10-20 16:50</a></em>
</td>
</tr>
</tbody>
<tbody id="stickthread_2229">
<tr>
<td class="icn">
<a href="thread-2229-1-1.html" title="全局置顶主题 - 新窗口打开" target="_blank">
<img src="picture/pin_3_1.gif" alt="全局置顶" />
</a>
</td>
<th class="common">
<a href="javascript:;" id="content_2229" class="showcontent y" title="更多操作" onclick="CONTENT_TID='2229';CONTENT_ID='stickthread_2229';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a href="javascript:void(0);" onclick="hideStickThread('2229')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('2229', 'stickthread_2229');">预览</a>
 <a href="thread-2229-1-1.html" style="font-weight: bold;color: #3C9D40;" onclick="atarget(this)" class="s xst">本站QQ群12300767，了解长岛的网友请加入</a>
<img src="picture/common_1.gif" alt="attachment" title="附件" align="absmiddle" />
<span class="tps">&nbsp;...<a href="thread-2229-2-1.html">2</a><a href="thread-2229-3-1.html">3</a><a href="thread-2229-4-1.html">4</a><a href="thread-2229-5-1.html">5</a></span>
</th>
<td class="by">
<cite>
<a href="space-uid-461.html" c="1">cdzxg</a></cite>
<em><span>2005-7-1</span></em>
</td>
<td class="num"><a href="thread-2229-1-1.html" class="xi2">35</a><em>3878163</em></td>
<td class="by">
<cite><a href="space-username-%B3%A4%B5%BA%D4%B2%D4%B2.html" c="1">长岛圆圆</a></cite>
<em><a href="forum.php?mod=redirect&tid=2229&goto=lastpost#lastpost">2012-4-19 18:09</a></em>
</td>
</tr>
</tbody>
<tbody id="stickthread_6026">
<tr>
<td class="icn">
<a href="thread-6026-1-1.html" title="全局置顶主题 - 新窗口打开" target="_blank">
<img src="picture/pin_3_1.gif" alt="全局置顶" />
</a>
</td>
<th class="common">
<a href="javascript:;" id="content_6026" class="showcontent y" title="更多操作" onclick="CONTENT_TID='6026';CONTENT_ID='stickthread_6026';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a href="javascript:void(0);" onclick="hideStickThread('6026')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('6026', 'stickthread_6026');">预览</a>
 <a href="thread-6026-1-1.html" style="font-weight: bold;color: #EE1B2E;" onclick="atarget(this)" class="s xst">北京到长岛自驾线路指南--G18 荣乌高速</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<span class="tps">&nbsp;...<a href="thread-6026-2-1.html">2</a><a href="thread-6026-3-1.html">3</a></span>
</th>
<td class="by">
<cite>
<a href="space-uid-4036.html" c="1">浪花</a></cite>
<em><span>2008-12-29</span></em>
</td>
<td class="num"><a href="thread-6026-1-1.html" class="xi2">18</a><em>3882171</em></td>
<td class="by">
<cite><a href="space-username-%B3%A4%B5%BA%C1%F9%BA%CD%D3%E6%BC%D2.html" c="1">长岛六和渔家</a></cite>
<em><a href="forum.php?mod=redirect&tid=6026&goto=lastpost#lastpost">2010-3-17 14:56</a></em>
</td>
</tr>
</tbody>
<tbody id="stickthread_96413">
<tr>
<td class="icn">
<a href="thread-96413-1-1.html" title="分类置顶主题 - 新窗口打开" target="_blank">
<img src="picture/pin_2_1.gif" alt="分类置顶" />
</a>
</td>
<th class="common">
<a href="javascript:;" id="content_96413" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96413';CONTENT_ID='stickthread_96413';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a href="javascript:void(0);" onclick="hideStickThread('96413')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96413', 'stickthread_96413');">预览</a>
 <a href="thread-96413-1-1.html" style="text-decoration: underline;color: #EC1282;background-color: #FFFFFF;" onclick="atarget(this)" class="s xst">长医杯“海岛感动瞬间”随手拍摄影比赛</a>
<img src="picture/digest_3_1.gif" align="absmiddle" alt="digest" title="精华 3" />
</th>
<td class="by">
<cite>
<a href="space-uid-133343.html" c="1">长岛县医院</a></cite>
<em><span><span title="2018-8-20">昨天&nbsp;18:07</span></span></em>
</td>
<td class="num"><a href="thread-96413-1-1.html" class="xi2">0</a><em>225</em></td>
<td class="by">
<cite><a href="space-username-%B3%A4%B5%BA%CF%D8%D2%BD%D4%BA.html" c="1">长岛县医院</a></cite>
<em><a href="forum.php?mod=redirect&tid=96413&goto=lastpost#lastpost">2018-9-19 18:07</a></em>
</td>
</tr>
</tbody>
<tbody id="stickthread_95907">
<tr>
<td class="icn">
<a href="thread-95907-1-1.html" title="分类置顶主题 - 新窗口打开" target="_blank">
<img src="picture/pin_2_1.gif" alt="分类置顶" />
</a>
</td>
<th class="common">
<a href="javascript:;" id="content_95907" class="showcontent y" title="更多操作" onclick="CONTENT_TID='95907';CONTENT_ID='stickthread_95907';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a href="javascript:void(0);" onclick="hideStickThread('95907')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('95907', 'stickthread_95907');">预览</a>
 <a href="thread-95907-1-1.html" onclick="atarget(this)" class="s xst">《重要通告》关于长岛县人民医院实名制就医通知</a>
</th>
<td class="by">
<cite>
<a href="space-uid-133343.html" c="1">长岛县医院</a></cite>
<em><span>2018-6-26</span></em>
</td>
<td class="num"><a href="thread-95907-1-1.html" class="xi2">0</a><em>1024</em></td>
<td class="by">
<cite><a href="space-username-%B3%A4%B5%BA%CF%D8%D2%BD%D4%BA.html" c="1">长岛县医院</a></cite>
<em><a href="forum.php?mod=redirect&tid=95907&goto=lastpost#lastpost">2018-6-26 07:06</a></em>
</td>
</tr>
</tbody>
<tbody id="stickthread_2736">
<tr>
<td class="icn">
<a href="thread-2736-1-1.html" title="分类置顶主题 - 新窗口打开" target="_blank">
<img src="picture/pin_2_1.gif" alt="分类置顶" />
</a>
</td>
<th class="common">
<a href="javascript:;" id="content_2736" class="showcontent y" title="更多操作" onclick="CONTENT_TID='2736';CONTENT_ID='stickthread_2736';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a href="javascript:void(0);" onclick="hideStickThread('2736')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('2736', 'stickthread_2736');">预览</a>
 <a href="thread-2736-1-1.html" style="font-weight: bold;color: #2B65B7;" onclick="atarget(this)" class="s xst">济南到长岛自驾车路书（来长岛要看）</a>
<img src="picture/common_1.gif" alt="attachment" title="附件" align="absmiddle" />
<span class="tps">&nbsp;...<a href="thread-2736-2-1.html">2</a><a href="thread-2736-3-1.html">3</a><a href="thread-2736-4-1.html">4</a><a href="thread-2736-5-1.html">5</a><a href="thread-2736-6-1.html">6</a></span>
</th>
<td class="by">
<cite>
<a href="space-uid-461.html" c="1">cdzxg</a></cite>
<em><span>2005-9-29</span></em>
</td>
<td class="num"><a href="thread-2736-1-1.html" class="xi2">41</a><em>3094222</em></td>
<td class="by">
<cite><a href="space-username-lhzxreg2016.html" c="1">lhzxreg2016</a></cite>
<em><a href="forum.php?mod=redirect&tid=2736&goto=lastpost#lastpost">2017-7-6 11:09</a></em>
</td>
</tr>
</tbody>
<tbody id="stickthread_7569">
<tr>
<td class="icn">
<a href="thread-7569-1-1.html" title="分类置顶主题 - 新窗口打开" target="_blank">
<img src="picture/pin_2_1.gif" alt="分类置顶" />
</a>
</td>
<th class="common">
<a href="javascript:;" id="content_7569" class="showcontent y" title="更多操作" onclick="CONTENT_TID='7569';CONTENT_ID='stickthread_7569';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a href="javascript:void(0);" onclick="hideStickThread('7569')" class="showhide y" title="隐藏置顶帖">隐藏置顶帖</a></em>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('7569', 'stickthread_7569');">预览</a>
 <a href="thread-7569-1-1.html" style="font-weight: bold;color: #EE1B2E;" onclick="atarget(this)" class="s xst">5月17日海滩自助烧烤</a>
<img src="picture/common_1.gif" alt="attachment" title="附件" align="absmiddle" />
<span class="tps">&nbsp;...<a href="thread-7569-2-1.html">2</a><a href="thread-7569-3-1.html">3</a><a href="thread-7569-4-1.html">4</a><a href="thread-7569-5-1.html">5</a><a href="thread-7569-6-1.html">6</a>..<a href="thread-7569-9-1.html">9</a></span>
</th>
<td class="by">
<cite>
<a href="space-uid-4854.html" c="1">长岛阿鹏</a></cite>
<em><span>2009-5-17</span></em>
</td>
<td class="num"><a href="thread-7569-1-1.html" class="xi2">69</a><em>3082136</em></td>
<td class="by">
<cite><a href="space-username-%B3%A4%BD%A3%BA%E1%BF%D5.html" c="1">长剑横空</a></cite>
<em><a href="forum.php?mod=redirect&tid=7569&goto=lastpost#lastpost">2016-6-21 15:49</a></em>
</td>
</tr>
</tbody>
<tbody id="separatorline">
<tr class="ts">
<td>&nbsp;</td>
<th><a href="javascript:;" onclick="checkForumnew_btn('9')" title="查看更新" class="forumrefresh">版块主题</a></th><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
</tr>
</tbody>
<script type="text/javascript">hideStickThread();</script>
<tbody id="normalthread_96418">
<tr>
<td class="icn">
<a href="thread-96418-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96418" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96418';CONTENT_ID='normalthread_96418';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96418', 'normalthread_96418');">预览</a>
 <a href="thread-96418-1-1.html" onclick="atarget(this)" class="s xst">长岛人啥时可以买车</a>
<img src="picture/011.small_1.gif" alt="新人帖" align="absmiddle" />
<a href="forum.php?mod=redirect&amp;tid=96418&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-172571.html" c="1">′绿茶。</a></cite>
<em><span class="xi1"><span title="2018-8-21">1&nbsp;小时前</span></span></em>
</td>
<td class="num"><a href="thread-96418-1-1.html" class="xi2">1</a><em>110</em></td>
<td class="by">
<cite><a href="space-username-%A1%E4%C2%CC%B2%E8%A1%A3.html" c="1">′绿茶。</a></cite>
<em><a href="forum.php?mod=redirect&tid=96418&goto=lastpost#lastpost"><span title="2018-8-21 15:07">1&nbsp;小时前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96338">
<tr>
<td class="icn">
<a href="thread-96338-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96338" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96338';CONTENT_ID='normalthread_96338';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96338', 'normalthread_96338');">预览</a>
 <a href="thread-96338-1-1.html" onclick="atarget(this)" class="s xst">长岛港：请您偶尔看到   我们的努力</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<span class="tps">&nbsp;...<a href="thread-96338-2-1.html">2</a><a href="thread-96338-3-1.html">3</a></span>
</th>
<td class="by">
<cite>
<a href="space-uid-129872.html" c="1">长岛港港务有限公司</a></cite>
<em><span>2018-8-11</span></em>
</td>
<td class="num"><a href="thread-96338-1-1.html" class="xi2">20</a><em>1662</em></td>
<td class="by">
<cite><a href="space-username-%A1%E4%C2%CC%B2%E8%A1%A3.html" c="1">′绿茶。</a></cite>
<em><a href="forum.php?mod=redirect&tid=96338&goto=lastpost#lastpost"><span title="2018-8-21 14:40">1&nbsp;小时前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96332">
<tr>
<td class="icn">
<a href="thread-96332-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96332" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96332';CONTENT_ID='normalthread_96332';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96332', 'normalthread_96332');">预览</a>
 <a href="thread-96332-1-1.html" onclick="atarget(this)" class="s xst">旅游部门的领导别喝茶了</a>
</th>
<td class="by">
<cite>
<a href="space-uid-4814.html" c="1">长岛小帅</a></cite>
<em><span>2018-8-10</span></em>
</td>
<td class="num"><a href="thread-96332-1-1.html" class="xi2">5</a><em>1413</em></td>
<td class="by">
<cite><a href="space-username-%B3%A4%B5%BA%D0%A1%CB%A7.html" c="1">长岛小帅</a></cite>
<em><a href="forum.php?mod=redirect&tid=96332&goto=lastpost#lastpost"><span title="2018-8-21 13:02">3&nbsp;小时前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96417">
<tr>
<td class="icn">
<a href="thread-96417-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96417" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96417';CONTENT_ID='normalthread_96417';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96417', 'normalthread_96417');">预览</a>
 <a href="thread-96417-1-1.html" onclick="atarget(this)" class="s xst">浪漫满屋墙绘培训致手绘艺术行业各位同仁的一封信</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<a href="forum.php?mod=redirect&amp;tid=96417&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-171903.html" c="1">鹰辰兵团</a></cite>
<em><span class="xi1"><span title="2018-8-21">5&nbsp;小时前</span></span></em>
</td>
<td class="num"><a href="thread-96417-1-1.html" class="xi2">0</a><em>68</em></td>
<td class="by">
<cite><a href="space-username-%D3%A5%B3%BD%B1%F8%CD%C5.html" c="1">鹰辰兵团</a></cite>
<em><a href="forum.php?mod=redirect&tid=96417&goto=lastpost#lastpost"><span title="2018-8-21 10:56">5&nbsp;小时前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96416">
<tr>
<td class="icn">
<a href="thread-96416-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96416" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96416';CONTENT_ID='normalthread_96416';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96416', 'normalthread_96416');">预览</a>
 <a href="thread-96416-1-1.html" onclick="atarget(this)" class="s xst">有关部门注意一下</a>
<img src="picture/011.small_1.gif" alt="新人帖" align="absmiddle" />
<a href="forum.php?mod=redirect&amp;tid=96416&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-172570.html" c="1">changdaowang</a></cite>
<em><span class="xi1"><span title="2018-8-21">6&nbsp;小时前</span></span></em>
</td>
<td class="num"><a href="thread-96416-1-1.html" class="xi2">0</a><em>185</em></td>
<td class="by">
<cite><a href="space-username-changdaowang.html" c="1">changdaowang</a></cite>
<em><a href="forum.php?mod=redirect&tid=96416&goto=lastpost#lastpost"><span title="2018-8-21 10:01">6&nbsp;小时前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96407">
<tr>
<td class="icn">
<a href="thread-96407-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96407" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96407';CONTENT_ID='normalthread_96407';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96407', 'normalthread_96407');">预览</a>
 <a href="thread-96407-1-1.html" onclick="atarget(this)" class="s xst">长山路设计院段路灯长时间不亮</a>
<a href="forum.php?mod=redirect&amp;tid=96407&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-30590.html" c="1">枫叶王子</a></cite>
<em><span><span title="2018-8-19">前天&nbsp;20:06</span></span></em>
</td>
<td class="num"><a href="thread-96407-1-1.html" class="xi2">2</a><em>348</em></td>
<td class="by">
<cite><a href="space-username-%B7%E3%D2%B6%CD%F5%D7%D3.html" c="1">枫叶王子</a></cite>
<em><a href="forum.php?mod=redirect&tid=96407&goto=lastpost#lastpost"><span title="2018-8-20 20:41">昨天&nbsp;20:41</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96380">
<tr>
<td class="icn">
<a href="thread-96380-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96380" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96380';CONTENT_ID='normalthread_96380';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96380', 'normalthread_96380');">预览</a>
 <a href="thread-96380-1-1.html" onclick="atarget(this)" class="s xst">停车场，请有关部分来解释一下！</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<a href="forum.php?mod=redirect&amp;tid=96380&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-20248.html" c="1">砣矶小吴</a></cite>
<em><span><span title="2018-8-16">5&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96380-1-1.html" class="xi2">3</a><em>849</em></td>
<td class="by">
<cite><a href="space-username-%ED%C8%ED%B6%D0%A1%CE%E2.html" c="1">砣矶小吴</a></cite>
<em><a href="forum.php?mod=redirect&tid=96380&goto=lastpost#lastpost"><span title="2018-8-20 16:09">昨天&nbsp;16:09</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96411">
<tr>
<td class="icn">
<a href="thread-96411-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96411" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96411';CONTENT_ID='normalthread_96411';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96411', 'normalthread_96411');">预览</a>
 <a href="thread-96411-1-1.html" onclick="atarget(this)" class="s xst">此处停车场不仅收费而且私自上锁关闭。</a>
<a href="forum.php?mod=redirect&amp;tid=96411&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-172452.html" c="1">相关知识</a></cite>
<em><span><span title="2018-8-20">昨天&nbsp;15:46</span></span></em>
</td>
<td class="num"><a href="thread-96411-1-1.html" class="xi2">0</a><em>318</em></td>
<td class="by">
<cite><a href="space-username-%CF%E0%B9%D8%D6%AA%CA%B6.html" c="1">相关知识</a></cite>
<em><a href="forum.php?mod=redirect&tid=96411&goto=lastpost#lastpost"><span title="2018-8-20 15:46">昨天&nbsp;15:46</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96399">
<tr>
<td class="icn">
<a href="thread-96399-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96399" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96399';CONTENT_ID='normalthread_96399';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96399', 'normalthread_96399');">预览</a>
 <a href="thread-96399-1-1.html" onclick="atarget(this)" class="s xst">手拉手“新公益”，常丰石油公司建立“环卫工人休息站”</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<a href="forum.php?mod=redirect&amp;tid=96399&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-108739.html" c="1">长岛手拉手义工</a></cite>
<em><span><span title="2018-8-17">4&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96399-1-1.html" class="xi2">5</a><em>468</em></td>
<td class="by">
<cite><a href="space-username-%B3%A4%B5%BA%D0%A1%C0%A4%D3%E6%BC%D2.html" c="1">长岛小坤渔家</a></cite>
<em><a href="forum.php?mod=redirect&tid=96399&goto=lastpost#lastpost"><span title="2018-8-20 15:00">昨天&nbsp;15:00</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96410">
<tr>
<td class="icn">
<a href="thread-96410-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96410" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96410';CONTENT_ID='normalthread_96410';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96410', 'normalthread_96410');">预览</a>
 <a href="thread-96410-1-1.html" onclick="atarget(this)" class="s xst">台风温比亚来咯</a>
<img src="picture/011.small_1.gif" alt="新人帖" align="absmiddle" />
<a href="forum.php?mod=redirect&amp;tid=96410&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-172569.html" c="1">Nick_ABFW</a></cite>
<em><span><span title="2018-8-20">昨天&nbsp;14:03</span></span></em>
</td>
<td class="num"><a href="thread-96410-1-1.html" class="xi2">0</a><em>250</em></td>
<td class="by">
<cite><a href="space-username-Nick_ABFW.html" c="1">Nick_ABFW</a></cite>
<em><a href="forum.php?mod=redirect&tid=96410&goto=lastpost#lastpost"><span title="2018-8-20 14:03">昨天&nbsp;14:03</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96404">
<tr>
<td class="icn">
<a href="thread-96404-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96404" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96404';CONTENT_ID='normalthread_96404';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96404', 'normalthread_96404');">预览</a>
 <a href="thread-96404-1-1.html" onclick="atarget(this)" class="s xst">长岛的路</a>
<a href="forum.php?mod=redirect&amp;tid=96404&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-4814.html" c="1">长岛小帅</a></cite>
<em><span><span title="2018-8-19">前天&nbsp;12:30</span></span></em>
</td>
<td class="num"><a href="thread-96404-1-1.html" class="xi2">5</a><em>633</em></td>
<td class="by">
<cite><a href="space-username-%B0%D9%CF%FE%C9%FA.html" c="1">百晓生</a></cite>
<em><a href="forum.php?mod=redirect&tid=96404&goto=lastpost#lastpost"><span title="2018-8-20 10:16">昨天&nbsp;10:16</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96379">
<tr>
<td class="icn">
<a href="thread-96379-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96379" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96379';CONTENT_ID='normalthread_96379';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96379', 'normalthread_96379');">预览</a>
 <a href="thread-96379-1-1.html" onclick="atarget(this)" class="s xst">请教交警叔叔</a>
<span class="tps">&nbsp;...<a href="thread-96379-2-1.html">2</a></span>
<a href="forum.php?mod=redirect&amp;tid=96379&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-171432.html" c="1">中国长山</a></cite>
<em><span><span title="2018-8-16">5&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96379-1-1.html" class="xi2">8</a><em>975</em></td>
<td class="by">
<cite><a href="space-username-%D6%D0%B9%FA%B3%A4%C9%BD.html" c="1">中国长山</a></cite>
<em><a href="forum.php?mod=redirect&tid=96379&goto=lastpost#lastpost"><span title="2018-8-20 10:02">昨天&nbsp;10:02</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96401">
<tr>
<td class="icn">
<a href="thread-96401-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96401" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96401';CONTENT_ID='normalthread_96401';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96401', 'normalthread_96401');">预览</a>
 <a href="thread-96401-1-1.html" onclick="atarget(this)" class="s xst">蓬莱满员，长岛港不靠？ 居住在岛内的人民真辛苦</a>
<a href="forum.php?mod=redirect&amp;tid=96401&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-171653.html" c="1">海边姑娘123</a></cite>
<em><span><span title="2018-8-18">3&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96401-1-1.html" class="xi2">5</a><em>675</em></td>
<td class="by">
<cite><a href="space-username-zl602447050.html" c="1">zl602447050</a></cite>
<em><a href="forum.php?mod=redirect&tid=96401&goto=lastpost#lastpost"><span title="2018-8-19 09:16">前天&nbsp;09:16</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96376">
<tr>
<td class="icn">
<a href="thread-96376-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96376" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96376';CONTENT_ID='normalthread_96376';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96376', 'normalthread_96376');">预览</a>
 <a href="thread-96376-1-1.html" onclick="atarget(this)" class="s xst">问市政有关部门</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<a href="forum.php?mod=redirect&amp;tid=96376&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-121033.html" c="1">自游海</a></cite>
<em><span><span title="2018-8-16">5&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96376-1-1.html" class="xi2">2</a><em>710</em></td>
<td class="by">
<cite><a href="space-username-%D7%D4%D3%CE%BA%A3.html" c="1">自游海</a></cite>
<em><a href="forum.php?mod=redirect&tid=96376&goto=lastpost#lastpost"><span title="2018-8-18 06:57">3&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96388">
<tr>
<td class="icn">
<a href="thread-96388-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96388" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96388';CONTENT_ID='normalthread_96388';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96388', 'normalthread_96388');">预览</a>
 <a href="thread-96388-1-1.html" onclick="atarget(this)" class="s xst">供水公司</a>
<a href="forum.php?mod=redirect&amp;tid=96388&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-121033.html" c="1">自游海</a></cite>
<em><span><span title="2018-8-17">4&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96388-1-1.html" class="xi2">0</a><em>364</em></td>
<td class="by">
<cite><a href="space-username-%D7%D4%D3%CE%BA%A3.html" c="1">自游海</a></cite>
<em><a href="forum.php?mod=redirect&tid=96388&goto=lastpost#lastpost"><span title="2018-8-17 11:49">4&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96378">
<tr>
<td class="icn">
<a href="thread-96378-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96378" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96378';CONTENT_ID='normalthread_96378';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96378', 'normalthread_96378');">预览</a>
 <a href="thread-96378-1-1.html" onclick="atarget(this)" class="s xst">和航兴龙恢复正常</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
<a href="forum.php?mod=redirect&amp;tid=96378&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-32928.html" c="1">tvl</a></cite>
<em><span><span title="2018-8-16">5&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96378-1-1.html" class="xi2">5</a><em>1012</em></td>
<td class="by">
<cite><a href="space-username-%D7%D4%D3%CE%BA%A3.html" c="1">自游海</a></cite>
<em><a href="forum.php?mod=redirect&tid=96378&goto=lastpost#lastpost"><span title="2018-8-16 12:05">5&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96373">
<tr>
<td class="icn">
<a href="thread-96373-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96373" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96373';CONTENT_ID='normalthread_96373';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96373', 'normalthread_96373');">预览</a>
 <a href="thread-96373-1-1.html" onclick="atarget(this)" class="s xst">吉房出租</a>
<img src="picture/011.small_1.gif" alt="新人帖" align="absmiddle" />
<a href="forum.php?mod=redirect&amp;tid=96373&amp;goto=lastpost#lastpost" class="xi1">New</a>
</th>
<td class="by">
<cite>
<a href="space-uid-172560.html" c="1">xinsilu</a></cite>
<em><span><span title="2018-8-15">6&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96373-1-1.html" class="xi2">0</a><em>359</em></td>
<td class="by">
<cite><a href="space-username-xinsilu.html" c="1">xinsilu</a></cite>
<em><a href="forum.php?mod=redirect&tid=96373&goto=lastpost#lastpost"><span title="2018-8-15 15:47">6&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96356">
<tr>
<td class="icn">
<a href="thread-96356-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96356" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96356';CONTENT_ID='normalthread_96356';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96356', 'normalthread_96356');">预览</a>
 <a href="thread-96356-1-1.html" onclick="atarget(this)" class="s xst">南城小区购房</a>
<img src="picture/011.small_1.gif" alt="新人帖" align="absmiddle" />
</th>
<td class="by">
<cite>
<a href="space-uid-172542.html" c="1">鱼丸粗面_LDXF</a></cite>
<em><span>2018-8-13</span></em>
</td>
<td class="num"><a href="thread-96356-1-1.html" class="xi2">1</a><em>714</em></td>
<td class="by">
<cite><a href="space-username-%D3%E3%CD%E8%B4%D6%C3%E6_LDXF.html" c="1">鱼丸粗面_LDXF</a></cite>
<em><a href="forum.php?mod=redirect&tid=96356&goto=lastpost#lastpost"><span title="2018-8-14 16:51">7&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96366">
<tr>
<td class="icn">
<a href="thread-96366-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96366" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96366';CONTENT_ID='normalthread_96366';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96366', 'normalthread_96366');">预览</a>
 <a href="thread-96366-1-1.html" onclick="atarget(this)" class="s xst">二问圆通快递你敢不敢再慢点？</a>
</th>
<td class="by">
<cite>
<a href="space-uid-265.html" c="1">appleknife</a></cite>
<em><span><span title="2018-8-14">7&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96366-1-1.html" class="xi2">0</a><em>640</em></td>
<td class="by">
<cite><a href="space-username-appleknife.html" c="1">appleknife</a></cite>
<em><a href="forum.php?mod=redirect&tid=96366&goto=lastpost#lastpost"><span title="2018-8-14 16:08">7&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96364">
<tr>
<td class="icn">
<a href="thread-96364-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96364" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96364';CONTENT_ID='normalthread_96364';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96364', 'normalthread_96364');">预览</a>
 <a href="thread-96364-1-1.html" onclick="atarget(this)" class="s xst">圆通快递请你快点行吗</a>
</th>
<td class="by">
<cite>
<a href="space-uid-163957.html" c="1">浪漫骑士</a></cite>
<em><span><span title="2018-8-14">7&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96364-1-1.html" class="xi2">1</a><em>378</em></td>
<td class="by">
<cite><a href="space-username-%F6%C1%DC%B2%BE%D3-%BA%AE%E9%E4%C8%F4%D1%A9.html" c="1">隽懿居-寒殇若雪</a></cite>
<em><a href="forum.php?mod=redirect&tid=96364&goto=lastpost#lastpost"><span title="2018-8-14 11:09">7&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96346">
<tr>
<td class="icn">
<a href="thread-96346-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96346" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96346';CONTENT_ID='normalthread_96346';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96346', 'normalthread_96346');">预览</a>
 <a href="thread-96346-1-1.html" onclick="atarget(this)" class="s xst">二问圆通快递你敢不敢再慢点？</a>
</th>
<td class="by">
<cite>
<a href="space-uid-154388.html" c="1">老冀_SRVB</a></cite>
<em><span>2018-8-11</span></em>
</td>
<td class="num"><a href="thread-96346-1-1.html" class="xi2">4</a><em>858</em></td>
<td class="by">
<cite><a href="space-username-%C0%CB%C2%FE%C6%EF%CA%BF.html" c="1">浪漫骑士</a></cite>
<em><a href="forum.php?mod=redirect&tid=96346&goto=lastpost#lastpost"><span title="2018-8-14 10:55">7&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96354">
<tr>
<td class="icn">
<a href="thread-96354-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96354" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96354';CONTENT_ID='normalthread_96354';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96354', 'normalthread_96354');">预览</a>
 <a href="thread-96354-1-1.html" onclick="atarget(this)" class="s xst">长岛市政管理处看一看</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
</th>
<td class="by">
<cite>
<a href="space-uid-159564.html" c="1">微笑，向前行</a></cite>
<em><span>2018-8-12</span></em>
</td>
<td class="num"><a href="thread-96354-1-1.html" class="xi2">5</a><em>1018</em></td>
<td class="by">
<cite><a href="space-username-%CA%D0%D5%FE%B4%A6.html" c="1">市政处</a></cite>
<em><a href="forum.php?mod=redirect&tid=96354&goto=lastpost#lastpost"><span title="2018-8-14 09:54">7&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96357">
<tr>
<td class="icn">
<a href="thread-96357-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96357" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96357';CONTENT_ID='normalthread_96357';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96357', 'normalthread_96357');">预览</a>
 <a href="thread-96357-1-1.html" onclick="atarget(this)" class="s xst">请教一下</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
</th>
<td class="by">
<cite>
<a href="space-uid-121033.html" c="1">自游海</a></cite>
<em><span>2018-8-13</span></em>
</td>
<td class="num"><a href="thread-96357-1-1.html" class="xi2">1</a><em>530</em></td>
<td class="by">
<cite><a href="space-username-%D7%EE%C3%C0%BA%A3%B5%BA..html" c="1">最美海岛.</a></cite>
<em><a href="forum.php?mod=redirect&tid=96357&goto=lastpost#lastpost"><span title="2018-8-14 09:05">7&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96363">
<tr>
<td class="icn">
<a href="thread-96363-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96363" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96363';CONTENT_ID='normalthread_96363';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96363', 'normalthread_96363');">预览</a>
 <a href="thread-96363-1-1.html" onclick="atarget(this)" class="s xst">对“大蒜防蚊论”辟谣,怎样防蚊更有效？</a>
</th>
<td class="by">
<cite>
<a href="space-uid-120584.html" c="1">最美海岛.</a></cite>
<em><span><span title="2018-8-14">7&nbsp;天前</span></span></em>
</td>
<td class="num"><a href="thread-96363-1-1.html" class="xi2">0</a><em>231</em></td>
<td class="by">
<cite><a href="space-username-%D7%EE%C3%C0%BA%A3%B5%BA..html" c="1">最美海岛.</a></cite>
<em><a href="forum.php?mod=redirect&tid=96363&goto=lastpost#lastpost"><span title="2018-8-14 08:50">7&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96185">
<tr>
<td class="icn">
<a href="thread-96185-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96185" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96185';CONTENT_ID='normalthread_96185';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96185', 'normalthread_96185');">预览</a>
 <a href="thread-96185-1-1.html" onclick="atarget(this)" class="s xst">走狗屎运可能说的就是我，又要刷鞋了！</a>
</th>
<td class="by">
<cite>
<a href="space-uid-19186.html" c="1">3369654</a></cite>
<em><span>2018-7-23</span></em>
</td>
<td class="num"><a href="thread-96185-1-1.html" class="xi2">8</a><em>1309</em></td>
<td class="by">
<cite><a href="space-username-%BE%CD%B2%BB%B8%E6%CB%DF%C4%E3.html" c="1">就不告诉你</a></cite>
<em><a href="forum.php?mod=redirect&tid=96185&goto=lastpost#lastpost"><span title="2018-8-14 07:54">7&nbsp;天前</span></a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96340">
<tr>
<td class="icn">
<a href="thread-96340-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96340" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96340';CONTENT_ID='normalthread_96340';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96340', 'normalthread_96340');">预览</a>
 <a href="thread-96340-1-1.html" onclick="atarget(this)" class="s xst">电动车坏了，急修，</a>
</th>
<td class="by">
<cite>
<a href="space-uid-172349.html" c="1">18354522948</a></cite>
<em><span>2018-8-11</span></em>
</td>
<td class="num"><a href="thread-96340-1-1.html" class="xi2">3</a><em>579</em></td>
<td class="by">
<cite><a href="space-username-%B0%AE%B3%D4%BA%DA%D3%E3.html" c="1">爱吃黑鱼</a></cite>
<em><a href="forum.php?mod=redirect&tid=96340&goto=lastpost#lastpost">2018-8-13 14:40</a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96238">
<tr>
<td class="icn">
<a href="thread-96238-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96238" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96238';CONTENT_ID='normalthread_96238';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96238', 'normalthread_96238');">预览</a>
 <a href="thread-96238-1-1.html" onclick="atarget(this)" class="s xst">金鼎楼底下的江南灌汤包宰人</a>
<img src="picture/011.small_1.gif" alt="新人帖" align="absmiddle" />
<span class="tps">&nbsp;...<a href="thread-96238-2-1.html">2</a></span>
</th>
<td class="by">
<cite>
<a href="space-uid-172457.html" c="1">平安长岛</a></cite>
<em><span>2018-7-30</span></em>
</td>
<td class="num"><a href="thread-96238-1-1.html" class="xi2">11</a><em>1669</em></td>
<td class="by">
<cite><a href="space-username-%D7%CF%C9%AB%B5%C4%BC%BE%BD%DA.html" c="1">紫色的季节</a></cite>
<em><a href="forum.php?mod=redirect&tid=96238&goto=lastpost#lastpost">2018-8-13 14:24</a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96353">
<tr>
<td class="icn">
<a href="thread-96353-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96353" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96353';CONTENT_ID='normalthread_96353';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96353', 'normalthread_96353');">预览</a>
 <a href="thread-96353-1-1.html" onclick="atarget(this)" class="s xst">齐鲁台更应该曝光他们的服务态度</a>
<img src="picture/011.small_1.gif" alt="新人帖" align="absmiddle" />
</th>
<td class="by">
<cite>
<a href="space-uid-172539.html" c="1">A招贤居、小七</a></cite>
<em><span>2018-8-12</span></em>
</td>
<td class="num"><a href="thread-96353-1-1.html" class="xi2">2</a><em>817</em></td>
<td class="by">
<cite><a href="space-username-changdaoqe.html" c="1">changdaoqe</a></cite>
<em><a href="forum.php?mod=redirect&tid=96353&goto=lastpost#lastpost">2018-8-13 09:18</a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96355">
<tr>
<td class="icn">
<a href="thread-96355-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96355" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96355';CONTENT_ID='normalthread_96355';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96355', 'normalthread_96355');">预览</a>
 <a href="thread-96355-1-1.html" onclick="atarget(this)" class="s xst">山上的松树，大片的成枯黄状态，谁来管一管</a>
</th>
<td class="by">
<cite>
<a href="space-uid-143194.html" c="1">changdaoqe</a></cite>
<em><span>2018-8-13</span></em>
</td>
<td class="num"><a href="thread-96355-1-1.html" class="xi2">0</a><em>515</em></td>
<td class="by">
<cite><a href="space-username-changdaoqe.html" c="1">changdaoqe</a></cite>
<em><a href="forum.php?mod=redirect&tid=96355&goto=lastpost#lastpost">2018-8-13 08:39</a></em>
</td>
</tr>
</tbody>
<tbody id="normalthread_96258">
<tr>
<td class="icn">
<a href="thread-96258-1-1.html" title="有新回复 - 新窗口打开" target="_blank">
<img src="picture/folder_new_1.gif" />
</a>
</td>
<th class="new">
<a href="javascript:;" id="content_96258" class="showcontent y" title="更多操作" onclick="CONTENT_TID='96258';CONTENT_ID='normalthread_96258';showMenu({'ctrlid':this.id,'menuid':'content_menu'})"></a>
<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('96258', 'normalthread_96258');">预览</a>
 <a href="thread-96258-1-1.html" onclick="atarget(this)" class="s xst">二校西公路维修绕道提示牌</a>
<img src="picture/image_s_1.gif" alt="attach_img" title="图片附件" align="absmiddle" />
</th>
<td class="by">
<cite>
<a href="space-uid-4086.html" c="1">海蓝</a></cite>
<em><span>2018-8-1</span></em>
</td>
<td class="num"><a href="thread-96258-1-1.html" class="xi2">3</a><em>919</em></td>
<td class="by">
<cite><a href="space-username-%BA%A3%C1%FA%CD%F5.html" c="1">海龙王</a></cite>
<em><a href="forum.php?mod=redirect&tid=96258&goto=lastpost#lastpost">2018-8-12 22:21</a></em>
</td>
</tr>
</tbody>
</table><!-- end of table "forum_G[fid]" branch 1/3 -->
</form>
</div>
</div>

<div id="filter_special_menu" class="p_pop" style="display:none" change="location.href='forum.php?mod=forumdisplay&fid=9&filter='+$('filter_special').value">
<ul>
<li><a href="forum-9-1.html">全部主题</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=specialtype&amp;specialtype=poll">投票</a></li><li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=specialtype&amp;specialtype=trade">商品</a></li><li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=specialtype&amp;specialtype=reward">悬赏</a></li><li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=specialtype&amp;specialtype=activity">活动</a></li><li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=specialtype&amp;specialtype=debate">辩论</a></li></ul>
</div>
<div id="filter_reward_menu" class="p_pop" style="display:none" change="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=specialtype&amp;specialtype=reward&amp;rewardtype='+$('filter_reward').value">
<ul>
<li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=specialtype&amp;specialtype=reward">全部悬赏</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=specialtype&amp;specialtype=reward&amp;rewardtype=1">进行中</a></li><li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=specialtype&amp;specialtype=reward&amp;rewardtype=2">已解决</a></li></ul>
</div>
<div id="filter_dateline_menu" class="p_pop" style="display:none">
<ul class="pop_moremenu">
<li>排序: 
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=author&amp;orderby=dateline" >发帖时间</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=reply&amp;orderby=replies" >回复/查看</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=reply&amp;orderby=views" >查看</a>
</li>
<li>时间: 
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;orderby=lastpost&amp;filter=dateline" class="xw1">全部时间</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=86400" >一天</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=172800" >两天</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=604800" >一周</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=2592000" >一个月</a><span class="pipe">|</span>
<a href="forum.php?mod=forumdisplay&amp;fid=9&amp;orderby=lastpost&amp;filter=dateline&amp;dateline=7948800" >三个月</a>
</li>
</ul>
</div>
<div id="filter_orderby_menu" class="p_pop" style="display:none">
<ul>
<li><a href="forum-9-1.html">默认排序</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=author&amp;orderby=dateline">发帖时间</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=reply&amp;orderby=replies">回复/查看</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=reply&amp;orderby=views">查看</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=lastpost&amp;orderby=lastpost">最后发表</a></li>
<li><a href="forum.php?mod=forumdisplay&amp;fid=9&amp;filter=heat&amp;orderby=heats">热门</a></li>
</ul>
</div>
<a class="bm_h" href="javascript:;" rel="forum.php?mod=forumdisplay&fid=9&page=2" curpage="1" id="autopbn" totalpage="913" picstyle="0" forumdefstyle="">下一页 &raquo;</a>
<script src="js/autoloadpage_1.js" type="text/javascript"></script>
<div class="bm bw0 pgs cl">
<span id="fd_page_bottom"><div class="pg"><strong>1</strong><a href="forum-9-2.html">2</a><a href="forum-9-3.html">3</a><a href="forum-9-4.html">4</a><a href="forum-9-5.html">5</a><a href="forum-9-6.html">6</a><a href="forum-9-7.html">7</a><a href="forum-9-8.html">8</a><a href="forum-9-9.html">9</a><a href="forum-9-10.html">10</a><a href="forum-9-913.html" class="last">... 913</a><label><input type="text" name="custompage" class="px" size="2" title="输入页码，按回车快速跳转" value="1" onkeydown="if(event.keyCode==13) {window.location='forum.php?mod=forumdisplay&fid=9&amp;page='+this.value;; doane(event);}" /><span title="共 913 页"> / 913 页</span></label><a href="forum-9-2.html" class="nxt">下一页</a></div></span>
<span  class="pgb y"><a href="forum.php">返&nbsp;回</a></span>
<a href="javascript:;" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})" onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=9')" title="发新帖"><img src="picture/pn_post_1.png" alt="发新帖" /></a></div>
<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
<script type="text/javascript">
var postminchars = parseInt('10');
var postmaxchars = parseInt('4000000');
var disablepostctrl = parseInt('0');
var fid = parseInt('9');
</script>
<div id="f_pst" class="bm">
<div class="bm_h">
<h2>快速发帖</h2>
</div>
<div class="bm_c">
<form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=newthread&amp;fid=9&amp;topicsubmit=yes&amp;infloat=yes&amp;handlekey=fastnewpost" onSubmit="return fastpostvalidate(this)">

<div id="fastpostreturn" style="margin:-5px 0 5px"></div>

<div class="pbt cl">
<input type="text" id="subject" name="subject" class="px" value="" onkeyup="strLenCalc(this, 'checklen', 80);" tabindex="11" style="width: 25em" />
<span>还可输入 <strong id="checklen">80</strong> 个字符</span>
</div>



@endsection