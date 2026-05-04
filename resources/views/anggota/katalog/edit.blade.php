<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Katalog</title>
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

    .nav-link-home {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        padding: 12px 24px;
        margin-bottom: 12px;
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

    .page-header h1 {
        font-size: 28px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 8px;
        letter-spacing: -0.3px;
    }

    .page-header p {
        font-size: 15px;
        color: rgba(255, 255, 255, 0.85);
        font-weight: 500;
        letter-spacing: 0.2px;
        line-height: 1.5;
    }

    /* ============= FORM CONTAINER ============= */
    .form-container {
        background: white;
        border-radius: 2px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
        border: 1px solid #e5e7eb;
        overflow: hidden;
    }

    .form-body {
        padding: 32px;
    }

    .form-group {
        margin-bottom: 28px;
    }

    .form-label {
        display: block;
        font-weight: 700;
        font-size: 11px;
        color: #2a348d;
        margin-bottom: 8px;
        text-transform: uppercase;
        letter-spacing: 0.8px;
    }

    .form-label.required::after {
        content: '*';
        color: #ef4444;
        margin-left: 4px;
    }

    .form-input, .form-textarea {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #d1d5db;
        border-radius: 2px;
        font-size: 14px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 500;
        color: #1e293b;
        transition: all 0.3s;
    }

    .form-input:focus, .form-textarea:focus {
        outline: none;
        border-color: #2a348d;
        box-shadow: 0 0 0 3px rgba(42, 52, 141, 0.1);
    }

    .form-textarea {
        min-height: 120px;
        resize: vertical;
        line-height: 1.6;
    }

    .form-file-input {
        display: block;
        width: 100%;
        padding: 16px;
        border: 2px dashed #d1d5db;
        border-radius: 2px;
        cursor: pointer;
        transition: all 0.3s;
        font-size: 14px;
        font-weight: 500;
        color: #6b7280;
        background: #fafafa;
    }

    .form-file-input:hover {
        border-color: #2a348d;
        background: #f0f1f9;
        color: #2a348d;
    }

    .form-hint {
        font-size: 12px;
        color: #6b7280;
        margin-top: 8px;
        font-weight: 500;
        line-height: 1.5;
    }

    .current-image-label {
        font-size: 12px;
        color: #2a348d;
        font-weight: 700;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .badge {
        background: #10b981;
        color: white;
        padding: 4px 10px;
        border-radius: 2px;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .current-image {
        margin-bottom: 16px;
    }

    .current-logo {
        width: 150px;
        height: 150px;
        object-fit: contain;
        border-radius: 2px;
        border: 2px solid #e5e7eb;
        background: #fafafa;
        padding: 8px;
    }

    .current-images-grid {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 16px;
    }

    .image-wrapper {
        position: relative;
    }

    .current-gallery-img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 2px;
        border: 2px solid #e5e7eb;
    }

    .delete-image-btn {
        position: absolute;
        top: -8px;
        right: -8px;
        background: #ef4444;
        color: white;
        border: 2px solid white;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: all 0.2s;
    }

    .delete-image-btn:hover {
        background: #dc2626;
        transform: scale(1.1);
    }

    .file-preview {
        margin-top: 16px;
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .file-preview img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 2px;
        border: 2px solid #e5e7eb;
        transition: all 0.3s;
    }

    .file-preview img:hover {
        border-color: #2a348d;
        transform: scale(1.05);
    }

    .current-map {
        margin-bottom: 16px;
        border: 2px solid #e5e7eb;
        border-radius: 2px;
        overflow: hidden;
    }

    .current-map iframe {
        width: 100%;
        height: 300px;
        border: none;
    }

    .map-preview-container {
        margin-top: 16px;
        border: 2px solid #e5e7eb;
        border-radius: 2px;
        overflow: hidden;
        display: none;
    }

    .map-preview-container.show {
        display: block;
    }

    .map-preview-container iframe {
        width: 100%;
        height: 300px;
        border: none;
    }

    .map-preview-placeholder {
        width: 100%;
        height: 300px;
        background: #fafafa;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 12px;
        color: #9ca3af;
    }

    .map-preview-placeholder svg {
        width: 48px;
        height: 48px;
        opacity: 0.5;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .map-helper {
        background: #f8f9fa;
        border-radius: 2px;
        padding: 20px;
        margin-top: 16px;
        border: 1px solid #e5e7eb;
    }

    .map-helper-title {
        font-weight: 700;
        font-size: 12px;
        color: #2a348d;
        margin-bottom: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .map-helper-steps {
        font-size: 13px;
        color: #4b5563;
        line-height: 1.7;
        font-weight: 500;
    }

    .map-helper-steps ol {
        margin: 12px 0;
        padding-left: 20px;
    }

    .map-helper-steps li {
        margin-bottom: 8px;
    }

    .map-status {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        margin-top: 12px;
        padding: 10px 16px;
        border-radius: 2px;
        font-weight: 600;
    }

    .map-status.success {
        background: #d1fae5;
        color: #065f46;
        border: 1px solid #6ee7b7;
    }

    .map-status.warning {
        background: #fef3c7;
        color: #92400e;
        border: 1px solid #fcd34d;
    }

    .map-status.error {
        background: #fee2e2;
        color: #991b1b;
        border: 1px solid #fca5a5;
    }

    .map-status svg {
        width: 16px;
        height: 16px;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .format-accepted {
        display: inline-block;
        background: #10b981;
        color: white;
        padding: 4px 10px;
        border-radius: 2px;
        font-size: 10px;
        font-weight: 700;
        margin-left: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .info-badge {
        display: inline-block;
        background: #dbeafe;
        color: #1e40af;
        padding: 4px 10px;
        border-radius: 2px;
        font-size: 10px;
        font-weight: 700;
        margin-left: 8px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .code-example {
        background: #1e293b;
        color: #e2e8f0;
        padding: 16px;
        border-radius: 2px;
        font-family: 'Courier New', monospace;
        font-size: 11px;
        overflow-x: auto;
        margin-top: 12px;
        line-height: 1.6;
    }

    .form-actions {
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
        padding: 12px 24px;
        border-radius: 2px;
        font-weight: 700;
        font-size: 13px;
        cursor: pointer;
        border: none;
        transition: all 0.3s;
        text-decoration: none;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .btn svg {
        width: 16px;
        height: 16px;
        stroke: currentColor;
        stroke-width: 2;
        fill: none;
    }

    .btn-primary {
        background: #fbbf24;
        color: #1a1f5c;
    }

    .btn-primary:hover {
        background: #f59e0b;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(251, 191, 36, 0.4);
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

    .form-error {
        color: #991b1b;
        font-size: 12px;
        margin-top: 6px;
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    /* ============= RESPONSIVE ============= */
    @media (max-width: 1024px) {
        .profile-container {
            grid-template-columns: 280px 1fr;
        }

        .content-wrapper {
            padding: 32px 36px;
        }

        .form-body {
            padding: 28px;
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

        .page-header h1 {
            font-size: 22px;
        }

        .page-header p {
            font-size: 13px;
        }

        .form-body {
            padding: 20px;
        }

        .form-actions {
            padding: 16px 20px;
            flex-direction: column;
        }

        .btn {
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
                <h1>Edit Data Katalog</h1>
                <p>Perbarui informasi untuk ditampilkan di halaman E-Katalog publik</p>
            </div>

            <!-- FORM CONTAINER -->
            <div class="form-container">
                <form action="{{ route('anggota.katalog.update', $katalog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-body">
                        <!-- Nama Perusahaan -->
                        <div class="form-group">
                            <label class="form-label required">
                                Nama Perusahaan
                                <span class="info-badge">Dapat diedit</span>
                            </label>
                            <input 
                                type="text" 
                                name="company_name" 
                                class="form-input" 
                                value="{{ old('company_name', $katalog->company_name) }}" 
                                required>
                            <div class="form-hint">Nama perusahaan yang akan ditampilkan di katalog</div>
                            @error('company_name')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Bidang Perusahaan -->
                        <div class="form-group">
                            <label class="form-label required">
                                Bidang Perusahaan
                                <span class="info-badge">Dapat diedit</span>
                            </label>
                            <input 
                                type="text" 
                                name="business_field" 
                                class="form-input" 
                                value="{{ old('business_field', $katalog->business_field) }}" 
                                required>
                            <div class="form-hint">Bidang usaha atau kategori produk/jasa</div>
                            @error('business_field')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deskripsi Perusahaan -->
                        <div class="form-group">
                            <label class="form-label required">Deskripsi Perusahaan</label>
                            <textarea 
                                name="description" 
                                class="form-textarea" 
                                placeholder="Ceritakan tentang perusahaan Anda..."
                                required>{{ old('description', $katalog->description) }}</textarea>
                            <div class="form-hint">Deskripsi menarik yang menjelaskan bisnis Anda</div>
                            @error('description')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Logo Perusahaan -->
                        <div class="form-group">
                            <label class="form-label">Logo Perusahaan</label>
                            @if($katalog->logo)
                                <div class="current-image-label">
                                    Logo saat ini:
                                    <span class="badge">Aktif</span>
                                </div>
                                <div class="current-image">
                                    <img src="{{ Storage::url($katalog->logo) }}" alt="Current Logo" class="current-logo">
                                </div>
                            @endif
                            <input type="file" name="logo" class="form-file-input" accept="image/*" onchange="previewLogo(event)">
                            <div class="form-hint">Biarkan kosong jika tidak ingin mengubah. Format: JPG, PNG, GIF (Max: 2MB)</div>
                            <div class="file-preview" id="logoPreview"></div>
                            @error('logo')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Galeri Gambar -->
                        <div class="form-group">
                            <label class="form-label">Galeri Gambar (Max 3)</label>
                            @if($katalog->images && count($katalog->images) > 0)
                                <div class="current-image-label">
                                    Gambar saat ini ({{ count($katalog->images) }}):
                                </div>
                                <div class="current-images-grid">
                                    @foreach($katalog->images as $index => $image)
                                        <div class="image-wrapper">
                                            <img src="{{ Storage::url($image) }}" alt="Gallery {{ $index + 1 }}" class="current-gallery-img">
                                            <button type="button" class="delete-image-btn" onclick="deleteImage({{ $index }})" title="Hapus gambar">×</button>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <input type="file" name="images[]" class="form-file-input" accept="image/*" multiple onchange="previewImages(event)">
                            <div class="form-hint">Upload gambar baru akan mengganti semua gambar lama. Format: JPG, PNG, GIF (Max: 2MB per file)</div>
                            <div class="file-preview" id="imagesPreview"></div>
                            @error('images.*')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Alamat -->
                        <div class="form-group">
                            <label class="form-label required">Alamat</label>
                            <textarea 
                                name="address" 
                                class="form-textarea" 
                                rows="3" 
                                required>{{ old('address', $katalog->address) }}</textarea>
                            <div class="form-hint">Alamat lengkap perusahaan</div>
                            @error('address')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Nomor Telepon -->
                        <div class="form-group">
                            <label class="form-label required">Nomor Telepon</label>
                            <input 
                                type="text" 
                                name="phone" 
                                class="form-input" 
                                value="{{ old('phone', $katalog->phone) }}" 
                                placeholder="Contoh: 08123456789"
                                required>
                            <div class="form-hint">Nomor telepon/WhatsApp yang bisa dihubungi</div>
                            @error('phone')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label class="form-label required">Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-input" 
                                value="{{ old('email', $katalog->email) }}" 
                                placeholder="email@perusahaan.com"
                                required>
                            <div class="form-hint">Email perusahaan untuk dihubungi</div>
                            @error('email')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Google Maps Embed -->
                        <div class="form-group">
                            <label class="form-label">
                                Lokasi Google Maps
                                <span class="format-accepted">Hanya kode Embed!</span>
                            </label>
                            @if($katalog->map_embed_url)
                                <div class="current-image-label">
                                    Map saat ini:
                                    <span class="badge">Aktif</span>
                                </div>
                                <div class="current-map">
                                    <iframe src="{{ $katalog->map_embed_url }}" allowfullscreen loading="lazy"></iframe>
                                </div>
                            @endif
                            <textarea 
                                name="map_embed_url" 
                                class="form-textarea" 
                                rows="4"
                                placeholder="Paste kode iframe embed dari Google Maps di sini..."
                                oninput="handleMapInput(this.value)">{{ old('map_embed_url', $katalog->map_embed_url) }}</textarea>
                            <div class="form-hint">
                                <strong>Yang diterima:</strong> Kode iframe embed lengkap dari Google Maps. Biarkan kosong jika tidak ingin mengubah.
                            </div>
                            
                            <div id="mapStatus"></div>

                            <div class="map-helper">
                                <div class="map-helper-title">Cara mendapatkan kode embed:</div>
                                <div class="map-helper-steps">
                                    <ol>
                                        <li>Buka <strong>google.com/maps</strong> di browser</li>
                                        <li>Cari dan klik lokasi perusahaan Anda</li>
                                        <li>Klik tombol <strong>"Share"</strong> atau <strong>"Bagikan"</strong></li>
                                        <li>Pilih tab <strong>"Embed a map"</strong> atau <strong>"Sematkan peta"</strong></li>
                                        <li>Klik <strong>"COPY HTML"</strong></li>
                                        <li>Paste kode yang sudah dicopy ke kolom di atas</li>
                                    </ol>
                                    <div style="margin-top: 16px; padding: 16px; background: #eff6ff; border-radius: 2px; border: 1px solid #bfdbfe;">
                                        <strong style="color: #1e40af; font-size: 12px;">Contoh kode embed yang benar:</strong>
                                        <div class="code-example">&lt;iframe src="https://www.google.com/maps/embed?pb=!1m18..."<br>width="600" height="450" style="border:0;"<br>allowfullscreen="" loading="lazy"&gt;&lt;/iframe&gt;</div>
                                    </div>
                                </div>
                            </div>

                            <div class="map-preview-container" id="mapPreviewContainer">
                                <div class="map-preview-placeholder">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <p>Preview map baru akan muncul di sini</p>
                                </div>
                                <iframe id="mapPreviewFrame" src="" allowfullscreen loading="lazy" style="display: none;"></iframe>
                            </div>
                            
                            @error('map_embed_url')
                                <div class="form-error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <svg viewBox="0 0 24 24">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                <polyline points="7 3 7 8 15 8"></polyline>
                            </svg>
                            Update Data
                        </button>
                        <a href="{{ route('anggota.katalog.index') }}" class="btn btn-secondary">
                            <svg viewBox="0 0 24 24">
                                <line x1="19" y1="12" x2="5" y2="12"></line>
                                <polyline points="12 19 5 12 12 5"></polyline>
                            </svg>
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

<script>
function deleteImage(index) {
    if (!confirm('Apakah Anda yakin ingin menghapus gambar ini?')) {
        return;
    }

    const form = document.createElement('form');
    form.method = 'POST';
    form.action = '{{ route("anggota.katalog.delete-image", $katalog->id) }}';

    const csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '_token';
    csrfInput.value = '{{ csrf_token() }}';

    const methodInput = document.createElement('input');
    methodInput.type = 'hidden';
    methodInput.name = '_method';
    methodInput.value = 'DELETE';

    const indexInput = document.createElement('input');
    indexInput.type = 'hidden';
    indexInput.name = 'image_index';
    indexInput.value = index;

    form.appendChild(csrfInput);
    form.appendChild(methodInput);
    form.appendChild(indexInput);

    document.body.appendChild(form);
    form.submit();
}

function previewLogo(event) {
    const preview = document.getElementById('logoPreview');
    preview.innerHTML = '';
    
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            preview.appendChild(img);
        }
        reader.readAsDataURL(file);
    }
}

function previewImages(event) {
    const preview = document.getElementById('imagesPreview');
    preview.innerHTML = '';
    
    const files = event.target.files;
    for (let i = 0; i < Math.min(files.length, 3); i++) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            preview.appendChild(img);
        }
        reader.readAsDataURL(files[i]);
    }
}

let debounceTimer;
function handleMapInput(input) {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
        previewMap(input);
    }, 500);
}

function showMapStatus(type, message) {
    const statusDiv = document.getElementById('mapStatus');
    const icons = {
        success: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>',
        warning: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>',
        error: '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>'
    };
    
    statusDiv.innerHTML = `
        <div class="map-status ${type}">
            ${icons[type]}
            <span>${message}</span>
        </div>
    `;
}

function previewMap(input) {
    const previewContainer = document.getElementById('mapPreviewContainer');
    const previewFrame = document.getElementById('mapPreviewFrame');
    const placeholder = previewContainer.querySelector('.map-preview-placeholder');
    
    if (!input || input.trim() === '') {
        previewContainer.classList.remove('show');
        previewFrame.style.display = 'none';
        placeholder.style.display = 'flex';
        document.getElementById('mapStatus').innerHTML = '';
        return;
    }

    const embedUrl = extractEmbedUrl(input);
    
    if (embedUrl) {
        previewFrame.src = embedUrl;
        previewFrame.style.display = 'block';
        placeholder.style.display = 'none';
        previewContainer.classList.add('show');
        showMapStatus('success', 'Kode embed terdeteksi! Preview map ditampilkan di bawah.');
    } else {
        previewContainer.classList.remove('show');
        previewFrame.style.display = 'none';
        placeholder.style.display = 'flex';
        showMapStatus('error', 'Kode embed tidak valid. Pastikan Anda copy KODE IFRAME dari Google Maps (bukan URL biasa).');
    }
}

function extractEmbedUrl(input) {
    input = input.trim();
    
    // Extract URL dari iframe src
    const srcMatch = input.match(/src=["']([^"']+)["']/);
    if (srcMatch) {
        const url = srcMatch[1];
        // Validasi bahwa ini adalah Google Maps embed URL
        if (url.includes('google.com/maps/embed') || (url.includes('google.com/maps') && url.includes('output=embed'))) {
            return url;
        }
    }
    
    // Jika langsung URL embed tanpa iframe tags
    if (input.includes('google.com/maps/embed') || (input.includes('google.com/maps') && input.includes('output=embed'))) {
        return input;
    }
    
    return null;
}
</script>
</body>
</html>