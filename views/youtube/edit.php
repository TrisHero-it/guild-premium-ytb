<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">

<!-- Mirrored from keenthemes.com/metronic/tailwind/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jan 2026 07:04:28 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>
        Sửa Family YouTube
    </title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <link href="index.html" rel="canonical" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="Tailwind CSS based HTML and JavaScript toolkit for building modern and scalable web applications"
        name="description" />
    <meta content="@keenthemes" name="twitter:site" />
    <meta content="@keenthemes" name="twitter:creator" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="Metronic - Tailwind CSS Light Sidebar" name="twitter:title" />
    <meta content="Tailwind CSS based HTML and JavaScript toolkit for building modern and scalable web applications"
        name="twitter:description" />
    <meta content="/metronic/tailwind/dist/assets/media/app/og-image.png" name="twitter:image" />
    <meta content="en_US" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="@keenthemes" property="og:site_name" />
    <meta content="Metronic - Tailwind CSS Light Sidebar" property="og:title" />
    <meta content="Tailwind CSS based HTML and JavaScript toolkit for building modern and scalable web applications"
        property="og:description" />
    <meta content="/metronic/tailwind/dist/assets/media/app/og-image.png" property="og:image" />
    <link href="dist/assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="dist/assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
    <link href="dist/assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
    <link href="https://muakey.com/favicon.ico" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link href="dist/assets/vendors/apexcharts/apexcharts.css" rel="stylesheet" />
    <link href="dist/assets/vendors/keenicons/styles.bundle.css" rel="stylesheet" />
    <link href="dist/assets/css/styles.css" rel="stylesheet" />
    <!-- Google tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-52YZ3XGZJ6">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-52YZ3XGZJ6');
    </script>
</head>

<body class="antialiased flex h-full text-base text-foreground bg-background demo1 kt-header-fixed" style="background: ghostwhite;">
    <!-- Theme Mode -->
    <script>
        const defaultThemeMode = 'light'; // light|dark|system
        let themeMode;

        if (document.documentElement) {
            if (localStorage.getItem('kt-theme')) {
                themeMode = localStorage.getItem('kt-theme');
            } else if (
                document.documentElement.hasAttribute('data-kt-theme-mode')
            ) {
                themeMode =
                    document.documentElement.getAttribute('data-kt-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }

            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                    'dark' :
                    'light';
            }

            document.documentElement.classList.add(themeMode);
        }
    </script>
    <!-- End of Theme Mode -->
    <!-- Page -->
    <!-- Main -->
    <div class="flex grow flex-col min-h-full">
        <!-- Nav bar -->
        <nav class="bg-background border-b border-border shrink-0 z-30">
                        <div class="flex items-center justify-between gap-4 px-4 lg:px-6 h-14">
                                <a href="/" class="flex items-center gap-2 shrink-0">
                                        <img class="h-8 w-auto dark:hidden" src="uploads/Logo.png" alt="Muakey" style="max-height: 32px; max-width: 180px;" />
                                        <img class="h-8 w-auto hidden dark:block" src="uploads/Logo.png" alt="Muakey" style="max-height: 32px; max-width: 180px;" />
                                </a>
                                <div class="flex items-center gap-1">
                                        <a href="/" class="kt-menu-link border border-transparent items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-foreground hover:bg-accent/60 hover:text-primary kt-menu-item-active:bg-accent/60 kt-menu-item-active:text-primary">
                                                <i class="ki-filled ki-element-11 text-lg"></i>
                                                Danh sách family
                                        </a>
                                        <a href="?act=add-family" class="kt-menu-link border border-transparent items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-foreground hover:bg-accent/60 hover:text-primary">
                                                <i class="ki-filled ki-plus text-lg"></i>
                                                Thêm family
                                        </a>
                                        <span class="w-px h-5 bg-border mx-1" aria-hidden="true"></span>
                                        <a href="?act=collaborators" class="kt-menu-link border border-transparent items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-foreground hover:bg-accent/60 hover:text-primary">
                                                <i class="ki-filled ki-setting-2 text-lg"></i>
                                                Danh sách hướng dẫn
                                        </a>
                                        <a href="?act=collaborators&sub=add" class="kt-menu-link border border-transparent items-center gap-2 px-3 py-2 rounded-lg text-sm font-medium text-foreground hover:bg-accent/60 hover:text-primary">
                                                <i class="ki-filled ki-plus text-lg"></i>
                                                Thêm form hướng dẫn
                                        </a>
                                </div>
                        </div>
                </nav>
        <!-- Wrapper -->
        <div class="kt-wrapper flex grow flex-col min-w-0">

            <!-- Content -->
            <main class="grow " id="content" role="content">
                <!-- Container -->
                <div class="kt-container-fixed" id="contentContainer">
                </div>
                <!-- End of Container -->

                <!-- Container -->
                <div class="kt-container-fixed">
                    <div class="grid gap-5 lg:gap-7.5">
                        <!-- begin: form card -->
                        <div class="grid">
                            <div class="kt-card kt-card-grid h-full min-w-full">
                                <div class="kt-card-header">
                                    <h3 class="kt-card-title">
                                        Sửa Family
                                    </h3>
                                </div>
                                <div class="kt-card-body">
                                    <?php if (isset($_SESSION['errors']) && !empty($_SESSION['errors'])): ?>
                                        <div class="mb-5 p-4 bg-destructive/10 border border-destructive rounded-lg">
                                            <div class="flex items-start gap-2">
                                                <i class="ki-filled ki-information text-destructive text-lg mt-0.5"></i>
                                                <div class="flex flex-col gap-1">
                                                    <h4 class="text-sm font-semibold text-destructive">Có lỗi xảy ra:</h4>
                                                    <ul class="list-disc list-inside text-sm text-destructive space-y-1">
                                                        <?php foreach ($_SESSION['errors'] as $error): ?>
                                                            <li><?php echo htmlspecialchars($error); ?></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <?php unset($_SESSION['errors']); ?>
                                    <?php endif; ?>

                                    <?php if (isset($_SESSION['success'])): ?>
                                        <div class="mb-5 p-4 bg-success/10 border border-success rounded-lg">
                                            <div class="flex items-center gap-2">
                                                <i class="ki-filled ki-check-circle text-success text-lg"></i>
                                                <span class="text-sm font-semibold text-success"><?php echo htmlspecialchars($_SESSION['success']); ?></span>
                                            </div>
                                        </div>
                                        <?php unset($_SESSION['success']); ?>
                                    <?php endif; ?>

                                    <?php
                                    // Helper function to format member data for display
                                    function formatMemberForDisplay($memberData)
                                    {
                                        if (empty($memberData)) {
                                            return '';
                                        }

                                        // Try to decode as JSON first
                                        $decoded = json_decode($memberData, true);
                                        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                                            // Convert JSON back to text format
                                            $lines = [];
                                            $keyMap = [
                                                'order_code' => 'Mã đơn hàng',
                                                'product_name' => 'Tên sản phẩm',
                                                'email' => 'Email',
                                                'region' => 'Khu vực bạn sống',
                                                'purchase_date' => 'Ngày mua'
                                            ];

                                            foreach ($decoded as $key => $value) {
                                                $vietnameseKey = isset($keyMap[$key]) ? $keyMap[$key] : $key;
                                                $lines[] = $vietnameseKey . ': ' . $value;
                                            }
                                            return implode("\n", $lines);
                                        }

                                        // If not JSON, return as is
                                        return $memberData;
                                    }

                                    // Helper function to format date for input (chỉ ngày, không giờ)
                                    function formatDateTimeForInput($datetime)
                                    {
                                        if (empty($datetime)) {
                                            return '';
                                        }
                                        return date('Y-m-d', strtotime($datetime));
                                    }

                                    // Get old data from session if exists (for validation errors)
                                    $oldData = isset($_SESSION['old_data']) ? $_SESSION['old_data'] : null;

                                    // Use family data or old data
                                    $formValue = $oldData ? ($oldData['form'] ?? '') : ($family['form'] ?? '');
                                    $emailValue = $oldData ? ($oldData['email'] ?? '') : ($family['email'] ?? '');
                                    $userValue = $oldData ? ($oldData['user'] ?? '') : ($family['user'] ?? '');
                                    $numberPhoneValue = $oldData ? ($oldData['number_phone'] ?? '') : ($family['number_phone'] ?? '');
                                    $numberBankValue = $oldData ? ($oldData['number_bank'] ?? '') : ($family['number_bank'] ?? '');
                                    $nameBankValue = $oldData ? ($oldData['name_bank'] ?? '') : ($family['name_bank'] ?? '');
                                    $paymentAtValue = $oldData ? ($oldData['payment_at'] ?? '') : formatDateTimeForInput($family['payment_at'] ?? '');
                                    $payDueDateValue = $oldData ? ($oldData['pay_due_date'] ?? '') : formatDateTimeForInput($family['pay_due_date'] ?? '');
                                    $statusValue = $oldData ? ($oldData['status'] ?? '') : ($family['status'] ?? '');
                                    $noteValue = $oldData ? ($oldData['note'] ?? '') : ($family['note'] ?? '');
                                    $billPaymentValue = $family['bill_payment'] ?? '';
                                    $billPaymentFiles = [];
                                    if (!empty($billPaymentValue)) {
                                        $dec = json_decode($billPaymentValue, true);
                                        $billPaymentFiles = is_array($dec) ? $dec : [$billPaymentValue];
                                    }
                                    $billOfMasterValue = $family['bill_of_master'] ?? '';
                                    $billOfMasterFiles = [];
                                    if (!empty($billOfMasterValue)) {
                                        $decMaster = json_decode($billOfMasterValue, true);
                                        $billOfMasterFiles = is_array($decMaster) ? $decMaster : [$billOfMasterValue];
                                    }
                                    ?>
                                    <form method="POST" action="/" id="edit_family_form" enctype="multipart/form-data" class="grid gap-5 lg:gap-7.5">
                                        <input type="hidden" name="action" value="update-family">
                                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($family['id']); ?>">
                                        <!-- Row 1: Form Type and Email -->
                                        <div class="grid lg:grid-cols-2 gap-5" style="padding: 10px 10px 0 10px;">
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                    Hình thức <span class="text-destructive">*</span>
                                                </label>
                                                <select name="form" class="kt-select" required data-kt-select="true">
                                                    <option value="">Chọn hình thức</option>
                                                    <option value="Đăng ký mới" <?php echo ($formValue === 'Đăng ký mới') ? 'selected' : ''; ?>>Đăng ký mới</option>
                                                    <option value="Gia hạn" <?php echo ($formValue === 'Gia hạn') ? 'selected' : ''; ?>>Gia hạn</option>
                                                    <option value="Nâng cấp" <?php echo ($formValue === 'Nâng cấp') ? 'selected' : ''; ?>>Nâng cấp</option>
                                                </select>
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                    Email <span class="text-destructive">*</span>
                                                </label>
                                                <label class="kt-input">
                                                    <i class="ki-filled ki-sms"></i>
                                                    <input type="email" name="email" placeholder="example@email.com" value="<?php echo htmlspecialchars($emailValue); ?>" required>
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Row 2: User Name and Phone Number -->
                                        <div class="grid lg:grid-cols-2 gap-5" style="padding: 0 10px;">
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                    Họ và tên <span class="text-destructive">*</span>
                                                </label>
                                                <label class="kt-input">
                                                    <i class="ki-filled ki-user"></i>
                                                    <input type="text" name="user" placeholder="Nguyễn Văn A" value="<?php echo htmlspecialchars($userValue); ?>" required>
                                                </label>
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                    Số điện thoại
                                                </label>
                                                <label class="kt-input">
                                                    <i class="ki-filled ki-phone"></i>
                                                    <input type="tel" name="number_phone" placeholder="0347895560" value="<?php echo htmlspecialchars($numberPhoneValue); ?>">
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Row 3: Bank Information -->
                                        <div class="grid lg:grid-cols-2 gap-5" style="padding: 0 10px;">
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                    Số tài khoản ngân hàng <span class="text-destructive">*</span>
                                                </label>
                                                <label class="kt-input">
                                                    <i class="ki-filled ki-credit-cart"></i>
                                                    <input type="text" name="number_bank" placeholder="19073432582017" value="<?php echo htmlspecialchars($numberBankValue); ?>" required>
                                                </label>
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                    Tên ngân hàng <span class="text-destructive">*</span>
                                                </label>
                                                <select name="name_bank" id="name_bank_select" class="kt-select" required>
                                                    <option value="">Chọn ngân hàng</option>
                                                    <?php if (!empty($nameBankValue)): ?>
                                                        <option value="<?php echo htmlspecialchars($nameBankValue); ?>" selected><?php echo htmlspecialchars($nameBankValue); ?></option>
                                                    <?php endif; ?>
                                                </select>
                                                <script>
                                                    document.addEventListener('DOMContentLoaded', function() {
                                                        // Gọi API danh sách ngân hàng
                                                        fetch('https://api.vietqr.io/v2/banks')
                                                            .then(res => res.json())
                                                            .then(data => {
                                                                if (data && data.data) {
                                                                    const select = document.getElementById('name_bank_select');
                                                                    // Xóa option cũ (trừ option đầu để chọn)
                                                                    while (select.options.length > 1) {
                                                                        select.remove(1);
                                                                    }
                                                                    data.data.forEach(function(bank) {
                                                                        const option = document.createElement('option');
                                                                        option.value = bank.shortName || bank.code || bank.name;
                                                                        option.text = bank.shortName;
                                                                        // Nếu value cũ đã chọn thì chọn lại
                                                                        if (("<?php echo htmlspecialchars($nameBankValue); ?>").trim().toLowerCase() === (option.value || '').toLowerCase()) {
                                                                            option.selected = true;
                                                                        }
                                                                        select.appendChild(option);
                                                                    });
                                                                }
                                                            });
                                                    });
                                                </script>
                                            </div>
                                        </div>

                                        <!-- Row 4: Payment Date and Due Date -->
                                        <div class="grid lg:grid-cols-2 gap-5" style="padding: 0 10px;">
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                    Ngày thanh toán
                                                </label>
                                                <label class="kt-input">
                                                    <i class="ki-filled ki-calendar"></i>
                                                    <input type="date" name="payment_at" value="<?php echo htmlspecialchars($paymentAtValue); ?>">
                                                </label>
                                            </div>
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                    Ngày đáo hạn <span class="text-destructive">*</span>
                                                </label>
                                                <label class="kt-input">
                                                    <i class="ki-filled ki-calendar-tick"></i>
                                                    <input type="date" name="pay_due_date" value="<?php echo htmlspecialchars($payDueDateValue); ?>" required>
                                                </label>
                                            </div>
                                        </div>

                                        <!-- Row 5: Status -->
                                        <div class="flex flex-col gap-2" style="padding: 0 10px;">
                                            <label class="kt-form-label text-mono font-semibold text-sm">
                                                Trạng thái <span class="text-destructive">*</span>
                                            </label>
                                            <select name="status" class="kt-select" required data-kt-select="true">
                                                <option value="">Chọn trạng thái</option>
                                                <option value="da thanh toan" <?php echo ($statusValue === 'da thanh toan') ? 'selected' : ''; ?>>Đã thanh toán</option>
                                                <option value="chua thanh toan" <?php echo ($statusValue === 'chua thanh toan') ? 'selected' : ''; ?>>Chưa thanh toán</option>
                                                <option value="dang xu ly" <?php echo ($statusValue === 'dang xu ly') ? 'selected' : ''; ?>>Đang xử lý</option>
                                                <option value="huy" <?php echo ($statusValue === 'huy') ? 'selected' : ''; ?>>Hủy</option>
                                            </select>
                                        </div>

                                        <!-- Row 6: Bill Payment -->
                                        <div class="flex flex-col gap-2" style="padding: 0 10px;">
                                            <label class="kt-form-label text-mono font-semibold text-sm">
                                                Hóa đơn thanh toán
                                            </label>
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-input">
                                                    <i class="ki-filled ki-document"></i>
                                                    <input type="file" name="bill_payment[]" accept="image/*,.pdf,.doc,.docx" id="bill_payment_file" multiple>
                                                </label>
                                                <p class="text-xs text-muted-foreground">Có thể chọn nhiều ảnh/file. Chọn file mới sẽ thay thế toàn bộ file hiện tại. Tối đa 10MB/file.</p>
                                                <?php if (!empty($billPaymentFiles)): ?>
                                                    <div class="mt-2">
                                                        <span class="text-xs font-medium text-muted-foreground block mb-2">File hiện tại (<?php echo count($billPaymentFiles); ?>):</span>
                                                        <div class="flex flex-wrap gap-2">
                                                            <?php foreach ($billPaymentFiles as $f): ?>
                                                                <div class="flex items-center gap-2 p-3 bg-accent/60 rounded-lg border border-border max-w-full">
                                                                    <?php if (preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $f)): ?>
                                                                        <img src="../uploads/bills/<?php echo htmlspecialchars($f); ?>" alt="" class="w-12 h-12 object-cover rounded border border-border shrink-0">
                                                                    <?php else: ?>
                                                                        <span class="w-12 h-12 flex items-center justify-center shrink-0"><i class="ki-filled ki-file text-primary text-2xl"></i></span>
                                                                    <?php endif; ?>
                                                                    <div class="flex flex-col min-w-0">
                                                                        <span class="text-sm font-semibold text-mono truncate"><?php echo htmlspecialchars($f); ?></span>
                                                                        <a href="../uploads/bills/<?php echo htmlspecialchars($f); ?>" target="_blank" rel="noopener" class="text-xs text-primary hover:underline">Xem / Tải</a>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <div id="bill_payment_preview" class="hidden mt-2 flex flex-col gap-2">
                                                    <!-- Danh sách file mới chọn sẽ được thêm vào đây bằng JS -->
                                                </div>
                                                <button type="button" id="clear_all_bill_files" class="kt-btn kt-btn-sm kt-btn-ghost hidden mt-1" onclick="clearFilePreview()">Xóa tất cả file mới chọn</button>
                                            </div>
                                        </div>

                                        <!-- Row 6b: Bill of Master -->
                                        <div class="flex flex-col gap-2" style="padding: 0 10px;">
                                            <label class="kt-form-label text-mono font-semibold text-sm">
                                                Hóa đơn chủ fam (bill of master)
                                            </label>
                                            <div class="flex flex-col gap-2">
                                                <label class="kt-input">
                                                    <i class="ki-filled ki-document"></i>
                                                    <input type="file" name="bill_of_master[]" accept="image/*,.pdf,.doc,.docx" id="bill_of_master_file" multiple>
                                                </label>
                                                <p class="text-xs text-muted-foreground">Có thể chọn nhiều ảnh/file. Chọn file mới sẽ thêm vào file hiện tại. Tối đa 10MB/file.</p>
                                                <?php if (!empty($billOfMasterFiles)): ?>
                                                    <div class="mt-2">
                                                        <span class="text-xs font-medium text-muted-foreground block mb-2">File hiện tại (<?php echo count($billOfMasterFiles); ?>):</span>
                                                        <div class="flex flex-wrap gap-2">
                                                            <?php foreach ($billOfMasterFiles as $f): ?>
                                                                <div class="flex items-center gap-2 p-3 bg-accent/60 rounded-lg border border-border max-w-full">
                                                                    <?php if (preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $f)): ?>
                                                                        <img src="../uploads/bills/<?php echo htmlspecialchars($f); ?>" alt="" class="w-12 h-12 object-cover rounded border border-border shrink-0">
                                                                    <?php else: ?>
                                                                        <span class="w-12 h-12 flex items-center justify-center shrink-0"><i class="ki-filled ki-file text-primary text-2xl"></i></span>
                                                                    <?php endif; ?>
                                                                    <div class="flex flex-col min-w-0">
                                                                        <span class="text-sm font-semibold text-mono truncate"><?php echo htmlspecialchars($f); ?></span>
                                                                        <a href="../uploads/bills/<?php echo htmlspecialchars($f); ?>" target="_blank" rel="noopener" class="text-xs text-primary hover:underline">Xem / Tải</a>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <div id="bill_of_master_preview" class="hidden mt-2 flex flex-col gap-2">
                                                    <!-- Danh sách file mới chọn sẽ được thêm vào đây bằng JS -->
                                                </div>
                                                <button type="button" id="clear_all_bill_master_files" class="kt-btn kt-btn-sm kt-btn-ghost hidden mt-1" onclick="clearBillOfMasterPreview()">Xóa tất cả file mới chọn</button>
                                            </div>
                                        </div>

                                        <!-- Row 7: Note -->
                                        <div class="flex flex-col gap-2" style="padding: 0 10px;">
                                            <label class="kt-form-label text-mono font-semibold text-sm">
                                                Ghi chú
                                            </label>
                                            <textarea name="note" class="kt-textarea" rows="4" placeholder="Nhập ghi chú (nếu có)"><?php echo htmlspecialchars($noteValue); ?></textarea>
                                        </div>

                                        <!-- Row 8: Members Section -->
                                        <div class="border-t border-t-border pt-5" style="padding: 0 10px;">
                                            <h4 class="text-mono font-semibold text-base mb-5">
                                                Thông tin thành viên
                                            </h4>
                                            <div class="grid gap-5" style="margin-top: 5px">
                                                <div class="flex flex-col gap-2">
                                                    <label class="kt-form-label text-mono font-semibold text-sm">
                                                        Thành viên 1
                                                    </label>
                                                    <textarea name="member1" class="kt-textarea" rows="6" placeholder="Mã đơn hàng: 863470&#10;Tên sản phẩm: Nâng Cấp Youtube Premium & YouTube Music 6 Tháng x 1&#10;Email: nhunn9605@gmail.com&#10;Khu vực bạn sống: Việt Nam&#10;Ngày mua: 18:54:15 19/01/2026"><?php
                                                                                                                                                                                                                                                                                                                    $member1Value = $oldData ? ($oldData['member1'] ?? '') : formatMemberForDisplay($family['member1'] ?? '');
                                                                                                                                                                                                                                                                                                                    echo htmlspecialchars($member1Value);
                                                                                                                                                                                                                                                                                                                    ?></textarea>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <label class="kt-form-label text-mono font-semibold text-sm">
                                                        Thành viên 2
                                                    </label>
                                                    <textarea name="member2" class="kt-textarea" rows="6" placeholder="Mã đơn hàng: 863470&#10;Tên sản phẩm: Nâng Cấp Youtube Premium & YouTube Music 6 Tháng x 1&#10;Email: nhunn9605@gmail.com&#10;Khu vực bạn sống: Việt Nam&#10;Ngày mua: 18:54:15 19/01/2026"><?php
                                                                                                                                                                                                                                                                                                                    $member2Value = $oldData ? ($oldData['member2'] ?? '') : formatMemberForDisplay($family['member2'] ?? '');
                                                                                                                                                                                                                                                                                                                    echo htmlspecialchars($member2Value);
                                                                                                                                                                                                                                                                                                                    ?></textarea>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <label class="kt-form-label text-mono font-semibold text-sm">
                                                        Thành viên 3
                                                    </label>
                                                    <textarea name="member3" class="kt-textarea" rows="6" placeholder="Mã đơn hàng: 863470&#10;Tên sản phẩm: Nâng Cấp Youtube Premium & YouTube Music 6 Tháng x 1&#10;Email: nhunn9605@gmail.com&#10;Khu vực bạn sống: Việt Nam&#10;Ngày mua: 18:54:15 19/01/2026"><?php
                                                                                                                                                                                                                                                                                                                    $member3Value = $oldData ? ($oldData['member3'] ?? '') : formatMemberForDisplay($family['member3'] ?? '');
                                                                                                                                                                                                                                                                                                                    echo htmlspecialchars($member3Value);
                                                                                                                                                                                                                                                                                                                    ?></textarea>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <label class="kt-form-label text-mono font-semibold text-sm">
                                                        Thành viên 4
                                                    </label>
                                                    <textarea name="member4" class="kt-textarea" rows="6" placeholder="Mã đơn hàng: 863470&#10;Tên sản phẩm: Nâng Cấp Youtube Premium & YouTube Music 6 Tháng x 1&#10;Email: nhunn9605@gmail.com&#10;Khu vực bạn sống: Việt Nam&#10;Ngày mua: 18:54:15 19/01/2026"><?php
                                                                                                                                                                                                                                                                                                                    $member4Value = $oldData ? ($oldData['member4'] ?? '') : formatMemberForDisplay($family['member4'] ?? '');
                                                                                                                                                                                                                                                                                                                    echo htmlspecialchars($member4Value);
                                                                                                                                                                                                                                                                                                                    ?></textarea>
                                                </div>
                                                <div class="flex flex-col gap-2">
                                                    <label class="kt-form-label text-mono font-semibold text-sm">
                                                        Thành viên 5
                                                    </label>
                                                    <textarea name="member5" class="kt-textarea" rows="6" placeholder="Mã đơn hàng: 863470&#10;Tên sản phẩm: Nâng Cấp Youtube Premium & YouTube Music 6 Tháng x 1&#10;Email: nhunn9605@gmail.com&#10;Khu vực bạn sống: Việt Nam&#10;Ngày mua: 18:54:15 19/01/2026"><?php
                                                                                                                                                                                                                                                                                                                    $member5Value = $oldData ? ($oldData['member5'] ?? '') : formatMemberForDisplay($family['member5'] ?? '');
                                                                                                                                                                                                                                                                                                                    echo htmlspecialchars($member5Value);
                                                                                                                                                                                                                                                                                                                    ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Form Actions -->
                                        <div class="flex items-center justify-end gap-2.5 pt-5 border-t border-t-border" style="padding: 10px 10px;">
                                            <a href="/" class="kt-btn kt-btn-outline">Hủy</a>
                                            <button type="submit" class="kt-btn kt-btn-primary">
                                                Cập nhật Family
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end: form card -->
                    </div>
                </div>
                <!-- End of Container -->
            </main>
            <!-- End of Content -->
        </div>
        <!-- End of Wrapper -->
    </div>
    <!-- End of Main -->
    <div class="kt-modal" data-kt-modal="true" id="search_modal">
        <div class="kt-modal-content max-w-[600px] top-[15%]">
            <div class="kt-modal-header py-4 px-5">
                <i class="ki-filled ki-magnifier text-muted-foreground text-xl">
                </i>
                <input class="kt-input kt-input-ghost" name="query" placeholder="Tap to start search"
                    type="text" value="" />
                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-dim shrink-0"
                    data-kt-modal-dismiss="true">
                    <i class="ki-filled ki-cross">
                    </i>
                </button>
            </div>
            <div class="kt-modal-body p-0 pb-5">
                <div class="kt-tabs kt-tabs-line justify-between px-5 mb-2.5" data-kt-tabs="true">
                    <div class="flex items-center gap-5">
                        <button class="kt-tab-toggle py-5 active"
                            data-kt-tab-toggle="#search_modal_mixed">
                            Mixed
                        </button>
                        <button class="kt-tab-toggle py-5"
                            data-kt-tab-toggle="#search_modal_settings">
                            Settings
                        </button>
                        <button class="kt-tab-toggle py-5"
                            data-kt-tab-toggle="#search_modal_integrations">
                            Integrations
                        </button>
                        <button class="kt-tab-toggle py-5"
                            data-kt-tab-toggle="#search_modal_users">
                            Users
                        </button>
                        <button class="kt-tab-toggle py-5"
                            data-kt-tab-toggle="#search_modal_docs">
                            Docs
                        </button>
                        <button class="kt-tab-toggle py-5"
                            data-kt-tab-toggle="#search_modal_empty">
                            Empty
                        </button>
                        <button class="kt-tab-toggle py-5"
                            data-kt-tab-toggle="#search_modal_no-results">
                            No Results
                        </button>
                    </div>
                    <div class="kt-menu -mt-px" data-kt-menu="true">
                        <div class="kt-menu-item" data-kt-menu-item-offset="0, 10px"
                            data-kt-menu-item-placement="bottom-end"
                            data-kt-menu-item-placement-rtl="bottom-start"
                            data-kt-menu-item-toggle="dropdown"
                            data-kt-menu-item-trigger="click">
                            <button class="kt-menu-toggle kt-btn kt-btn-icon kt-btn-ghost">
                                <i class="ki-filled ki-setting-2">
                                </i>
                            </button>
                            <div class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]"
                                data-kt-menu-dismiss="true">
                                <div class="kt-menu-item">
                                    <a class="kt-menu-link" href="#">
                                        <span class="kt-menu-icon">
                                            <i
                                                class="ki-filled ki-document">
                                            </i>
                                        </span>
                                        <span class="kt-menu-title">
                                            View
                                        </span>
                                    </a>
                                </div>
                                <div class="kt-menu-item"
                                    data-kt-menu-item-offset="-15px, 0"
                                    data-kt-menu-item-placement="right-start"
                                    data-kt-menu-item-toggle="dropdown"
                                    data-kt-menu-item-trigger="click|lg:hover">
                                    <div class="kt-menu-link">
                                        <span class="kt-menu-icon">
                                            <i
                                                class="ki-filled ki-notification-status">
                                            </i>
                                        </span>
                                        <span class="kt-menu-title">
                                            Export
                                        </span>
                                        <span class="kt-menu-arrow">
                                            <i
                                                class="ki-filled ki-right text-xs rtl:transform rtl:rotate-180">
                                            </i>
                                        </span>
                                    </div>
                                    <div
                                        class="kt-menu-dropdown kt-menu-default w-full max-w-[175px]">
                                        <div class="kt-menu-item">
                                            <a class="kt-menu-link"
                                                href="account/home/settings-sidebar.html">
                                                <span
                                                    class="kt-menu-icon">
                                                    <i
                                                        class="ki-filled ki-sms">
                                                    </i>
                                                </span>
                                                <span
                                                    class="kt-menu-title">
                                                    Email
                                                </span>
                                            </a>
                                        </div>
                                        <div class="kt-menu-item">
                                            <a class="kt-menu-link"
                                                href="account/home/settings-sidebar.html">
                                                <span
                                                    class="kt-menu-icon">
                                                    <i
                                                        class="ki-filled ki-message-notify">
                                                    </i>
                                                </span>
                                                <span
                                                    class="kt-menu-title">
                                                    SMS
                                                </span>
                                            </a>
                                        </div>
                                        <div class="kt-menu-item">
                                            <a class="kt-menu-link"
                                                href="account/home/settings-sidebar.html">
                                                <span
                                                    class="kt-menu-icon">
                                                    <i
                                                        class="ki-filled ki-notification-status">
                                                    </i>
                                                </span>
                                                <span
                                                    class="kt-menu-title">
                                                    Push
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-menu-item">
                                    <a class="kt-menu-link" href="#">
                                        <span class="kt-menu-icon">
                                            <i class="ki-filled ki-pencil">
                                            </i>
                                        </span>
                                        <span class="kt-menu-title">
                                            Edit
                                        </span>
                                    </a>
                                </div>
                                <div class="kt-menu-item">
                                    <a class="kt-menu-link" href="#">
                                        <span class="kt-menu-icon">
                                            <i class="ki-filled ki-trash">
                                            </i>
                                        </span>
                                        <span class="kt-menu-title">
                                            Delete
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="kt-scrollable-y-auto" data-kt-scrollable="true"
                    data-kt-scrollable-max-height="auto" data-kt-scrollable-offset="300px">
                    <div class="" id="search_modal_mixed">
                        <div class="flex flex-col gap-2.5">
                            <div>
                                <div
                                    class="text-xs text-secondary-foreground font-medium pt-2.5 pb-1.5 ps-5">
                                    Settings
                                </div>
                                <div class="kt-menu kt-menu-default px-0.5 flex-col">
                                    <div class="kt-menu-item">
                                        <a class="kt-menu-link" href="#">
                                            <span class="kt-menu-icon">
                                                <i
                                                    class="ki-filled ki-badge">
                                                </i>
                                            </span>
                                            <span class="kt-menu-title">
                                                Public Profile
                                            </span>
                                        </a>
                                    </div>
                                    <div class="kt-menu-item">
                                        <a class="kt-menu-link" href="#">
                                            <span class="kt-menu-icon">
                                                <i
                                                    class="ki-filled ki-setting-2">
                                                </i>
                                            </span>
                                            <span class="kt-menu-title">
                                                My Account
                                            </span>
                                        </a>
                                    </div>
                                    <div class="kt-menu-item">
                                        <a class="kt-menu-link" href="#">
                                            <span class="kt-menu-icon">
                                                <i
                                                    class="ki-filled ki-message-programming">
                                                </i>
                                            </span>
                                            <span class="kt-menu-title">
                                                Devs Forum
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-b-border">
                            </div>
                            <div>
                                <div
                                    class="text-xs text-secondary-foreground font-medium pt-2.5 pb-1.5 ps-5">
                                    Integrations
                                </div>
                                <div class="kt-menu kt-menu-default px-0.5 flex-col">
                                    <div class="kt-menu-item">
                                        <div
                                            class="kt-menu-link flex items-center jistify-between gap-2">
                                            <div
                                                class="flex items-center grow gap-2">
                                                <div
                                                    class="flex items-center justify-center size-10 shrink-0 rounded-full border border-border bg-accent/60">
                                                    <img alt=""
                                                        class="size-6 shrink-0"
                                                        src="https://keenthemes.com/metronic/tailwind/dist/assets/media/brand-logos/jira.svg" />
                                                </div>
                                                <div
                                                    class="flex flex-col gap-0.5">
                                                    <a class="text-sm font-semibold text-mono hover:text-primary"
                                                        href="#">
                                                        Jira
                                                    </a>
                                                    <span
                                                        class="text-xs font-medium text-secondary-foreground">
                                                        Project
                                                        management
                                                    </span>
                                                </div>
                                            </div>
                                            <div
                                                class="flex justify-end shrink-0">
                                                <div
                                                    class="flex -space-x-2">
                                                    <div
                                                        class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="../dist/assets/media/avatars/300-4.png" />
                                                    </div>
                                                    <div
                                                        class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="../dist/assets/media/avatars/300-1.png" />
                                                    </div>
                                                    <div
                                                        class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="../dist/assets/media/avatars/300-2.png" />
                                                    </div>
                                                    <div
                                                        class="flex">
                                                        <span
                                                            class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white size-6 ring-background bg-green-500">
                                                            +3
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-menu-item">
                                        <div
                                            class="kt-menu-link flex items-center jistify-between gap-2">
                                            <div
                                                class="flex items-center grow gap-2">
                                                <div
                                                    class="flex items-center justify-center size-10 shrink-0 rounded-full border border-border bg-accent/60">
                                                    <img alt=""
                                                        class="size-6 shrink-0"
                                                        src="https://keenthemes.com/metronic/tailwind/dist/assets/media/brand-logos/inferno.svg" />
                                                </div>
                                                <div
                                                    class="flex flex-col gap-0.5">
                                                    <a class="text-sm font-semibold text-mono hover:text-primary"
                                                        href="#">
                                                        Inferno
                                                    </a>
                                                    <span
                                                        class="text-xs font-medium text-secondary-foreground">
                                                        Real-time
                                                        photo
                                                        sharing
                                                        app
                                                    </span>
                                                </div>
                                            </div>
                                            <div
                                                class="flex justify-end shrink-0">
                                                <div
                                                    class="flex -space-x-2">
                                                    <div
                                                        class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="../dist/assets/media/avatars/300-14.png" />
                                                    </div>
                                                    <div
                                                        class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="../dist/assets/media/avatars/300-12.png" />
                                                    </div>
                                                    <div
                                                        class="flex">
                                                        <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                            src="../dist/assets/media/avatars/300-9.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-b border-b-border">
                            </div>
                            <div>
                                <div
                                    class="text-xs text-secondary-foreground font-medium pt-2.5 pb-1.5 ps-5">
                                    Users
                                </div>
                                <div class="kt-menu kt-menu-default px-0.5 flex-col">
                                    <div class="grid gap-1">
                                        <div class="kt-menu-item">
                                            <div
                                                class="kt-menu-link flex justify-between gap-2">
                                                <div
                                                    class="flex items-center gap-2.5">
                                                    <img alt=""
                                                        class="rounded-full size-9 shrink-0"
                                                        src="../dist/assets/media/avatars/300-3.png" />
                                                    <div
                                                        class="flex flex-col">
                                                        <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                                            href="#">
                                                            Tyler
                                                            Hero
                                                        </a>
                                                        <span
                                                            class="text-2sm font-normal text-muted-foreground">
                                                            tyler.hero@gmail.com
                                                            connections
                                                        </span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2.5">
                                                    <div
                                                        class="kt-badge rounded-full kt-badge-outline kt-badge-success gap-1.5">
                                                        <span
                                                            class="kt-badge-dot">
                                                        </span>
                                                        In
                                                        Office
                                                    </div>
                                                    <button
                                                        class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                                        <i
                                                            class="ki-filled ki-dots-vertical text-lg">
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-menu-item">
                                            <div
                                                class="kt-menu-link flex justify-between gap-2">
                                                <div
                                                    class="flex items-center gap-2.5">
                                                    <img alt=""
                                                        class="rounded-full size-9 shrink-0"
                                                        src="../dist/assets/media/avatars/300-1.png" />
                                                    <div
                                                        class="flex flex-col">
                                                        <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                                            href="#">
                                                            Esther
                                                            Howard
                                                        </a>
                                                        <span
                                                            class="text-2sm font-normal text-muted-foreground">
                                                            esther.howard@gmail.com
                                                            connections
                                                        </span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex items-center gap-2.5">
                                                    <div
                                                        class="kt-badge rounded-full kt-badge-outline kt-badge-destructive gap-1.5">
                                                        <span
                                                            class="kt-badge-dot">
                                                        </span>
                                                        On Leave
                                                    </div>
                                                    <button
                                                        class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                                        <i
                                                            class="ki-filled ki-dots-vertical text-lg">
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="search_modal_settings">
                        <div class="kt-menu kt-menu-default px-0.5 flex-col">
                            <div
                                class="text-xs text-secondary-foreground font-medium pt-2.5 ps-5 pb-1.5">
                                Shortcuts
                            </div>
                            <div class="kt-menu-item">
                                <a class="kt-menu-link" href="#">
                                    <span class="kt-menu-icon">
                                        <i class="ki-filled ki-home-2">
                                        </i>
                                    </span>
                                    <span class="kt-menu-title">
                                        Go to Dashboard
                                    </span>
                                </a>
                            </div>
                            <div class="kt-menu-item">
                                <a class="kt-menu-link" href="#">
                                    <span class="kt-menu-icon">
                                        <i class="ki-filled ki-badge">
                                        </i>
                                    </span>
                                    <span class="kt-menu-title">
                                        Public Profile
                                    </span>
                                </a>
                            </div>
                            <div class="kt-menu-item">
                                <a class="kt-menu-link" href="#">
                                    <span class="kt-menu-icon">
                                        <i class="ki-filled ki-profile-circle">
                                        </i>
                                    </span>
                                    <span class="kt-menu-title">
                                        My Profile
                                    </span>
                                </a>
                            </div>
                            <div class="kt-menu-item">
                                <a class="kt-menu-link" href="#">
                                    <span class="kt-menu-icon">
                                        <i class="ki-filled ki-setting-2">
                                        </i>
                                    </span>
                                    <span class="kt-menu-title">
                                        My Account
                                    </span>
                                </a>
                            </div>
                            <div class="kt-menu-item">
                                <a class="kt-menu-link" href="#">
                                    <span class="kt-menu-icon">
                                        <i
                                            class="ki-filled ki-message-programming">
                                        </i>
                                    </span>
                                    <span class="kt-menu-title">
                                        Devs Forum
                                    </span>
                                </a>
                            </div>
                            <div
                                class="text-xs text-secondary-foreground font-medium pt-2.5 ps-5 pt-2.5 pb-1.5">
                                Actions
                            </div>
                            <div class="kt-menu-item">
                                <a class="kt-menu-link" href="#">
                                    <span class="kt-menu-icon">
                                        <i class="ki-filled ki-user">
                                        </i>
                                    </span>
                                    <span class="kt-menu-title">
                                        Create User
                                    </span>
                                </a>
                            </div>
                            <div class="kt-menu-item">
                                <a class="kt-menu-link" href="#">
                                    <span class="kt-menu-icon">
                                        <i class="ki-filled ki-user-edit">
                                        </i>
                                    </span>
                                    <span class="kt-menu-title">
                                        Create Team
                                    </span>
                                </a>
                            </div>
                            <div class="kt-menu-item">
                                <a class="kt-menu-link" href="#">
                                    <span class="kt-menu-icon">
                                        <i class="ki-filled ki-subtitle">
                                        </i>
                                    </span>
                                    <span class="kt-menu-title">
                                        Change Plan
                                    </span>
                                </a>
                            </div>
                            <div class="kt-menu-item">
                                <a class="kt-menu-link" href="#">
                                    <span class="kt-menu-icon">
                                        <i class="ki-filled ki-setting">
                                        </i>
                                    </span>
                                    <span class="kt-menu-title">
                                        Setup Branding
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="search_modal_integrations">
                        <div class="kt-menu kt-menu-default px-0.5 flex-col">
                            <div class="kt-menu-item">
                                <div
                                    class="kt-menu-link flex items-center jistify-between gap-2">
                                    <div class="flex items-center grow gap-2">
                                        <div
                                            class="flex items-center justify-center size-10 shrink-0 rounded-full border border-border bg-accent/60">
                                            <img alt=""
                                                class="size-6 shrink-0"
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/brand-logos/jira.svg" />
                                        </div>
                                        <div class="flex flex-col gap-0.5">
                                            <a class="text-sm font-semibold text-mono hover:text-primary"
                                                href="#">
                                                Jira
                                            </a>
                                            <span
                                                class="text-xs font-medium text-secondary-foreground">
                                                Project management
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex justify-end shrink-0">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-4.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-1.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-2.png" />
                                            </div>
                                            <div class="flex">
                                                <span
                                                    class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-2xs size-6 text-white size-6 ring-background bg-green-500">
                                                    +3
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-menu-item">
                                <div
                                    class="kt-menu-link flex items-center jistify-between gap-2">
                                    <div class="flex items-center grow gap-2">
                                        <div
                                            class="flex items-center justify-center size-10 shrink-0 rounded-full border border-border bg-accent/60">
                                            <img alt=""
                                                class="size-6 shrink-0"
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/brand-logos/inferno.svg" />
                                        </div>
                                        <div class="flex flex-col gap-0.5">
                                            <a class="text-sm font-semibold text-mono hover:text-primary"
                                                href="#">
                                                Inferno
                                            </a>
                                            <span
                                                class="text-xs font-medium text-secondary-foreground">
                                                Real-time photo sharing
                                                app
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex justify-end shrink-0">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-14.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-12.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-9.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-menu-item">
                                <div
                                    class="kt-menu-link flex items-center jistify-between gap-2">
                                    <div class="flex items-center grow gap-2">
                                        <div
                                            class="flex items-center justify-center size-10 shrink-0 rounded-full border border-border bg-accent/60">
                                            <img alt=""
                                                class="size-6 shrink-0"
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/brand-logos/evernote.svg" />
                                        </div>
                                        <div class="flex flex-col gap-0.5">
                                            <a class="text-sm font-semibold text-mono hover:text-primary"
                                                href="#">
                                                Evernote
                                            </a>
                                            <span
                                                class="text-xs font-medium text-secondary-foreground">
                                                Notes management app
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex justify-end shrink-0">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-6.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-3.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-1.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-8.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-menu-item">
                                <div
                                    class="kt-menu-link flex items-center jistify-between gap-2">
                                    <div class="flex items-center grow gap-2">
                                        <div
                                            class="flex items-center justify-center size-10 shrink-0 rounded-full border border-border bg-accent/60">
                                            <img alt=""
                                                class="size-6 shrink-0"
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/brand-logos/gitlab.svg" />
                                        </div>
                                        <div class="flex flex-col gap-0.5">
                                            <a class="text-sm font-semibold text-mono hover:text-primary"
                                                href="#">
                                                Gitlab
                                            </a>
                                            <span
                                                class="text-xs font-medium text-secondary-foreground">
                                                Notes management app
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex justify-end shrink-0">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-18.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-17.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-menu-item">
                                <div
                                    class="kt-menu-link flex items-center jistify-between gap-2">
                                    <div class="flex items-center grow gap-2">
                                        <div
                                            class="flex items-center justify-center size-10 shrink-0 rounded-full border border-border bg-accent/60">
                                            <img alt=""
                                                class="size-6 shrink-0"
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/brand-logos/google-webdev.svg" />
                                        </div>
                                        <div class="flex flex-col gap-0.5">
                                            <a class="text-sm font-semibold text-mono hover:text-primary"
                                                href="#">
                                                Google webdev
                                            </a>
                                            <span
                                                class="text-xs font-medium text-secondary-foreground">
                                                Building web expierences
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex justify-end shrink-0">
                                        <div class="flex -space-x-2">
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-14.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-20.png" />
                                            </div>
                                            <div class="flex">
                                                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-background size-6"
                                                    src="../dist/assets/media/avatars/300-21.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-menu-item px-4 pt-2">
                                <a class="kt-btn kt-btn-outline justify-center"
                                    href="#">
                                    Go to Apps
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="search_modal_users">
                        <div class="kt-menu kt-menu-default px-0.5 flex-col">
                            <div class="grid gap-1">
                                <div class="kt-menu-item">
                                    <div
                                        class="kt-menu-link flex justify-between gap-2">
                                        <div class="flex items-center gap-2.5">
                                            <img alt=""
                                                class="rounded-full size-9 shrink-0"
                                                src="../dist/assets/media/avatars/300-3.png" />
                                            <div class="flex flex-col">
                                                <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                                    href="#">
                                                    Tyler Hero
                                                </a>
                                                <span
                                                    class="text-2sm font-normal text-muted-foreground">
                                                    tyler.hero@gmail.com
                                                    connections
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2.5">
                                            <div
                                                class="kt-badge rounded-full kt-badge-outline kt-badge-success gap-1.5">
                                                <span
                                                    class="kt-badge-dot">
                                                </span>
                                                In Office
                                            </div>
                                            <button
                                                class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                                <i
                                                    class="ki-filled ki-dots-vertical text-lg">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-menu-item">
                                    <div
                                        class="kt-menu-link flex justify-between gap-2">
                                        <div class="flex items-center gap-2.5">
                                            <img alt=""
                                                class="rounded-full size-9 shrink-0"
                                                src="../dist/assets/media/avatars/300-1.png" />
                                            <div class="flex flex-col">
                                                <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                                    href="#">
                                                    Esther Howard
                                                </a>
                                                <span
                                                    class="text-2sm font-normal text-muted-foreground">
                                                    esther.howard@gmail.com
                                                    connections
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2.5">
                                            <div
                                                class="kt-badge rounded-full kt-badge-outline kt-badge-destructive gap-1.5">
                                                <span
                                                    class="kt-badge-dot">
                                                </span>
                                                On Leave
                                            </div>
                                            <button
                                                class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                                <i
                                                    class="ki-filled ki-dots-vertical text-lg">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-menu-item">
                                    <div
                                        class="kt-menu-link flex justify-between gap-2">
                                        <div class="flex items-center gap-2.5">
                                            <img alt=""
                                                class="rounded-full size-9 shrink-0"
                                                src="../dist/assets/media/avatars/300-11.png" />
                                            <div class="flex flex-col">
                                                <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                                    href="#">
                                                    Jacob Jones
                                                </a>
                                                <span
                                                    class="text-2sm font-normal text-muted-foreground">
                                                    jacob.jones@gmail.com
                                                    connections
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2.5">
                                            <div
                                                class="kt-badge rounded-full kt-badge-outline kt-badge-primary gap-1.5">
                                                <span
                                                    class="kt-badge-dot">
                                                </span>
                                                Remote
                                            </div>
                                            <button
                                                class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                                <i
                                                    class="ki-filled ki-dots-vertical text-lg">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-menu-item">
                                    <div
                                        class="kt-menu-link flex justify-between gap-2">
                                        <div class="flex items-center gap-2.5">
                                            <img alt=""
                                                class="rounded-full size-9 shrink-0"
                                                src="../dist/assets/media/avatars/300-5.png" />
                                            <div class="flex flex-col">
                                                <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                                    href="#">
                                                    TLeslie
                                                    Alexander
                                                </a>
                                                <span
                                                    class="text-2sm font-normal text-muted-foreground">
                                                    leslie.alexander@gmail.com
                                                    connections
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2.5">
                                            <div
                                                class="kt-badge rounded-full kt-badge-outline kt-badge-success gap-1.5">
                                                <span
                                                    class="kt-badge-dot">
                                                </span>
                                                In Office
                                            </div>
                                            <button
                                                class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                                <i
                                                    class="ki-filled ki-dots-vertical text-lg">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-menu-item">
                                    <div
                                        class="kt-menu-link flex justify-between gap-2">
                                        <div class="flex items-center gap-2.5">
                                            <img alt=""
                                                class="rounded-full size-9 shrink-0"
                                                src="../dist/assets/media/avatars/300-2.png" />
                                            <div class="flex flex-col">
                                                <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                                    href="#">
                                                    Cody Fisher
                                                </a>
                                                <span
                                                    class="text-2sm font-normal text-muted-foreground">
                                                    cody.fisher@gmail.com
                                                    connections
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-2.5">
                                            <div
                                                class="kt-badge rounded-full kt-badge-outline kt-badge-primary gap-1.5">
                                                <span
                                                    class="kt-badge-dot">
                                                </span>
                                                Remote
                                            </div>
                                            <button
                                                class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                                <i
                                                    class="ki-filled ki-dots-vertical text-lg">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-menu-item px-4 pt-2">
                                    <a class="kt-btn kt-btn-outline justify-center"
                                        href="#">
                                        Go to Users
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="search_modal_docs">
                        <div class="kt-menu kt-menu-default px-0.5 flex-col">
                            <div class="grid">
                                <div class="kt-menu-item">
                                    <div class="kt-menu-link flex items-center">
                                        <div
                                            class="flex items-center grow gap-2.5">
                                            <img
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/file-types/pdf.svg" />
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-mono cursor-pointer hover:text-primary mb-px">
                                                    Project-pitch.pdf
                                                </span>
                                                <span
                                                    class="text-xs font-medium text-muted-foreground">
                                                    4.7 MB 26 Sep
                                                    2024 3:20 PM
                                                </span>
                                            </div>
                                        </div>
                                        <button
                                            class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                            <i
                                                class="ki-filled ki-dots-vertical text-lg">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="kt-menu-item">
                                    <div class="kt-menu-link flex items-center">
                                        <div
                                            class="flex items-center grow gap-2.5">
                                            <img
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/file-types/doc.svg" />
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-mono cursor-pointer hover:text-primary mb-px">
                                                    Report-v1.docx
                                                </span>
                                                <span
                                                    class="text-xs font-medium text-muted-foreground">
                                                    2.3 MB 1 Oct
                                                    2024 12:00 PM
                                                </span>
                                            </div>
                                        </div>
                                        <button
                                            class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                            <i
                                                class="ki-filled ki-dots-vertical text-lg">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="kt-menu-item">
                                    <div class="kt-menu-link flex items-center">
                                        <div
                                            class="flex items-center grow gap-2.5">
                                            <img
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/file-types/javascript.svg" />
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-mono cursor-pointer hover:text-primary mb-px">
                                                    Framework-App.js
                                                </span>
                                                <span
                                                    class="text-xs font-medium text-muted-foreground">
                                                    0.8 MB 17 Oct
                                                    2024 6:46 PM
                                                </span>
                                            </div>
                                        </div>
                                        <button
                                            class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                            <i
                                                class="ki-filled ki-dots-vertical text-lg">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="kt-menu-item">
                                    <div class="kt-menu-link flex items-center">
                                        <div
                                            class="flex items-center grow gap-2.5">
                                            <img
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/file-types/ai.svg" />
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-mono cursor-pointer hover:text-primary mb-px">
                                                    Framework-App.js
                                                </span>
                                                <span
                                                    class="text-xs font-medium text-muted-foreground">
                                                    0.8 MB 17 Oct
                                                    2024 6:46 PM
                                                </span>
                                            </div>
                                        </div>
                                        <button
                                            class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                            <i
                                                class="ki-filled ki-dots-vertical text-lg">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="kt-menu-item">
                                    <div class="kt-menu-link flex items-center">
                                        <div
                                            class="flex items-center grow gap-2.5">
                                            <img
                                                src="https://keenthemes.com/metronic/tailwind/dist/assets/media/file-types/php.svg" />
                                            <div class="flex flex-col">
                                                <span
                                                    class="text-sm font-semibold text-mono cursor-pointer hover:text-primary mb-px">
                                                    appController.js
                                                </span>
                                                <span
                                                    class="text-xs font-medium text-muted-foreground">
                                                    0.1 MB 21 Nov
                                                    2024 3:20 PM
                                                </span>
                                            </div>
                                        </div>
                                        <button
                                            class="kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm">
                                            <i
                                                class="ki-filled ki-dots-vertical text-lg">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                                <div class="kt-menu-item px-4 pt-2.5">
                                    <a class="kt-btn kt-btn-outline justify-center"
                                        href="#">
                                        Go to Users
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="search_modal_empty">
                        <div class="flex flex-col text-center py-9 gap-5">
                            <div class="flex justify-center">
                                <img alt="image" class="dark:hidden max-h-[113px]"
                                    src="https://keenthemes.com/metronic/tailwind/dist/assets/media/illustrations/33.svg" />
                                <img alt="image" class="light:hidden max-h-[113px]"
                                    src="https://keenthemes.com/metronic/tailwind/dist/assets/media/illustrations/33-dark.svg" />
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <h3
                                    class="text-base font-semibold text-mono text-center">
                                    Looking for something..
                                </h3>
                                <span
                                    class="text-sm font-medium text-center text-secondary-foreground">
                                    Initiate your digital experience with
                                    <br />
                                    our intuitive dashboard
                                </span>
                            </div>
                            <div class="flex justify-center">
                                <a class="kt-btn kt-btn-outline flex justify-center"
                                    href="#">
                                    View Projects
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden" id="search_modal_no-results">
                        <div class="flex flex-col text-center py-9 gap-5">
                            <div class="flex justify-center">
                                <img alt="image" class="dark:hidden max-h-[113px]"
                                    src="https://keenthemes.com/metronic/tailwind/dist/assets/media/illustrations/33.svg" />
                                <img alt="image" class="light:hidden max-h-[113px]"
                                    src="https://keenthemes.com/metronic/tailwind/dist/assets/media/illustrations/33-dark.svg" />
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <h3
                                    class="text-base font-semibold text-mono text-center">
                                    No Results Found
                                </h3>
                                <span
                                    class="text-sm font-medium text-center text-secondary-foreground">
                                    Refine your query to discover relevant items
                                </span>
                            </div>
                            <div class="flex justify-center">
                                <a class="kt-btn kt-btn-outline flex justify-center"
                                    href="#">
                                    View Projects
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Share Profile Modal -->
    <div class="kt-modal" data-kt-modal="true" id="share_profile_modal">
        <div class="kt-modal-content max-w-[500px] top-5 lg:top-[15%]">
            <div class="kt-modal-header">
                <h3 class="kt-modal-title">
                    Share Profile
                </h3>
                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost shrink-0"
                    data-kt-modal-dismiss="true">
                    <i class="ki-filled ki-cross">
                    </i>
                </button>
            </div>
            <div class="kt-modal-body grid gap-5 px-0 py-5">
                <div class="flex flex-col px-5 gap-2.5">
                    <div class="flex flex-center gap-1">
                        <label class="text-mono font-semibold text-sm">
                            Share read-only link
                        </label>
                        <i class="ki-filled ki-information-2 text-muted-foreground text-sm">
                        </i>
                    </div>
                    <label class="kt-input">
                        <input type="text" value="https://metronic.com/profiles/x7g2vA3kZ5" />
                        <button class="kt-btn kt-btn-icon kt-btn-sm kt-btn-ghost -me-2">
                            <i class="ki-filled ki-copy">
                            </i>
                        </button>
                    </label>
                </div>
                <div class="border-b border-b-border">
                </div>
                <div class="flex flex-col px-5 gap-2.5">
                    <div class="flex flex-center gap-1">
                        <label class="text-mono font-semibold text-sm">
                            Share via email
                        </label>
                        <i class="ki-filled ki-information-2 text-muted-foreground text-sm">
                        </i>
                    </div>
                    <div class="flex flex-center gap-2.5">
                        <label class="kt-input">
                            <input type="text" value="miles.turner@gmail.com" />
                        </label>
                        <button class="kt-btn kt-btn-primary">
                            Share
                        </button>
                    </div>
                </div>
                <div class="kt-scrollable-y-auto max-h-[300px]">
                    <div class="flex flex-col px-5 gap-3">
                        <div class="flex items-center flex-wrap gap-2">
                            <div class="flex items-center grow gap-2.5">
                                <img alt="" class="rounded-full size-9 shrink-0"
                                    src="../dist/assets/media/avatars/300-3.png" />
                                <div class="flex flex-col">
                                    <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                        href="#">
                                        Tyler Hero
                                    </a>
                                    <a class="hover:text-primary text-2sm text-secondary-foreground"
                                        href="#">
                                        tyler.hero@gmail.com
                                    </a>
                                </div>
                            </div>
                            <select class="kt-select max-w-24" data-kt-select="true">
                                <option selected="">
                                    Owner
                                </option>
                                <option>
                                    Editor
                                </option>
                                <option>
                                    Viewer
                                </option>
                            </select>
                        </div>
                        <div class="flex items-center flex-wrap gap-2">
                            <div class="flex items-center grow gap-2.5">
                                <img alt="" class="rounded-full size-9 shrink-0"
                                    src="../dist/assets/media/avatars/300-1.png" />
                                <div class="flex flex-col">
                                    <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                        href="#">
                                        Esther Howard
                                    </a>
                                    <a class="hover:text-primary text-2sm text-secondary-foreground"
                                        href="#">
                                        esther.howard@gmail.com
                                    </a>
                                </div>
                            </div>
                            <select class="kt-select max-w-24" data-kt-select="true">
                                <option>
                                    Owner
                                </option>
                                <option selected="">
                                    Editor
                                </option>
                                <option>
                                    Viewer
                                </option>
                            </select>
                        </div>
                        <div class="flex items-center flex-wrap gap-2">
                            <div class="flex items-center grow gap-2.5">
                                <img alt="" class="rounded-full size-9 shrink-0"
                                    src="../dist/assets/media/avatars/300-11.png" />
                                <div class="flex flex-col">
                                    <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                        href="#">
                                        Jacob Jones
                                    </a>
                                    <a class="hover:text-primary text-2sm text-secondary-foreground"
                                        href="#">
                                        jacob.jones@gmail.com
                                    </a>
                                </div>
                            </div>
                            <select class="kt-select max-w-24" data-kt-select="true">
                                <option>
                                    Owner
                                </option>
                                <option>
                                    Editor
                                </option>
                                <option selected="">
                                    Viewer
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-b border-b-border">
                </div>
                <div class="flex flex-col px-5 gap-4">
                    <label class="text-mono font-semibold text-sm">
                        Settings
                    </label>
                    <div class="flex flex-center justify-between flex-wrap gap-2">
                        <div class="flex flex-center gap-1.5">
                            <i class="ki-filled ki-user text-muted-foreground">
                            </i>
                            <div
                                class="flex flex-center text-secondary-foreground font-medium text-xs">
                                Anyone at
                                <a class="text-xs font-medium link mx-1" href="#">
                                    KeenThemes
                                </a>
                                can view
                            </div>
                        </div>
                        <button class="kt-link kt-link-sm kt-link-underlined kt-link-dashed">
                            Change Access
                        </button>
                    </div>
                    <div class="flex flex-center justify-between flex-wrap gap-2 mb-2.5">
                        <div class="flex flex-center gap-1.5">
                            <i class="ki-filled ki-icon text-muted-foreground">
                            </i>
                            <div
                                class="flex flex-center text-secondary-foreground font-medium text-xs">
                                Anyone with link can edit
                            </div>
                        </div>
                        <button class="kt-link kt-link-sm kt-link-underlined kt-link-dashed">
                            Set Password
                        </button>
                    </div>
                    <button class="kt-btn kt-btn-primary justify-center">
                        Done
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Share Profile Modal -->
    <div class="kt-modal" data-kt-modal="true" id="give_award_modal">
        <div class="kt-modal-content max-w-[500px] top-[15%]">
            <div class="kt-modal-header pr-2.5">
                <h3 class="kt-modal-title">
                    Give Award
                </h3>
                <button class="kt-btn kt-btn-icon kt-btn-ghost shrink-0" data-kt-modal-dismiss="true">
                    <i class="ki-filled ki-black-left">
                    </i>
                </button>
            </div>
            <div class="kt-modal-body grid gap-5 px-0 py-5">
                <div class="flex flex-col px-5 gap-2.5">
                    <div class="flex flex-center gap-1">
                        <label class="text-mono font-semibold text-sm">
                            Share read-only link
                        </label>
                        <i class="ki-filled ki-information-2 text-muted-foreground text-sm">
                        </i>
                    </div>
                    <label class="kt-input">
                        <input type="text" value="https://metronic.com/profiles/x7g2vA3kZ5" />
                        <button class="kt-btn kt-btn-icon kt-btn-sm kt-btn-ghost -me-2">
                            <i class="ki-filled ki-copy">
                            </i>
                        </button>
                    </label>
                </div>
                <div class="border-b border-b-border">
                </div>
                <div class="flex flex-col px-5 gap-2.5">
                    <div class="flex flex-center gap-1">
                        <label class="text-mono font-semibold text-sm">
                            Share via email
                        </label>
                        <i class="ki-filled ki-information-2 text-muted-foreground text-sm">
                        </i>
                    </div>
                    <div class="flex flex-center gap-2.5">
                        <label class="kt-input">
                            <input type="text" value="miles.turner@gmail.com" />
                        </label>
                        <button class="kt-btn kt-btn-primary">
                            Share
                        </button>
                    </div>
                </div>
                <div class="kt-scrollable-y-auto max-h-[300px]">
                    <div class="flex flex-col px-5 gap-3">
                        <div class="flex items-center flex-wrap gap-2">
                            <div class="flex items-center grow gap-2.5">
                                <img alt="" class="rounded-full size-9 shrink-0"
                                    src="../dist/assets/media/avatars/300-3.png" />
                                <div class="flex flex-col">
                                    <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                        href="#">
                                        Tyler Hero
                                    </a>
                                    <a class="hover:text-primary text-2sm text-secondary-foreground"
                                        href="#">
                                        tyler.hero@gmail.com
                                    </a>
                                </div>
                            </div>
                            <select class="kt-select max-w-24" data-kt-select="true">
                                <option selected="">
                                    Owner
                                </option>
                                <option>
                                    Editor
                                </option>
                                <option>
                                    Viewer
                                </option>
                            </select>
                        </div>
                        <div class="flex items-center flex-wrap gap-2">
                            <div class="flex items-center grow gap-2.5">
                                <img alt="" class="rounded-full size-9 shrink-0"
                                    src="../dist/assets/media/avatars/300-1.png" />
                                <div class="flex flex-col">
                                    <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                        href="#">
                                        Esther Howard
                                    </a>
                                    <a class="hover:text-primary text-2sm text-secondary-foreground"
                                        href="#">
                                        esther.howard@gmail.com
                                    </a>
                                </div>
                            </div>
                            <select class="kt-select max-w-24" data-kt-select="true">
                                <option>
                                    Owner
                                </option>
                                <option selected="">
                                    Editor
                                </option>
                                <option>
                                    Viewer
                                </option>
                            </select>
                        </div>
                        <div class="flex items-center flex-wrap gap-2">
                            <div class="flex items-center grow gap-2.5">
                                <img alt="" class="rounded-full size-9 shrink-0"
                                    src="../dist/assets/media/avatars/300-11.png" />
                                <div class="flex flex-col">
                                    <a class="text-sm font-semibold text-mono hover:text-primary mb-px"
                                        href="#">
                                        Jacob Jones
                                    </a>
                                    <a class="hover:text-primary text-2sm text-secondary-foreground"
                                        href="#">
                                        jacob.jones@gmail.com
                                    </a>
                                </div>
                            </div>
                            <select class="kt-select max-w-24" data-kt-select="true">
                                <option>
                                    Owner
                                </option>
                                <option>
                                    Editor
                                </option>
                                <option selected="">
                                    Viewer
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-b border-b-border">
                </div>
                <div class="flex flex-col px-5 gap-4">
                    <label class="text-mono font-semibold text-sm">
                        Settings
                    </label>
                    <div class="flex flex-center justify-between flex-wrap gap-2">
                        <div class="flex flex-center gap-1.5">
                            <i class="ki-filled ki-user text-muted-foreground">
                            </i>
                            <div
                                class="flex flex-center text-secondary-foreground font-medium text-xs">
                                Anyone at
                                <a class="text-xs font-medium link mx-1" href="#">
                                    KeenThemes
                                </a>
                                can view
                            </div>
                        </div>
                        <button class="kt-link kt-link-sm kt-link-underlined kt-link-dashed">
                            Change Access
                        </button>
                    </div>
                    <div class="flex flex-center justify-between flex-wrap gap-2 mb-2.5">
                        <div class="flex flex-center gap-1.5">
                            <i class="ki-filled ki-icon text-muted-foreground">
                            </i>
                            <div
                                class="flex flex-center text-secondary-foreground font-medium text-xs">
                                Anyone with link can edit
                            </div>
                        </div>
                        <button class="kt-link kt-link-sm kt-link-underlined kt-link-dashed">
                            Set Password
                        </button>
                    </div>
                    <button class="kt-btn kt-btn-primary justify-center">
                        Done
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-modal" data-kt-modal="true" id="report_user_modal">
        <div class="kt-modal-content max-w-[500px] top-[15%]">
            <div class="kt-modal-header">
                <h3 class="kt-modal-title">
                    Report User
                </h3>
                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost shrink-0"
                    data-kt-modal-dismiss="true">
                    <i class="ki-filled ki-cross">
                    </i>
                </button>
            </div>
            <div class="kt-modal-body p-0">
                <div class="p-5">
                    <div class="grid place-items-center gap-1">
                        <div class="flex justify-center items-center rounded-full">
                            <img class="rounded-full max-h-[55px] max-w-full"
                                src="../dist/assets/media/avatars/300-1.png" />
                        </div>
                        <div class="flex items-center justify-center gap-1">
                            <a class="hover:text-primary text-sm leading-5 font-semibold text-mono"
                                href="#">
                                Jenny Klabber
                            </a>
                            <svg class="text-primary" fill="none" height="13"
                                viewbox="0 0 15 16" width="13"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z"
                                    fill="currentColor">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="border-b border-b-border">
                </div>
                <div class="flex flex-col gap-5 p-5">
                    <div class="text-sm text-mono font-semibold">
                        Let us know why you’re reporing this person
                    </div>
                    <div class="flex flex-col gap-3.5">
                        <label class="kt-form-label flex items-center gap-2.5">
                            <input checked="" class="kt-radio radio-sm" name="report-option"
                                type="radio" value="1" />
                            <div class="flex flex-col gap-0.5">
                                <div class="text-sm font-semibold text-mono">
                                    Impersonation
                                </div>
                                <div
                                    class="text-sm font-medium text-secondary-foreground">
                                    It looks like this profile might be
                                    impersonating someone else
                                </div>
                            </div>
                        </label>
                        <label class="kt-form-label flex items-center gap-2.5">
                            <input checked="" class="kt-radio radio-sm" name="report-option"
                                type="radio" value="2" />
                            <div class="flex flex-col gap-0.5">
                                <div class="text-sm font-semibold text-mono">
                                    Spammy
                                </div>
                                <div
                                    class="text-sm font-medium text-secondary-foreground">
                                    This person profile, comments or posts contain
                                    misleading text
                                </div>
                            </div>
                        </label>
                        <label class="kt-form-label flex items-center gap-2.5">
                            <input checked="" class="kt-radio radio-sm" name="report-option"
                                type="radio" value="3" />
                            <div class="flex flex-col gap-0.5">
                                <div class="text-sm font-semibold text-mono">
                                    Off bumble behavior
                                </div>
                                <div
                                    class="text-sm font-medium text-secondary-foreground">
                                    This person has engaged in behavior that is
                                    abusive, bullying
                                </div>
                            </div>
                        </label>
                        <label class="kt-form-label flex items-center gap-2.5">
                            <input checked="" class="kt-radio radio-sm" name="report-option"
                                type="radio" value="4" />
                            <div class="flex flex-col gap-0.5">
                                <div class="text-sm font-semibold text-mono">
                                    Something else
                                </div>
                                <div
                                    class="text-sm font-medium text-secondary-foreground">
                                    None of the reasons listed above are suitable
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="border-b border-b-border">
                </div>
                <div class="text-2sm font-medium text-center text-foreground p-5">
                    Don't worry, your report is completely anonymous; the person you're
                    <br />
                    reporting will not be informed that you've submitted it
                </div>
                <div class="border-b border-b-border">
                </div>
                <div class="flex items-center gap-2.5 justify-end p-5" id="report_user_modal">
                    <button class="kt-btn kt-btn-primary">
                        Report this person
                    </button>
                    <button class="kt-btn kt-btn-outline" data-kt-modal-dismiss="true">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Page -->
    <!-- Scripts -->
    <script src="../dist/assets/js/core.bundle.js">
    </script>
    <script src="../dist/assets/vendors/ktui/ktui.min.js">
    </script>
    <script src="../dist/assets/vendors/apexcharts/apexcharts.min.js">
    </script>
    <script src="../dist/assets/js/widgets/general.js">
    </script>
    <script src="../dist/assets/js/layouts/demo1.js">
    </script>
    <script>
        // File upload preview handler (nhiều file)
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('bill_payment_file');
            const previewContainer = document.getElementById('bill_payment_preview');
            const clearAllBtn = document.getElementById('clear_all_bill_files');

            if (fileInput) {
                fileInput.addEventListener('change', function(e) {
                    const files = e.target.files;
                    previewContainer.innerHTML = '';
                    if (files && files.length > 0) {
                        previewContainer.classList.remove('hidden');
                        if (clearAllBtn) clearAllBtn.classList.remove('hidden');
                        for (let i = 0; i < files.length; i++) {
                            const file = files[i];
                            const item = document.createElement('div');
                            item.className = 'flex items-center gap-2 p-3 bg-accent/60 rounded-lg border border-border';
                            let thumb = '';
                            if (file.type.startsWith('image/')) {
                                const reader = new FileReader();
                                reader.onload = function(ev) {
                                    const img = item.querySelector('.bill-thumb');
                                    if (img) img.src = ev.target.result;
                                };
                                reader.readAsDataURL(file);
                                thumb = '<img class="bill-thumb w-12 h-12 object-cover rounded border border-border shrink-0" src="" alt="">';
                            } else {
                                thumb = '<span class="w-12 h-12 flex items-center justify-center shrink-0"><i class="ki-filled ki-file text-primary text-2xl"></i></span>';
                            }
                            item.innerHTML = thumb + '<div class="flex flex-col grow min-w-0"><span class="text-sm font-semibold text-mono truncate">' + escapeHtml(file.name) + '</span><span class="text-xs text-secondary-foreground">' + formatFileSize(file.size) + '</span></div>';
                            previewContainer.appendChild(item);
                        }
                    } else {
                        previewContainer.classList.add('hidden');
                        if (clearAllBtn) clearAllBtn.classList.add('hidden');
                    }
                });
            }

            // Bill of master file preview
            const masterFileInput = document.getElementById('bill_of_master_file');
            const masterPreviewContainer = document.getElementById('bill_of_master_preview');
            const clearAllMasterBtn = document.getElementById('clear_all_bill_master_files');
            if (masterFileInput) {
                masterFileInput.addEventListener('change', function(e) {
                    const files = e.target.files;
                    masterPreviewContainer.innerHTML = '';
                    if (files && files.length > 0) {
                        masterPreviewContainer.classList.remove('hidden');
                        if (clearAllMasterBtn) clearAllMasterBtn.classList.remove('hidden');
                        for (let i = 0; i < files.length; i++) {
                            const file = files[i];
                            const item = document.createElement('div');
                            item.className = 'flex items-center gap-2 p-3 bg-accent/60 rounded-lg border border-border';
                            let thumb = '';
                            if (file.type.startsWith('image/')) {
                                const reader = new FileReader();
                                reader.onload = function(ev) {
                                    const img = item.querySelector('.bill-master-thumb');
                                    if (img) img.src = ev.target.result;
                                };
                                reader.readAsDataURL(file);
                                thumb = '<img class="bill-master-thumb w-12 h-12 object-cover rounded border border-border shrink-0" src="" alt="">';
                            } else {
                                thumb = '<span class="w-12 h-12 flex items-center justify-center shrink-0"><i class="ki-filled ki-file text-primary text-2xl"></i></span>';
                            }
                            item.innerHTML = thumb + '<div class="flex flex-col grow min-w-0"><span class="text-sm font-semibold text-mono truncate">' + escapeHtml(file.name) + '</span><span class="text-xs text-secondary-foreground">' + formatFileSize(file.size) + '</span></div>';
                            masterPreviewContainer.appendChild(item);
                        }
                    } else {
                        masterPreviewContainer.classList.add('hidden');
                        if (clearAllMasterBtn) clearAllMasterBtn.classList.add('hidden');
                    }
                });
            }

            // Parse member data before form submit
            const form = document.getElementById('edit_family_form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    // Parse member data to JSON
                    const memberFields = ['member1', 'member2', 'member3', 'member4', 'member5'];
                    memberFields.forEach(function(fieldName) {
                        const textarea = form.querySelector('[name="' + fieldName + '"]');
                        if (textarea && textarea.value.trim()) {
                            const parsedData = parseMemberData(textarea.value);
                            if (parsedData) {
                                // Create hidden input with JSON data
                                let hiddenInput = form.querySelector('[name="' + fieldName + '_json"]');
                                if (!hiddenInput) {
                                    hiddenInput = document.createElement('input');
                                    hiddenInput.type = 'hidden';
                                    hiddenInput.name = fieldName + '_json';
                                    form.appendChild(hiddenInput);
                                }
                                hiddenInput.value = JSON.stringify(parsedData);
                            }
                        }
                    });
                });
            }
        });

        function parseMemberData(text) {
            if (!text || !text.trim()) return null;
            const t = text.trim();

            // Dạng JSON: {"order_code":"863470","product_name":"...","email":"...","region":"...","purchase_date":"..."}
            if (t.startsWith('{')) {
                try {
                    const parsed = JSON.parse(t);
                    if (parsed && typeof parsed === 'object') {
                        const result = {};
                        ['order_code', 'product_name', 'email', 'region', 'purchase_date'].forEach(function(k) {
                            if (parsed[k] !== undefined && parsed[k] !== null && parsed[k] !== '') {
                                result[k] = String(parsed[k]);
                            }
                        });
                        if (Object.keys(result).length > 0) return result;
                    }
                } catch (e) { /* fall through to key:value */ }
            }

            // Dạng "Key: Value" từng dòng (Mã đơn hàng / mã_đh, Tên sản phẩm / sản_phẩm, ...)
            const lines = t.split('\n').map(function(line) { return line.trim(); }).filter(function(line) { return line; });
            const data = {};
            const keyMap = {
                'Mã đơn hàng': 'order_code', 'mã_đh': 'order_code',
                'Tên sản phẩm': 'product_name', 'sản_phẩm': 'product_name',
                'Email': 'email', 'Khu vực bạn sống': 'region', 'Ngày mua': 'purchase_date'
            };
            lines.forEach(function(line) {
                const colonIndex = line.indexOf(':');
                if (colonIndex > 0) {
                    const key = line.substring(0, colonIndex).trim();
                    const value = line.substring(colonIndex + 1).trim();
                    const englishKey = keyMap[key] || key.toLowerCase().replace(/\s+/g, '_');
                    data[englishKey] = value;
                }
            });
            return Object.keys(data).length > 0 ? data : null;
        }

        function clearFilePreview() {
            const fileInput = document.getElementById('bill_payment_file');
            const previewContainer = document.getElementById('bill_payment_preview');
            const clearAllBtn = document.getElementById('clear_all_bill_files');
            if (fileInput) fileInput.value = '';
            if (previewContainer) {
                previewContainer.innerHTML = '';
                previewContainer.classList.add('hidden');
            }
            if (clearAllBtn) clearAllBtn.classList.add('hidden');
        }

        function clearBillOfMasterPreview() {
            const fileInput = document.getElementById('bill_of_master_file');
            const previewContainer = document.getElementById('bill_of_master_preview');
            const clearAllBtn = document.getElementById('clear_all_bill_master_files');
            if (fileInput) fileInput.value = '';
            if (previewContainer) {
                previewContainer.innerHTML = '';
                previewContainer.classList.add('hidden');
            }
            if (clearAllBtn) clearAllBtn.classList.add('hidden');
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        function formatFileSize(bytes) {
            if (bytes === 0) return '0 Bytes';
            const k = 1024;
            const sizes = ['Bytes', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return Math.round(bytes / Math.pow(k, i) * 100) / 100 + ' ' + sizes[i];
        }
    </script>
    <!-- End of Scripts -->
</body>

<!-- Mirrored from keenthemes.com/metronic/tailwind/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jan 2026 07:07:01 GMT -->

</html>