<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">

<head>
        <title>Sửa Collaborator</title>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
        <link href="dist/assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
        <link href="dist/assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
        <link href="dist/assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
        <link href="https://muakey.com/favicon.ico" rel="shortcut icon" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
        <link href="dist/assets/vendors/apexcharts/apexcharts.css" rel="stylesheet" />
        <link href="dist/assets/vendors/keenicons/styles.bundle.css" rel="stylesheet" />
        <link href="dist/assets/css/styles.css" rel="stylesheet" />
        <!-- CKEditor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
</head>

<body class="antialiased flex h-full text-base text-foreground bg-background demo1 kt-header-fixed" style="background: ghostwhite;">
        <div class="flex grow flex-col min-h-full">
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
                <div class="kt-wrapper flex grow flex-col min-w-0 pt-5">
                        <div class="kt-container-fixed">
                                <div class="grid gap-5 lg:gap-7.5">
                                        <div class="grid">
                                                <div class="kt-card kt-card-grid h-full min-w-full">
                                                        <div class="kt-card-header">
                                                                <h3 class="kt-card-title">Sửa Collaborator</h3>
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

                                                                <form method="POST" action="/" id="edit_collaborator_form" class="grid gap-5 lg:gap-7.5">
                                                                        <input type="hidden" name="action" value="update-collaborator">
                                                                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($collaborator['id']); ?>">

                                                                        <div class="flex flex-col gap-2" style="padding: 10px;">
                                                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                                                        Nội dung <span class="text-destructive">*</span>
                                                                                </label>
                                                                                <textarea name="content" id="content_editor" style="visibility: hidden; position: absolute;"><?php echo isset($_SESSION['old_data']['content']) ? htmlspecialchars($_SESSION['old_data']['content']) : htmlspecialchars($collaborator['content']); ?></textarea>
                                                                        </div>

                                                                        <div class="flex flex-col gap-2" style="padding: 0 10px;">
                                                                                <label class="kt-form-label text-mono font-semibold text-sm">
                                                                                        Trạng thái <span class="text-destructive">*</span>
                                                                                </label>
                                                                                <select name="status" class="kt-select" data-kt-select="true">
                                                                                        <option value="">Chọn trạng thái</option>
                                                                                        <option value="active" <?php
                                                                                                                $status = isset($_SESSION['old_data']['status']) ? $_SESSION['old_data']['status'] : $collaborator['status'];
                                                                                                                echo ($status === 'active') ? 'selected' : '';
                                                                                                                ?>>Hoạt động</option>
                                                                                        <option value="inactive" <?php echo ($status === 'inactive') ? 'selected' : ''; ?>>Không hoạt động</option>
                                                                                </select>
                                                                        </div>

                                                                        <div class="flex items-center gap-2.5 justify-end" style="padding: 0 10px 10px 10px;">
                                                                                <a href="?act=collaborators" class="kt-btn kt-btn-outline">Hủy</a>
                                                                                <button type="submit" class="kt-btn kt-btn-primary">Cập nhật</button>
                                                                        </div>
                                                                </form>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

        <script src="../dist/assets/js/core.bundle.js"></script>
        <script src="../dist/assets/vendors/ktui/ktui.min.js"></script>
        <script>
                // Initialize CKEditor
                ClassicEditor
                        .create(document.querySelector('#content_editor'), {
                                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|', 'blockQuote', 'insertTable', '|', 'undo', 'redo']
                        })
                        .then(editor => {
                                window.editor = editor;
                        })
                        .catch(error => {
                                console.error('Error initializing CKEditor:', error);
                        });

                // Form validation and submit handler
                document.getElementById('edit_collaborator_form').addEventListener('submit', function(e) {
                        let isValid = true;
                        let errorMessage = '';

                        // Validate CKEditor content
                        if (window.editor) {
                                const editorData = window.editor.getData();
                                const textContent = editorData.replace(/<[^>]*>/g, '').trim();

                                if (!textContent) {
                                        isValid = false;
                                        errorMessage = 'Vui lòng nhập nội dung';
                                } else {
                                        // Update hidden textarea with editor content
                                        document.getElementById('content_editor').value = editorData;
                                }
                        } else {
                                // Fallback if editor not initialized
                                const textarea = document.getElementById('content_editor');
                                if (!textarea.value.trim()) {
                                        isValid = false;
                                        errorMessage = 'Vui lòng nhập nội dung';
                                }
                        }

                        // Validate status
                        const statusSelect = document.querySelector('select[name="status"]');
                        if (!statusSelect || !statusSelect.value) {
                                isValid = false;
                                if (errorMessage) {
                                        errorMessage += ' và chọn trạng thái';
                                } else {
                                        errorMessage = 'Vui lòng chọn trạng thái';
                                }
                        }

                        if (!isValid) {
                                e.preventDefault();
                                alert(errorMessage);
                                return false;
                        }
                });
        </script>
</body>

</html>