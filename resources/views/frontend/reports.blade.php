@extends('frontend.master')

@section('page-title', 'Reports')

@section('content')

  <div class="section-header">
    <div class="section-title">Reports</div>
  </div>

  <div class="summary-row" style="margin-bottom:24px">
    <div class="summary-card">
      <div class="summary-card-icon" style="background:#e6f4eb">📈</div>
      <div class="summary-card-val" id="rpt-total-saved">₱0</div>
      <div class="summary-card-label">Total Saved</div>
    </div>
    <div class="summary-card">
      <div class="summary-card-icon" style="background:#fef6e0">🎯</div>
      <div class="summary-card-val" id="rpt-total-goal">₱0</div>
      <div class="summary-card-label">Total Goal</div>
    </div>
    <div class="summary-card">
      <div class="summary-card-icon" style="background:#e8f0fe">💸</div>
      <div class="summary-card-val" id="rpt-total-deposits">₱0</div>
      <div class="summary-card-label">Total Deposited</div>
    </div>
    <div class="summary-card">
      <div class="summary-card-icon" style="background:#fdecea">🏧</div>
      <div class="summary-card-val" id="rpt-total-withdrawals">₱0</div>
      <div class="summary-card-label">Total Withdrawn</div>
    </div>
  </div>

  <div class="panel">
    <div class="section-header">
      <div class="section-title" style="font-size:16px">Fund Progress</div>
    </div>
    <div class="table-wrap">
      <table class="log-table">
        <thead>
          <tr><th>Fund</th><th>Saved</th><th>Goal</th><th>Progress</th><th>Monthly</th><th>Status</th></tr>
        </thead>
        <tbody id="rpt-tbody"></tbody>
      </table>
    </div>
    <div id="rpt-empty" class="empty-log" style="display:none">No funds to report yet.</div>
  </div>

@endsection