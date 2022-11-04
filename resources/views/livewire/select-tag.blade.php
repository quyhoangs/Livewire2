<div> <br><br><br>

    <div> Chọn size của bạn
        <select wire:model="size">
            <option disabled>Select a size</option>
            <option value="N">None</option>
            <option value="M" >Medium</option>
            <option value="L">Large</option>
            <option value="XL">Big Large</option>
        </select>
        <br>  Size bạn chọn :  @json($size)
    </div><br><br>

    <div>Chọn FrameWork PHP bạn thích
        <select  wire:model="frameworkPHP" multiple>
            <option value="Magento">Magento</option>
            <option value="Laravel">Laravel</option>
            <option value="CakePHP" >CakePHP</option>
            <option value="Codeigniter" >Codeigniter</option>
        </select>
        <br> FrameWork PHP bạn chọn :  @json($frameworkPHP)
    </div>

</div><br><br><br><br><br><br>
