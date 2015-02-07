<div style="width:485px;height:975px;box-shadow:0 0 20px #000;font-family:Arial, sans-serif;border:2px solid black;margin:5px auto;text-align:center;overflow:hidden;position:relative;" id="templeAnimationWindow3"></div>

<script type="text/javascript">
var URL = ;
var updateIntervalInSeconds = 1;

function handler(data)
    {
        setTimeout(update, updateIntervalInSeconds * 1000);
        //HTML SOM SKA ANVÄNDA KODEN SOM SKICKAS FRÅN SERVERN!
        
        
        
        document.getElementById('templeAnimationWindow3').innerHTML = function(){update()};
    }


  function update()
    {
        var xhr;
        try
        {
            xhr=new XMLHttpRequest();
        }
        catch (e)
        {
            try
            {
                xhr=new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e)
            {
                try
                {
                    xhr=new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch (e)
                {
                    alert("Your browser does not support AJAX!");
                    return false;
                }
            }
        }
        xhr.open("GET", URL + "?"+Math.random(), true);
        xhr.onreadystatechange=function()
        {
            // status 4 = query realized without problems
            if(xhr.readyState==4)
            {
                // if query failed for some reason, it will stop animation :(
                handler(xhr.responseText);
            }
        }
        xhr.send(null);
    }
    update();
  
  alertContents();
</script>
