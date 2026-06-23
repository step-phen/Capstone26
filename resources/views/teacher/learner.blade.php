@extends('layouts.app')

@section('title', 'Learners')

@section('style')
    <style>
        .learners-container {
            padding: 20px;
        }

        /* ===== MODERN HEADER ===== */
        .learners-header {
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

        .add-learner-btn {
            padding: 10px 16px;
            background: #5b0610;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 6px;
            font-family: inherit;
            transition: all 0.2s ease;
            box-shadow: 0 6px 14px rgba(91, 6, 16, 0.2);
        }

        .add-learner-btn:hover {
            background: #7a0815;
            transform: translateY(-2px);
        }

        /* ===== GRID ===== */
        .learners-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        /* ===== CARD ===== */
        .learner-card {
            background: #fff;
            border-radius: 14px;
            padding: 18px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.25s ease;
            display: flex;
            gap: 15px;
            cursor: pointer;
            border: 1px solid #f1f1f1;
        }

        .learner-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .learner-avatar {
            width: 70px;
            height: 70px;
            min-width: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, #5b0610, #8b0b18);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 22px;
            font-weight: 700;
            text-transform: uppercase;
            box-shadow: 0 6px 12px rgba(91, 6, 16, 0.25);
        }

        .learner-info {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .learner-name {
            font-size: 16px;
            font-weight: 700;
            color: #5b0610;
            margin-bottom: 10px;
        }

        .learner-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px 12px;
            background: #fafafa;
            padding: 10px;
            border-radius: 10px;
            font-size: 12.5px;
            color: #555;
            margin-bottom: 12px;
        }

        .learner-detail {
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .learner-detail strong {
            color: #333;
            font-weight: 600;
        }

        .learner-actions {
            display: flex;
            gap: 10px;
            margin-top: auto;
            padding-top: 12px;
            border-top: 1px solid #f0f0f0;
        }

        .learner-actions button {
            flex: 1;
            padding: 8px 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            color: white;
            font-size: 12.5px;
            transition: 0.2s ease;
        }

        .btn-view {
            background: #5b0610;
        }

        .btn-view:hover {
            background: #7a0815;
        }

        .btn-progress {
            background: #0d6efd;
        }

        .btn-progress:hover {
            background: #0b5ed7;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .learners-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .header-actions {
                width: 100%;
                justify-content: space-between;
                flex-wrap: wrap;
            }

            .learners-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('content')
    <div class="learners-container">

        <!-- HEADER -->
        <div class="learners-header">

            <div class="header-content">
                <h1>Learners</h1>
                <p>Manage learner profiles and track development progress in real time.</p>
            </div>

            <div class="header-actions">

                <div class="header-badge">
                    <span class="material-symbols-rounded" style="font-size:18px;">groups</span>
                    4 Total Learners
                </div>

                <button class="add-learner-btn">
                    <span class="material-symbols-rounded">add</span>
                    Add Learner
                </button>

            </div>

        </div>

        <!-- GRID -->
        <div class="learners-grid">

            <!-- CARD 1 -->
            <div class="learner-card">
                <div class="learner-avatar">JD</div>
                <div class="learner-info">
                    <div class="learner-name">Juan Dela Cruz</div>

                    <div class="learner-details">
                        <div class="learner-detail"><strong>ID:</strong> 1</div>
                        <div class="learner-detail"><strong>Age:</strong> 7</div>
                        <div class="learner-detail"><strong>Gender:</strong> Male</div>
                    </div>

                    <div class="learner-actions">
                        <button class="btn-view">Profile</button>
                        <button class="btn-progress">Progress</button>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="learner-card">
                <div class="learner-avatar">MS</div>
                <div class="learner-info">
                    <div class="learner-name">Maria Santos</div>

                    <div class="learner-details">
                        <div class="learner-detail"><strong>ID:</strong> 2</div>
                        <div class="learner-detail"><strong>Age:</strong> 8</div>
                        <div class="learner-detail"><strong>Gender:</strong> Female</div>
                    </div>

                    <div class="learner-actions">
                        <button class="btn-view">Profile</button>
                        <button class="btn-progress">Progress</button>
                    </div>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="learner-card">
                <div class="learner-avatar">PG</div>
                <div class="learner-info">
                    <div class="learner-name">Pedro Garcia</div>

                    <div class="learner-details">
                        <div class="learner-detail"><strong>ID:</strong> 3</div>
                        <div class="learner-detail"><strong>Age:</strong> 9</div>
                        <div class="learner-detail"><strong>Gender:</strong> Male</div>
                    </div>

                    <div class="learner-actions">
                        <button class="btn-view">Profile</button>
                        <button class="btn-progress">Progress</button>
                    </div>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="learner-card">
                <div class="learner-avatar">AL</div>
                <div class="learner-info">
                    <div class="learner-name">Ana Lopez</div>

                    <div class="learner-details">
                        <div class="learner-detail"><strong>ID:</strong> 4</div>
                        <div class="learner-detail"><strong>Age:</strong> 8</div>
                        <div class="learner-detail"><strong>Gender:</strong> Female</div>
                    </div>

                    <div class="learner-actions">
                        <button class="btn-view">Profile</button>
                        <button class="btn-progress">Progress</button>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
