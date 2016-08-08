<?php include('partials/_header.php'); ?>

<section class="home-opener">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h2>This digital online course
				with John C. Maxwell is your
				guide to experiencing your
				most fulfilling life.</h2>

				<p>
				<a href="" class="btn btn-highlight-solid mr-">Buy Now</a>
				<a href="" class="btn btn-reverse">More Info</a>
				</p>

			</div>
			<div class="col-sm-6">
				<!-- Image of John -->
			</div>
		</div>
	</div>
</section>

<section class="home-hook">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<div class="row home-icon-row">
					<div class="col-sm-3">
						<span class="home-icon home-icon-video"></span>
						<p class="text-center">Four 45-minute video sessions with John</p>
					</div>
					<div class="col-sm-3">
						<span class="home-icon home-icon-document"></span>
						<p class="text-center">Interactive and downloadable resources</p>
					</div>
					<div class="col-sm-3">
						<span class="home-icon home-icon-lifetime"></span>
						<p class="text-center">Lifetime access to all lessons and notes</p>
					</div>
					<div class="col-sm-3">
						<span class="home-icon home-icon-compass"></span>
						<p class="text-center">Pursue your purpose and multiply your impact</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
			
				<!-- Slick Slider -->
				<div class="home-testimonial-slider">
				  <div>your content</div>
				  <div>your content</div>
				  <div>your content</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="home-what">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<img src="assets/images/home-john-crowd.jpg" />
			</div>
			<div class="col-sm-4">
				<h2>What is Every Day With Purpose?</h2>
				<p>Every Day With Purpose is a 4-part online
				course designed to give you the tools you
				need to experience the most fulfilling life
				possible. You have gifts, no doubt, things
				you’re passionate about and stories you want
				to tell some day about your life. With practical
				teaching from John C. Maxwell, you’ll
				discover how you can take your purpose and
				turn it into a life of significance. The things
				you want most in your life are on the other
				side of discovering your significance.</p>
			</div>
		</div>
	</div>
</section>

<section class="home-quote m">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="quote">
					“Doing the right thing daily, compounds over time.” &mdash; John C. Maxwell
				</div>
			</div>
		</div>
	</div>
</section>

<section class="home-value">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h3>You’ll get:</h3>
				<ul>
		    	<li>Four 45-minute videos from John C. Maxwell</li>
		    	<li>Downloadable guides, slides and notes</li>
		    	<li>Lifetime access to all these lessons and notes</li>
		    	<li>And, special bonus content John hasn’t shared with anyone else</li>
		    </ul>

			</div>
			<div class="col-sm-6">
				<h3>You’ll experience:</h3>
				<ul>
					<li>An opportunity to put action behind your dreams</li>
					<li>A guide to teach you how to get what you want most</li>
					<li>Permission to pursue what you’re passionate about</li>
					<li>Wisdom to help you navigate the challenges you’ll face as you pursue your purpose</li>
					<li>Transformation from standard living to significant living</li>
				</ul>

			</div>
		</div>
	</div>
</section>	


<section class="home-purchase">
	<div class="container">

		<form action=""><?php // @todo Connect Payment Processing Form ?>

			<div class="row">
				<div class="col-sm-12">
					<h2 class="purchase-title">BUY EVERY DAY WITH PURPOSE</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3>Indiviual Pricing</h3>
							<div class="btn-group" data-toggle="buttons">
							  <label class="btn btn-primary active">
							    <input type="radio" name="paymentOptions" value="OnePayment" id="OnePayment" autocomplete="off" checked>1 Payment
							  </label>
							  <label class="btn btn-primary">
							    <input type="radio" name="paymentOptions" value="ThreePayment" id="ThreePayment" autocomplete="off">3 Payments
							  </label>
							</div>
							<h2 class="pricing">$199</h2>
							<p>Access for 1 person</p>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3>Indiviual Pricing</h3>
							<?php // @todo If Qty is filed out, it should make the Payment Options (1 or 3) disabled ?>
							<input type="number" name="qty" step="1" min="2" max="100" placeholder="2" />
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body p_x">


							<div class="row">

								<!-- Personal Information -->
								<div class="col-md-6">
									<div class=""><!-- user wrapper -->

										If you are an existing Maximum Impact Mentoring Subscriber, <a href="" class="personal-toggle">Login Here.</a>

										<div class="personal-existing" style="display: none;">
											<h3>Existing Member</h3>
											<div class="form-group">
												<label>Username</label>
												<input type="text" class="form-control" />
											</div>
											<div class="form-group">
												<label>Password</label>
												<input type="password" class="form-control" />
											</div>
										</div>

										<div class="personal-new">
											<h3>Your Information</h3>
											<div class="row">
												<div class="col-sm-6">
													<div class="form-group">
														<label>First Name</label>
														<input type="text" class="form-control" />
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
														<label>Last Name</label>
														<input type="text" class="form-control" />
													</div>
												</div>

												<div class="col-sm-12">
													<div class="form-group">
														<label>Email Address</label>
														<input type="email" class="form-control" />
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<label>Password</label>
														<input type="password" class="form-control" />
													</div>
												</div>

												<div class="col-sm-6">
													<div class="form-group">
														<label>Create Password</label>
														<input type="password" class="form-control" />
													</div>
												</div>

												<div class="col-sm-12">
													<div class="form-group">
														<label>Country</label>
														<select name="country" class="form-control">
															<option value="">Country...</option>
															<option value="Afganistan">Afghanistan</option>
															<option value="Albania">Albania</option>
															<option value="Algeria">Algeria</option>
															<option value="American Samoa">American Samoa</option>
															<option value="Andorra">Andorra</option>
															<option value="Angola">Angola</option>
															<option value="Anguilla">Anguilla</option>
															<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
															<option value="Argentina">Argentina</option>
															<option value="Armenia">Armenia</option>
															<option value="Aruba">Aruba</option>
															<option value="Australia">Australia</option>
															<option value="Austria">Austria</option>
															<option value="Azerbaijan">Azerbaijan</option>
															<option value="Bahamas">Bahamas</option>
															<option value="Bahrain">Bahrain</option>
															<option value="Bangladesh">Bangladesh</option>
															<option value="Barbados">Barbados</option>
															<option value="Belarus">Belarus</option>
															<option value="Belgium">Belgium</option>
															<option value="Belize">Belize</option>
															<option value="Benin">Benin</option>
															<option value="Bermuda">Bermuda</option>
															<option value="Bhutan">Bhutan</option>
															<option value="Bolivia">Bolivia</option>
															<option value="Bonaire">Bonaire</option>
															<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
															<option value="Botswana">Botswana</option>
															<option value="Brazil">Brazil</option>
															<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
															<option value="Brunei">Brunei</option>
															<option value="Bulgaria">Bulgaria</option>
															<option value="Burkina Faso">Burkina Faso</option>
															<option value="Burundi">Burundi</option>
															<option value="Cambodia">Cambodia</option>
															<option value="Cameroon">Cameroon</option>
															<option value="Canada">Canada</option>
															<option value="Canary Islands">Canary Islands</option>
															<option value="Cape Verde">Cape Verde</option>
															<option value="Cayman Islands">Cayman Islands</option>
															<option value="Central African Republic">Central African Republic</option>
															<option value="Chad">Chad</option>
															<option value="Channel Islands">Channel Islands</option>
															<option value="Chile">Chile</option>
															<option value="China">China</option>
															<option value="Christmas Island">Christmas Island</option>
															<option value="Cocos Island">Cocos Island</option>
															<option value="Colombia">Colombia</option>
															<option value="Comoros">Comoros</option>
															<option value="Congo">Congo</option>
															<option value="Cook Islands">Cook Islands</option>
															<option value="Costa Rica">Costa Rica</option>
															<option value="Cote DIvoire">Cote D'Ivoire</option>
															<option value="Croatia">Croatia</option>
															<option value="Cuba">Cuba</option>
															<option value="Curaco">Curacao</option>
															<option value="Cyprus">Cyprus</option>
															<option value="Czech Republic">Czech Republic</option>
															<option value="Denmark">Denmark</option>
															<option value="Djibouti">Djibouti</option>
															<option value="Dominica">Dominica</option>
															<option value="Dominican Republic">Dominican Republic</option>
															<option value="East Timor">East Timor</option>
															<option value="Ecuador">Ecuador</option>
															<option value="Egypt">Egypt</option>
															<option value="El Salvador">El Salvador</option>
															<option value="Equatorial Guinea">Equatorial Guinea</option>
															<option value="Eritrea">Eritrea</option>
															<option value="Estonia">Estonia</option>
															<option value="Ethiopia">Ethiopia</option>
															<option value="Falkland Islands">Falkland Islands</option>
															<option value="Faroe Islands">Faroe Islands</option>
															<option value="Fiji">Fiji</option>
															<option value="Finland">Finland</option>
															<option value="France">France</option>
															<option value="French Guiana">French Guiana</option>
															<option value="French Polynesia">French Polynesia</option>
															<option value="French Southern Ter">French Southern Ter</option>
															<option value="Gabon">Gabon</option>
															<option value="Gambia">Gambia</option>
															<option value="Georgia">Georgia</option>
															<option value="Germany">Germany</option>
															<option value="Ghana">Ghana</option>
															<option value="Gibraltar">Gibraltar</option>
															<option value="Great Britain">Great Britain</option>
															<option value="Greece">Greece</option>
															<option value="Greenland">Greenland</option>
															<option value="Grenada">Grenada</option>
															<option value="Guadeloupe">Guadeloupe</option>
															<option value="Guam">Guam</option>
															<option value="Guatemala">Guatemala</option>
															<option value="Guinea">Guinea</option>
															<option value="Guyana">Guyana</option>
															<option value="Haiti">Haiti</option>
															<option value="Hawaii">Hawaii</option>
															<option value="Honduras">Honduras</option>
															<option value="Hong Kong">Hong Kong</option>
															<option value="Hungary">Hungary</option>
															<option value="Iceland">Iceland</option>
															<option value="India">India</option>
															<option value="Indonesia">Indonesia</option>
															<option value="Iran">Iran</option>
															<option value="Iraq">Iraq</option>
															<option value="Ireland">Ireland</option>
															<option value="Isle of Man">Isle of Man</option>
															<option value="Israel">Israel</option>
															<option value="Italy">Italy</option>
															<option value="Jamaica">Jamaica</option>
															<option value="Japan">Japan</option>
															<option value="Jordan">Jordan</option>
															<option value="Kazakhstan">Kazakhstan</option>
															<option value="Kenya">Kenya</option>
															<option value="Kiribati">Kiribati</option>
															<option value="Korea North">Korea North</option>
															<option value="Korea Sout">Korea South</option>
															<option value="Kuwait">Kuwait</option>
															<option value="Kyrgyzstan">Kyrgyzstan</option>
															<option value="Laos">Laos</option>
															<option value="Latvia">Latvia</option>
															<option value="Lebanon">Lebanon</option>
															<option value="Lesotho">Lesotho</option>
															<option value="Liberia">Liberia</option>
															<option value="Libya">Libya</option>
															<option value="Liechtenstein">Liechtenstein</option>
															<option value="Lithuania">Lithuania</option>
															<option value="Luxembourg">Luxembourg</option>
															<option value="Macau">Macau</option>
															<option value="Macedonia">Macedonia</option>
															<option value="Madagascar">Madagascar</option>
															<option value="Malaysia">Malaysia</option>
															<option value="Malawi">Malawi</option>
															<option value="Maldives">Maldives</option>
															<option value="Mali">Mali</option>
															<option value="Malta">Malta</option>
															<option value="Marshall Islands">Marshall Islands</option>
															<option value="Martinique">Martinique</option>
															<option value="Mauritania">Mauritania</option>
															<option value="Mauritius">Mauritius</option>
															<option value="Mayotte">Mayotte</option>
															<option value="Mexico">Mexico</option>
															<option value="Midway Islands">Midway Islands</option>
															<option value="Moldova">Moldova</option>
															<option value="Monaco">Monaco</option>
															<option value="Mongolia">Mongolia</option>
															<option value="Montserrat">Montserrat</option>
															<option value="Morocco">Morocco</option>
															<option value="Mozambique">Mozambique</option>
															<option value="Myanmar">Myanmar</option>
															<option value="Nambia">Nambia</option>
															<option value="Nauru">Nauru</option>
															<option value="Nepal">Nepal</option>
															<option value="Netherland Antilles">Netherland Antilles</option>
															<option value="Netherlands">Netherlands (Holland, Europe)</option>
															<option value="Nevis">Nevis</option>
															<option value="New Caledonia">New Caledonia</option>
															<option value="New Zealand">New Zealand</option>
															<option value="Nicaragua">Nicaragua</option>
															<option value="Niger">Niger</option>
															<option value="Nigeria">Nigeria</option>
															<option value="Niue">Niue</option>
															<option value="Norfolk Island">Norfolk Island</option>
															<option value="Norway">Norway</option>
															<option value="Oman">Oman</option>
															<option value="Pakistan">Pakistan</option>
															<option value="Palau Island">Palau Island</option>
															<option value="Palestine">Palestine</option>
															<option value="Panama">Panama</option>
															<option value="Papua New Guinea">Papua New Guinea</option>
															<option value="Paraguay">Paraguay</option>
															<option value="Peru">Peru</option>
															<option value="Phillipines">Philippines</option>
															<option value="Pitcairn Island">Pitcairn Island</option>
															<option value="Poland">Poland</option>
															<option value="Portugal">Portugal</option>
															<option value="Puerto Rico">Puerto Rico</option>
															<option value="Qatar">Qatar</option>
															<option value="Republic of Montenegro">Republic of Montenegro</option>
															<option value="Republic of Serbia">Republic of Serbia</option>
															<option value="Reunion">Reunion</option>
															<option value="Romania">Romania</option>
															<option value="Russia">Russia</option>
															<option value="Rwanda">Rwanda</option>
															<option value="St Barthelemy">St Barthelemy</option>
															<option value="St Eustatius">St Eustatius</option>
															<option value="St Helena">St Helena</option>
															<option value="St Kitts-Nevis">St Kitts-Nevis</option>
															<option value="St Lucia">St Lucia</option>
															<option value="St Maarten">St Maarten</option>
															<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
															<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
															<option value="Saipan">Saipan</option>
															<option value="Samoa">Samoa</option>
															<option value="Samoa American">Samoa American</option>
															<option value="San Marino">San Marino</option>
															<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
															<option value="Saudi Arabia">Saudi Arabia</option>
															<option value="Senegal">Senegal</option>
															<option value="Serbia">Serbia</option>
															<option value="Seychelles">Seychelles</option>
															<option value="Sierra Leone">Sierra Leone</option>
															<option value="Singapore">Singapore</option>
															<option value="Slovakia">Slovakia</option>
															<option value="Slovenia">Slovenia</option>
															<option value="Solomon Islands">Solomon Islands</option>
															<option value="Somalia">Somalia</option>
															<option value="South Africa">South Africa</option>
															<option value="Spain">Spain</option>
															<option value="Sri Lanka">Sri Lanka</option>
															<option value="Sudan">Sudan</option>
															<option value="Suriname">Suriname</option>
															<option value="Swaziland">Swaziland</option>
															<option value="Sweden">Sweden</option>
															<option value="Switzerland">Switzerland</option>
															<option value="Syria">Syria</option>
															<option value="Tahiti">Tahiti</option>
															<option value="Taiwan">Taiwan</option>
															<option value="Tajikistan">Tajikistan</option>
															<option value="Tanzania">Tanzania</option>
															<option value="Thailand">Thailand</option>
															<option value="Togo">Togo</option>
															<option value="Tokelau">Tokelau</option>
															<option value="Tonga">Tonga</option>
															<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
															<option value="Tunisia">Tunisia</option>
															<option value="Turkey">Turkey</option>
															<option value="Turkmenistan">Turkmenistan</option>
															<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
															<option value="Tuvalu">Tuvalu</option>
															<option value="Uganda">Uganda</option>
															<option value="Ukraine">Ukraine</option>
															<option value="United Arab Erimates">United Arab Emirates</option>
															<option value="United Kingdom">United Kingdom</option>
															<option value="United States of America">United States of America</option>
															<option value="Uraguay">Uruguay</option>
															<option value="Uzbekistan">Uzbekistan</option>
															<option value="Vanuatu">Vanuatu</option>
															<option value="Vatican City State">Vatican City State</option>
															<option value="Venezuela">Venezuela</option>
															<option value="Vietnam">Vietnam</option>
															<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
															<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
															<option value="Wake Island">Wake Island</option>
															<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
															<option value="Yemen">Yemen</option>
															<option value="Zaire">Zaire</option>
															<option value="Zambia">Zambia</option>
															<option value="Zimbabwe">Zimbabwe</option>
															</select>
													</div>
												</div>

											</div>
										</div>

									</div><!-- // user wrapper -->

									<div class=""><!-- billing summary -->
										<div class="panel panel-default">
											<div class="panel-body">
												<table class="table mb0">
													<thead>
														<tr>
															<th colspan="2">Order Summary</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Every Day with Purpose Digital Course (3 payments)</td>
															<td>$79</td>
														</tr>
														<tr>
															<td>Quantity</td><td>1</td>
														</tr>
													</tbody>
													<tfoot>
														<tr>
															<td>Total</td><td>$79</td>
														</tr>
													</tfoot>
												</table>
											</div>
										</div>
									</div>
								</div>

								<!-- Billing Informaton -->
								<div class="col-md-6">
									<h3>Billing Information</h3>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Card Number</label>
												<input type="number" class="form-control" />
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Expiration Month</label>
												<select class="form-control">
													<option>01 Jan</option>
													<option>02 Feb</option>
													<option>03 Mar</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Expiration Year</label>
												<select class="form-control">
													<option>2016</option>
													<option>2017</option>
													<option>2018</option>
												</select>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>CVV (Security Code)</label>
												<input type="number" class="form-control" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Postal / ZIP</label>
												<input type="number" class="form-control" />
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label>Coupon Code</label>
												<input type="text" class="form-control" />
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group text-center">
												<label>
													<input type="checkbox"> I agree to the terms and conditions
												</label>
											</div>

											<button type="submit" class="btn btn-primary btn-lg btn-block">Process Order</button>
										</div>
									</div>

								</div>

							</div>

						</div>
					</div>
				</div>
			</div>

		</form>

	</div>
</section>

<?php include('partials/_footer.php'); ?>