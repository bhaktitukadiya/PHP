<html lang="en">
<head></head>

<input type="text" id="num">
<br><br>
<button onclick="myFunction(0)"> 0 </button>
<button onclick="myFunction(1)"> 1 </button>
<button onclick="myFunction(2)"> 2 </button>
<button onclick="myFunction(3)"> 3 </button>
<button onclick="myFunction(4)"> 4 </button>
<button onclick="myFunction(5)"> 5 </button>
<button onclick="myFunction(6)"> 6 </button>
<button onclick="myFunction(7)"> 7 </button>
<button onclick="myFunction(8)"> 8 </button>
<button onclick="myFunction(9)"> 9 </button>
<input type="button" onclick="myFunction(10)" value="10">

<script>
    function myFunction(value) { 
            
        document.getElementById('num').value =  value;
        // document.getElementById('num').value +    
    }
</script>
</html>
