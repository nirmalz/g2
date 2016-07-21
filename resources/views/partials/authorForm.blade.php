<div class="panel panel-default">

    <div class="panel-heading">
        Create Author
    </div>

    <div class="panel-body">

        <form action="{{ url('create-author') }}" class="form-horizontal col-md-12" method="post">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="name">Name</label>
                <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                <span>{{ $errors->first('name') }}</span>

            </div>

            <div class="form-group">

                <label for="email">Email</label>
                <input name="email" type="text" class="form-control" value="{{ old('email') }}">
                <span>{{ $errors->first('email') }}</span>

            </div>

            <div class="form-group">

                <label for="name">Password</label>
                <input name="password" type="password" class="form-control" value="{{ old('password') }}">
                <span>{{ $errors->first('password') }}</span>

            </div>

            <div class="form-group">

                <label for="name">Retype Passwrod</label>
                <input name="password_confirmation" type="text" class="form-control" value="{{ old('name') }}">

            </div>

            <div class="form-group">

                <input name="name" type="submit" class="btn btn-primary" value="Create Author">

            </div>

        </form>

    </div>

</div>