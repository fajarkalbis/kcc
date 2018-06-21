<?php
	include("header.php");
	include("header-menu.php");
	include("sidebar-kiri.php");
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Work Experience
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Personal Data</a></li>
        <li class="active">Update Work Experience</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Update Work Experience</h3>
					</div>
							<form class="form-horizontal">
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">Position Title</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Position Title">
										</div>
									</div>									
									<div class="form-group">
										<label class="col-sm-2 control-label">Company Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Company Name">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Joined Duration</label>
										<div class="col-sm-5">
											<select class="form-control">
												<option>January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>August</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option>December</option>
											 </select>	
										</div>
										<div class="col-sm-5">
											<input
											
											style="-moz-appearance:textfield;"
											type="number"
											min="1900"
											max="2099"
											step="1"
											class="form-control"
											placeholder="2018">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">To</label>
										<div class="col-sm-4">
											<select class="form-control">
												<option>January</option>
												<option>February</option>
												<option>March</option>
												<option>April</option>
												<option>May</option>
												<option>June</option>
												<option>July</option>
												<option>August</option>
												<option>September</option>
												<option>October</option>
												<option>November</option>
												<option>December</option>
											 </select>	
										</div>
										<div class="col-sm-5">
											<input 
											
												style="-moz-appearance:textfield;"
												type="number" 
												min="1900" 
												max="2099" 
												step="1" 
												class="form-control" 
												placeholder="2018">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Specialization</label>
										<div class="col-sm-10">
										<select class="form-control">
											<option title='Actuarial Science/Statistics' value='103'>Actuarial Science/Statistics</option>
											<option title='Advertising/Media Planning' value='100'>Advertising/Media Planning</option>
											<option title='Agriculture/Forestry/Fisheries' value='102'>Agriculture/Forestry/Fisheries</option>
											<option title='Architecture/Interior Design' value='180'>Architecture/Interior Design</option>
											<option title='Arts/Creative/Graphics Design' value='101'>Arts/Creative/Graphics Design</option>
											<option title='Aviation/Aircraft Maintenance' value='181'>Aviation/Aircraft Maintenance</option>
											<option title='Banking/Financial Services' value='135'>Banking/Financial Services</option>
											<option title='Biotechnology' value='182'>Biotechnology</option>
											<option title='Chemistry' value='183'>Chemistry</option>
											<option title='Clerical/Administrative Support' value='133'>Clerical/Administrative Support</option>
											<option title='Corporate Strategy/Top Management' value='148'>Corporate Strategy/Top Management</option>
											<option title='Customer Service' value='134'>Customer Service</option>
											<option title='Education' value='105'>Education</option>
											<option title='Engineering - Chemical' value='185'>Engineering - Chemical</option>
											<option title='Engineering - Civil/Construction/Structural' value='184'>Engineering - Civil/Construction/Structural</option>
											<option title='Engineering - Electrical' value='187'>Engineering - Electrical</option>
											<option title='Engineering - Electronics/Communication' value='186'>Engineering - Electronics/Communication</option>
											<option title='Engineering - Environmental/Health/Safety' value='189'>Engineering - Environmental/Health/Safety</option>
											<option title='Engineering - Industrial' value='200'>Engineering - Industrial</option>
											<option title='Engineering - Mechanical/Automotive' value='195'>Engineering - Mechanical/Automotive</option>
											<option title='Engineering - Oil/Gas' value='190'>Engineering - Oil/Gas</option>
											<option title='Engineering - Others' value='188'>Engineering - Others</option>
											<option title='Entertainment/Performing Arts' value='106'>Entertainment/Performing Arts</option>
											<option title='Finance - Audit/Taxation' value='130'>Finance - Audit/Taxation</option>
											<option title='Finance - Corporate Finance/Investment/Merchant Banking' value='132'> Finance - Corporate Finance/Investment/Merchant Banking </option>
											<option title='Finance - General/Cost Accounting ' value='131'>Finance - General/Cost Accounting</option>
											<option title='Food Technology/Nutritionist' value='108'>Food Technology/Nutritionist</option>
											<option title='Food/Beverage/Restaurant Service' value='107'>Food/Beverage/Restaurant Service</option>
											<option title='General Work (Housekeeper, Driver, Dispatch, Messenger, etc)' value='110'> General Work (Housekeeper, Driver, Dispatch, Messenger, etc) </option>
											<option title='Geology/Geophysics' value='109'>Geology/Geophysics</option>
											<option title='Healthcare - Doctor/Diagnosis' value='113'>Healthcare - Doctor/Diagnosis</option>
											<option title='Healthcare - Nurse/Medical Support & Assistant' value='111'>Healthcare - Nurse/Medical Support & Assistant</option>
											<option title='Healthcare - Pharmacy' value='112'>Healthcare - Pharmacy</option>
											<option title='Hotel Management/Tourism Services' value='114'>Hotel Management/Tourism Services</option>
											<option title='Human Resources' value='137'>Human Resources</option>
											<option title='IT/Computer - Hardware' value='192'>IT/Computer - Hardware</option>
											<option title='IT/Computer - Network/System/Database Admin' value='193'>IT/Computer - Network/System/Database Admin</option>
											<option title='IT/Computer - Software' value='191'>IT/Computer - Software</option>
											<option title='Journalist/Editor' value='104'>Journalist/Editor</option>
											<option title='Law/Legal Services' value='138'>Law/Legal Services</option>
											<option title='Logistics/Supply Chain' value='147'>Logistics/Supply Chain</option>
											<option title='Maintenance/Repair (Facilities & Machinery)' value='115'>Maintenance/Repair (Facilities & Machinery)</option>
											<option title='Manufacturing/Production Operations' value='194'>Manufacturing/Production Operations</option>
											<option title='Marketing/Business Development' value='139'>Marketing/Business Development</option>
											<option title='Merchandising' value='149'>Merchandising</option>
											<option title='Personal Care/Beauty/Fitness Service' value='118'>Personal Care/Beauty/Fitness Service</option>
											<option title='Process Design & Control/Instrumentation' value='196'>Process Design & Control/Instrumentation</option>
											<option title='Property/Real Estate' value='150'>Property/Real Estate</option>
											<option title='Public Relations/Communications' value='141'>Public Relations/Communications</option>
											<option title='Publishing/Printing' value='117'>Publishing/Printing</option>
											<option title='Purchasing/Inventory/Material & Warehouse Management' value='140'> Purchasing/Inventory/Material & Warehouse Management </option>
											<option title='Quality Control/Assurance' value='197'>Quality Control/Assurance</option>
											<option title='Quantity Surveying' value='198'>Quantity Surveying</option>
											<option title='Sales - Corporate' value='142'>Sales - Corporate</option>
											<option title='Sales - Engineering/Technical/IT' value='143'>Sales - Engineering/Technical/IT</option>
											<option title='Sales - Financial Services (Insurance, Unit Trust, etc)' value='144'> Sales - Financial Services (Insurance, Unit Trust, etc) </option>
											<option title='Sales - Retail/General' value='145'>Sales - Retail/General</option>
											<option title='Sales - Telesales/Telemarketing' value='151'>Sales - Telesales/Telemarketing</option>
											<option title='Science & Technology/Laboratory' value='199'>Science & Technology/Laboratory</option>
											<option title='Secretarial/Executive & Personal Assistant' value='146'>Secretarial/Executive & Personal Assistant</option>
											<option title='Security/Armed Forces/Protective Services' value='119'>Security/Armed Forces/Protective Services</option>
											<option title='Social & Counselling Service' value='120'>Social & Counselling Service</option>
											<option title='Technical & Helpdesk Support' value='152'>Technical & Helpdesk Support</option>
											<option title='Training & Development' value='121'>Training & Development</option>
											<option value="116">Others</option>
										</select>
										</div>
									</div>									
									<div class="form-group">
										<label class="col-sm-2 control-label">Country</label>
										<div class="col-sm-10">
										<select class="form-control" name="company_country_code" id="company_country_code">
											<option value="">Country</option>
											<option value="3">Afghanistan</option>
											<option value="6">Albania</option>
											<option value="59">Algeria</option>
											<option value="12">American Samoa</option>
											<option value="1">Andorra</option>
											<option value="9">Angola</option>
											<option value="5">Anguilla</option>
											<option value="10">Antarctica</option>
											<option value="4">Antigua and Barbuda</option>
											<option value="11">Argentina</option>
											<option value="7">Armenia</option>
											<option value="15">Aruba</option>
											<option value="14">Australia</option>
											<option value="13">Austria</option>
											<option value="16">Azerbaijan</option>
											<option value="30">Bahamas</option>
											<option value="23">Bahrain</option>
											<option value="19">Bangladesh</option>
											<option value="18">Barbados</option>
											<option value="34">Belarus</option>
											<option value="20">Belgium</option>
											<option value="35">Belize</option>
											<option value="25">Benin</option>
											<option value="26">Bermuda</option>
											<option value="31">Bhutan</option>
											<option value="28">Bolivia</option>
											<option value="17">Bosnia Hercegovina</option>
											<option value="33">Botswana</option>
											<option value="32">Bouvet Island</option>
											<option value="29">Brazil</option>
											<option value="101">British Indian Ocean Territory</option>
											<option value="27">Brunei Darussalam</option>
											<option value="22">Bulgaria</option>
											<option value="21">Burkina Faso</option>
											<option value="24">Burundi</option>
											<option value="111">Cambodia</option>
											<option value="45">Cameroon</option>
											<option value="36">Canada</option>
											<option value="50">Cape Verde</option>
											<option value="118">Cayman Islands</option>
											<option value="39">Central African Republic</option>
											<option value="205">Chad</option>
											<option value="44">Chile</option>
											<option value="46">China</option>
											<option value="51">Christmas Island</option>
											<option value="37">Cocos (Keeling) Islands</option>
											<option value="47">Colombia</option>
											<option value="113">Comoros</option>
											<option value="40">Congo</option>
											<option value="43">Cook Islands</option>
											<option value="48">Costa Rica</option>
											<option value="42">Cote D'ivoire</option>
											<option value="94">Croatia</option>
											<option value="49">Cuba</option>
											<option value="52">Cyprus</option>
											<option value="53">Czech Republic</option>
											<option value="56">Denmark</option>
											<option value="55">Djibouti</option>
											<option value="57">Dominica</option>
											<option value="58">Dominican Republic</option>
											<option value="214">East Timor</option>
											<option value="60">Ecuador</option>
											<option value="62">Egypt</option>
											<option value="201">EL Salvador</option>
											<option value="84">Equatorial Guinea</option>
											<option value="64">Eritrea</option>
											<option value="61">Estonia</option>
											<option value="66">Ethiopia</option>
											<option value="69">Falkland Islands (Malvinas)</option>
											<option value="71">Faroe Islands</option>
											<option value="68">Fiji</option>
											<option value="67">Finland</option>
											<option value="72">France</option>
											<option value="77">French Guiana</option>
											<option value="168">French Polynesia</option>
											<option value="206">French Southern Territories</option>
											<option value="73">Gabon</option>
											<option value="81">Gambia</option>
											<option value="76">Georgia</option>
											<option value="54">Germany</option>
											<option value="78">Ghana</option>
											<option value="79">Gibraltar</option>
											<option value="85">Greece</option>
											<option value="80">Greenland</option>
											<option value="75">Grenada</option>
											<option value="83">Guadeloupe</option>
											<option value="88">Guam</option>
											<option value="87">Guatemala</option>
											<option value="82">Guinea</option>
											<option value="89">Guinea-Bissau</option>
											<option value="90">Guyana</option>
											<option value="95">Haiti</option>
											<option value="92">Heard and Mc Donald Islands</option>
											<option value="93">Honduras</option>
											<option value="91">Hong Kong</option>
											<option value="96">Hungary</option>
											<option value="104">Iceland</option>
											<option value="100">India</option>
											<option value="97">Indonesia</option>
											<option value="103">Iran</option>
											<option value="102">Iraq</option>
											<option value="98">Ireland</option>
											<option value="99">Israel</option>
											<option value="105">Italy</option>
											<option value="106">Jamaica</option>
											<option value="108">Japan</option>
											<option value="107">Jordan</option>
											<option value="119">Kazakhstan</option>
											<option value="109">Kenya</option>
											<option value="112">Kiribati</option>
											<option value="115">Korea (North)</option>
											<option value="116">Korea (South)</option>
											<option value="117">Kuwait</option>
											<option value="110">Kyrgyzstan</option>
											<option value="120">Laos</option>
											<option value="129">Latvia</option>
											<option value="121">Lebanon</option>
											<option value="126">Lesotho</option>
											<option value="125">Liberia</option>
											<option value="130">Libyan Arab Jamahiriya</option>
											<option value="123">Liechtenstein</option>
											<option value="127">Lithuania</option>
											<option value="128">Luxembourg</option>
											<option value="140">Macau</option>
											<option value="136">Macedonia</option>
											<option value="134">Madagascar</option>
											<option value="148">Malawi</option>
											<option value="150">Malaysia</option>
											<option value="147">Maldives</option>
											<option value="137">Mali</option>
											<option value="145">Malta</option>
											<option value="135">Marshall Islands</option>
											<option value="142">Martinique</option>
											<option value="143">Mauritania</option>
											<option value="146">Mauritius</option>
											<option value="236">Mayotte</option>
											<option value="149">Mexico</option>
											<option value="70">Micronesia</option>
											<option value="132">Monaco</option>
											<option value="139">Mongolia</option>
											<option value="144">Montserrat</option>
											<option value="131">Morocco</option>
											<option value="151">Mozambique</option>
											<option value="138">Myanmar</option>
											<option value="152">Nambia</option>
											<option value="161">Nauru</option>
											<option value="160">Nepal</option>
											<option value="158">Netherlands</option>
											<option value="8">Netherlands Antilles</option>
											<option value="153">New Caledonia</option>
											<option value="163">New Zealand</option>
											<option value="157">Nicaragua</option>
											<option value="154">Niger</option>
											<option value="156">Nigeria</option>
											<option value="162">Niue</option>
											<option value="155">Norfolk Island</option>
											<option value="141">Northern Mariana Islands</option>
											<option value="159">Norway</option>
											<option value="164">Oman</option>
											<option value="165">Others</option>
											<option value="171">Pakistan</option>
											<option value="178">Palau</option>
											<option value="176">Palestinian Territory, Occupied</option>
											<option value="166">Panama</option>
											<option value="169">Papua New Guinea</option>
											<option value="179">Paraguay</option>
											<option value="167">Peru</option>
											<option value="170">Philippines</option>
											<option value="174">Pitcairn</option>
											<option value="172">Poland</option>
											<option value="177">Portugal</option>
											<option value="175">Puerto Rico</option>
											<option value="180">Qatar</option>
											<option value="133">Republic Of Moldova</option>
											<option value="181">Reunion</option>
											<option value="182">Romania</option>
											<option value="183">Russia</option>
											<option value="184">Rwanda</option>
											<option value="114">Saint Kitts And Nevis</option>
											<option value="122">Saint Lucia</option>
											<option value="227">Saint Vincent and The Grenadines</option>
											<option value="234">Samoa</option>
											<option value="196">San Marino</option>
											<option value="200">Sao Tome and Principe</option>
											<option value="185">Saudi Arabia</option>
											<option value="197">Senegal</option>
											<option value="187">Seychelles</option>
											<option value="195">Sierra Leone</option>
											<option value="190">Singapore</option>
											<option value="194">Slovakia</option>
											<option value="192">Slovenia</option>
											<option value="186">Solomon Islands</option>
											<option value="198">Somalia</option>
											<option value="238">South Africa</option>
											<option value="86">South Georgia And South Sandwich Islands</option>
											<option value="65">Spain</option>
											<option value="124">Sri Lanka</option>
											<option value="191">St. Helena</option>
											<option value="173">St. Pierre and Miquelon</option>
											<option value="188">Sudan</option>
											<option value="199">Suriname</option>
											<option value="193">Svalbard and Jan Mayen Islands</option>
											<option value="203">Swaziland</option>
											<option value="189">Sweden</option>
											<option value="41">Switzerland</option>
											<option value="202">Syrian Arab Republic</option>
											<option value="218">Taiwan</option>
											<option value="209">Tajikistan</option>
											<option value="219">Tanzania</option>
											<option value="208">Thailand</option>
											<option value="207">TOGO</option>
											<option value="210">Tokelau</option>
											<option value="213">Tonga</option>
											<option value="216">Trinidad and Tobago</option>
											<option value="212">Tunisia</option>
											<option value="215">Turkey</option>
											<option value="211">Turkmenistan</option>
											<option value="204">Turks and Caicos Islands</option>
											<option value="217">Tuvalu</option>
											<option value="221">Uganda</option>
											<option value="220">Ukraine</option>
											<option value="2">United Arab Emirates</option>
											<option value="74">United Kingdom</option>
											<option value="223">United States</option>
											<option value="222">United States Minor Outlying Islands</option>
											<option value="224">Uruguay</option>
											<option value="225">Uzbekistan</option>
											<option value="232">Vanuatu</option>
											<option value="226">Vatican City State (Holy See)</option>
											<option value="228">Venezuela</option>
											<option value="231">Vietnam</option>
											<option value="229">Virgin Islands (British)</option>
											<option value="230">Virgin Islands (U.S.)</option>
											<option value="233">Wallis and Futuna Islands</option>
											<option value="63">Western Sahara</option>
											<option value="235">Yemen</option>
											<option value="237">Yugoslavia</option>
											<option value="38">Zaire</option>
											<option value="239">Zambia</option>
											<option value="240">Zimbabwe</option>
										</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Industry</label>
										<div class="col-sm-10">
											<select class="form-control" name="industry_code" id="industry_code" data-placeholder="&nbsp;">
											<option title='Accounting / Audit / Tax Services' value='60'>Accounting / Audit / Tax Services</option>
			<option title='Advertising / Marketing / Promotion / PR' value='3'>Advertising / Marketing / Promotion / PR</option>
			<option title='Aerospace / Aviation / Airline' value='1'>Aerospace / Aviation / Airline</option>
			<option title='Agricultural / Plantation / Poultry / Fisheries' value='4'>Agricultural / Plantation / Poultry / Fisheries</option>
			<option title='Apparel' value='5'>Apparel</option>
			<option title='Architectural Services / Interior Designing' value='61'>Architectural Services / Interior Designing</option>
			<option title='Arts / Design / Fashion' value='2'>Arts / Design / Fashion</option>
			<option title='Automobile / Automotive Ancillary / Vehicle' value='6'>Automobile / Automotive Ancillary / Vehicle</option>
			<option title='Banking / Financial Services' value='7'>Banking / Financial Services</option>
			<option title='BioTechnology / Pharmaceutical / Clinical research' value='39'>BioTechnology / Pharmaceutical / Clinical research</option>
			<option title='Call Center / IT-Enabled Services / BPO' value='58'>Call Center / IT-Enabled Services / BPO</option>
			<option title='Chemical / Fertilizers / Pesticides' value='8'>Chemical / Fertilizers / Pesticides</option>
			<option title='Computer / Information Technology (Hardware)' value='9'>Computer / Information Technology (Hardware)</option>
			<option title='Computer / Information Technology (Software)' value='10'>Computer / Information Technology (Software)</option>
			<option title='Construction / Building / Engineering' value='11'>Construction / Building / Engineering</option>
			<option title='Consulting (Business & Management)' value='12'>Consulting (Business & Management)</option>
			<option title='Consulting (IT, Science, Engineering & Technical)' value='13'>Consulting (IT, Science, Engineering & Technical)</option>
			<option title='Consumer Products / FMCG' value='15'>Consumer Products / FMCG</option>
			<option title='Education' value='16'>Education</option>
			<option title='Electrical & Electronics' value='17'>Electrical & Electronics</option>
			<option title='Entertainment / Media' value='18'>Entertainment / Media</option>
			<option title='Environment / Health / Safety' value='19'>Environment / Health / Safety</option>
			<option title='Exhibitions / Event management / MICE' value='62'>Exhibitions / Event management / MICE</option>
			<option title='Food & Beverage / Catering / Restaurant' value='20'>Food & Beverage / Catering / Restaurant</option>
			<option title='Gems / Jewellery' value='63'>Gems / Jewellery</option>
			<option title='General & Wholesale Trading' value='23'>General & Wholesale Trading</option>
			<option title='Government / Defence' value='21'>Government / Defence</option>
			<option title='Grooming / Beauty / Fitness' value='22'>Grooming / Beauty / Fitness</option>
			<option title='Healthcare / Medical' value='24'>Healthcare / Medical</option>
			<option title='Heavy Industrial / Machinery / Equipment' value='25'>Heavy Industrial / Machinery / Equipment</option>
			<option title='Hotel / Hospitality' value='26'>Hotel / Hospitality</option>
			<option title='Human Resources Management / Consulting' value='27'>Human Resources Management / Consulting</option>
			<option title='Insurance' value='28'>Insurance</option>
			<option title='Journalism' value='29'>Journalism</option>
			<option title='Law / Legal' value='30'>Law / Legal</option>
			<option title='Library / Museum' value='31'>Library / Museum</option>
			<option title='Manufacturing / Production' value='35'>Manufacturing / Production</option>
			<option title='Marine / Aquaculture' value='33'>Marine / Aquaculture</option>
			<option title='Mining' value='34'>Mining</option>
			<option title='Non-Profit Organisation / Social Services / NGO' value='36'>Non-Profit Organisation / Social Services / NGO</option>
			<option title='Oil / Gas / Petroleum' value='37'>Oil / Gas / Petroleum</option>
			<option title='Polymer / Plastic / Rubber / Tyres' value='41'>Polymer / Plastic / Rubber / Tyres</option>
			<option title='Printing / Publishing' value='42'>Printing / Publishing</option>
			<option title='Property / Real Estate' value='43'>Property / Real Estate</option>
			<option title='R&D' value='45'>R&D</option>
			<option title='Repair & Maintenance Services' value='64'>Repair & Maintenance Services</option>
			<option title='Retail / Merchandise' value='46'>Retail / Merchandise</option>
			<option title='Science & Technology' value='47'>Science & Technology</option>
			<option title='Security / Law Enforcement' value='65'>Security / Law Enforcement</option>
			<option title='Semiconductor/Wafer Fabrication' value='59'>Semiconductor/Wafer Fabrication</option>
			<option title='Sports' value='49'>Sports</option>
			<option title='Stockbroking / Securities' value='50'>Stockbroking / Securities</option>
			<option title='Telecommunication' value='51'>Telecommunication</option>
			<option title='Textiles / Garment' value='52'>Textiles / Garment</option>
			<option title='Tobacco' value='53'>Tobacco</option>
			<option title='Transportation / Logistics' value='54'>Transportation / Logistics</option>
			<option title='Travel / Tourism' value='55'>Travel / Tourism</option>
			<option title='Utilities / Power' value='56'>Utilities / Power</option>
			<option title='Wood / Fibre / Paper' value='57'>Wood / Fibre / Paper</option>
			<option value="38">Others</option>
										</select>
										</div>
									</div>	
								
									<div class="form-group">
										<label class="col-sm-2 control-label">Position Level</label>
										<div class="col-sm-10">
											<select class="form-control" name="industry_code" id="industry_code" data-placeholder="&nbsp;">
												<option title='CEO / GM / Director / Senior Manager' value='1' > CEO / GM / Director / Senior Manager </option>
												<option title='Manager / Assistant Manager' value='2' > Manager / Assistant Manager </option>
												<option title='Supervisor / Coordinator' value='3' > Supervisor / Coordinator </option>
												<option title='Staff (non-management & non-supervisor)' value='4' > Staff (non-management & non-supervisor) </option>
												<option title='Fresh Grad / Less than 1 year experience' value='5' > Fresh Grad / Less than 1 year experience </option>
											</select>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-2 control-label">Monthly Salary</label>
										<div class="col-sm-3">
											<select class="form-control">
												<option value="">Currency</option>
												<option value="1">MYR</option>
												<option value="2">SGD</option>
												<option value="3">PHP</option>
												<option value="4">USD</option>
												<option value="5">INR</option>
												<option value="6">AUD</option>
												<option value="7">IDR</option>
												<option value="8">THB</option>
												<option value="9">HKD</option>
												<option value="10">EUR</option>
												<option value="11">CNY</option>
												<option value="12">JPY</option>
												<option value="13">GBP</option>
												<option value="14">VND</option>
												<option value="15">BDT</option>
												<option value="16">NZD</option>
											 </select>	
										</div>
										<div class="col-sm-7">
											<input style="-moz-appearance:textfield;" type="number" class="form-control">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-2 control-label">Experience Description</label>
										<div class="col-sm-10">
											<textarea class="form-control" height="250px"></textarea>	
										</div>
										
									</div>
									
								</div>
									
								<div class="box-footer">
									<a href="pengalaman.php" class="btn btn-default">Cancel</a>
									<!-- <button type="submit" class="btn btn-default">Cancel</button> -->
									<button type="submit" class="btn btn-success pull-right">Update</button>
								</div>
							</form>
				</div>
			</div>
		</div>
    </section>
    <!-- /.content -->
  </div>
<?php
	include("footer.php");	
?>
