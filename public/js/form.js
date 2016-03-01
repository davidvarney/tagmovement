// Contact Form Scripts
$(function() {

    $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#contact_name").val();
            var email = $("input#contact_email").val();
            var phone = $("input#contact_phone").val();
            var message = $("textarea#contact_message").val();
            var _token = $("input[type=hidden][name=_token]").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            $.ajax({
                url: "/contact",
                type: "POST",
                data: {
                    name: name,
                    phone: phone,
                    email: email,
                    message: message,
                    _token: _token
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#contact_success').html("<div class='alert alert-success'>");
                    $('#contact_success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#contact_success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#contact_success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#contact_success').html("<div class='alert alert-danger'>");
                    $('#contact_success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#contact_success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#contact_success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

// Registration Form Script
$(function() {

    $("#registrationForm input,#registrationForm textarea, #registrationForm select").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            //console.log('here');
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var first_name              = $("input#first_name").val();
            var last_name               = $("input#last_name").val();
            var address_1               = $("input#address_1").val();
            var address_2               = $("input#address_2").val();
            var city                    = $("input#city").val();
            var state                   = $("select#state").val();
            var zip                     = $("input#zip").val();
            var phone                   = $("input#phone").val();
            var email                   = $("input#email").val();
            var shirt_size              = $("select#shirt_size").val();
            var gender                  = $("select#gender").val();
            var birthdate               = $("input#birthdate").val();
            var graduation_year         = $("select#graduation_year").val();
            var high_school_state       = $("select#high_school_state").val();
            var high_school_name        = $("input#high_school_name").val();
            var gpa                     = $("input#gpa").val();
            var sat_score               = $("input#sat_score").val();
            var act_score               = $("input#act_score").val();
            var position                = $("input#position").val();
            var height_feet             = $("input#height_feet").val();
            var height_inches           = $("input#height_inches").val();
            var weight                  = $("input#weight").val();
            var coach_name              = $("input#coach_name").val();
            var coach_phone             = $("input#coach_phone").val();
            var coach_email             = $("input#coach_email").val();
            var jersey_number           = $("input#jersey_number").val();
            var hudl_email              = $("input#hudl_email").val();
            var hudl_film_link          = $("input#hudl_film_link").val();
            var offensive_stats         = $("textarea#offensive_stats").val();
            var defensive_stats         = $("textarea#defensive_stats").val();
            var postseason_honors       = $("textarea#postseason_honors").val();
            var favorite_colleges       = $("textarea#favorite_colleges").val();
            var college_offers          = $("textarea#college_offers").val();
            var twitter_link            = $("input#twitter_link").val();
            var facebook_link           = $("input#facebook_link").val();
            var instagram_link          = $("input#instagram_link").val();
            var snapchat_name           = $("input#snapchat_name").val();
            var youtube_link            = $("input#youtube_link").val();
            var guardian_1_first_name   = $("input#guardian_1_first_name").val();
            var guardian_1_last_name    = $("input#guardian_1_last_name").val();
            var guardian_1_phone        = $("input#guardian_1_phone").val();
            var guardian_1_email        = $("input#guardian_1_email").val();
            var guardian_2_first_name   = $("input#guardian_2_first_name").val();
            var guardian_2_last_name    = $("input#guardian_2_last_name").val();
            var guardian_2_phone        = $("input#guardian_2_phone").val();
            var guardian_2_email        = $("input#guardian_2_email").val();
            var event_waiver_agreement  = $("input#event_waiver_agreement").val();
            var text_agreement          = $("input#text_agreement").val();
            var _token                  = $("input[type=hidden][name=_token]").val();
            /*var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }*/
            $.ajax({
                url: "/registration",
                type: "POST",
                data: {
                    first_name: first_name,
                    last_name: last_name,
                    address_1: address_1,
                    address_2: address_2,
                    city: city,
                    state: state,
                    zip: zip,
                    phone: phone,
                    email: email,
                    shirt_size: shirt_size,
                    gender: gender,
                    birthdate: birthdate,
                    graduation_year: graduation_year,
                    high_school_state: high_school_state,
                    high_school_name: high_school_name,
                    gpa: gpa,
                    sat_score: sat_score,
                    act_score: act_score,
                    position: position,
                    height: (parseInt(height_feet) * 12) + parseInt(height_inches),
                    weight: weight,
                    coach_name: coach_name,
                    coach_phone: coach_phone,
                    coach_email: coach_email,
                    jersey_number: jersey_number,
                    hudl_email: hudl_email,
                    hudl_film_link: hudl_film_link,
                    offensive_stats: offensive_stats,
                    defensive_stats: defensive_stats,
                    postseason_honors: postseason_honors,
                    favorite_colleges: favorite_colleges,
                    college_offers: college_offers,
                    twitter_link: twitter_link,
                    facebook_link: facebook_link,
                    instagram_link: instagram_link,
                    snapchat_name: snapchat_name,
                    youtube_link: youtube_link,
                    guardian_1_first_name: guardian_1_first_name,
                    guardian_1_last_name: guardian_1_last_name,
                    guardian_1_phone: guardian_1_phone,
                    guardian_1_email: guardian_1_email,
                    guardian_2_first_name: guardian_2_first_name,
                    guardian_2_last_name: guardian_2_last_name,
                    guardian_2_phone: guardian_2_phone,
                    guardian_2_email: guardian_2_email,
                    event_waiver_agreement: event_waiver_agreement,
                    text_agreement: text_agreement,
                    _token: _token
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your registration has been submitted. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
                error: function(msg) {
                    var msg_obj = msg.responseJSON;
                    var keys = Object.keys(msg_obj);
                    var error_output = '<ul>';
                    for (var i=0;i<keys.length;i++) {
                        var obj_name = keys[i];
                        error_output += '<li>' + msg_obj[obj_name][0] + '</li>';
                    }
                    error_output += '</ul>';
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<p>Please make sure the form is completely filled out or use the contact form to reach us and let us know that you're having issues.</p><br>");
                    $('#success > .alert-danger').append("<p>Errors Found:<br><br>" + error_output + "</p>");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});


// jqBootstrapValidation
// * A plugin for automating validation on Twitter Bootstrap formatted forms.
// *
// * v1.3.6
// *
// * License: MIT <http://opensource.org/licenses/mit-license.php> - see LICENSE file
// *
// * http://ReactiveRaven.github.com/jqBootstrapValidation/


(function( $ ){

    var createdElements = [];

    var defaults = {
        options: {
            prependExistingHelpBlock: false,
            sniffHtml: true, // sniff for 'required', 'maxlength', etc
            preventSubmit: true, // stop the form submit event from firing if validation fails
            submitError: false, // function called if there is an error when trying to submit
            submitSuccess: false, // function called just before a successful submit event is sent to the server
            semanticallyStrict: false, // set to true to tidy up generated HTML output
            autoAdd: {
                helpBlocks: true
            },
            filter: function () {
                // return $(this).is(":visible"); // only validate elements you can see
                return true; // validate everything
            }
        },
        methods: {
            init : function( options ) {

                var settings = $.extend(true, {}, defaults);

                settings.options = $.extend(true, settings.options, options);

                var $siblingElements = this;

                var uniqueForms = $.unique(
                    $siblingElements.map( function () {
                        return $(this).parents("form")[0];
                    }).toArray()
                );

                $(uniqueForms).bind("submit", function (e) {
                    var $form = $(this);
                    var warningsFound = 0;
                    var $inputs = $form.find("input,textarea,select").not("[type=submit],[type=image]").filter(settings.options.filter);
                    $inputs.trigger("submit.validation").trigger("validationLostFocus.validation");

                    $inputs.each(function (i, el) {
                        var $this = $(el),
                            $controlGroup = $this.parents(".form-group").first();
                        if (
                            $controlGroup.hasClass("warning")
                        ) {
                            $controlGroup.removeClass("warning").addClass("error");
                            warningsFound++;
                        }
                    });

                    $inputs.trigger("validationLostFocus.validation");

                    if (warningsFound) {
                        if (settings.options.preventSubmit) {
                            e.preventDefault();
                        }
                        $form.addClass("error");
                        if ($.isFunction(settings.options.submitError)) {
                            settings.options.submitError($form, e, $inputs.jqBootstrapValidation("collectErrors", true));
                        }
                    } else {
                        $form.removeClass("error");
                        if ($.isFunction(settings.options.submitSuccess)) {
                            settings.options.submitSuccess($form, e);
                        }
                    }
                });

                return this.each(function(){

                    // Get references to everything we're interested in
                    var $this = $(this),
                        $controlGroup = $this.parents(".form-group").first(),
                        $helpBlock = $controlGroup.find(".help-block").first(),
                        $form = $this.parents("form").first(),
                        validatorNames = [];

                    // create message container if not exists
                    if (!$helpBlock.length && settings.options.autoAdd && settings.options.autoAdd.helpBlocks) {
                        $helpBlock = $('<div class="help-block" />');
                        $controlGroup.find('.controls').append($helpBlock);
                        createdElements.push($helpBlock[0]);
                    }

                    // =============================================================
                    //                                     SNIFF HTML FOR VALIDATORS
                    // =============================================================

                    // *snort sniff snuffle*

                    if (settings.options.sniffHtml) {
                        var message = "";
                        // ---------------------------------------------------------
                        //                                                   PATTERN
                        // ---------------------------------------------------------
                        if ($this.attr("pattern") !== undefined) {
                            message = "Not in the expected format<!-- data-validation-pattern-message to override -->";
                            if ($this.data("validationPatternMessage")) {
                                message = $this.data("validationPatternMessage");
                            }
                            $this.data("validationPatternMessage", message);
                            $this.data("validationPatternRegex", $this.attr("pattern"));
                        }
                        // ---------------------------------------------------------
                        //                                                       MAX
                        // ---------------------------------------------------------
                        if ($this.attr("max") !== undefined || $this.attr("aria-valuemax") !== undefined) {
                            var max = ($this.attr("max") !== undefined ? $this.attr("max") : $this.attr("aria-valuemax"));
                            message = "Too high: Maximum of '" + max + "'<!-- data-validation-max-message to override -->";
                            if ($this.data("validationMaxMessage")) {
                                message = $this.data("validationMaxMessage");
                            }
                            $this.data("validationMaxMessage", message);
                            $this.data("validationMaxMax", max);
                        }
                        // ---------------------------------------------------------
                        //                                                       MIN
                        // ---------------------------------------------------------
                        if ($this.attr("min") !== undefined || $this.attr("aria-valuemin") !== undefined) {
                            var min = ($this.attr("min") !== undefined ? $this.attr("min") : $this.attr("aria-valuemin"));
                            message = "Too low: Minimum of '" + min + "'<!-- data-validation-min-message to override -->";
                            if ($this.data("validationMinMessage")) {
                                message = $this.data("validationMinMessage");
                            }
                            $this.data("validationMinMessage", message);
                            $this.data("validationMinMin", min);
                        }
                        // ---------------------------------------------------------
                        //                                                 MAXLENGTH
                        // ---------------------------------------------------------
                        if ($this.attr("maxlength") !== undefined) {
                            message = "Too long: Maximum of '" + $this.attr("maxlength") + "' characters<!-- data-validation-maxlength-message to override -->";
                            if ($this.data("validationMaxlengthMessage")) {
                                message = $this.data("validationMaxlengthMessage");
                            }
                            $this.data("validationMaxlengthMessage", message);
                            $this.data("validationMaxlengthMaxlength", $this.attr("maxlength"));
                        }
                        // ---------------------------------------------------------
                        //                                                 MINLENGTH
                        // ---------------------------------------------------------
                        if ($this.attr("minlength") !== undefined) {
                            message = "Too short: Minimum of '" + $this.attr("minlength") + "' characters<!-- data-validation-minlength-message to override -->";
                            if ($this.data("validationMinlengthMessage")) {
                                message = $this.data("validationMinlengthMessage");
                            }
                            $this.data("validationMinlengthMessage", message);
                            $this.data("validationMinlengthMinlength", $this.attr("minlength"));
                        }
                        // ---------------------------------------------------------
                        //                                                  REQUIRED
                        // ---------------------------------------------------------
                        if ($this.attr("required") !== undefined || $this.attr("aria-required") !== undefined) {
                            message = settings.builtInValidators.required.message;
                            if ($this.data("validationRequiredMessage")) {
                                message = $this.data("validationRequiredMessage");
                            }
                            $this.data("validationRequiredMessage", message);
                        }
                        // ---------------------------------------------------------
                        //                                                    NUMBER
                        // ---------------------------------------------------------
                        if ($this.attr("type") !== undefined && $this.attr("type").toLowerCase() === "number") {
                            message = settings.builtInValidators.number.message;
                            if ($this.data("validationNumberMessage")) {
                                message = $this.data("validationNumberMessage");
                            }
                            $this.data("validationNumberMessage", message);
                        }
                        // ---------------------------------------------------------
                        //                                                     EMAIL
                        // ---------------------------------------------------------
                        if ($this.attr("type") !== undefined && $this.attr("type").toLowerCase() === "email") {
                            message = "Not a valid email address<!-- data-validator-validemail-message to override -->";
                            if ($this.data("validationValidemailMessage")) {
                                message = $this.data("validationValidemailMessage");
                            } else if ($this.data("validationEmailMessage")) {
                                message = $this.data("validationEmailMessage");
                            }
                            $this.data("validationValidemailMessage", message);
                        }
                        // ---------------------------------------------------------
                        //                                                MINCHECKED
                        // ---------------------------------------------------------
                        if ($this.attr("minchecked") !== undefined) {
                            message = "Not enough options checked; Minimum of '" + $this.attr("minchecked") + "' required<!-- data-validation-minchecked-message to override -->";
                            if ($this.data("validationMincheckedMessage")) {
                                message = $this.data("validationMincheckedMessage");
                            }
                            $this.data("validationMincheckedMessage", message);
                            $this.data("validationMincheckedMinchecked", $this.attr("minchecked"));
                        }
                        // ---------------------------------------------------------
                        //                                                MAXCHECKED
                        // ---------------------------------------------------------
                        if ($this.attr("maxchecked") !== undefined) {
                            message = "Too many options checked; Maximum of '" + $this.attr("maxchecked") + "' required<!-- data-validation-maxchecked-message to override -->";
                            if ($this.data("validationMaxcheckedMessage")) {
                                message = $this.data("validationMaxcheckedMessage");
                            }
                            $this.data("validationMaxcheckedMessage", message);
                            $this.data("validationMaxcheckedMaxchecked", $this.attr("maxchecked"));
                        }
                    }

                    // =============================================================
                    //                                       COLLECT VALIDATOR NAMES
                    // =============================================================

                    // Get named validators
                    if ($this.data("validation") !== undefined) {
                        validatorNames = $this.data("validation").split(",");
                    }

                    // Get extra ones defined on the element's data attributes
                    $.each($this.data(), function (i, el) {
                        var parts = i.replace(/([A-Z])/g, ",$1").split(",");
                        if (parts[0] === "validation" && parts[1]) {
                            validatorNames.push(parts[1]);
                        }
                    });

                    // =============================================================
                    //                                     NORMALISE VALIDATOR NAMES
                    // =============================================================

                    var validatorNamesToInspect = validatorNames;
                    var newValidatorNamesToInspect = [];

                    do // repeatedly expand 'shortcut' validators into their real validators
                    {
                        // Uppercase only the first letter of each name
                        $.each(validatorNames, function (i, el) {
                            validatorNames[i] = formatValidatorName(el);
                        });

                        // Remove duplicate validator names
                        validatorNames = $.unique(validatorNames);

                        // Pull out the new validator names from each shortcut
                        newValidatorNamesToInspect = [];
                        $.each(validatorNamesToInspect, function(i, el) {
                            if ($this.data("validation" + el + "Shortcut") !== undefined) {
                                // Are these custom validators?
                                // Pull them out!
                                $.each($this.data("validation" + el + "Shortcut").split(","), function(i2, el2) {
                                    newValidatorNamesToInspect.push(el2);
                                });
                            } else if (settings.builtInValidators[el.toLowerCase()]) {
                                // Is this a recognised built-in?
                                // Pull it out!
                                var validator = settings.builtInValidators[el.toLowerCase()];
                                if (validator.type.toLowerCase() === "shortcut") {
                                    $.each(validator.shortcut.split(","), function (i, el) {
                                        el = formatValidatorName(el);
                                        newValidatorNamesToInspect.push(el);
                                        validatorNames.push(el);
                                    });
                                }
                            }
                        });

                        validatorNamesToInspect = newValidatorNamesToInspect;

                    } while (validatorNamesToInspect.length > 0)

                    // =============================================================
                    //                                       SET UP VALIDATOR ARRAYS
                    // =============================================================

                    var validators = {};

                    $.each(validatorNames, function (i, el) {
                        // Set up the 'override' message
                        var message = $this.data("validation" + el + "Message");
                        var hasOverrideMessage = (message !== undefined);
                        var foundValidator = false;
                        message =
                            (
                                message
                                    ? message
                                    : "'" + el + "' validation failed <!-- Add attribute 'data-validation-" + el.toLowerCase() + "-message' to input to change this message -->"
                            )
                        ;

                        $.each(
                            settings.validatorTypes,
                            function (validatorType, validatorTemplate) {
                                if (validators[validatorType] === undefined) {
                                    validators[validatorType] = [];
                                }
                                if (!foundValidator && $this.data("validation" + el + formatValidatorName(validatorTemplate.name)) !== undefined) {
                                    validators[validatorType].push(
                                        $.extend(
                                            true,
                                            {
                                                name: formatValidatorName(validatorTemplate.name),
                                                message: message
                                            },
                                            validatorTemplate.init($this, el)
                                        )
                                    );
                                    foundValidator = true;
                                }
                            }
                        );

                        if (!foundValidator && settings.builtInValidators[el.toLowerCase()]) {

                            var validator = $.extend(true, {}, settings.builtInValidators[el.toLowerCase()]);
                            if (hasOverrideMessage) {
                                validator.message = message;
                            }
                            var validatorType = validator.type.toLowerCase();

                            if (validatorType === "shortcut") {
                                foundValidator = true;
                            } else {
                                $.each(
                                    settings.validatorTypes,
                                    function (validatorTemplateType, validatorTemplate) {
                                        if (validators[validatorTemplateType] === undefined) {
                                            validators[validatorTemplateType] = [];
                                        }
                                        if (!foundValidator && validatorType === validatorTemplateType.toLowerCase()) {
                                            $this.data("validation" + el + formatValidatorName(validatorTemplate.name), validator[validatorTemplate.name.toLowerCase()]);
                                            validators[validatorType].push(
                                                $.extend(
                                                    validator,
                                                    validatorTemplate.init($this, el)
                                                )
                                            );
                                            foundValidator = true;
                                        }
                                    }
                                );
                            }
                        }

                        if (! foundValidator) {
                            $.error("Cannot find validation info for '" + el + "'");
                        }
                    });

                    // =============================================================
                    //                                         STORE FALLBACK VALUES
                    // =============================================================

                    $helpBlock.data(
                        "original-contents",
                        (
                            $helpBlock.data("original-contents")
                                ? $helpBlock.data("original-contents")
                                : $helpBlock.html()
                        )
                    );

                    $helpBlock.data(
                        "original-role",
                        (
                            $helpBlock.data("original-role")
                                ? $helpBlock.data("original-role")
                                : $helpBlock.attr("role")
                        )
                    );

                    $controlGroup.data(
                        "original-classes",
                        (
                            $controlGroup.data("original-clases")
                                ? $controlGroup.data("original-classes")
                                : $controlGroup.attr("class")
                        )
                    );

                    $this.data(
                        "original-aria-invalid",
                        (
                            $this.data("original-aria-invalid")
                                ? $this.data("original-aria-invalid")
                                : $this.attr("aria-invalid")
                        )
                    );

                    // =============================================================
                    //                                                    VALIDATION
                    // =============================================================

                    $this.bind(
                        "validation.validation",
                        function (event, params) {

                            var value = getValue($this);

                            // Get a list of the errors to apply
                            var errorsFound = [];

                            $.each(validators, function (validatorType, validatorTypeArray) {
                                if (value || value.length || (params && params.includeEmpty) || (!!settings.validatorTypes[validatorType].blockSubmit && params && !!params.submitting)) {
                                    $.each(validatorTypeArray, function (i, validator) {
                                        if (settings.validatorTypes[validatorType].validate($this, value, validator)) {
                                            errorsFound.push(validator.message);
                                        }
                                    });
                                }
                            });

                            return errorsFound;
                        }
                    );

                    $this.bind(
                        "getValidators.validation",
                        function () {
                            return validators;
                        }
                    );

                    // =============================================================
                    //                                             WATCH FOR CHANGES
                    // =============================================================
                    $this.bind(
                        "submit.validation",
                        function () {
                            return $this.triggerHandler("change.validation", {submitting: true});
                        }
                    );
                    $this.bind(
                        [
                            "keyup",
                            "focus",
                            "blur",
                            "click",
                            "keydown",
                            "keypress",
                            "change"
                        ].join(".validation ") + ".validation",
                        function (e, params) {

                            var value = getValue($this);

                            var errorsFound = [];

                            $controlGroup.find("input,textarea,select").each(function (i, el) {
                                var oldCount = errorsFound.length;
                                $.each($(el).triggerHandler("validation.validation", params), function (j, message) {
                                    errorsFound.push(message);
                                });
                                if (errorsFound.length > oldCount) {
                                    $(el).attr("aria-invalid", "true");
                                } else {
                                    var original = $this.data("original-aria-invalid");
                                    $(el).attr("aria-invalid", (original !== undefined ? original : false));
                                }
                            });

                            $form.find("input,select,textarea").not($this).not("[name=\"" + $this.attr("name") + "\"]").trigger("validationLostFocus.validation");

                            errorsFound = $.unique(errorsFound.sort());

                            // Were there any errors?
                            if (errorsFound.length) {
                                // Better flag it up as a warning.
                                $controlGroup.removeClass("success error").addClass("warning");

                                // How many errors did we find?
                                if (settings.options.semanticallyStrict && errorsFound.length === 1) {
                                    // Only one? Being strict? Just output it.
                                    $helpBlock.html(errorsFound[0] +
                                    ( settings.options.prependExistingHelpBlock ? $helpBlock.data("original-contents") : "" ));
                                } else {
                                    // Multiple? Being sloppy? Glue them together into an UL.
                                    $helpBlock.html("<ul role=\"alert\"><li>" + errorsFound.join("</li><li>") + "</li></ul>" +
                                    ( settings.options.prependExistingHelpBlock ? $helpBlock.data("original-contents") : "" ));
                                }
                            } else {
                                $controlGroup.removeClass("warning error success");
                                if (value.length > 0) {
                                    $controlGroup.addClass("success");
                                }
                                $helpBlock.html($helpBlock.data("original-contents"));
                            }

                            if (e.type === "blur") {
                                $controlGroup.removeClass("success");
                            }
                        }
                    );
                    $this.bind("validationLostFocus.validation", function () {
                        $controlGroup.removeClass("success");
                    });
                });
            },
            destroy : function( ) {

                return this.each(
                    function() {

                        var
                            $this = $(this),
                            $controlGroup = $this.parents(".form-group").first(),
                            $helpBlock = $controlGroup.find(".help-block").first();

                        // remove our events
                        $this.unbind('.validation'); // events are namespaced.
                        // reset help text
                        $helpBlock.html($helpBlock.data("original-contents"));
                        // reset classes
                        $controlGroup.attr("class", $controlGroup.data("original-classes"));
                        // reset aria
                        $this.attr("aria-invalid", $this.data("original-aria-invalid"));
                        // reset role
                        $helpBlock.attr("role", $this.data("original-role"));
                        // remove all elements we created
                        if (createdElements.indexOf($helpBlock[0]) > -1) {
                            $helpBlock.remove();
                        }

                    }
                );

            },
            collectErrors : function(includeEmpty) {

                var errorMessages = {};
                this.each(function (i, el) {
                    var $el = $(el);
                    var name = $el.attr("name");
                    var errors = $el.triggerHandler("validation.validation", {includeEmpty: true});
                    errorMessages[name] = $.extend(true, errors, errorMessages[name]);
                });

                $.each(errorMessages, function (i, el) {
                    if (el.length === 0) {
                        delete errorMessages[i];
                    }
                });

                return errorMessages;

            },
            hasErrors: function() {

                var errorMessages = [];

                this.each(function (i, el) {
                    errorMessages = errorMessages.concat(
                        $(el).triggerHandler("getValidators.validation") ? $(el).triggerHandler("validation.validation", {submitting: true}) : []
                    );
                });

                return (errorMessages.length > 0);
            },
            override : function (newDefaults) {
                defaults = $.extend(true, defaults, newDefaults);
            }
        },
        validatorTypes: {
            callback: {
                name: "callback",
                init: function ($this, name) {
                    return {
                        validatorName: name,
                        callback: $this.data("validation" + name + "Callback"),
                        lastValue: $this.val(),
                        lastValid: true,
                        lastFinished: true
                    };
                },
                validate: function ($this, value, validator) {
                    if (validator.lastValue === value && validator.lastFinished) {
                        return !validator.lastValid;
                    }

                    if (validator.lastFinished === true)
                    {
                        validator.lastValue = value;
                        validator.lastValid = true;
                        validator.lastFinished = false;

                        var rrjqbvValidator = validator;
                        var rrjqbvThis = $this;
                        executeFunctionByName(
                            validator.callback,
                            window,
                            $this,
                            value,
                            function (data) {
                                if (rrjqbvValidator.lastValue === data.value) {
                                    rrjqbvValidator.lastValid = data.valid;
                                    if (data.message) {
                                        rrjqbvValidator.message = data.message;
                                    }
                                    rrjqbvValidator.lastFinished = true;
                                    rrjqbvThis.data("validation" + rrjqbvValidator.validatorName + "Message", rrjqbvValidator.message);
                                    // Timeout is set to avoid problems with the events being considered 'already fired'
                                    setTimeout(function () {
                                        rrjqbvThis.trigger("change.validation");
                                    }, 1); // doesn't need a long timeout, just long enough for the event bubble to burst
                                }
                            }
                        );
                    }

                    return false;

                }
            },
            ajax: {
                name: "ajax",
                init: function ($this, name) {
                    return {
                        validatorName: name,
                        url: $this.data("validation" + name + "Ajax"),
                        lastValue: $this.val(),
                        lastValid: true,
                        lastFinished: true
                    };
                },
                validate: function ($this, value, validator) {
                    if (""+validator.lastValue === ""+value && validator.lastFinished === true) {
                        return validator.lastValid === false;
                    }

                    if (validator.lastFinished === true)
                    {
                        validator.lastValue = value;
                        validator.lastValid = true;
                        validator.lastFinished = false;
                        $.ajax({
                            url: validator.url,
                            data: "value=" + value + "&field=" + $this.attr("name"),
                            dataType: "json",
                            success: function (data) {
                                if (""+validator.lastValue === ""+data.value) {
                                    validator.lastValid = !!(data.valid);
                                    if (data.message) {
                                        validator.message = data.message;
                                    }
                                    validator.lastFinished = true;
                                    $this.data("validation" + validator.validatorName + "Message", validator.message);
                                    // Timeout is set to avoid problems with the events being considered 'already fired'
                                    setTimeout(function () {
                                        $this.trigger("change.validation");
                                    }, 1); // doesn't need a long timeout, just long enough for the event bubble to burst
                                }
                            },
                            failure: function () {
                                validator.lastValid = true;
                                validator.message = "ajax call failed";
                                validator.lastFinished = true;
                                $this.data("validation" + validator.validatorName + "Message", validator.message);
                                // Timeout is set to avoid problems with the events being considered 'already fired'
                                setTimeout(function () {
                                    $this.trigger("change.validation");
                                }, 1); // doesn't need a long timeout, just long enough for the event bubble to burst
                            }
                        });
                    }

                    return false;

                }
            },
            regex: {
                name: "regex",
                init: function ($this, name) {
                    return {regex: regexFromString($this.data("validation" + name + "Regex"))};
                },
                validate: function ($this, value, validator) {
                    return (!validator.regex.test(value) && ! validator.negative)
                        || (validator.regex.test(value) && validator.negative);
                }
            },
            required: {
                name: "required",
                init: function ($this, name) {
                    return {};
                },
                validate: function ($this, value, validator) {
                    return !!(value.length === 0  && ! validator.negative)
                        || !!(value.length > 0 && validator.negative);
                },
                blockSubmit: true
            },
            match: {
                name: "match",
                init: function ($this, name) {
                    var element = $this.parents("form").first().find("[name=\"" + $this.data("validation" + name + "Match") + "\"]").first();
                    element.bind("validation.validation", function () {
                        $this.trigger("change.validation", {submitting: true});
                    });
                    return {"element": element};
                },
                validate: function ($this, value, validator) {
                    return (value !== validator.element.val() && ! validator.negative)
                        || (value === validator.element.val() && validator.negative);
                },
                blockSubmit: true
            },
            max: {
                name: "max",
                init: function ($this, name) {
                    return {max: $this.data("validation" + name + "Max")};
                },
                validate: function ($this, value, validator) {
                    return (parseFloat(value, 10) > parseFloat(validator.max, 10) && ! validator.negative)
                        || (parseFloat(value, 10) <= parseFloat(validator.max, 10) && validator.negative);
                }
            },
            min: {
                name: "min",
                init: function ($this, name) {
                    return {min: $this.data("validation" + name + "Min")};
                },
                validate: function ($this, value, validator) {
                    return (parseFloat(value) < parseFloat(validator.min) && ! validator.negative)
                        || (parseFloat(value) >= parseFloat(validator.min) && validator.negative);
                }
            },
            maxlength: {
                name: "maxlength",
                init: function ($this, name) {
                    return {maxlength: $this.data("validation" + name + "Maxlength")};
                },
                validate: function ($this, value, validator) {
                    return ((value.length > validator.maxlength) && ! validator.negative)
                        || ((value.length <= validator.maxlength) && validator.negative);
                }
            },
            minlength: {
                name: "minlength",
                init: function ($this, name) {
                    return {minlength: $this.data("validation" + name + "Minlength")};
                },
                validate: function ($this, value, validator) {
                    return ((value.length < validator.minlength) && ! validator.negative)
                        || ((value.length >= validator.minlength) && validator.negative);
                }
            },
            maxchecked: {
                name: "maxchecked",
                init: function ($this, name) {
                    var elements = $this.parents("form").first().find("[name=\"" + $this.attr("name") + "\"]");
                    elements.bind("click.validation", function () {
                        $this.trigger("change.validation", {includeEmpty: true});
                    });
                    return {maxchecked: $this.data("validation" + name + "Maxchecked"), elements: elements};
                },
                validate: function ($this, value, validator) {
                    return (validator.elements.filter(":checked").length > validator.maxchecked && ! validator.negative)
                        || (validator.elements.filter(":checked").length <= validator.maxchecked && validator.negative);
                },
                blockSubmit: true
            },
            minchecked: {
                name: "minchecked",
                init: function ($this, name) {
                    var elements = $this.parents("form").first().find("[name=\"" + $this.attr("name") + "\"]");
                    elements.bind("click.validation", function () {
                        $this.trigger("change.validation", {includeEmpty: true});
                    });
                    return {minchecked: $this.data("validation" + name + "Minchecked"), elements: elements};
                },
                validate: function ($this, value, validator) {
                    return (validator.elements.filter(":checked").length < validator.minchecked && ! validator.negative)
                        || (validator.elements.filter(":checked").length >= validator.minchecked && validator.negative);
                },
                blockSubmit: true
            }
        },
        builtInValidators: {
            email: {
                name: "Email",
                type: "shortcut",
                shortcut: "validemail"
            },
            validemail: {
                name: "Validemail",
                type: "regex",
                regex: "[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\\.[A-Za-z]{2,4}",
                message: "Not a valid email address<!-- data-validator-validemail-message to override -->"
            },
            passwordagain: {
                name: "Passwordagain",
                type: "match",
                match: "password",
                message: "Does not match the given password<!-- data-validator-paswordagain-message to override -->"
            },
            positive: {
                name: "Positive",
                type: "shortcut",
                shortcut: "number,positivenumber"
            },
            negative: {
                name: "Negative",
                type: "shortcut",
                shortcut: "number,negativenumber"
            },
            number: {
                name: "Number",
                type: "regex",
                regex: "([+-]?\\\d+(\\\.\\\d*)?([eE][+-]?[0-9]+)?)?",
                message: "Must be a number<!-- data-validator-number-message to override -->"
            },
            integer: {
                name: "Integer",
                type: "regex",
                regex: "[+-]?\\\d+",
                message: "No decimal places allowed<!-- data-validator-integer-message to override -->"
            },
            positivenumber: {
                name: "Positivenumber",
                type: "min",
                min: 0,
                message: "Must be a positive number<!-- data-validator-positivenumber-message to override -->"
            },
            negativenumber: {
                name: "Negativenumber",
                type: "max",
                max: 0,
                message: "Must be a negative number<!-- data-validator-negativenumber-message to override -->"
            },
            required: {
                name: "Required",
                type: "required",
                message: "This is required<!-- data-validator-required-message to override -->"
            },
            checkone: {
                name: "Checkone",
                type: "minchecked",
                minchecked: 1,
                message: "Check at least one option<!-- data-validation-checkone-message to override -->"
            }
        }
    };

    var formatValidatorName = function (name) {
        return name
            .toLowerCase()
            .replace(
            /(^|\s)([a-z])/g ,
            function(m,p1,p2) {
                return p1+p2.toUpperCase();
            }
        )
            ;
    };

    var getValue = function ($this) {
        // Extract the value we're talking about
        var value = $this.val();
        var type = $this.attr("type");
        if (type === "checkbox") {
            value = ($this.is(":checked") ? value : "");
        }
        if (type === "radio") {
            value = ($('input[name="' + $this.attr("name") + '"]:checked').length > 0 ? value : "");
        }
        return value;
    };

    function regexFromString(inputstring) {
        return new RegExp("^" + inputstring + "$");
    }

    /**
     * Thanks to Jason Bunting via StackOverflow.com
     *
     * http://stackoverflow.com/questions/359788/how-to-execute-a-javascript-function-when-i-have-its-name-as-a-string#answer-359910
     * Short link: http://tinyurl.com/executeFunctionByName
     **/
    function executeFunctionByName(functionName, context /*, args*/) {
        var args = Array.prototype.slice.call(arguments).splice(2);
        var namespaces = functionName.split(".");
        var func = namespaces.pop();
        for(var i = 0; i < namespaces.length; i++) {
            context = context[namespaces[i]];
        }
        return context[func].apply(this, args);
    }

    $.fn.jqBootstrapValidation = function( method ) {

        if ( defaults.methods[method] ) {
            return defaults.methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
        } else if ( typeof method === 'object' || ! method ) {
            return defaults.methods.init.apply( this, arguments );
        } else {
            $.error( 'Method ' +  method + ' does not exist on jQuery.jqBootstrapValidation' );
            return null;
        }

    };

    $.jqBootstrapValidation = function (options) {
        $(":input").not("[type=image],[type=submit]").jqBootstrapValidation.apply(this,arguments);
    };

})( jQuery );

// Floating label headings for the contact form
$(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });
});
