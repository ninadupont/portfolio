<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Nina Lehtinen - A multimedia design student with an urge to create</title>
  <link rel="stylesheet" href="../build/css/reset.css">
  <link rel="stylesheet" href="../build/css/layout.css">
  <link rel="stylesheet" href="../build/css/_global.css">
  <link rel="stylesheet" href="../build/css/styles.css">
  <link rel="stylesheet" href="../build/css/treasure.css">
  <script defer src="../src/js/fontawesome-all.js"></script>
  <script src="../src/js/jquery-3.3.1.min.js"></script>
    <script src="../src/js/vue.js"></script>
  <link rel="stylesheet" href="../build/css/animate.css">
  <link href="https://fonts.googleapis.com/css?family=Dosis|Sacramento" rel="stylesheet">
</head>
<body>
<!-- modal indhold -->
  <script type="text/x-template" id="modal-template">
    <transition name="modal">
      <div class="modal-mask"  id="modal-template">
        <div class="modal-wrapper">
          <div class="modal-container">

            <!--close button-->
            <div class="modal-container__close">
              <div class="outer" @click="$emit('close')">
                <div class="inner">
                  <label>close</label>
                </div>
              </div>
            </div>
            <!--close button-->

            <!-- unfinished gallery -->
        <div class="modal-container__gallery">
            <img class="gallery-image" src="../src/images/gallery/fladfisk.jpg" alt="">
            <img class="gallery-image" src="../src/images/gallery/fladfisk.jpg" alt="">
            <img class="gallery-image" src="../src/images/gallery/fladfisk.jpg" alt="">
            <img class="gallery-image" src="../src/images/gallery/fladfisk.jpg" alt="">
            <img class="gallery-image" src="../src/images/gallery/fladfisk.jpg" alt="">
            <img class="gallery-image" src="../src/images/gallery/fladfisk.jpg" alt="">
            <img class="gallery-image" src="../src/images/gallery/fladfisk.jpg" alt="">
            <img class="gallery-image" src="../src/images/gallery/fladfisk.jpg" alt="">
        </div>


          </div>
        </div>
      </div>
    </transition>
  </script>
<!-- modal indhold slut-->

  <!-- treasure image with click -->
  <div id="treasure-modal">
    <div class="work__treasure">
      <img class="treasure" @click="showModal = true" src="../src/images/treasure.png" alt="">
    </div>
    <!-- use the modal component, pass in the prop -->
    <modal v-if="showModal" @close="showModal = false">
<!--modal content from template..... -->
    </modal>
  </div>



  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="../src/js/javascript.js" charset="utf-8"></script>
</body>
</html>
