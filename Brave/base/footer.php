</div>
<div class="p-5 text-center ">
	<h6>©<?php $this->options->title() ?></h6>  
	<!-- <p class="h6"> Powered by <a href="http://typecho.org" target="_blank">Typecho</a> ※ Theme is <a href="https://blog.zwying.com" target="_blank">Brave</a></p> -->
    <h6 class="lover-card-title">你惊艳了我的时光，也温柔了我的岁月</h6>

</div>
<script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.pjax/2.0.1/jquery.pjax.min.js" type="application/javascript"></script>
<script src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/nprogress/0.2.0/nprogress.min.js" type="application/javascript"></script>
<!-- 花瓣飘落 -->
<script src="https://cdn.qqsuu.cn/api/js/hua.js"></script>
<!-- 花瓣飘落 -->

<!--鼠标点击特效-->
<script type="text/javascript">
jQuery(function () {
        $("html").click(function(e) {
            var a_idx = Math.floor((Math.random() * 30));/*鼠标点击随机出现一句话，代码数字请与添加的短句数量相一致*/
            var a = new Array(
                "希望全世界停电 我可以偷偷跑去亲你", "我会爱你很久很久","我在贩卖日落 你像神明一样将阳光撒向我","陪伴本身就是这个世界上最了不起的安慰方式", "嘿，我是一朵云ლ(⁰⊖⁰ლ)", "❤"
                   ,"陪你把岁月熬成清酒 陪你把孤夜熬成温柔","❤","月光下邂逅的是爱情和你","祝眉目舒展 顺问冬按","只想拥你入怀","这个世界乱糟糟的 而你干干净净","日月星辰之外 你是第四种难得","我会在每个有意义的时刻 远隔山海与你共存","山脚下遇见的你 我们山顶见","想试试在你迎面跑来一把抱住你的感觉","在生命里的旅程里 遇见你真好","如果不曾遇见 岂知生命如何","❤"
                   ,"想和你一起走过下雪后的天","在我贫瘠的土地上你是最后的玫瑰","今晚月色很美呢","r=a(1-sinθ)","天青色等烟雨 而我在等你","你是我这一生等了半世未拆的礼物","你养我 我养你 两人爱情甜蜜蜜","人的一生会遇见两个人 一个惊艳了时光 一个温柔了岁月","你不用多好，我喜欢就好","愿有岁月可回首 且以深情共白头"
                 );/*请在此添加句子*/
            var color1 = Math.floor((Math.random() * 255))
            var color2 = Math.floor((Math.random() * 255));
            var color3 = Math.floor((Math.random() * 255));

            var $i = $("<span />").text(a[a_idx]);
            var x = e.pageX,
                y = e.pageY;
            $i.css({
                "z-index": 9999999999999 ,
                "top": y - 20,
                "left": x,
                "position": "absolute",
                "font-family":"mmm",
                "fontSize":Math.floor((Math.random() * 5)+10),/*文字大小在10px到15px之间*/
                "font-weight": "bold",
                "color": "rgb("+color1+","+color2+","+color3+")",/*随机颜色*/
                "-webkit-user-select":"none",
                "-moz-user-select":"none",
                "-ms-user-select":"none",
                "user-select":"none",
            });
            $("body").append($i);
            $i.animate({
                    "top": y - 200,
                    "opacity": 0
                },
                3000,/*句子悬浮时间*/
                function() {
                    $i.remove();
                });
        });
    });
</script>
<!-- 鼠标点击特效 -->

<!-- 鼠标悬停旋转放大 -->
<style>
.avatar{border-radius: 50%; animation: light 4s ease-in-out infinite; transition: 0.5s;}.avatar:hover{transform: scale(1.15) rotate(360deg);}
</style>

<script>
	window.showSiteRuntime = function() {
        var site_runtime = $("#site_runtime");
		if (!site_runtime) return;
		window.setTimeout("showSiteRuntime()", 1000);
		start = new Date("<?php $this->options->lovetime(); ?>");
		now = new Date();
		T = (now.getTime() - start.getTime());
		i = 24 * 60 * 60 * 1000;
		d = T / i;
		D = Math.floor(d);
		h = (d - D) * 24;
		H = Math.floor(h);
		m = (h - H) * 60;
		M = Math.floor(m);
		s = (m - M) * 60
		S = Math.floor(s);
		site_runtime.html("第 <span class=\"bigfontNum\">" + D + "</span> 天 <span class=\"bigfontNum\">" + H + "</span> 小时 <span class=\"bigfontNum\">" + M + "</span> 分钟 <span class=\"bigfontNum\">" + S + "</span> 秒");
	};
	showSiteRuntime();

    $(document).pjax('a', '#pjax-container', {
        fragment: '#pjax-container',
        timeout: 6000
    });
    $(document).on('pjax:send', function() {
        NProgress.start();
    });
    $(document).on('pjax:complete', function() {
        <?php $this->options->pjax回调(); ?>
        NProgress.done();
    });
</script>
<script src="<?php $this->options->themeUrl('/base/main.js'); ?>"></script>
<?php $this->footer(); ?>
<?php $this->options->底部自定义(); ?>

<!-- 鱼跃 -->
<div id="j-fish-skip" style=" position: relative;height: 153px;width: auto;"></div>
<script type="text/javascript" src="/usr/themes/Brave/js/fish.min.js"></script></div>
<!-- 鱼跃 -->

<!--  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.css">
<script src="https://cdn.jsdelivr.net/npm/aplayer/dist/APlayer.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/meting@2/dist/Meting.min.js"></script>
<meting-js
 server="netease"/*插入网易云*/
 type="song"/*c插入歌单*/
 id="1974443814"/*插入歌单id*/
 fixed="ture"/*启用吸底模式*/
 autoplay="true"/*自动播放，仅适用于手机浏览器，经测试PC端和微信打开自动播放均会被禁止*/
 loop="all"/*循环播放*/
 >
<!--  -->

</body>

</html>