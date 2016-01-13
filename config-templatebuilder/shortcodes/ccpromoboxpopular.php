<?php
/**
 * Textblock
 * Shortcode which creates a text element wrapped in a div
 */

if ( !class_exists( 'cc_sc_promoboxpopular' ) )
{
	class cc_sc_promoboxpopular extends aviaShortcodeTemplate
	{
			/**
			 * Create the config array for the shortcode button
			 */
			function shortcode_insert_button()
			{
				$this->config['name']			= __('CC Promo Box Popular', 'avia_framework' );
				$this->config['tab']			= __('Content Elements', 'avia_framework' );
				$this->config['icon']			= AviaBuilder::$path['imagesURL']."sc-promobox.png";
				$this->config['order']			= 50;
				$this->config['target']			= 'avia-target-insert';
				$this->config['shortcode'] 		= 'cc_promobox-popular';
				$this->config['tooltip'] 	    = __('Creates a notification box with call to action button', 'avia_framework' );
			}

			/**
			 * Popup Elements
			 *
			 * If this function is defined in a child class the element automatically gets an edit button, that, when pressed
			 * opens a modal window that allows to edit the element properties
			 *
			 * @return void
			 */
			function popup_elements()
			{
				$this->elements = array(
					
					array(
							"type" 	=> "tab_container", 'nodescription' => true
						),

array(
							"type" 	=> "tab",
							"name"  => __("1st Content" , 'avia_framework'),
							'nodescription' => true
),

array(	"name" 	=> __("Main Content Title", 'avia_framework' ),
							"desc" 	=> __("This is the content title for the 1st credit card", 'avia_framework' ),
				            "id" 	=> "main_contenttitle",
				            "type" 	=> "input",
				            "std" => "Main Title Goes here"),

array(	"name" 	=> __("1st Content Title", 'avia_framework' ),
							"desc" 	=> __("This is the content title for the 1st credit card", 'avia_framework' ),
				            "id" 	=> "first_contenttitle",
				            "type" 	=> "input",
				            "std" => "1st Credit card title goes here"),

array(
							"name" 	=> __("1st Content",'avia_framework' ),
							"desc" 	=> __("Enter some content for popular credit card",'avia_framework' ),
							"id" 	=> "first_content",
							"type" 	=> "tiny_mce",
							"std" 	=> __("Put your 1st credit card text here", "avia_framework" )),
							
array(	"name" 	=> __("1st Image URL", 'avia_framework' ),
							"desc" 	=> __("This is the image URL for the 1st credit card", 'avia_framework' ),
				            "id" 	=> "first_imgurl",
				            "type" 	=> "input",
				            "std" => "http://"),	
													
													
array(	"name" 	=> __("1st Button Label", 'avia_framework' ),
							"desc" 	=> __("This is the text that appears on your 1st button.", 'avia_framework' ),
				            "id" 	=> "first_label",
				            "type" 	=> "input",				            
				            "std" => "Click me"),			
array(
							"name" 	=> __("1st Button Link?", 'avia_framework' ),
							"desc" 	=> __("Where should your 1st button link to? Note: key in relative path", 'avia_framework' ),
							"id" 	=> "first_link",
							"type" 	=> "input",				           							
							"std" 	=> "/xxx/xxx"),

					array(
							"name" 	=> __("1st Button Link Target", 'avia_framework' ),
							"desc" 	=> __("Key in _blank or _parent", 'avia_framework' ),
							"id" 	=> "first_link_target",
							"type" 	=> "input",
							"std" 	=> "_blank"),				            
							
							array(
							"name" 	=> __("Button Color", 'avia_framework' ),
							"desc" 	=> __("Choose a color for your button here", 'avia_framework' ),
							"id" 	=> "first_color",
							"type" 	=> "select",
							"std" 	=> "theme-color",				           
							"subtype" => array(
												__('Theme Color', 'avia_framework' )=>'theme-color',
												__('Theme Color Subtle', 'avia_framework' )=>'theme-color-subtle',
												__('Blue', 'avia_framework' )=>'blue',
												__('Red',  'avia_framework' )=>'red',
												__('Green', 'avia_framework' )=>'green',
												__('Orange', 'avia_framework' )=>'orange',
												__('Aqua', 'avia_framework' )=>'aqua',
												__('Teal', 'avia_framework' )=>'teal',
												__('Purple', 'avia_framework' )=>'purple',
												__('Pink', 'avia_framework' )=>'pink',
												__('Silver', 'avia_framework' )=>'silver',
												__('Grey', 'avia_framework' )=>'grey',
												__('Black', 'avia_framework' )=>'black',
												__('Custom Color', 'avia_framework' )=>'custom',
												)),


					array(
							"name" 	=> __("Custom Background Color", 'avia_framework' ),
							"desc" 	=> __("Select a custom background color for your Button here", 'avia_framework' ),
							"id" 	=> "first_custom_bg",
							"type" 	=> "colorpicker",
							"std" 	=> "#444444",
							"required" => array('first_color','equals','custom')
						),

					array(
							"name" 	=> __("Custom Font Color", 'avia_framework' ),
							"desc" 	=> __("Select a custom font color for your Button here", 'avia_framework' ),
							"id" 	=> "first_custom_font",
							"type" 	=> "colorpicker",
							"std" 	=> "#ffffff",
							"required" => array('first_color','equals','custom')
						),


					array(
							"name" 	=> __("Button Size", 'avia_framework' ),
							"desc" 	=> __("Choose the size of your button here", 'avia_framework' ),
							"id" 	=> "first_size",
							"type" 	=> "select",
							"std" 	=> "large",				           
							"subtype" => array(
								__('Small',   'avia_framework' ) =>'small',
								__('Medium',  'avia_framework' ) =>'medium',
								__('Large',   'avia_framework' ) =>'large',
							)),
							
							array(
							"type" 	=> "close_div",
							'nodescription' => true
						),								

array(
							"type" 	=> "tab",
							"name"  => __("2nd Content" , 'avia_framework'),
							'nodescription' => true
),

array(	"name" 	=> __("2nd Content Title", 'avia_framework' ),
							"desc" 	=> __("This is the content title for the 2nd credit card", 'avia_framework' ),
				            "id" 	=> "second_contenttitle",
				            "type" 	=> "input",
				            "std" => "2nd Title Goes here"),

array(
							"name" 	=> __("2nd Content",'avia_framework' ),
							"desc" 	=> __("Enter some content for popular credit card",'avia_framework' ),
							"id" 	=> "second_content",
							"type" 	=> "tiny_mce",
							"std" 	=> __("Put your 2nd credit card text here", "avia_framework" )),
							
array(	"name" 	=> __("2nd Image URL", 'avia_framework' ),
							"desc" 	=> __("This is the image URL for the 2nd credit card", 'avia_framework' ),
				            "id" 	=> "second_imgurl",
				            "type" 	=> "input",
				            "std" => "http://"),																		
													
array(	"name" 	=> __("2nd Button Label", 'avia_framework' ),
							"desc" 	=> __("This is the text that appears on your 2nd button.", 'avia_framework' ),
				            "id" 	=> "second_label",
				            "type" 	=> "input",				            
				            "std" => "Click me"),			
array(
							"name" 	=> __("2nd Button Link?", 'avia_framework' ),
							"desc" 	=> __("Where should your 2nd button link to? Note: key in relative path", 'avia_framework' ),
							"id" 	=> "second_link",
							"type" 	=> "input",				            							
							"std" 	=> "/xxx/xxx"),

					array(
							"name" 	=> __("2nd Button Link Target", 'avia_framework' ),
							"desc" 	=> __("Key in _blank or _parent", 'avia_framework' ),
							"id" 	=> "second_link_target",
							"type" 	=> "input",
							"std" 	=> "_blank"),	
							
							array(
							"name" 	=> __("Button Color", 'avia_framework' ),
							"desc" 	=> __("Choose a color for your button here", 'avia_framework' ),
							"id" 	=> "second_color",
							"type" 	=> "select",
							"std" 	=> "theme-color",				           
							"subtype" => array(
												__('Theme Color', 'avia_framework' )=>'theme-color',
												__('Theme Color Subtle', 'avia_framework' )=>'theme-color-subtle',
												__('Blue', 'avia_framework' )=>'blue',
												__('Red',  'avia_framework' )=>'red',
												__('Green', 'avia_framework' )=>'green',
												__('Orange', 'avia_framework' )=>'orange',
												__('Aqua', 'avia_framework' )=>'aqua',
												__('Teal', 'avia_framework' )=>'teal',
												__('Purple', 'avia_framework' )=>'purple',
												__('Pink', 'avia_framework' )=>'pink',
												__('Silver', 'avia_framework' )=>'silver',
												__('Grey', 'avia_framework' )=>'grey',
												__('Black', 'avia_framework' )=>'black',
												__('Custom Color', 'avia_framework' )=>'custom',
												)),


					array(
							"name" 	=> __("Custom Background Color", 'avia_framework' ),
							"desc" 	=> __("Select a custom background color for your Button here", 'avia_framework' ),
							"id" 	=> "second_custom_bg",
							"type" 	=> "colorpicker",
							"std" 	=> "#444444",
							"required" => array('second_color','equals','custom')
						),

					array(
							"name" 	=> __("Custom Font Color", 'avia_framework' ),
							"desc" 	=> __("Select a custom font color for your Button here", 'avia_framework' ),
							"id" 	=> "second_custom_font",
							"type" 	=> "colorpicker",
							"std" 	=> "#ffffff",
							"required" => array('second_color','equals','custom')
						),


					array(
							"name" 	=> __("Button Size", 'avia_framework' ),
							"desc" 	=> __("Choose the size of your button here", 'avia_framework' ),
							"id" 	=> "second_size",
							"type" 	=> "select",
							"std" 	=> "large",
							"subtype" => array(
								__('Small',   'avia_framework' ) =>'small',
								__('Medium',  'avia_framework' ) =>'medium',
								__('Large',   'avia_framework' ) =>'large',
							)),
							
							array(
							"type" 	=> "close_div",
							'nodescription' => true
						),		
						
						array(
							"type" 	=> "tab",
							"name"  => __("3rd Content" , 'avia_framework'),
							'nodescription' => true
),

array(	"name" 	=> __("3rd Content Title", 'avia_framework' ),
							"desc" 	=> __("This is the content title for the 3rd credit card", 'avia_framework' ),
				            "id" 	=> "third_contenttitle",
				            "type" 	=> "input",
				            "std" => "3rd Title Goes here"),

array(
							"name" 	=> __("3rd Content",'avia_framework' ),
							"desc" 	=> __("Enter some content for popular credit card",'avia_framework' ),
							"id" 	=> "third_content",
							"type" 	=> "tiny_mce",
							"std" 	=> __("Put your 3rd credit card text here", "avia_framework" )),
							
array(	"name" 	=> __("3rd Image URL", 'avia_framework' ),
							"desc" 	=> __("This is the image URL for the 3rd credit card", 'avia_framework' ),
				            "id" 	=> "third_imgurl",
				            "type" 	=> "input",
				            "std" => "http://"),															
													
array(	"name" 	=> __("3rd Button Label", 'avia_framework' ),
							"desc" 	=> __("This is the text that appears on your 3rd button.", 'avia_framework' ),
				            "id" 	=> "third_label",
				            "type" 	=> "input",
				            "std" => "Click me"),			
array(
							"name" 	=> __("3rd Button Link?", 'avia_framework' ),
							"desc" 	=> __("Where should your 3rd button link to? Note: fill in with relative path", 'avia_framework' ),
							"id" 	=> "third_link",
							"type" 	=> "input",							
							"std" 	=> "/xxx/xxx"),

					array(
							"name" 	=> __("3rd Button Link Target?", 'avia_framework' ),
							"desc" 	=> __("Key in with _parent or _blank", 'avia_framework' ),
							"id" 	=> "third_link_target",
							"type" 	=> "input",
							"std" 	=> "_blank"),
							
							array(
							"name" 	=> __("Button Color", 'avia_framework' ),
							"desc" 	=> __("Choose a color for your button here", 'avia_framework' ),
							"id" 	=> "third_color",
							"type" 	=> "select",
							"std" 	=> "theme-color",
							"subtype" => array(
												__('Theme Color', 'avia_framework' )=>'theme-color',
												__('Theme Color Subtle', 'avia_framework' )=>'theme-color-subtle',
												__('Blue', 'avia_framework' )=>'blue',
												__('Red',  'avia_framework' )=>'red',
												__('Green', 'avia_framework' )=>'green',
												__('Orange', 'avia_framework' )=>'orange',
												__('Aqua', 'avia_framework' )=>'aqua',
												__('Teal', 'avia_framework' )=>'teal',
												__('Purple', 'avia_framework' )=>'purple',
												__('Pink', 'avia_framework' )=>'pink',
												__('Silver', 'avia_framework' )=>'silver',
												__('Grey', 'avia_framework' )=>'grey',
												__('Black', 'avia_framework' )=>'black',
												__('Custom Color', 'avia_framework' )=>'custom',
												)),


					array(
							"name" 	=> __("Custom Background Color", 'avia_framework' ),
							"desc" 	=> __("Select a custom background color for your Button here", 'avia_framework' ),
							"id" 	=> "third_custom_bg",
							"type" 	=> "colorpicker",
							"std" 	=> "#444444",
							"required" => array('third_color','equals','custom')
						),

					array(
							"name" 	=> __("Custom Font Color", 'avia_framework' ),
							"desc" 	=> __("Select a custom font color for your Button here", 'avia_framework' ),
							"id" 	=> "third_custom_font",
							"type" 	=> "colorpicker",
							"std" 	=> "#ffffff",
							"required" => array('third_color','equals','custom')
						),


					array(
							"name" 	=> __("Button Size", 'avia_framework' ),
							"desc" 	=> __("Choose the size of your button here", 'avia_framework' ),
							"id" 	=> "third_size",
							"type" 	=> "select",
							"std" 	=> "large",
							"subtype" => array(
								__('Small',   'avia_framework' ) =>'small',
								__('Medium',  'avia_framework' ) =>'medium',
								__('Large',   'avia_framework' ) =>'large',
							)),
							
							array(
							"type" 	=> "close_div",
							'nodescription' => true
						),																																		
						
					array(
							"type" 	=> "close_div",
							'nodescription' => true
						),


				);

			}

			/**
			 * Editor Element - this function defines the visual appearance of an element on the AviaBuilder Canvas
			 * Most common usage is to define some markup in the $params['innerHtml'] which is then inserted into the drag and drop container
			 * Less often used: $params['data'] to add data attributes, $params['class'] to modify the className
			 *
			 *
			 * @param array $params this array holds the default values for $content and $args.
			 * @return $params the return array usually holds an innerHtml key that holds item specific markup.
			 */
			function editor_element($params)
			{
				extract(av_backend_icon($params)); // creates $font and $display_char if the icon was passed as param "icon" and the font as "font"
				
				$params['class'] = "";
				$params['innerHtml']  = "";
				$params['innerHtml'] .= "<div class='avia_textblock avia_textblock_style'>";
				$params['innerHtml'] .= "	<div class='cc-promobox-popular'>";
				$params['innerHtml'] .= "	<div class='cc-promobox-popular-title'>".$params['args']['main_contenttitle']."</div>";
				
				$params['innerHtml'] .= "	<div class='cc-promobox-popular-container'>";
				$params['innerHtml'] .= "		<div class='cc-promobox-popular-cc-1sticon'><p>1st</p></div>";				
				$params['innerHtml'] .= "		<div class='cc-promobox-popular-image'><img src='".$params['args']['first_imgurl']."' alt=''  /></div>";
				$params['innerHtml'] .= "		<div data-update_with='content' class='cc-promobox-popular-content'><strong>".$params['args']['first_contenttitle']."</strong><p>".$params['args']['first_content']."</p></div>";
				$params['innerHtml'] .= "		<div class='avia_button_box avia_hidden_bg_box'>";
				$params['innerHtml'] .= "			<div ".$this->class_by_arguments('icon_select, color, size' ,$params['args']).">";
				$params['innerHtml'] .= "				<span ".$this->class_by_arguments('font' ,$font).">";
				$params['innerHtml'] .= "					<span data-update_with='icon_fakeArg' class='avia_button_icon'>".$display_char."</span>";
				$params['innerHtml'] .= "				</span>";
				$params['innerHtml'] .= "				<span data-update_with='label' class='avia_iconbox_title' >".$params['args']['first_label']."</span>";
				$params['innerHtml'] .= "			</div>";
				$params['innerHtml'] .= "		</div>";
				$params['innerHtml'] .= "	</div>";
				$params['innerHtml'] .= "	</div>";
				
				$params['innerHtml'] .= "	<div class='cc-promobox-popular-image-separator'>&nbsp;</div>";
				
				$params['innerHtml'] .= "	<div class='cc-promobox-popular-container'>";
				$params['innerHtml'] .= "	<div ".$this->class_by_arguments('button' ,$params['args']).">";
				$params['innerHtml'] .= "		<div class='cc-promobox-popular-2ndicon'><p>2nd</p></div>";				
				$params['innerHtml'] .= "		<div class='cc-promobox-popular-image'><img src='".$params['args']['second_imgurl']."' alt=''  /></div>";
				$params['innerHtml'] .= "		<div data-update_with='content' class='cc-promobox-popular-content'><strong>".$params['args']['second_contenttitle']."</strong><p>".$params['args']['second_content']."</p></div>";
				$params['innerHtml'] .= "		<div class='avia_button_box avia_hidden_bg_box'>";
				$params['innerHtml'] .= "			<div ".$this->class_by_arguments('icon_select, color, size' ,$params['args']).">";
				$params['innerHtml'] .= "				<span ".$this->class_by_arguments('font' ,$font).">";
				$params['innerHtml'] .= "					<span data-update_with='icon_fakeArg' class='avia_button_icon'>".$display_char."</span>";
				$params['innerHtml'] .= "				</span>";
				$params['innerHtml'] .= "				<span data-update_with='label' class='avia_iconbox_title' >".$params['args']['second_label']."</span>";
				$params['innerHtml'] .= "			</div>";
				$params['innerHtml'] .= "		</div>";
				$params['innerHtml'] .= "	</div>";				
				$params['innerHtml'] .= "	</div>";
				
				$params['innerHtml'] .= "	<div class='cc-promobox-popular-image-separator'>&nbsp;</div>";
				
				$params['innerHtml'] .= "	<div class='cc-promobox-popular-container'>";				
$params['innerHtml'] .= "	<div ".$this->class_by_arguments('button' ,$params['args']).">";
				$params['innerHtml'] .= "		<div class='cc-promobox-popular-3rdicon'><p>3rd</p></div>";				
				$params['innerHtml'] .= "		<div class='cc-promobox-popular-image'><img src='".$params['args']['third_imgurl']."' alt=''  /></div>";
				$params['innerHtml'] .= "		<div data-update_with='content' class='cc-promobox-popular-content'><strong>".$params['args']['third_contenttitle']."</strong><p>".$params['args']['third_content']."</p></div>";
				$params['innerHtml'] .= "		<div class='avia_button_box avia_hidden_bg_box'>";
				$params['innerHtml'] .= "			<div ".$this->class_by_arguments('icon_select, color, size' ,$params['args']).">";
				$params['innerHtml'] .= "				<span ".$this->class_by_arguments('font' ,$font).">";
				$params['innerHtml'] .= "					<span data-update_with='icon_fakeArg' class='avia_button_icon'>".$display_char."</span>";
				$params['innerHtml'] .= "				</span>";
				$params['innerHtml'] .= "				<span data-update_with='label' class='avia_iconbox_title' >".$params['args']['third_label']."</span>";
				$params['innerHtml'] .= "			</div>";
				$params['innerHtml'] .= "		</div>";
				$params['innerHtml'] .= "	</div>";
				$params['innerHtml'] .= "	</div>";
								
				$params['innerHtml'] .= "</div>";																						

				return $params;
			}

			/**
			 * Frontend Shortcode Handler
			 *
			 * @param array $atts array of attributes
			 * @param string $content text within enclosing form of shortcode element
			 * @param string $shortcodename the shortcode found, when == callback name
			 * @return string $output returns the modified html string
			 */
			function shortcode_handler($atts, $content = "", $shortcodename = "", $meta = "")
			{
				$atts =  shortcode_atts(array(
											 'main_contenttitle' => 'Main content title',
											 'firstbutton' => 'yes',
											 'first_contenttitle' => 'First content title',
											 'first_content' => 'First content',
											 'first_label' => 'Click me',
			                                 'first_imgurl' => 'http://',
											 'first_link' => '',
			                                 'first_link_target' => '',
			                                 'first_color' => 'theme-color',
			                                 'first_custom_bg' => '#444444',
			                                 'first_custom_font' => '#ffffff',
			                                 'first_size' => 'small',	
											 'second_button' => 'yes',
											 'second_contenttitle' => 'Second content title',
											 'second_content' => 'Second content',
											 'second_label' => 'Click me',
			                                 'second_imgurl' => 'http://',
											 'second_link' => '',
			                                 'second_link_target' => '',
			                                 'second_color' => 'theme-color',
			                                 'second_custom_bg' => '#444444',
			                                 'second_custom_font' => '#ffffff',
			                                 'second_size' => 'small',	
											 'third_button' => 'yes',
											 'third_contenttitle' => 'Third content title',
											 'third_content' => 'Third content',
											 'third_label' => 'Click me',
			                                 'third_imgurl' => 'http://',
											 'third_link' => '',
			                                 'third_link_target' => '',
			                                 'third_color' => 'theme-color',
			                                 'third_custom_bg' => '#444444',
			                                 'third_custom_font' => '#ffffff',
			                                 'third_size' => 'small',                                 
			                                 ), $atts, $this->config['shortcode']);
											 
				extract($atts);						
											
				$output = "";
				$output.= "	<div class='cc-promobox-popular'>";
				
				$output.= "<div class='cc-promobox-popular-title'><p>".$main_contenttitle."</p></div>";
				
				$output.= "	<div class='flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-0  el_before_av_three_fifth  avia-builder-el-first' id='cc-promobox-popular-icon'>";							
				$output.= "	<div class='cc-promobox-popular-1sticon'><p>1st</p></div>";				
				$output.= "	</div>";
				
				$output.= "	<div class='flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-3  el_after_av_one_fifth  el_before_av_one_fifth' id='cc-promo-popular-content-container'>";
				$output.= "	<div class='cc-promobox-popular-image'><img src='".$first_imgurl."' alt='' /></div>";
				$output.= "	<div class='cc-promobox-popular-content'><strong>".$first_contenttitle."</strong><p>".stripslashes(wpautop(trim($first_content)))."</p></div>";	
				$output.= "	</div>";
				
				$output.=" <div class='flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-5  el_after_av_three_fifth'>";  											
				$output.= "<div class='avia-button-wrap avia-button-left  avia-builder-el-1  avia-builder-el-first  '>";
				$output.= "<a class='avia-button  avia-icon_select-no avia-color-custom avia-size-medium avia-position-left ' href='".$first_link."' target='".$first_link_target."' style='background-color:".$first_custom_bg."; border-color:#ff9933; color:".$first_custom_font.";' ><span class='cc-promobutton'>".$first_label."</span></a></div>";
				$output.= "</div>";
				
				$output.= "<div class='hr hr-default  avia-builder-el-7  el_after_av_one_fifth'><span class='hr-inner '><span class='hr-inner-style'></span></span></div>";
				
				$output.= "	<div class='flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-0  el_before_av_three_fifth  avia-builder-el-first' id='cc-promobox-popular-icon'>";
				$output.= "	<div class='cc-promobox-popular-2ndicon'><p>2nd</p></div>";
				$output.= "</div>";												
				
				$output.= "	<div class='flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-3  el_after_av_one_fifth  el_before_av_one_fifth'>";
				$output.= "	<div class='cc-promobox-popular-image'><img src='".$second_imgurl."' alt='' /></div>";
				$output.= "	<div class='cc-promobox-popular-content'><strong>".$second_contenttitle."</strong><p>".stripslashes(wpautop(trim($second_content)))."</p></div>";		
				$output.= "</div>";
				
				$output.=" <div class='flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-5  el_after_av_three_fifth'>";   						
				$output.= "<div class='avia-button-wrap avia-button-left  avia-builder-el-1  avia-builder-el-first  '>";
				$output.= "<a class='avia-button  avia-icon_select-no avia-color-custom avia-size-medium avia-position-left ' href='".$second_link."' target='".$second_link_target."' style='background-color:".$second_custom_bg."; border-color:#ff9933; color:".$second_custom_font.";' ><span class='cc-promobutton'>".$second_label."</span></a></div>";				
				$output.= "</div>";
				
				$output.= "<div class='hr hr-default  avia-builder-el-7  el_after_av_one_fifth'><span class='hr-inner '><span class='hr-inner-style'></span></span></div>";

				$output.= "	<div class='flex_column av_one_fifth  flex_column_div av-zero-column-padding first  avia-builder-el-0  el_before_av_three_fifth  avia-builder-el-first' id='cc-promobox-popular-icon'>";
				$output.= "	<div class='cc-promobox-popular-3rdicon'><p>3rd</p></div>";
				$output.= "</div>";
				
				$output.= "	<div class='flex_column av_three_fifth  flex_column_div av-zero-column-padding   avia-builder-el-3  el_after_av_one_fifth  el_before_av_one_fifth'>";
				$output.= "	<div class='cc-promobox-popular-image'><img src='".$third_imgurl."' alt='' /></div>";
				$output.= "	<div class='cc-promobox-popular-content'><strong>".$third_contenttitle."</strong><p>".stripslashes(wpautop(trim($third_content)))."</p></div>";
				$output.= "</div>";
				
				$output.=" <div class='flex_column av_one_fifth  flex_column_div av-zero-column-padding   avia-builder-el-5  el_after_av_three_fifth'>";  
				$output.= "<div class='avia-button-wrap avia-button-left  avia-builder-el-1  avia-builder-el-first  '>";
				$output.= "<a class='avia-button  avia-icon_select-no avia-color-custom avia-size-medium avia-position-left ' href='".$third_link."' target='".$third_link_target."' style='background-color:".$third_custom_bg."; border-color:#ff9933; color:".$third_custom_font.";' ><span class='cc-promobutton'>".$third_label."</span></a></div>";
				$output.= "</div>";
				
				$output.= "	</div>";

				return do_shortcode($output);

			}

	}
}
