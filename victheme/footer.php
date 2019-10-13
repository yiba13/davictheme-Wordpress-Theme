    <footer class="vc-footer">
        <div class="vc-footer-info">
            <ul class="vc-footer-menu">
		<li><a class="vc-a" target="_blank" href="https://zy.ccnu509.cn/wp-content/uploads/2019/04/%E5%85%AC%E4%BC%97%E5%8F%B7.jpg"><i class="fa fa-weixin"></i><a>
                </li>
                <li><a class="vc-a" target="_blank" href="<?php echo get_option('vc-weibo'); ?>"><i class="fa fa-weibo"></i></a>
                </li>
                <li><a class="vc-a" target="_blank" href="<?php echo get_option('vc-github'); ?>"><i class="fa fa-github"></i></a>
                </li>
            </ul>
        </div>
        <div class="vc-footer-copyright">
            <div> Copyright &copy; <?php echo date('Y'); ?> <a class="vc-a" href="https://zy.ccnu509.cn/">小市民的小站</a>
            </div>
            Powered by <a class="vc-a" href="https://cn.wordpress.org/">WordPress</a> & <a class="vc-a" href="https://www.aliyun.com/">阿里云</a> Theme <a class="vc-a" href="http://vicchen.me">Vic Theme</a>
					<br>
					<!--<?php
						$counterFile = "counter.txt";$fp = fopen($counterFile,"a+");$num = fgets($fp,5);$num += 1;
						print "恭喜您是本站第 "."$num"." 位访客";fclose($fp);
						$fpp=fopen($counterFile,"w");fwrite($fpp, $num);fclose($fpp);
					?>
					--><!-- 此处为访客统计功能 -->
					<span id="sitetime"></span> <!--显示建站时间的地方放置此代码 可以加上其他代HTML代码加粗颜色等-->
					<script language=javascript>
						function siteTime(){
							window.setTimeout("siteTime()", 1000);
							var seconds = 1000;
							var minutes = seconds * 60;
							var hours = minutes * 60;
							var days = hours * 24;
							var years = days * 365;
							var today = new Date();
							var todayYear = today.getFullYear();
							var todayMonth = today.getMonth()+1;
							var todayDate = today.getDate();
							var todayHour = today.getHours();
							var todayMinute = today.getMinutes();
							var todaySecond = today.getSeconds();
							var t1 = Date.UTC(2019,02,09,18,19,38);  //此处填写建站时间 依次为 年,月,日,时,分,秒注意格式 半角,
							var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond);
							var diff = t2-t1;
							var diffYears = Math.floor(diff/years);
							var diffDays = Math.floor((diff/days)-diffYears*365);
							var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours);
							var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes);
							var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds);
							document.getElementById("sitetime").innerHTML="本站已经运行了"+diffYears+" 年 "+diffDays+" 天 "+diffHours+" 小时 "+diffMinutes+" 分钟 "+diffSeconds+" 秒";
						}
					siteTime();
				</script>
	    </div>
        <div class="backtop" title="返回顶部" ></div>
    </footer>
    <script src="https://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
    <script src="https://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/base.js"></script>
    <?php wp_footer(); ?>
