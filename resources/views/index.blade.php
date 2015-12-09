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
        
        <!-- jquery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        
        <!-- Script to fill the table-->
        <script type="text/javascript">
            (function($){
                
            // to do when the page is loaded
            $(function(){
                   
                   // ajax function to get Json data
                   $.get("/", function(data){
                       // add new row to the end of the table for each element
                       $.each(data, function(index, value){
                           $('table').append('<tr><td>' + index + '</td><td>' + value.name + '</td><td>' + value.phone + '</td></tr>');
                       });
                   },
                   "json");
                   
            });
            })(jQuery);
        </script>
        
        <style>
            table {
                width: 400px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Table</h1>
            <table class="table-bordered">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone number</th>
                </tr>
            </table>
        </div>
    </body>
</html>
