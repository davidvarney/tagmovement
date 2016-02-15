<!-- Contact Section -->
<section id="contact">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-5">
                <h2 class="headerline">Contact Us</h2>
                <p>Feel free to contact us to provide any feedback that you may have. Additionally, if you have questions about our programs please reach out to us as we would love to speak with you.</p>
                <h2><i class="fa fa-phone"></i> (614) 372-6171</h2>
                <h4><a href="mailto:info@tagmovement.org" class="contact-mail-link"><i class="fa fa-envelope fa-fw"></i> info@tagmovement.org</a><br>
                    <i class="fa fa-map-marker fa-fw"></i> 4480 Refugee Rd, Columbus, OH 43232</h4>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <h2 class="headerline">Say hello</h2>
                <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                {!! Form::open(array('route' => 'contact_post', 'method' => 'POST', 'name' => 'sentMessage', 'id' => 'contactForm')) !!}
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="name" class="sr-only control-label">You Name</label>
                            <input type="text" class="form-control input-lg" placeholder="You Name" id="name" required="" data-validation-required-message="Please enter name">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="email" class="sr-only control-label">You Email</label>
                            <input type="email" class="form-control input-lg" placeholder="You Email" id="email" required="" data-validation-required-message="Please enter email">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="phone" class="sr-only control-label">You Phone</label>
                            <input type="tel" class="form-control input-lg" placeholder="You Phone" id="phone" required="" data-validation-required-message="Please enter phone number">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="message" class="sr-only control-label">Message</label>
                            <textarea rows="2" class="form-control input-lg" placeholder="Message" id="message" required="" data-validation-required-message="Please enter a message." aria-invalid="false"></textarea>
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary btn-lg">Send</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
