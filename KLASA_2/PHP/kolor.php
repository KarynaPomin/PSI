</html>
<head>
    <style>
        div {height: 100vh;
                width: 50%;}

        content {display: flex;
                height: auto;
                width: auto;
                flex-direction: column;}

        body {margin: 0px;
                padding: 0px;
                display: flex;
                flex-direction: row;}

        div:nth-of-type(1) {display: flex;
                            align-items: center;
                            justify-content: center;}

        button {align-self:flex-end;}
    </style>
</head>
<body>
    <div style="background-color:blueviolet;">
        <content>
            <input type='text' id="tekst">
            <button onclick="kolor()">OK</button>
        </content>

    </div>
    <div style="background-color:chocolate;" id="zmianakolorow">
        
    </div>


    <script>
        function kolor(){
        
        x = document.getElementById('tekst').value;
        console.log(x);

        document.getElementById('zmianakolorow').style.backgroundColor = x;
        }
    </script>
</body>
</html>
