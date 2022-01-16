<?php                   
ob_start();           //Funzione in php per assicurarsi il funzionamento di header(Location: )
include('db.php')
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
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            PRENOTAZIONE <small></small>
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
						<form name="form" method="post">
                            
					
							  <div class="form-group">
                                            <label>Nome <sup>*</sup></label>
                                            <input name="fname" class="form-control" required placeholder="Inserisci nome"
    oninvalid="this.setCustomValidity('Hai dimenticato di inserire il nome')"
    oninput="setCustomValidity('')"  />
                               </div>
							   <div class="form-group">
                                            <label>Cognome <sup>*</sup></label>
                                            <input name="lname" class="form-control" required placeholder="Inserisci cognome"
    oninvalid="this.setCustomValidity('Hai dimenticato di inserire il cognome')"
    oninput="setCustomValidity('')"  />
                               </div>
							   <div class="form-group">
                                            <label>Email <sup>*</sup></label>
                                            <input name="email" type="email" class="form-control" required placeholder="Inserisci Email"
    oninvalid="this.setCustomValidity('Hai dimenticato di inserire l'email')"
    oninput="setCustomValidity('')"  />
                               </div>
							   
					
								<div class="form-group">
                                            <label>Cell <sup>*</sup></label>
                                            <input name="phone" type ="text" class="form-control" required placeholder="Inserisci il numero di cell"
    oninvalid="this.setCustomValidity('Hai dimenticato di inserire il cell')"
    oninput="setCustomValidity('')"  />
                                            
                               </div>
							   
							   <div class="form-group">
                                            <label>Data di nascita <sup>*</sup></label>
                                            <input name="dob" type ="date" id="dob_date" class="form-control"  max="1999-12-31" min="1917-01-01" required placeholder="Inserisci la data di nascita"
    oninvalid="this.setCustomValidity('Hai dimenticato di inserire la data di nascita')"
    oninput="setCustomValidity('')"  />
											
                                            
                               </div>
							   
							   <div id="suite1" style="display:none;">
							   <table style="width:100%">
						<tr>
						<td>
						<ul>
							<li>Servizio Wi-Fi</li>
							<li>Colazione</li>
							<li>Free-Tax</li>
							<li>Camera dottata di TV Satellitare</li>
						</ul>
						</td>
						</tr>
					
				
				<tr>
					<td>
					
					<img src="http://www.marinabaysands.com/content/dam/singapore/marinabaysands/master/main/home/hotel/rooms-suites/hotel-rooms-banner-920x340.jpg" alt="image here" width="300px" height="235px">
					</div>
					</td></tr></table></div>
					
					<div id="deluxe1" style="display:none;">
					<table style="width:100%">
						<tr>
						<td>
						<ul>
							<li>INSERISCI SERVIZI</li>
							<li>INSERISCI SERVIZI</li>
							<li>INSERISCI SERVIZI</li>
							<li>INSERISCI SERVIZI</li>
						</ul>
						</td>
						</tr>
					
				
				<tr>
					<td>
					
					<img src="http://d11kdcggr4h8di.cloudfront.net/wp-content/uploads/sites/29/2016/02/28172402/content_13155_1.jpg" alt="image here" width="300px" height="235px">
					</td></tr></table></div>
					
					<div id="standart1" style="display:none;">
					<table style="width:100%">
						<tr>
						<td>
						<ul>
							<li>INSERISCI SERVIZI</li>
							<li>INSERISCI SERVIZI</li>
							<li>INSERISCI SERVIZI</li>
							<li>INSERISCI SERVIZI</li>
						</ul>
						</td>
						</tr>
					
				
				<tr>
					<td>
					
					<img src="https://www.tivolihotel.com/uploads/tx_templavoila/Standard_double_carpet_harbour.jpg" alt="image here" width="300px" height="235px">
					
					</td></tr></table></div>
					
					
					
                        </div>
                    
					
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            DETTAGLI SULLA PRENOTAZIONE
                        </div>
                        <div class="panel-body">
								
								<div class="form-group">
                                            <label>Check-In <sup>*</sup></label>
                                            <input name="cin" type ="date" id="pick_date" class="form-control" value="<?php echo date('Y-m-d') ;?>" min="<?php echo date('Y-m-d') ;?>" required onchange="cal()">
											
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out <sup>*</sup></label>
                                            <input name="cout" type ="date" id="drop_date" class="form-control" value="<?php echo date("Y-m-d", strtotime("+ 1 day")) ;?>" required min="<?php echo date("Y-m-d", strtotime("+ 1 day")) ;?>" onchange="cal()">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Tipologia Camera <sup>*</sup></label>
                                            <select name="troom"  id="troom" class="form-control" required onchange="totalCam()">
												<option value selected ></option>
                                                <option value="Guest House">GUEST HOUSE   [30€/notte]</option>
                                                <option value="Superior Room">SUPERIOR ROOM   [50€/notte]</option>
                                                <option value="Deluxe Room">DELUXE ROOM   [100€/notte]</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Tipo letto <sup>*</sup></label>
                                            <select name="bed" class="form-control" required >
												<option value selected ></option>
                                                <option value="Single">Singolo</option>
                                                <option value="Double">Matrimoniale</option>
												
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Nr. di camere <sup>*</sup></label>
                                            <select name="nroom" class="form-control" required onchange="getRooms()">
												<option value selected ></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
												<option value="3">3</option>
											
                                            </select>
                              </div>
							 
							 <label>
            
		
				
											<label>
            Prezzo camera: 
            <input value="€0.00" readonly="readonly" type="text" id="total" style="border-color:transparent;"/>
        </label>
											
											<label>
          
		
		<label class="form">Numero giorni:
		<input value="1" type="text" readonly="readonly" class="textbox" id="numdays2" name="numdays" style="border-color:transparent;"/>
		</label>
		
		<label class="form">Numero stanze:
		<input value="0" type="text" readonly="readonly" class="textbox" id="dhomatlol" name="numdayss" style="border-color:transparent;"/>
		</label>

		<label class="form">
            Prezzo finale: 
            <input name="total" value="€0.00" readonly="readonly" type="text" id="totalfare" style="border-color:transparent; width:45px; background-color:#A7F432;"/></label>
											<br></br>
											
											<div class="form-group">
											<label>Qualcosa da aggiungere</label>
											
											<textarea class="form-control" name="comments" rows="3" style="width:300px; height:100px;"></textarea>
										</div>
										
										<h3>Verificazione</h3>
                        <p>Inserisci il codice <?php $Random_code=rand(); echo $Random_code; ?> </p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
                              </div>
							  
                       </div>
                        
                    </div>
                </div>
				
				
                
						<?php
						session_start();
						
							if(isset($_POST['submit']))
							{
								$_SESSION['name'] = $_POST['fname'];
								$_SESSION['surname'] = $_POST['lname'];
								$_SESSION['email'] = $_POST['email'];
								$_SESSION['phone'] = $_POST['phone'];
								$_SESSION['cin'] = $_POST['cin'];
								$_SESSION['cout'] = $_POST['cout'];
								$_SESSION['troom'] = $_POST['troom'];
								$_SESSION['nroom'] = $_POST['nroom'];
								$_SESSION['bed'] = $_POST['bed'];
								$_SESSION['dob'] = $_POST['dob'];
								$_SESSION['total'] = $_POST['total'];
		
	
	
	
	
								$today = $_POST['cin'];    //salvando il check-in nella variabile today
								$expire = $_POST['cout']; //salvando il check-out nella variabile expire

								$today_time = strtotime($today);   //convertendo il check-in e check-out in numeri usando la funzione strtotime 
								$expire_time = strtotime($expire); // per poi salvarli nelle variabili today_time e expire_time

								if ($expire_time < $today_time) {    //controllo se il check-out e piu piccolo di check-in
									$msg="Checkout smaller than check in "; 
									echo "<script type='text/javascript'> alert('Check-out must be later then check-in')</script>";
									return;
								}
								
							$code1=$_POST['code1'];   //captcha check
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{
							
									$con=mysqli_connect("localhost","id3747614_root","noidea11","id3747614_hotel");
									$check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									$rs = mysqli_query($con,$check);
									$data = mysqli_fetch_array($rs, MYSQLI_NUM);
									if($data[0] > 1) {
										echo "<script type='text/javascript'> alert('Utente gia' esistente nel database')</script>";
										
									}

									else
									{
										$new ="Prenotato";
										$newUser="INSERT INTO `roombook`(`FName`, `LName`, `Email`, `Phone`,`DoB`, `TRoom`, `Bed`, `NRoom`, `cin`, `cout`,`stat`,`nodays`, `Total`) VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[dob]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'), '$_POST[total]')";
										if (mysqli_query($con,$newUser))
										{
											$to = "shadow-pc@live.it"; // questa e' l'email del hotel
    $from = $_POST['email']; // questa sarebbe l'email dell'utente
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $cell = $_POST['phone'];
	$dob = $_POST['dob'];
	$cin = $_POST['cin'];
	$cout = $_POST['cout'];
	$total = $_POST['total'];
	$nroom = $_POST['nroom'];
	$troom = $_POST['troom'];
    $subject = "Prenotazione Hotel Vertigo";
    $subject2 = "Copia della prenotazione";
	$message = "E' stata appena fatta una prenotazione con i seguenti dati: " . "\n" . "Nome:" . $first_name . "\nCognome: " . $last_name . "\nEmail: " . $from . "\nCell: " . $cell . "\nData di nascita: " . $dob . "\nCheck-In: " . $cin . "\nCheck-out: " . $cout . "\nNumero camere: " . $nroom . "\nTipo camera: " . $troom . "\nPrezzo: " . $total . $_POST['message'];    $message2 = "Here is a copy of your message my nigga " . $first_name . "\n\n" . $_POST['message'];
    $message2 = "Hai appena effettuato una prenotazione con i seguenti dati: " . "\n" . "Nome:" . $first_name . "\nCognome: " . $last_name . "\nEmail: " . $from . "\nCell: " . $cell . "\nData di nascita: " . $dob . "\nCheck-In: " . $cin . "\nCheck-out: " . $cout . "\nNumero camere: " . $nroom . "\nTipo camera: " . $troom . "\nPrezzo: " . $total . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // per mandare una copia del messaggio all'utente 
    echo "Email mandato. Grazie " . $first_name . ", la contatteremo appena possibile.";
										//	echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
											header('Location: test-finale.php');
											exit();
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}

							$msg="Your code is correct";
							}
							
							}
							
							?>
						</form>
							
                    </div>
					
                </div>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
	<script>
	var totali =0;
	function totalCam() {
  var input = document.getElementsByName("troom");
  var total = 0;
  
      
  for (var i = 0; i < input.length; i++) {
    if(input[i].tagName == 'SELECT'){
      if(input[i].value =='Superior Room') {totali = 50;
	  document.getElementById("suite1").style.removeProperty( 'display' );
	  document.getElementById("standart1").style.display = 'none';
	  document.getElementById("deluxe1").style.display = 'none';}
      else if(input[i].value =='Guest House') {totali = 30;
	  document.getElementById("standart1").style.removeProperty( 'display' );
	  document.getElementById("suite1").style.display = 'none';
	  document.getElementById("deluxe1").style.display = 'none';}
	  else {totali = 100;
	  document.getElementById("deluxe1").style.removeProperty( 'display' );
	  document.getElementById("standart1").style.display = 'none';
	  document.getElementById("suite1").style.display = 'none';}
    }
    if (input[i].checked) {
      totali += parseFloat(input[i].value);
    }
  }
      
  document.getElementById("total").value = "€" + totali.toFixed(2);
  document.getElementById("totalfare").value = "€" + totali.toFixed(2) * GetGiorni() * rooms;
}

var rooms =0;
function getRooms() {
  var input = document.getElementsByName("nroom");
  var dhomatlol = 0;
  
  for (var i = 0; i < input.length; i++) {
    if(input[i].tagName == 'SELECT'){
      if(input[i].value =='1') {rooms = 1;}
      else if(input[i].value =='2') {rooms = 2;}
	  else {rooms = 3; }
  }
  } 
  document.getElementById("dhomatlol").value = rooms;
  document.getElementById("totalfare").value = "€" + totali.toFixed(2) * GetGiorni() * rooms;
}





        function GetGiorni(){
                var dropdt = new Date(document.getElementById("drop_date").value);
                var pickdt = new Date(document.getElementById("pick_date").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
				
        }

        function cal(){
        if(document.getElementById("drop_date")){
            document.getElementById("numdays2").value=GetGiorni();
			document.getElementById("totalfare").value = "€" + totali.toFixed(2) * GetGiorni() * rooms;
        }  
    }
	
	
	


</script>
		
		
    

    </script>
	
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

