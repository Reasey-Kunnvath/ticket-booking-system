@extends('backend.layout.masterPage')
@section('title', 'Edit Ticket')
@section('content')
    <h1>Edit Ticket</h1>
    <div class="row" style="background: #fff">
        <form action="" class="row g-3">
            <div class="col-lg-4">
                <div class=" card-body">
                    <h5 class="card-title">Organization detail</h5>
                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Organization Name</label>
                            <input type="text" class="form-control" id="inputNanme4">
                        </div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Organization Type</label>
                            <input type="text" class="form-control" id="inputNanme4">
                        </div>
                    </div>
                    <!-- Vertical Form -->
                    <h5 class="card-title">Contact Information</h5>
                    <!-- Vertical Form -->
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="inputNanme4">
                        </div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="inputNanme4">
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <!-- Vertical Form -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="">
                    <div class=" card-body">
                        <h5 class="card-title">Event detail</h5>
                        <!-- Vertical Form -->
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Title</label>
                                <input type="text" class="form-control" id="inputNanme4">
                            </div>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Ticket Price</label>
                                <input type="text" class="form-control" id="inputNanme4">
                            </div>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Ticket Quantity</label>
                                <input type="text" class="form-control" id="inputNanme4">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Event Date</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="">
                    <div class=" card-body">
                        <h5 class="card-title" style="margin-top: 22px"></h5>
                        <!-- Vertical Form -->
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Sub Title</label>
                                <input type="text" class="form-control" id="inputNanme4">
                            </div>
                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Event Purpose</label>
                                <input type="text" class="form-control" id="inputNanme4" style="height: 350px">
                            </div>
                            <div class="">
                                <a href="{{route('managerticket')}}" type="submit" class="btn btn-primary">Save</a>
                                <a href="{{route('managerticket')}}" type="reset" class="btn btn-danger">Discard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
