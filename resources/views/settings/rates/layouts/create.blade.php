<!-- Add User Modal -->

<div class="modal fade" id="myRate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h5 class="modal-title" id="myModalLabel" style="margin-right: 200px">New Rate</h4>

        </div>

        <div class="modal-body">

            <form role="form"   method="POST" action="{{ url('settings/rates/create') }}">

                {{ csrf_field() }}

                <div class="form-group">

                    <label  for="form-username">High<span class="text-danger">*</span></label>

                    <input type="text" name="high" placeholder="High..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Low<span class="text-danger">*</span></label>

                    <input type="text" name="low" placeholder="Low..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Buying<span class="text-danger">*</span></label>

                    <input type="text" name="buying" placeholder="Buying..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Selling<span class="text-danger">*</span></label>

                    <input type="text" name="selling" placeholder="Selling..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-info">Create Rate</button>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

<!-- End Add User Modal -->



<div class="row" style="margin: 10px">

<button class="btn btn-custom" data-toggle="modal" data-target="#myRate"><i class="fa fa-fw fa-plus"></i>New Rate</button>

<br>

</div>