<!--IT15529732-->
<!DOCTYPE html>
<html>
  <head>
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style>
      td{
          padding: 20px;
      }
    </style>

    <script>
    //get csrf token value from CSRFToken cookie and insert it to the hidden input field
    function getcookie(cookieName)
    {
      var name = cookieName + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var cookieArray = decodedCookie.split(';');
      for(var i = 0; i <cookieArray.length; i++) {
          var c = cookieArray[i];
          while (c.charAt(0) == ' ') {
              c = c.substring(1);
          }
          if (c.indexOf(name) == 0) {
              alert(c.substring(name.length, c.length)); 
              var csrfvalue=c.substring(name.length, c.length);
              alert("csrfvalue="+csrfvalue);
              document.getElementById('csrftoken').setAttribute('value',csrfvalue);
          }
      }
      alert(document.cookie); 

    }
    </script>
  </head>
  <body onload="getcookie('CSRFToken')" style="background-color: LIGHTSALMON">
    <div class="jumbotron text-center" style="margin-bottom:0;background-color: INDIANRED;color: white">
      <div class="container" style="margin-top:30px" >
          <div class="row">
            <div class="col-sm-4" style="float: right">
            
          </div>
          <div class="col-sm-6" style="float: left">
            <h1 style="float: left;padding: 20px">R Bank</h1>
          </div>
            
          </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#" style="background-color: CRIMSON;color: white;font-size: larger;border-radius: 60%">Transaction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>    
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li> 
        </ul>
      </div>  
    </nav>

    <div class="container" style="margin-top:0px;background-color: LIGHTSALMON">
      <div class="row">
          <div class="col-sm-12">           
          <h2 style="text-align: center;color: BLACK;">Transaction</h2> 
          <form action="./classes/Transfer.php" method="post">
            <table border="0" align="center" style="background-color: SEASHELL">
              <tr>
                    <td>From Account</td>
                    <td><input type="number" name="from"/></td>
                </tr>
                <tr>
                    <td>To Account</td>
                    <td><input type="number" name="to"></td>
                </tr>
                <tr>
                    <td>Amount</td>
                    <td><input type="number" name="amount"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="csrftoken" id="csrftoken" value=""></td>
                </tr>
                <tr>
                  <td><input type="submit" class="btn btn-primary" id="submit_btn" value="Transfer"/></td>
                </tr>                   
            </table>
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>