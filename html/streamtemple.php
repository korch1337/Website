/*
<style type="text/css">
    .alpha_wrapper {
            padding-top: 8px;
            float: left;
            position: relative;
            color: #fff;
            width: 96px;
            text-align: center;
    }
    .name {
            white-space: nowrap;
            color: rgb(0, 255, 0);
            font-size:10px;
            width: 50%;
            margin: 0px auto;
            padding-bottom: 2px;
            font-family: Verdana;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }
    .skull {
            background: transparent url(images/skulls/redskull.gif) no-repeat;
            position: absolute;
            top: 31px;
            left: 57px;
            width: 11px;
            height: 11px;
            width: 50%;
            margin: 0px auto;
    }
</style> */
<div style="float:center;text-align:center;margin: 0 auto;text-shadow:0 0 5px #fff;font-family:Georgia,serif;font-weight:strong;font-size:35px;"></div>
<!-- Your temple image must have tiles width/height 32px! -->
<!-- There is 'streamtemple/temple.png', if you keep your temple image in other format or on other host, edit this.
DO NOT FORGET TO EDIT THIS PART OF LINE BELOW: 'width:600px;height:380px', there must be width and height of your temple image!
-->
<div style="background-image:url('streamtemple/temple.png');width:600px;height:380px;box-shadow:0 0 20px #000;font-family:Arial, sans-serif;border:2px solid black;margin:5px auto;text-align:center;overflow:hidden;position:relative;" id="templeAnimationWindow"></div>

<script type="text/javascript">
    // -- CONFIG --
   
    // url to stream file - it's NOT full path to that file like 'c:\xampp\...'
    var playerJsonInfoURL = 'streamtemple/stream.json';
   
    // BEST VALUE IS SAME AS INTERVAL IN GLOBALEVENTS.XML
    var updateIntervalInSeconds = 1;
   
    // It's NOT same position as center of stream in LUA, this position depends on your temple image on www!
    // set it to position that is in game when you look at top-left corner of your temple image (+/- 1 after tests on www)
    //  -- example:
    // HARD PART: If your image on www shows 16x8 tiles of 'game screen' and left-top corner positon is '1000,1000' then..
    // What is center-position and width/height for LUA script config? [if it's on floor 7..]
    // YES! It's: Position(1008, 1004, 7), width: 8 (8*2+1 = 17, more then your image!), height: 4 (4*2+1 = 9, more ..!)
    // ---
    // but don't worry, if you set it to (1000,1000,7) and set width 15 and height 15 it will work too! (just use more CPU then it should)
    var leftTopCornetX = 32339;
    var leftTopCornetY = 32218;
   
    // adjust these values (from -32 to 32, it's value in pixels) to make your character stand at same position as in game
    // you must compare image on www and in game by yourself :)
    var imageCorrectionX = 18;
    var imageCorrectionY = 7;
   
    // images URL
    var itemImagesURL = 'http://item-images.ots.me/1030/';
   
    // outfit generation script URL, you need your own outfit images host, how to create:
    // http://otland.net/threads/gesior2012-make-your-own-outfits-items-country-flags-hosting-recommended.210844/
    var outfitImagesURL = 'outfit.php';
   
    // -- END OF CONFIG --
   
    function disableSelection(target)
    {
        if (typeof target.onselectstart!="undefined")
        {
            target.onselectstart=function(){return false}
        }
        else if (typeof target.style.MozUserSelect!="undefined")
        {
            target.style.MozUserSelect="none";
        }
        else
        {
            target.onmousedown=function(){return false}
        }
        target.style.cursor = "default";
    }

    disableSelection(document.body);

    var uid = Math.floor(Math.random()*(10000000-1))+10000000;
    function handler(data)
    {
        setTimeout(update, updateIntervalInSeconds * 1000);
        try { var obj = eval("(" + data + ")"); }
        catch(err) {}
        var s = '';
        for (x in obj)
        {
            var k = obj[x];
            s += '<div style="z-index:'+(k[1]-20)+';position:absolute;top:'+(((k[1]-leftTopCornetY)*32)+imageCorrectionY)+'px;left:'+(((k[0]-leftTopCornetX)*32)+imageCorrectionX)+'px;width:64px;height:64px;background:transparent url(';
            if(k[3] == 0)
            {
                s += itemImagesURL + k[11]+'.gif';
            }
            else
            {
                var mountID = parseInt(k[9]);
                if(mountID > 0)
                {
                    mountID += 65536;
                }
                s += outfitImagesURL + '?id='+k[3]+'&addons='+k[4]+'&head='+k[5]+'&body='+k[6]+'&legs='+k[7]+'&feet='+k[8]+'&mount='+mountID+'&direction='+(parseInt(k[10])+1);
            }
            s += ') no-repeat right bottom;">' +
                '<div class="alpha_wrapper">' +
                    '<div class="name" style="margin: 5px 19px">'+x.replace(/(&nbsp)/g,' ')+'</div>' +
                    '<div style="margin-left: 34px; margin-top: -7px; width: 25px; height: 2px; background-color: rgb(0, 191, 0); border: 1px solid black;"></div>';
            if(k[12] >= 3)
            {
                // known problem: there is no white skull image in Gesior2012, if you got it, you can put it in your /images/skulls/
                s += '<div class="skull" style="background-image:url(images/skulls/'+(k[12] == 3 ? 'white' : (k[12] == 4 ? 'red' : 'black')) + 'skull.gif);">&nbsp;</div>';
            }
                s += '</div></div>';
        }
        document.getElementById('templeAnimationWindow').innerHTML = s;
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
        xhr.open("GET", playerJsonInfoURL + "?"+Math.random(), true);
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
</script>

