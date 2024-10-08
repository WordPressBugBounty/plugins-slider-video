<div id="RW_Load_Content_Navigation_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>" style="<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_Loading_Show == "on") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
	<div class="center_content_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
		<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_Show == "on") { ?>
			<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T == "Type 1") { ?>
				<div class="RW_Loader_Frame_Navigation_VS RW_Loader_Frame_Navigation_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
					<div class="loader_Navigation1_VS loader_Navigation1_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>" id="loader_Navigation1_VS"></div>
					<div class="loader_Navigation2_VS loader_Navigation2_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>" id="loader_Navigation2_VS"></div>
					<div class="loader_Navigation3_VS loader_Navigation3_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>" id="loader_Navigation3_VS"></div>
					<div class="loader_Navigation4_VS" id="loader_Navigation4_VS"></div>
				</div>
			<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T == "Type 2") { ?>
				<div class="overlay-loader_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
					<div class="loader_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
						<div></div>
					</div>
				</div>
			<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T == "Type 3") { ?>
				<div class="windows8_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
					<div class="wBall" id="wBall_1">
						<div class="wInnerBall"></div>
					</div>
					<div class="wBall" id="wBall_2">
						<div class="wInnerBall"></div>
					</div>
					<div class="wBall" id="wBall_3">
						<div class="wInnerBall"></div>
					</div>
					<div class="wBall" id="wBall_4">
						<div class="wInnerBall"></div>
					</div>
					<div class="wBall" id="wBall_5">
						<div class="wInnerBall"></div>
					</div>
				</div>
			<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T == "Type 4") { ?>
				<div class="cssload-thecube_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
					<div class="cssload-cube cssload-c1"></div>
					<div class="cssload-cube cssload-c2"></div>
					<div class="cssload-cube cssload-c4"></div>
					<div class="cssload-cube cssload-c3"></div>
				</div>
			<?php } 
		} ?>
		<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_Show == "on") { ?>
			<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T == "Type 1") { ?>
				<div class="cssload-loader_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>"><?php echo esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT);?></div>
			<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T == "Type 2") { ?>
				<div id="inTurnFadingTextG_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
					<?php foreach($text_array as $key=>$v){ ?>
						<div id="inTurnFadingTextG_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>_<?php esc_attr($key+1); ?>" class="inTurnFadingTextG_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>"><?php echo esc_attr($v); ?></div>
					<?php } ?>
				</div>
			<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T == "Type 3") { ?>
				<div class="cssload-preloader_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
					<div class="cssload-preloader_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>-box">
						<?php foreach($text_array as $key=>$v){ ?>
							<div><?php echo esc_attr($v); ?></div>
						<?php } ?>
					</div>
				</div>
			<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T == "Type 4") { ?>
				<div class="RW_Loader_Text_Navigation_VS<?php echo esc_html($Rich_Web_VSlider_ID); ?>">
					<?php echo esc_html($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT);?>
				</div>
			<?php } ?>
		<?php } ?>
	</div>
</div>
<?php for($i=0;$i<count($Rich_Web_VSlider_Videos);$i++) {
	$link_vd_sl="";
	if(strpos($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img, 'youtube') > 0){
		$rest_vd_url = substr($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img, 0, -13);
		$link_vd_sl = $rest_vd_url.'maxresdefault.jpg';
		if (!@fopen("$link_vd_sl",'r')) { $link_vd_sl = $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img; }
	}else{
		$link_vd_sl = $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img;
	}
?>
	<img src="<?php echo esc_url($link_vd_sl);?>" class="rw_cs_img<?php echo esc_html($Rich_Web_VSlider_ID); ?>" style="display:none;">
<?php } ?>
<div id="cont<?php echo esc_html($Rich_Web_VSlider_ID); ?>" style="display:none;">
	<div class="container" style='width:auto;'>
		<div id="iview<?php echo esc_html($Rich_Web_VSlider_ID); ?>" style='max-width:100%;'>
			<?php
			for($i=0;$i<count($Rich_Web_VSlider_Videos);$i++) {
				if(strpos($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img, 'youtube') > 0)
				{
					$rest_vd_url = substr($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img, 0, -13);
					$link_vd_sl = $rest_vd_url.'maxresdefault.jpg';
					if (!@fopen("$link_vd_sl",'r')) { $link_vd_sl = $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img; }
				}
				else
				{
					$link_vd_sl = $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img;
				}
			$video_link = $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src.'?rel=0&amp';
			?>
			<div class="rw_iv_im<?php echo esc_html($Rich_Web_VSlider_ID); ?>"
			   <?php if(strpos($video_link, "mp4") && $link_vd_sl==""){ ?>
					data-iview:image="" data-iview:src="<?php echo esc_url($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src);?>?rel=0&amp"
					<?php } else { ?>
						data-iview:image="<?php echo esc_url($link_vd_sl);?>" 
						data-iview:src="<?php echo esc_url($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src);?>?rel=0&amp"
					<?php } ?>
				 data-iview:type="video" style='position:relative;'>
				<?php if (strpos($video_link, "mp4")) { ?>
                    <iframe id="video_iframe" src="" style='width:100%;height:100%;' frameborder="0" mozallowfullscreen allowFullScreen autoplay></iframe> 
			    <?php } else { ?>
                     <iframe id="video_iframe" src="" style='width:100%;height:100%;' frameborder="0" mozallowfullscreen allowFullScreen autoplay></iframe> 
			    <?php }?>
				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TitDesc_Type=='type1'){ ?>
					<div class="titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?> iview-caption caption1 titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?><?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>' data-x="250" data-y="100" data-width='150' data-height='50' data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style='font-size:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFS);?>px;font-family:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFF);?>;background:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TBgC);?>;color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC);?>;text-align:center;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title!=''){ ?>padding:6px;<?php } ?>'>
						<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>
					</div>
					<div class="Desc_Tot descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?> iview-caption caption2 descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?><?php echo esc_html($i+1); ?>"  data-x="400" data-y="150" data-width="250" data-height="50" data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style="background-color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_DBgC);?>;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc!=""){ ?>padding:6px;<?php } ?>">
						<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>
					</div>
				<?php } ?>
				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TitDesc_Type=='type2'){ ?>
					<div class="Desc_Tot descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_2 iview-caption caption7 descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_2<?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>' data-x="0" data-y="0" data-width="180" data-height="480" data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style='background-color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_DBgC);?>;overflow-x:hidden;'>
						<h3 class='titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_2 titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_2<?php echo esc_html($i+1); ?>' name='<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>' style='font-family:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFF);?>;color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC);?>'><?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?></h3><?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>
					</div>
				<?php } ?>
				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TitDesc_Type=='type3'){ ?>
					<div class="titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_3 iview-caption caption4 titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_3<?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>' data-x="50" data-y="80" data-width='150' data-height='50' data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style='font-size:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFS);?>px;font-family:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFF);?>;background:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TBgC);?>;color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC);?>;text-align:center;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title!=''){ ?>padding:6px;<?php } ?>'>
						<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>
					</div>
					<div class="Desc_Tot descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_3 iview-caption blackcaption descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_3<?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>' data-x="50" data-y="135" data-width='150' data-height='50' data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" data-easing="easeInOutElastic" style='background-color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_DBgC);?>;overflow-x:hidden;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc!=''){ ?>padding:6px;<?php } ?>'>
						<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>
					</div>
				<?php } ?>
				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TitDesc_Type=='type4'){ ?>
					<div class="titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_4 iview-caption caption5 titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_4<?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>' data-x="250" data-y="100" data-width='150' data-height='50' data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style='font-size:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFS);?>px;font-family:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFF);?>;background:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TBgC);?>;color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC);?>;text-align:center;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title!=''){ ?>padding:6px;<?php } ?>'>
						<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>
					</div>
					<div class="Desc_Tot descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_4 iview-caption caption6 descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_4<?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>' data-x="400" data-y="150" data-width='250' data-height='50' data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style='background-color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_DBgC);?>;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc!=''){ ?>padding:6px;<?php } ?>'>
						<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>
					</div>
				<?php } ?>
				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TitDesc_Type=='type5'){ ?>
					<div class="titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_5 iview-caption caption5 titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_5<?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>' data-x="250" data-y="100" data-width='150' data-height='50' data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style='font-size:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFS);?>px;font-family:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFF);?>;background:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TBgC);?>;color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC);?>;text-align:center;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title!=''){ ?>padding:6px;<?php } ?>'>
						<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>
					</div>
					<div class="Desc_Tot descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_5 iview-caption caption6 descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_5<?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>' data-x="400" data-y="150" data-width='250' data-height='50' data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style='background-color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_DBgC);?>;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc!=''){ ?>padding:6px;<?php } ?>'>
						<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>
					</div>
				<?php } ?>
				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TitDesc_Type=='type6'){ ?>
					<div class="titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_6 iview-caption caption4 titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_6<?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>' data-x="50" data-y="80" data-width='150' data-height='50' data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style='font-size:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFS);?>px;font-family:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFF);?>;background:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TBgC);?>;color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC);?>;text-align:center;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title!=''){ ?>padding:6px;<?php } ?>'>
						<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>
					</div>
					<div class="Desc_Tot descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_6 iview-caption blackcaption descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_6<?php echo esc_html($i+1); ?>"  data-x="50" data-y="135" data-width='150' data-height='50' data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" data-easing="easeInOutElastic" style='background-color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_DBgC);?>;overflow-x:hidden;<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc!=''){ ?>padding:6px;<?php } ?>'>
						<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>
					</div>
				<?php } ?>
				<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TitDesc_Type=='type7'){ ?>
					<div class="Desc_Tot descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_7 iview-caption caption7 descCol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_7<?php echo esc_html($i+1); ?>" name='<?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>' data-x="0" data-y="0" data-width="180" data-height="480" data-transition="<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_CapE);?>" style='background-color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_DBgC);?>;overflow-x:hidden;'>
						<h3 class='titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_7 titcol<?php echo esc_html($Rich_Web_VSlider_ID); ?>_7<?php echo esc_html($i+1); ?>' name='<?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?>' style='font-family:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFF);?>;color:<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC);?>'><?php echo wp_unslash(html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title));?></h3><?php echo wp_unslash(html_entity_decode(str_replace(chr(34), chr(39),$Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc)));?>
					</div>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<input type='text' style='display:none;' class='dirNavCS<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr($Rich_Web_VS_CS_AP);?>'>
<input type='text' style='display:none;' class='pauseOnHoveCS<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr($Rich_Web_VS_CS_HP);?>'>
<input type='text' style='display:none;' class='RandomStartCS<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr($Rich_Web_VS_CS_RS);?>'>
<input type='text' style='display:none;' class='controlNavCS<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_CN);?>'>
<input type='text' style='display:none;' class='controlNextPrevCS<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_NPB);?>'>
<input type='text' style='display:none;' class='navTumbsCS<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_NT);?>'>
<input type='text' style='display:none;' class='slWV<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SL_Width);?>'>
<input type='text' style='display:none;' class='slHV<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SL_Height);?>'>
<input type='text' style='display:none;' class='TFSV<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_html($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_TFS);?>'>
<input type='text' style='display:none;' class='countVIDEOS<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr(count($Rich_Web_VSlider_Videos));?>'>
<input type='text' style='display:none;' class='TitDescType<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_attr($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TitDesc_Type);?>'>
<input type='text' style='display:none;' class='Rich_Web_VSlider_ID<?php echo esc_html($Rich_Web_VSlider_ID); ?>' value='<?php echo esc_html($Rich_Web_VSlider_ID); ?>'>