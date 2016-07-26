<div class="panel panel-default">

    <div class="panel-heading">
        Write New article
    </div>

    <div class="panel-body">

        <form action="{{ url('create-article') }}" class="form-horizontal col-md-12" method="post">

            {{ csrf_field() }}

            <div class="form-group">

                <label for="title">Article Title</label>
                <input name="title" type="text" class="form-control" value="{{ old('title') }}">
                <span>{{ $errors->first('title') }}</span>

            </div>

            <div class="form-group">

                <label for="content">Body</label>
                <textarea rows="8" name="content" type="text" class="form-control">{{ old('content') }}</textarea>
                <span>{{ $errors->first('content') }}</span>

            </div>

            <div class="form-group">

                <input name="name" type="submit" class="btn btn-primary" value="Create Article">

            </div>

        </form>

    </div>

</div>