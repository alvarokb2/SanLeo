@if(Session::has('message'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ Session::get('message') }}
    </div>
@endif
@if(Session::has('info'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ Session::get('info') }}
    </div>
@endif
@if(Session::has('message_edit'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
        {{ Session::get('message_edit') }}
    </div>
@endif