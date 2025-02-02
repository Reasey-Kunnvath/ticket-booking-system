@extends('backend.layout.masterPage')
@section('title', 'Support Message List')
@section('support_show', 'show')
@section('support_active', 'active')
@section('content')
    <h1>Message List</h1>
    <div class="section contact ">
        <div class="row gy-4">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="my-auto col-lg-10">
                                        <dl class="row my-1">
                                            <dt class="col-sm-3 mx-3 my-1">New Support Ticket #123 From</dt>
                                            <dd class="col-sm-8 my-1">Dreamybull</dd>
                                             <dt class="col-sm-3 my-auto mx-3 ">Content:</dt>
                                            <dd class="col-sm-8 my-2" >“Hi i was facing a problem when trying to purchasing ticket....”</dd>
                                        </dl>
                                </div>
                                <div class="info-box col-lg-2">
                                    <a href="{{ route('supportMessageViewDetail') }}" type="button"
                                        class="btn btn-warning btn-lg me-2 ">
                                        View and Reply Message
                                    </a>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
