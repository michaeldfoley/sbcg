<?php
/*
Template Name: Membership Payment Page
*/
?>
<?php get_header(); ?>
	<div id="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>				
		<div class="post noborder">
			<h1><?php the_title(); ?></h1>		
			<div class="postcontent">
				<?php the_content(); ?>
                <div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_6' >
                <form method='post' enctype='multipart/form-data'  id='gform_6'  action='/processPayment.php'>
                        <div class='gform_heading'>
                            <h3 class='gform_title'>Membership payment form</h3>
                            <span class='gform_description'></span>
                        </div>
                        <div class='gform_body'>
                            <ul id='gform_fields_6' class='gform_fields top_label description_below'><li id='field_6_1' class='gfield               gfield_contains_required' ><label class='gfield_label' for='input_6_1_3'>Name<span class='gfield_required'>*</span></label><div class='ginput_complex ginput_container' id='input_6_1'><span id='input_6_1_3_container' class='ginput_left'><input type='text' name='input_1.3' id='input_6_1_3' value='' tabindex='1' /><label for='input_6_1_3'>First</label></span><span id='input_6_1_6_container' class='ginput_right'><input type='text' name='input_1.6' id='input_6_1_6' value='' tabindex='2' /><label for='input_6_1_6'>Last</label></span><div class='gf_clear gf_clear_complex'></div></div></li><li id='field_6_3' class='gfield               gfield_contains_required' ><label class='gfield_label' for='input_6_3'>Email<span class='gfield_required'>*</span></label><div class='ginput_container'><input name='input_3' id='input_6_3' type='text' value='' class='medium'  tabindex='3'   /></div></li><li id='field_6_4' class='gfield               gfield_contains_required' ><label class='gfield_label' for='input_6_4'>Phone<span class='gfield_required'>*</span></label><div class='ginput_container'><input name='input_4' id='input_6_4' type='text' value='' class='medium' tabindex='4'  /></div></li><li id='field_6_5' class='gfield               gfield_contains_required' ><label class='gfield_label'>Are you a new member?<span class='gfield_required'>*</span></label><div class='ginput_container'><ul class='gfield_radio' id='input_6_5'><li class='gchoice_5_0'><input name='input_5' type='radio' value='Yes'  id='choice_5_0' tabindex='5'    /><label for='choice_5_0'>Yes</label></li><li class='gchoice_5_1'><input name='input_5' type='radio' value='Nope, I&#039;m back for more'  id='choice_5_1' tabindex='6'    /><label for='choice_5_1'>Nope, I'm back for more</label></li></ul></div></li><li id='field_6_7' class='gfield               gfield_contains_required' ><label class='gfield_label' for='input_6_7'>Membership type<span class='gfield_required'>*</span></label><div class='ginput_container'><select name='input_7' id='input_6_7'  class='medium gfield_select' tabindex='7' ><option value='100.00' >Family - $100</option><option value='75.00' >Individual - $75</option></select></div></li><li id='field_6_2' class='gfield               gfield_contains_required' ><label class='gfield_label' for='input_6_2_1'>Address<span class='gfield_required'>*</span></label><div class='ginput_complex ginput_container' id='input_6_2'><span class='ginput_full' id='input_6_2_1_container'><input type='text' name='input_2.1' id='input_6_2_1' value='' tabindex='8' /><label for='input_6_2_1' id='input_6_2_1_label'>Street Address</label></span><span class='ginput_full' id='input_6_2_2_container' ><input type='text' name='input_2.2' id='input_6_2_2' value='' tabindex='9' /><label for='input_6_2_2' id='input_6_2_2_label'>Address Line 2</label></span><span class='ginput_left' id='input_6_2_3_container'><input type='text' name='input_2.3' id='input_6_2_3' value='' tabindex='10' /><label for='input_6_2_3' id='input_6_2.3_label'>City</label></span><span class='ginput_right' id='input_6_2_4_container' ><input type='text' name='input_2.4' id='input_6_2_4' value='' tabindex='12'   /><label for='input_6_2_4' id='input_6_2_4_label'>State / Province / Region</label></span><span class='ginput_left' id='input_6_2_5_container'><input type='text' name='input_2.5' id='input_6_2_5' value='' tabindex='13' /><label for='input_6_2_5' id='input_6_2_5_label'>ZIP / Postal Code</label></span><span class='ginput_right' id='input_6_2_6_container' ><select name='input_2.6' id='input_6_2_6' tabindex='14' ><option value='' selected='selected'></option><option value='Afghanistan' >Afghanistan</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='American Samoa' >American Samoa</option><option value='Andorra' >Andorra</option><option value='Angola' >Angola</option><option value='Antigua and Barbuda' >Antigua and Barbuda</option><option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option><option value='Australia' >Australia</option><option value='Austria' >Austria</option><option value='Azerbaijan' >Azerbaijan</option><option value='Bahamas' >Bahamas</option><option value='Bahrain' >Bahrain</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Belarus' >Belarus</option><option value='Belgium' >Belgium</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bermuda' >Bermuda</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option><option value='Botswana' >Botswana</option><option value='Brazil' >Brazil</option><option value='Brunei' >Brunei</option><option value='Bulgaria' >Bulgaria</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodia' >Cambodia</option><option value='Cameroon' >Cameroon</option><option value='Canada' >Canada</option><option value='Cape Verde' >Cape Verde</option><option value='Cayman Islands' >Cayman Islands</option><option value='Central African Republic' >Central African Republic</option><option value='Chad' >Chad</option><option value='Chile' >Chile</option><option value='China' >China</option><option value='Colombia' >Colombia</option><option value='Comoros' >Comoros</option><option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option><option value='Congo, Republic of the' >Congo, Republic of the</option><option value='Costa Rica' >Costa Rica</option><option value='C&ocirc;te d&#039;Ivoire' >C&ocirc;te d'Ivoire</option><option value='Croatia' >Croatia</option><option value='Cuba' >Cuba</option><option value='Cyprus' >Cyprus</option><option value='Czech Republic' >Czech Republic</option><option value='Denmark' >Denmark</option><option value='Djibouti' >Djibouti</option><option value='Dominica' >Dominica</option><option value='Dominican Republic' >Dominican Republic</option><option value='East Timor' >East Timor</option><option value='Ecuador' >Ecuador</option><option value='Egypt' >Egypt</option><option value='El Salvador' >El Salvador</option><option value='Equatorial Guinea' >Equatorial Guinea</option><option value='Eritrea' >Eritrea</option><option value='Estonia' >Estonia</option><option value='Ethiopia' >Ethiopia</option><option value='Fiji' >Fiji</option><option value='Finland' >Finland</option><option value='France' >France</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Greece' >Greece</option><option value='Greenland' >Greenland</option><option value='Grenada' >Grenada</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guinea' >Guinea</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Honduras' >Honduras</option><option value='Hong Kong' >Hong Kong</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' >Indonesia</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kiribati' >Kiribati</option><option value='North Korea' >North Korea</option><option value='South Korea' >South Korea</option><option value='Kosovo' >Kosovo</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyzstan' >Kyrgyzstan</option><option value='Laos' >Laos</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Macedonia' >Macedonia</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Marshall Islands' >Marshall Islands</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldova' >Moldova</option><option value='Monaco' >Monaco</option><option value='Mongolia' >Mongolia</option><option value='Montenegro' >Montenegro</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='New Zealand' >New Zealand</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Norway' >Norway</option><option value='Northern Mariana Islands' >Northern Mariana Islands</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Palestine' >Palestine</option><option value='Panama' >Panama</option><option value='Papua New Guinea' >Papua New Guinea</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Poland' >Poland</option><option value='Portugal' >Portugal</option><option value='Puerto Rico' >Puerto Rico</option><option value='Qatar' >Qatar</option><option value='Romania' >Romania</option><option value='Russia' >Russia</option><option value='Rwanda' >Rwanda</option><option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option><option value='Saint Lucia' >Saint Lucia</option><option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Sao Tome and Principe' >Sao Tome and Principe</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Senegal' >Senegal</option><option value='Serbia and Montenegro' >Serbia and Montenegro</option><option value='Seychelles' >Seychelles</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Slovakia' >Slovakia</option><option value='Slovenia' >Slovenia</option><option value='Solomon Islands' >Solomon Islands</option><option value='Somalia' >Somalia</option><option value='South Africa' >South Africa</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Sudan, South' >Sudan, South</option><option value='Suriname' >Suriname</option><option value='Swaziland' >Swaziland</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria' >Syria</option><option value='Taiwan' >Taiwan</option><option value='Tajikistan' >Tajikistan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='Togo' >Togo</option><option value='Tonga' >Tonga</option><option value='Trinidad and Tobago' >Trinidad and Tobago</option><option value='Tunisia' >Tunisia</option><option value='Turkey' >Turkey</option><option value='Turkmenistan' >Turkmenistan</option><option value='Tuvalu' >Tuvalu</option><option value='Uganda' >Uganda</option><option value='Ukraine' >Ukraine</option><option value='United Arab Emirates' >United Arab Emirates</option><option value='United Kingdom' >United Kingdom</option><option value='United States' >United States</option><option value='Uruguay' >Uruguay</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Vatican City' >Vatican City</option><option value='Venezuela' >Venezuela</option><option value='Vietnam' >Vietnam</option><option value='Virgin Islands, British' >Virgin Islands, British</option><option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option><option value='Yemen' >Yemen</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option></select><label for='input_6_2_6' id='input_6_2_6_label'>Country</label></span><div class='gf_clear gf_clear_complex'></div></div></li><li id='field_6_6' class='gfield' ><label class='gfield_label' for='input_6_6'>Family members (please list names &amp; add ages for children)</label><div class='ginput_container'><textarea name='input_6' id='input_6_6' class='textarea medium' tabindex='15'   rows='10' cols='50'></textarea></div></li><li id='field_6_13' class='gfield      gfield_html gfield_html_formatted gfield_no_follows_desc' >In order to cover the cost of accepting credit cards, SBCG imposes a 2.95% surcharge, which is what we pay to process credit cards.  If you want to avoid the credit card surcharge, you can pay by check. Please send all checks to Tracey Kitzman, Friedman Law Group, 270 Lafayette Street, 1410, New York, NY 10012.  Happy Gardening! </li><li id='field_6_9' class='gfield               gfield_contains_required' ><label class='gfield_label' for='input_6_9'>Credit Card #<span class='gfield_required'>*</span></label><div class='ginput_container'><input name='input_9' id='input_6_9' type='text' value='' class='medium'  tabindex='16'   /></div></li><li id='field_6_11' class='gfield               gfield_contains_required' ><label class='gfield_label' for='input_6_11'>Expiration Month<span class='gfield_required'>*</span></label><div class='ginput_container'><input name='input_11' id='input_6_11' type='text' value='' class='small'  tabindex='17'   /></div><div class='gfield_description'>02 for February, e.g.</div></li><li id='field_6_12' class='gfield               gfield_contains_required' ><label class='gfield_label' for='input_6_12'>Expiration Year<span class='gfield_required'>*</span></label><div class='ginput_container'><input name='input_12' id='input_6_12' type='text' value='' class='small'  tabindex='18'   /></div><div class='gfield_description'>Four-characters, e.g. 2015</div></li><li id='field_6_10' class='gfield               gfield_contains_required' ><label class='gfield_label' for='input_6_10'>CVV2 Code<span class='gfield_required'>*</span></label><div class='ginput_container'><input name='input_10' id='input_6_10' type='text' value='' class='small'  tabindex='19'   /></div></li>
                            </ul></div>
        <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_6' class='button gform_button' value='Submit' tabindex='20' onclick='if(window["gf_submitting_6"]){return false;}  window["gf_submitting_6"]=true; '/>
            <input type='hidden' class='gform_hidden' name='is_submit_6' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='6' />
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_6' value='WyJhOjA6e30iLCIzMmJhMDBlNGUwZjI5NzcxZGJiNTE2Mzg5MjBmZDk3MiJd' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_6' id='gform_target_page_number_6' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_6' id='gform_source_page_number_6' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
            
        </div>
                        </form>
                        </div><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [6, 1]) } ); </script>
			</div><!-- /Postcontent -->
		</div><!-- /Post -->
		<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>	
	</div><!-- End Main -->			
<?php get_sidebar(); ?>	
<?php get_footer(); ?>