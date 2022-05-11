@if(session()->has('message'))
    <span x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="text-center text-white  toast-msg">
        {{ session('message') }}
    </span>
@endif
