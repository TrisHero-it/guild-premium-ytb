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
                                                                                        <form method="get" action="?" class="flex items-center gap-2">
                                                                                                <div class="kt-input max-w-48">
                                                                                                        <i class="ki-filled ki-magnifier"></i>
                                                                                                        <input name="order_code"
                                                                                                                placeholder="Tìm theo mã đơn hàng"
                                                                                                                type="text"
                                                                                                                value="<?php echo htmlspecialchars(isset($orderCode) ? $orderCode : ''); ?>">
                                                                                                </div>
                                                                                                <button type="submit" class="kt-btn kt-btn-sm kt-btn-primary">Tìm</button>
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
                                                                                                                                <h4 class="text-lg font-semibold text-foreground">Family <?php echo $family['user']; ?></h4>
                                                                                                                                <div class="flex items-center gap-2">
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
                                                                                                                        </div>

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
                                                                                                                                                                <div class="text-xs text-muted-foreground">
                                                                                                                                                                        <?php
                                                                                                                                                                        $purchaseDateStr = "18:54:15 19/01/2026";
                                                                                                                                                                        $purchaseDate = DateTime::createFromFormat('H:i:s d/m/Y', $purchaseDateStr);
                                                                                                                                                                        if (str_contains($member['product_name'], '6')) {
                                                                                                                                                                                $expireDate = (clone $purchaseDate)->modify('+6 months');
                                                                                                                                                                        } else {
                                                                                                                                                                                $expireDate = (clone $purchaseDate)->modify('+12 months');
                                                                                                                                                                        }
                                                                                                                                                                        $now = new DateTime();
                                                                                                                                                                        $diff = $now->diff($expireDate);
                                                                                                                                                                        $daysRemaining = (int)$diff->format('%r%a');
                                                                                                                                                                        echo "Còn lại: <strong>$daysRemaining</strong> ngày";
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
                                                                                                                <?php if (!empty($orderCode)): ?> (tìm theo mã đơn hàng)<?php endif; ?>
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

                                const backdrop = document.querySelector('.kt-modal-backdrop');
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