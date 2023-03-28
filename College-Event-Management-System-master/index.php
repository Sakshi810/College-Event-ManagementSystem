<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Event Management</title>
        <?php require 'utils/styles.php';?>
      
        
    
            </head>
    <body>
        <?php require 'utils/header.php'; ?>  <!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><strong>  Register your Favourite events:</strong></h1><!--body content title-->

            </div>
            
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <div class="row"><!--technical content-->
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <center><img src="images/tech.jpg" class="img-responsive"></center>
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                        
                            <h1 style="color:#003300 ; font-size:38px ;" ><u><strong>Technical Events</strong></u></h1><!--title-->
                            <p><!--content-->
                                <H5>Embrace your technical skills by participating in our different technical events.</H5>
                            </p>
                            
                            <br><br>
                        <?php $id=1;
                        echo
                             '<a class="btn btn-default"  href="viewEvent.php?id='.$id.'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Technical Events</a>'
                        ?>
                             </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <center> <img src="images/cultural.jpg" style="width:250px;height:250px;" class="img-responsive" ></center>
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Cultural Events</u></strong></h1><!--title-->
                            <p><!--content-->
                                <H5> Unity in diversity is a cultural heritage.</H5>
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=2;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Cultural Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                            <center> <img src="images/sports.jpeg" class="img-responsive"></center>
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Sports Events</strong></u></h1><!--title-->
                            <p><!--content-->
                                <H5>Best in the field... We make champions here.</H5>
                            </p>
                            
                            <br><br>
                            <?php 
                            $id=3;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Sports Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row">
                <section>
                    <div class="container">
                        <div class="col-md-6"><!--image holder with 6 grid columns-->
                           <center> <img src="images/yash.jpeg" style="width:250px;height:250px;" class="img-responsive"></center>
                        </div>
                        <div class="subcontent col-md-6"><!--Text holder with 6 column grid-->
                            <h1 style="color:#003300 ; font-size:38px ;"><strong><u>Innovation and Discovery </u></strong></h1><!--title-->
                            <p><!--content-->
                            <h5>Fostering entreprenurial spirit.</h5>
                            </p>
                            
                            
                            <br><br><br>
                            <?php 
                            $id=4;
                            echo
                             '<a class="btn btn-default" href="viewEvent.php?id='.$id .'"> <span class="glyphicon glyphicon-circle-arrow-right"></span>View Innovation and Discovery Events</a>'
                        ?>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
        </div><!--body content div-->
  
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>