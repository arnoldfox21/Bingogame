<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url('asset/css/materialize.css') ?>">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<div style="height: 50px">
	
</div>
<div class="container">
	<div class="row">
		<div class="col m10">
			
			<div class="col m1">
			<?php 
			$count = 0;
			foreach($data as $data) {
				$count++;
				if ($count == 6|$count == 11|$count == 16|$count == 21)
					    {  
					         echo '</div><div class="col m1">';
					    }
			
			?>
			<button class="waves-effect waves-light btn-large bingo" id="bingo"><?php echo $data->id; ?></button>
			<?php } ?>
			</div>

	
			
	</div>


</div>

<a href="<?php echo base_url() ?>" class="waves-effect waves-light btn-large z-depth-1">Start over</a>
 
 <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel green lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
               <h1>Bingo game</h1>
              </span>
            </div>
          </div>
        </div>
      </div>


      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url('asset/js/materialize.min.js') ?>"></script>
      <script type="text/javascript">
      	$( document ).ready(function() {
	      	var warna = ['green', 'blue', 'yellow', 'cyan', 'orange', 'black', 'red', 'purple', 'grey', 'pink'];
	      	
	      	var rand = warna[Math.floor(Math.random() * warna.length)];
			    $(".bingo").click(function (e) {
				$(this).addClass(rand).siblings();
				$(this).attr('disabled','disabled');
				return rand = warna[Math.floor(Math.random() * warna.length)];
			});
			var co = document.getElementById('bingo');
			function setbingo(thisbingo) {
				var currSquare = "square" + thisbingo;
				var colPlace = new Array(0,0,0,0,0,1,1,1,1,1,2,2,2,2,3,3,3,3,3,4,4,4,4,4);
				var colBasis = colPlace[thisbingo] * 15;
				var newNum;

				do {
					newNum = colBasis + getNewNum() + 1;
				}
				while (usedNums[newNum]);
			    usedNums[newNum] = true;
			    document.getElementById(currSquare).innerHTML = newNum;
			    document.getElementById(currSquare).className = "";
			    document.getElementById(currSquare).onmousedown = toggleColor;
			}
	    });

      </script>

</body>
</html>
