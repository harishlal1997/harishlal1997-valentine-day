<!-- <?php
// include 'config.php';
// error_reporting(0);
// if(isset($_POST['Calculate'])){
// // print_r($_POST);
//     $name1 = $_POST['name1'];
//     $name2 = $_POST['name2'];
//     $relationship = '';


//     $sql = "INSERT INTO `calculator`(`name1`, `name2`, `relationship`)VALUES('".$name1."', '".$name2."', '".$relationship."')";
//     $sq = mysqli_query($conn, $sql);
//         if($sq) {
//             // showpercent();
//             // echo "Success";
//             echo '<script type="text/javascript">showpercent();</script>';
//         } else {
//             echo "Failure";
//         }
// }
    
?> -->
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/Fireworks/jquery.fireworks.js"></script>
        <link rel="stylesheet" type="text/css" href="dist/loading-bar.css"/>
    <script type="text/javascript" src="dist/loading-bar.js"></script>

 <!--    <link rel="stylesheet" type="text/css" href="loading-bar.css"/>
<script type="text/javascript" src="loading-bar.js"></script> -->


    <style>
        .ldBar-label{
            margin-left: 505px;
            margin-bottom: 42px;
            margin-top: -119px; 
        }
    
    	#name1,#name2,#relationship{
    		border-radius: 30px;
    		background-color: #ffffff;
    		color: #000000;
    	}
    	form{
    		background: black;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #000;
    	}
    	.btn{
    		border-radius: 20px;
    	}
    	/*body {
            background-color: #7E57C2;background-image: url('download.jpg');
        }*/
        h2{font-family: 'Love Ya Like A Sister';position: relative;color: #ffffff;font-size: 70px;}
        .mt-100 {
    margin-top: 200px
}

html,
body {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background: red;
}

.glow-on-hover {
    width: 100%;
    height: auto;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: auto;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}

label{
    color: #ffffff;
}

option{
    border-radius: 10px;
}

a{
    color: red;
}

    </style>

    <title>Calculator</title>
	  </head>
	  <body>
		    <div>		    	
			    <form method="post" name="Calculator" id="Calculator">  
                    <h2>Calculator</h2>
                    <div>
        				<div class="form-group">
        				    <label for="name">Enter Name<a style="color: red;">*</a></label>
        				    <input type="text" class="form-control" id="name1" name="name1" placeholder="Enter Name" required>
                        </div>
                        <div class="collapse" id="collapseExample">
                            <label for="name">Enter Name<a style="color: red;">*</a></label>
                            <input type="text" class="form-control" id="name2" name="name2" placeholder="Enter Name" required>
                        </div>
                    </div><br>
                    <!-- <input type="hidden" name="percent" id="percent" value=""> -->
				  <!-- <div class="form-group">
				    <label for="exampleFormControlSelect1">relationship<a style="color: red;">*</a></label>
				    <select class="form-control" id="relationship" name="relationship" required>
				      <option>choose</option>	
				      <option value="1">1</option>
				      <option value="2">2</option>
				      <option value="3">3</option>
				      <option value="4">4</option>
				      <option value="5">5</option>
				    </select>
				  </div><br> -->
<!--                   <div class="ldBar" data-value="50">
                    <div id="myItem1"></div>
<script>
  /* construct manually */
  var bar1 = new ldBar("#myItem1");
  /* ldBar stored in the element */
  var bar2 = document.getElementById('myItem1').ldBar;
  bar1.set(100);
</script>
</div> -->
				  <button class="btn btn-success glow-on-hover" name="Calculate" id="Calculate" type="button"><b style="color: red;font-size: 30;">Calculate!</b></button>
				</form>
			</div><br><br>


<!-- <div class="ldBar" id="myItem1" 
  style="width:80%;height:80%;font-size: 50px;font-weight: bold;",
  data-preset="bubble",
  data-value="0"
></div> -->
       

                  <!-- <div class="ldBar" data-value="50"> -->
                    <!-- <div id=""></div> -->
<!-- <script>
  // var vall = $('#percent').val();
   var x = document.getElementById("Calculator");
if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
  var bar1 = new ldBar("#myItem1");
  var bar2 = document.getElementById('myItem1').ldBar;
  bar1.set(Math.floor(Math.random() * (97 - 80 + 1) + 80));
  window.setTimeout(function() {
    window.location.href = 'fireworks.php';
}, 100000000);
</script> -->
</div>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <script>

function showpercent(){
    window.location.href="percent.php";
    // $("#myItem1").show();
    $("#Calculator").display("none");
}

$(document).ready(function(){
    $("#Calculator").show();
    // var percent = random();
    // $("#percent").val(percent);
    // $('percent').val("99");
     $("#collapseExample").hide();
     $("#myItem1").hide();
    $("#name1").on("input", function(){
      var val = $("#name1").val();
      
      if(val.length > 2){
        // Print entered value in a div box
        $("#collapseExample").show("slow");
      }
    });

});


// function random() { // min and max included 
//     var max = 100;
//     var min = 83;
//   return Math.floor(Math.random() * (max - min + 1) + min);
// }

$('#Calculate').click(function(){
    var name1 = $('#name1').val();
    var name2 = $('#name2').val();
    var percent = $('#percent').val();

    $.ajax({
        url: "submit.php",
        method: "POST",        
        data: { 'mode': 'submit','name1':name1,'name2':name2,'relationship':percent,},
        success:function(response){
            // alert(response);
            if(response == "success"){
                // showpercent();
                // alert("success");
                showpercent();
            }else{
                // alert("fail");
            }
        }
    });
});


        // $('#name1').blur(function(){
        //     var n_len = $('#name1').val();
        //     alert(n_len.length);
        //     if(n_len.length > 2){
        //         alert("dskjfj");
        //         $('.collapse').collapse("show");
        //     }else{
        //         $('.collapse').collapse("hide");
        //     }
        // });
        
    </script>
  </body>
</html>