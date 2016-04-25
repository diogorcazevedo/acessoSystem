@if(Session::has('success'))
    <div style="margin-top: 2%; margin-bottom: 2%;" class="col-sm-12 padding-right">
        <h4 class="alert alert-success">{{Session::get('success')}}</h4>
    </div>
    {{Session::forget('success')}}
@endif