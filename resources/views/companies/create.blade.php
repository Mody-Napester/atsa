<form method="post" action="{{ route('companies.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label class="" for="name">Name</label>
                <input id="name" type="text" autocomplete="off" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="" for="email">Email</label>
                <input type="email" id="email" autocomplete="off" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required/>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="" for="phone">Phone</label>
                <input id="phone" type="text" autocomplete="off" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required>

                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="" for="website">Website</label>
                <input id="website" type="text" autocomplete="off" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}" name="website" value="{{ old('website') }}" required>

                @if ($errors->has('website'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('website') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="" for="address">Address</label>
                <input id="address" type="text" autocomplete="off" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required>

                @if ($errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label class="" for="comments">Comments</label>
                <input id="comments" type="text" autocomplete="off" class="form-control{{ $errors->has('comments') ? ' is-invalid' : '' }}" name="comments" value="{{ old('comments') }}" required>

                @if ($errors->has('comments'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('comments') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </div>

    <div class="form-group m-b-0">
        <div>
            <button type="submit" class="btn btn-primary waves-effect waves-light">
                <i class="fa fa-fw fa-save"></i> Save
            </button>
        </div>
    </div>
</form>