<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">

<!-- Mirrored from keenthemes.com/metronic/tailwind/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jan 2026 07:04:28 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
        <title>
                Danh sách family-youtube
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

<style>
        #member_detail_modal {
                z-index: 9990;
        }

        #payment_modal {
                z-index: 9995;
        }

        .font-medium {
                font-weight: unset;
        }

        .demo1 {
                --sidebar-width: unset;
        }

        .border-border,
        .border-b-border,
        .border-t-border {
                border-color: oklch(0.77 0 0);
        }

        /* Loading animation */
        @keyframes spin {
                from {
                        transform: rotate(0deg);
                }

                to {
                        transform: rotate(360deg);
                }
        }

        .animate-spin {
                animation: spin 1s linear infinite;
        }

        #search_form.loading #search_icon {
                display: none;
        }

        #search_form.loading #search_loading {
                display: inline-block !important;
        }

        #search_form.loading #search_btn_text {
                display: none;
        }

        #search_form.loading #search_btn_loading {
                display: inline-flex !important;
        }

        #search_form.loading #search_btn {
                pointer-events: none;
                opacity: 0.7;
        }

        #search_form.loading #search_input {
                pointer-events: none;
                opacity: 0.7;
        }
</style>

<body class="antialiased flex h-full text-base text-foreground bg-background demo1 kt-sidebar-fixed kt-header-fixed" style="background: ghostwhite;">
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
                        <main class="grow" id="content" role="content">
                                <!-- Container -->
                                <div class="kt-container-fixed" id="contentContainer">
                                </div>
                                <!-- End of Container -->

                                <!-- Container -->
                                <div class="kt-container-fixed" style="margin: 0 auto;width: 100%;max-width: unset;">
                                        <div class="grid gap-5 lg:gap-7.5" style="width: 100%;">

                                                <!-- begin: grid -->
                                                <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">

                                                        <div class="lg:col-span-3">
                                                                <div class="grid">
                                                                        <div
                                                                                class="kt-card kt-card-grid h-full min-w-full">
                                                                                <div class="kt-card-header">
                                                                                        <h3 class="kt-card-title">
                                                                                                Youtube families
                                                                                        </h3>
                                                                                        <form method="get" action="?" class="flex items-center gap-2" id="search_form">
                                                                                                <div class="kt-input max-w-48">
                                                                                                        <i class="ki-filled ki-magnifier" id="search_icon"></i>
                                                                                                        <i class="ki-filled ki-loading-spinner animate-spin hidden" id="search_loading" style="animation: spin 1s linear infinite;"></i>
                                                                                                        <input name="order_code"
                                                                                                                placeholder="Tìm theo mã đơn hàng"
                                                                                                                type="text"
                                                                                                                id="search_input"
                                                                                                                value="<?php echo htmlspecialchars(isset($orderCode) ? $orderCode : ''); ?>">
                                                                                                </div>
                                                                                                <button type="submit" class="kt-btn kt-btn-sm kt-btn-primary" id="search_btn">
                                                                                                        <span id="search_btn_text">Tìm</span>
                                                                                                        <span id="search_btn_loading" class="hidden flex items-center gap-1">
                                                                                                                <svg class="animate-spin h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" style="animation: spin 1s linear infinite;">
                                                                                                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                                                                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                                                                                                </svg>
                                                                                                                Đang tìm...
                                                                                                        </span>
                                                                                                </button>
                                                                                        </form>
                                                                                </div>
                                                                                <div class="kt-card-body p-5">
                                                                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5" id="families_grid">
                                                                                                <?php foreach ($families as $family): ?>
                                                                                                        <?php
                                                                                                        // Đếm số member đã điền (member 1 đến 5)
                                                                                                        $filledSlots = 0;
                                                                                                        for ($j = 1; $j < 6; $j++) {
                                                                                                                if (isset($family['member' . $j]) && !empty($family['member' . $j])) {
                                                                                                                        // Kiểm tra xem member có decode được không
                                                                                                                        if (isset($family['member' . $j . '_decoded']) && $family['member' . $j . '_is_json']) {
                                                                                                                                $memberCheck = $family['member' . $j . '_decoded'];
                                                                                                                        } else {
                                                                                                                                $memberCheck = json_decode($family['member' . $j], true);
                                                                                                                        }
                                                                                                                        if (is_array($memberCheck) && !empty($memberCheck)) {
                                                                                                                                $filledSlots++;
                                                                                                                        }
                                                                                                                }
                                                                                                        }
                                                                                                        // Tính số slot trống = 5 - số slot đã điền
                                                                                                        $emptySlots = 5 - $filledSlots;
                                                                                                        ?>
                                                                                                        <div class="kt-card kt-card-grid family-card border border-border rounded-lg p-5 bg-background hover:shadow-lg transition-shadow" style="background-color: aliceblue;">
                                                                                                                <div class="flex flex-col gap-4">
                                                                                                                        <!-- Header với thao tác -->
                                                                                                                        <div class="flex items-start justify-between border-b border-b-border pb-3">
                                                                                                                                <h4 class="text-lg font-semibold text-foreground" style="height: 56px;"><?php echo $family['user']; ?></h4>
                                                                                                                                <div class="flex items-center gap-2">
                                                                                                                                        <button type="button" class="kt-btn kt-btn-sm kt-btn-ghost inline-flex items-center gap-1.5 px-2.5 py-1.5 rounded-lg text-xs font-medium text-success hover:bg-success/10"
                                                                                                                                                onclick="openPaymentModal(<?php echo (int)$family['id']; ?>, this.getAttribute('data-family-name'), this.getAttribute('data-number-bank'), this.getAttribute('data-name-bank'), this.getAttribute('data-monthly-payment'))"
                                                                                                                                                data-family-name="<?php echo htmlspecialchars($family['user']); ?>"
                                                                                                                                                data-number-bank="<?php echo htmlspecialchars($family['number_bank'] ?? ''); ?>"
                                                                                                                                                data-name-bank="<?php echo htmlspecialchars($family['name_bank'] ?? ''); ?>"
                                                                                                                                                data-monthly-payment="<?php echo isset($family['monthly_payment']) && $family['monthly_payment'] !== '' && $family['monthly_payment'] !== null ? (int)$family['monthly_payment'] : 0; ?>"
                                                                                                                                                title="Thanh toán cho chủ farm">
                                                                                                                                                <i class="ki-filled ki-wallet text-base"></i>
                                                                                                                                                Thanh toán
                                                                                                                                        </button>
                                                                                                                                        <a class="kt-btn kt-btn-icon kt-btn-sm kt-btn-ghost"
                                                                                                                                                href="?act=edit-family&id=<?php echo $family['id']; ?>"
                                                                                                                                                title="Sửa">
                                                                                                                                                <i class="ki-filled ki-pencil text-primary">
                                                                                                                                                </i>
                                                                                                                                        </a>
                                                                                                                                        <button class="kt-btn kt-btn-icon kt-btn-sm kt-btn-ghost"
                                                                                                                                                onclick="deleteFamily(<?php echo $family['id']; ?>)"
                                                                                                                                                title="Xóa">
                                                                                                                                                <i class="ki-filled ki-trash text-destructive">
                                                                                                                                                </i>
                                                                                                                                        </button>
                                                                                                                                </div>
                                                                                                                        </div>

                                                                                                                        <!-- Thông tin chính -->
                                                                                                                        <div class="grid gap-3">
                                                                                                                                <div class="flex flex-col gap-1">
                                                                                                                                        <span class="text-xs text-muted-foreground font-medium">Email</span>
                                                                                                                                        <span class="text-sm font-medium text-foreground"><?php echo htmlspecialchars($family['email']); ?></span>
                                                                                                                                </div>
                                                                                                                                <div class="flex flex-col gap-1">
                                                                                                                                        <span class="text-xs text-muted-foreground font-medium">Số điện thoại</span>
                                                                                                                                        <span class="text-sm font-medium text-foreground"><?php echo htmlspecialchars($family['number_phone']); ?></span>
                                                                                                                                </div>
                                                                                                                                <div class="flex items-center justify-between gap-2">
                                                                                                                                        <div class="flex flex-col gap-1">
                                                                                                                                                <span class="text-xs text-muted-foreground font-medium">Số thành viên</span>
                                                                                                                                                <span class="text-lg font-bold text-primary" style="color: red"><?php echo 5 - $emptySlots; ?> / 5</span>
                                                                                                                                        </div>
                                                                                                                                        <div class="flex flex-col gap-1 text-right">
                                                                                                                                                <span class="text-xs text-muted-foreground font-medium">Chủ fam thanh toán</span>
                                                                                                                                                <span class="text-sm font-medium text-foreground"><?php echo date('d/m/Y', strtotime($family['payment_at'])); ?></span>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                                <div class="flex flex-col gap-1">
                                                                                                                                        <span class="text-xs text-muted-foreground font-medium">Thanh toán cho chủ fam</span>
                                                                                                                                        <span class="text-sm font-medium text-foreground"><?php echo date('d/m/Y', strtotime($family['pay_due_date'])); ?></span>
                                                                                                                                </div>
                                                                                                                                <?php if (!empty($family['afiilicate_by'])): ?>
                                                                                                                                        <div class="flex flex-col gap-1">
                                                                                                                                                <span class="text-xs text-muted-foreground font-medium">Affiliate by</span>
                                                                                                                                                <span class="text-sm font-medium text-foreground"><?php echo htmlspecialchars($family['afiilicate_by']); ?></span>
                                                                                                                                        </div>
                                                                                                                                <?php endif; ?>
                                                                                                                                <?php
                                                                                                                                // Lần thanh toán tiếp theo = ngày thanh toán cho chủ farm (pay_due_date) + số tháng thanh toán (month_to_pay * 30 ngày)
                                                                                                                                $baseDateStr = !empty($family['pay_due_date']) ? $family['pay_due_date'] : $family['payment_at'];
                                                                                                                                $baseDate = new DateTime($baseDateStr);
                                                                                                                                $daysToAdd = (!empty($family['month_to_pay']) && (int)$family['month_to_pay'] > 0) ? (int)$family['month_to_pay'] * 30 : 30;
                                                                                                                                $targetDate = (clone $baseDate)->modify('+' . $daysToAdd . ' days');
                                                                                                                                $now = new DateTime();
                                                                                                                                $diff = $now->diff($targetDate);
                                                                                                                                $daysRemaining = (int)$diff->format('%r%a');

                                                                                                                                // Xác định màu sắc dựa trên số ngày còn lại
                                                                                                                                if ($daysRemaining <= 0) {
                                                                                                                                        $countdownColor = 'color: #dc2626;'; // Đỏ - đã quá hạn
                                                                                                                                        $countdownText = '' . abs($daysRemaining) . ' ngày';
                                                                                                                                } elseif ($daysRemaining <= 7) {
                                                                                                                                        $countdownColor = 'color: #f97316;'; // Cam - sắp đến hạn
                                                                                                                                        $countdownText = $daysRemaining . ' ngày';
                                                                                                                                } else {
                                                                                                                                        $countdownColor = 'color: #16a34a;'; // Xanh - còn nhiều thời gian
                                                                                                                                        $countdownText = $daysRemaining . ' ngày';
                                                                                                                                }
                                                                                                                                ?>
                                                                                                                                <div class="flex items-center justify-between gap-2 bg-accent/50 rounded-lg p-2">
                                                                                                                                        <div class="flex flex-col gap-1">
                                                                                                                                                <span class="text-xs text-muted-foreground font-medium">Lần thanh toán tiếp theo</span>
                                                                                                                                                <span class="text-sm font-medium" style="<?php echo $countdownColor; ?>"><?php echo $targetDate->format('d/m/Y'); ?></span>
                                                                                                                                        </div>
                                                                                                                                        <div class="flex flex-col gap-1 text-right">
                                                                                                                                                <span class="text-xs text-muted-foreground font-medium"><?php


                                                                                                                                                                                                        if ($daysRemaining <= 0) {
                                                                                                                                                                                                                echo "Đã quá hạn";
                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                echo "Còn lại";
                                                                                                                                                                                                        }

                                                                                                                                                                                                        ?></span>
                                                                                                                                                <span class="text-lg font-bold" style="<?php echo $countdownColor; ?>"><?php echo $countdownText; ?></span>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                        </div>

                                                                                                                        <?php
                                                                                                                        // Tính ngày hết hạn gần nhất của các member (hiển thị luôn ngoài card)
                                                                                                                        $nearestExpireDate = null;
                                                                                                                        $nearestDaysRemaining = null;
                                                                                                                        for ($k = 1; $k < 6; $k++) {
                                                                                                                                if (!isset($family['member' . $k]) || empty($family['member' . $k])) continue;
                                                                                                                                if (isset($family['member' . $k . '_decoded']) && $family['member' . $k . '_is_json']) {
                                                                                                                                        $m = $family['member' . $k . '_decoded'];
                                                                                                                                } else {
                                                                                                                                        $m = json_decode($family['member' . $k], true);
                                                                                                                                        if (!is_array($m) || empty($m)) continue;
                                                                                                                                }
                                                                                                                                $purchaseStr = isset($m['purchase_date']) ? trim($m['purchase_date']) : '';
                                                                                                                                if ($purchaseStr === '') continue;
                                                                                                                                $purchaseDate = DateTime::createFromFormat('H:i:s d/m/Y', $purchaseStr)
                                                                                                                                        ?: DateTime::createFromFormat('d/m/Y H:i:s', $purchaseStr)
                                                                                                                                        ?: DateTime::createFromFormat('d/m/Y', $purchaseStr);
                                                                                                                                if (!$purchaseDate) continue;
                                                                                                                                $expire = clone $purchaseDate;
                                                                                                                                $expire->modify(str_contains((string)($m['product_name'] ?? ''), '6') ? '+6 months' : '+12 months');
                                                                                                                                $daysRem = (int)(new DateTime())->diff($expire)->format('%r%a');
                                                                                                                                if ($nearestExpireDate === null || $expire < $nearestExpireDate) {
                                                                                                                                        $nearestExpireDate = $expire;
                                                                                                                                        $nearestDaysRemaining = $daysRem;
                                                                                                                                }
                                                                                                                        }
                                                                                                                        ?>
                                                                                                                        <?php if ($nearestExpireDate !== null): ?>
                                                                                                                                <div class="flex items-center justify-between gap-2 bg-accent/50 rounded-lg p-2">
                                                                                                                                        <div class="flex flex-col gap-1">
                                                                                                                                                <span class="text-xs text-muted-foreground font-medium">Ngày family trống</span>
                                                                                                                                                <span class="text-sm font-medium text-foreground"><?php echo $nearestExpireDate->format('d/m/Y'); ?></span>
                                                                                                                                        </div>
                                                                                                                                        <div class="flex flex-col gap-1 text-right">
                                                                                                                                                <span class="text-xs text-muted-foreground font-medium"><?php echo $nearestDaysRemaining <= 0 ? 'Đã quá hạn' : 'Còn lại'; ?></span>
                                                                                                                                                <span class="text-lg font-bold" style="<?php
                                                                                                                                                                                        if ($nearestDaysRemaining <= 0) echo 'color: #dc2626;';
                                                                                                                                                                                        elseif ($nearestDaysRemaining <= 7) echo 'color: #f97316;';
                                                                                                                                                                                        else echo 'color: #16a34a;';
                                                                                                                                                                                        ?>"><?php echo $nearestDaysRemaining <= 0 ? abs($nearestDaysRemaining) . ' ngày' : $nearestDaysRemaining . ' ngày'; ?></span>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                        <?php endif; ?>

                                                                                                                        <!-- Danh sách thành viên (thu gọn, bấm Xem thêm mới hiện) -->
                                                                                                                        <div class="border-t border-t-border pt-3">
                                                                                                                                <div class="flex items-center justify-between gap-2">
                                                                                                                                        <span class="text-xs text-muted-foreground font-medium">Thành viên: <?php echo $filledSlots; ?></span>
                                                                                                                                        <button type="button" class="card-toggle-members text-2sm text-primary font-medium hover:underline cursor-pointer">
                                                                                                                                                Xem thêm
                                                                                                                                        </button>
                                                                                                                                </div>
                                                                                                                                <div class="card-members-detail hidden flex flex-col gap-2 mt-2">
                                                                                                                                        <?php
                                                                                                                                        for ($i = 1; $i < 6; $i++) {
                                                                                                                                                if (!isset($family['member' . $i]) || empty($family['member' . $i])) {
                                                                                                                                                        break;
                                                                                                                                                }
                                                                                                                                                if (isset($family['member' . $i . '_decoded']) && $family['member' . $i . '_is_json']) {
                                                                                                                                                        $member = $family['member' . $i . '_decoded'];
                                                                                                                                                } else {
                                                                                                                                                        $member = json_decode($family['member' . $i], true);
                                                                                                                                                        if (!is_array($member)) {
                                                                                                                                                                $member = null;
                                                                                                                                                        }
                                                                                                                                                }
                                                                                                                                                if (!$member) {
                                                                                                                                                        break;
                                                                                                                                                }
                                                                                                                                        ?>
                                                                                                                                                <div class="bg-accent/30 rounded-lg p-3 border border-border">
                                                                                                                                                        <div class="flex flex-col gap-2">
                                                                                                                                                                <div class="text-sm font-medium text-foreground">
                                                                                                                                                                        <?php echo isset($member['order_code']) ? "Mã đơn hàng: <strong>" . htmlspecialchars($member['order_code']) . "</strong>" : "Thành viên " . $i; ?>
                                                                                                                                                                </div>
                                                                                                                                                                <?php if (!empty($member['email'])): ?>
                                                                                                                                                                        <div class="text-xs text-muted-foreground">
                                                                                                                                                                                Email: <?php echo htmlspecialchars($member['email']); ?>
                                                                                                                                                                        </div>
                                                                                                                                                                <?php endif; ?>
                                                                                                                                                                <div class="text-xs text-muted-foreground">
                                                                                                                                                                        <?php
                                                                                                                                                                        $purchaseDateStr = isset($member['purchase_date']) ? trim($member['purchase_date']) : '';
                                                                                                                                                                        $purchaseDate = $purchaseDateStr !== ''
                                                                                                                                                                                ? (DateTime::createFromFormat('H:i:s d/m/Y', $purchaseDateStr) ?: DateTime::createFromFormat('d/m/Y H:i:s', $purchaseDateStr) ?: DateTime::createFromFormat('d/m/Y', $purchaseDateStr))
                                                                                                                                                                                : null;
                                                                                                                                                                        if ($purchaseDate) {
                                                                                                                                                                                if (str_contains((string)($member['product_name'] ?? ''), '6')) {
                                                                                                                                                                                        $expireDate = (clone $purchaseDate)->modify('+6 months');
                                                                                                                                                                                } else {
                                                                                                                                                                                        $expireDate = (clone $purchaseDate)->modify('+12 months');
                                                                                                                                                                                }
                                                                                                                                                                                $now = new DateTime();
                                                                                                                                                                                $diff = $now->diff($expireDate);
                                                                                                                                                                                $daysRemaining = (int)$diff->format('%r%a');
                                                                                                                                                                                echo $daysRemaining <= 0 ? "Đã quá hạn: <strong>" . abs($daysRemaining) . "</strong> ngày" : "Còn lại: <strong>$daysRemaining</strong> ngày";
                                                                                                                                                                        } else {
                                                                                                                                                                                echo "—";
                                                                                                                                                                        }
                                                                                                                                                                        ?>
                                                                                                                                                                </div>
                                                                                                                                                                <button
                                                                                                                                                                        type="button"
                                                                                                                                                                        class="text-2sm text-primary font-normal leading-3 hover:underline cursor-pointer text-left member-view-btn w-fit"
                                                                                                                                                                        data-member-data="<?php echo htmlspecialchars(json_encode($member, JSON_UNESCAPED_UNICODE | JSON_HEX_QUOT | JSON_HEX_APOS)); ?>"
                                                                                                                                                                        data-member-index="<?php echo $i; ?>">
                                                                                                                                                                        Xem thêm
                                                                                                                                                                </button>
                                                                                                                                                        </div>
                                                                                                                                                </div>
                                                                                                                                        <?php
                                                                                                                                        }
                                                                                                                                        ?>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </div>
                                                                                                        </div>
                                                                                                <?php endforeach; ?>
                                                                                        </div>
                                                                                        <?php
                                                                                        $totalPages = $perPage > 0 ? max(1, (int) ceil($totalFamilies / $perPage)) : 1;
                                                                                        $orderCodeParam = isset($orderCode) && $orderCode !== '' ? '&order_code=' . urlencode($orderCode) : '';
                                                                                        ?>
                                                                                        <?php if ($totalPages > 1): ?>
                                                                                                <div class="flex items-center justify-between gap-4 mt-5 pt-4 border-t border-border">
                                                                                                        <span class="text-sm text-muted-foreground">
                                                                                                                Tổng <?php echo $totalFamilies; ?> family
                                                                                                                <?php if (!empty($orderCode)): ?> (tìm theo mã đơn hàng / email)<?php endif; ?>
                                                                                                        </span>
                                                                                                        <div class="flex items-center gap-2">
                                                                                                                <?php if ($page > 1): ?>
                                                                                                                        <a class="kt-btn kt-btn-sm kt-btn-outline" href="?page=<?php echo $page - 1; ?><?php echo $orderCodeParam; ?>">Trang trước</a>
                                                                                                                <?php endif; ?>
                                                                                                                <span class="text-sm text-foreground">Trang <?php echo $page; ?> / <?php echo $totalPages; ?></span>
                                                                                                                <?php if ($page < $totalPages): ?>
                                                                                                                        <a class="kt-btn kt-btn-sm kt-btn-outline" href="?page=<?php echo $page + 1; ?><?php echo $orderCodeParam; ?>">Trang sau</a>
                                                                                                                <?php endif; ?>
                                                                                                        </div>
                                                                                                </div>
                                                                                        <?php endif; ?>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!-- end: grid -->
                                        </div>
                                </div>
                                <!-- End of Container -->
                        </main>
                        <!-- End of Content -->
                        <!-- Footer -->
                        <!-- End of Footer -->
                </div>
                <!-- End of Wrapper -->
        </div>

        <div class="kt-modal" data-kt-modal="true" id="member_detail_modal">
                <div class="kt-modal-content max-w-[600px] top-[15%]">
                        <div class="kt-modal-header">
                                <h3 class="kt-modal-title">
                                        Thông tin thành viên
                                </h3>
                                <button class="kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost shrink-0"
                                        data-kt-modal-dismiss="true">
                                        <i class="ki-filled ki-cross">
                                        </i>
                                </button>
                        </div>
                        <div class="kt-modal-body grid gap-5 px-0 py-5">
                                <div class="flex flex-col px-5 gap-4">
                                        <div class="grid gap-4">
                                                <div class="flex flex-col gap-2">
                                                        <label class="text-mono font-semibold text-sm text-secondary-foreground">
                                                                Mã đơn hàng
                                                        </label>
                                                        <div class="text-sm font-medium text-foreground" id="modal_order_code">
                                                                -
                                                        </div>
                                                </div>
                                                <div class="border-b border-b-border"></div>
                                                <div class="flex flex-col gap-2">
                                                        <label class="text-mono font-semibold text-sm text-secondary-foreground">
                                                                Tên sản phẩm
                                                        </label>
                                                        <div class="text-sm font-medium text-foreground" id="modal_product_name">
                                                                -
                                                        </div>
                                                </div>
                                                <div class="border-b border-b-border"></div>
                                                <div class="flex flex-col gap-2">
                                                        <label class="text-mono font-semibold text-sm text-secondary-foreground">
                                                                Email
                                                        </label>
                                                        <div class="text-sm font-medium text-foreground" id="modal_email">
                                                                -
                                                        </div>
                                                </div>
                                                <div class="border-b border-b-border"></div>
                                                <div class="flex flex-col gap-2">
                                                        <label class="text-mono font-semibold text-sm text-secondary-foreground">
                                                                Khu vực bạn sống
                                                        </label>
                                                        <div class="text-sm font-medium text-foreground" id="modal_region">
                                                                -
                                                        </div>
                                                </div>
                                                <div class="border-b border-b-border"></div>
                                                <div class="flex flex-col gap-2">
                                                        <label class="text-mono font-semibold text-sm text-secondary-foreground">
                                                                Ngày mua
                                                        </label>
                                                        <div class="text-sm font-medium text-foreground" id="modal_purchase_date">
                                                                -
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="kt-modal-footer flex items-center justify-end gap-2.5 px-5 py-4 border-t border-t-border">
                                <button class="kt-btn kt-btn-outline" data-kt-modal-dismiss="true">
                                        Đóng
                                </button>
                        </div>
                </div>
        </div>
        <!-- End of Member Detail Modal -->

        <!-- Modal thanh toán cho chủ farm -->
        <div class="kt-modal" id="payment_modal" style="display: none;">
                <div class="kt-modal-backdrop" id="payment_modal_backdrop" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1040;"></div>
                <div class="kt-modal-content max-w-[420px] top-[15%] relative z-[1050]" style="margin: 0 auto; z-index: 1050;">
                        <div class="kt-modal-header">
                                <h3 class="kt-modal-title">Thanh toán cho chủ farm</h3>
                                <button type="button" class="kt-btn kt-btn-sm kt-btn-icon kt-btn-ghost shrink-0" onclick="closePaymentModal()">
                                        <i class="ki-filled ki-cross"></i>
                                </button>
                        </div>
                        <form method="post" action="/" id="quick_pay_form" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="quick-pay-family">
                                <input type="hidden" name="id" id="payment_family_id" value="">
                                <div class="kt-modal-body grid gap-4 px-5 py-4">
                                        <p class="text-sm font-medium text-foreground" id="payment_family_name">—</p>
                                        <!-- Thông tin chuyển khoản -->
                                        <div id="payment_bank_section" class="rounded-lg border border-border bg-accent/30 p-4 gap-3 flex flex-col">
                                                <span class="text-xs font-semibold text-muted-foreground uppercase tracking-wide">Chuyển khoản đến</span>
                                                <div class="grid gap-2">
                                                        <div class="flex justify-between items-center gap-2">
                                                                <span class="text-xs text-muted-foreground">Ngân hàng</span>
                                                                <span class="text-sm font-semibold text-foreground" id="payment_bank_name">—</span>
                                                        </div>
                                                        <div class="flex justify-between items-center gap-2">
                                                                <span class="text-xs text-muted-foreground">Số tài khoản</span>
                                                                <span class="text-sm font-mono font-semibold text-foreground" id="payment_bank_number">—</span>
                                                                <button type="button" class="kt-btn kt-btn-sm kt-btn-ghost p-1" onclick="copyPaymentField('number')" title="Sao chép"><i class="ki-filled ki-copy text-base"></i></button>
                                                        </div>
                                                        <div class="flex justify-between items-center gap-2">
                                                                <span class="text-xs text-muted-foreground">Chủ tài khoản</span>
                                                                <span class="text-sm font-semibold text-foreground" id="payment_bank_holder">—</span>
                                                                <button type="button" class="kt-btn kt-btn-sm kt-btn-ghost p-1" onclick="copyPaymentField('holder')" title="Sao chép"><i class="ki-filled ki-copy text-base"></i></button>
                                                        </div>
                                                </div>
                                                <div id="payment_qr_wrap" class="hidden flex flex-col items-center pt-2 border-t border-border mt-2">
                                                        <span class="text-xs text-muted-foreground mb-2">Quét mã QR để chuyển khoản nhanh</span>
                                                        <img id="payment_qr_img" src="" alt="QR VietQR" class="object-contain bg-white rounded-lg border border-border" style="display: none; width: 280px; height: auto; min-height: 280px;">
                                                        <p id="payment_qr_fallback" class="text-xs text-muted-foreground" style="display: none;">QR không khả dụng cho ngân hàng này</p>
                                                </div>
                                        </div>
                                        <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">Đã thanh toán (số tháng)</label>
                                                <select name="month_to_pay" id="payment_month_select" class="kt-input" required>
                                                        <option value="">— Chọn số tháng —</option>
                                                        <?php for ($m = 1; $m <= 12; $m++): ?>
                                                                <option value="<?php echo $m; ?>"><?php echo $m; ?> tháng</option>
                                                        <?php endfor; ?>
                                                </select>
                                        </div>
                                        <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">Số tiền thanh toán hàng tháng</label>
                                                <input type="text" name="monthly_payment" id="payment_monthly_payment" class="kt-input" inputmode="numeric" placeholder="VD: 1.000.000" value="" autocomplete="off">
                                        </div>
                                        <div class="flex flex-col gap-2">
                                                <label class="kt-form-label text-mono font-semibold text-sm">Bill đã chuyển khoản thành công</label>
                                                <input type="file" name="bill_payment" id="payment_bill_file" class="kt-input text-sm" accept="image/*,.pdf">
                                                <span class="text-xs text-muted-foreground">Tùy chọn: ảnh chụp màn hình hoặc file PDF</span>
                                        </div>
                                </div>
                                <div class="kt-modal-footer flex items-center justify-end gap-2.5 px-5 py-4 border-t border-t-border">
                                        <button type="button" class="kt-btn kt-btn-outline" onclick="closePaymentModal()">Hủy</button>
                                        <button type="submit" class="kt-btn kt-btn-primary">Xác nhận thanh toán</button>
                                </div>
                        </form>
                </div>
        </div>
        <!-- End payment modal -->

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
                // Map key (name_bank chuẩn hóa: bỏ space, uppercase) sang slug dùng trong URL img.vietqr.io/image/{slug}-{account}-compact.png
                var vietqrImgSlug = {
                        'VCB': 'VCB',
                        'BIDV': 'BIDV',
                        'TCB': 'TCB',
                        'MB': 'MB',
                        'MBBANK': 'MB',
                        'STB': 'STB',
                        'SACOMBANK': 'STB',
                        'VPB': 'VPB',
                        'VPBANK': 'VPB',
                        'TPB': 'TPB',
                        'TPBANK': 'TPB',
                        'ACB': 'ACB',
                        'VIETINBANK': 'CTG',
                        'HDB': 'HDB',
                        'HDBANK': 'HDB',
                        'MSB': 'MSB',
                        'MSBBANK': 'MSB',
                        'TECHCOMBANK': 'TCB',
                        'AGRIBANK': 'AGRIBANK',
                        'OCB': 'OCB',
                        'NCB': 'NCB',
                        'SHB': 'SHB',
                        'SHBANK': 'SHB',
                        'SCB': 'SCB',
                        'SCBBANK': 'SCB',
                        'VIB': 'VIB',
                        'VIBANK': 'VIB',
                        'SEABANK': 'SEABANK',
                        'OCEANBANK': 'OCEANBANK',
                        'ABBANK': 'ABBANK',
                        'PVCOMBANK': 'PVCOMBANK',
                        'BACABANK': 'BAB',
                        'VIETABANK': 'VAB',
                        'SAIGONBANK': 'SGbank',
                        'BVB': 'BVB',
                        'IVB': 'IVB',
                        'KLB': 'KLB',
                        'LPB': 'LPB',
                        'NAB': 'NAB',
                        'VIETBANK': 'VTB'
                };

                // Định dạng số tiền có dấu phẩy/chấm phân cách hàng nghìn (VD: 1.000.000)
                function formatMoneyInput(str) {
                        var num = String(str || '').replace(/\D/g, '');
                        if (num === '') return '';
                        return num.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                }

                function parseMoneyInput(str) {
                        var num = String(str || '').replace(/\D/g, '');
                        return num === '' ? 0 : parseInt(num, 10) || 0;
                }

                function openPaymentModal(familyId, familyName, numberBank, nameBank, monthlyPayment) {
                        document.getElementById('payment_family_id').value = familyId;
                        document.getElementById('payment_family_name').textContent = (familyName || '—');
                        document.getElementById('payment_bank_holder').textContent = (familyName || '—');
                        document.getElementById('payment_bank_number').textContent = (numberBank || '—');
                        document.getElementById('payment_bank_name').textContent = (nameBank || '—');
                        document.getElementById('payment_month_select').value = '';
                        var billFileEl = document.getElementById('payment_bill_file');
                        if (billFileEl) billFileEl.value = '';
                        var monthlyEl = document.getElementById('payment_monthly_payment');
                        if (monthlyEl) {
                                var raw = (monthlyPayment !== undefined && monthlyPayment !== null) ? String(monthlyPayment).replace(/\D/g, '') : '';
                                monthlyEl.value = formatMoneyInput(raw === '' ? '0' : raw);
                        }

                        var qrWrap = document.getElementById('payment_qr_wrap');
                        var qrImg = document.getElementById('payment_qr_img');
                        var qrFallback = document.getElementById('payment_qr_fallback');
                        qrImg.style.display = 'none';
                        qrImg.src = '';
                        qrFallback.style.display = 'none';
                        qrWrap.classList.add('hidden');
                        if (numberBank && nameBank) {
                                qrWrap.classList.remove('hidden');
                                var bankKey = (nameBank + '').trim().toUpperCase().replace(/\s+/g, '');
                                var slug = vietqrImgSlug[bankKey] || vietqrImgSlug[nameBank.trim()];
                                if (slug) {
                                        var accountNo = (numberBank + '').replace(/\s/g, '');
                                        var qrBase = 'https://img.vietqr.io/image/' + slug + '-' + accountNo + '-compact.png';
                                        qrImg.setAttribute('data-qr-base', qrBase);
                                        var amount = (monthlyPayment !== undefined && monthlyPayment !== null && monthlyPayment !== '') ? (parseInt(String(monthlyPayment).replace(/\D/g, ''), 10) || 0) : 0;
                                        var qrUrl = qrBase + '?amount=' + amount + '&addInfo=Thanh%20toan%20chu%20farm';
                                        qrImg.onload = function() {
                                                qrImg.style.display = 'block';
                                                qrFallback.style.display = 'none';
                                        };
                                        qrImg.onerror = function() {
                                                qrImg.style.display = 'none';
                                                qrFallback.style.display = 'block';
                                        };
                                        qrImg.src = qrUrl;
                                } else {
                                        qrFallback.style.display = 'block';
                                }
                        }

                        var modal = document.getElementById('payment_modal');
                        var backdrop = document.getElementById('payment_modal_backdrop');
                        backdrop.style.display = 'block';
                        backdrop.onclick = closePaymentModal;
                        modal.classList.add('show');
                        modal.style.display = 'block';
                        document.body.style.overflow = 'hidden';
                        document.body.classList.add('kt-modal-open');
                }

                function copyPaymentField(field) {
                        var el = field === 'number' ? document.getElementById('payment_bank_number') : document.getElementById('payment_bank_holder');
                        var text = el ? el.textContent : '';
                        if (text && text !== '—') {
                                navigator.clipboard && navigator.clipboard.writeText(text).then(function() {
                                        alert('Đã copy: ' + text);
                                }).catch(function() {
                                        prompt('Copy:', text);
                                });
                        }
                }

                function closePaymentModal() {
                        var modal = document.getElementById('payment_modal');
                        modal.classList.remove('show');
                        modal.style.display = 'none';
                        document.body.style.overflow = '';
                        document.body.classList.remove('kt-modal-open');
                }

                // Function to delete family
                function deleteFamily(id) {
                        if (confirm('Bạn có chắc chắn muốn xóa family này không?')) {
                                // Create form to submit delete request
                                const form = document.createElement('form');
                                form.method = 'POST';
                                form.action = '/';

                                const actionInput = document.createElement('input');
                                actionInput.type = 'hidden';
                                actionInput.name = 'action';
                                actionInput.value = 'delete-family';

                                const idInput = document.createElement('input');
                                idInput.type = 'hidden';
                                idInput.name = 'id';
                                idInput.value = id;

                                form.appendChild(actionInput);
                                form.appendChild(idInput);
                                document.body.appendChild(form);
                                form.submit();
                        }
                }

                // Function to show member detail modal
                function showMemberModal(memberData, memberIndex) {
                        console.log('showMemberModal called', memberData, memberIndex);

                        // Populate modal with member data
                        const orderCodeEl = document.getElementById('modal_order_code');
                        const productNameEl = document.getElementById('modal_product_name');
                        const emailEl = document.getElementById('modal_email');
                        const regionEl = document.getElementById('modal_region');
                        const purchaseDateEl = document.getElementById('modal_purchase_date');

                        if (orderCodeEl) orderCodeEl.textContent = memberData.order_code || '-';
                        if (productNameEl) productNameEl.textContent = memberData.product_name || '-';
                        if (emailEl) emailEl.textContent = memberData.email || '-';
                        if (regionEl) regionEl.textContent = memberData.region || '-';
                        if (purchaseDateEl) purchaseDateEl.textContent = memberData.purchase_date || '-';

                        // Update modal title
                        const modal = document.getElementById('member_detail_modal');
                        if (!modal) {
                                console.error('Modal not found');
                                alert('Không tìm thấy modal');
                                return;
                        }

                        const modalTitle = modal.querySelector('.kt-modal-title');
                        if (modalTitle) {
                                modalTitle.textContent = 'Thông tin thành viên ' + memberIndex;
                        }

                        // Method 1: Try using data-kt-modal-toggle
                        const triggerBtn = document.createElement('button');
                        triggerBtn.setAttribute('data-kt-modal-toggle', 'member_detail_modal');
                        triggerBtn.style.position = 'fixed';
                        triggerBtn.style.left = '-9999px';
                        triggerBtn.style.opacity = '0';
                        document.body.appendChild(triggerBtn);

                        // Trigger click
                        setTimeout(function() {
                                triggerBtn.click();

                                // Clean up after a delay
                                setTimeout(function() {
                                        if (document.body.contains(triggerBtn)) {
                                                document.body.removeChild(triggerBtn);
                                        }
                                }, 500);
                        }, 50);

                        // Fallback: If framework doesn't work, show manually
                        setTimeout(function() {
                                if (!modal.classList.contains('show')) {
                                        console.log('Using fallback method');
                                        modal.style.display = 'block';
                                        modal.classList.add('show');
                                        document.body.style.overflow = 'hidden';

                                        // Add backdrop
                                        let backdrop = document.querySelector('.kt-modal-backdrop');
                                        if (!backdrop) {
                                                backdrop = document.createElement('div');
                                                backdrop.className = 'kt-modal-backdrop';
                                                backdrop.style.cssText = 'position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1040;';
                                                document.body.appendChild(backdrop);
                                        }
                                        backdrop.style.display = 'block';
                                }
                        }, 200);
                }

                // Initialize event listeners for member view buttons
                document.addEventListener('DOMContentLoaded', function() {
                        // Search form loading effect
                        const searchForm = document.getElementById('search_form');
                        if (searchForm) {
                                searchForm.addEventListener('submit', function(e) {
                                        // Add loading class to form
                                        searchForm.classList.add('loading');

                                        // Show loading state
                                        const searchIcon = document.getElementById('search_icon');
                                        const searchLoading = document.getElementById('search_loading');
                                        const searchBtnText = document.getElementById('search_btn_text');
                                        const searchBtnLoading = document.getElementById('search_btn_loading');

                                        if (searchIcon) searchIcon.classList.add('hidden');
                                        if (searchLoading) searchLoading.classList.remove('hidden');
                                        if (searchBtnText) searchBtnText.classList.add('hidden');
                                        if (searchBtnLoading) searchBtnLoading.classList.remove('hidden');
                                });
                        }

                        // Ô số tiền: tự format dấu chấm phân cách hàng nghìn khi gõ; cập nhật QR theo số tiền
                        var paymentMonthlyEl = document.getElementById('payment_monthly_payment');
                        if (paymentMonthlyEl) {
                                paymentMonthlyEl.addEventListener('input', function() {
                                        var raw = this.value.replace(/\D/g, '');
                                        var formatted = formatMoneyInput(raw);
                                        if (this.value !== formatted) this.value = formatted;
                                        var qrImg = document.getElementById('payment_qr_img');
                                        var base = qrImg && qrImg.getAttribute('data-qr-base');
                                        if (base) {
                                                var amount = parseMoneyInput(this.value);
                                                qrImg.src = base + '?amount=' + amount + '&addInfo=Thanh%20toan%20chu%20farm';
                                        }
                                });
                        }
                        // Trước khi submit form thanh toán: gửi số nguyên (bỏ dấu chấm)
                        var quickPayForm = document.getElementById('quick_pay_form');
                        if (quickPayForm) {
                                quickPayForm.addEventListener('submit', function() {
                                        var el = document.getElementById('payment_monthly_payment');
                                        if (el) el.value = String(parseMoneyInput(el.value));
                                });
                        }

                        // Use event delegation for dynamically added buttons
                        document.addEventListener('click', function(e) {
                                // Toggle danh sách thành viên trong card (Xem thêm / Thu gọn)
                                if (e.target.closest('.card-toggle-members')) {
                                        e.preventDefault();
                                        const btn = e.target.closest('.card-toggle-members');
                                        const card = btn.closest('.family-card');
                                        const detail = card ? card.querySelector('.card-members-detail') : null;
                                        if (detail) {
                                                detail.classList.toggle('hidden');
                                                btn.textContent = detail.classList.contains('hidden') ? 'Xem thêm' : 'Thu gọn';
                                        }
                                        return;
                                }
                                if (e.target.closest('.member-view-btn')) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                        const btn = e.target.closest('.member-view-btn');
                                        try {
                                                const memberDataStr = btn.getAttribute('data-member-data');
                                                if (!memberDataStr) {
                                                        console.error('No member data found');
                                                        alert('Không tìm thấy dữ liệu member');
                                                        return;
                                                }
                                                const memberData = JSON.parse(memberDataStr);
                                                const memberIndex = btn.getAttribute('data-member-index');
                                                showMemberModal(memberData, memberIndex);
                                        } catch (e) {
                                                console.error('Error parsing member data:', e);
                                                alert('Có lỗi khi hiển thị thông tin member: ' + e.message);
                                        }
                                }

                                // Close modal when clicking backdrop
                                if (e.target.classList.contains('kt-modal-backdrop')) {
                                        closeMemberModal();
                                }
                        });

                        // Handle modal close buttons
                        const modal = document.getElementById('member_detail_modal');
                        if (modal) {
                                const closeButtons = modal.querySelectorAll('[data-kt-modal-dismiss="true"]');
                                closeButtons.forEach(function(btn) {
                                        btn.addEventListener('click', function(e) {
                                                e.preventDefault();
                                                closeMemberModal();
                                        });
                                });
                        }
                });

                // Function to close member modal
                function closeMemberModal() {
                        const modal = document.getElementById('member_detail_modal');
                        if (modal) {
                                modal.classList.remove('show');
                                modal.style.display = 'none';
                                document.body.style.overflow = '';
                                document.body.classList.remove('kt-modal-open');

                                const backdrop = document.querySelector('.kt-modal-backdrop:not(#payment_modal_backdrop)');
                                if (backdrop) {
                                        backdrop.style.display = 'none';
                                        backdrop.classList.remove('show');
                                }
                        }
                }
        </script>
        <!-- End of Scripts -->
</body>

<!-- Mirrored from keenthemes.com/metronic/tailwind/demo1/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Jan 2026 07:07:01 GMT -->

</html>