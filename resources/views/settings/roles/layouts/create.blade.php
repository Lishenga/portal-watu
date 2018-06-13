
<!-- Add User Modal -->

<div class="modal fade" id="myUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h5 class="modal-title" id="myModalLabel" style="margin-right: 200px">New Role</h4>

        </div>

         <div class="modal-body">

            <form role="form"  method="POST" action="{{ url('roles/create') }}">

                {{ csrf_field() }}

                <div class="form-group">

                    <label  for="form-username">Name<span class="text-danger"></span></label>

                    <input type="text" name="name" placeholder="Name..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Display Name<span class="text-danger"></span></label>

                    <input type="text" name="display_name" placeholder="Display Name..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Description<span class="text-danger"></span></label>

                    <input type="text" name="description" placeholder="Description..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="col-md-6">

                    <fieldset class="form-group">

                    <label for="sell">Permission<span class="text-danger">*</span></label>

                        <select class="form-control selectpicker"  multiple data-max-options="10" name="permission[]" name="role" data-live-search="true">

                            @foreach($permission as $permissions)

                            <option value="{{$permissions->id}}">{{$permissions->name}}</option>

                            @endforeach

                        </select>

                        <small class="text-muted"> 
                        
                        </small>

                    </fieldset>

                </div

                <div class="modal-footer">

                    <button type="submit" class="btn btn-info">Create Role</button>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

<!-- End Add User Modal -->



<div class="row" style="margin: 10px;">

<button class="btn btn-custom" data-toggle="modal" data-target="#myUser"><i class="fa fa-fw fa-plus"></i>New Role</button>

<br>

</div>