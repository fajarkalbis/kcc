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
       Education
        <small>Version 1.0.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Personal Data</a></li>
        <li class="active">Add Education</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="row">	
			<div class="col-md-12">
				<div class="box box-success">
					<div class="box-header with-border">
						<h3 class="box-title">Add Education</h3>
					</div>
							<form class="form-horizontal">
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-2 control-label">Institute/University</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Institusi/Universitas">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Graduation Date</label>
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
										<label class="col-sm-2 control-label">Qualification</label>
										<div class="col-sm-10">
											<select class="form-control">
												<option value="9">SMU</option>
												<option value="2">Associate Degree</option>
												<option value="4" selected="selected">Bachelor's Degree</option>
												<option value="5">Master's Degree/Post Graduate Degree</option>
												<option value="6">Doctorate</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Institute/University Location</label>
										<div class="col-sm-10">
											<select class="form-control" name="company_country_code" id="company_country_code">
											<option value="">Negara</option>
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
										<label class="col-sm-2 control-label">Field of Study</label>
										<div class="col-sm-10">
										<select class="form-control">
											<option value="2">Advertising/Media</option>
<option value="3">Agriculture/Aquaculture/Forestry</option>
<option value="5">Airline Operation/Airport Management</option>
<option value="4">Architecture</option>
<option value="1">Art/Design/Creative Multimedia</option>
<option value="6">Biology</option>
<option value="55">BioTechnology</option>
<option value="36">Business Studies/Administration/Management</option>
<option value="7">Chemistry</option>
<option value="54">Commerce</option>
<option value="8">Computer Science/Information Technology</option>
<option value="9">Dentistry</option>
<option value="15">Economics</option>
<option value="17">Education/Teaching/Training</option>
<option value="12">Engineering (Aviation/Aeronautics/Astronautics)</option>
<option value="101">Engineering (Bioengineering/Biomedical)</option>
<option value="13">Engineering (Chemical)</option>
<option value="14">Engineering (Civil)</option>
<option value="16">Engineering (Computer/Telecommunication)</option>
<option value="18">Engineering (Electrical/Electronic)</option>
<option value="24">Engineering (Environmental/Health/Safety)</option>
<option value="19">Engineering (Industrial)</option>
<option value="23">Engineering (Marine)</option>
<option value="21">Engineering (Material Science)</option>
<option value="20">Engineering (Mechanical)</option>
<option value="102">Engineering (Mechatronic/Electromechanical)</option>
<option value="22">Engineering (Metal Fabrication/Tool &amp; Die/Welding)</option>
<option value="103">Engineering (Mining/Mineral)</option>
<option value="25">Engineering (Others)</option>
<option value="26">Engineering (Petroleum/Oil/Gas)</option>
<option value="28">Finance/Accountancy/Banking</option>
<option value="27">Food &amp; Beverage Services Management</option>
<option value="104">Food Technology/Nutrition/Dietetics</option>
<option value="11">Geographical Science</option>
<option value="105">Geology/Geophysics</option>
<option value="106">History</option>
<option value="29">Hospitality/Tourism/Hotel Management</option>
<option value="30">Human Resource Management</option>
<option value="32">Humanities/Liberal Arts</option>
<option value="10">Journalism</option>
<option value="31">Law</option>
<option value="33">Library Management</option>
<option value="34">Linguistics/Languages</option>
<option value="35">Logistic/Transportation</option>
<option value="41">Maritime Studies</option>
<option value="49">Marketing</option>
<option value="37">Mass Communications</option>
<option value="38">Mathematics</option>
<option value="40">Medical Science</option>
<option value="39">Medicine</option>
<option value="42">Music/Performing Arts Studies</option>
<option value="43">Nursing</option>
<option value="107">Optometry</option>
<option value="47">Personal Services</option>
<option value="45">Pharmacy/Pharmacology</option>
<option value="108">Philosophy</option>
<option value="109">Physical Therapy/Physiotherapy</option>
<option value="46">Physics</option>
<option value="110">Political Science</option>
<option value="111">Property Development/Real Estate Management</option>
<option value="48">Protective Services &amp; Management</option>
<option value="112">Psychology</option>
<option value="100">Quantity Survey</option>
<option value="50">Science &amp; Technology</option>
<option value="51">Secretarial</option>
<option value="113">Social Science/Sociology</option>
<option value="114">Sports Science &amp; Management</option>
<option value="52">Textile/Fashion Design</option>
<option value="115">Urban Studies/Town Planning</option>
<option value="53">Veterinary</option>
<option value="44">Others</option>
</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Major</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" placeholder="Major">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">GPA/Grade</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" placeholder="GPA/Grade">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Additional Information</label>
										<div class="col-sm-10">
											<textarea class="form-control" ></textarea>	
										</div>
									</div>
									
									
								</div>
									
								<div class="box-footer">
									<a href="pendidikan.php" class="btn btn-default">Cancel</a>
									<!-- <button type="submit" class="btn btn-default">Cancel</button> -->
									<button type="submit" class="btn btn-success pull-right">Submit</button>
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
