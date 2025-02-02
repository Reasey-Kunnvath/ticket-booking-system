@extends('backend.layout.masterPage')
@section('title', 'Manage Ticket')
@section('ticket_show', 'show')
@section('mt_active', 'active')
@section('content')
    <h1>Manage Ticket</h1>
    <div class="section contact ">
        <div class="row gy-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row" style="text-align: center">
                                <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4">
                                        <h5>Organization</h5>
                                        <h5>PDIDDY</h5>
                                    </div>
                                </div>
                                 <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4 ">
                                        <h5>Event Start Date</h5>
                                        <h5>2021-09-09</h5>
                                    </div>
                                </div>
                                 <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4 ">
                                        <h5>Event End Date</h5>
                                        <h5>2021-09-09</h5>
                                    </div>
                                </div>
                                 <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4 ">
                                        <h5>Ticket Price</h5>
                                        <h5>1000</h5>
                                    </div>
                                </div>
                                 <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4 ">
                                        <h5>Ticket Quantity</h5>
                                        <h5>100</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-2 " >
                                    <div class="d-flex flex-column">
                                        <a href="{{ route('manageTicketViewDetail') }}" type="button"
                                            class="btn btn-warning mb-3">View Detail</a>
                                      <div>
                                             <a href="{{route('manageTicketEdit')}}" type="button" class="btn btn-success" >Edit Event</a>
                                        <!-- Disabled Backdrop Modal-->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#Reject">
                                           Delete Event
                                        </button>
                                        <div class="modal fade" id="Reject" tabindex="-1"
                                            data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Warning</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to Delete this Event? This action cannot be undone
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Disabled Backdrop Modal-->
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-12">
                        <div class="card">
                            <div class="row" style="text-align: center">
                                <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4">
                                        <h5>Organization</h5>
                                        <h5>PDIDDY</h5>

                                    </div>
                                </div>
                                 <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4 ">
                                        <h5>Event Start Date</h5>
                                        <h5>2021-09-09</h5>
                                    </div>
                                </div>
                                 <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4 ">
                                        <h5>Event End Date</h5>
                                        <h5>2021-09-09</h5>
                                    </div>
                                </div>
                                 <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4 ">
                                        <h5>Ticket Price</h5>
                                        <h5>1000</h5>
                                    </div>
                                </div>
                                 <div class="info-box col-lg-2" >
                                    <div class="d-grid gap-4 ">
                                        <h5>Ticket Quantity</h5>
                                        <h5>100</h5>
                                    </div>
                                </div>
                                <div class="info-box col-lg-2 " >
                                    <div class="d-flex flex-column">
                                        <a href="{{ route('manageTicketViewDetail') }}" type="button"
                                            class="btn btn-warning mb-3">View Detail</a>
                                      <div>
                                          <!-- Disabled Backdrop Modal-->
                                        <button type="button" class="btn btn-success " data-bs-toggle="modal"
                                            data-bs-target="#Approve">
                                            Edit Event
                                        </button>
                                        <div class="modal fade" id="Approve" tabindex="-1"
                                            data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Warning</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to Approve this request? This action cannot be undone
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-success"> Approve</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Disabled Backdrop Modal-->
                                        <!-- Disabled Backdrop Modal-->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#Reject">
                                           Delete Event
                                        </button>
                                        <div class="modal fade" id="Reject" tabindex="-1"
                                            data-bs-backdrop="false">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Warning</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to Reject this request? This action cannot be undone
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-danger">Reject</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Disabled Backdrop Modal-->
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endsection
