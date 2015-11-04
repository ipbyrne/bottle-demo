<style type="text/css">
  body { margin: 0; padding: 0; height: 100%; }
  #coke
  {
      width: 156px;
      height: 600px;
      overflow: auto;
      position:relative;
      margin: auto;
      overflow-x: hidden;
  }
  #bottle-mask {
      position:absolute;
      margin: .5% auto;
      left: 0;
      right: 0;
      z-index:1;
  }
  .label-div {
      position: absolute;
      top: 153px;
      width: 1000px;
      height: 250px;
      z-index: 2;
      background-image: url(label.png);
      background-size: 325px 250px;
      background-repeat: repeat-x;
  }
  #bottle-overlay {
      position: absolute;
      margin: .5% auto;
      left: 0;
      right: 0;
      z-index: 3;
  }
  #pusher {
      width: 325px;
      height: 500px;
      position: relative;
      z-index: 4;
  }
  #hero-products-container {
    height: 375px;
  }
</style>

<div id="hero-products-container">
    <div id="hero-products-layer">
        <div id="hero-products-splash">
          <img id="bottle-mask" src="mask.svg" width="156" height="467"/>
          <!--<img id="bottle-label" src="http://ipbyrne.github.io/bottle-demo/label.png"/>-->
          <img id="bottle-overlay" src="overlay.png" width="156" height="467" />
          <div id="coke">
            <div class="label-div">
            </div>
            <div id="pusher"></div>
          </div>
        </div>
    </div>
</div>
<br>
<br>
<br>

 <script type="text/javascript">
    (function(){
          var box=document.getElementById('coke');

          function infScroll(){
              box.scrollLeft   += 1;

              if(box.scrollLeft>=325){
                 box.scrollLeft = 0;
              }
            window.requestAnimationFrame(infScroll);
          }
          window.requestAnimationFrame(infScroll);
      }());
  </script>    