<?php 
$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_AP = ($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_AP=='on') ? true : false; 
?>
<style>
.center_content<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	position:absolute;
	overflow:visible;
	top:50%;
	left:50%;
	width:100%;
	transform:translateY(-50%) translateX(-50%);
	-webkit-transform:translateY(-50%) translateX(-50%);
	-ms-transform:translateY(-50%) translateX(-50%);
	-moz-transform:translateY(-50%) translateX(-50%);
	-o-transform:translateY(-50%) translateX(-50%);
}
#RW_Load_VSVT_Navigation<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	position:relative;
	margin:20px auto !important;
	background-color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_BgC); ?> !important;
	z-index:2;
	width:750px;
	height:375px;
	max-width:100% !important;
}
<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_S == "small") { ?>
	.RW_Loader_Frame_Navigation<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width:45px !important; height:45px !important; }
	.loader_Navigation1<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
	{
		border-top: 3px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T1_C); ?> !important;
		border-bottom: 3px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T1_C); ?> !important;
	}
	.loader_Navigation2<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
	{
		border-top: 3px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T2_C); ?> !important;
		border-bottom: 3px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T2_C); ?> !important;
	}
	.loader_Navigation3<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
	{
		border-top:12px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T3_C); ?> !important;
		border-bottom:12px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T3_C); ?> !important;
		border-right:12px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T3_C); ?> !important;
		width:50% !important;
		height:50% !important;
	}
<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_S == "middle") { ?>
	.RW_Loader_Frame_Navigation<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width:60px !important; height:60px !important; }
	.loader_Navigation1<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
	{
		border-top: 4px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T1_C); ?> !important;
		border-bottom: 4px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T1_C); ?> !important;
	}
	.loader_Navigation2<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
	{
		border-top: 4px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T2_C); ?> !important;
		border-bottom: 4px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T2_C); ?> !important;
	}
	.loader_Navigation3<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
	{
		border-top:17px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T3_C); ?> !important;
		border-bottom:17px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T3_C); ?> !important;
		border-right:17px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T3_C); ?> !important;
		width:55% !important;
		height:55% !important;
	}
<?php } else { ?>
	.RW_Loader_Frame_Navigation<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width:80px !important; height:80px !important; }
	.loader_Navigation1<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
	{
		border-top: 5px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T1_C); ?> !important;
		border-bottom: 5px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T1_C); ?> !important;
	}
	.loader_Navigation2<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
	{
		border-top: 5px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T2_C); ?> !important;
		border-bottom: 5px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T2_C); ?> !important;
	}
	.loader_Navigation3<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
	{
		border-top:25px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T3_C); ?> !important;
		border-bottom:25px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T3_C); ?> !important;
		border-right:25px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T3_C); ?> !important;
		width:60% !important;
		height:60% !important;
	}
<?php } ?>
.RW_Loader_Frame_Navigation
{
	position:relative;
	left:50%;
	width:80px;
	height:80px;
	transform:translateX(-50%);
	-webkit-transform:translateX(-50%);
	-ms-transform:translateX(-50%);
	-moz-transform:translateX(-50%);
	-o-transform:translateX(-50%);
}
.RW_Loader_Text_Navigation<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	position:relative;
	text-align:center;
	margin-top:10px;
	font-size: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FS); ?>px !important;
	font-family:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FF); ?> !important;
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_C); ?> !important;
}
.loader_Navigation1,.loader_Navigation2,.loader_Navigation3,.loader_Navigation4 { position:absolute; border:5px solid transparent; border-radius:50%; }
.loader_Navigation1<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-ms-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-o-box-sizing:border-box;
}
.loader_Navigation2<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	-webkit-box-sizing:border-box;
	-ms-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-o-box-sizing:border-box;
	top:50%;
	left:50%;
	transform:translateY(-50%) translateX(-50%);
	-webkit-transform:translateY(-50%) translateX(-50%);
	-ms-transform:translateY(-50%) translateX(-50%);
	-moz-transform:translateY(-50%) translateX(-50%);
	-o-transform:translateY(-50%) translateX(-50%);	
}
.loader_Navigation3<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	width:60%;
	height:60%;
	top:50%;
	left:50%;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-ms-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-o-box-sizing:border-box;
	transform:translateY(-50%) translateX(-50%);
	-webkit-transform:translateY(-50%) translateX(-50%);
	-ms-transform:translateY(-50%) translateX(-50%);
	-moz-transform:translateY(-50%) translateX(-50%);
	-o-transform:translateY(-50%) translateX(-50%);
	animation:clockLoadingmin 1s linear 500;
	-webkit-animation:clockLoadingmin 1s linear 500;
	-ms-animation:clockLoadingmin 1s linear 500;
	-moz-animation:clockLoadingmin 1s linear 500;
	-o-animation:clockLoadingmin 1s linear 500;
}
.loader_Navigation1
{
	width:100%;
	height:100%;
	animation:clockLoading 1s linear 500;
	-webkit-animation:clockLoading 1s linear 500;
	-ms-animation:clockLoading 1s linear 500;
	-moz-animation:clockLoading 1s linear 500;
	-o-animation:clockLoading 1s linear 500;
}
.loader_Navigation2
{
	width:80%;
	height:80%;
	animation:anticlockLoading 1s linear 500;
	-webkit-animation:anticlockLoading 1s linear 500;
	-ms-animation:anticlockLoading 1s linear 500;
	-moz-animation:anticlockLoading 1s linear 500;
	-o-animation:anticlockLoading 1s linear 500;
}
@keyframes clockLoading
{
	from{transform:rotate(0deg);-webkit-transform:-webkit-rotate(0deg);-ms-transform:rotate(0deg);-moz-transform:rotate(0deg);-o-transform:rotate(0deg);}
	to{transform:rotate(360deg);-webkit-transform:-webkit-rotate(360deg);-ms-transform:rotate(360deg);-moz-transform:rotate(360deg);-o-transform:rotate(360deg);}
}
@keyframes anticlockLoading
{
	from{transform:translateY(-50%) translateX(-50%) rotate(0deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(0deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(0deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(0deg);-o-transform:translateY(-50%) translateX(-50%) rotate(0deg);}
	to{transform:translateY(-50%) translateX(-50%) rotate(-360deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(-360deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(-360deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(-360deg);-o-transform:translateY(-50%) translateX(-50%) rotate(-360deg);}
}
@keyframes clockLoadingmin
{
	from{transform:translateY(-50%) translateX(-50%) rotate(0deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(0deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(0deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(0deg);-o-transform:translateY(-50%) translateX(-50%) rotate(0deg);}
	to{transform:translateY(-50%) translateX(-50%) rotate(360deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(360deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(360deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(360deg);-o-transform:translateY(-50%) translateX(-50%) rotate(360deg);}
}
/*Second Loader*/
.overlay-loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { display: block; margin: auto; width: 97px; height: 60px; position: relative; top: 0; left: 0; right: 0; bottom: 0; }
<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_S == "small") { ?>
	.overlay-loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { height: 40px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width: 49px !important; height: 49px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(2) { width: 3px !important; height: 3px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(3) { width: 9px !important; height: 9px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(4) { width: 14px !important; height: 14px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(5) { width: 19px !important; height: 19px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(6) { width: 24px !important; height: 24px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(7) { width: 28px !important; height: 28px !important; }
<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_S == "middle") { ?>
	.overlay-loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { height: 50px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width: 67px !important; height: 67px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(2) { width: 8px !important; height: 8px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(3) { width: 14px !important; height: 14px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(4) { width: 20px !important; height: 20px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(5) { width: 26px !important; height: 26px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(6) { width: 32px !important; height: 32px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(7) { width: 38px !important; height: 38px !important; }
<?php } else { ?>
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width: 97px !important; height: 97px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(2) { width: 12px !important; height: 12px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(3) { width: 18px !important; height: 18px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(4) { width: 23px !important; height: 23px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(5) { width: 31px !important; height: 31px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(6) { width: 39px !important; height: 39px !important; }
	.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(7) { width: 49px !important; height: 49px !important; }
<?php } ?>
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
	width: 97px;
	height: 97px;
	animation-name: rotateAnim;
	-o-animation-name: rotateAnim;
	-ms-animation-name: rotateAnim;
	-webkit-animation-name: rotateAnim;
	-moz-animation-name: rotateAnim;
	animation-duration: 0.4s;
	-o-animation-duration: 0.4s;
	-ms-animation-duration: 0.4s;
	-webkit-animation-duration: 0.4s;
	-moz-animation-duration: 0.4s;
	animation-iteration-count: infinite;
	-o-animation-iteration-count: infinite;
	-ms-animation-iteration-count: infinite;
	-webkit-animation-iteration-count: infinite;
	-moz-animation-iteration-count: infinite;
	animation-timing-function: linear;
	-o-animation-timing-function: linear;
	-ms-animation-timing-function: linear;
	-webkit-animation-timing-function: linear;
	-moz-animation-timing-function: linear;
}
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div
{
	width: 8px;
	height: 8px;
	border-radius: 50%;
	border: 1px solid <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_C); ?>;
	position: absolute;
	top: 2px;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
}
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(odd) { border-top: none; border-left: none; }
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(even) { border-bottom: none; border-right: none; }
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(2) { border-width: 2px; left: 0px; top: -4px; width: 12px; height: 12px; }
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(3) { border-width: 2px; left: -1px; top: 3px; width: 18px; height: 18px; }
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(4) { border-width: 3px; left: -1px; top: -4px; width: 23px; height: 23px; }
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(5) { border-width: 3px; left: -1px; top: 4px; width: 31px; height: 31px; }
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(6) { border-width: 4px; left: 0px; top: -4px; width: 39px; height: 39px; }
.loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> div:nth-child(7) { border-width: 4px; left: 0px; top: 6px; width: 49px; height: 49px; }
@keyframes rotateAnim { from { transform: rotate(360deg); } to { transform: rotate(0deg); } }
@-o-keyframes rotateAnim { from { -o-transform: rotate(360deg); } to { -o-transform: rotate(0deg); } }
@-ms-keyframes rotateAnim { from { -ms-transform: rotate(360deg); } to { -ms-transform: rotate(0deg); } }
@-webkit-keyframes rotateAnim { from { -webkit-transform: rotate(360deg); } to { -webkit-transform: rotate(0deg); } }
@-moz-keyframes rotateAnim { from { -moz-transform: rotate(360deg); } to { -moz-transform: rotate(0deg); } }
/*Third Loader*/
<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_S == "small") { ?>
	.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width: 45px !important; height:45px !important; }
	.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .wBall { width: 42px !important; height: 42px !important; }
<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_S == "middle") { ?>
	.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width: 60px !important; height:60px !important; }
	.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .wBall { width: 56px !important; height: 56px !important; }
<?php } else { ?>
	.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width: 78px !important; height:78px !important; }
	.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .wBall { width: 74px !important; height: 74px !important; }
<?php } ?>
.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { position: relative; width: 78px; height:78px; margin:auto; }
.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .wBall
{
	position: absolute;
	width: 74px;
	height: 74px;
	opacity: 0;
	transform: rotate(225deg);
	-o-transform: rotate(225deg);
	-ms-transform: rotate(225deg);
	-webkit-transform: rotate(225deg);
	-moz-transform: rotate(225deg);
	animation: orbit 6.96s infinite;
	-o-animation: orbit 6.96s infinite;
	-ms-animation: orbit 6.96s infinite;
	-webkit-animation: orbit 6.96s infinite;
	-moz-animation: orbit 6.96s infinite;
}
.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .wBall .wInnerBall
{
	position: absolute;
	width: 10px;
	height: 10px;
	background: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_C); ?>;
	left:0px;
	top:0px;
	border-radius: 10px;
}
.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> #wBall_1
{
	animation-delay: 1.52s;
	-o-animation-delay: 1.52s;
	-ms-animation-delay: 1.52s;
	-webkit-animation-delay: 1.52s;
	-moz-animation-delay: 1.52s;
}
.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> #wBall_2
{
	animation-delay: 0.3s;
	-o-animation-delay: 0.3s;
	-ms-animation-delay: 0.3s;
	-webkit-animation-delay: 0.3s;
	-moz-animation-delay: 0.3s;
}
.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> #wBall_3
{
	animation-delay: 0.61s;
	-o-animation-delay: 0.61s;
	-ms-animation-delay: 0.61s;
	-webkit-animation-delay: 0.61s;
	-moz-animation-delay: 0.61s;
}
.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> #wBall_4
{
	animation-delay: 0.91s;
	-o-animation-delay: 0.91s;
	-ms-animation-delay: 0.91s;
	-webkit-animation-delay: 0.91s;
	-moz-animation-delay: 0.91s;
}
.windows8<?php echo esc_html($Rich_Web_VSlider_ID);    ?> #wBall_5
{
	animation-delay: 1.22s;
	-o-animation-delay: 1.22s;
	-ms-animation-delay: 1.22s;
	-webkit-animation-delay: 1.22s;
	-moz-animation-delay: 1.22s;
}
@keyframes orbit
{
	0% { opacity: 1; z-index:99; transform: rotate(180deg); animation-timing-function: ease-out; }
	7% { opacity: 1; transform: rotate(300deg); animation-timing-function: linear; transform-origin:0%; }
	30% { opacity: 1; transform: rotate(410deg); animation-timing-function: ease-in-out; transform-origin:7%; }
	39% { opacity: 1; transform: rotate(645deg); animation-timing-function: linear; transform-origin:30%; }
	70% { opacity: 1; transform: rotate(770deg); animation-timing-function: ease-out; transform-origin:39%; }
	75% { opacity: 1; transform: rotate(900deg); animation-timing-function: ease-out; transform-origin:70%; }
	76% { opacity: 0; transform: rotate(900deg); }
	100% { opacity: 0; transform: rotate(900deg); }
}
@-o-keyframes orbit
{
	0% { opacity: 1; z-index:99; -o-transform: rotate(180deg); -o-animation-timing-function: ease-out; }
	7% { opacity: 1; -o-transform: rotate(300deg); -o-animation-timing-function: linear; -o-transform-origin:0%; }
	30% { opacity: 1; -o-transform: rotate(410deg); -o-animation-timing-function: ease-in-out; -o-transform-origin:7%; }
	39% { opacity: 1; -o-transform: rotate(645deg); -o-animation-timing-function: linear; -o-transform-origin:30%; }
	70% { opacity: 1; -o-transform: rotate(770deg); -o-animation-timing-function: ease-out; -o-transform-origin:39%; }
	75% { opacity: 1; -o-transform: rotate(900deg); -o-animation-timing-function: ease-out; -o-transform-origin:70%; }
	76% { opacity: 0; -o-transform:rotate(900deg); }
	100% { opacity: 0; -o-transform: rotate(900deg); }
}
@-ms-keyframes orbit
{
	0% { opacity: 1; z-index:99; -ms-transform: rotate(180deg); -ms-animation-timing-function: ease-out; }
	7% { opacity: 1; -ms-transform: rotate(300deg); -ms-animation-timing-function: linear; -ms-transform-origin:0%; }
	30% { opacity: 1; -ms-transform: rotate(410deg); -ms-animation-timing-function: ease-in-out; -ms-transform-origin:7%; }
	39% { opacity: 1; -ms-transform: rotate(645deg); -ms-animation-timing-function: linear; -ms-transform-origin:30%; }
	70% { opacity: 1; -ms-transform: rotate(770deg); -ms-animation-timing-function: ease-out; -ms-transform-origin:39%; }
	75% { opacity: 1; -ms-transform: rotate(900deg); -ms-animation-timing-function: ease-out; -ms-transform-origin:70%; }
	76% { opacity: 0; -ms-transform: rotate(900deg); }
	100% { opacity: 0; -ms-transform: rotate(900deg); }
}
@-webkit-keyframes orbit
{
	0% { opacity: 1; z-index:99; -webkit-transform: rotate(180deg); -webkit-animation-timing-function: ease-out; }
	7% { opacity: 1; -webkit-transform: rotate(300deg); -webkit-animation-timing-function: linear; -webkit-transform-origin:0%; }
	30% { opacity: 1; -webkit-transform: rotate(410deg); -webkit-animation-timing-function: ease-in-out; -webkit-transform-origin:7%; }
	39% { opacity: 1; -webkit-transform: rotate(645deg); -webkit-animation-timing-function: linear; -webkit-transform-origin:30%; }
	70% { opacity: 1; -webkit-transform: rotate(770deg); -webkit-animation-timing-function: ease-out; -webkit-transform-origin:39%; }
	75% { opacity: 1; -webkit-transform: rotate(900deg); -webkit-animation-timing-function: ease-out; -webkit-transform-origin:70%; }
	76% { opacity: 0; -webkit-transform: rotate(900deg); }
	100% { opacity: 0; -webkit-transform: rotate(900deg); }
}
@-moz-keyframes orbit
{
	0% { opacity: 1; z-index:99; -moz-transform: rotate(180deg); -moz-animation-timing-function: ease-out; }
	7% { opacity: 1; -moz-transform: rotate(300deg); -moz-animation-timing-function: linear; -moz-transform-origin:0%; }
	30% { opacity: 1; -moz-transform: rotate(410deg); -moz-animation-timing-function: ease-in-out; -moz-transform-origin:7%; }
	39% { opacity: 1; -moz-transform: rotate(645deg); -moz-animation-timing-function: linear; -moz-transform-origin:30%; }
	70% { opacity: 1; -moz-transform: rotate(770deg); -moz-animation-timing-function: ease-out; -moz-transform-origin:39%; }
	75% { opacity: 1; -moz-transform: rotate(900deg); -moz-animation-timing-function: ease-out; -moz-transform-origin:70%; }
	76% { opacity: 0; -moz-transform:rotate(900deg); }
	100% { opacity: 0; -moz-transform: rotate(900deg); }
}
/*Fourth loader*/
<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_S == "small") { ?>
	.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width: 30px !important; height: 30px !important; }
<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_S == "middle") { ?>
	.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width: 40px !important; height: 40px !important; }
<?php } else { ?>
	.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width: 50px !important; height: 50px !important; }
<?php } ?>
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	width: 50px;
	height: 50px;
	margin: 20px auto;
	position: relative;
	transform: rotateZ(45deg);
	-o-transform: rotateZ(45deg);
	-ms-transform: rotateZ(45deg);
	-webkit-transform: rotateZ(45deg);
	-moz-transform: rotateZ(45deg);
}
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-cube
{
	position: relative;
	transform: rotateZ(45deg);
	-o-transform: rotateZ(45deg);
	-ms-transform: rotateZ(45deg);
	-webkit-transform: rotateZ(45deg);
	-moz-transform: rotateZ(45deg);
}
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-cube
{
	float: left;
	width: 50%;
	height: 50%;
	position: relative;
	transform: scale(1.1);
	-o-transform: scale(1.1);
	-ms-transform: scale(1.1);
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
}
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-cube:before
{
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_C); ?>;
	animation: cssload-fold-thecube 2.76s infinite linear both;
	-o-animation: cssload-fold-thecube 2.76s infinite linear both;
	-ms-animation: cssload-fold-thecube 2.76s infinite linear both;
	-webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
	-moz-animation: cssload-fold-thecube 2.76s infinite linear both;
	transform-origin: 100% 100%;
	-o-transform-origin: 100% 100%;
	-ms-transform-origin: 100% 100%;
	-webkit-transform-origin: 100% 100%;
	-moz-transform-origin: 100% 100%;
}
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-c2
{
	transform: scale(1.1) rotateZ(90deg);
	-o-transform: scale(1.1) rotateZ(90deg);
	-ms-transform: scale(1.1) rotateZ(90deg);
	-webkit-transform: scale(1.1) rotateZ(90deg);
	-moz-transform: scale(1.1) rotateZ(90deg);
}
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-c3
{
	transform: scale(1.1) rotateZ(180deg);
	-o-transform: scale(1.1) rotateZ(180deg);
	-ms-transform: scale(1.1) rotateZ(180deg);
	-webkit-transform: scale(1.1) rotateZ(180deg);
	-moz-transform: scale(1.1) rotateZ(180deg);
}
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-c4
{
	transform: scale(1.1) rotateZ(270deg);
	-o-transform: scale(1.1) rotateZ(270deg);
	-ms-transform: scale(1.1) rotateZ(270deg);
	-webkit-transform: scale(1.1) rotateZ(270deg);
	-moz-transform: scale(1.1) rotateZ(270deg);
}
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-c2:before
{
	animation-delay: 0.35s;
	-o-animation-delay: 0.35s;
	-ms-animation-delay: 0.35s;
	-webkit-animation-delay: 0.35s;
	-moz-animation-delay: 0.35s;
}
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-c3:before
{
	animation-delay: 0.69s;
	-o-animation-delay: 0.69s;
	-ms-animation-delay: 0.69s;
	-webkit-animation-delay: 0.69s;
	-moz-animation-delay: 0.69s;
}
.cssload-thecube<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-c4:before
{
	animation-delay: 1.04s;
	-o-animation-delay: 1.04s;
	-ms-animation-delay: 1.04s;
	-webkit-animation-delay: 1.04s;
	-moz-animation-delay: 1.04s;
}
@keyframes cssload-fold-thecube
{
	0%, 10% { transform: perspective(136px) rotateX(-180deg); opacity: 0; }
	25%, 75% { transform: perspective(136px) rotateX(0deg); opacity: 1; }
	90%, 100% { transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-o-keyframes cssload-fold-thecube
{
	0%, 10% { -o-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
	25%, 75% { -o-transform: perspective(136px) rotateX(0deg); opacity: 1; }
	90%, 100% { -o-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-ms-keyframes cssload-fold-thecube
{
	0%, 10% { -ms-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
	25%, 75% { -ms-transform: perspective(136px) rotateX(0deg); opacity: 1; }
	90%, 100% { -ms-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-webkit-keyframes cssload-fold-thecube
{
	0%, 10% { -webkit-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
	25%, 75% { -webkit-transform: perspective(136px) rotateX(0deg); opacity: 1; }
	90%, 100% { -webkit-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
@-moz-keyframes cssload-fold-thecube
{
	0%, 10% { -moz-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
	25%, 75% { -moz-transform: perspective(136px) rotateX(0deg); opacity: 1; }
	90%, 100% { -moz-transform: perspective(136px) rotateY(180deg); opacity: 0; }
}
/*First Text*/
.cssload-loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	width: 244px;
	height: 49px;
	line-height: 49px;
	text-align: center;
	position: relative;
	left: 50%;
	transform: translate(-50%, 0%);
	-o-transform: translate(-50%, 0%);
	-ms-transform: translate(-50%, 0%);
	-webkit-transform: translate(-50%, 0%);
	-moz-transform: translate(-50%, 0%);
	font-family: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FF); ?> !important;
	text-transform: none !important;
	font-weight: 900;
	font-size:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FS); ?>px !important;
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_C); ?> !important;
	letter-spacing: 0.2em;
	margin-top:10px;
}
.cssload-loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?>::before, .cssload-loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?>::after
{
	content: "";
	display: block;
	width: 15px;
	height: 15px;
	background: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T2_BC); ?> !important;
	position: absolute;
	animation: cssload-load 0.81s infinite alternate ease-in-out;
	-o-animation: cssload-load 0.81s infinite alternate ease-in-out;
	-ms-animation: cssload-load 0.81s infinite alternate ease-in-out;
	-webkit-animation: cssload-load 0.81s infinite alternate ease-in-out;
	-moz-animation: cssload-load 0.81s infinite alternate ease-in-out;
}
.cssload-loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?>::before { top: 0; }
.cssload-loader<?php echo esc_html($Rich_Web_VSlider_ID);    ?>::after { bottom: 0; }
@keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
@-o-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
@-ms-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
@-moz-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
@-webkit-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
/*Second*/
#inTurnFadingTextG<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { width:100%; margin:auto; text-align:center; }
.inTurnFadingTextG<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	font-size: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FS); ?>px !important;
	font-family:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FF); ?> !important;
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_C); ?> !important;
	text-decoration:none;
	font-weight:normal;
	font-style:normal;
	display:inline-block;
	animation-name:bounce_inTurnFadingTextG;
	-o-animation-name:bounce_inTurnFadingTextG;
	-ms-animation-name:bounce_inTurnFadingTextG;
	-webkit-animation-name:bounce_inTurnFadingTextG;
	-moz-animation-name:bounce_inTurnFadingTextG;
	animation-duration:2.09s;
	-o-animation-duration:2.09s;
	-ms-animation-duration:2.09s;
	-webkit-animation-duration:2.09s;
	-moz-animation-duration:2.09s;
	animation-iteration-count:infinite;
	-o-animation-iteration-count:infinite;
	-ms-animation-iteration-count:infinite;
	-webkit-animation-iteration-count:infinite;
	-moz-animation-iteration-count:infinite;
	animation-direction:normal;
	-o-animation-direction:normal;
	-ms-animation-direction:normal;
	-webkit-animation-direction:normal;
	-moz-animation-direction:normal;
}
<?php foreach($text_array as $key=>$v) { ?>
	#inTurnFadingTextG<?php echo esc_html($Rich_Web_VSlider_ID);    ?>_<?php echo esc_attr($key + 1); ?>
	{
		animation-delay:<?php echo esc_attr($anim_sum); ?>s !important;
		-o-animation-delay:<?php echo esc_attr($anim_sum); ?>s !important;
		-ms-animation-delay:<?php echo esc_attr($anim_sum); ?>s !important;
		-webkit-animation-delay:<?php echo esc_attr($anim_sum); ?>s !important;
		-moz-animation-delay:<?php echo esc_attr($anim_sum); ?>s !important;
	}
	<?php $anim_sum=$anim_sum+0.15; ?>
<?php } ?>
@keyframes bounce_inTurnFadingTextG
{
	0% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T2_AnC); ?>; }
	100% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_C); ?> !important; }
}
@-o-keyframes bounce_inTurnFadingTextG
{
	0% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T2_AnC); ?>; }
	100% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_C); ?> !important; }
}
@-ms-keyframes bounce_inTurnFadingTextG
{
	0% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T2_AnC); ?>; }
	100% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_C); ?> !important; }
}
@-webkit-keyframes bounce_inTurnFadingTextG
{
	0% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T2_AnC); ?>; }
	100% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_C); ?> !important; }
}
@-moz-keyframes bounce_inTurnFadingTextG
{
	0% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T2_AnC); ?>; }
	100% { color:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_C); ?> !important; }
}
/*Third text*/
.cssload-preloader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> { position: relative; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 10; }
.cssload-preloader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> > .cssload-preloader<?php echo esc_html($Rich_Web_VSlider_ID);    ?>-box
{
	position: relative;
	display:inline-block;
	margin-left:10px;
	margin-top:20px;
	height: 29px;
	left:50%;
	transform:translateX(-50%) !important;
	-webkit-transform:translateX(-50%) !important;
	-ms-transform:translateX(-50%) !important;
	-moz-transform:translateX(-50%) !important;
	-o-transform:translateX(-50%) !important;
	perspective: 195px;
	-o-perspective: 195px;
	-ms-perspective: 195px;
	-webkit-perspective: 195px;
	-moz-perspective: 195px;
}
.cssload-preloader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-preloader<?php echo esc_html($Rich_Web_VSlider_ID);    ?>-box > div
{
	position: relative;
	width: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FS*2); ?>px;
	height: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FS*2); ?>px;
	background: rgb(204,204,204);
	float: left;
	text-align: center;
	line-height: 2;
	font-size: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FS); ?>px !important;
	font-family:<?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FF); ?> !important;
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_C); ?> !important;
}
<?php foreach($text_array as $key=>$v) { ?>
	.cssload-preloader<?php echo esc_html($Rich_Web_VSlider_ID);    ?> .cssload-preloader<?php echo esc_html($Rich_Web_VSlider_ID);    ?>-box > div:nth-child(<?php echo esc_attr($key + 1); ?>)
	{
		background: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?> !important;
		margin-right: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_FS); ?>px !important;
		animation: cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?> 690ms ease <?php echo esc_attr($str_sum); ?>ms infinite alternate;
		-o-animation: cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?> 690ms ease <?php echo esc_attr($str_sum); ?>ms infinite alternate;
		-ms-animation: cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?> 690ms ease <?php echo esc_attr($str_sum); ?>ms infinite alternate;
		-webkit-animation: cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?> 690ms ease <?php echo esc_attr($str_sum); ?>ms infinite alternate;
		-moz-animation: cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?> 690ms ease <?php echo esc_attr($str_sum); ?>ms infinite alternate;
	}
	<?php $str_sum=$str_sum+86.25; ?>
<?php } ?>
@keyframes cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	from { transform: scale(1.0) translateY(0px) rotateX(0deg); box-shadow: 0 0 0 rgba(0,0,0,0); }
	to {
		transform: scale(1.5) translateY(-24px) rotateX(45deg);
		box-shadow: 0 24px 39px <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?>;
		background: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?> !important;
	}
}
@-o-keyframes cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	from { -o-transform: scale(1.0) translateY(0px) rotateX(0deg); -o-box-shadow: 0 0 0 rgba(0,0,0,0); }
	to {
		-o-transform: scale(1.5) translateY(-24px) rotateX(45deg);
		-o-box-shadow: 0 24px 39px <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?>;
		background: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?> !important;
	}
}
@-ms-keyframes cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	from { -ms-transform: scale(1.0) translateY(0px) rotateX(0deg); -ms-box-shadow: 0 0 0 rgba(0,0,0,0); }
	to {
		-ms-transform: scale(1.5) translateY(-24px) rotateX(45deg);
		-ms-box-shadow: 0 24px 39px <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?>;
		background: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?> !important;
	}
}
@-webkit-keyframes cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	from { -webkit-transform: scale(1.0) translateY(0px) rotateX(0deg); -webkit-box-shadow: 0 0 0 rgba(0,0,0,0); }
	to {
		-webkit-transform: scale(1.5) translateY(-24px) rotateX(45deg);
		-webkit-box-shadow: 0 24px 39px <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?>;
		background: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?> !important;
	}
}
@-moz-keyframes cssload-movement<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	from { -moz-transform: scale(1.0) translateY(0px) rotateX(0deg); -moz-box-shadow: 0 0 0 rgba(0,0,0,0); }
	to {
		-moz-transform: scale(1.5) translateY(-24px) rotateX(45deg);
		-moz-box-shadow: 0 24px 39px <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?>;
		background: <?php echo esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T3_BgC); ?> !important;
	}
}
.Rich_Web_VSVT<?php echo esc_html($Rich_Web_VSlider_ID);    ?>_Main
{
	position: relative;
	margin: 0px auto;
	top: 20px;
	margin-bottom:50px;
	left: 0px;
	width: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_H*16/9+240);?>px;
	height: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_H);?>px;
	overflow: hidden;
	visibility: hidden;
	outline: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW);?>px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BS);?> <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BC);?>;
	<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxShShow=='on'){ ?>
		<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxShType=='on'){ ?>
			-webkit-box-shadow: 0 30px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxSh);?>px -18px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxShC);?>;
			-moz-box-shadow: 0 30px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxSh);?>px -18px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxShC);?>;
			box-shadow: 0 30px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxSh);?>px -18px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxShC);?>;
		<?php }else{ ?>
			-webkit-box-shadow: 0px 0px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxSh);?>px 10px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxShC);?>;
			-moz-box-shadow: 0px 0px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxSh);?>px 10px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxShC);?>;
			box-shadow: 0px 0px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxSh);?>px 10px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BoxShC);?>;
		<?php }?>
	<?php }?>
	max-width: none !important;
}
.jssora05l, .jssora05r
{
	display: block;
	position: absolute;
	width: auto !important;
	height:auto !important;
	cursor: pointer;
	overflow: hidden;
	padding: 1px;
	font-size: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_ArrFS);?>px;
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_ArrC);?>;
	<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_ArrPos=='top'){ ?>
		top: 5%;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_ArrPos=='bottom'){ ?>
		bottom: 7%;
	<?php }else{ ?>
		top: 41%;
	<?php }?>
	-webkit-transition: all 0s !important;
	-ms-transition: all 0s !important;
	-moz-transition: all 0s !important;
	-o-transition: all 0s !important;
	transition: all 0s !important;
}
.jssora05r i { float: right; }
.jssora05l i { float: left; }
.jssora05l:hover, .jssora05r:hover { opacity: 0.8; }
div[data-u="thumbnavigator"]{
	overflow-x:hidden;
	top:0px !important;
}
div[data-u="thumbnavigator"]::-webkit-scrollbar { width: 0.5em; }
div[data-u="thumbnavigator"]::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BgC);?>;
}
div[data-u="thumbnavigator"]::-webkit-scrollbar-thumb
{
	background-color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_Th_HBC);?>;
	outline: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_Th_HBC);?>;
}
div[data-u="thumbnavigator"]>div{
	height:auto !important;
}
div[data-u="slides"]{
	overflow:visible !important;
}
.jssort01-99-66
{
	background-color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BgC);?>;
	position:absolute;
	left:0px;
	top:0px;
	width:240px;
	height:100% !important;
}
.jssort01-99-66>div{
	top:0px !important;
	padding-top: 5px !important;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
.jssort01-99-66 .p
{
	position: absolute;
	top: 0;
	left: 0;
	width: 99px;
	height: 66px;
	border: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_Th_BW);?>px <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_Th_BS);?> <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_Th_BC);?> !important;
	border-radius: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_Th_BR);?>px;
	box-sizing:border-box !important;
}
.jssort01-99-66 .p:hover, .jssort01-99-66 .p.pdn, .jssort01-99-66 .pav
{
	border-color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_Th_HBC);?> !important;
}
.jssort01-99-66 .w  img
{
	border-radius: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_Th_BR-2);?>px;
}
.jssort01-99-66 .t { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none; }
.jssort01-99-66 .w { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
.jssort01-99-66 .c { position: absolute; top: 0; left: 0; width: 95px; height: 62px; box-sizing: content-box; -moz-box-sizing: content-box; -webkit-box-sizing: content-box;}
.jssort01-99-66 .pav .c { top: 2px; left: 2px; width: 95px; height: 62px; }
.jssort01-99-66 .p:hover .c { top: 0px; left: 0px; width: 97px; height: 64px; }
.jssort01-99-66 .p.pdn .c { width: 95px; height: 62px; }
* html .jssort01-99-66 .c, * html .jssort01-99-66 .pdn .c, * html .jssort01-99-66 .pav .c { width: 99px; height: 66px; }
.Rich_Web_VS_VTS_Title<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	position:absolute;
	left:0px;
	width:100%;
	z-index: 999999999;
	padding: 2px;
	text-align: center;
	background-color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_TBgC);?>;
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_TC);?>;
	font-size: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_TFS);?>px;
	font-family: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_TFF);?>;
	<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_TPos=='top'){ ?>
		top: 5%;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_TPos=='bottom'){ ?>
		bottom: 7%;
	<?php }else{ ?>
		top: 41%;
	<?php }?>
}
.Rich_Web_VS_VTS_Link<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	position: absolute;
	<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LPos=='top-left'){ ?>
		left: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		top: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		border-bottom-right-radius: 70px;
		padding: 10px 20px 20px 10px;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LPos=='top-right'){ ?>
		right: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		top: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		border-bottom-left-radius: 70px;
		padding: 10px 10px 20px 20px;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LPos=='bottom-left'){ ?>
		left: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		bottom: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		border-top-right-radius: 70px;
		padding: 20px 20px 10px 10px;
	<?php }else{ ?> 
		right: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		bottom: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		border-top-left-radius: 70px;
		padding: 20px 10px 10px 20px;
	<?php }?>
	<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LPos==$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PPos){ ?>
		display: none;
	<?php }?>
	z-index: 999999999;
	background-color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LBgC);?>;
	font-size: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LFS);?>px;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	-ms-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
}
.Rich_Web_VS_VTS_Link<?php echo esc_html($Rich_Web_VSlider_ID);    ?> a
{
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LC);?>;
	text-decoration: none;
	box-shadow: none !important;
	border: none !important;
}
.Rich_Web_VS_VTS_Play<?php echo esc_html($Rich_Web_VSlider_ID);    ?>
{
	position: absolute;
	<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PPos=='top-left'){ ?>
		left: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		top: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		border-bottom-right-radius: 70px;
		padding: 10px 20px 20px 15px;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PPos=='top-right'){ ?>
		right: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		top: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		border-bottom-left-radius: 70px;
		padding: 10px 15px 20px 20px;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PPos=='bottom-left'){ ?>
		left: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		bottom: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		border-top-right-radius: 70px;
		padding: 20px 20px 10px 15px;
	<?php }else{ ?> 
		right: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		bottom: <?php echo -$Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW/($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_BW+1);?>px;
		border-top-left-radius: 70px;
		padding: 20px 15px 10px 20px;
	<?php }?>
	z-index: 999999999;
	background-color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PBgC);?>;
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PC);?>;
	font-size: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PFS);?>px;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	-ms-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
	cursor: pointer;
}
.Rich_Web_VS_VTS_Link<?php echo esc_html($Rich_Web_VSlider_ID);    ?>:hover
{
	<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LPos=='top-left'){ ?>
		padding: 15px 25px 25px 15px;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LPos=='top-right'){ ?>
		padding: 15px 15px 25px 25px;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LPos=='bottom-left'){ ?>
		padding: 25px 25px 15px 15px;
	<?php }else{ ?>
		padding: 25px 15px 15px 25px;
	<?php }?>
	background-color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LHBgC);?>;
}
.Rich_Web_VS_VTS_Link<?php echo esc_html($Rich_Web_VSlider_ID);    ?>:hover a
{
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LHC);?>;
}
.Rich_Web_VS_VTS_Play<?php echo esc_html($Rich_Web_VSlider_ID);    ?>:hover
{
	<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PPos=='top-left'){ ?>
		padding: 15px 25px 25px 20px;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PPos=='top-right'){ ?>
		padding: 15px 20px 25px 25px;
	<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PPos=='bottom-left'){ ?>
		padding: 25px 25px 15px 20px;
	<?php }else{ ?>
		padding: 25px 20px 15px 25px;
	<?php }?>
	background-color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PHBgC);?>;
	color: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PHC);?>;
}
.Rich_Web_VSVT<?php echo esc_html($Rich_Web_VSlider_ID);    ?>_Iframe_Div
{
	position: relative;
	top: 0px;
	left: 240px;
	width: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_H*16/9);?>px;
	height: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_H);?>px;
	overflow: hidden;
	display: none;
}
#Rich_Web_VSVT<?php echo esc_html($Rich_Web_VSlider_ID);    ?>_Iframe
{
	width: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_H*16/9);?>px;
	height: <?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_H);?>px;
}
@media screen and (max-width:820px){
	.jssora05l, .jssora05r,.Rich_Web_VS_VTS_Play<?php echo esc_html($Rich_Web_VSlider_ID);    ?>,.rich_web-link{
		cursor:default !important;
	}
}
</style>