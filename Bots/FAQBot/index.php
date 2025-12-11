<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>faq bot</title>

    <!-- css file link -->
    <link rel="stylesheet" href="index.css">

    <!-- font awesome icon cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/67a566bc825083258e113e83/1ijkh5td1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
<body>
    
        <div class="desc">
            
            <button id="init"><img src="" class="csimg"><p class="needhelp">Need Help?</p></button>

        </div>

    


    <div id="test" style="position: fixed;top: 4rem;right: 8rem;display: none;">
        <div class="child" id="chatbot">
            <div class="header">
                <div class="h-child">
                    <img src="csimg.PNG" alt="avatar" id="avatar">
                    <div>
                        <span class="name">Customer Service</span>
                        <br>
                        <span style="color:lawngreen">online</span>
                    </div>
                </div>
                <div>
                    <button class="refBtn"><i class="fa fa-refresh" onclick="initChat()"></i></button>
                </div>
            </div>

            <div id="chat-box">

            </div>
        </div>
    </div>

    <!-- js file  -->
    
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <script src="index.js"></script>


</body>
</html>