<!-- Add User Modal -->

<div class="modal fade" id="myCountry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h5 class="modal-title" id="myModalLabel" style="margin-right: 200px">Add Country</h4>

        </div>

        <div class="modal-body">

            <form role="form"   method="POST" action="{{ url('settings/country/create') }}">

                {{ csrf_field() }}

                <div class="form-group">

                    <label  for="form-username">Name<span class="text-danger">*</span></label>

                    <input type="text" name="name" placeholder="Name..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Country Code<span class="text-danger">*</span></label>

                    <input type="text" name="country" placeholder="Country Code..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Currency Code<span class="text-danger">*</span></label>

                    <input type="text" name="currency" placeholder="Currency Code..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-info">Add Country</button>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

<!-- End Add User Modal -->



<div class="row" style="margin: 10px">

    <button class="btn btn-custom" data-toggle="modal" data-target="#myCountry"><i class="fa fa-fw fa-plus"></i>New Country</button>

<br>

</div>