<!-- Add User Modal -->

<div class="modal fade" id="myPermission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h5 class="modal-title" id="myModalLabel" style="margin-right: 200px">New Permission</h4>

        </div>

        <div class="modal-body">

            <form role="form"   method="POST" action="{{ url('permissions/create') }}">

                {{ csrf_field() }}

                <div class="form-group">

                    <label  for="form-username">Permission Name<span class="text-danger"></span></label>

                    <input type="text" name="name" placeholder="Permission Name..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Display Name<span class="text-danger"></span></label>

                    <input type="text" name="display_name" placeholder="Display Name..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Description<span class="text-danger"></span></label>

                    <textarea rows="4" cols="50" name="description" placeholder="Description..." class="form-username form-control"  required parsley-type="text"></textarea>

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-info">Create Permission</button>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

<!-- End Add User Modal -->



<div class="row" style="margin: 10px">

<button class="btn btn-custom" data-toggle="modal" data-target="#myPermission"><i class="fa fa-fw fa-plus"></i>New Permission</button>

<br>

</div>