@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none; border: none; position: absolute; top: 0; right: 0; padding: 0.75rem 1rem; line-height: 1; opacity: .5;">
            <span aria-hidden="true" style="font-size: 1.5rem;">&times;</span>
        </button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none; border: none; position: absolute; top: 0; right: 0; padding: 0.75rem 1rem; line-height: 1; opacity: .5;">
            <span aria-hidden="true" style="font-size: 1.5rem;">&times;</span>
        </button>
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
        {{ session('warning') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none; border: none; position: absolute; top: 0; right: 0; padding: 0.75rem 1rem; line-height: 1; opacity: .5;">
            <span aria-hidden="true" style="font-size: 1.5rem;">&times;</span>
        </button>
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info alert-dismissible fade show mb-3" role="alert">
        {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: none; border: none; position: absolute; top: 0; right: 0; padding: 0.75rem 1rem; line-height: 1; opacity: .5;">
            <span aria-hidden="true" style="font-size: 1.5rem;">&times;</span>
        </button>
    </div>
@endif
