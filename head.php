<?php
    echo'
        <style>
            .baobao-login-head
            {
                height:50px;
                width:100%;
                background-color:'.$colors['95'].';
                line-height:50px;
                z-index:10;
            }
            .baobao-login-head .baobao-span
            {
                color:'.$colors['96'].';
                font-weight:bold;
                user-select:none;
            }
            
        </style>
        <nav class="baobao-login-head">
    		<a>
    			<div style="float:left;text-indent:20px;">
    					<span class="baobao-span iconfont icon-Daytimemode"></span>
    			</div>
    			<div style="float:left;">
    					<span class="baobao-span" style="font-size:15px;">影小薯博客系统</span>
    			</div>
    		</a>
    		<a href="./">
    		    <div style="float:right;margin-right:10px;">
    				<span class="baobao-span" style="font-size:15px;">首页</span>
    			</div>
    		</a>
    	</nav>
    ';
?>