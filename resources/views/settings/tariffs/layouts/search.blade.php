<!-- Add User Modal -->

<div class="modal fade" id="myTariffSearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

<div class="modal-dialog" role="document">

    <div class="modal-content">

        <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

            <h5 class="modal-title" id="myModalLabel" style="margin-right: 200px">Search Tariff</h4>

        </div>

        <div class="modal-body">

            <form role="form"   method="POST" action="{{ url('settings/tariffs/search') }}">

                {{ csrf_field() }}

                <div class="form-group">

                    <label  for="form-username">Amount<span class="text-danger">*</span></label>

                    <input type="text" name="amount" placeholder="Amount..." class="form-username form-control"  required parsley-type="text">

                </div>

                <div class="modal-footer">

                    <button type="submit" class="btn btn-info">Search Tariff</button>

                </div>

            </form>

        </div>

    </div>

</div>

</div>

<!-- End Add User Modal -->



<div class="row" style="margin: 10px; margin-left: 500px">

<button class="btn btn-custom float-right" data-toggle="modal" data-target="#myTariffSearch"><i class="fa fa-fw fa-plus"></i>Search Tariff</button>

<br>

</div>