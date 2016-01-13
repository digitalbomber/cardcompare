<?php
global $avia_config, $post_loop_count;

$post_loop_count= 1;
$post_class 	= "post-entry-".avia_get_the_id();

// check if we got posts to display:
if (have_posts()) :

	while (have_posts()) : the_post();
?>


		<article class='post-entry post-entry-type-page <?php echo $post_class; ?>' <?php avia_markup_helper(array('context' => 'entry')); ?>>

		<?php
        $image = get_field('card_visual');
        if( !empty($image) ): 				
        // vars
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
                        
        // thumbnail
		$thumb = $image['sizes']['thumbnail'];				
		endif;
				
		// Start collecting data
		$card_name = get_field('card_name');
		$button_url = get_field('button_url');
		$button_label = get_field('button_label');
		$credit_card_description = get_field('credit_card_description');
		$interest_rate = get_field('interest_rate');
		$balance_transfer = get_field('balance_transfer');
		$annual_fee = get_field('annual_fee');
		$feature_highlights = get_field('feature_highlights');
		$benefits_dining = get_field('benefits_dining');
		$benefits_entertainment = get_field('benefits_entertainment');
		$benefits_groceries = get_field('benefits_groceries');
		$benefits_shopping = get_field('benefits_shopping');
		$benefits_travel = get_field('benefits_travel');
		$benefits_balance_transfer = get_field('benefits_balance_transfer');
		$benefits_instalment_plan = get_field('benefits_instalment_plan');
		$minimum_monthly_income = get_field('minimum_monthly_income');
		$minimum_age_principal = get_field('minimum_age_principal');
		$minimum_age_suplementary = get_field('minimum_age_suplementary');
		$finance_charges = get_field('finance_charges');
		$goods_services_tax = get_field('goods_services_tax');
		$late_payment_charge = get_field('late_payment_charge');
		$cash_advance_amount = get_field('cash_advance_amount');
		$cash_advance_charge = get_field('cash_advance_charge');
		$cash_advance_interest = get_field('cash_advance_interest');
		$cashback_limit = get_field('cashback_limit');
		$rewards_points_expiry = get_field('rewards_points_expiry');
		
		// Strip off finance charges
		$finance_charges = str_replace("<ul>","",$finance_charges);
		$finance_charges = str_replace("</ul>","",$finance_charges);
		$finance_charges = str_replace("<li>","",$finance_charges);
		$finance_charges_clean = explode("</li>",$finance_charges);
		
		// Header start here
		echo '<div class="main_color container_wrap fullsize" style="background-color:#ffffff;">';
		echo '<div class="container">';
		echo '<div class="template-page content av-content-full alpha units">';
		echo '<div class="post-entry post-entry-type-page">';
        echo '<div class="entry-content-wrapper clearfix">'; 
		echo '<header class="entry-content-header">';
						
		echo '<div class="cc-card-header-container">';
		echo '<div style="border-radius:0px;" class="flex_column av_one_fourth flex_column_div av-zero-column-padding first  avia-builder-el-1  el_before_av_one_half  avia-builder-el-first  ">';
		echo '<div itemtype="https://schema.org/ImageObject" itemscope="itemscope" class="avia-image-container  av-styling-   avia-builder-el-2  avia-builder-el-no-sibling   avia-align-center ">';
		echo '<div class="avia-image-container-inner cc-card-visual">';
		echo '<img itemprop="contentURL" title="'.$title.'" alt="'.$alt.'" src="'.$url.'" class="avia_image"></div>';
		echo '</div></div>';
				
		echo '<div style="border-radius:0px; " class="flex_column av_one_half  flex_column_div av-zero-column-padding   avia-builder-el-3  el_after_av_one_fourth  el_before_av_one_fifth  ">';							
		echo '<div class="cc-card-header-content"><h1>'.$card_name.'</h1>';			
		echo '<p>'.$credit_card_description.'</p></div></div>';
		
		echo '<div class="flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-5  el_after_av_one_half  avia-builder-el-last">';
		echo '<div class="avia-button-wrap avia-button-left  avia-builder-el-1  avia-builder-el-first">';
		echo '<a class="avia-button  avia-icon_select-no avia-color-theme-color avia-size-large avia-position-left" href="'.$button_url.'" target="_blank"><span class="avia_iconbox_title">'.$button_label.'</span></a>';
		echo '</div></div>';
		echo '</div>';
		
		echo '</header>';
		echo '</div></div></div></div></div>';

		//Content 1 start here
		echo '<div class="main_color container_wrap fullsize" style="background-color:#333333;">';
		echo '<div class="container">';
		echo '<div class="template-page content av-content-full alpha units" id="cc-card-main-content-container-child2">';
		echo '<div class="post-entry post-entry-type-page">';
        echo '<div class="entry-content-wrapper clearfix">'; 
				   
		echo '<div class="cc-card-content-container">';
		echo '<div style="border-radius:0px; " class="flex_column av_one_third  flex_column_div av-zero-column-padding first  avia-builder-el-1  el_before_av_two_third  avia-builder-el-first  ">';
		echo '<table cellpadding="2" cellspacing="2" border="0" class="cc-card-table">';
		echo '<tr class="cc-card-row1">';
		echo '<td class="cc-card-col1">Interest Rate</td>';
		echo '<td class="cc-card-col2">'.$interest_rate.'</td>';
		echo '</tr>';
		echo '<tr class="cc-card-row1">';
		echo '<td class="cc-card-col1">Balance Transfer</td>';
		echo '<td class="cc-card-col2">'.$balance_transfer.'</td>';
		echo '</tr>';
		echo '<tr class="cc-card-row2">';
		echo '<td class="cc-card-col1">Annual Fee</td>';
		echo '<td class="cc-card-col2">'.$annual_fee.'</td>';
		echo '</tr>';
		echo '</table>';
		echo '</div>';

		echo '<div style="border-radius:0px; " class="flex_column av_two_third  flex_column_div av-zero-column-padding   avia-builder-el-3  el_after_av_one_third  avia-builder-el-last  ">';
		echo '<div class="cc-card-feature-container"><h3>Feature Highlights:</h3>';
		echo '<p>'.$feature_highlights.'</p>';
		echo '</div>';  
		echo '</div>';  
		   
		echo '</div>';
		echo '</div></div></div></div></div>';
		//End of content

		// Content 2 start here
		echo '<div class="av-layout-grid-container entry-content-wrapper main_color av-flex-cells av-border-top-bottom av-border-cells avia-builder-el-0  el_before_av_hr  avia-builder-el-first   container_wrap fullsize" id="av-layout-grid-1">';
				
		// Tab 1	
			
		echo '<div style="vertical-align:middle; padding:0px; " class="flex_cell no_margin av_one_third  avia-builder-el-1  el_before_av_cell_one_third  avia-builder-el-first    av-zero-padding cc-card-tab">';
		echo '<a href="#card-benefit" style="all:unset">';
		echo '<div class="flex_cell_inner">';
		echo '<p style="text-align: center;">Benefits</p>';
		echo '</div></a>';
		echo '</div>';
		
		// Tab 2
		echo '<div style="vertical-align:middle; padding:0; " class="flex_cell no_margin av_one_third  avia-builder-el-3  el_after_av_cell_one_third  el_before_av_cell_one_third    av-zero-padding cc-card-tab">';
		echo '<a href="#card-requirement" style="all:unset">';
		echo '<div class="flex_cell_inner">';
		echo '<p style="text-align: center;">Eligibility</p>';
		echo '</div></a>';
		echo '</div>';
		
		// Tab 3
		echo '<div style="vertical-align:middle; padding:0; " class="flex_cell no_margin av_one_third  avia-builder-el-5  el_after_av_cell_one_third  avia-builder-el-last    av-zero-padding cc-card-tab">';
		echo '<a href="#card-fees" style="all:unset">';
		echo '<div class="flex_cell_inner">';
		echo '<p style="text-align: center;">Other Information</p>';		
		echo '</div></a>';
		echo '<a name="card-benefit" id="card-benefit"></a>';
		echo '</div>';
				
		echo '</div>'; // Closing cc-card-content2-container				
		
		// Content 3 start here\		
		echo '<div class="main_color container_wrap fullsize" style="background-color:#fafafa;">';
		echo '<div class="container">';
		echo '<div class="template-page content av-content-full alpha units" id="cc-card-main-content3-container-child">';
		echo '<div class="post-entry post-entry-type-page">';
        echo '<div class="entry-content-wrapper clearfix">'; 
				
		echo '<div class="cc-card-content3-container">';
		echo '<h2>Benefits of '.$card_name.'</h2>';
		
		// Content Benefit left start here
		echo '<div style="border-radius:0px; " class="flex_column av_one_half  flex_column_div av-zero-column-padding first  avia-builder-el-1  el_before_av_one_half  avia-builder-el-first  ">';
		echo '<div class="avia-icon-list-container  avia-builder-el-2  avia-builder-el-no-sibling  ">';
				
		echo '<ul class="avia-icon-list avia-icon-list-left avia_animate_when_almost_visible avia_start_animation">';
		
		// Declare data array 
		$benefit_title_left = array("Dining", "Entertainment", "Groceries","Shopping");
		$benefit_icon_left = array("", "", "","");		
		$benefit_data_left = array ($benefits_dining,$benefits_entertainment,$benefits_groceries,$benefits_shopping);	
		
		// Start the item list loop here
		for ($x = 0; $x <= 3; $x++) {    		
			// Header item
			echo '<li class="avia_start_animation cc-card-benefit">';
			echo '<div class="iconlist_icon avia-font-entypo-fontello cc-card-benefit-icon"><span data-av_iconfont="fontello" data-av_icon="'.$benefit_icon_left[$x].'" aria-hidden="true" class="iconlist-char"></span></div>';		
			echo '<div class="iconlist_content_wrap">';
			echo '<header class="entry-content-header"><h3 itemprop="headline" class="iconlist_title cc-card-benefit-title">'.$benefit_title_left[$x].'</h3></header>';		
			// List item
			echo '<div itemprop="text" class="iconlist_content ">';
			echo $benefit_data_left[$x].'</div>';		
			echo '</div>';
			echo '</li>';				
		} 

		echo '</ul>';		
		echo '</div>';
		echo '</div>'; // End of Content Benefit left
		
		
		// Content Benefit Right start here
		echo '<div style="border-radius:0px; " class="flex_column av_one_half  flex_column_div av-zero-column-padding   avia-builder-el-3  el_after_av_one_half  avia-builder-el-last  ">';
		echo '<div class="avia-icon-list-container  avia-builder-el-2  avia-builder-el-no-sibling  ">';
				
		echo '<ul class="avia-icon-list avia-icon-list-left avia_animate_when_almost_visible avia_start_animation">';
		
		// Declare data array 		
		$benefit_title_right = array("Travel", "Balance Transfer", "Installment Plan");
		$benefit_icon_right = array("", "", "");
		$benefit_data_right = array ($benefits_travel,$benefits_balance_transfer,$benefits_instalment_plan);
		
		// Start the item list loop here
		for ($x = 0; $x <= 2; $x++) {    		
			// Header item
			echo '<li class="avia_start_animation cc-card-benefit">';
			echo '<div class="iconlist_icon avia-font-entypo-fontello cc-card-benefit-icon"><span data-av_iconfont="fontello" data-av_icon="'.$benefit_icon_right[$x].'" aria-hidden="true" class="iconlist-char"></span></div>';		
			echo '<div class="iconlist_content_wrap">';
			echo '<header class="entry-content-header"><h3 itemprop="headline" class="iconlist_title cc-card-benefit-title">'.$benefit_title_right[$x].'</h3></header>';		
			// List item
			echo '<div itemprop="text" class="iconlist_content ">';
			echo $benefit_data_right[$x].'</div>';		
			echo '</div>';
			echo '</li>';				
		} 

		echo '</ul>';		
		echo '</div>';
		echo '</div>'; // End of Content Benefit Right
		
		
		echo '</div>'; // End of cc-card-content3-container		
		echo '</div></div></div></div></div>';
		
		// Grid Content 4 and 5 start here
		echo '<div class="main_color container_wrap fullsize" style="background-color:#ffffff;">';
   		echo '<div class="av-layout-grid-container entry-content-wrapper main_color av-flex-cells av-border-top-bottom av-border-cells avia-builder-el-0  el_before_av_three_fourth  avia-builder-el-first   container_wrap sidebar_right cc-card-content4-and-5-container">';
		echo '<a name="card-requirement" id="card-requirement"></a>';
		echo '<a name="card-fees" id="card-fees"></a>';
		
		// Content 4 start here	
		echo '<div class="flex_cell no_margin av_one_third  avia-builder-el-1  el_before_av_cell_one_half  avia-builder-el-first   ">';
		echo '<div class="flex_cell_inner">'; 
		
		echo '<div class="cc-card-content4-container">';
		echo '<h3>Eligibility</h3>';
		echo '<div style="border-radius:0px; " class="av_three_fourth  flex_column_div av-zero-column-padding first  avia-builder-el-0  el_before_av_hr  avia-builder-el-first cc-card-content4-table">';
		echo '<div class="avia-data-table-wrap avia_responsive_table">';
		echo '<table itemtype="https://schema.org/Table" itemscope="itemscope" class="avia-table avia-data-table avia-table-1  avia-builder-el-0  el_before_av_hr  avia-builder-el-first  ">';
		echo '<tbody><tr class="cc-card-content4-row1">';
	    echo '<td class="cc-card-content4-col1">Min. monthly income</td><td class="cc-card-content4-col2">'.$minimum_monthly_income.'</td>';
		echo '</tr>';
		    echo '<tr class="cc-card-content4-row2"><td class="cc-card-content4-col1">Min. age for principal holder</td><td class="cc-card-content4-col2">'.$minimum_age_principal.'</td></tr>';
    echo '<tr class="cc-card-content4-row1"><td class="cc-card-content4-col1">Min. age for supplementary holder</td><td class="cc-card-content4-col2">'.$minimum_age_suplementary.'</td></tr>';
		echo '</tbody></table></div>';
		echo '</div>';
		
		echo '</div>'; // End of cc-card-content4-container
		
		echo '</div></div>';
		
		
		// Content 5 start here
		echo '<div class="flex_cell no_margin av_two_third  avia-builder-el-3  el_after_av_cell_one_half  avia-builder-el-last   ">';
		echo '<div class="flex_cell_inner">'; 
		
		echo '<div class="cc-card-content5-container">';
		echo '<h3>'.$card_name.' Information</h3>';
				
		// Table left start here
		echo '<div style="border-radius:0px; " class="flex_column av_one_half  flex_column_div av-zero-column-padding first  avia-builder-el-1  el_before_av_one_half  avia-builder-el-first  ">';
		echo '<div class="avia-data-table-wrap avia_responsive_table">';
		echo '<table itemtype="https://schema.org/Table" itemscope="itemscope" class="avia-table avia-data-table avia-table-1  avia-builder-el-0  el_before_av_hr  avia-builder-el-first  ">';
		echo '<tbody>';
		
		$l = count($finance_charges_clean);
		$l = $l-1;
		for($x=0; $x<$l; $x++){
			if($x==0){ $finance_charges_text="Finance charges";}else{ $finance_charges_text=""; }
			if(!empty($finance_charges_clean[$x])){				
				echo '<tr class="cc-card-content5-row1">';
           	 	echo '<td class="cc-card-content5-col1">'.$finance_charges_text.'</td><td class="cc-card-content5-col2">'.$finance_charges_clean[$x].'</td>';
				echo '</tr>';		
			}
		}
		
		echo '<tr class="cc-card-content5-row2"><td class="cc-card-content5-col1">Goods and service tax</td><td class="cc-card-content5-col2">'.$goods_services_tax.'</td></tr>';
	    echo '<tr class="cc-card-content5-row1"><td class="cc-card-content5-col1">Late payment</td><td class="cc-card-content5-col2">'.$late_payment_charge.'</td></tr>';
		echo '</tbody></table></div>';		
		echo '</div>'; // End of table left
		
		// Table Right start here
		echo '<div style="border-radius:0px; " class="flex_column av_one_half  flex_column_div av-zero-column-padding   avia-builder-el-3  el_after_av_one_half  avia-builder-el-last  ">';		
		echo '<div class="avia-data-table-wrap avia_responsive_table">';
		echo '<table itemtype="https://schema.org/Table" itemscope="itemscope" class="avia-table avia-data-table avia-table-1  avia-builder-el-0  el_before_av_hr  avia-builder-el-first  ">';	
		echo '<tbody><tr class="cc-card-content5-row1">';
		echo '<td class="cc-card-content5-col1">Cash advance amount</td><td class="cc-card-content5-col2">'.$cash_advance_amount.'</td></tr>';
		echo '<tr class="cc-card-content5-row2"><td class="cc-card-content5-col1">Cash advance charge</td><td class="cc-card-content5-col2">'.$cash_advance_charge.'</td></tr>';
		echo '<tr class="cc-card-content5-row1"><td class="cc-card-content5-col1">Cash advance interest</td><td class="cc-card-content5-col2">'.$cash_advance_interest.'</td></tr>';
		echo '<tr class="cc-card-content5-row2"><td class="cc-card-content5-col1">Cashback limit</td><td class="cc-card-content5-col2">'.$cashback_limit.'</td></tr>';
		echo '<tr class="cc-card-content5-row1"><td class="cc-card-content5-col1">Rewards point expiry</td><td class="cc-card-content5-col2">'.$rewards_points_expiry.'</td></tr>';
		echo '</tbody></table></div>';
		echo '</div>'; // End of table right
				
		echo '</div>'; // End of cc-card-content5-container
		
		echo '</div></div></div></div>';
		
		
		echo '<footer class="entry-footer">';
	
		
		echo '</footer>';

		?>
				
		</article><!--end post-entry-->


<?php
	$post_loop_count++;
	endwhile;
	else:
?>

    <article class="entry">
        <header class="entry-content-header">
            <h1 class='post-title entry-title'><?php _e('Nothing Found', 'avia_framework'); ?></h1>
        </header>

        <?php get_template_part('includes/error404'); ?>

        <footer class="entry-footer"></footer>
    </article>

<?php

	endif;
?>
