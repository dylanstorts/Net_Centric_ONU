<html>
    <head>
        <meta charset="UTF-8">
        <title>ScriptJava</title>        
        <script language="JavaScript">
        function dollar_convert(){
            document.converter.euro.value = document.converter.dollar.value * 0.680;
            document.converter.yen.value = document.converter.dollar.value * 112.36;
        }
        
        function euro_convert(){
            document.converter.dollar.value = document.converter.euro.value * 1.470;
            document.converter.yen.value = document.converter.euro.value * 165.192;
        }
        
        function yen_convert(){
            document.converter.dollar.value = document.converter.yen.value * 0.0089;
            document.converter.euro.value = document.converter.yen.value * 0.00605;
        }
        </script>       
    </head>
    <body>

        <form name="converter">
            
            <table>
                <tr>
                    <td>US Dollar</td><td> <input type="text" name="dollar" value="" onchange="dollar_convert()"/> </td>
                </tr>
                <tr>
                    <td>Euro</td><td> <input type="text" name="euro" value="" onchange="euro_convert()"/> </td>
                </tr>
                <tr>
                    <td>Yen</td><td> <input type="text" name="yen" value="" onchange="yen_convert()"/> </td>
                </tr>
                <tr> <input type="button" value="Calcutrate" name="button"/> </tr>
            </table>
            
        </form>
        
    </body>        
</html>
