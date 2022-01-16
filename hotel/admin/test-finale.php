<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    header('location: test-prezzo5.php');
    exit;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PRENOTAZIONE HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        
       
        
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header" style="color:blue;">
                            Grazie <span style="color:red;"><?php echo $_SESSION['name']; ?></span> per la prenotazione!Qua sotto trovera i suoi dati! 
A breve le arrivera' un email all' indirizzo <span style="color:red;"><?php echo $_SESSION['email']; ?></span> <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            INFORMAZIONI PERSONALI
                        </div>
                        <div class="panel-body">
						
                            
					
							  <div class="form-group">
                                            <label class="form">Nome:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['name']; ?>" style="border-color:transparent; color:blue;"/></div>
							   <div class="form-group">
                                            <label class="form">Cognome:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['surname']; ?>" style="border-color:transparent; color:blue;"/>
                               </div>
							   <div class="form-group">
                                            <label class="form">Telefono:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['phone']; ?>" style="border-color:transparent; color:blue;"/>
                               </div>
							   <div class="form-group">
                                            <label class="form">Data di nascita:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['dob']; ?>" style="border-color:transparent; color:blue;"/>
                               </div>
					<div class="form-group">
                                            <label class="form">Total:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['total']; ?>" style="border-color:transparent; color:blue;"/>
                               </div>
					
                        </div>
                    
					
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            INFORMAZIONI SULLA PRENOTAZIONE
                        </div>
                        <div class="panel-body">
								<table style="width:100%;">
								<tr>
								<td>
								<div class="form-group">
                                            <label class="form">Data check-in:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['cin']; ?>" style="border-color:transparent; color:blue;"/>
											
                                            
                               </div>
							   <div class="form-group">
                                            <label class="form">Data check-out:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['cout']; ?>" style="border-color:transparent; color:blue;"/>
                                            
                               </div>
							   
							   <div class="form-group">
                                            <label class="form">Numero stanze:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['nroom']; ?>" style="border-color:transparent; color:blue;"/>
                                            
                               </div>
							   
							   <div class="form-group">
                                            <label class="form">Tipo camera:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['troom']; ?>" style="border-color:transparent; color:blue;"/>
                                            
                               </div>
							   
							   <div class="form-group">
                                            <label class="form">Letto:</label>
		<input type="text" readonly="readonly" class="textbox" value="<?php echo $_SESSION['bed']; ?>" style="border-color:transparent; color:blue;"/>
                                            
                               </div>
							   </td>
							   
							   <td style="vertical-align:top;">
								<address>
Ti aspettiamo a:<br>
Parco OnePiece<br>
Via Naruto, Bleach<br>
Mercenate
</address>

					<img src="http://www.niroinformatica.it/wp-content/uploads/2017/01/47205990-hotel-images.jpg" alt="Hotel qua" width="300px" height="150px">


							   </td>
							   
							   </tr>
                              
							</table>  
                       </div>
                        
                    </div>
                </div>
				<br></br>
				<div id="button" style="display:block; margin: 0 auto; text-align:center; padding-right:200px;">
					<input type="button" style="width:100px; height:50px; background-color:#5DADEC;" value="Print" onClick="window.print()">
					</div>
<!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    

</body>
</html>
				
				
                