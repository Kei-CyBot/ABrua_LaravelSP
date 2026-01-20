@props(['type', 'href'])

@php
    $onclick = null;

    if($type === 'view') {
        $style = 'background-color: #4a3b2a; border-color: #4a3b2a; color: white;';
        $label = 'View';
    } elseif($type === 'edit') {
        $style = 'background-color: #bc6c25; border-color: #bc6c25; color: white;';
        $label = 'Edit';
    } elseif($type === 'delete') {
        $style = 'background-color: #bc4749; border-color: #bc4749; color: white;';
        $label = 'Delete';
        $onclick = "return confirm('Are you sure you want to delete this student?');";
    }
@endphp

<a href="{{ $href }}" 
   class="btn btn-sm mx-1" 
   style="{{ $style }}"
   @if($onclick) onclick="{{ $onclick }}" @endif
>
    {{ $label }}
</a>