
<div class="panel panel-success">

    <div class="panel-heading">
        My Articles
    </div>

    <div class="panel-body">

        <table class="table table-bordered table-striped">
            <tr>
                <th>Article Title</th>
                <th>Created On</th>
                <th>Action</th>
            </tr>


            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>

                        <a class="btn btn-info btn-xs" href="#">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>

                        &nbsp;

                        <a class="btn btn-success btn-xs" href="#">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                    </td>
                </tr>
            @endforeach

        </table>

    </div>


</div>