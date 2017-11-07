<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/maskedinput.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!-- SmoothScroll -->
<script src="js/minified/SmoothScroll.min.js"></script>
<!-- Classie -->
<script src="js/minified/classie.min.js"></script>
<!-- One Page Nav -->
<script src="js/minified/jquery.nav.min.js"></script>
<!-- Animated Headline -->
<script src="js/minified/animatedHeadline.min.js"></script>
<!-- AjaxChimp -->
<script src="js/minified/jquery.ajaxchimp.min.js"></script>
<!-- Swipebox -->
<script src="js/minified/jquery.swipebox.min.js"></script>
<!-- Expandable Gallery on 2 Block Column -->
<script src="js/minified/expandableGallery.min.js"></script>
<!-- Counter Up -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
<script src="js/minified/jquery.counterup.min.js"></script>
<!-- Quicksand JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/minified/jquery-css-transform.min.js"></script>
<script src="js/minified/jquery-animate-css-rotate-scale.min.js"></script>
<script src="js/minified/jquery.quicksand.min.js"></script>
<!-- Headhesive -->
<script src="js/minified/headhesive.min.js"></script>
<!-- ScrollReveal -->
<script src="js/minified/scrollReveal.min.js"></script>
<!-- Custom JS -->
<script src="js/urip.js"></script>
<script src="js/gmaps.js"></script>
<!-- Expandable Navigation Menu -->
<script src="js/minified/expandableNav.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>





<script type="text/javascript">

    $("#phone").mask("+7 (999) 999-9999");

</script>

<script type="text/javascript">
    $("a.addopttobasket").click(function(){
        var id=$(this).attr('value');
        $.get("add2basket.php", {id:id}, success);
        function success(data){

            $('div.modal-body span').html("Опция успешно добавлена в корзину");


        }
    });

    $("a.addtobasket").click(function () {
        var id=$(this).attr('value');
//                           $.get("/Pled(adm)/add2basket.php", {id:id, name:name}, onbasketsuccess);
//
//            function onbasketsuccess(data) {
////                $("div#modsect").addClass("visible").removeClass("hidden");
////                $('div.modsect span').html("Плед "+id+" успешно добавлен в корзину");
//                $('div.lazy').slick({
//                    lazyLoad: 'progressive',
//                    slidesToShow: 3,
//                    slidesToScroll: 1,
//                    autoplay: true,
//                    autoplaySpeed: 2000,
//                    setTimeout: 1
//                });
//              $('div.modal-body span').html("Плед "+name+" успешно добавлен в корзину");
//                            $('#basketmodal').modal({keyboard:false, show:true});

        $.get("add2basket.php", {id:id , name:name}).done(function(data) {

            $('div.modal-body span').html("Плед "+name+" успешно добавлен в корзину");
            $('#basketmodal').modal({keyboard:false, show:true});
        });


    });




    function plusgoods(plusid){
        var id=plusid;

        var quant=$("#q"+plusid).text();
        var summ=($("input[name='hid"+plusid+"']").val())*1;
        var sum=($("span.cart-total-right").text())*1;
        $.get("add2basket.php", {id:id}, plusbasketsuccess);
        function plusbasketsuccess(data){
            quant++;
            var summa=quant*summ;
            $("#q"+plusid).text(quant);
            $("td#cart"+plusid).html(summa+" &#8381;");

            $("span.cart-total-right").text(sum+=summ);

        }
    }
    function minusgoods(minusid){
        var id=minusid;
        var quant=$("#q"+minusid).text();
        var summ=$("input[name='hid"+minusid+"']").val();
        var sum=$("span.cart-total-right").text();
        $.get("delete_from_basket.php", {id:id}, minusbasketsuccess);
        function minusbasketsuccess(data){
            if(quant<=1){
                $("tr#slide"+minusid).remove();
                $("span.cart-total-right").text(sum-=summ);
            }else{
                quant--;
                var summa=quant*summ;
                $("#q"+minusid).text(quant);
                $("td#cart"+minusid).html(summa+" &#8381;");
                $("span.cart-total-right").text(sum-=summ);
            }
        }
    }


</script>


<script type="text/javascript">


    // var map = new GMaps({
    //     div: '#map',
    //     lat: 59.853241,
    //     lng: 30.217696,
    //     zoom: 17


    // });
    // map.addMarker({
    //     lat: 59.853472,
    //     lng: 30.220056,
    //     title: 'Pledodel'
    // });


</script>

<script type="text/javascript">
    $('div.lazy').slick({
        lazyLoad: 'progressive',
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 500,
        setTimeout: 1
    });
</script>
<script type="text/javascript">
    var h_hght = 100; // высота шапки
    var h_mrg = 0;    // отступ когда шапка уже не видна

    $(function(){

        var elem = $('#modsect');
        var top = $(this).scrollTop();

        if(top > h_hght){
            elem.css('top', h_mrg);
        }

        $(window).scroll(function(){
            top = $(this).scrollTop();

            if (top+h_mrg < h_hght) {
                elem.css('top', (h_hght-top));
            } else {
                elem.css('top', h_mrg);
            }
        });

    });
</script>
<script type="text/javascript">
    var height=	$(window).height()-100;
    $("div.modal-dialog").css("height", height);

</script>
<script type="text/javascript">
    $("input[name='shipping']").change(function(){
        var ordp=parseFloat($("#orderprice").text());
        if($("#ship-metro").prop('checked')){
            $("#shippingtool").removeClass('hidden');
            $("label[for='address']").html('Метро <span>*</span>');
            $("input[name='address']").prop('required', true);
            var pr=parseFloat(200);
            $("#shipprice").html(pr+ ' <span> &#8381;</span>');
        }
        if($("#ship-spb").prop('checked')){
            $("#shippingtool").removeClass('hidden');
            $("label[for='address']").html('Адрес в Санкт-Петербурге <span>*</span>');
            $("input[name='address']").prop('required', true);
            $("#shipprice").html('300 <span> &#8381;</span>');
            var pr=parseFloat("300");
        }
        if($("#ship-world").prop('checked')){
            $("#shippingtool").removeClass('hidden');
            $("label[for='address']").html('Почтовый адрес <span>*</span>');
            $("input[name='address']").prop('required', true);
            $("#shipprice").html('0 <span> &#8381;</span><span>*</span>');
            $("#paylater").prop({disabled: true});
            var pr=parseFloat("0");
        }
        else{
            $("#paylater").removeProp('disabled');
        }

        if($("#samovivos").prop('checked')){
            $("#shippingtool").addClass('hidden');
            $("#shipprice").html('0 <span> &#8381;</span>');
            $("input[name='address']").removeProp('required');
            var pr=parseFloat("0");
        }

        var apr=pr+ordp;
        $("#allprice").html(apr+" &#8381;");

        $("input[name='summa']").val(apr);

    });


</script>