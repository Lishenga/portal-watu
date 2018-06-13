<!-- Add User Modal -->

<div class="modal fade" id="myTariff" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h5 class="modal-title" id="myModalLabel" style="margin-right: 200px">New Tariff</h4>

        </div>

        <div class="modal-body">

            <form role="form"   method="POST" action="{{ url('settings/tariffs/create') }}">

                {{ csrf_field() }}

                <div class="form-group">

                    <label  for="form-username">Maximum<span class="text-danger">*</span></label>

                    <input type="text" name="max" placeholder="Maximum..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Minimum<span class="text-danger">*</span></label>

                    <input type="text" name="min" placeholder="Minimum..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="form-group">

                    <label  for="form-username">Tariff Type<span class="text-danger">*</span></label>

                    <select class="form-control selectpicker" id="sell" name="tariff" data-live-search="true">

                        <option value="M-PESA">M-PESA</option>

                        <option value="STRIPE">STRIPE</option>

                    </select>

                </div>

                <div class="form-group">

                    <label  for="form-username">Amount<span class="text-danger">*</span></label>

                    <input type="text" name="amount" placeholder="Amount..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-info">Create Tariff</button>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

<!-- End Add User Modal -->



<div class="row" style="margin: 10px">

<button class="btn btn-custom" data-toggle="modal" data-target="#myTariff"><i class="fa fa-fw fa-plus"></i>New Tariff</button>

<br>

</div>