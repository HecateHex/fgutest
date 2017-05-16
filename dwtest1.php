<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>頁面施工中</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/eCommerceStyle.css" rel="stylesheet" type="text/css">
<script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
        $(function() {
        $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) {
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).datepicker('setDate', new Date(year, month, 1));
                }
            });
        });
    </script>
</head>
<body>
<div id="mainWrapper">
  <header> 
    <!-- This is the header content. It contains Logo and links -->
    <!--<div id="logo"> <!-- <img src="logoImage.png" alt="sample logo"> --> 
      <!-- Company Logo text --> 
     <!-- LOGO </div> -->
  <!--   <div id="headerLinks"><a href="login.php" title="Login/Register">Login/Register</a></div> -->
  </header>
  <section id="offer"> 
    <!-- The offer section displays a banner text for promotions -->
    <h2>座位預約頁面</h2>
    <p>頁面施工中</p>
  </section>

  <div id="content">
    <section class="sidebar"> 
    <label for="startDate">Month select :</label>
    <input name="startDate" id="startDate" class="date-picker" />
    <!-- This adds a sidebar with 1 searchbox,2 menusets, each with 4 links -->
    </section>

    <section class="mainContent">
      <div class="productRow"><!-- Each product row contains info of 3 elements -->
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">空席位</p>
          <input type="button" name="button" value="預約" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">已預定</p>
          <input type="button" name="button" value="預約" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">空席位</p>
          <input type="button" name="button" value="預約" class="buyButton">
        </article>
      </div>
      <div class="productRow"> 
        <!-- Each product row contains info of 3 elements -->
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">空席位</p>
          <input type="button" name="button" value="預約" class="buyButton">
        </article>
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">已預定</p>
          <input type="button" name="button" value="預約" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">已預定</p>
          <input type="button" name="button" value="預約" class="buyButton">
        </article>
      </div>
      <div class="productRow">
        <article class="productInfo"> <!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">空席位</p>
          <input type="button" name="button" value="預約" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">已預定</p>
          <input type="button" name="button" value="預約" class="buyButton">
        </article>
        <article class="productInfo"><!-- Each individual product description -->
          <div><img alt="sample" src="eCommerceAssets/images/200x200.png"></div>
          <p class="price">空席位</p>
          <input type="button" name="button" value="預約" class="buyButton">
        </article>
      </div>
    </section>
  </div>
  <footer> 
    <!-- This is the footer with default 3 divs -->
    <!--
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius sem neque. Integer ornare.</p>
    </div>
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam varius sem neque. Integer ornare.</p>
    </div>
    <div class="footerlinks">
      <p><a href="#" title="Link">Link 1 </a></p>
      <p><a href="#" title="Link">Link 2</a></p>
      <p><a href="#" title="Link">Link 3</a></p>
    </div>
    -->
  </footer>
</div>
</body>
</html>
