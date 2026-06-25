@extends('layouts.app')

@section('title', 'Learners')

@section('style')
    <style>
        .learners-container {
            padding: 20px;
        }

        /* ===== HEADER ===== */
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
            flex-wrap: wrap;
        }

        .search-bar {
            position: relative;
            max-width: 500px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 16px 10px 42px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            font-size: 13px;
            font-family: inherit;
            background: #fff;
            color: #222;
            outline: none;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .search-bar input:focus {
            border-color: #5b0610;
            box-shadow: 0 0 0 3px rgba(91, 6, 16, 0.08);
        }

        .search-bar input::placeholder {
            color: #aaa;
        }

        .search-bar .search-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            pointer-events: none;
            font-size: 18px;
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
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
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

        /* ===== EMPTY STATE ===== */
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #999;
            grid-column: 1 / -1;
        }

        .empty-state .material-symbols-rounded {
            font-size: 56px;
            color: #ddd;
            display: block;
            margin-bottom: 12px;
        }

        .empty-state p {
            font-size: 14px;
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

            .form-row {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection

@section('content')
    <div class="learners-container">

        {{-- ===== HEADER ===== --}}
        <div class="learners-header">
            <div class="header-content">
                <h1>Learners</h1>
                <p>Manage learner profiles and track development progress in real time.</p>
            </div>

            <div class="header-actions">
                <div class="header-badge">
                    <span class="material-symbols-rounded" style="font-size:18px;">groups</span>
                    <span id="learnerCount">{{ $learners->count() }}</span> Total Learner{{ $learners->count() !== 1 ? 's' : '' }}
                </div>

                <button class="add-learner-btn" data-modal-open="addLearnerModal">
                    <span class="material-symbols-rounded">add</span>
                    Add Learner
                </button>
            </div>
        </div>

        {{-- ===== SEARCH BAR ===== --}}
        <div class="search-bar" style="margin-bottom: 20px;">
            <span class="material-symbols-rounded search-icon">search</span>
            <input type="text" 
                   id="searchLearner" 
                   placeholder="Search learners by name..." 
                   autocomplete="off">
        </div>

        @include('teacher.partials.card.learner-card', ['learners' => $learners])

    </div>

    @include('teacher.partials.modal.add-learner-modal')

@endsection

@section('scripts')
    <script>
        // Search functionality
        const searchInput = document.getElementById('searchLearner');
        const learnerCards = document.querySelectorAll('.learner-card');
        const learnerCount = document.getElementById('learnerCount');
        const emptyState = document.querySelector('.empty-state');

        searchInput?.addEventListener('input', (e) => {
            const query = e.target.value.toLowerCase().trim();
            let visibleCount = 0;

            learnerCards.forEach(card => {
                const name = card.querySelector('.learner-name')?.textContent.toLowerCase() || '';
                if (name.includes(query)) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (learnerCount) learnerCount.textContent = visibleCount;

            if (emptyState) {
                emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
            }
        });
    </script>
@endsection
