<html>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
   <script>
        $(document).ready(function(){
            $("input").keyup(function(){
                var name = $('input').val();
                $.post("suggestion.php",{
                    suggestion : name
                },function(data, status){
                    $('#test').html(data);
                });
                });
            });
        
   </script>
    </head>
    <body>
        <input type="text" name="name">
        <p id="test"></p>
    </body>
</html>