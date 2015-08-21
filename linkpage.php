<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script type='text/javascript'>
          
           q=prompt('have you seen the criminal and can enter his details such as gender and height? Y/N');
          if(q=='Y' || q=='y')
          {
              document.getElementById('myForm').submit();
          }
          else if(q=='N'|| q== 'n')
          {
              window.alert('your complaint has been registered successfully.Keep checking your email for updates.Thank you!');
          }
          else
          {
             window.alert('Invalid input.Please enter Y/N for yes/no.');
          }
          </script>
    </head>
    <body>
        <form id="myform" action="details.php">
            </form>
    </body>
</html>