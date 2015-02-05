<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>
</head>
<body>
 
<div id="dialog" title="Confirmation and price">
  <p>Enter char id: </p>
<form type="submit" action="sellchar.php" method="get">
ID: <input type="text" name="id">
<input type="submit" value="Auction">
</form>
</div>
