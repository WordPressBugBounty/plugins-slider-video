<style type="text/css">
				.countVideoes<?php echo esc_attr($Rich_Web_VSlider_ID); ?>{
					position:absolute;
					top:5px;
					right:15px;
					z-index: 2;
					font-family: <?php echo  esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_TO_NS1_Num_FFamily);?>;
					font-size: <?php echo  esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_TO_NS1_Num_FSize);?>px;
					color: <?php echo  esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_TO_NS1_Num_Col);?>;
				}

				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_TO_NS1_Num_Show == ""){ ?>
					.countVideoes<?php echo esc_attr($Rich_Web_VSlider_ID); ?>{
						display: none !important;
					}
				<?php } ?>

				.center_content<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
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
				#RW_Load_ASS_Navigation<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					position:relative;
					margin:20px auto !important;
					background-color:<?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_BgC); ?> !important;
					z-index:2;
					width:<?php echo  esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_Width);?>px;
					height:<?php echo  esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_Height);?>px;
					max-height:<?php echo  ($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_Height)/($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_Width)*100;?>%;
					max-width:100% !important;
				}
				<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_S == "small") { ?>
					.RW_Loader_Frame_Navigation<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width:45px !important; height:45px !important; }
					.loader_Navigation1<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
					{
						border-top: 3px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T1_C); ?> !important;
						border-bottom: 3px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T1_C); ?> !important;
					}
					.loader_Navigation2<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
					{
						border-top: 3px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T2_C); ?> !important;
						border-bottom: 3px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T2_C); ?> !important;
					}
					.loader_Navigation3<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
					{
						border-top:12px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T3_C); ?> !important;
						border-bottom:12px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T3_C); ?> !important;
						border-right:12px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T3_C); ?> !important;
						width:50% !important;
						height:50% !important;
					}
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_S == "middle") { ?>
					.RW_Loader_Frame_Navigation<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width:60px !important; height:60px !important; }
					.loader_Navigation1<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
					{
						border-top: 4px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T1_C); ?> !important;
						border-bottom: 4px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T1_C); ?> !important;
					}
					.loader_Navigation2<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
					{
						border-top: 4px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T2_C); ?> !important;
						border-bottom: 4px solid <?php echo esc_attr( $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T2_C); ?> !important;
					}
					.loader_Navigation3<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
					{
						border-top:17px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T3_C); ?> !important;
						border-bottom:17px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T3_C); ?> !important;
						border-right:17px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T3_C); ?> !important;
						width:55% !important;
						height:55% !important;
					}
				<?php } else { ?>
					.RW_Loader_Frame_Navigation<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width:80px !important; height:80px !important; }
					.loader_Navigation1<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
					{
						border-top: 5px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T1_C); ?> !important;
						border-bottom: 5px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T1_C); ?> !important;
					}
					.loader_Navigation2<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
					{
						border-top: 5px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T2_C); ?> !important;
						border-bottom: 5px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T2_C); ?> !important;
					}
					.loader_Navigation3<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
					{
						border-top:25px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T3_C); ?> !important;
						border-bottom:25px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T3_C); ?> !important;
						border-right:25px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_T3_C); ?> !important;
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
				.RW_Loader_Text_Navigation<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					position:relative;
					text-align:center;
					margin-top:10px;
					font-size: <?php echo esc_attr( $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FS); ?>px !important;
					font-family:<?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FF); ?> !important;
					color: <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_C); ?> !important;
				}
				.loader_Navigation1,.loader_Navigation2,.loader_Navigation3,.loader_Navigation4 { position:absolute; border:5px solid transparent; border-radius:50%; }
				.loader_Navigation1<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					box-sizing:border-box;
					-webkit-box-sizing:border-box;
					-ms-box-sizing:border-box;
					-moz-box-sizing:border-box;
					-o-box-sizing:border-box;
				}
				.loader_Navigation2<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
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
				.loader_Navigation3<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
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
				.overlay-loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { display: block; margin: auto; width: 97px; height: 60px; position: relative; top: 0; left: 0; right: 0; bottom: 0; }
				<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_S == "small") { ?>
					.overlay-loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { height: 40px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width: 49px !important; height: 49px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(2) { width: 3px !important; height: 3px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(3) { width: 9px !important; height: 9px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(4) { width: 14px !important; height: 14px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(5) { width: 19px !important; height: 19px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(6) { width: 24px !important; height: 24px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(7) { width: 28px !important; height: 28px !important; }
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_S == "middle") { ?>
					.overlay-loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { height: 50px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width: 67px !important; height: 67px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(2) { width: 8px !important; height: 8px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(3) { width: 14px !important; height: 14px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(4) { width: 20px !important; height: 20px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(5) { width: 26px !important; height: 26px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(6) { width: 32px !important; height: 32px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(7) { width: 38px !important; height: 38px !important; }
				<?php } else { ?>
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width: 97px !important; height: 97px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(2) { width: 12px !important; height: 12px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(3) { width: 18px !important; height: 18px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(4) { width: 23px !important; height: 23px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(5) { width: 31px !important; height: 31px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(6) { width: 39px !important; height: 39px !important; }
					.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(7) { width: 49px !important; height: 49px !important; }
				<?php } ?>
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
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
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div
				{
					width: 8px;
					height: 8px;
					border-radius: 50%;
					border: 1px solid <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_C); ?>;
					position: absolute;
					top: 2px;
					left: 0;
					right: 0;
					bottom: 0;
					margin: auto;
				}
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(odd) { border-top: none; border-left: none; }
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(even) { border-bottom: none; border-right: none; }
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(2) { border-width: 2px; left: 0px; top: -4px; width: 12px; height: 12px; }
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(3) { border-width: 2px; left: -1px; top: 3px; width: 18px; height: 18px; }
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(4) { border-width: 3px; left: -1px; top: -4px; width: 23px; height: 23px; }
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(5) { border-width: 3px; left: -1px; top: 4px; width: 31px; height: 31px; }
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(6) { border-width: 4px; left: 0px; top: -4px; width: 39px; height: 39px; }
				.loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> div:nth-child(7) { border-width: 4px; left: 0px; top: 6px; width: 49px; height: 49px; }
				@keyframes rotateAnim { from { transform: rotate(360deg); } to { transform: rotate(0deg); } }
				@-o-keyframes rotateAnim { from { -o-transform: rotate(360deg); } to { -o-transform: rotate(0deg); } }
				@-ms-keyframes rotateAnim { from { -ms-transform: rotate(360deg); } to { -ms-transform: rotate(0deg); } }
				@-webkit-keyframes rotateAnim { from { -webkit-transform: rotate(360deg); } to { -webkit-transform: rotate(0deg); } }
				@-moz-keyframes rotateAnim { from { -moz-transform: rotate(360deg); } to { -moz-transform: rotate(0deg); } }
				/*Third Loader*/
				<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_S == "small") { ?>
					.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width: 45px !important; height:45px !important; }
					.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .wBall { width: 42px !important; height: 42px !important; }
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_S == "middle") { ?>
					.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width: 60px !important; height:60px !important; }
					.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .wBall { width: 56px !important; height: 56px !important; }
				<?php } else { ?>
					.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width: 78px !important; height:78px !important; }
					.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .wBall { width: 74px !important; height: 74px !important; }
				<?php } ?>
				.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { position: relative; width: 78px; height:78px; margin:auto; }
				.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .wBall
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
				.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .wBall .wInnerBall
				{
					position: absolute;
					width: 10px;
					height: 10px;
					background: <?php echo esc_attr( $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_C); ?>;
					left:0px;
					top:0px;
					border-radius: 10px;
				}
				.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> #wBall_1
				{
					animation-delay: 1.52s;
					-o-animation-delay: 1.52s;
					-ms-animation-delay: 1.52s;
					-webkit-animation-delay: 1.52s;
					-moz-animation-delay: 1.52s;
				}
				.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> #wBall_2
				{
					animation-delay: 0.3s;
					-o-animation-delay: 0.3s;
					-ms-animation-delay: 0.3s;
					-webkit-animation-delay: 0.3s;
					-moz-animation-delay: 0.3s;
				}

				.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> #wBall_3
				{
					animation-delay: 0.61s;
					-o-animation-delay: 0.61s;
					-ms-animation-delay: 0.61s;
					-webkit-animation-delay: 0.61s;
					-moz-animation-delay: 0.61s;
				}
				.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> #wBall_4
				{
					animation-delay: 0.91s;
					-o-animation-delay: 0.91s;
					-ms-animation-delay: 0.91s;
					-webkit-animation-delay: 0.91s;
					-moz-animation-delay: 0.91s;
				}
				.windows8<?php echo esc_attr($Rich_Web_VSlider_ID); ?> #wBall_5
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
					76% { opacity: 0; -o-transform: rotate(900deg); }
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
					76% { opacity: 0; -moz-transform: rotate(900deg); }
					100% { opacity: 0; -moz-transform: rotate(900deg); }
				}
				/*Fourth loader*/
				<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_S == "small") { ?>
					.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width: 30px !important; height: 30px !important; }
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_S == "middle") { ?>
					.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width: 40px !important; height: 40px !important; }
				<?php } else { ?>
					.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width: 50px !important; height: 50px !important; }
				<?php } ?>
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
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
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-cube
				{
					position: relative;
					transform: rotateZ(45deg);
					-o-transform: rotateZ(45deg);
					-ms-transform: rotateZ(45deg);
					-webkit-transform: rotateZ(45deg);
					-moz-transform: rotateZ(45deg);
				}
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-cube
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
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-cube:before
				{
					content: "";
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					background-color: <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_L_C); ?>;
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
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-c2
				{
					transform: scale(1.1) rotateZ(90deg);
					-o-transform: scale(1.1) rotateZ(90deg);
					-ms-transform: scale(1.1) rotateZ(90deg);
					-webkit-transform: scale(1.1) rotateZ(90deg);
					-moz-transform: scale(1.1) rotateZ(90deg);
				}
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-c3
				{
					transform: scale(1.1) rotateZ(180deg);
					-o-transform: scale(1.1) rotateZ(180deg);
					-ms-transform: scale(1.1) rotateZ(180deg);
					-webkit-transform: scale(1.1) rotateZ(180deg);
					-moz-transform: scale(1.1) rotateZ(180deg);
				}
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-c4
				{
					transform: scale(1.1) rotateZ(270deg);
					-o-transform: scale(1.1) rotateZ(270deg);
					-ms-transform: scale(1.1) rotateZ(270deg);
					-webkit-transform: scale(1.1) rotateZ(270deg);
					-moz-transform: scale(1.1) rotateZ(270deg);
				}
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-c2:before
				{
					animation-delay: 0.35s;
					-o-animation-delay: 0.35s;
					-ms-animation-delay: 0.35s;
					-webkit-animation-delay: 0.35s;
					-moz-animation-delay: 0.35s;
				}
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-c3:before
				{
					animation-delay: 0.69s;
					-o-animation-delay: 0.69s;
					-ms-animation-delay: 0.69s;
					-webkit-animation-delay: 0.69s;
					-moz-animation-delay: 0.69s;
				}
				.cssload-thecube<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-c4:before
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
				.cssload-loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
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
					font-family: <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FF); ?> !important;
					text-transform: none !important;
					font-weight: 900;
					font-size:<?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FS); ?>px !important;
					color: <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_C); ?> !important;
					letter-spacing: 0.2em;
					margin-top:10px;
				}
				.cssload-loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?>::before, .cssload-loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?>::after
				{
					content: "";
					display: block;
					width: 15px;
					height: 15px;
					background: <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T2_BC); ?> !important;
					position: absolute;
					animation: cssload-load 0.81s infinite alternate ease-in-out;
					-o-animation: cssload-load 0.81s infinite alternate ease-in-out;
					-ms-animation: cssload-load 0.81s infinite alternate ease-in-out;
					-webkit-animation: cssload-load 0.81s infinite alternate ease-in-out;
					-moz-animation: cssload-load 0.81s infinite alternate ease-in-out;
				}
				.cssload-loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?>::before { top: 0; }
				.cssload-loader<?php echo esc_attr($Rich_Web_VSlider_ID); ?>::after { bottom: 0; }
				@keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
				@-o-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
				@-ms-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
				@-moz-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
				@-webkit-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
				/*Second*/
				#inTurnFadingTextG<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { width:100%; margin:auto; text-align:center; }
				.inTurnFadingTextG<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					font-size: <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FS); ?>px !important;
					font-family:<?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FF); ?> !important;
					color: <?php echo  esc_attr($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_C); ?> !important;
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
					#inTurnFadingTextG<?php echo esc_attr($Rich_Web_VSlider_ID); ?>_<?php echo esc_attr($key + 1); ?>
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
					0% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T2_AnC); ?>; }
					100% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_C); ?> !important; }
				}
				@-o-keyframes bounce_inTurnFadingTextG
				{
					0% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T2_AnC); ?>; }
					100% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_C); ?> !important; }
				}
				@-ms-keyframes bounce_inTurnFadingTextG
				{
					0% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T2_AnC); ?>; }
					100% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_C); ?> !important; }
				}
				@-webkit-keyframes bounce_inTurnFadingTextG
				{
					0% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T2_AnC); ?>; }
					100% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_C); ?> !important; }
				}
				@-moz-keyframes bounce_inTurnFadingTextG
				{
					0% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T2_AnC); ?>; }
					100% { color:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_C); ?> !important; }
				}
				/*Third text*/
				.cssload-preloader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { position: relative; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 10; }
				.cssload-preloader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> > .cssload-preloader<?php echo esc_attr($Rich_Web_VSlider_ID); ?>-box
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
				.cssload-preloader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-preloader<?php echo esc_attr($Rich_Web_VSlider_ID); ?>-box > div
				{
					position: relative;
					width: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FS*2); ?>px;
					height: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FS*2); ?>px;
					background: rgb(204,204,204);
					float: left;
					text-align: center;
					line-height: 2;
					font-size: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FS); ?>px !important;
					font-family:<?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FF); ?> !important;
					color: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_C); ?> !important;
				}
				<?php foreach($text_array as $key=>$v) { ?>
					.cssload-preloader<?php echo esc_attr($Rich_Web_VSlider_ID); ?> .cssload-preloader<?php echo esc_attr($Rich_Web_VSlider_ID); ?>-box > div:nth-child(<?php echo esc_attr($key + 1); ?>)
					{
						background: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?> !important;
						margin-right: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_FS); ?>px !important;
						animation: cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?> 690ms ease <?php esc_attr($str_sum); ?>ms infinite alternate;
						-o-animation: cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?> 690ms ease <?php esc_attr($str_sum); ?>ms infinite alternate;
						-ms-animation: cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?> 690ms ease <?php esc_attr($str_sum); ?>ms infinite alternate;
						-webkit-animation: cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?> 690ms ease <?php esc_attr($str_sum); ?>ms infinite alternate;
						-moz-animation: cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?> 690ms ease <?php esc_attr($str_sum); ?>ms infinite alternate;
					}
					<?php $str_sum=$str_sum+86.25; ?>
				<?php } ?>
				@keyframes cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					from { transform: scale(1.0) translateY(0px) rotateX(0deg); box-shadow: 0 0 0 rgba(0,0,0,0); }
					to {
						transform: scale(1.5) translateY(-24px) rotateX(45deg);
						box-shadow: 0 24px 39px <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?>;
						background: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?> !important;
					}
				}
				@-o-keyframes cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					from { -o-transform: scale(1.0) translateY(0px) rotateX(0deg); -o-box-shadow: 0 0 0 rgba(0,0,0,0); }
					to {
						-o-transform: scale(1.5) translateY(-24px) rotateX(45deg);
						-o-box-shadow: 0 24px 39px <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?>;
						background: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?> !important;
					}
				}
				@-ms-keyframes cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					from { -ms-transform: scale(1.0) translateY(0px) rotateX(0deg); -ms-box-shadow: 0 0 0 rgba(0,0,0,0); }
					to {
						-ms-transform: scale(1.5) translateY(-24px) rotateX(45deg);
						-ms-box-shadow: 0 24px 39px <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?>;
						background: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?> !important;
					}
				}
				@-webkit-keyframes cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					from { -webkit-transform: scale(1.0) translateY(0px) rotateX(0deg); -webkit-box-shadow: 0 0 0 rgba(0,0,0,0); }
					to {
						-webkit-transform: scale(1.5) translateY(-24px) rotateX(45deg);
						-webkit-box-shadow: 0 24px 39px <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?>;
						background: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?> !important;
					}
				}
				@-moz-keyframes cssload-movement<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					from { -moz-transform: scale(1.0) translateY(0px) rotateX(0deg); -moz-box-shadow: 0 0 0 rgba(0,0,0,0); }
					to {
						-moz-transform: scale(1.5) translateY(-24px) rotateX(45deg);
						-moz-box-shadow: 0 24px 39px <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?>;
						background: <?php echo  esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT_T3_BgC); ?> !important;
					}
				}
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					width:100%;
					height:100%;
					position:relative;
					overflow:hidden;
					background: #000;
					border: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BW);?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BType);?> <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BC);?>;
					box-sizing: content-box !important;
					-moz-box-sizing: content-box !important;
					-webkit-box-sizing: content-box !important;
					<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Type == "Type 1") { ?>
						-webkit-box-shadow: 0px 0px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-moz-box-shadow: 0px 0px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						box-shadow: 0px 0px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
					<?php } else if ($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Type == "Type 2") { ?>
						box-shadow:0px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh/2); ?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh); ?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col); ?> !important;
						-moz-box-shadow:0px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh/2); ?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh); ?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col); ?> !important;
						-webkit-box-shadow:0px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh/2); ?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh); ?>px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col); ?> !important;
					<?php } ?>
				}
				.RW_CONTENT_LEFT_RIGHT_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					position: relative;
					width: 100%;
					<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_Align == "center") { ?>
						text-align: center;
					<?php } else if($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_Align == "right") { ?>
						text-align: right;
					<?php } else { ?>
						text-align: left;
					<?php } ?>
				}
				.RW_SV_NSV_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					position:relative;
					max-width: 100% !important;
					width:<?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_Width);?>px;
					height:<?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_Height);?>px;
					position: relative;
					display: inline-block;
					text-align: initial !important;
				}
				<?php if ($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Type == "Type 3") { ?>
					.RW_SV_NSV_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:before
					{
						content: "";
						position: absolute;
						width: 95%;
						background: transparent;
						height: 100%;
						display: block;
						left: 50%;
						transform: translateX(-50%);
						-webkit-transform: translateX(-50%);
						-moz-transform: translateX(-50%);
						box-shadow: 0px 0px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 5px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-webkit-box-shadow: 0px 0px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 5px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-moz-box-shadow: 0px 0px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 5px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
					}
				<?php } ?>
				<?php if ($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Type == "Type 4") { ?>
					.RW_SV_NSV_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:before
					{
						content: "";
						position: absolute;
						top: 27px;
						right: 0px;
						width: 50%;
						background: transparent;
						height: 10px;
						transform: rotate(-2deg);
						-webkit-transform: rotate(-2deg);
						-moz-transform: rotate(-2deg);
						display: block;
						box-shadow: -4px -25px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-webkit-box-shadow: -4px -25px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-moz-box-shadow: -4px -25px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
					}
					.RW_SV_NSV_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:after
					{
						content: "";
						position: absolute;
						bottom: 20px;
						right: 0;
						width: 50%;
						background: transparent;
						height: 10px;
						transform: rotate(2deg);
						-webkit-transform: rotate(2deg);
						-moz-transform: rotate(2deg);
						display: block;
						box-shadow: -4px 20px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-webkit-box-shadow: -4px 20px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-moz-box-shadow: -4px 20px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
					}
				<?php } ?>
				<?php if ($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Type == "Type 5") { ?>
					.RW_SV_NSV_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:after
					{
						content: "";
						position: absolute;
						bottom: 0;
						left: 50%;
						transform: translateX(-50%);
						-webkit-transform: translateX(-50%);
						-moz-transform: translateX(-50%);
						width: 95%;
						background: transparent;
						height: 50px;
						display: block;
						box-shadow: 1px 7px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px  <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-webkit-box-shadow: 1px 7px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px  <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-moz-box-shadow: 1px 7px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px  <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
					}
				<?php } ?>
				<?php if ($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Type == "Type 6") { ?>
					.RW_SV_NSV_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:before
					{
						content: "";
						position: absolute;
						bottom: 15px;
						left: 8px;
						transform: rotate(-3deg);
						-webkit-transform: rotate(-3deg);
						-moz-transform: rotate(-3deg);
						width: 45%;
						background: transparent;
						height: 10px;
						display: block;
						box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-webkit-box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-moz-box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
					}
					.RW_SV_NSV_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:after
					{
						content: "";
						position: absolute;
						bottom: 15px;
						transform: rotate(3deg);
						-webkit-transform: rotate(3deg);
						-moz-transform: rotate(3deg);
						right: 8px;
						width: 45%;
						background: transparent;
						height: 10px;
						display: block;
						box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-webkit-box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-moz-box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
					}
				<?php } ?>
				<?php if ($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Type == "Type 7") { ?>
					.RW_SV_NSV_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:before
					{
						content: "";
						position: absolute;
						bottom: 15px;
						left: 8px;
						transform: rotate(-2deg);
						-webkit-transform: rotate(-2deg);
						-moz-transform: rotate(-2deg);
						width: 65%;
						background: transparent;
						height: 10px;
						display: block;
						box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-webkit-box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-moz-box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
					}
				<?php } ?>
				<?php if ($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Type == "Type 8") { ?>
					.RW_SV_NSV_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:before
					{
						content: "";
						position: absolute;
						bottom: 15px;
						right: 8px;
						transform: rotate(2deg);
						-webkit-transform: rotate(2deg);
						-moz-transform: rotate(2deg);
						width: 65%;
						background: transparent;
						height: 10px;
						display: block;
						box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-webkit-box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
						-moz-box-shadow: 4px 12px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh);?>px 2px <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_BSh_Col);?>;
					}
				<?php } ?>
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					width:100%;
					height:100%;
					margin: 0;
					padding: 0;
					position:relative;
					top:0;
					left:0;
				}
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li
				{
					float:left;
					display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
				    display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
				    display: -ms-flexbox;      /* TWEENER - IE 10 */
				    display: -webkit-flex;     /* NEW - Chrome */
				    display: flex;
				    flex-direction: row;
				    flex-wrap: wrap;
				    justify-content: center;
				    align-items: center;
				    -webkit-align-items: center; /* Safari 7.0+ */
					list-style-type: none;
					position:relative;
					width:<?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_GO_NS1_Width);?>px;
					height:100%;
					z-index: 1;
					margin: 0 !important;
					padding: 0 !important;
				}
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li > div
				{
					position:absolute;
					top:10px;
					left:20px;
					width: 82%;
					line-height: 0;
				}
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li > div h3
				{
					font-family: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_TO_NS1_FFamily);?>;
					font-size: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_TO_NS1_FSize);?>px;
					color: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_TO_NS1_Col);?>;
					line-height: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_TO_NS1_FSize);?>px;
					margin: 0 0 5px 0 !important;
				}
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li > div p
				{
					line-height: 1 !important;
				}
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li i
				{
					text-align:center;
					line-height:400px;
					display:block;
					width:100%;
					font-size:90px;
				}
				.RW_SV_Btns_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_IO_NS1_Arrow_Type == 'icon') { ?>
						padding: 10px;
						line-height: 1;
						text-align:center;
						color: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_IO_NS1_Col);?>;
						background:<?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_IO_NS1_BgCol);?>;
					<?php } else if($Rich_Web_VSlider_Eff[0]->Rich_Web_IO_NS1_Arrow_Type == 'image') { ?>
						width:<?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_IO_NS1_Width);?>px;
						height:<?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_IO_NS1_Height);?>px;
					<?php } ?>
					position:absolute;
					top:50%;
					z-index:100;
					-webkit-user-select: none;
					-moz-user-select: none; 
					-khtml-user-select: none; 
					-ms-user-select: none;
					-webkit-transition: all 0.1s ease;
					-moz-transition: all 0.1s ease;
					-o-transition: all 0.1s ease;
					-ms-transition: all 0.1s ease;
					transition: all 0.1s ease;
					cursor:pointer;
					z-index:100;
				}
				.RW_SV_Btns_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> i { font-style: normal !important; }
				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_IO_NS1_Arrow_Type == 'icon') { ?>
					.RW_SV_Btns_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:hover
					{
						background: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_IO_NS1_HovBgCol);?>;
						color: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PO_NS1_Hov_Col);?>;
					}
				<?php } ?>
				#RW_SV_Next_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					right:0px;
					transform: translate(100%, -50%);
					-webkit-transform: translate(100%, -50%);
					-moz-transform: translate(100%, -50%);
					-o-transform: translate(100%, -50%);
					-ms-transform: translate(100%, -50%);
					border-radius:7px 0px 0px 7px; 
				}
				#RW_SV_Previous_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					left:0px;
					transform: translate(-100%, -50%);
					-webkit-transform: translate(-100%, -50%);
					-moz-transform: translate(-100%, -50%);
					-o-transform: translate(-100%, -50%);
					-ms-transform: translate(-100%, -50%);
					border-radius:0px 7px 7px 0;
				}
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:hover #RW_SV_Next_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>, #RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>:hover #RW_SV_Previous_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> {
					transform: translate(0%, -50%);
					-webkit-transform: translate(0%, -50%);
					-moz-transform: translate(0%, -50%);
					-o-transform: translate(0%, -50%);
					-ms-transform: translate(0%, -50%);
				}
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>.active #RW_SV_Next_<?php echo  esc_html($Rich_Web_VSlider_ID);?>, #RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>.active #RW_SV_Previous_<?php echo  esc_html($Rich_Web_VSlider_ID);?>
				{
					/*transform: translate(0%, -50%);
					-webkit-transform: translate(0%, -50%);
					-moz-transform: translate(0%, -50%);
					-o-transform: translate(0%, -50%);
					-ms-transform: translate(0%, -50%);*/
				}
				#RW_Counter_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>
				{
					top: 10px;
					right:15px;
					z-index: 1;
					width:auto;
					position:absolute;
					
				}
				.RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { bottom: 10%; height:15px; position:relative; text-align:center; z-index: 1; display: block; }
				.RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul { width:100%; position: absolute; margin: 0; padding: 0; height: 100%; }
				.RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul li
				{
					position:relative;
					margin:0 !important;
					padding: 0 <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PO_NS1_PB);?>px !important;
					display: inline-block;
					position:relative;
					top:0;
					box-sizing:border-box !important;
				}
				.RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul li a{
					display:inline-block;
					width: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PO_NS1_Width);?>px;
					height: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PO_NS1_Height);?>px;
					background:<?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PO_NS1_Col);?>;
					border-radius:50%;
					opacity:0.8;
				}

				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_IO_NS1_Show == '') { ?>
					.RW_SV_Btns_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>{
						display: none !important;
					}
				<?php } ?>

				.RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul li.active a{
					width: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PO_NS1_Width+4);?>px;
					height: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PO_NS1_Height+4);?>px;
				}
				.RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul li:before { content: none; }
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li:before { content: none; }
				.RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul li.active a
				{
					position: relative;
					opacity:1;
					top:2px;
					box-shadow:rgba(0,0,0,0.1) 1px 1px 0px;
					-webkit-box-shadow:rgba(0,0,0,0.1) 1px 1px 0px;
					-moz-box-shadow:rgba(0,0,0,0.1) 1px 1px 0px;
					background:<?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PO_NS1_Cur_Col);?>;
				}
				
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul, .RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul li
				{
					-webkit-transition: all 0.3s cubic-bezier(1,.01,.32,1);
					-moz-transition: all 0.3s cubic-bezier(1,.01,.32,1);
					-o-transition: all 0.3s cubic-bezier(1,.01,.32,1);
					-ms-transition: all 0.3s cubic-bezier(1,.01,.32,1);
					transition: all 0.3s cubic-bezier(1,.01,.32,1);
				}
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li a.rvs-nv-play-video
				{
					position: relative;
					display: inline-block;
					outline: none !important;
					z-index: -1;
					
					
					padding: 6px 22px;
					line-height: 1;
					background:  $Rich_Web_VSlider_Eff[0]->Rich_Web_PIO_NS1_BgCol;?>;
					color: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PIO_NS1_Col);?>;
					border-radius: 8px;
					text-decoration: none;
					font-size: 30px;
					z-index: 99999;
				}
				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_PO_NS1_Show != "on"){ ?>
				.RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>{
					display: none !important;
				}
			<?php } ?>

				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li a.rvs-nv-play-video:before { content: "\25ba"; }
				#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li a.rvs-nv-play-video:hover
				{
					background: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PIO_NS1_HovBgCol);?>;
					color: <?php echo  esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_PIO_NS1_HovCol);?>;
				}
				
				@media screen and (max-width:450px){ 
					.RW_SV_Pagination_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> { 
						display: none !important; 
					} 
					.RW_SV_Slider_Title_Div_<?php echo esc_attr($Rich_Web_VSlider_ID); ?>>div{
						display: none !important;
					}
					#RW_SV_Slider_Wrap_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> ul#RW_SV_Slider_<?php echo esc_attr($Rich_Web_VSlider_ID); ?> li a.rvs-nv-play-video{
						font-size: 15px;
						padding: 3px 11px;
					}
				}
			</style>