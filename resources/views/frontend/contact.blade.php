@extends('Layout.frontend')
@section('title')
Contact
@endsection
@section('content')
<div class="col-md-6" style="margin-left: 28%;
    margin-top: 9%;">

							<h2 class="mb-0 text-color-dark" style="color: red">Contact Us</h2>
							<form id="contactForm" action="contact.php" method="POST">
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="SQxKmYK2sakTQJRe" id="name" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="figure" placeholder="Phone Number" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="SQxKmYK2sakTQJRe" id="figure" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="uzRkbUsxqMaT5wnF" id="email" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="VuBf5MCnwaagTHCh" id="subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="aOBoPBtsyDtNkpYB" id="message" required></textarea>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="submit" value="Send Message" name="submit" class="btn btn-lg btn-primary mb-4" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
@endsection
