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
                {!! Form::open(array('route' => 'contact_post', 'method' => 'POST', 'name' => 'sentMessage', 'id' => 'contactForm')) !!}
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            {!! Form::label('name', 'Your Name', array('for' => 'name', 'class' => 'sr-only control-label')) !!}
                            {!! Form::text('name', '', array('class' => 'form-control input-lg', 'placeholder' => 'Your Name', 'id' => 'name', 'data-validation-required-message' => 'Please enter your name')) !!}
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            {!! Form::label('name', 'Your Email', array('for' => 'email', 'class' => 'sr-only control-label')) !!}
                            {!! Form::text('name', '', array('class' => 'form-control input-lg', 'placeholder' => 'Your Email', 'id' => 'email', 'data-validation-required-message' => 'Please enter email')) !!}
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            {!! Form::label('phone', 'Your Phone', array('for' => 'phone', 'class' => 'sr-only control-label')) !!}
                            {!! Form::text('phone', '', array('class' => 'form-control input-lg', 'placeholder' => 'Your Phone', 'id' => 'phone', 'data-validation-required-message' => 'Please enter phone')) !!}
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            {!! Form::label('message', 'Message', array('for' => 'message', 'class' => 'sr-only control-label')) !!}
                            {!! Form::textarea('message', '', array('rows' => '2', 'class' => 'form-control input-lg', 'placeholder' => 'Please enter a message', 'id' => 'message', 'data-validation-required-message' => 'Please enter a message', 'aria-invalid' => 'false')) !!}
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div id="success"></div>
                    {!! Form::button('Send', array('type' => 'submit', 'class' => 'btn btn-primary btn-lg')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
