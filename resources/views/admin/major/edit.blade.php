
@extends('master')
@section('content')		
@component('components.breadcrumb')                
    @slot('title') Edit Major @endslot
    @slot('li_1') Major @endslot
    @slot('li_2') Edit Major @endslot
@endcomponent	

<div class="row">
	<div class="col-sm-12">
	
		<div class="card">
			<div class="card-body">
			<form action="{{ route('admin.major.update', ['id' => $majors->major_id]) }}" method="POST">
				@csrf
					<div class="row">
						<div class="col-12">
							<h5 class="form-title"><span>Major Information</span></h5>
						</div>
						<!-- <div class="col-12 col-sm-4">  
							<div class="form-group local-forms">
								<label>Major ID <span class="login-danger">*</span></label>
								<input type="text" name="major_id" class="form-control" disabled="disabled" value="{{ old('majors', $majors->major_id) }}">
							</div>
						</div> -->
						<div class="col-12 col-sm-4">  
							<div class="form-group local-forms">
								<label>Major Name <span class="login-danger">*</span></label>
								<input type="text" name="major_name" class="form-control" value="{{ old('majors', $majors->major_name) }}">
							</div>
						</div>

						<div class="col-12 col-sm-4">  
							<div class="form-group local-forms">
								<label>Description <span class="login-danger">*</span></label>
								<input type="text" name="description" class="form-control" value="{{ old('majors', $majors->description) }}">
							</div>
						</div>

						<div class="col-12 col-sm-4">  
							<div class="form-group local-forms">
								<label >Status<span class="login-danger">*</span></label>
								<select class="form-control select" name="status">
									<option>Select Status</option>
									<option value="1" {{ old('status', $majors->status) == 1 ? 'selected' : '' }}>Active</option>
									<option value="2" {{ old('status', $majors->status) == 2 ? 'selected' : '' }}>Block</option>
								</select>
							</div>
						</div>
						
                        
						<div class="col-12">
							<div class="student-submit">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>					
</div>				
@endsection