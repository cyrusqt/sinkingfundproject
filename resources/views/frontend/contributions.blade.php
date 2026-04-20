
@extends('frontend.master')

@section('page-title', 'Contributions')

@section('topbar-actions')
  <button class="btn btn-primary" onclick="openLogModal()">+ Log Contribution</button>
@endsection

@section('content')

  <div class="section-header">
    <div class="section-title">All Contributions</div>
    <button class="btn btn-primary" onclick="openLogModal()">+ Log Contribution</button>
  </div>
  <div class="panel">
    <div class="table-wrap">
      <table class="log-table">
        <thead>
          <tr><th>Fund</th><th>Date</th><th>Note</th><th>Amount</th><th>Type</th><th></th></tr>
        </thead>
        <tbody id="log-tbody-tab"></tbody>
      </table>
    </div>
    <div id="log-empty-tab" class="empty-log" style="display:none">No contributions logged yet.</div>
  </div>
@section('page-script')
  renderLogsTab();
@endsection
@endsection