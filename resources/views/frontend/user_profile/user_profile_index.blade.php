@extends('frontend.layout.master')
@section('title','Your Profile')
@section('content')

<style type="text/css">
    body {
      background: #f5f5f5;
      margin-top: 20px;
    }

    .ui-w-80 {
      width: 80px !important;
      height: auto;
    }

    .btn-default {
      border-color: rgba(24, 28, 33, 0.1);
      background: rgba(0, 0, 0, 0);
      color: #4e5155;
    }

    label.btn {
      margin-bottom: 0;
    }

    .btn-outline-primary {
      border-color: #26b4ff;
      background: transparent;
      color: #26b4ff;
    }

    .btn {
      cursor: pointer;
    }

    .text-light {
      color: #babbbc !important;
    }

    .btn-facebook {
      border-color: rgba(0, 0, 0, 0);
      background: #3b5998;
      color: #fff;
    }

    .btn-instagram {
      border-color: rgba(0, 0, 0, 0);
      background: #000;
      color: #fff;
    }

    .card {
      background-clip: padding-box;
      box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
    }

    .row-bordered {
      overflow: hidden;
    }

    .account-settings-fileinput {
      position: absolute;
      visibility: hidden;
      width: 1px;
      height: 1px;
      opacity: 0;
    }
    .account-settings-links .list-group-item.active {
      font-weight: bold !important;
    }
    html:not(.dark-style) .account-settings-links .list-group-item.active {
      background: transparent !important;
    }
    .account-settings-multiselect ~ .select2-container {
      width: 100% !important;
    }
    .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
    }
    .light-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
    }
    .material-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
    }
    .material-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
    }
    .dark-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(255, 255, 255, 0.03) !important;
    }
    .dark-style .account-settings-links .list-group-item.active {
      color: #fff !important;
    }
    .light-style .account-settings-links .list-group-item.active {
      color: #4e5155 !important;
    }
    .light-style .account-settings-links .list-group-item {
      padding: 0.85rem 1.5rem;
      border-color: rgba(24, 28, 33, 0.03) !important;
    }
</style>

<div class="container light-style flex-grow-1 container-p-y mt-4">
    <h4 class="fw-bold py-3 mb-4">Account settings</h4>
    <div class="card overflow-hidden">
        <div class="row row-bordered row-border-primary">
            <div class="col-md-3 pt-0">
                <div class="list-group list-group-flush account-settings-links">
                    <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account-general-info">
                        <i class="fa fa-user me-2"></i> Your Information
                    </a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#">
                        <i class="fa fa-shopping-cart me-2"></i> Your Orders
                    </a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#">
                        <i class="fa fa-tags me-2"></i> Your Vouchers/Coupons
                    </a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#account-change-password">
                        <i class="fa fa-lock me-2"></i> Change Password
                    </a>
                    <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#billing-information">
                        <i class="fa fa-credit-card me-2"></i> Billing & Payment
                    </a>
                </div>
                <div class="list-group list-group-flush account-settings-links">
                    <a class="list-group-item text-danger" href="#">
                        <i class="fa fa-sign-out-alt me-2"></i> Log Out
                    </a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="account-general-info">
                        <!-- Account General Section -->
                        <div class="card-body d-flex align-items-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-80" />
                            <div class="ms-4">
                                <label class="btn btn-outline-primary">
                                    Upload new photo
                                    <input type="file" class="account-settings-fileinput" />
                                </label>
                                &nbsp;
                                <button type="button" class="btn btn-default">Reset</button>
                                <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                            </div>
                        </div>
                        <hr class="border-light m-0" />
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" value="nmaxwell" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="Nelle Maxwell" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">E-mail</label>
                                <input type="text" class="form-control mb-1" value="nmaxwell@mail.com" />
                                <div class="alert alert-warning mt-3">Your email is not confirmed. Please check your inbox.<br />
                                    <a href="javascript:void(0)">Resend confirmation</a>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Company</label>
                                <input type="text" class="form-control" value="Company Ltd." />
                            </div>
                        </div>
                        <!-- Account Info Section -->
                        <hr class="border-light m-0" />
                        <div class="card-body pb-2">
                            <div class="mb-3">
                                <label class="form-label">Bio</label>
                                <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet...</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Birthday</label>
                                <input type="text" class="form-control" value="May 3, 1995" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <select class="form-select">
                                    <option>USA</option>
                                    <option selected>Canada</option>
                                    <option>UK</option>
                                    <option>Germany</option>
                                    <option>France</option>
                                </select>
                            </div>
                        </div>
                        <hr class="border-light m-0" />
                        <div class="card-body pb-2">
                            <h6 class="mb-4">Contacts</h6>
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control" value="+0 (123) 456 7891" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Website</label>
                                <input type="text" class="form-control" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="account-change-password">
                        <div class="card-body pb-2">
                            <div class="mb-3">
                                <label class="form-label">Current password</label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New password</label>
                                <input type="password" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Repeat new password</label>
                                <input type="password" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="billing-information">
                        <div class="card-body pb-2">
                            <h6 class="mb-4">Billing Settings</h6>
                            <div class="mb-3">
                                <label class="form-label">Payment Method</label>
                                <div class="small text-muted mb-2">You have not added a payment method.</div>
                                <button class="btn btn-info" type="button">Add Payment Method</button>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Payment History</label>
                                <div class="border border-secondary bg-light p-3 text-center small">
                                    You have not made any payment.
                                </div>
                            </div>
                        </div>
                        <hr class="border-light m-0" />
                    </div>


                    <!-- Add additional tabs as necessary -->
                </div>
            </div>
        </div>
    </div>
    <div class="text-end mt-3">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-default">Cancel</button>
    </div>
</div>


  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script
  data-cfasync="false"
  src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

<script type="text/javascript"></script>

@endsection
