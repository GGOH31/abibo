@if ($errors->any())

 
        @foreach ($errors->all() as $error)
            
        <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between align-items-center">
            {{ $error }}
            <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        @endforeach
       
@endif 
@if(session()->get('success'))
<div class="alert  alert-success alert-dismissible fade show d-flex justify-content-between align-items-center" role="alert">
    <span class="badge badge-pill badge-success">Success</span>

        {{session()->get('success')}}
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
</div>
@endif