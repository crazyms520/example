<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(function(){
               $('.counter').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');
                  
                    $({ countNum: $this.text()}).animate({countNum: countTo},
                        {
                            duration: 100000,
                            easing:'swing',//swing
                            step: function() {
                                $this.text(Math.floor(this.countNum*100)/100);
                            },
                            complete: function() 
                            {
                                $this.text(Math.floor(this.countNum*100)/100);
                            }
                    });  
                });
            })
        </script>    
    </head>
    <body>
        <div class="counter" data-count=1000.00>0</div>
    </body>
</html>