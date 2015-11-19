 <div id="demo-container" style="
    height: inherit;
    background: none;
">
      <img class="image1" src="http://www.tisaneteas.com/images/demo1.jpg" width="24.5%" nopin="nopin"/>
      <img class="image2" src="http://www.tisaneteas.com/images/demo2.jpg" width="24.5%" nopin="nopin"/>
      <img class="image3" src="http://www.tisaneteas.com/images/demo3.jpg" width="24.5%" nopin="nopin"/>
      <img class="image4" src="http://www.tisaneteas.com/images/demo4.jpg" width="24.5%" nopin="nopin"/>
      <img class="image5" src="http://www.tisaneteas.com/images/demo5.jpg" width="24.5%" nopin="nopin"/>
      <img class="image6" src="http://www.tisaneteas.com/images/demo6.jpg" width="24.5%" nopin="nopin"/>
      <img class="image7" src="http://www.tisaneteas.com/images/demo7.jpg" width="24.5%" nopin="nopin"/>
      <img class="image8" src="http://www.tisaneteas.com/images/demo8.jpg" width="24.5%" nopin="nopin"/>
      <img class="image9" src="http://www.tisaneteas.com/images/demo9.jpg" width="24.5%" nopin="nopin"/>
      <img class="image10" src="http://www.tisaneteas.com/images/demo10.jpg" width="24.5%" nopin="nopin"/>
      <img class="image11" src="http://www.tisaneteas.com/images/demo11.jpg" width="24.5%" nopin="nopin"/>
      <img class="image12" src="http://www.tisaneteas.com/images/demo12.jpg" width="24.5%" nopin="nopin"/> 
    </div>
  
  <script type="text/javascript">
    // Need array of sidplayed images -- Always contains 12
    var displayedImages  = ["http://www.tisaneteas.com/images/demo1.jpg","http://www.tisaneteas.com/images/demo2.jpg","http://www.tisaneteas.com/images/demo3.jpg","http://www.tisaneteas.com/images/demo4.jpg","http://www.tisaneteas.com/images/demo5.jpg","http://www.tisaneteas.com/images/demo6.jpg","http://www.tisaneteas.com/images/demo7.jpg","http://www.tisaneteas.com/images/demo8.jpg","http://www.tisaneteas.com/images/demo9.jpg","http://www.tisaneteas.com/images/demo10.jpg","http://www.tisaneteas.com/images/demo11.jpg","http://www.tisaneteas.com/images/demo12.jpg"];
    
    // aray of undisplayed images 
    // To add more images simply add a comma to the end of the array followed by the image url in quotations
    var undisplayedImage = ["http://www.tisaneteas.com/images/demo13.jpg","http://www.tisaneteas.com/images/demo14.jpg","http://www.tisaneteas.com/images/demo15.jpg","http://www.tisaneteas.com/images/demo16.jpg","http://www.tisaneteas.com/images/demo17.jpg","http://www.tisaneteas.com/images/demo18.jpg","http://www.tisaneteas.com/images/demo19.jpg"];
    // Need to switch items in array, and replace current src
    // Rotate Image Based on Time
    var rotate_them = setInterval(function(){rotating()},1500); // Last input is frequency of switch image changes in milliseconds.
    
    
    function rotating() {
      // Find with image to switch out
      // Use math.floor on a random number between 1 &  12, grab "url"+number+'.jpg'
        var firstNumber = Math.floor(Math.random() * ((displayedImages.length -1) - 0)) + 0;
      
       // Find with image to switch in
      // Use math.floor on a random number between 1 &  7, grab "url"+number+'.jpg'
        var secondNumber = Math.floor(Math.random() * ((undisplayedImage.length -1) - 0)) + 0
      // Set up each card to be flipped
        var imageToBeSwapped = displayedImages[firstNumber];
        var newImage = undisplayedImage[secondNumber];
        displayedImages[firstNumber] = newImage; 
        undisplayedImage[secondNumber] = imageToBeSwapped;
      
         
        $(".image"+(firstNumber+1)).fadeOut(
          function(){
            $(".image"+(firstNumber+1)).attr('src', displayedImages[firstNumber]);
            $(".image"+(firstNumber+1)).fadeIn();
          }
        ); // end fadeOut                    
    }
    
  </script>
