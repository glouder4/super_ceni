$(document).ready(function(){
    $('#global_header-mobile_searcher-openner').click(function (){
       $('#global_header-mobile_searcher').addClass('show');
    });
    $(document).mouseup( function(e){ // событие клика по веб-документу
        var div = $( "#global_header-mobile_searcher" ); // тут указываем ID элемента
        if ( !div.is(e.target) // если клик был не по нашему блоку
            && div.has(e.target).length === 0 ) { // и не по его дочерним элементам
            $('#global_header-mobile_searcher').removeClass('show');
        }
    });

    $('#global_header-main_menu-search_btn').click(function (){
        $('#global_header-main_menu-searcher').addClass('show');
    });
    $('#hide_searcher').click(function (){
        $('#global_header-main_menu-searcher').removeClass('show');
    });

    $(window).on('load resize', function() {
        var $height = $(window).height();
        var $width = $(window).width();

        if($width < 576){
            $.each($('#partnership-slider .carousel-item'),function(){
                $(this).css('background-image','url('+$(this).attr('data-m_bg')+')');
            });
        }
        else{
            $.each($('#partnership-slider .carousel-item'),function(){
                $(this).css('background-image','url('+$(this).attr('data-bg')+')');
            });
        }
    });

    let adresses = [];
    $.ajax({
        url: '/get_map_data.php',
        method: 'get',
        dataType: 'json',
        success: function(data){
            adresses = data;
        }
    });

    //Загружаем карту
    ymaps.ready(function () {
        //рисуем карту
        var coordinate = "54.710162, 20.510137";
        var myMap = new ymaps.Map("sidemap", {
            // center: [coordinate[0],coordinate[1]],
            center: coordinate.split(','),
            zoom: 9,
            controls: ['zoomControl']
        });

        // переход карты к другим координатам
        function clickGoto(pos) {
            pos = pos.split(',');

            var mypos = [];
            mypos = [Number(pos[0]), Number(pos[1])];
            // переходим по координатам
            myMap.panTo(mypos, {
                flying: 1
            });

            return false;
        }

        //Выбор другого города
        $('.section_title').click(function () {
            coord = $(this).data('citycoord');
            //console.log(coord);
            clickGoto(coord);
            createDealersOnMap();
        });


        let counter_1 = 0;
        let counter_2 = 0;

        let _to; let block_to;
        $.each(adresses,function (i) {
            if(this.is_point == false){
                $('#list_of_adreses>#list_of_none_points>ul').append(`
                        <li data-coord="${this.coordinates}" data-id="${this.id}">${this.name}</li>
                    `).on('click', 'li' , function() {
                    let parent_id = $(this).attr('data-id');

                    $('#map  #list_of_adreses>#list_of_none_points').removeClass('show');
                    $('#map  #list_of_adreses>#list_of_none_points').hide();

                    $('#map  #list_of_adreses>#list_of_points').addClass('show');
                    $('#map  #list_of_adreses>#list_of_points').fadeIn();

                    $.each($('#map  #list_of_adreses>#list_of_points li'),function(){
                        if( $(this).attr('data-parent') != parent_id ) $(this).hide();
                        else $(this).show();
                    });
                });
            }
            else{
                $('#list_of_adreses>#list_of_points>ul').append(`
                        <li data-coord="${this.coordinates}" data-parent="${this.parent}" data-adress="${this.adress}" data-phone="${this.phone}" data-time_of_work="${this.time_of_work}">${this.name}</li>
                    `).on('click','li',function(){
                    myMap.geoObjects.removeAll();

                    coord = $(this).attr('data-coord');
                    coord = coord.split(',');
                    adr = $(this).val();

                    var myPlace = new ymaps.Placemark(
                        [coord[0], coord[1]],
                        {balloonContent: adr},
                        {
                            balloonPanelMaxMapArea: 0,
                            preset: 'islands#darkOrangeDotIcon'
                        }
                    );
                    myMap.geoObjects.add(myPlace);

                    $('#map  #list_of_adreses>#list_of_points').hide();
                    $('#map  #list_of_adreses>#list_of_none_points').show();

                    $('#map  #list_of_adreses>#list_of_none_points').addClass('show');
                    $('#map  #list_of_adreses>#list_of_points').removeClass('show');

                    $('#map  #list_of_adreses').removeClass('show');

                    myMap.setCenter(coord);

                    if( $("#shop_data-name").length > 0 ){
                        $("#shop_data-name")[0].innerText = $(this)[0].innerText.split(',').join(', ');
                        $('#shop_data-adress')[0].innerHTML = `<span>Адрес:</span> `+$(this).attr('data-adress');
                        $('#shop_data-time_of_work')[0].innerHTML = `<span>Время работы:</span> `+$(this).attr('data-time_of_work');
                        $('#shop_data-phone')[0].innerHTML = `<span>Телефон:</span> `+$(this).attr('data-phone');
                    }
                });





                //Актуально для страницы Магазины
                if( this.parent == 1 ) {
                    counter_1++;
                    _to = (counter_1 % 2 != 0) ? 1 : 2;
                    block_to = 1;
                }
                else if (this.parent == 2 ){
                    counter_2++;
                    _to = (counter_2 % 2 != 0) ? 1 : 2;
                    block_to = 2;
                }
                if( this.parent == 0 || this.parent == 1 ){
                    $('#collapse'+block_to+' ul.list_'+_to).append(`
                            <li data-coord="${this.coordinates}" data-parent="${this.parent}" data-adress="${this.adress}" data-phone="${this.phone}" data-time_of_work="${this.time_of_work}">${this.name}</li>
                        `).on('click','li',function(){
                        myMap.geoObjects.removeAll();

                        coord = $(this).attr('data-coord');
                        coord = coord.split(',');
                        adr = $(this).val();

                        var myPlace = new ymaps.Placemark(
                            [coord[0], coord[1]],
                            {balloonContent: adr},
                            {
                                balloonPanelMaxMapArea: 0,
                                preset: 'islands#darkOrangeDotIcon'
                            }
                        );
                        myMap.geoObjects.add(myPlace);

                        myMap.setCenter(coord);
                        if( $("#shop_data-name").length > 0 ) {
                            $("#shop_data-name")[0].innerText = $(this)[0].innerText.split(',').join(', ');
                            $('#shop_data-adress')[0].innerHTML = `<span>Адрес:</span> ` + $(this).attr('data-adress');
                            $('#shop_data-time_of_work')[0].innerHTML = `<span>Время работы:</span> ` + $(this).attr('data-time_of_work');
                            $('#shop_data-phone')[0].innerHTML = `<span>Телефон:</span> ` + $(this).attr('data-phone');
                        }
                    });
                }
            }
        })

        //создаем точки по элементам
        function createDealersOnMap() {
            myMap.geoObjects.removeAll();
            $('input[type=radio][name=coord]').removeAttr('checked');
            $.each(adresses,function () {
                if( this.is_point == true ){
                    coord = this;
                    coord = coord.coordinates.split(',');
                    adr = coord.name;
                    var myPlace = new ymaps.Placemark(
                        [coord[0], coord[1]],
                        {balloonContent: adr},
                        {
                            balloonPanelMaxMapArea: 0,
                            preset: 'islands#darkOrangeDotIcon'
                        }
                    );
                    myMap.geoObjects.add(myPlace);
                }
            });
        }

        createDealersOnMap();
    });

    $('#map #map-navigation>#show_list_of_adreses').click(function(){
        $('#map  #list_of_adreses').addClass('show');
        $('#map  #list_of_adreses>#list_of_none_points').addClass('show');
        $('#map  #list_of_adreses>#list_of_points').removeClass('show');

        $('#map  #list_of_adreses>#list_of_none_points').show();
        $('#map  #list_of_adreses>#list_of_points').hide();
    });
    $('#map #close_list').click(function(){
        if( $('#map  #list_of_adreses>#list_of_none_points').hasClass('show') ){
            $('#map  #list_of_adreses').removeClass('show');
        }
        else{
            $('#map  #list_of_adreses>#list_of_points').hide();
            $('#map  #list_of_adreses>#list_of_none_points').fadeIn();

            $('#map  #list_of_adreses>#list_of_none_points').addClass('show');
            $('#map  #list_of_adreses>#list_of_points').removeClass('show');
        }
    });
});