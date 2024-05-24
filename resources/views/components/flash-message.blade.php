@if(session()->has('message'))
<div x-show="open" class="notification is-success" x-data="{open: true}" x-init="setTimeout(() => open = false, 3000)">
    <button class="delete" @click="open = false"></button>
    {{session('message')}}
</div>
@endif