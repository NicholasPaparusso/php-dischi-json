<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PHP Dischi JSON</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
  
  <div id="app" class="main-wrapper">
    <div class="container d-flex justify-content-center">
      <div class="row">

        <div class="col-12 col-md-6 col-xl-4 my-5 d-flex justify-content-center"
        v-for="(cd,index) in cds " :key="index"
        @click.stop="this.counterCd = index"
        >
      
          <div
          class="np-card">
            <div class="image-container">
              <img :src="cd.poster" :alt="cd.title">
            </div>
            <span>{{cd.author}}</span>
            <span>{{cd.title}}</span>

            <div v-if="index === this.counterCd" class="cd-menu">
              <div class="np-card">
                <div class="image-container">
                <img :src="cd.poster" :alt="cd.title">
                </div>
                <span>{{cd.author}}</span>
                <span>{{cd.title}}</span>
                <span>{{cd.year}}</span>
                <span>{{cd.genre}}</span>
              </div>

              <div
              @click.stop="this.counterCd = '' "
              class="np-btn">x</div>

            </div>
          </div>

        </div>

      </div>

    </div>
  </div>

</body>

<script src="./js/main.js"></script>
</html>