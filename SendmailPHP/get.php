<!DOCTYPE html>
<html>

<body>

    <h1 style="color: green;">
            GeeksforGeeks
        </h1>

    <select id="mySelect">
        <option>football</option>
        <option>Basketball</option>
        <option>Hockey</option>
        <option>Swimming</option>
    </select>

    <p>
    Click the button to
    deselect options.
</p>

    <button onclick="myFunction()">
    Click me</button>

    <script>
        //Here we delselect all the options
        var data = 0;
        const getOptions = document.getElementById("mySelect");
        getOptions.selectedIndex = data;

        function myFunction() {
            data = data + 1;
            
            if(getOptions.selectedIndex <= 2){
                document.getElementById("mySelect").selectedIndex = data;
            }
            console.log(getOptions.selectedIndex)

            
        }

        //here we are taking value of index
        // function yourFunction() {
        //     var x = document.getElementById(
        //     "mySelect").selectedIndex;
        
        //     document.getElementById(
        //     "demo").innerHTML = x;
        // }
    </script>

    <button type="button" onclick="yourFunction()">
        Display index
    </button>

    <p id="demo"></p>

</body>

</html>
