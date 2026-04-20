
@extends('frontend.master')

@section('page-title', 'My Funds')

@section('topbar-actions')
  <button class="btn btn-primary" onclick="openFundModal()">+ New Fund</button>
@endsection

@section('content')

  <div class="section-header">
    <div class="section-title">My Funds</div>
    <button class="btn btn-primary" onclick="openFundModal()">+ New Fund</button>
  </div>
  <div class="funds-grid" id="funds-grid-tab"></div>

  @section('page-script')
  renderFundsTab();

@endsection
