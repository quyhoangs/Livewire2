1.Cài đặt Livewire2
    • composer require livewire/livewire
    • php artisan make:livewire hello-word
+Lệnh trên tạo ra 2 File
    hello-word.blade.php
    HelloWord.php
    ...
        @livewireStyles
    </head>
    <body>
        ...
        <livewire:hello-word />

        @livewireScripts
    </body>
    </html>
----------------------------------------------------------------------------
2.DataBinding
Livewire có thể "liên kết" (hoặc "đồng bộ hóa") giá trị hiện tại của một số phần tử HTML với một thuộc tính cụ thể trong thành phần của bạn.
Khi người dùng nhập nội dung nào đó vào trường văn bản, giá trị của property sẽ tự động cập nhật

Bên trong, Livewire sẽ lắng nghe event trên phần tử và khi được kích hoạt, nó sẽ gửi một yêu cầu AJAX để hiển thị lại thành phần với dữ liệu input mới

• multiple Trong thẻ Select cho phép chọn nhiều option
Bên component cần khai báo biến greeting là 1 mảng đề chứa các giá trị đó
