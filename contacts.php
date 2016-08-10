<?
/*Template name: Контакты*/
get_header(); ?>

<main class="mdl-layout__content mdl-color--grey-100 contacts">
  <div class="mdl-grid contacts__back">
    <div class="contacts_info mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
       <h1><?the_title();?></h1>
       <a href="#name">Заказать консультацию</a>
       <form id="order_form"">
          <div class="mdl-textfield mdl-js-textfield name">
            <input class="mdl-textfield__input" type="text" id="name"  name="name" class=" mdl-color--white" placeholder="ВАШЕ ИМЯ">
            <label class="mdl-textfield__label" for="name"></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield email">
            <input class="mdl-textfield__input" type="email" id="email"  name="email" placeholder="ВАШ EMAIL">
            <label class="mdl-textfield__label" for="email"></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield phone">
            <input class="mdl-textfield__input" type="text" id="phone" name="phone" placeholder="ВАШ ТЕЛЕФОН">
            <label class="mdl-textfield__label" for="phone"></label>
          </div>
          <input type="hidden" name="admin_email" value="<?= get_option( 'admin_email' )?>">
         <input type="submit" value="Отправить" class="more">
         <div class="out"></div>
       </form>
    </div>
    <div class="mdl-grid">

      <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone address">
        <p><?the_field('address_1');?></p>
        <a href="tel:<?the_field('phone_1');?>"><?the_field('phone_1');?></a></div>
      <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone address">
        <p><?the_field('address_1');?></p>
        <a href="tel:<?the_field('phone_2');?>"><?the_field('phone_2');?></a>
      </div>
    </div>
  </div>
  <div class="mdl-grid maps">
      <div class="map-item mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone"  id="map-1"></div>
      <div class="map-item mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone"  id="map-2"></div>
  </div>
</main>
<script type="text/javascript">
        function initMap() {

          // Specify features and elements to define styles.
          var styleArray = [
            {
              featureType: "all",
              stylers: [
               { saturation: -150 }
              ]
            }
          ];

          // Create a map object and specify the DOM element for display.
          var map = new google.maps.Map(document.getElementById('map-1'), {
            center: {lat: 56.84094577268383, lng: 60.61207249999998},
            scrollwheel: false,
            // Apply the map style array to the map.
            styles: styleArray,
            zoom: 17
          });
          var markerImage = new google.maps.MarkerImage(
            '/wp-content/themes/nashestvie/img/marker.png',
            new google.maps.Size(54,78)
          );
          var marker = new google.maps.Marker({
            icon: markerImage,
            map: map,
            position: {lat: 56.84094577268383, lng: 60.61207249999998},
            title: 'Нашествие, студия танца',
            description: 'г. Екатеринбург, ул. Карла-Либкнехта 22, оф. 218'
          });
          var infowindow = new google.maps.InfoWindow({
           content: 'г. Екатеринбург, ул. Карла-Либкнехта 22, оф. 218 '
          });
          google.maps.event.addListener(marker, 'click', function() {
              infowindow.open(map,marker);
          });

           var styleArray_store = [
            {
              featureType: "all",
              stylers: [
               { saturation: -150 }
              ]
            }
          ];

          // Create a map object and specify the DOM element for display.
          var map_store = new google.maps.Map(document.getElementById('map-2'), {
            center: {lat: 56.82305027280126, lng: 60.56677},
            scrollwheel: false,
            // Apply the map style array to the map.
            styles: styleArray,
            zoom: 17
          });
          var markerImage_store = new google.maps.MarkerImage(
            '/wp-content/themes/nashestvie/img/marker.png',
            new google.maps.Size(54,78)
          );
          var marker_store = new google.maps.Marker({
            icon: markerImage,
            map: map_store,
            position: {lat: 56.82305027280126, lng: 60.56677},
            title: 'Нашествие, студия танца',
            description: 'г. Екатеринбург, ул. Посадская 16А,оф. 19В'
          });
          var infowindow_store = new google.maps.InfoWindow({
           content: 'г. Екатеринбург, ул. Посадская 16А, оф. 19В'
          });
          google.maps.event.addListener(marker_store, 'click', function() {
              infowindow_store.open(map_store,marker_store);
          });

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"
<?php get_footer(); ?>
