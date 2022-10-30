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
-------------------------------------------
3.Action
•Các cách để Reset 1 Input Name

3.1 Không cần truyền Param

public function resetName(){
    $this->name = 'Tên bạn muốn reset';
}

<button wire:click = "resetName">Reset Name</button>

3.2 Truyền Param
public function resetName($name = 'chicago'){
    $this->name = $name;
}

<form action="#" wire:submit.prevent="resetName('Bingo')" >
    <button>Reset Name</button>
</form>

3.3 Chỉ muốn khi kích vào btn này thì thay đổi 1 thuộc tính khác chứ không cần viết hàm xử lý như sau :
    <form action="#" wire:submit.prevent="$set('name', 'Luis')" >
        <button>Reset Name</button>
    </form>
Bên Component không cần viết gì cả .
