<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Table</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://bootswatch.com/united/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        <style>
            table {
                width: 600px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Table</h1>
            <table class="table-bordered">
                <tr>
                    <td>{{ $cell1 }}</td>
                    <td>{{ $cell2 }}</td>
                </tr>
                <tr>
                    <td>{{ $cell3 }}</td>
                    <td>{{ $cell4 }}</td>
                </tr>
            </table>
        </div>
    </body>
</html>
