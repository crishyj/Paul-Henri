<?php
    require('config.php');
?>


    <!DOCTYPE html>
    <html>

    <head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="payment">
            <div class="container">              
                <div class="payment_page">
                    <div class="logo">
                        <a class="" href="#">
                            <img src="logo.png" alt="">
                        </a>
                    </div>
                    <div>
                        <select class="selectpicker translate" data-width="fit">
                            <option  data-content='<span class="flag-icon flag-icon-us"></span> English' value="en">English</option>
                            <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español' value="es">Español</option>
                            <option  data-content='<span class="flag-icon flag-icon-fr"></span> France' value="fr">French</option>
                            <option  data-content='<span class="flag-icon flag-icon-cn"></span> Chinese' value="cn">Chinese</option>
                        </select>
                    </div>

                    <h2 class="lang" key="payment"></h2>
                    <p class="lang" key="payment_text"></p>
                    <div class="cost_box">
                        <div><span class= "lang" key = "cost1"></span> <span class="cost"></span>&euro;</div>
                        <div> <span class="lang" key = "cost2"></span> </div>
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">                               
                                <span class="lang" key = "credit_card"> </span>
                                </a>
                            </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                <form action="action.php" method="post" class="payment_form">                                    
                                    <input type="hidden" name="boitier" class="boitier">
                                    <input type="hidden" name="email1" class="email1">
                                     <input type="hidden" name="diff" class="diff">
                                    <div class="row">
                                        
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="card_num" class="lang" key="card_num"></label>
                                                <input type="text" name="card_num" class="form-control" required placeholder="1111-2222-3333">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exp_date" class="lang" key="exp_date"></label>
                                                <div class="input-group date1" data-date-format="yyyy-mm-dd">
                                                    <input type="text" class="form-control" id="exp_date" data-date="02-2012" data-date-format="mm-yyyy"name="exp_date" required>
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-th"></span>
                                                    </div>
                                                </div>
                                                    
                                                <!--<input class="form-control" type="date" vlue="" id="example-date-input" name="exp_date" placehoder="">-->
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="card_name" class="lang" key="card_name"></label>
                                                <input type="text" name="card_name" class="form-control" placeholder="John More Doe" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="cv" class="lang" key="cv"></label>
                                                <input type="text" name="cv" class="form-control" placeholder="352" required>
                                            </div>
                                        </div>
                                        <dvi class="col-md-4">
                                            <button class="btn btn-success lang" key="submit"></button>
                                        </dvi>
                                    </div>
                                
                                </form>   
                                <div class="icon-container">
                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="lang" key = "Alipay"> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="lang" key = "TenPay"> </span>                          
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                            
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/js/bootstrap-select.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/js/bootstrap-datepicker.min.js"></script>
        <script src="lang.js"></script>
        <script src="main.js"></script>
        <script>
           

        </script>
    </body>

    </html>