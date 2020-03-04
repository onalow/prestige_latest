<div class="modal fade" id="edit-plan{{$plan->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Plan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="{{ route('admin.edit.plan', $plan->id)}}">
					@csrf
					
					<div class="row">
						<div class="form-group col-md-6">
						<label for="exampleFormControlFile1">Name</label>
						<input type="text" name="name" value="{{$plan->name}}" required class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label for="exampleFormControlFile1">Min Amount</label>
							<input type="number" class="form-control" value="{{$plan->min_amount}}"  name="min_amount" required>
						
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
						<label for="exampleFormControlFile1">Max Amount</label>
						<input type="number" class="form-control" value="{{$plan->max_amount}}"  name="max_amount" required>
					
						</div>
						<div class="form-group col-md-6">
							<label for="exampleFormControlFile1">ROI</label>
							<input type="text" class="form-control"  name="roi" value="{{$plan->roi}}" required>
						
						</div>
				    </div>
					<div class="row">
						<div class="form-group col-md-6">
						<label for="exampleFormControlFile1">Weeks</label>
						<input type="number" class="form-control"  name="weeks" value="{{ $plan->weeks}}" required>
						</div>
						<div class="form-group col-md-6">
							<label for="exampleFormControlFile1">Duration</label>
							<input type="number" class="form-control"  name="duration" value="{{ $plan->duration}}" required>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
						<label for="exampleFormControlFile1">Type</label>
						<select name="type" required class="form-control">
							<option value="crypto" {{$plan->type === 'crypto' ? 'selected' : ''}}>Crypto</option>
							<option value="nfp" {{$plan->type === 'nfp' ? 'selected' : ''}}>NFP</option>
						</select>
					</div>
						<div class="form-group col-md-6">
							<label for="exampleFormControlFile1">Bonus</label>
							<input type="number" class="form-control"  name="bonus" value="{{ $plan->bonus}}" required>
						</div>
					</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" id="submit-button" class="btn btn-primary">Save changes</button>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>