<html>
<head>
<title>Random Number Generator</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
	<div class='container'>
	<div class='row '>
		<h3>A Simple Number Game</h3>
			<div class='well col-md-6'>
				<div class='btn btn-success free' id='number'>9</div>
				<div class='btn btn-success free' id='number1'>9</div>
				<div class='btn btn-success free' id='number2'>9</div>
			</div>
			<div class='col-md-6 '>
				<img src='images/smiley-106.gif' width='100px' height='100px' id='won' style='display:none' title='Great Job'/>
				<img src='images/impatient1.gif' width='100px' height='100px' id='shit' style='display:none' title='Just Missed It'/>
				<img src='images/Facepalm-smiley-animated.gif' width='100px' height='100px' id='oops' style='display:none' title='Oops Try Again'/>
			</div>
	
			</div>
	<div id='final' ><a class='btn btn-danger' onclick="gamestart('');clickCounter()">Start </a> <button class='btn btn-danger' id='result' onclick="myStopFunction();result();">Stop </button></div></div>		
	<div id='reset' style='display:none;text-align:center;color:red;'>"Just chill have a cofee" Life will Refill in next 10 min bye.. </div>
	
	
	</div>
	
	
<style>
.free {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    font-size: -webkit-xxx-large;
    padding: 60px;
}
</style>	
	
	
<script>
/* Function Random generator*/

function gamestart(option){

 window.myVar = setInterval(function(){ myTimer() }, 100);

	}
	
	/*Number generator*/
function myTimer() {
	var x = Math.floor((Math.random() * 10) );
	var y = Math.floor((Math.random() * 9) );
	var z = Math.floor((Math.random() * 8));
	
    var d = document.getElementById("number").innerHTML = x;
    var d = document.getElementById("number1").innerHTML = y;
    var d = document.getElementById("number2").innerHTML = z;
}

/*Stop Timer*/
function myStopFunction() {
    clearInterval(myVar);
}
/*Result Function */
function result(){
	document.getElementById("won").style.display = "none";
	document.getElementById("shit").style.display = "none";
	document.getElementById("oops").style.display = "none";
	var x = document.getElementById("number");
	x = x.textContent;
    var y = document.getElementById("number1");
    y = y.textContent;
    var z = document.getElementById("number2");
    z = z.textContent;
    	
    /*Message Alert */
    if(x==y && y==z){
		alert('Hurrey! You Won');
		document.getElementById("won").style.display = "block";
	}else if(x==y || y==z || z==x){
		alert('Just Missed it ');
		document.getElementById("shit").style.display = "block";
	}else{
		alert('Oops you missed');
		document.getElementById("oops").style.display = "block";
	}
}
<!-- Function for checking clicks  -->
function clickCounter() {
    if(localStorage.clickcount<1){
		myStopFunction();
    document.getElementById('final').style.display ='none';
    document.getElementById('reset').style.display ='block';
   setTimeout(Reset, 600000)
    }
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)-1;
        } else {
            localStorage.clickcount = 2;
        }
        document.getElementById("result").innerHTML = "Life Remaining " + localStorage.clickcount ;
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
<!-- Function for reset the localstorage  -->
function Reset(){
localStorage.clear();
 window.location='http://localhost/rahul/random_int/';
	}

</script>

</body>
</html>
