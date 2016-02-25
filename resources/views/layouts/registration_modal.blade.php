<div class="work">
    <div class="project-modal modal fade" id="registrationModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <i class="fa fa-times"></i>
            </div>
            <div class="container">
                <h2>Registration</h2>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        form here
                        {!! Form::open(array('route' => 'registration_store', 'method' => 'POST', 'class' => '')) !!}

                        {!! Form::close(); !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-8">
                        <button type="button" class="btn btn-default btn-lg" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
