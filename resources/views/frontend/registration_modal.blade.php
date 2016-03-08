<div class="work">
    <div class="project-modal modal fade" id="registrationModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            {{--<div class="close-modal" data-dismiss="modal">
                <i class="fa fa-times"></i>
            </div>--}}
            <div class="row">
                <div class="col-md-4 col-md-offset-6">
                    <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
            <div class="container">
                <h2>Registration</h2>
                <hr>
                <div class="row">
                    {!! Form::open(array('route' => 'registration_store', 'method' => 'POST', 'name' => 'sentMessage', 'id' => 'registrationForm')) !!}
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2>Athlete's Basic Info</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('first_name', 'First Name', array('for' => 'first_name', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('first_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'First Name', 'id' => 'first_name', 'data-validation-required-message' => 'Please enter the Athlete\'s First Name')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::label('last_name', 'Last Name', array('for' => 'last_name', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('last_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'Last Name', 'id' => 'last_name', 'data-validation-required-message' => 'Please enter the Athlete\'s Last Name')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('address_1', 'Address 1', array('for' => 'address_1', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('address_1', '', array('class' => 'form-control input-lg', 'placeholder' => 'Address 1', 'id' => 'address_1', 'data-validation-required-message' => 'Please enter Athlete\'s Address 1')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::label('address_2', 'Address 2', array('for' => 'address_2', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('address_2', '', array('class' => 'form-control input-lg', 'placeholder' => 'Address 2', 'id' => 'address_2')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! Form::label('city', 'City', array('for' => 'city', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('city', '', array('class' => 'form-control input-lg', 'placeholder' => 'City', 'id' => 'city')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::label('state', 'State', array('for' => 'state', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::select('state', $states, 'OH', array('class' => 'form-control input-lg', 'id' => 'state')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::label('zip', 'Zip', array('for' => 'zip', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('zip', '', array('class' => 'form-control input-lg', 'placeholder' => 'Zip', 'id' => 'zip')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! Form::label('phone', 'Phone', array('for' => 'phone', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('phone', '', array('class' => 'form-control input-lg', 'placeholder' => 'Phone (123) 456-7890', 'id' => 'phone')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-8">
                                                {!! Form::label('email', 'Email', array('for' => 'email', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('email', '', array('class' => 'form-control input-lg', 'placeholder' => 'Email', 'id' => 'email', 'data-validation-required-message' => 'Please enter Athlete\'s email')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! Form::label('shirt_size', 'Shirt Size', array('for' => 'shirt_size', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::select('shirt_size', array('' => 'Shirt Size') + $shirt_sizes, '', array('class' => 'form-control input-lg', 'id' => 'shirt_size')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-3">
                                                {!! Form::label('gender', 'Gender', array('for' => 'gender', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::select('gender', array('' => 'Gender') + $genders, 'Gender', array('class' => 'form-control input-lg', 'id' => 'gender')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-5">
                                                {!! Form::label('birthdate', 'Birthdate', array('for' => 'birthdate', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('birthdate', '', array('class' => 'form-control input-lg', 'placeholder' => 'Birthdate MM/DD/YYYY', 'id' => 'birthdate')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END of Athlete's Basic Info -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2>Athlete's School Info</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! Form::label('graduation_year', 'Graduation Year', array('for' => 'graduation_year', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::select('graduation_year', array('' => 'Graduation Year') + $graduation_years, 'Graduation Year', array('class' => 'form-control input-lg', 'id' => 'graduation_year')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-3">
                                                {!! Form::label('high_school_state', 'High School State', array('for' => 'high_school_state', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::select('high_school_state', $states, 'OH', array('class' => 'form-control input-lg', 'placeholder' => 'High School State', 'id' => 'high_school_state', 'data-validation-required-message' => 'Please enter the Athlete\'s High School\'s State')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-5">
                                                {!! Form::label('high_school_name', 'School Name', array('for' => 'high_school_name', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('high_school_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'School Name', 'id' => 'high_school_name', 'data-validation-required-message' => 'Please enter the Athlete\'s School Name')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! Form::label('gpa', 'GPA', array('for' => 'gpa', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('gpa', '', array('class' => 'form-control input-lg', 'placeholder' => 'GPA', 'id' => 'gpa')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::label('sat_score', 'SAT Score', array('for' => 'sat_score', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('sat_score', '', array('class' => 'form-control input-lg', 'placeholder' => 'SAT Score', 'id' => 'sat_score')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::label('act_score', 'ACT Score', array('for' => 'act_score', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('act_score', '', array('class' => 'form-control input-lg', 'placeholder' => 'ACT Score', 'id' => 'act_score')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END of Athlete's School Info -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2>Athlete's Sports Info</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-3">
                                                {!! Form::label('position', 'Position', array('for' => 'position', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('position', '', array('class' => 'form-control input-lg', 'placeholder' => 'Position', 'id' => 'position')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-3">
                                                {!! Form::label('height_feet', 'Height Feet', array('for' => 'height_feet', 'class' => 'sr-only control-label')) !!}
                                                    <div class="input-group">
                                                        {!! Form::text('height_feet', '', array('class' => 'form-control input-lg', 'placeholder' => 'Height', 'id' => 'height_feet', 'data-validation-required-message' => 'Please enter the Athlete\'s Height')) !!}
                                                        <div class="input-group-addon">ft</div>
                                                    </div>
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-3">
                                                {!! Form::label('height_inches', 'Height Inches', array('for' => 'height_inches', 'class' => 'sr-only control-label')) !!}
                                                    <div class="input-group">
                                                        {!! Form::text('height_inches', '', array('class' => 'form-control input-lg', 'placeholder' => 'Height', 'id' => 'height_inches', 'data-validation-required-message' => 'Please enter the Athlete\'s Height')) !!}
                                                        <div class="input-group-addon">in</div>
                                                    </div>
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-3">
                                                {!! Form::label('weight', 'Weight', array('for' => 'height_inches', 'class' => 'sr-only control-label')) !!}
                                                    <div class="input-group">
                                                        {!! Form::text('weight', '', array('class' => 'form-control input-lg', 'placeholder' => 'Weight', 'id' => 'weight', 'data-validation-required-message' => 'Please enter the Athlete\'s Weight')) !!}
                                                        <div class="input-group-addon">lbs</div>
                                                    </div>
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! Form::label('coach_name', 'Coach Name', array('for' => 'coach_name', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('coach_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'Coach Name', 'id' => 'coach_name')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-3">
                                                {!! Form::label('coach_phone', 'Coach Phone', array('for' => 'coach_phone', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('coach_phone', '', array('class' => 'form-control input-lg', 'placeholder' => 'Coach Phone', 'id' => 'coach_phone')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-5">
                                                {!! Form::label('coach_email', 'Coach Email', array('for' => 'coach_email', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('coach_email', '', array('class' => 'form-control input-lg', 'placeholder' => 'Coach Email', 'id' => 'coach_email')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-3">
                                                {!! Form::label('jersey_number', 'Jersey #', array('for' => 'jersey_number', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('jersey_number', '', array('class' => 'form-control input-lg', 'placeholder' => 'Jersey #', 'id' => 'jersey_number')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::label('hudl_email', 'Hudl Email', array('for' => 'hudl_email', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('hudl_email', '', array('class' => 'form-control input-lg', 'placeholder' => 'Hudl Email', 'id' => 'hudl_email')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-5">
                                                {!! Form::label('hudl_film_link', 'Hudl Film Link', array('for' => 'hudl_film_link', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('hudl_film_link', '', array('class' => 'form-control input-lg', 'placeholder' => 'Hudl Film Link', 'id' => 'hudl_film_link')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-4">
                                                {!! Form::label('offensive_stats', 'Off. Stats', array('for' => 'offensive_stats', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::textarea('offensive_stats', '', array('class' => 'form-control input-lg', 'placeholder' => 'Off. Stats', 'id' => 'offensive_stats')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::label('defensive_stats', 'Def. Stats', array('for' => 'defensive_stats', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::textarea('defensive_stats', '', array('class' => 'form-control input-lg', 'placeholder' => 'Def. Stats', 'id' => 'defensive_stats')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-4">
                                                {!! Form::label('postseason_honors', 'Postseason Honors', array('for' => 'postseason_honors', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::textarea('postseason_honors', '', array('class' => 'form-control input-lg', 'placeholder' => 'Postseason Honors', 'id' => 'postseason_honors')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('favorite_colleges', 'Favorite Colleges', array('for' => 'favorite_colleges', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::textarea('favorite_colleges', '', array('class' => 'form-control input-lg', 'placeholder' => 'Favorite Colleges', 'id' => 'favorite_colleges')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::label('college_offers', 'College Offers', array('for' => 'college_offers', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::textarea('college_offers', '', array('class' => 'form-control input-lg', 'placeholder' => 'College Offers', 'id' => 'college_offers')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END of Athlete's Sports Info -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2>Athlete's Social Media Info</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('twitter_link', 'Twitter Link', array('for' => 'twitter_link', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('twitter_link', '', array('class' => 'form-control input-lg', 'placeholder' => 'Twitter Link', 'id' => 'twitter_link')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::label('facebook_link', 'Facebook Link', array('for' => 'facebook_link', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('facebook_link', '', array('class' => 'form-control input-lg', 'placeholder' => 'Facebook Link', 'id' => 'facebook_link')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('instagram_link', 'Instagram Link', array('for' => 'instagram_link', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('instagram_link', '', array('class' => 'form-control input-lg', 'placeholder' => 'Instagram Link', 'id' => 'instagram_link')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::label('snapchat_name', 'Snapchat Name', array('for' => 'snapchat_name', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('snapchat_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'Snapchat Name', 'id' => 'snapchat_name')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('youtube_link', 'Youtube Link', array('for' => 'youtube_link', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('youtube_link', '', array('class' => 'form-control input-lg', 'placeholder' => 'Youtube Link', 'id' => 'youtube_link')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END of Athlete's Social Media Info -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2>Athlete's Parent/Guardian Info</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('guardian_1_first_name', 'Guardian 1 First Name', array('for' => 'guardian_1_first_name', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('guardian_1_first_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'Guardian 1 First Name', 'id' => 'guardian_1_first_name')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::label('guardian_1_last_name', 'Guardian 1 Last Name', array('for' => 'guardian_1_last_name', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('guardian_1_last_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'Guardian 1 Last Name', 'id' => 'guardian_1_last_name')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('guardian_1_phone', 'Guardian 1 Phone', array('for' => 'guardian_1_phone', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('guardian_1_phone', '', array('class' => 'form-control input-lg', 'placeholder' => 'Guardian 1 Phone', 'id' => 'guardian_1_phone')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::label('guardian_1_email', 'Guardian 1 Email', array('for' => 'guardian_1_email', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('guardian_1_email', '', array('class' => 'form-control input-lg', 'placeholder' => 'Guardian 1 Email', 'id' => 'guardian_1_email')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('guardian_2_first_name', 'Guardian 2 First Name', array('for' => 'guardian_2_first_name', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('guardian_2_first_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'Guardian 2 First Name', 'id' => 'guardian_2_first_name')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::label('guardian_2_last_name', 'Guardian 2 Last Name', array('for' => 'guardian_2_last_name', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('guardian_2_last_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'Guardian 2 Last Name', 'id' => 'guardian_2_last_name')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                {!! Form::label('guardian_2_phone', 'Guardian 2 Phone', array('for' => 'guardian_2_phone', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('guardian_2_phone', '', array('class' => 'form-control input-lg', 'placeholder' => 'Guardian 2 Phone', 'id' => 'guardian_2_phone')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                {!! Form::label('guardian_2_email', 'Guardian 2 Email', array('for' => 'guardian_2_email', 'class' => 'sr-only control-label')) !!}
                                                {!! Form::text('guardian_2_email', '', array('class' => 'form-control input-lg', 'placeholder' => 'Guardian 2 Email', 'id' => 'guardian_2_email')) !!}
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END of Athlete's Parent/Guardian Info -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2>Agreements</h2>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="checkbox">
                                                    <label class="control-label">
                                                        {!! Form::checkbox('event_waiver_agreement', 1, null, array('id' => 'event_waiver_agreement')) !!} I agree with the Waiver
                                                    </label>
                                                </div>
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="checkbox">
                                                    <label class="control-label">
                                                        {!! Form::checkbox('text_agreement', 1, null, array('id' => 'text_agreement')) !!} I want updates via text messaging
                                                    </label>
                                                </div>
                                                <span class="help-block text-danger"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END of Agreements -->
                        <div class="row">
                            <div class="col-md-5 col-md-offset-2">
                                <div id="success"></div>
                                {!! Form::button('Send', array('type' => 'submit', 'class' => 'btn btn-primary btn-lg')) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-6">
                        <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
