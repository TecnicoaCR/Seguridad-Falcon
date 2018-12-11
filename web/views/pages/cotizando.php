<!DOCTYPE html>
<html lang="es">
<head>
  {% include 'views/partials/head.html' %}
</head>
<body>
  {% include 'views/partials/nav.html' %}

  {% block content %}{% endblock %}

  {% include 'views/partials/footer.html' %}

  <!-- Common scripts -->
  <script src="js/jquery-2.2.4.min.js"></script>
  <script src="js/common_scripts_min.js"></script>
  <script src="js/functions.js"></script>

  <!-- Specific script -->
  <script src="js/jquery.validate.js"></script>
  <script src="js/jquery.stepy.min.js"></script>
  <script src="js/quotation-validate.js"></script>

  <!-- Modernizr -->
  <script src="js/modernizr.js"></script>

    <!-- GOOGLE MAP -->
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script type="text/javascript" src="js/mapmarker.jquery.js"></script>
  <script type="text/javascript" src="js/mapmarker_func.jquery.js"></script>

</body>
</html>
