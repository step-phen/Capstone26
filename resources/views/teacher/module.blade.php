@extends('layouts.app')

@section('title', 'Modules')

@section('style')
    <style>
        .modules-container {
            padding: 20px;
        }

        /* ===== HEADER ===== */
        .modules-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 20px;
            margin-bottom: 25px;
            border-radius: 14px;
            background: linear-gradient(135deg, #ffffff, #fafafa);
            border: 1px solid #f1f1f1;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
            flex-wrap: wrap;
            gap: 15px;
        }

        .header-content h1 {
            margin: 0;
            color: #5b0610;
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }

        .header-content p {
            margin: 4px 0 0;
            color: #777;
            font-size: 13.5px;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-badge {
            background: #fff;
            border: 1px solid #eee;
            padding: 8px 12px;
            border-radius: 10px;
            font-size: 12px;
            color: #444;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* ===== TABLE ===== */
        .modules-table-wrapper {
            background: #fff;
            border-radius: 14px;
            border: 1px solid #f1f1f1;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
            overflow: hidden;
        }

        .modules-table {
            width: 100%;
            border-collapse: collapse;
        }

        .modules-table thead {
            background: linear-gradient(135deg, #5b0610, #8b0b18);
        }

        .modules-table thead th {
            padding: 16px 20px;
            text-align: left;
            font-size: 13px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }

        .modules-table tbody tr {
            border-bottom: 1px solid #f3f3f3;
            transition: background 0.15s ease;
        }

        .modules-table tbody tr:hover {
            background: #fafafa;
        }

        .modules-table tbody tr:last-child {
            border-bottom: none;
        }

        .modules-table tbody td {
            padding: 18px 20px;
            font-size: 13.5px;
            color: #333;
            vertical-align: top;
        }

        .module-number-cell {
            width: 60px;
            text-align: center;
        }

        .module-number {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: linear-gradient(135deg, #5b0610, #8b0b18);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            font-weight: 700;
            color: #fff;
        }

        .module-title-cell {
            min-width: 250px;
        }

        .module-title {
            font-size: 15px;
            font-weight: 700;
            color: #5b0610;
            margin: 0 0 4px 0;
        }

        .module-description {
            font-size: 12.5px;
            color: #777;
            margin: 0;
        }

        .module-stat {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .module-stat .material-symbols-rounded {
            font-size: 18px;
            color: #5b0610;
        }

        .module-stat-value {
            font-weight: 600;
            color: #222;
        }

        .action-btn {
            padding: 8px 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 12.5px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s ease;
            color: white;
        }

        .action-btn .material-symbols-rounded {
            font-size: 16px;
        }

        .btn-view {
            background: #5b0610;
        }

        .btn-view:hover {
            background: #7a0815;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(91, 6, 16, 0.3);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .modules-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .modules-table-wrapper {
                overflow-x: auto;
            }

            .modules-table {
                min-width: 800px;
            }
        }
    </style>
@endsection

@section('content')
    <div class="modules-container">

        {{-- ===== HEADER ===== --}}
        <div class="modules-header">
            <div class="header-content">
                <h1>Modules</h1>
                <p>Browse e-learning modules and their activities assigned to learners.</p>
            </div>
            <div class="header-actions">
                <div class="header-badge">
                    <span class="material-symbols-rounded" style="font-size:18px;">layers</span>
                    3 Total Modules
                </div>
                <div class="header-badge">
                    <span class="material-symbols-rounded" style="font-size:18px;">play_lesson</span>
                    13 Total Activities
                </div>
            </div>
        </div>

        {{-- ===== MODULES TABLE ===== --}}
        <div class="modules-table-wrapper">
            <table class="modules-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Module</th>
                        <th>Duration</th>
                        <th>Activities</th>
                        <th>Enrolled</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="module-number-cell">
                            <span class="module-number">01</span>
                        </td>
                        <td class="module-title-cell">
                            <h3 class="module-title">Arts — 1st Quarter</h3>
                            <p class="module-description">Introduction to motor skills, lines, and colors</p>
                        </td>
                        <td>
                            <div class="module-stat">
                                <span class="material-symbols-rounded">calendar_today</span>
                                <span class="module-stat-value">4 Weeks</span>
                            </div>
                        </td>
                        <td>
                            <div class="module-stat">
                                <span class="material-symbols-rounded">play_lesson</span>
                                <span class="module-stat-value">4 Activities</span>
                            </div>
                        </td>
                        <td>
                            <div class="module-stat">
                                <span class="material-symbols-rounded">groups</span>
                                <span class="module-stat-value">5 Learners</span>
                            </div>
                        </td>
                        <td>
                            <button class="action-btn btn-view">
                                <span class="material-symbols-rounded">visibility</span>
                                View
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="module-number-cell">
                            <span class="module-number">02</span>
                        </td>
                        <td class="module-title-cell">
                            <h3 class="module-title">Practical Life — 1st Quarter</h3>
                            <p class="module-description">Daily life routines, self-care, and motor coordination</p>
                        </td>
                        <td>
                            <div class="module-stat">
                                <span class="material-symbols-rounded">calendar_today</span>
                                <span class="module-stat-value">4 Weeks</span>
                            </div>
                        </td>
                        <td>
                            <div class="module-stat">
                                <span class="material-symbols-rounded">play_lesson</span>
                                <span class="module-stat-value">5 Activities</span>
                            </div>
                        </td>
                        <td>
                            <div class="module-stat">
                                <span class="material-symbols-rounded">groups</span>
                                <span class="module-stat-value">5 Learners</span>
                            </div>
                        </td>
                        <td>
                            <button class="action-btn btn-view">
                                <span class="material-symbols-rounded">visibility</span>
                                View
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="module-number-cell">
                            <span class="module-number">03</span>
                        </td>
                        <td class="module-title-cell">
                            <h3 class="module-title">Filipino — 1st Quarter</h3>
                            <p class="module-description">Pagkilala sa sarili, pamilya, magalang na pananalita, at mga kulay</p>
                        </td>
                        <td>
                            <div class="module-stat">
                                <span class="material-symbols-rounded">calendar_today</span>
                                <span class="module-stat-value">3 Weeks</span>
                            </div>
                        </td>
                        <td>
                            <div class="module-stat">
                                <span class="material-symbols-rounded">play_lesson</span>
                                <span class="module-stat-value">4 Activities</span>
                            </div>
                        </td>
                        <td>
                            <div class="module-stat">
                                <span class="material-symbols-rounded">groups</span>
                                <span class="module-stat-value">5 Learners</span>
                            </div>
                        </td>
                        <td>
                            <button class="action-btn btn-view">
                                <span class="material-symbols-rounded">visibility</span>
                                View
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
