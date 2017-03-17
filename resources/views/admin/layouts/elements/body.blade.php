@component('admin.layouts.default')
    <h3>{{ $title  }} <small>{{ $description }}</small></h3>

    <div class="panel panel-default">
        <div class="panel-body">
            {{ $slot }}
        </div>
    </div>
@endcomponent