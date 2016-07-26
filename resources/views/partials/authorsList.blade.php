<div class="panel panel-info">

    <div class="panel-heading">
        All Authors
    </div>

    <div class="panel-body">

        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created On</th>
            </tr>

            @foreach($authors as $author)

                <tr>
                    <td>{{ ucfirst($author->name) }}</td>
                    <td>{{ $author->email }}</td>
                    <td>{{ $author->created_at }}</td>
                </tr>

            @endforeach

        </table>

    </div>


</div>