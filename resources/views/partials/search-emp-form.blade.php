<div class="row">
    <div class="col-sm-8 offset-sm-4 col-md-6 offset-md-6 col-lg-5 offset-lg-7 col-xl-4 offset-xl-8">
        {!! Form::open(['route' => 'search-emp', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation', 'id' => 'search_emp']) !!}
            {!! csrf_field() !!}
            <div class="input-group mb-3">
                {!! Form::text('emp_search_box', NULL, ['id' => 'emp_search_box', 'class' => 'form-control', 'placeholder' => trans('usersmanagement.search.search-emp-ph'), 'aria-label' => trans('usersmanagement.search.search-emp-ph'), 'required' => false]) !!}
                <div class="input-group-append">
                    <a href="#" class="input-group-addon btn btn-warning clear-search" data-toggle="tooltip" title="{{ trans('usersmanagement.tooltips.clear-emp') }}" style="display:none;">
                        <i class="fa fa-fw fa-times" aria-hidden="true"></i>
                        <span class="sr-only">
                            {!! trans('usersmanagement.tooltips.clear-emp') !!}
                        </span>
                    </a>
                    <a href="#" class="input-group-addon btn btn-secondary" id="search_trigger" data-toggle="tooltip" data-placement="bottom" title="{{ trans('usersmanagement.tooltips.submit-emp') }}" >
                        <i class="fa fa-search fa-fw" aria-hidden="true"></i>
                        <span class="sr-only">
                            {!!  trans('usersmanagement.tooltips.submit-emp') !!}
                        </span>
                    </a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
</div>
