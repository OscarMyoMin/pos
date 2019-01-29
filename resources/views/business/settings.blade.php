@extends('layouts.app')
@section('title', __('business.business_settings'))

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>@lang('business.business_settings')</h1>
    <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol> -->
</section>

<!-- Main content -->
<section class="content">
{!! Form::open(['url' => action('BusinessController@postBusinessSettings'), 'method' => 'post', 'id' => 'bussiness_edit_form',
           'files' => true ]) !!}

    <div class="row">
        <div class="col-xs-12">
       <!--  <pos-tab-container> -->

        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">@lang('business.business')</a></li>
              <li><a href="#tab_2" data-toggle="tab">@lang('business.tax') @show_tooltip(__('tooltip.business_tax'))</a></li>
              <li><a href="#tab_3" data-toggle="tab">@lang('business.product')</a></li>
              <li><a href="#tab_4" data-toggle="tab">@lang('business.sale')</a></li>
              <li><a href="#tab_5" data-toggle="tab">@lang('purchase.purchases')</a></li>
              @if(!config('constants.disable_expiry', true))
              <li><a href="#tab_6" data-toggle="tab">@lang('business.dashboard')</a></li>
              @endif
              <li><a href="#tab_7" data-toggle="tab">@lang('business.system')</a></li>
              <li><a href="#tab_8" data-toggle="tab">@lang('lang_v1.prefixes')</a></li>
              <!-- <li><a href="#tab_9" data-toggle="tab">@lang('lang_v1.email_settings')</a></li> -->
              <li><a href="#tab_ten" data-toggle="tab">@lang('sale.pos_sale')</a></li>
              <!-- <li><a href="#tab_eleven" data-toggle="tab">@lang('lang_v1.modules')</a></li> -->
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
                @include('business.partials.settings_business')
                @include('business.partials.settings_tax')
                @include('business.partials.settings_product')
                @include('business.partials.settings_sales')
                @include('business.partials.settings_purchase')
                @if(!config('constants.disable_expiry', true))
                    @include('business.partials.settings_dashboard')
                @endif
                @include('business.partials.settings_system')
                @include('business.partials.settings_prefixes')
                <!-- @include('business.partials.settings_email') -->
                @include('business.partials.settings_pos')
                <!-- @include('business.partials.settings_modules') -->
            </div>
        </div>

        
        <!--  </pos-tab-container> -->
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <button class="btn btn-danger pull-right" type="submit">@lang('business.update_settings')</button>
        </div>
    </div>
{!! Form::close() !!}
</section>
<!-- /.content -->

@endsection