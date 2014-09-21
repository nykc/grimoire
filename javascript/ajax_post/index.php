<html>
  <head>
    <title>Ajax Post to PHP and Get Return Data</title>
    <script language="JavaScript" type="text/javascript">
      function ajax_post() {
        // Create our XMLHttpRequest Object
        var hr = new XMLHttpRequest();
        // Create some variables we need to send to our PHP file
        var url = "my-parse-file.php";
        var fn = document.getElementById("firstName").value;
        var ln = document.getElementById("lastName").value;
        var vars = "firstname="+fn+"&lastname"+ln;
        hr.open("POST", url, true);
        // Set content type header information for sending url encoded variables in the request
        hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // Access the onreadystatechange event for the XMLHttpRequest object
        hr.onreadystatechange = function() {
          if(hr.readyState == 4 && hr.status == 200) {
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
          }
        }
        // Send the data to PHP now... and wait for response to update the status div
        hr.send(vars); // Actually execute the request
        document.getElementById("status").innerHTML = "processing..."; // usually processing is replaced with animated loader.
      }
    </script>
  </head>
  <body>
    <h2>Ajax Post to PHP and Get Return Data</h2>
    Your First Name: <input id="firstName" name="firstName" type="text" />
    <br /><br />
    Your Last Name: <input id="lastName" name="lastName" type="text" />
    <br /><br />
    <input name="myBtn" type="submit" value="Submit Data" onClick="javascript:ajax_post();">
    <br /><br />
    <div id="status"></div>
  </body>
</html>
