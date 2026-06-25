@extends('layouts.app')

@section('title', 'Dashboard')

@section('style')
    <style>
        .dashboard-container {
            padding: 20px;
        }

        /* ===== WELCOME BANNER ===== */
        .welcome-banner {
            background: linear-gradient(135deg, #5b0610, #8b0b18);
            border-radius: 16px;
            padding: 28px 30px;
            margin-bottom: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            box-shadow: 0 8px 24px rgba(91, 6, 16, 0.25);
        }

        .welcome-banner-text h1 {
            margin: 0;
            color: #fff;
            font-size: 24px;
            font-weight: 700;
        }

        .welcome-banner-text p {
            margin: 6px 0 0;
            color: rgba(255, 255, 255, 0.72);
            font-size: 13.5px;
        }

        .welcome-banner-icon {
            background: rgba(255, 255, 255, 0.12);
            border-radius: 14px;
            padding: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .welcome-banner-icon .material-symbols-rounded {
            font-size: 36px;
            color: #fff;
        }

        /* ===== STAT CARDS ===== */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: #fff;
            border-radius: 14px;
            padding: 20px;
            border: 1px solid #f1f1f1;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.06);
            display: flex;
            align-items: center;
            gap: 16px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            min-width: 52px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .stat-icon .material-symbols-rounded {
            font-size: 26px;
            color: #fff;
        }

        .stat-icon.red {
            background: linear-gradient(135deg, #5b0610, #8b0b18);
        }

        .stat-icon.blue {
            background: linear-gradient(135deg, #0d6efd, #3b8ef3);
        }

        .stat-icon.green {
            background: linear-gradient(135deg, #16a34a, #22c55e);
        }

        .stat-icon.orange {
            background: linear-gradient(135deg, #ea580c, #f97316);
        }

        .stat-info {
            display: flex;
            flex-direction: column;
        }

        .stat-value {
            font-size: 28px;
            font-weight: 700;
            color: #1a1a1a;
            line-height: 1;
            margin-bottom: 4px;
        }

        .stat-label {
            font-size: 12.5px;
            color: #888;
            font-weight: 500;
        }

        .stat-trend {
            font-size: 11.5px;
            margin-top: 4px;
            font-weight: 600;
        }

        .stat-trend.up {
            color: #16a34a;
        }

        .stat-trend.down {
            color: #dc2626;
        }



        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .welcome-banner {
                flex-direction: column;
                align-items: flex-start;
            }

            .stats-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('content')
    <div class="dashboard-container">

        {{-- ===== WELCOME BANNER ===== --}}
        <div class="welcome-banner">
            <div class="welcome-banner-text">
                <h1>Interactive E-learning and Developmental Checklist</h1>
                <p>Here's what's happening with your learners today — {{ now()->format('F d, Y') }}.</p>
            </div>
            <div class="welcome-banner-icon">
                <span class="material-symbols-rounded">school</span>
            </div>
        </div>

        {{-- ===== STAT CARDS ===== --}}
        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon red">
                    <span class="material-symbols-rounded">groups</span>
                </div>
                <div class="stat-info">
                    <span class="stat-value">{{ $totalLearners }}</span>
                    <span class="stat-label">Total Learners</span>
                    {{-- <span class="stat-trend up">↑ 1 this week</span> --}}
                </div>
            </div>

            <div class="stat-card">
                {{-- <div class="stat-icon blue">
                    <span class="material-symbols-rounded">menu_book</span>
                </div> --}}
                <div class="stat-info">
                    {{-- <span class="stat-value">3</span>
                    <span class="stat-label">Active Sessions</span>
                    <span class="stat-trend up">↑ 2 today</span> --}}
                </div>
            </div>

            <div class="stat-card">
                {{-- <div class="stat-icon green">
                    <span class="material-symbols-rounded">task_alt</span>
                </div> --}}
                <div class="stat-info">
                    {{-- <span class="stat-value">12</span>
                    <span class="stat-label">Tasks Completed</span>
                    <span class="stat-trend up">↑ 4 this week</span> --}}
                </div>
            </div>

            <div class="stat-card">
                {{-- <div class="stat-icon orange">
                    <span class="material-symbols-rounded">pending_actions</span>
                </div> --}}
                <div class="stat-info">
                    {{-- <span class="stat-value">5</span>
                    <span class="stat-label">Pending Reviews</span>
                    <span class="stat-trend down">↓ 2 remaining</span> --}}
                </div>
            </div>

        </div>
    </div>
@endsection
