@extends('frontend.master')

@section('page-title', 'Sinking Funds')

@section('topbar-actions')
  <button class="btn btn-secondary" onclick="openLogModal()">+ Log Contribution</button>
  <button class="btn btn-primary" onclick="openFundModal()">+ New Fund</button>
@endsection

@section('content')

  {{-- HERO --}}
  <div class="hero">
    <div class="hero-text">
      <h1>Good morning,<br>Juan! 👋</h1>
      <p>You're building wealth, one fund at a time.</p>
    </div>
    <div class="hero-stats">
      <div class="hero-stat">
        <div class="hero-stat-val" id="hero-saved">₱0</div>
        <div class="hero-stat-label">Total Saved</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-val" id="hero-goal">₱0</div>
        <div class="hero-stat-label">Total Goal</div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-val" id="hero-count">0</div>
        <div class="hero-stat-label">Active Funds</div>
      </div>
    </div>
  </div>

  {{-- SUMMARY CARDS --}}
  <div class="summary-row">
    <div class="summary-card">
      <div class="summary-card-icon" style="background:#e6f4eb">💵</div>
      <div class="summary-card-val" id="sum-balance">₱0</div>
      <div class="summary-card-label">Current Balance</div>
      <div class="badge badge-green" id="sum-balance-badge">—</div>
    </div>
    <div class="summary-card">
      <div class="summary-card-icon" style="background:#fef6e0">🎯</div>
      <div class="summary-card-val" id="sum-target">₱0</div>
      <div class="summary-card-label">Total Target</div>
      <div class="badge badge-amber" id="sum-pct">0% complete</div>
    </div>
    <div class="summary-card">
      <div class="summary-card-icon" style="background:#e8f0fe">📅</div>
      <div class="summary-card-val" id="sum-monthly">₱0</div>
      <div class="summary-card-label">Monthly Budget</div>
      <div class="badge badge-blue" id="sum-avg">₱0 / fund avg</div>
    </div>
    <div class="summary-card">
      <div class="summary-card-icon" style="background:#fdecea">📂</div>
      <div class="summary-card-val" id="sum-funds">0</div>
      <div class="summary-card-label">Total Funds</div>
      <div class="badge badge-red" id="sum-logs">0 log entries</div>
    </div>
  </div>

  {{-- FUNDS + DONUT --}}
  <div class="grid-2">
    <div>
      <div class="section-header">
        <div class="section-title">Sinking Funds</div>
        <button class="btn btn-primary" style="font-size:12px;padding:7px 16px" onclick="openFundModal()">+ New Fund</button>
      </div>
      <div class="funds-grid" id="funds-grid"></div>
    </div>
    <div>
      <div class="section-header">
        <div class="section-title">Balance Breakdown</div>
      </div>
      <div class="panel">
        <div class="donut-wrap">
          <svg class="donut-svg" id="donut-svg" viewBox="0 0 180 180">
            <circle cx="90" cy="90" r="70" fill="none" stroke="#f0ebe0" stroke-width="22"/>
            <text x="90" y="85" text-anchor="middle" class="donut-center" id="donut-total">₱0</text>
            <text x="90" y="103" text-anchor="middle" class="donut-sub">Total Balance</text>
          </svg>
          <div class="legend" id="donut-legend"></div>
        </div>
      </div>
    </div>
  </div>

  {{-- RECENT CONTRIBUTIONS --}}
  <div class="panel">
    <div class="section-header">
      <div class="section-title">Recent Contributions</div>
      <button class="btn btn-secondary" style="font-size:12px;padding:7px 14px" onclick="openLogModal()">+ Log</button>
    </div>
    <div class="table-wrap">
      <table class="log-table">
        <thead>
          <tr><th>Fund</th><th>Date</th><th>Note</th><th>Amount</th><th>Type</th><th></th></tr>
        </thead>
        <tbody id="log-tbody"></tbody>
      </table>
    </div>
    <div id="log-empty" class="empty-log" style="display:none">No contributions logged yet.</div>
  </div>

@endsection