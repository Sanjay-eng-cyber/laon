@extends('backend.layouts.app')
@section('title', 'City - ' . $city->name)
@section('content')
    <div class="layout-px-spacing row layout-top-spacing m-0">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center mb-1">
                        <div class="col-xl-4 col-md-6 col-sm-6 mt-2 mb-1">
                            <legend class="h4">
                                City Details
                            </legend>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-6 mb-2 d-flex justify-content-end align-it mt-2 ">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">City Details</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="info statbox widget box box-shadow">
                <div class="row widget-header">
                    <div class="col-md-6">
                        <div class="work-section">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="degree3" class="cust-title"
                                                        class="label-title">Name</label><br>
                                                    <p class="label-title">{{ $city->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($city->services->count() != 0)
                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="degree3" class="cust-title label-title">Services
                                                            Name</label><br>
                                                        <p class="label-title">
                                                            {{ $city->services->pluck('name')->implode(', ') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('cdn')
        <link href="{{ asset('assets/css/components/tabs-accordian/custom-tabs.css') }}" rel="stylesheet" type="text/css" />
    @endsection
