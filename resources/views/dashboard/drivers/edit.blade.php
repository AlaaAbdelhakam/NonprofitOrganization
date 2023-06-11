@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"> السائق </a>
                                </li>
                                <li class="breadcrumb-item active"> تعديل - {{ $driver->name }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> تعديل بيانات السائق </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('admin.drivers.update', $driver->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <input name="id" value="{{ $driver->id }}" type="hidden">


                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> بيانات السائق </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الاسم
                                                            </label>
                                                            <input type="text" id="driver_name" class="form-control"
                                                                placeholder="  " value="{{ $driver->driver_name }}" name="driver_name">
                                                            {{-- @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> تاريخ الميلاد
                                                            </label>
                                                          
                                                                <div class='input-group date' id='datetimepicker2'>
                                                                    <input type='text' value="{{ $driver->Date_of_birth->format('Y-m-d') }}" name="Date_of_birth" class="form-control" />
                                                                    <span class="input-group-addon">
                                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                                    </span>
                                                                 </div>
                                                            {{-- @error('slug')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror --}}
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> العنوان
                                                            </label>
                                                            <input type="text" id="address" class="form-control"
                                                                placeholder="  " value="{{ $driver->address }}" name="address">
                                                            {{-- @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror --}}
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> تحديث
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

    @endsection

    @section('scripts')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker2').datetimepicker({
                locale: 'en'
            });
        });
     </script>
    @endsection
