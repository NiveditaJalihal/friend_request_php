<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
  
        <div id="div1">
            <div id="div2">
                <input type="text" placeholder="first name" /><input type="text" id="div1" placeholder="Last name" />
                <button type="button" id="1" name="button" onclick="add()">Add</button><button type="button" id="100" onclick="">Remove</button>

            </div>
        </div>
   
    <script>
        var count1 = 0;
        var count2 = 100;
        function show() {


            alert("gfsdjf");
        }
        function add() {
            var d2 = document.getElementById("div2");
            var d3 = document.createElement("div");


            var d4 = document.createElement("input");
            d4.type = "text";
            d4.placeholder = "first name";

            var d5 = document.createElement("input");
            d5.type = "text";
            d5.placeholder = "Last name";


            var d6 = document.createElement("button");
            d6.innerHTML = '<button id="but' + count1 + '" onclick="add()">ADD</button>';
            
            
         //   var t = document.createTextNode("Add");
         //   d6.appendChild(t);
            var d7 = document.createElement("button");
            d7.innerHTML = '<button id="but' + count1 + '" onclick="remove()">remove</button>';

            d3.appendChild(d4);
            d3.appendChild(d5);
            d3.appendChild(d6);
            d3.appendChild(d7);

            d2.appendChild(d3);





        }

        function remove() {
            alert("remoove");
            var buttons = document.getElementsByTagName("button");
            var buttonsCount = buttons.length;
            for (var i = 0; i <= buttonsCount; i += 1) {
                buttons[i].onclick = function(e) {
                    alert(this.id);
                };
            }​​

     }









    </script>
    
    
    
    
    
    
    
    
    
     </body>
</html>
