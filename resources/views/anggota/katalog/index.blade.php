<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Katalog Perusahaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #f5f6fa;
        font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
    }

    .profile-container {
        display: grid;
        grid-template-columns: 300px 1fr;
        min-height: 100vh;
        gap: 0;
    }

    /* ============= SIDEBAR ============= */
    .sidebar {
        background: linear-gradient(180deg, #2a348d 0%, #1a1f5c 100%);
        padding: 0;
        position: sticky;
        top: 0;
        height: 100vh;
        overflow-y: auto;
        box-shadow: 4px 0 20px rgba(42, 52, 141, 0.15);
        display: flex;
        flex-direction: column;
    }

    .sidebar::-webkit-scrollbar {
        width: 4px;
    }

    .sidebar::-webkit-scrollbar-track {
        background: rgba(255, 255, 255, 0.1);
    }

    .sidebar::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.3);
        border-radius: 2px;
    }

    .sidebar::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 255, 255, 0.5);
    }

    /* ============= NAV LINK ============= */
    .nav-link-home {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 12px 24px;
        margin: 0 24px 12px 24px;
        background: rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        border-radius: 2px;
        transition: all 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.2);
        letter-spacing: 0.3px;
    }

    .nav-link-home:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
        color: #ffffff;
    }

    .nav-link-home svg {
        width: 18px;
        height: 18px;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    /* ============= MENU ============= */
    .sidebar-menu {
        list-style: none;
        padding: 32px 0;
        flex: 1;
    }

    .sidebar-menu-item {
        margin-bottom: 4px;
    }

    .sidebar-menu-link {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 16px 24px;
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        background: transparent;
        width: 100%;
        text-align: left;
        position: relative;
        border-left: 3px solid transparent;
        letter-spacing: 0.3px;
    }

    .sidebar-menu-link::after {
        content: '';
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
        border-right: 6px solid #f5f6fa;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .sidebar-menu-link:hover {
        background: rgba(255, 255, 255, 0.08);
        color: #ffffff;
    }

    .sidebar-menu-link.active {
        background: rgba(255, 255, 255, 0.12);
        color: #ffffff;
        border-left-color: #fbbf24;
    }

    .sidebar-menu-link.active::after {
        opacity: 1;
    }

    .sidebar-menu-link svg {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .sidebar-footer {
        padding: 24px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        margin-top: auto;
    }

    .btn-logout {
        width: 100%;
        padding: 12px;
        background: rgba(239, 68, 68, 0.15);
        color: #ef4444;
        border: 1px solid rgba(239, 68, 68, 0.3);
        border-radius: 2px;
        font-weight: 700;
        font-size: 13px;
        cursor: pointer;
        transition: all 0.3s;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .btn-logout:hover {
        background: rgba(239, 68, 68, 0.25);
        border-color: #ef4444;
    }

    /* ============= MAIN CONTENT ============= */
    .main-content {
        padding: 0;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        background: #f5f6fa;
    }

    .content-wrapper {
        padding: 40px 48px;
        flex: 1;
    }

    /* ============= PAGE HEADER ============= */
    .page-header {
        background: linear-gradient(135deg, #2a348d 0%, #1a1f5c 100%);
        padding: 32px 40px;
        border-radius: 2px;
        margin-bottom: 32px;
        box-shadow: 0 4px 20px rgba(42, 52, 141, 0.2);
    }

    .page-header-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 16px;
        gap: 16px;
        flex-wrap: wrap;
    }

    .page-header-content h1 {
        font-size: 28px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 8px;
        letter-spacing: -0.3px;
    }

    .page-header-content p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.85);
        font-weight: 500;
        letter-spacing: 0.2px;
        line-height: 1.5;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 12px 24px;
        background: #fbbf24;
        color: #1a1f5c;
        border-radius: 2px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 700;
        transition: all 0.3s;
        border: none;
        cursor: pointer;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .btn-primary:hover {
        background: #f59e0b;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(251, 191, 36, 0.4);
    }

    .btn-primary svg {
        width: 16px;
        height: 16px;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    /* ============= ALERTS ============= */
    .alert {
        padding: 16px 20px;
        border-radius: 2px;
        margin-bottom: 24px;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 12px;
        font-weight: 500;
        border-left: 4px solid;
    }

    .alert svg {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .alert-success {
        background: #d1fae5;
        color: #065f46;
        border-color: #10b981;
    }

    .alert-error {
        background: #fee2e2;
        color: #991b1b;
        border-color: #ef4444;
    }

    .alert-warning {
        background: #fef3c7;
        color: #92400e;
        border-color: #f59e0b;
    }

    .alert-info {
        background: #dbeafe;
        color: #1e40af;
        border-color: #3b82f6;
    }

    /* ============= KATALOG CARD ============= */
    .katalog-card {
        background: white;
        border-radius: 2px;
        margin-bottom: 24px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
        border: 1px solid #e5e7eb;
        overflow: hidden;
    }

    .katalog-header {
        padding: 28px 32px;
        border-bottom: 1px solid #e5e7eb;
        background: #fafafa;
    }

    .katalog-header-title {
        display: flex;
        align-items: flex-start;
        gap: 20px;
        margin-bottom: 16px;
    }

    .katalog-logo {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 2px;
        border: 2px solid #e5e7eb;
        flex-shrink: 0;
    }

    .katalog-info {
        flex: 1;
    }

    .katalog-info h2 {
        font-size: 20px;
        font-weight: 700;
        color: #2a348d;
        margin-bottom: 6px;
        letter-spacing: -0.2px;
    }

    .katalog-info-subtitle {
        font-size: 14px;
        color: #6b7280;
        font-weight: 500;
        margin-bottom: 12px;
    }

    .creator-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #e0e7ff;
        color: #3730a3;
        padding: 6px 12px;
        border-radius: 2px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .creator-badge svg {
        width: 14px;
        height: 14px;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .katalog-status-badges {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
    }

    .status-badge {
        padding: 8px 16px;
        border-radius: 2px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .status-badge::before {
        content: '';
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: currentColor;
    }

    .status-pending {
        background: #fef3c7;
        color: #92400e;
        border: 1px solid #fcd34d;
    }

    .status-approved {
        background: #d1fae5;
        color: #065f46;
        border: 1px solid #6ee7b7;
    }

    .status-rejected {
        background: #fee2e2;
        color: #991b1b;
        border: 1px solid #fca5a5;
    }

    .status-active {
        background: #d1fae5;
        color: #065f46;
        border: 1px solid #6ee7b7;
    }

    .status-inactive {
        background: #f3f4f6;
        color: #6b7280;
        border: 1px solid #d1d5db;
    }

    /* ============= SUMMARY CARDS ============= */
    .summary-cards {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 20px;
        margin-bottom: 28px;
    }

    .summary-card {
        background: white;
        padding: 24px;
        border-radius: 2px;
        border: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
        gap: 16px;
        transition: all 0.3s;
    }

    .summary-card:hover {
        border-color: #2a348d;
        box-shadow: 0 4px 16px rgba(42, 52, 141, 0.1);
        transform: translateY(-2px);
    }

    .summary-icon {
        width: 56px;
        height: 56px;
        border-radius: 2px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .summary-icon svg {
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .summary-info {
        flex: 1;
    }

    .summary-value {
        font-size: 28px;
        font-weight: 700;
        color: #1e293b;
        line-height: 1;
        margin-bottom: 6px;
    }

    .summary-label {
        font-size: 12px;
        font-weight: 600;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    /* ============= FILTER SECTION ============= */
    .filter-section {
        background: white;
        padding: 20px;
        border-radius: 2px;
        border: 1px solid #e5e7eb;
        margin-bottom: 28px;
        display: flex;
        gap: 20px;
        align-items: center;
        flex-wrap: wrap;
    }

    .filter-tabs {
        display: flex;
        gap: 8px;
        flex-wrap: wrap;
        flex: 1;
    }

    .filter-tab {
        padding: 10px 20px;
        border: 1px solid #e5e7eb;
        background: white;
        color: #64748b;
        border-radius: 2px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        letter-spacing: 0.3px;
    }

    .filter-tab:hover {
        border-color: #2a348d;
        color: #2a348d;
        background: #f8f9fa;
    }

    .filter-tab.active {
        background: #2a348d;
        color: white;
        border-color: #2a348d;
    }

    .search-box {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 16px;
        border: 1px solid #e5e7eb;
        border-radius: 2px;
        background: white;
        min-width: 280px;
        transition: all 0.3s;
    }

    .search-box:focus-within {
        border-color: #2a348d;
        box-shadow: 0 0 0 3px rgba(42, 52, 141, 0.1);
    }

    .search-box svg {
        stroke: #9ca3af;
        stroke-width: 2;
        fill: none;
        flex-shrink: 0;
    }

    .search-box input {
        border: none;
        outline: none;
        font-size: 14px;
        color: #1e293b;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        flex: 1;
        background: transparent;
    }

    .search-box input::placeholder {
        color: #9ca3af;
    }

    /* ============= COLLAPSIBLE KATALOG ============= */
    .katalog-collapsed {
        padding: 20px 32px !important;
    }

    .btn-toggle-detail {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 24px;
        background: #f8f9fa;
        color: #2a348d;
        border: 1px solid #e5e7eb;
        border-radius: 2px;
        font-size: 13px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
        letter-spacing: 0.3px;
    }

    .btn-toggle-detail:hover {
        background: #2a348d;
        color: white;
        border-color: #2a348d;
    }

    .btn-toggle-detail svg {
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
        transition: transform 0.3s;
    }

    .btn-toggle-detail.expanded svg {
        transform: rotate(180deg);
    }

    .katalog-detail-content {
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            max-height: 0;
        }
        to {
            opacity: 1;
            max-height: 5000px;
        }
    }

    .rejection-box {
        background: #fee2e2;
        border: 2px solid #fca5a5;
        border-radius: 2px;
        padding: 20px;
        margin-bottom: 28px;
    }

    .rejection-box-title {
        font-weight: 700;
        color: #991b1b;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .rejection-box-title svg {
        width: 18px;
        height: 18px;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .rejection-box-content {
        font-size: 14px;
        color: #7f1d1d;
        line-height: 1.6;
        font-weight: 500;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
        margin-bottom: 28px;
    }

    .info-item {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .info-label {
        font-size: 11px;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }

    .info-value {
        font-size: 15px;
        color: #1e293b;
        font-weight: 500;
        line-height: 1.6;
        word-break: break-word;
    }

    .info-description {
        padding: 20px;
        background: #f8f9fa;
        border-radius: 2px;
        border-left: 4px solid #2a348d;
    }

    .info-description p {
        font-size: 14px;
        color: #4b5563;
        line-height: 1.7;
        font-weight: 500;
        margin: 0;
    }

    /* ============= DETAIL SECTIONS ============= */
    .detail-section {
        margin-bottom: 32px;
    }

    .detail-section:last-child {
        margin-bottom: 0;
    }

    .detail-section-title {
        font-size: 14px;
        font-weight: 700;
        color: #2a348d;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 20px;
        padding-bottom: 12px;
        border-bottom: 2px solid #e5e7eb;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .detail-section-title::before {
        content: '';
        width: 4px;
        height: 20px;
        background: #2a348d;
        border-radius: 2px;
    }

    .images-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
        gap: 16px;
    }

    .image-item {
        position: relative;
        aspect-ratio: 16/9;
        border-radius: 2px;
        overflow: hidden;
        border: 1px solid #e5e7eb;
        transition: all 0.3s;
        cursor: pointer;
    }

    .image-item:hover {
        border-color: #2a348d;
        box-shadow: 0 4px 16px rgba(42, 52, 141, 0.15);
        transform: translateY(-2px);
    }

    .image-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }

    .image-item:hover img {
        transform: scale(1.05);
    }

    .map-container {
        border-radius: 2px;
        overflow: hidden;
        border: 2px solid #e5e7eb;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    .map-container iframe {
        width: 100%;
        height: 400px;
        border: none;
        display: block;
    }

    /* ============= KATALOG ACTIONS ============= */
    .katalog-actions {
        display: flex;
        gap: 12px;
        padding: 24px 32px;
        border-top: 1px solid #e5e7eb;
        background: #fafafa;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 20px;
        border-radius: 2px;
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;
        transition: all 0.3s;
        cursor: pointer;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        border: none;
    }

    .btn svg {
        width: 16px;
        height: 16px;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .btn-secondary {
        background: #ffffff;
        color: #2a348d;
        border: 1px solid #2a348d;
    }

    .btn-secondary:hover {
        background: #2a348d;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(42, 52, 141, 0.2);
    }

    .btn-danger {
        background: #fee2e2;
        color: #991b1b;
        border: 1px solid #fca5a5;
    }

    .btn-danger:hover {
        background: #ef4444;
        color: white;
        border-color: #ef4444;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
    }

    /* ============= EMPTY STATE ============= */
    .empty-state {
        text-align: center;
        padding: 80px 40px;
        background: white;
        border-radius: 2px;
        border: 1px solid #e5e7eb;
    }

    .empty-state svg {
        width: 80px;
        height: 80px;
        margin: 0 auto 24px;
        stroke: #d1d5db;
        stroke-width: 1.5;
    }

    .empty-state h3 {
        font-size: 20px;
        font-weight: 700;
        color: #374151;
        margin-bottom: 8px;
        letter-spacing: -0.2px;
    }

    .empty-state p {
        font-size: 14px;
        color: #6b7280;
        margin-bottom: 24px;
        font-weight: 500;
    }

    /* ============= RESPONSIVE ============= */
    @media (max-width: 1024px) {
        .profile-container {
            grid-template-columns: 280px 1fr;
        }

        .content-wrapper {
            padding: 32px 36px;
        }

        .katalog-body {
            padding: 24px;
        }

        .info-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .profile-container {
            grid-template-columns: 1fr;
        }

        .sidebar {
            height: auto;
            position: relative;
            border-right: none;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-link-home {
            margin: 0 16px 12px 16px;
            padding: 12px 20px;
            font-size: 12px;
        }

        .sidebar-menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            padding: 16px 12px;
            gap: 4px;
        }

        .sidebar-menu-link {
            padding: 12px 16px;
            font-size: 13px;
            justify-content: center;
            text-align: center;
            border-left: none;
            border-bottom: 2px solid transparent;
        }

        .sidebar-menu-link.active {
            border-left: none;
            border-bottom-color: #fbbf24;
        }

        .sidebar-menu-link::after {
            display: none;
        }

        .sidebar-footer {
            padding: 16px;
        }

        .content-wrapper {
            padding: 20px 16px;
        }

        .page-header {
            padding: 24px 20px;
            margin-bottom: 20px;
        }

        .page-header-content h1 {
            font-size: 22px;
        }

        .page-header-content p {
            font-size: 13px;
        }

        .katalog-header {
            padding: 20px;
        }

        .katalog-header-title {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .katalog-logo {
            width: 80px;
            height: 80px;
        }

        .katalog-body {
            padding: 20px;
        }

        .images-grid {
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 12px;
        }

        .map-container iframe {
            height: 280px;
        }

        .katalog-actions {
            padding: 16px 20px;
            flex-direction: column;
        }

        .btn {
            width: 100%;
            justify-content: center;
        }
    }

    @media (max-width: 480px) {
        .sidebar-menu {
            grid-template-columns: repeat(2, 1fr);
        }

        .page-header-top {
            flex-direction: column;
        }

        .btn-primary {
            width: 100%;
            justify-content: center;
        }
    }
</style>

<div class="profile-container">
    <!-- SIDEBAR -->
    <aside class="sidebar">
        <ul class="sidebar-menu">
            <li class="sidebar-menu-item">
                <a href="{{ route('profile-anggota') }}" class="sidebar-menu-link">
                    <svg viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    <span>Informasi Umum</span>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <a href="{{ route('anggota.katalog.index') }}" class="sidebar-menu-link active">
                    <svg viewBox="0 0 24 24">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                        <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    <span>E-Katalog</span>
                </a>
            </li>

            <li class="sidebar-menu-item">
                <button class="sidebar-menu-link" onclick="window.location.href='{{ route('profile-anggota') }}'; setTimeout(() => { const dokumenSection = document.getElementById('dokumen'); if(dokumenSection) { dokumenSection.scrollIntoView({behavior: 'smooth'}); const dokumenBtn = document.querySelector('[onclick*=\'dokumen\']'); if(dokumenBtn) dokumenBtn.click(); } }, 500);">
                    <svg viewBox="0 0 24 24">
                        <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                        <polyline points="13 2 13 9 20 9"></polyline>
                    </svg>
                    <span>Dokumen</span>
                </button>
            </li>
        </ul>

        <div class="sidebar-footer">
            <a href="{{ route('home') }}" class="nav-link-home">
                <svg viewBox="0 0 24 24">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>Beranda</span>
            </a>
            <form action="{{ route('anggota.logout') }}" method="POST" style="width: 100%;">
                @csrf
                <button type="submit" class="btn-logout">Logout</button>
            </form>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <div class="content-wrapper">
            <!-- PAGE HEADER -->
            <div class="page-header">
                <div class="page-header-top">
                    <div class="page-header-content">
                        <h1>E-Katalog Perusahaan</h1>
                        <p>Kelola informasi katalog perusahaan Anda yang ditampilkan di website ASITA Jawa Barat</p>
                    </div>
                    @if($anggota->status === 'approved')
                        <a href="{{ route('anggota.katalog.create') }}" class="btn-primary">
                            <svg viewBox="0 0 24 24">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Tambah Katalog Baru
                        </a>
                    @endif
                </div>
            </div>

            <!-- SUMMARY CARDS (jika ada katalog) -->
            @if($katalogs->count() > 0)
                <div class="summary-cards">
                    <div class="summary-card">
                        <div class="summary-icon" style="background: #dbeafe; color: #1e40af;">
                            <svg viewBox="0 0 24 24" width="24" height="24">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="9" y1="9" x2="15" y2="9"></line>
                                <line x1="9" y1="15" x2="15" y2="15"></line>
                            </svg>
                        </div>
                        <div class="summary-info">
                            <div class="summary-value">{{ $katalogs->count() }}</div>
                            <div class="summary-label">Total Katalog</div>
                        </div>
                    </div>

                    <div class="summary-card">
                        <div class="summary-icon" style="background: #d1fae5; color: #065f46;">
                            <svg viewBox="0 0 24 24" width="24" height="24">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <div class="summary-info">
                            <div class="summary-value">{{ $katalogs->where('status', 'approved')->count() }}</div>
                            <div class="summary-label">Disetujui</div>
                        </div>
                    </div>

                    <div class="summary-card">
                        <div class="summary-icon" style="background: #fef3c7; color: #92400e;">
                            <svg viewBox="0 0 24 24" width="24" height="24">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div class="summary-info">
                            <div class="summary-value">{{ $katalogs->where('status', 'pending')->count() }}</div>
                            <div class="summary-label">Pending</div>
                        </div>
                    </div>

                    <div class="summary-card">
                        <div class="summary-icon" style="background: #d1fae5; color: #065f46;">
                            <svg viewBox="0 0 24 24" width="24" height="24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <div class="summary-info">
                            <div class="summary-value">{{ $katalogs->where('status', 'approved')->where('is_active', true)->count() }}</div>
                            <div class="summary-label">Aktif</div>
                        </div>
                    </div>
                </div>

                <!-- FILTER & SEARCH -->
                <div class="filter-section">
                    <div class="filter-tabs">
                        <button class="filter-tab active" onclick="filterKatalog('all')">
                            Semua ({{ $katalogs->count() }})
                        </button>
                        <button class="filter-tab" onclick="filterKatalog('approved')">
                            Disetujui ({{ $katalogs->where('status', 'approved')->count() }})
                        </button>
                        <button class="filter-tab" onclick="filterKatalog('pending')">
                            Pending ({{ $katalogs->where('status', 'pending')->count() }})
                        </button>
                        <button class="filter-tab" onclick="filterKatalog('rejected')">
                            Ditolak ({{ $katalogs->where('status', 'rejected')->count() }})
                        </button>
                        <button class="filter-tab" onclick="filterKatalog('active')">
                            Aktif ({{ $katalogs->where('status', 'approved')->where('is_active', true)->count() }})
                        </button>
                    </div>
                    <div class="search-box">
                        <svg viewBox="0 0 24 24" width="18" height="18">
                            <circle cx="11" cy="11" r="8"></circle>
                            <path d="m21 21-4.35-4.35"></path>
                        </svg>
                        <input type="text" id="searchKatalog" placeholder="Cari nama perusahaan..." onkeyup="searchKatalog()">
                    </div>
                </div>
            @endif

            <!-- ALERTS -->
            @if(session('success'))
                <div class="alert alert-success">
                    <svg viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-error">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                    {{ session('error') }}
                </div>
            @endif

            @if(session('info'))
                <div class="alert alert-info">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    {{ session('info') }}
                </div>
            @endif

            @if($anggota->status !== 'approved')
                <div class="alert alert-warning">
                    <svg viewBox="0 0 24 24">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                        <line x1="12" y1="9" x2="12" y2="13"></line>
                        <line x1="12" y1="17" x2="12.01" y2="17"></line>
                    </svg>
                    Akun Anda belum diverifikasi. Hanya anggota terverifikasi yang dapat menambah atau mengedit katalog perusahaan.
                </div>
            @endif

            <!-- KATALOG CONTENT -->
            @if($katalogs->count() > 0)
                <div id="katalogList">
                @foreach($katalogs as $katalog)
                    <div class="katalog-card" 
                         data-status="{{ $katalog->status }}" 
                         data-active="{{ $katalog->is_active ? 'true' : 'false' }}"
                         data-name="{{ strtolower($katalog->company_name) }}">
                        <!-- HEADER -->
                        <div class="katalog-header">
                            <div class="katalog-header-title">
                                <img src="{{ $katalog->logo_url }}" alt="{{ $katalog->company_name }}" class="katalog-logo">
                                <div class="katalog-info">
                                    <h2>{{ $katalog->company_name }}</h2>
                                    <p class="katalog-info-subtitle">{{ $katalog->business_field }}</p>
                                    @if($katalog->isCreatedByAdmin())
                                        <span class="creator-badge">
                                            <svg viewBox="0 0 24 24">
                                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                            </svg>
                                            Dibuat oleh Admin
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="katalog-status-badges">
                                @if($katalog->status === 'pending')
                                    <span class="status-badge status-pending">Menunggu Persetujuan</span>
                                @elseif($katalog->status === 'approved')
                                    <span class="status-badge status-approved">Disetujui</span>
                                @else
                                    <span class="status-badge status-rejected">Ditolak</span>
                                @endif
                                
                                @if($katalog->status === 'approved')
                                    @if($katalog->is_active)
                                        <span class="status-badge status-active">Aktif</span>
                                    @else
                                        <span class="status-badge status-inactive">Nonaktif</span>
                                    @endif
                                @endif
                            </div>
                        </div>

                        <!-- BODY (Collapsible) -->
                        <div class="katalog-body katalog-collapsed">
                            <!-- Rejection Reason -->
                            @if($katalog->status === 'rejected' && $katalog->rejection_reason)
                                <div class="rejection-box">
                                    <div class="rejection-box-title">
                                        <svg viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                        </svg>
                                        Alasan Penolakan
                                    </div>
                                    <div class="rejection-box-content">
                                        {{ $katalog->rejection_reason }}
                                    </div>
                                </div>
                            @endif

                            <!-- Toggle Button -->
                            <div style="text-align: center; margin-bottom: 20px;">
                                <button class="btn-toggle-detail" onclick="toggleDetail(this)">
                                    <svg viewBox="0 0 24 24" width="16" height="16">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                    Lihat Detail
                                </button>
                            </div>

                            <!-- Collapsible Content -->
                            <div class="katalog-detail-content" style="display: none;">
                                <!-- Separator Line -->
                                <div style="height: 1px; background: #e5e7eb; margin: 24px 0;"></div>

                                <!-- INFORMASI KONTAK -->
                                <div class="detail-section">
                                    <h3 class="detail-section-title">Informasi Kontak</h3>
                                    <div class="info-grid">
                                        <div class="info-item">
                                            <span class="info-label">Email</span>
                                            <span class="info-value">{{ $katalog->email }}</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Telepon</span>
                                            <span class="info-value">{{ $katalog->phone }}</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Alamat</span>
                                            <span class="info-value">{{ $katalog->address }}</span>
                                        </div>
                                        <div class="info-item">
                                            <span class="info-label">Terakhir Diperbarui</span>
                                            <span class="info-value">{{ $katalog->updated_at->format('d M Y, H:i') }}</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- DESKRIPSI PERUSAHAAN -->
                                <div class="detail-section">
                                    <h3 class="detail-section-title">Deskripsi Perusahaan</h3>
                                    <div class="info-description">
                                        <p>{{ $katalog->description }}</p>
                                    </div>
                                </div>

                                <!-- GALERI FOTO -->
                                @if($katalog->images && count($katalog->images) > 0)
                                    <div class="detail-section">
                                        <h3 class="detail-section-title">Galeri Foto</h3>
                                        <div class="images-grid">
                                            @foreach($katalog->images_url as $image)
                                                @if($image)
                                                    <div class="image-item">
                                                        <img src="{{ $image }}" alt="Galeri {{ $katalog->company_name }}" loading="lazy">
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endif

                                <!-- LOKASI -->
                                @if($katalog->map_embed_url)
                                    <div class="detail-section">
                                        <h3 class="detail-section-title">Lokasi</h3>
                                        <div class="map-container">
                                            <iframe src="{{ $katalog->map_embed_url }}" allowfullscreen="" loading="lazy"></iframe>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- ACTIONS -->
                        @if($anggota->status === 'approved')
                            <div class="katalog-actions">
                                <a href="{{ route('anggota.katalog.edit', $katalog->id) }}" class="btn btn-secondary">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg>
                                    Edit
                                </a>

                                @if($katalog->status === 'approved')
                                    <form action="{{ route('anggota.katalog.toggle-status', $katalog->id) }}" method="POST" style="display: inline;">
                                        
                                        @csrf
                                        <button type="submit" class="btn btn-secondary">
                                            @if($katalog->is_active)
                                                <svg viewBox="0 0 24 24">
                                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                </svg>
                                                Nonaktifkan
                                            @else
                                                <svg viewBox="0 0 24 24">
                                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                    <path d="M7 11V7a5 5 0 0 1 9.9-1"></path>
                                                </svg>
                                                Aktifkan
                                            @endif
                                        </button>
                                    </form>
                                @endif

                                <form action="{{ route('anggota.katalog.destroy', $katalog->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin ingin menghapus katalog {{ $katalog->company_name }}? Data tidak dapat dikembalikan!')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <svg viewBox="0 0 24 24">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                @endforeach
                </div>

                <!-- No Results Message -->
                <div id="noResults" class="empty-state" style="display: none; margin-top: 24px;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                    <h3>Tidak Ada Hasil</h3>
                    <p>Tidak ada katalog yang sesuai dengan filter atau pencarian Anda.</p>
                </div>
            @else
                <!-- EMPTY STATE -->
                <div class="empty-state">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="9" y1="9" x2="15" y2="9"></line>
                        <line x1="9" y1="15" x2="15" y2="15"></line>
                    </svg>
                    <h3>Belum Ada Data Katalog</h3>
                    <p>Anda belum menambahkan data katalog perusahaan.</p>
                    @if($anggota->status === 'approved')
                                            @else
                        <p style="margin-top: 1rem; font-size: 14px; color: #6b7280;">
                            Silakan tunggu verifikasi akun terlebih dahulu untuk menambah katalog.
                        </p>
                    @endif
                </div>
            @endif
        </div>
    </main>
</div>

</body>
</html>

<script>
// Toggle Detail Katalog
function toggleDetail(button) {
    const katalogCard = button.closest('.katalog-card');
    const detailContent = katalogCard.querySelector('.katalog-detail-content');
    const katalogBody = katalogCard.querySelector('.katalog-body');
    
    if (detailContent.style.display === 'none') {
        detailContent.style.display = 'block';
        button.classList.add('expanded');
        button.innerHTML = `
            <svg viewBox="0 0 24 24" width="16" height="16">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
            Sembunyikan Detail
        `;
        katalogBody.classList.remove('katalog-collapsed');
    } else {
        detailContent.style.display = 'none';
        button.classList.remove('expanded');
        button.innerHTML = `
            <svg viewBox="0 0 24 24" width="16" height="16">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
            Lihat Detail
        `;
        katalogBody.classList.add('katalog-collapsed');
    }
}

// Filter Katalog by Status
function filterKatalog(filter) {
    const cards = document.querySelectorAll('.katalog-card');
    const tabs = document.querySelectorAll('.filter-tab');
    const noResults = document.getElementById('noResults');
    let visibleCount = 0;
    
    // Update active tab
    tabs.forEach(tab => tab.classList.remove('active'));
    event.target.classList.add('active');
    
    // Filter cards
    cards.forEach(card => {
        const status = card.getAttribute('data-status');
        const isActive = card.getAttribute('data-active') === 'true';
        let shouldShow = false;
        
        if (filter === 'all') {
            shouldShow = true;
        } else if (filter === 'active') {
            shouldShow = status === 'approved' && isActive;
        } else {
            shouldShow = status === filter;
        }
        
        if (shouldShow) {
            card.style.display = 'block';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });
    
    // Show/hide no results message
    if (visibleCount === 0) {
        noResults.style.display = 'block';
    } else {
        noResults.style.display = 'none';
    }
}

// Search Katalog by Company Name
function searchKatalog() {
    const searchInput = document.getElementById('searchKatalog');
    const searchTerm = searchInput.value.toLowerCase();
    const cards = document.querySelectorAll('.katalog-card');
    const noResults = document.getElementById('noResults');
    let visibleCount = 0;
    
    cards.forEach(card => {
        const companyName = card.getAttribute('data-name');
        const currentDisplay = card.style.display;
        
        // Only search within currently visible cards (respect filter)
        if (currentDisplay !== 'none' || searchTerm !== '') {
            if (companyName.includes(searchTerm)) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        }
    });
    
    // Show/hide no results message
    if (visibleCount === 0) {
        noResults.style.display = 'block';
    } else {
        noResults.style.display = 'none';
    }
}

// Reset search when filter changes
document.addEventListener('DOMContentLoaded', function() {
    const filterTabs = document.querySelectorAll('.filter-tab');
    filterTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const searchInput = document.getElementById('searchKatalog');
            if (searchInput) {
                searchInput.value = '';
            }
        });
    });
});
</script>