<div class="container">

	<div class="row">
		<div class="col-lg-8 col-md-offset-2">
			<div class="boxed-grey">
				<form id="contact-form">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">

								<label for="name"> Name</label>
								<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />

							</div>
							<div class="form-group">
								<label for="email"> Email Address</label>
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span> </span>
									<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
								</div>
							</div>
							<div class="form-group">
								<label for="subject"> Subject</label>
								<select id="subject" name="subject" class="form-control" required="required">
									<option value="">Choose One:</option>
									<option value="service">General Customer Service</option>
									<option value="suggestions">Suggestions</option>
									<option value="product">Product Support</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="name"> Message</label>
								<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
								Send Message
							</button>
						</div>
					</div>
				</form>
			</div>

			<div class="widget-contact row">
				<div class="col-lg-6">
					<address>
						<strong>SMARTADMIN Ltd.</strong>
						<br>
						Big Villa 334 Awesome, Beautiful Suite 1200
						<br>
						San Francisco, CA 94107
						<br>
						<abbr title="Phone">P:</abbr> (123) 456-7890
					</address>
				</div>

				<div class="col-lg-6">
					<address>
						<strong>Email</strong>
						<br>
						<a href="mailto:#">email.name@example.com</a>
						<br />
						<a href="mailto:#">name.name@example.com</a>
					</address>

				</div>
			</div>
		</div>

	</div>

</div>
