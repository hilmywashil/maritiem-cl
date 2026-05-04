@extends('layouts.app')

@section('title', 'Join Us - ASITA JABAR')

@push('styles')
    <style>
        /* IMPORT FONT MONTSERRAT */
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap');

        /* FORM WRAPPER */
        .join-us-form {
            padding: 60px 0;
            background: #f7f8fa;
            font-family: 'Montserrat', Arial, sans-serif;
        }

        .join-us-form .container {
            max-width: 1400px;
            margin: auto;
            padding: 0 20px;
        }

        .join-us-form form {
            background: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            font-family: 'Montserrat', Arial, sans-serif;
        }

        /* ERROR ALERT */
        .alert-danger {
            background: #fee;
            border: 1px solid #fcc;
            color: #c33;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .alert-danger ul {
            margin: 10px 0 0 20px;
            padding: 0;
        }

        .alert-danger li {
            margin: 5px 0;
        }

        /* SECTION */
        .form-section {
            margin-bottom: 40px;
        }

        .form-section h2 {
            font-size: 20px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #2A348D;
            color: #04293B;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* FORM GROUP */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #04293B;
        }

        .form-group label .required {
            color: #dc2626;
            margin-left: 3px;
        }

        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="date"],
        .form-group input[type="file"],
        .form-group textarea {
            width: 100%;
            padding: 12px 14px;
            border-radius: 6px;
            border: 2px solid #d1d5db;
            font-size: 14px;
            font-family: 'Montserrat', Arial, sans-serif;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-group textarea {
            min-height: 100px;
            resize: vertical;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #2A348D;
            box-shadow: 0 0 0 3px rgba(42, 52, 141, 0.15);
        }

        .form-group.error input,
        .form-group.error textarea {
            border-color: #dc2626;
        }

        .form-group .help-text {
            font-size: 12px;
            color: #6b7280;
            margin-top: 5px;
        }

        .form-group .error-text {
            font-size: 12px;
            color: #dc2626;
            margin-top: 5px;
            font-weight: 600;
        }

        /* CHECKBOX */
        .checkbox-group {
            margin-bottom: 20px;
        }

        .checkbox-group label.main-label {
            display: block;
            margin-bottom: 12px;
            font-weight: 600;
            color: #04293B;
        }

        .checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 8px;
            font-size: 14px;
            color: #374151;
            font-family: 'Montserrat', Arial, sans-serif;
        }

        .checkbox input {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        /* BUTTON */
        .btn-primary {
            width: 100%;
            padding: 16px;
            font-size: 16px;
            font-weight: 700;
            background: #2A348D;
            border: none;
            color: #ffffff;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.2s, transform 0.1s;
            font-family: 'Montserrat', Arial, sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .btn-primary:hover {
            background: #04293B;
            transform: translateY(-2px);
        }

        .btn-primary:disabled {
            background: #9ca3af;
            cursor: not-allowed;
            transform: none;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .join-us-form {
                padding: 40px 0;
            }

            .join-us-form form {
                padding: 25px;
            }

            .form-section h2 {
                font-size: 18px;
            }
        }
    </style>
@endpush

@section('content')
    <section class="hero-abouts">
        <div class="hero-about" data-aos="fade-up">
            <h1>Join Us</h1>
            <p>Registration Form ASITA JABAR</p>
        </div>
    </section>
{{-- BANNER UNTUK MEMBER YANG SUDAH ADA --}}
        <div style="
            max-width: 1400px;
            margin: 50px auto 0;
            padding: 0 20px;
            font-family: 'Montserrat', Arial, sans-serif;
        ">
            <div style="
                background: linear-gradient(135deg, #04293B 0%, #2A348D 100%);
                border-radius: 14px;
                padding: 28px 36px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 24px;
                flex-wrap: wrap;
            ">
                <div>
                    <p style="color: rgba(255,255,255,0.7); font-size: 0.8rem; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; margin-bottom: 6px;">
                        Member Register
                    </p>
                    <p style="color: #fff; font-size: 1.05rem; font-weight: 800; margin: 0;">
                        Sudah jadi anggota tapi belum terdaftar di web ASITA Jabar?
                    </p>
                    <p style="color: rgba(255,255,255,0.65); font-size: 0.85rem; font-weight: 500; margin-top: 6px; margin-bottom: 0;">
                        Gunakan form khusus member — lebih singkat, tanpa upload dokumen.
                    </p>
                </div>
                <a href="{{ route('member-register') }}" style="
                    display: inline-block;
                    background: #fff;
                    color: #2A348D;
                    font-size: 0.85rem;
                    font-weight: 800;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    padding: 14px 30px;
                    border-radius: 9px;
                    text-decoration: none;
                    white-space: nowrap;
                    transition: background 0.2s;
                ">
                    Daftar Akun Member →
                </a>
            </div>
        </div>
    <section class="join-us-form">
        <div class="container">
            @if ($errors->any())
                <div class="alert-danger">
                    <strong>Terdapat kesalahan pada form:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('jadi-anggota.store') }}" method="POST" enctype="multipart/form-data" id="registrationForm">
                @csrf

                <!-- DATA PERUSAHAAN -->
                <div class="form-section">
                    <h2>Data Perusahaan</h2>
                    
                    <div class="form-group">
                        <label>Nama Perusahaan <span class="required">*</span></label>
                        <input type="text" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" required>
                        <span class="help-text">Contoh: PT. Travel Nusantara Indonesia</span>
                    </div>

                    <div class="form-group">
                        <label>Trade Mark <span class="required">*</span></label>
                        <input type="text" name="trade_mark" value="{{ old('trade_mark') }}" required>
                        <span class="help-text">Contoh: Nusantara Tour & Travel</span>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Berdiri Perusahaan <span class="required">*</span></label>
                        <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required max="{{ date('Y-m-d') }}">
                        <span class="help-text">Pilih tanggal berdirinya perusahaan</span>
                    </div>

                    <div class="form-group">
                        <label>Alamat Kantor <span class="required">*</span></label>
                        <textarea name="alamat_kantor" required>{{ old('alamat_kantor') }}</textarea>
                        <span class="help-text">Alamat lengkap kantor perusahaan</span>
                    </div>

                    <div class="form-group">
                        <label>Telepon / WhatsApp Perusahaan <span class="required">*</span></label>
                        <input type="text" name="telepon_wa_perusahaan" value="{{ old('telepon_wa_perusahaan') }}" required pattern="[0-9+\-\s()]+" placeholder="Contoh: 0812-3456-7890">
                        <span class="help-text">Nomor yang dapat dihubungi</span>
                    </div>

                    <div class="form-group">
                        <label>Email Perusahaan <span class="required">*</span></label>
                        <input type="email" name="email_website_perusahaan" value="{{ old('email_website_perusahaan') }}" required placeholder="email@perusahaan.com">
                        <span class="help-text">Email ini akan digunakan untuk login</span>
                    </div>
                </div>

                <!-- DATA PIMPINAN -->
                <div class="form-section">
                    <h2>Data Pimpinan</h2>
                    
                    <div class="form-group">
                        <label>Nama Pimpinan <span class="required">*</span></label>
                        <input type="text" name="nama_pimpinan" value="{{ old('nama_pimpinan') }}" required>
                        <span class="help-text">Nama lengkap direktur/pimpinan perusahaan</span>
                    </div>

                    <div class="form-group">
                        <label>Alamat Pimpinan <span class="required">*</span></label>
                        <textarea name="alamat_pimpinan" required>{{ old('alamat_pimpinan') }}</textarea>
                        <span class="help-text">Alamat tempat tinggal pimpinan</span>
                    </div>

                    <div class="form-group">
                        <label>Telepon / WhatsApp Pimpinan <span class="required">*</span></label>
                        <input type="text" name="telepon_wa_pimpinan" value="{{ old('telepon_wa_pimpinan') }}" required pattern="[0-9+\-\s()]+" placeholder="Contoh: 0812-3456-7890">
                    </div>

                    <div class="form-group">
                        <label>Email Pimpinan <span class="required">*</span></label>
                        <input type="email" name="email_pimpinan" value="{{ old('email_pimpinan') }}" required placeholder="email@pribadi.com">
                    </div>
                </div>

                <!-- LEGALITAS -->
                <div class="form-section">
                    <h2>Legalitas</h2>
                    
                    <div class="form-group">
                        <label>Nomor Akte Notaris <span class="required">*</span></label>
                        <input type="text" name="akte_notaris" value="{{ old('akte_notaris') }}" required>
                        <span class="help-text">Nomor akte pendirian perusahaan</span>
                    </div>

                    <div class="form-group">
                        <label>NIB / TDUP <span class="required">*</span></label>
                        <input type="text" name="nomor_induk_berusaha_tdup" value="{{ old('nomor_induk_berusaha_tdup') }}" required>
                        <span class="help-text">Nomor Induk Berusaha atau TDUP</span>
                    </div>

                    <div class="form-group">
                        <label>NPWP Perusahaan <span class="required">*</span></label>
                        <input type="text" name="npwp_perusahaan" value="{{ old('npwp_perusahaan') }}" required pattern="[0-9.\-]+" placeholder="00.000.000.0-000.000">
                        <span class="help-text">15 digit NPWP perusahaan</span>
                    </div>
                </div>

                <!-- PRODUK USAHA -->
                <div class="form-section">
                    <h2>Produk Usaha</h2>
                    
                    <div class="checkbox-group">
                        <label class="main-label">Pilih Produk Usaha yang Dijual <span class="required">*</span></label>
                        <span class="help-text" style="display: block; margin-bottom: 15px;">Pilih minimal 1 produk</span>
                        
                        @foreach(['Tiket Pesawat', 'Tiket Kereta', 'Tiket Kapal', 'Outbound Tour', 'Inbound Tour', 'Domestic Tour', 'Dokumen Perjalanan', 'Penyewaan Mobil', 'Hotel', 'Event Organizer', 'Umrah & Haji', 'Travel Asuransi', 'Lain-lain'] as $produk)
                            <label class="checkbox">
                                <input type="checkbox" name="produk_usaha_yang_akan_dijual[]" value="{{ $produk }}" 
                                    {{ in_array($produk, old('produk_usaha_yang_akan_dijual', [])) ? 'checked' : '' }}>
                                {{ $produk }}
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- DOKUMEN -->
                <div class="form-section">
                    <h2>Dokumen Upload</h2>
                    
                    <div class="form-group">
                        <label>Surat Permohonan (PDF) <span class="required">*</span></label>
                        <input type="file" name="surat_permohonan" accept=".pdf" required>
                        <span class="help-text">Format: PDF | Maksimal: 5MB</span>
                    </div>

                    <div class="form-group">
                        <label>Akte Pendirian Perusahaan (PDF) <span class="required">*</span></label>
                        <input type="file" name="akte_pendirian_perusahaan" accept=".pdf" required>
                        <span class="help-text">Format: PDF | Maksimal: 5MB</span>
                    </div>

                    <div class="form-group">
                        <label>NIB / TDUP (PDF) <span class="required">*</span></label>
                        <input type="file" name="nib_atau_tdup" accept=".pdf" required>
                        <span class="help-text">Format: PDF | Maksimal: 5MB</span>
                    </div>

                    <div class="form-group">
                        <label>KTP Pimpinan (Gambar) <span class="required">*</span></label>
                        <input type="file" name="ktp_pimpinan" accept="image/jpeg,image/jpg,image/png" required>
                        <span class="help-text">Format: JPG, PNG | Maksimal: 5MB</span>
                    </div>

                    <div class="form-group">
                        <label>NPWP Perusahaan (PDF) <span class="required">*</span></label>
                        <input type="file" name="npwp_perusahaan_file" accept=".pdf" required>
                        <span class="help-text">Format: PDF | Maksimal: 5MB</span>
                    </div>
                </div>

                <button type="submit" class="btn-primary" id="submitBtn">
                    SUBMIT PENDAFTARAN
                </button>
            </form>
        </div>

        
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('registrationForm');
        const submitBtn = document.getElementById('submitBtn');
        
        // File size validation
        const fileInputs = form.querySelectorAll('input[type="file"]');
        fileInputs.forEach(input => {
            input.addEventListener('change', function() {
                const maxSize = 5 * 1024 * 1024; // 5MB
                if (this.files[0] && this.files[0].size > maxSize) {
                    alert('Ukuran file ' + this.previousElementSibling.textContent + ' melebihi 5MB');
                    this.value = '';
                }
            });
        });

        // Form submission
        form.addEventListener('submit', function(e) {
            // Check if at least one checkbox is checked
            const checkboxes = form.querySelectorAll('input[name="produk_usaha_yang_akan_dijual[]"]');
            const isChecked = Array.from(checkboxes).some(cb => cb.checked);
            
            if (!isChecked) {
                e.preventDefault();
                alert('Pilih minimal 1 produk usaha yang dijual');
                return false;
            }

            // Disable submit button to prevent double submission
            submitBtn.disabled = true;
            submitBtn.textContent = 'MENGIRIM DATA...';
        });
    });
</script>
@endpush